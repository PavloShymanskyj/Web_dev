<?php require_once("connection.php"); ?>

<?php
    if(isset($_POST['id'])){
        $query =mysqli_query($con,"DELETE FROM compTable WHERE id=".$_POST['id']."");
    }
?>

<div class=table>
    <table class="compTable">
        <style>
            .userTable {
                width: 100%;
                color: #000;
            }

            .userTable,
            .userTable th,
            .userTable tr,
            .userTable td {
                text-align: left;
                border: 1px dashed #000;
                border-collapse: collapse;
            }

            .table {
                box-shadow: 0 0 3px 0 #002088;
                padding: 10px;
                border-radius: 3px;
            }
        </style>

        <tr>
            <th>Повне ім'я</th>
            <th>Електронна пошта</th>
            <th>Ім'я користувача</th>
            <th>Видалити</th>
        </tr>
        <?php   
        $query =mysqli_query($con,"SELECT * FROM compTable");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbfullname=$row['name'];
                    $dbemail=$row['email'];
                    $dbusername=$row['username'];
                    $dbid=$row['id'];
                    if($dbusername!='administrator'){
                        echo '<tr>
                                <td>'.$dbfullname.'</td>
                                <td>'.$dbemail.'</td>
                                <td>'.$dbusername.'</td>
                                <td>І
                                    <form action="" method="post">
                                        <input type="submit" name="id" value="'.$dbid.' ">
                                    </form>
                                </td>
                             </tr>';
                    }
                }    
            }
        ?>
    </table>
</div>
