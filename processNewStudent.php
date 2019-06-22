<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 6:14 PM
 */

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$address = $_POST['address'];
$email = $_POST['email'];
$crn = $_GET['id'];


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newStudent = registerNewStudent($fname, $lname, $address, $email, $crn);

//insert is completed successfully.
if($newStudent == 1){
    echo "<h1>Student has been registered succesfully!!</h1>";
}
else{
    echo "<h1>Student registration for course failed</h1>";
}

?>