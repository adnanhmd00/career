<?php 
// include('connection.php');
if(isset($_POST['upload'])){
    $target= "uploads/".basename($_FILES['cv']['name']);
    $db = mysqli_connect('localhost', 'root', 'asdf1234', 'files');

     $cv = $_FILES['cv']['name'];
     $name = $_POST['name'];
     $text = $_POST['text'];

     $sql = "INSERT INTO upload(name, text, cv) VALUES ('$name', '$text', '$cv')";
     mysqli_query($db, $sql);

     if(move_uploaded_file($_FILES['cv']['tmp_name'], $target)){
         $msg = "Uploaded";
     }else{
         $msg = "Failed";
     }
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="files.php" method="post" enctype="multipart/form-data">
<!-- <input type="hidden" name="size" value="100000"> -->
    Select image to upload:
    <input type="text" name="name">
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <input type="file" name="cv" id="fileToUpload">
    <input type="submit" value="Upload Image" name="upload">
</form>

</body>
</html>