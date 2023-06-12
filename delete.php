<?php
include "db.php";
$id=$_GET["id"];
$query="delete from std where id=$id";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert(" <?php echo $query;?> record deleted successfully");
    window.location="register.php";
    </script>