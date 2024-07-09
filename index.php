<?php session_start();
require 'dbcon.php'; ?>

<?php include ('includes/header.php') ?>

<div class="contener mt-3">

    <?php include ('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>تفاصيل الطلاب
                        <a href="student-create.php" class="btn btn-danger float-start">اضافة طالب</a>
                    </h4>
                </div>


                <?php
                $inputValue = ""; // متغير لتخزين القيمة المدخلة
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // قراءة القيمة المدخلة من حقل الإدخال
                    $inputValue = $_POST['myInput'];
                }
                ?>
                <div class="card-header">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label for="myInput">أدخل الاسم المطلوب البحث عنه: </label>
                        <input type="text" id="myInput" name="myInput">
                        <button class="btn btn-success btn-sm" type="submit">أبحث</button>
                    </form>



                </div>


                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>التسلسل</th>
                                <th>اسم الطالب</th>
                                <th>البريد الالكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>الصف</th>
                                <th>الحدث</th>
                            </tr>
                        <tbody>

                            <?php
                            if (isset($_get['myInput'])) {
                                $inputValue = $_GET['myInput'];

                            }


                            if ((!empty($inputValue))) {
                                $query = "SELECT * FROM students WHERE name like '%" . $inputValue . "%'";
                            } else {
                                $query = "SELECT * FROM students";
                            }
                            /*  $query = "SELECT * FROM students"; */
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {


                                foreach ($query_run as $student) {

                                    ?>
                                    <tr>
                                        <td><?= $student['id']; ?></td>
                                        <td><?= $student['name']; ?></td>
                                        <td><?= $student['email']; ?></td>
                                        <td><?= $student['phone']; ?></td>
                                        <td><?= $student['course']; ?></td>
                                        <td>
                                            <a href="student-view.php?id=<?= $student['id'] ?>"
                                                class="btn btn-info btn-sm">نظرة</a>
                                            <a href="student-edit.php?id=<?= $student['id'] ?>"
                                                class="btn btn-success btn-sm">تحديث</a>

                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete-student" value="<?= $student['id'] ?>"
                                                    class="btn btn-danger btn-sm">حذف</button>
                                            </form>

                                        </td>



                                    </tr>
                                    <?php
                                }
                            } else {

                                echo "<h5>no record found</h5>";
                            }
                            ?>


                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include ('includes/footer.php') ?>