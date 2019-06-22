<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 6:14 PM
 */

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$courseTitle = $_POST['CourseTitle'];
$courseDesc = $_POST['courseDescription'];
$profInfo = $_POST['profInfo'];
$courseCost = $_POST['courseCost'];
$courseLoc = $_POST['courseLocation'];


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newCourse = addNewCourse($courseTitle, $courseDesc, $profInfo, $courseCost, $courseLoc);

//insert is completed successfully.
if($newCourse == 1){
    echo "<h1>Course has been registered succesfully!!</h1>";
}
else{
    echo "<h1>Addition of new course failed</h1>";
}

?>