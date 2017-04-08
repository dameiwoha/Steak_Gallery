<?php
$page_name = 'register';

require __DIR__ . '/__connect_db.php';

if (isset($_POST['email_id'])) {
    $email_id = $_POST['email_id'];
    $nickname = $_POST['nickname'];
    $mobile = $_POST['mobile'];

    $password = $_POST['password'];

    if (!empty($email_id) and !empty($password) and !empty($nickname)) {
        $cert = sha1($email_id . uniqid());
        $password = sha1($password);

        $sql = "INSERT INTO `members`(
            `email_id`, `password`, `nickname`, `mobile`,
            `address`, `created_at`, `certification`
            ) VALUES (
            ?, ?, ?, ?,
            ?, NOW(), '$cert'
            )
            ";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sssss', $email_id, $password, $nickname, $mobile, $address);
        $success = $stmt->execute();
        $stmt->close();

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/grid-system.css">
    <link rel="stylesheet" href="css/register.css">

</head>
<body class="reg_ister">
<div class="container_aa">
    <?php include __DIR__ . '/NSGnav.php' ?>

    <?php if (isset($success) and $success): ?>
        <div class="alert-success" role="alert" > <script> alert("註冊成功"); </script></div>

    <?php else: ?>
    <form name="form1" method="post" onsubmit="return checkForm();"> <!-- 不要讓表單送出 -->

        <form class="register-form">
            <div class="wine1">
            <div class="form1">
                <p class="form123">會員註冊</p>

                <input type="email" class="form-control" name="email_id" placeholder="Email address"/><span
                    id="email_id_info" style="color:red;display:none;">請填寫正確的 email 格式</span>

                <input type="text" placeholder="姓名" class="form-control" id="nickname" name="nickname"/> <span
                    id="nickname_info" style="color:red;display:none;">姓名長度請設定大於 2 !</span>

                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="手機號碼"/>

                <input type="password" class="form-control" id="password" name="password" placeholder="密碼"/> <span
                    id="password_info" style="color:red;display:none;">密碼長度請設定大於 6 !</span>

                <button type="submit">註冊</button>
                <p class="message">已經有會員了嗎？<a href="login.php">登入</a></p>
            </div>
</div>
</div>
<?php endif; ?>
</form>

<script>
    function checkForm() {
        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var email_id = form1.email_id.value;
        var password = form1.password.value;
        var pattern2 = /^[a-z]\d{3}/;

        var isPass = true;

        var info1 = $('#email_id_info');
        var info2 = $('#password_info');
        var info3 = $('#nickname_info');
        info1.hide();
        info2.hide();
        info3.hide();


        if (!pattern.test(email_id)) {
            info1.show();
            info1.text('請填寫正確的 email 格式');
            isPass = false;
        }
        if (password.length < 6) {
            info2.show();
            isPass = false;
        }

        if (isPass) {
            $.get('aj__check_email_id.php', {email_id: email_id}, function (data) {
                if (data === 'yes') {
                    info1.show();
                    info1.text('此 email 已註冊過');
                } else if (data === 'no') {
                    form1.submit();
                }
            });
        }

        return false;
    }

</script>
<?php include __DIR__ . '/sg_footer.php' ?>
</body>
</html>
