<?php
    $title = "Delete Info";
    $md = "delete one row";
include 'header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="fname"  value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>">
<br>
City:<br>
<input type="text" name="city" value="<?php echo $row['city']; ?>">
<br>
Email:<br>
<input type="text" name="groupid" value="<?php echo $row['groupid']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'class='btn btn-primary'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>
