<?php
    session_start();

    if ($_POST['form_name'] == 'login' 
        && (!isset($_POST['email']) || !isset($_POST['password'])))
    {
        $_SESSION['login_status'] = False;
        header('Location: login.php');
        exit();
    }
    else if ($_POST['form_name'] == 'login')
    {
        if ($_POST['email'] == 'itskevm' && $_POST['password'] == 'password') {
            $_SESSION['username'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['login_status'] = True;
            header('Location: index.php');
            exit();
        }
        else {
            $_SESSION['validation_fail'] = True;
            $_SESSION['login_status'] = False;
            header('Location: login.php');
            exit();
        }
    }
    if ($_POST['form_name'] == 'kill') {
        $_SESSION['login_status'] = False;
        unset($_SESSION['username'], $_SESSION['password']);
        session_unset();
        header('Location: login.php');
        exit();
    }
?>