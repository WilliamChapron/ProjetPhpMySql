<?php 

    require_once "connect.php";
    $sql = "INSERT INTO user(firstname,name,email,password) VALUES(:firstname,:name,:email,:password)";
    $dataBinded=array(
        ':firstname'=> $_POST['firstname'],
        ':name'=> $_POST['name'],
        ':email'=> $_POST['email'],
        ':password'=> $_POST['password']
    );
    // if (isset($_POST['firstname']) AND isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password'])){
    //     $pre = $pdo->prepare($sql);
    //     $pre->execute($dataBinded);
    // }

//     echo $_POST['email']; 
//     echo $_POST['password']; 
//     echo $_POST['firstname']; 
//     echo $_POST['name']; 
    
// ?>