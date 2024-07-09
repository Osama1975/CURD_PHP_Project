<?php
session_start();
?>
<?php include ('includes/header.php') ?>

<div class="contener mt-3">
  <?php include ('message.php'); ?>

  <div class="raw">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>اضافة قيد جديد
            <a href="index.php" class="btn btn-danger float-start">عودة</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="post">

            <div class="mb-3">
              <label>اسم الطالب</label>
              <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
              <label>الايميل</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
              <label>رقم الهاتف</label>
              <input type="text" name="phone" class="form-control">
            </div>

            <div class="mb-3">
              <label>الصف</label>
              <input type="text" name="course" class="form-control">
            </div>

            <div class="mb-3">
              <button type="submit" name="save_student" class="btn btn-primary">خزن القيد</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include ('includes/footer.php') ?>