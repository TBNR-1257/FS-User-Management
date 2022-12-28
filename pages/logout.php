<?php 

    session_start();

    if ( isset( $_SESSION['user'] ) ){
        // deletes user session data
        unset ( $_SESSION['user'] );

        //redirect user back to index
        header ('Location: /');
        exit;

    } else {
        // redirect to login page
        header('Location: /login');
        exit;
    }
    
?>