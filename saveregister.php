<?php
include "db.php";
$name=$_POST['name'];
$gender=$_POST['gender'];
$file=$_FILES['file']['name'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$password=$_POST['password'];
$role=$_POST['role'];
$domain=$_POST['domain'];


$query="insert into signup(name,gender,dob,city,phoneno,email,password,role,domain,address,profile_pic) 
values('$name','$gender','$dob','$city','$mobno','$email','$password','$role','$domain',
'$address','$file'
)";
if(mysqli_query($con,$query))
{
?>
<script>
alert("registration Successfully");
window.location="registration.php";
</script>
<?php
}

?>