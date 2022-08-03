<?php
session_start();
if(!isset($_SESSION['uid']))
{
    header("location:index.php");
}
include(".../hms/doctor/manage-patient.php");

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<div class="container">
<div class="row"
     <div class="col-md-12">
<?php
$docid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from tblpatient where Docid='$docid' ");
$cnt=1;
while($row=mysqli_fetch_array($sql)){
    
?>
  <td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['PatientName'];?></td>
<td><?php echo $row['PatientContno'];?></td>
<td><?php echo $row['PatientGender'];?></td>
<td><?php echo $row['CreationDate'];?></td>
<td><?php echo $row['UpdationDate'];?>
</td>  
 
    <?php } ?>
</div>

