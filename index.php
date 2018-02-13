<?php
session_start();
//get the model or connect to the support code so that the variables can function
require_once 'model.php';

// we have to have some way to figure out if we have an action, we need to acknowledge GET it or POST, which are the two options of method in PHP.

if(filter_input(INPUT_GET, 'action')) {
$action = filter_input(INPUT_GET, 'action');
}
else {
    $action = filter_input(INPUT_POST, 'action');
    
}
// the above is just accounting for if there was a request.
 
// Control structures
switch($action) {
    default:
    	include 'view/header.php';
        include 'view/home.php';
        include 'view/footer.php';
        break;
    
    case "about":
     if ($action == 'about') {    
       
       include 'view/header.php';
       include('view/about.php');
       include 'view/footer.php';
    }
    break;

    case "friends":
     if ($action == 'friends') {    
       
       include 'view/header.php';
       include('view/friends.php');
       include 'view/footer.php';
    }
    break;

        case "yoga":
     if ($action == 'yoga') {    
       
       include 'view/header.php';
       include('view/yoga.php');
       include 'view/footer.php';
    }
    break;
        case "bodytreatment":
     if ($action == 'bodytreatment') {    
       
       include 'view/header.php';
       include('view/bodytreatment.php');
       include 'view/footer.php';
    }
        case "meditation":
     if ($action == 'meditation') {    
       
       include 'view/header.php';
       include('view/meditation.php');
       include 'view/footer.php';
    }
       case "sound":
     if ($action == 'sound') {    
       
       include 'view/header.php';
       include('view/sound.php');
       include 'view/footer.php';
    }
    break;

           case "rates":
     if ($action == 'rates') {    
       
       include 'view/header.php';
       include('view/rates.php');
       include 'view/footer.php';
    }
    break;
        
        case "classes":
     if ($action == 'classes') {    
       
       include 'view/header.php';
       include('view/classes.php');
       include 'view/footer.php';
    }
    break;

    case "products":
     if ($action == 'products') {    
       
    include 'view/header.php';
    include('view/products.php');
    include 'view/footer.php';
    }
    break;

    case "workshops":
     if ($action == 'workshops') {    
       
       
    include('view/workshops.php');
    }
    break;

    case "contact":
     if ($action == 'contact') {    
       
    include 'view/header.php';
    include('view/contact.php');
    include 'view/footer.php';
    }
    break;
        case "login":
        

     if ($action == 'login') {   
         if($_SESSION['loggedin'] == 2){
             include('view/cpanel.php');
         } else {
         
         
       $password = filter_input(INPUT_POST, 'password');
        $name = filter_input(INPUT_POST, 'username');     
        $user = verifyLogin();
        
        if(password_verify($password, $user['password']) && $name == $user['username']){
         
         $_SESSION['loggedin'] = 2;
         include('view/cpanel.php');
         
         
    } else {
        echo 'Incorrect credentials, please try again';
         include('view/login.php');}
     }
 }
    break;

    case "workshop_edit":
     if ($action == 'workshop_edit') {    
       
       
    include('view/workshop_edit.php');
    }
    break; 
    
    case "newworkshop":
       include('view/new_workshop.php');
       exit;
    break;
    
    case "Update2":
       $worskshopid =  filter_input(INPUT_POST, 'workshopID');
       $workshopName = filter_input(INPUT_POST, 'workshopName', FILTER_SANITIZE_STRING); 
       $workshopImage = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
       $workshopLink = filter_input(INPUT_POST, 'workshopLink', FILTER_SANITIZE_STRING); 

      
        edit_workshop($worskshopid, $workshopName, $workshopImage, $workshopLink);
           
        include('view/cpanel.php');
           
        exit;
        
    break;
    case "Add2":
       $workshopName = filter_input(INPUT_POST, 'workshopName', FILTER_SANITIZE_STRING);
       $workshopImage = filter_input(INPUT_POST, 'workshopImage', FILTER_SANITIZE_STRING);
       $workshopLink = filter_input(INPUT_POST, 'workshopLink', FILTER_SANITIZE_STRING);
   

    	add_workshop($workshopName, $workshopImage, $workshopLink);


           include('view/cpanel.php');
           
           exit;
        
    break;
    case "Delete":
       $workshopID =  filter_input(INPUT_POST, 'workshopID');
       
           delete_workshop($workshopID);
           
           include('view/cpanel.php');
           
           exit;
        
    break;
    case "rate_edit":
     if ($action == 'rate_edit') {    
       
       
    include('view/rates_edit.php');
    }
    break;
    case "Update":
       $serviceID =  filter_input(INPUT_POST, 'serviceID');
       $serviceName = filter_input(INPUT_POST, 'serviceName', FILTER_SANITIZE_STRING); 
        

      
        edit_rate($serviceID, $serviceName);
           
        include('view/cpanel.php');
           
        exit;
        
    break;
    case "Delete Service":
       $serviceID =  filter_input(INPUT_POST, 'serviceID');
       
           delete_rate($serviceID);
           
           include('view/cpanel.php');
           
           exit;
        
    break;
    case "newService":
       include('view/new_rate.php');
       exit;
    break;
    case "Add":
       $serviceName = filter_input(INPUT_POST, 'serviceName', FILTER_SANITIZE_STRING);
      
   

    	add_service($serviceName);


           include('view/cpanel.php');
           
           exit;
        
    break;
    case "pwchange":
            if ($action == 'pwchange') {
           include('view/pwchange.php');
            }
           exit;
        
            break;
    case "changepw":
       $oldPassword = filter_input(INPUT_POST, 'oldPassword', FILTER_SANITIZE_STRING);
       $newPassword1 = filter_input(INPUT_POST, 'newPassword1', FILTER_SANITIZE_STRING);
       $newPassword2 = filter_input(INPUT_POST, 'newPassword2', FILTER_SANITIZE_STRING);
       $user = verifyLogin();
       
        if(password_verify($oldPassword, $user['password'])) {
            if($newPassword1 == $newPassword2) {
                $newPassword1 = password_hash($newPassword1, PASSWORD_DEFAULT);
       			changepw($newPassword1);
            } else { echo 'Passwords do not match';}
        } else { echo 'Old password is incorrect'; }
       
       include('view/cpanel.php');
           
           exit;
        
            break;
    case 'logout':
    if ($action == 'logout') {
        session_destroy();
        $_SESSION['loggedin'] = 1;
        header ("location: index.php");
        exit();
        break;
    }

}
?>