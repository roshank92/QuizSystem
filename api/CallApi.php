<?php
/**
 * Created by PhpStorm.
 * User: karwalkar
 * Date: 3/19/2016
 * Time: 10:28 PM
 */
include_once "../services/LoginService.php";
if(isset($_POST['service'])&&isset($_POST['method'])&&is_ajax()){
    $method=$_POST['method'];
    $service=$_POST['service'];
    switch($service){
        case "LoginService":
            switch($method){
                case "AuthenticateUser":
                    $loginObj=new LoginService();
                    $loginObj->authenticateUser();
                    break;
            }
            break;
        case "TestService":

            break;
        default:

    };

}

function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
?>