<?php
$page_name = 'login';

require __DIR__ . '/__connect_db.php';

if (isset($_POST['email_id'])) {
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    if (!empty($email_id) and !empty($password)) {
        $password = sha1($password);

        $sql = sprintf("SELECT * FROM `members` WHERE `email_id`='%s' AND `password`='%s'",
            $mysqli->escape_string($email_id),
            $mysqli->escape_string($password)
        );

//        echo $sql;
//        exit;
        $result = $mysqli->query($sql);
        $success = $result->num_rows > 0;

//        echo '$result->num_rows:'. $result->num_rows. '<br>';
//        echo '$success:'. $success. '<br>';

        //exit;

        if ($success) {
            $_SESSION['user'] = $result->fetch_assoc();
            header("Location: cart_list.php") ;
            exit;
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/product_red.css">
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="log_back">
<div class="check_abc">

    <?php include __DIR__ . '/NSGnav.php' ?>
    <div class="container_aa">



        <?php if (!isset($success) or $success == false): ?>
            <div class="login-page">
                <div class="form">

                    <p class="login_in">會員登入</p>
                    <?php

                    if (isset($success)): ?>
                        <?php if ($success): ?>
                            <div class="alert " role="alert" style="color:red;display:none;">登入成功</div>
                        <?php else: ?>
                            <div class="alert " role="alert" style="color:red;display:none;">登入失敗</div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <form name="form1" class="login-form" method="post" onsubmit="return checkForm();"> <!-- 不要讓表單送出 -->
                        <div class="form-group">
                            <input type="email" name="email_id" id="email_id" placeholder="Email"/><span id="email_id_info"
                                                                                                         style="color:red;display:none;">請填寫正確的 email 格式</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="請輸入密碼"/><span id="password_info"
                                                                                                            style="color:red;display:none;">密碼長度請設定大於 6 !</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn_login">登入</button>
                        </div>
                        <p class="message">還沒有帳號嗎？ <a href="register.php">快速註冊</a></p>
                    </form>
                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

<script>


    function checkForm() {
        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var email_id = form1.email_id.value;
//        var password = form1.password.value;

        var isPass = true;

        var info1 = $('#email_id_info');
        var info2 = $('#password_info');

        info1.hide();
        info2.hide();

        if (!pattern.test(email_id)) {
            info1.show();
            isPass = false;
        }
//        if (password.length < 6) {
//            info2.show();
//            isPass = false;
//        }

        return isPass;
    }

</script>

<?php include __DIR__ . '/sg_footer.php' ?>
</body>
</html>
