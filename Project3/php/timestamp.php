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
            $d=mktime(8, 46, 26, 11, 11, 2001);
            echo "Created date is " . date("Y-m-d H:i:sa", $d);
            ?>

</body>
<html>
