<?php
{
    $conn=mysqli_connect("localhost","root","","new otp");
    $sql12="SELECT *FROM `fd`; ";
    $result12=$conn->query($sql12);
    $num=mysqli_num_rows($result12);
    
    while($num>0)
    
    {
        $row1=$result12->fetch_assoc();
            echo "City:".$row1["city"]. '<br>';
            echo "Devision:".$row1["dev"]. '<br>';
            echo "Answer of First Question is:".$row1["q1"]. '<br>';
            echo "Answer of Second Question is:".$row1["q2"]. '<br>';
            echo "Description:".$row1["q3"]. '<br>';
            echo "This Data was submitted on:".$row1["date"]. '<br><br>';
            $num--;
    }
}
?>