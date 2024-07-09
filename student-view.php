<?php
require 'dbcon.php';
?>
<?php include ('includes/header.php') ?>

<div class="contener mt-3">

  <div class="raw">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>نظرة عامة عن تفاصيل القيد
            <a href="index.php" class="btn btn-danger float-start">عودة</a>
          </h4>
        </div>
        <div class="card-body">

          <?php
          if (isset($_GET['id'])) {
            $student_id = mysqli_real_escape_string($con, $_GET['id']);
            $query = "SELECT * FROM students WHERE id='$student_id'";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              $student = mysqli_fetch_array($query_run);

              ?>


              <div class="mb-3">
                <label>اسم الطالب</label>
                <p class="form-control">
                  <?= $student['name']; ?>
                </p>
              </div>

              <div class="mb-3">
                <label>الايميل</label>
                <p class="form-control">
                  <?= $student['email']; ?>
                </p>
              </div>

              <div class="mb-3">
                <label>رقم الهاتف</label>
                <p class="form-control">
                  <?= $student['phone']; ?>
                </p>
              </div>

              <div class="mb-3">
                <label>الصف</label>
                <p class="form-control">
                  <?= $student['course']; ?>
                </p>
              </div>




              <?php

            } else {
              echo "<h4>  القيد غير موجود</h4>";
            }

          }
          ?>


        </div>
      </div>
    </div>
  </div>
</div>



<?php include ('includes/footer.php') ?>