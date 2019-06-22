<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 5:56 PM
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
<?php
require_once("config.php");
$crn = $_GET['id'];
$allStudents = fetchAllStudents($crn);
$courses = fetchThisCourse($crn)
?>

<h1 align="center" style="font-family: Bree Serif; color: purple;">Students Registered for Course <?php foreach ($courses as $course){print "<strong>".$course['course']."</strong>";} ?></h1>
<hr>
<div style="margin-left: 20px; margin-right: 20px">
    <!-- Table goes in the document BODY -->
    <table class="table table-hover table-striped">
        <thead>
        <!-- display user details header  -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Email</th>
        </thead>
        <tbody>
        <?php
        foreach ($allStudents as $student) { ?>
            <tr>
                <td><?php print $student['fName']; ?></td>
                <td><?php print $student['lName']; ?></td>
                <td><?php print $student['address']; ?></td>
                <td><?php print $student['email']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
