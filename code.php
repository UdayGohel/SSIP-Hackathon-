<?php
try{
if(isset($_POST['save_radio']))

    $ans1=$_POST['exampleRadios'];
    $ans2=$_POST['exampleRadios1'];
    $ans3=$_POST['answer3'];

$conn=mysqli_connect("localhost","root","","new otp");
$sql2="INSERT INTO `fd` (`city`, `dev`, `q1`, `q2`, `q3`,`date`) VALUES ('Surat' , 'Jahangirpura','$ans1', '$ans2', '$ans3',current_timestamp())";
$res=mysqli_query($conn,$sql2);
if($res)
{
    header("location:lastpage.html");
}
} catch (Exception $e) {
    echo "Message could not be sent.";
}
?>