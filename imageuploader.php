<?php
$file_upload="true";
$file_up_size=$_FILES['file_up'][size];
echo $_FILES[file_up][name];
if ($_FILES[file_up][size]>5000000) //designate size by bytes
{$msg=$msg."Fail. Your file size cannot exceed 5MB.<BR>";
$file_upload="false";}
$file_name=$_FILES[file_up][name];
$add="media/$file_name"; //everything will be placed in the media folder
if($file_upload=="true"){
if(move_uploaded_file ($_FILES[file_up][tmp_name], $add)){
//File accepted
echo "<p>Your file has been uploaded to Pythagoras.";
}else{echo "Fail.";}
}else{
echo $msg;
} ?>
