<?php 

	include("connect/connection.php");

  if (isset($_POST['update'])) {

    $id=$_POST['uid'];
    $title=$_POST['utitle'];
    $description=$_POST['udescription'];
    $fileToUpload=$_POST['ufileToUpload'];

    $sql="UPDATE `product` SET `title`='$title',`description`='$description',`image_name`='$fileToUpload' WHERE id='$id'";
    $result=mysqli_query($con,$sql);

    if ($result==true) {
      header("Location:blog-list.php");
    }else{
      echo "Problem when updating";
    }
  }


?>




<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: red;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Write Your Post</h3>

<div>

  <?php 
    include("connect/connection.php");
    $id=$_GET['id'];
    $sql="SELECT*FROM product WHERE id='$id'";

    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){

  ?>

  <form action="" method="post" enctype="multipart/form-data">
    <label for="fname">Title</label>
    <input type="text" name="utitle" placeholder="Your name.." value="<?php echo $row['title']; ?>">

    <input type="hidden" name="uid" value="<?php echo $row['id']; ?>">

    <label>Description</label>
<!--     <input type="text" name="description" placeholder="Your last name.."> -->

        <textarea rows="20" class="tinymce" cols="163" type="text" name="udescription" placeholder="Please type broad about the Blog"><?php echo $row['description']; ?></textarea> <br>

    <label>Insert image</label><br>
    <!-- <input type="file" id="lname" name="image_name"> -->
    <input type="file" name="ufileToUpload" id="fileToUpload" value="<?php echo $row['image_name']; ?>">

    <input type="submit" value="Update Data" name="update">
  </form>

<?php }} ?>

</div>



  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="plugin/tinymce/tinymce.min.js"></script>
  <script src="plugin/tinymce/init-tinymce.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>