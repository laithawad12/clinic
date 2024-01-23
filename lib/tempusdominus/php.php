<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $whatsapp_number = "+962799023327";
    $message = $_POST["message"];

    // تنسيق رابط الواجهة البرمجية للواتساب
    $api_url = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=" . urlencode($message);

    // إعادة توجيه المتصفح إلى رابط الواجهة البرمجية للواتساب
    header("Location: $api_url");
    exit();
}
?>
