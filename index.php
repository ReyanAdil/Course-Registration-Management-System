<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 5:18 PM
 */
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        Student Course Registration System
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<?php require_once("config.php");
?>
    <h1 align="center" style="font-family:  Bree Serif; color: Purple; margin-top: 80px">Welcome to Course Registeration Management System</h1>
    <hr>
    <div style="margin-left:400px">
        <div class="form-row">
                <div class="col-sm-3">
                    <a href="displayAllCourses.php" class="btn button btn-primary">Display All Courses</a>
                </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3">
                <a href="addNewCourse.php" class="btn button btn-primary">Add a New Course</a>
            </div>
        </div>
    </div>

</body>
</html>

