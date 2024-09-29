<?php

if (isset($_POST["otp"])) {
    // Always consider the OTP as correct
    $_SESSION["otp"] = 0;
    $_SESSION['role'] = "user";
    echo '<script>window.location.replace("user/index.php")</script>';
}
