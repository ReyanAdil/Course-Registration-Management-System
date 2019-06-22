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
    <link rel="stylesheet" href="style.css"/>
</head>
<body class="container">
<?php require_once("config.php");
$allcourses = fetchAllCourses();
?>

    <h1 align="center">Course Information</h1>
    <hr>
    <div style="margin-left: 20px; margin-right: 20px">
<!-- Table goes in the document BODY -->
        <table class="table table-hover table-striped">
            <thead>
            <!-- display user details header  -->
            <th>CRN</th>
            <th>Course Title</th>
            <th>Course Description</th>
            <th>Professor Information</th>
            <th>Course Cost</th>
            <th>Course Location</th>
            <th>Registered Students</th>
            <th>Register</th>
            </thead>
            <tbody>
            <?php
            foreach ($allcourses as $course) { ?>
                <tr>
                    <td><?php print $course['CRN']; ?></td>
                    <td><?php print $course['CourseTitle']; ?></td>
                    <td><?php print $course['CourseDesc']; ?></td>
                    <td><?php print $course['ProfInfo']; ?></td>
                    <td>$<?php print $course['CourseCost']; ?></td>
                    <td><?php print $course['CourseLoc']; ?></td>
                    <td><a href="displayRegisteredStudents.php?id=<?php print $course['CRN']; ?>" class="btn button btn-sm btn-success">Show Students</a></td>
                    <td><a href="registerNewStudent.php?id=<?php print $course['CRN']; ?>" class="btn button btn-sm btn-success">Register for course</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
