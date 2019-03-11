<?php
    echo 'Processing...';

    if(isset($_GET['name'])) {
        echo 'Buton: Your name is '.$_GET['name'];
    } 
    
    if(isset($_GET['name1'])) {
        echo 'Get Form: Your name is '.$_GET['name1'];
    } 

    if (isset($_POST['name2'])) {
        echo 'Post Form: '.$_POST['name2'];
    }

    
?>