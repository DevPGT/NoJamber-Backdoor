<?php
//error_reporting(0);
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
	  $exp=explode('.',$file_name);
	  $das=end($exp);
      $file_ext=strtolower($das);
      $expensions= array("php","php5","php7");
      if(in_array($file_ext,$expensions)=== true){
         $errors[]="Extension blocked by system !";
      }
      /*
      if($file_size > 100000000000){
         $errors[]='File size must be excately 100 MB';
      }
      */
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
		 $url_atual = "http://".$_SERVER[HTTP_HOST];
         echo "<h1><center><a href='".$url_atual."/backdoor/files/".$file_name."'>DOWNLOAD LINK</a></h1></center>";
      }else{
         print_r($errors);
      }
   }
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <body>
	  <br>
	  <center>
     <h1 class="jumbotron">NoJamber Uploader Central.</h1><br>
	  <fieldset>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" class="btn btn-primary" name="file">
         <input type="submit" class="btn btn-success" value="Upload"/>
      </form>
      </fieldset>

   </body>
</html>