<?php
{
    $admin_id=$_POST['loginid'];
    $admin_pass=$_POST['Pass'];
    // echo $admin_id;
    // echo $admin_pass;
    
    if($admin_id=='DSP123'&&$admin_pass=='admin@123')
    {
        header("location:admin.php");
    }
    else
    {
            echo "Invalid";
    }
}
?>