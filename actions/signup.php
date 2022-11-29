<?php 
    require_once "connect.php";
    $sql = "INSERT INTO user(fisrstname,name,email,password) VALUES(:firstname,:name,:email,:password)";
    $dataBinded=array(
        ':firstname'=> $_POST['firstname'],
        ':name'=> $_POST['name'],
        ':email'=> $_POST['email'],
        ':password'=> $_POST['password']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);


    echo $_POST['email']; 
    echo $_POST['password']; 
    echo $_POST['first_name']; 


    header('Location:index.php');
?>