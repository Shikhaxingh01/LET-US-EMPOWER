<?php include "db.php";
$id=$_GET["id"];
$name="";
$dob="";
$email="";
$mobno="";
$gender="";
$res=mysqli_query($con,"select * from std where id=$id");
while($row=mysqli_fetch_array($res))
{
$name=$row["name"];
$dob=$row["dob"];
$email=$row["email"];
$mobno=$row["mobno"];
$gender=$row["gender"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class=col-sm-3></div>
    <div class=col-sm-6>
    <center><h1>Registration Form</h1><center>
    <div class="modal-body" style="font-size:20px;border:2px solid  #adb5bd;background: #f8f9fa">
    <form  method="post">
    <div class="form-group">
    <label>Name</label>
<input type="text" name="name" class="form-control" placeholder="enter name here " value="<?php echo $name; ?>">

</div>
<div class="form-group">
<label>DOB</label>
<input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>"/>

</div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control"
     value="<?php echo $email; ?>" placeholder="Enter email">
    
  </div>
  <div class="formgroup">
<label>Mobile Number</label>
<input type="number" name="mobno" class="form-control" placeholder="enter contact here" value="<?php echo $mobno; ?>">

</div>
<div class="formgroup">
<lable>Gender</lable>
   <span class="form-control">
   <input type="radio" name="gender" value="<?php echo $gender; ?>"/>Male
   <input type="radio" name="gender" value="<?php echo $gender; ?>""/>Female
   </span>
    </div>
    <br>
  
  <button type="submit" name="update"class="btn btn-success">Update</button>&nbsp;&nbsp;&nbsp; 
  
  
</form>   
</div>    <div>
              <div class=col-sm-3></div>
              <div>
               

</body>
<?php
if(isset($_POST["update"]))
{
    mysqli_query($con,"update std set name='$_POST[name]',dob='$_POST[dob]',email='$_POST[email]',mobno='$_POST[mobno]',gender='$_POST[gender]' where id=$id");
if(mysqli_query)
{
    ?>
    <script>
    alert("table updated successfully");
    </script>
    <?php
}
?>
<script type="text/javascript">
    window.location="register.php";
    </script>
<?php
}
?>
</html>
