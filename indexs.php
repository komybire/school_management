<?php 

?>

<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="upload.php">
<input type="file" name="file">
<input type="submit" value="upload">
</form>
</body>
</html>
<?php 
$files=scandir("upload");
for($a=2;$a<count($files);$a++){
	
	?>
	<p>
	<a downloads="<?php echo $files[$a]?>"href="upload/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>
</p>

<?php
}