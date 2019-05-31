<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="..//css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Get</title>
</head>
<body background="../css/bg.png">

<div id='cssmenu'>
<ul>
   <li><a href='../index.html'><span>Home</span></a></li>
      <li class='active has-sub'><a href='#'><span>Form</span></a>
      <ul>
         <li class='has-sub'><a href='../menu/get.html'><span>Get</span></a>
         </li>
         <li class='has-sub'><a href='../menu/post.html'><span>Post</span></a>
         </li>
         <li class='has-sub'><a href='../menu/file_upload.html'><span>File Upload</span></a>
         </li>
      </ul>
   </li>
      <li class='active has-sub'><a href='#'><span>Cookies</span></a>
      <ul>
         <li class='has-sub'><a href='../menu/enabled_disabled.html'><span>Enabled/Disabled</span></a>
         </li>
         <li class='has-sub'><a href='../menu/create_retrieve.html'><span>Create/Retrieve</span></a>
         </li>
         <li class='has-sub'><a href='../menu/modify_delete.html'><span>Modify/Delete</span></a>
         </li>
      </ul>
   </li>
         <li class='active has-sub'><a href='#'><span>Sessions</span></a>
      <ul>
         <li class='has-sub'><a href='../menu/start.html'><span>Start</span></a>
         </li>
         <li class='has-sub'><a href='../menu/get_modify.html'><span>Get/Modify</a>
         </li>
         <li class='has-sub'><a href='../menu/destroy.html'><span>Destroy</span></a>
         </li>
      </ul>
   </li>
    <li class='active has-sub'><a href='#'><span>Date/Time</span></a>
      <ul>
         <li class='has-sub'><a href='../menu/today_is.html'><span>Today</span></a>
         </li>
         <li class='has-sub'><a href='../menu/timezone.html'><span>Timezone</span></a>
         </li>
         <li class='has-sub'><a href='../menu/timestamp.html'><span>Timestamp</span></a>
         </li>
      </ul>
   </li>
    <li class='active has-sub'><a href='#'><span>Date/Time</span></a>
      <ul>
         <li class='has-sub'><a href='../menu/reserved.html'><span>Reserved</span></a>
         </li>
      </ul>
   </li>
   <li class='last'><a href='../menu/phpinfo.html'><span>Phpinfo</span></a></li>
</ul>
</div>

      <?php
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $name = $_FILES['fileToUpload']['name'];
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        else{
        	echo "<img src=".$target_dir."/".$name." />";
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                echo $_FILES["fileToUpload"]["error"];
            }
        }
        
      ?>



</body>
<html>
