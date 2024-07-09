<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // قراءة القيمة المدخلة من حقل الإدخال
    $inputValue = $_GET['myInput'];

    // التحقق من أن القيمة ليست فارغة
    if (!empty($inputValue)) {
        // عرض القيمة
        echo "القيمة المدخلة هي: " . htmlspecialchars($inputValue);
    } else {
        echo "لم يتم إدخال أي قيمة.";
    }
}
?>