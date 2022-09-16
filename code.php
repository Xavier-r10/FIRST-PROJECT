<?php
session_start();

require 'dbcon.php';

if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM students WHERE id = '$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Informations supprimées";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erreur";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['update']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course' WHERE id = '$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Modifications bien enregistrés";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Modifications non enregistrés";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";
    
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Informations bien enregistreés";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Informations non enregistrées";
        header("Location: student-create.php");
        exit(0);
    }
}

?>