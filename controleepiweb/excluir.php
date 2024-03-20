<?php
    include 'conecta.php';
    $matricula = $_GET['matricula'];
    $sql = "DELETE FROM funcionario WHERE matricula=$matricula";
    if (mysqli_query($conn,$sql)) {
        echo "<script language= 'javascript' type='text/javascript'>
                window.location.href='index.php';
                </script>";
    }
?>