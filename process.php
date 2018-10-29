<?php
  require 'prince.php';

 $errors=[];

if (isset($_POST['email'])) {
    if (empty($_POST['email'])) {
        $errors[]='email field is empty';
    }else{
        if (is_string($_POST['email'])) {
            if (strlen($_POST['email'])>10) {
                if (strlen($_POST['email'])<50) {
                    //email valid
                 
                }else{
                    $errors[] = 'email field must be less than 100 charachters';
                }
            }else{
                $errors[] = 'email field must be more than 10 charachters';
            }
        }else{
            $errors[] = 'email field must be a string';
        }
    }
}else{
    $errors[] = 'email field is required';
}

if (isset($_POST['message'])) {
    if (empty($_POST['message'])) {
        $errors[]='message field is empty';
    }else{
        if (is_string($_POST['message'])) {
            if (strlen($_POST['message'])>20) {
                if (strlen($_POST['message'])<5000) {
                    //message valid
                 
                }else{
                    $errors[] = 'message field must be less than 5000 charachters';
                }
            }else{
                $errors[] = 'message field must be more than 20 charachters';
            }
        }else{
            $errors[] = 'message field must be a string';
        }
    }
}else{
    $errors[] = 'message field is required';
}
if (count($errors)==0) {
    $_SESSION['success'] = 'Email successfully sent..';
    header("location:contact.php");
  }else{
     $_SESSION['errors']=$errors;
    header("location:contact.php");
  }