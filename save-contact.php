<?php
include('db.db.php');
if(isset($_POST['submit'])){
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    if ($name=="" or $email=="" or $mobile=="" or $subject=="" or $message=="" ){
        
    echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
        exit();
    }
    $insert ="insert into contact (`name`,`email`,`mobile`,`subject`,`message`) values ($name,$email,$mobile,$subject,$message)";
    
    
        
        $run = mysqli_query($con, $insert);
        if($run){
            
            
            echo"<script language='javascript'>alert('contact inserted successfilly')</script>";
        }
        
        
    
    }

?>