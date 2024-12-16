<?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];

    $message= $_POST['message'];


    if ($name=="" or $message==""){



        echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
        exit();
    }

    {



    }


    $insert_images ="insert into feedback_ins(name,message) values ('$name','$message')";



        $run_images = mysqli_query($con, $insert_images);
        if($run_images){


            echo"<script language='javascript'>alert(' successfilly Changed')</script>";
        }






}


?>
