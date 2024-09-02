<?php

if(isset($_POST['btn-send'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Msg = $_POST['msg'];

    if(empty($Name) || empty($Email) || empty($Subject) || empty($Msg)){
        header('Location: index.php?error');
        exit();
    } else {
        $to = "rayaneraynesw@gmail.com";
        $headers = "From  $Email" ;
        if(mail($to, $Subject, $Msg, $headers)){
            header('Location: index.php?done');
            exit();
        } else {
            header('Location: index.php?error#n');
            exit();
        }
    }
}

?>
