<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 5:44 PM
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
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<?php require_once("config.php");
?>
<h1 align="center">Add New Course</h1>
<hr>
<div style="margin-left: 75px">
    <form class="form-horizontal" name="addCourse" style="margin-left: 100px;" method="post" action="processNewCourse.php">
        <div class="form-row">
            <div class="form-group">
                <label for="courseTitle" class="control-label col-sm-3">Course Title</label>
                <div class="col-sm-6">
                    <input type="text" id="CourseTitle" name="CourseTitle" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="courseDescription" class="control-label col-sm-3">Course Description</label>
                <div class="col-sm-6">
                    <textarea rows="5" id="courseDescription" name="courseDescription" class="form-control" required></textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="profInfo" class="control-label col-sm-3">Professor Name</label>
                <div class="col-sm-6">
                    <input type="text" id="profInfo" name="profInfo" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="courseCost" class="control-label col-sm-3">Course Cost</label>
                <div class="col-sm-6">
                    <input type="text" id="courseCost" name="courseCost" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="courseLocation" class="control-label col-sm-3">Course Location</label>
                <div class="col-sm-6">
                    <input type="text" id="courseLocation" name="courseLocation" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group" style="margin-top:2%;">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info btn-md" style="width: 120px">Add New Course</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>