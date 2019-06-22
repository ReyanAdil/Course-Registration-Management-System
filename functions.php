<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 11/7/2017
 * Time: 5:57 PM
 */
//display all courses
function fetchAllCourses()
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
		CRN,
		Course_Title,
		Course_Desc,
		Prof_Info,
		Course_Cost,
		Course_Loc
		FROM ".$db_table_prefix."course_info"
    );
    $stmt->execute();
    $stmt->bind_result(
        $CRN,
        $Course_Title,
        $Course_Desc,
        $Prof_Info,
        $Course_Cost,
        $Course_Loc
    );

    while ($stmt->fetch()) {
        $row[] = array(
            'CRN' => $CRN,
            'CourseTitle' => $Course_Title,
            'CourseDesc' => $Course_Desc,
            'ProfInfo' => $Prof_Info,
            'CourseCost' => $Course_Cost,
            'CourseLoc' => $Course_Loc
        );
    }
    $stmt->close();
    return ($row);
}

//add new course
function addNewCourse($courseTitle, $courseDesc, $profInfo, $courseCost, $courseLoc)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "course_info (
            Course_Title,
            Course_Desc,
		    Prof_Info,
		    Course_Cost,
		    Course_Loc
            )
            VALUES (
            ?,
            ?,
            ?,
            ?,
            ?
            )"
    );
    $stmt->bind_param("sssss", $courseTitle, $courseDesc, $profInfo, $courseCost, $courseLoc);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

//register new student
function registerNewStudent($fname, $lname, $address, $email, $crn){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "student_info (
            F_Name,
            L_Name,
		    Address,
		    Email,
		    CRN
            )
            VALUES (
            ?,
            ?,
            ?,
            ?,
            ?
            )"
    );
    $stmt->bind_param("sssss", $fname, $lname, $address, $email, $crn);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

//fetch all students
function fetchAllStudents($crn){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
		F_Name,
		L_Name,
		Address,
		Email
		FROM ".$db_table_prefix."student_info
		WHERE CRN = ?"
    );
    $stmt->bind_param("s", $crn);
    $stmt->execute();
    $stmt->bind_result($F_Name, $L_Name, $Address, $Email);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'fName' => $F_Name,
            'lName' => $L_Name,
            'address' => $Address,
            'email' => $Email
        );
    }
    $stmt->close();
    return ($row);
}

//fetch course
function fetchThisCourse($crn){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "
    SELECT
    Course_Title
    FROM " . $db_table_prefix . "course_info
    WHERE
    CRN = ?
    LIMIT 1"
    );
    $stmt->bind_param("s", $crn);
    $stmt->execute();
    $stmt->bind_result($courseTitle);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'course' => $courseTitle
        );
    }
    $stmt->close();
    return ($row);
}
?>