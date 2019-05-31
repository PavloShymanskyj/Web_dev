<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Lab</title>
</head>
<body background="css/bg.png">

<div id='cssmenu'>
<ul>
   <li><a href='../index.html'><span>Home</span></a></li>
      <li class='active has-sub'><a href='#'><span>DataBase</span></a>
      <ul>
         <li class='has-sub'><a href='menu/get.html'><span>Connect</span></a>
         </li>
         <li class='has-sub'><a href='menu/post.html'><span>Create DataBase</span></a>
         </li>
         <li class='has-sub'><a href='menu/file_upload.html'><span>Create Table</span></a>
         <li class='has-sub'><a href='menu/file_upload.html'><span>Create Data</span></a>
         <li class='has-sub'><a href='menu/file_upload.html'><span>Read Data</span></a>
         <li class='has-sub'><a href='menu/file_upload.html'><span>Update Data</span></a>
         <li class='has-sub'><a href='menu/file_upload.html'><span>Delete Data</span></a>
         </li>
      </ul>
   </li>
      
</div>

   Demo connection to DataBase using MySQLi in procedural style:​ <​br​ > <?php  $servername = ​$_POST​ [​"DB"​]; 
   $username = ​$_POST​ [​"DBuser"​];  
   $password = ​$_POST​ [​"DBpass"​]; 
   $conn = mysqli_connect($servername, $username, $password); 
   if (!$conn) {​ 
      die(​"Connection failed: "​ . mysqli_connect_error());       
   }
    echo ​"Connected successfully"​ ;  ?>



</body>
<html>
