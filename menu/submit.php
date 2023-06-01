<?php
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        echo 'Not connected to a server';
    }
    if(!mysqli_select_db($con, 'firstdb')){
        echo 'Database not connected';
    }
    $Name = $_POST('username');
    $Email = $_POST('email');

    $sql = 'INSERT INTO mydb (name,email) VALUES ("$Name","$Email")';
    if(!mysqli_query($conn,$sql)){
        echo 'Not inserted';
    }else{
        echo 'Inserted successfully';
    }
    header("refresh:2 url=session.html");
?>