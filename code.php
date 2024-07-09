<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete-student'])) {
   $student_id = mysqli_real_escape_string($con, $_POST['delete-student']);
   $query = "DELETE FROM students WHERE id='$student_id'";
   $query_run = mysqli_query($con, $query);

   if ($query_run) {
      $_SESSION['message'] = "تم حذف القيد بنجاح";
      header("Location: index.php");
   } else {
      $_SESSION['message'] = "لم تتم عملية الحذف تأكد من المدخلات";
      header("Location: index.php");

   }

}





if (isset($_POST['update_student'])) {

   $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phone = mysqli_real_escape_string($con, $_POST['phone']);
   $course = mysqli_real_escape_string($con, $_POST['course']);

   $query = "UPDATE students set name='$name',email='$email',phone='$phone',course='$course' WHERE id='$student_id'";

   $query_run = mysqli_query($con, $query);
   if ($query_run) {
      $_SESSION['message'] = "تم تعديل القيد بنجاح";
      header("Location: index.php");
   } else {
      $_SESSION['message'] = "لم تتم عملية التعديل تأكد من المدخلات";
      header("Location: index.php");

   }


}



if (isset($_POST['save_student'])) {

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phone = mysqli_real_escape_string($con, $_POST['phone']);
   $course = mysqli_real_escape_string($con, $_POST['course']);

   $query = "INSERT INTO students (name,email,phone,course)
     VALUES('$name','$email','$phone','$course')";

   $query_run = mysqli_query($con, $query);

   if ($query_run) {
      $_SESSION['message'] = "تم اضافة القيد بنجاح";
      header("Location: student-create.php");
   } else {
      $_SESSION['message'] = "لم تتم عملية الاضافة تأكد من المدخلات";
      header("Location: student-create.php");

   }


}

