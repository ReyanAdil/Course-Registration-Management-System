<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 5:44 PM
 */
$crn = $_GET['id'];
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        Student Course Registration System
    </title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<?php require_once("config.php");
?>
<h1 align="center" style="font-family: Bree Serif; color: purple;">Registration for course</h1>
<hr>
<div style="margin-left: 75px">
    <form class="form-horizontal" name="addCourse" style="margin-left: 100px;" method="post" action="processNewStudent.php?id=<?php print $crn?>">
        <!--Row for First Name-->
        <div class="form-row">
            <div class="form-group">
                <label for="firstName" class="control-label col-sm-3">First Name</label>
                <div class="col-sm-6">
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="John" required>
                </div>
            </div>
        </div>
        <!--Row for Last Name-->
        <div class="form-row">
            <div class="form-group">
                <label for="lastName" class="control-label col-sm-3">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe" required>
                </div>
            </div>
        </div>
        <!--Row for Address-->
        <div class="form-row">
            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address" placeholder="NYC" required>
                </div>
            </div>
        </div>
        <!--Row for Email-->
        <div class="form-row">
            <div class="form-group">
                <label for="email" class="control-label col-sm-3">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="john@xyz.com" required>
                </div>
            </div>
        </div>
        <div class="form-group" style="margin-top:2%;">
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-info btn-md" style="width: 120px">Register</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>