<?php 
// cek apakah form telah disubmit
if (isset($_POST["submit"])) {
	//form tealh disubmit, tampilkan nilai form
	echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
	echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <title> Belajar PHP </title>
</head>
<body>
<h1>Upload File</h1>
   <form action="index.php" method="post" enctype="multipart/form-data">
   <p> Nama File : <input type="text" name="nama_file"></p>
   <p> Upload File : <input type="file" name="file_upload"></p>
   <p> <input type="submit" name="submit" value=Proses Upload></p>
   </form>
</body>
</html>   