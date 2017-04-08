<?php
$page_name = 'user_edit';

require __DIR__ . '/__connect_db.php';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $nickname = $_POST['nickname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $password = sha1($password);

    $sql = sprintf("SELECT * FROM `members` WHERE `email_id`='%s' AND `password`='%s'",
        $mysqli->escape_string($_SESSION['user']['email_id']),
        $mysqli->escape_string($password)
    );
    $result = $mysqli->query($sql);

    $success = $result->num_rows > 0;

    if ($success) {
        $row = $result->fetch_assoc();
        if (empty($new_password)) {
            $sql = sprintf("UPDATE `members` SET `nickname`='%s',`mobile`='%s',`address`='%s' WHERE `sid`=%s",
                $mysqli->escape_string($nickname),
                $mysqli->escape_string($mobile),
                $mysqli->escape_string($address),
                $row['sid']
            );
        } else {
            $sql = sprintf("UPDATE `members` SET `password`='%s', `nickname`='%s',`mobile`='%s',`address`='%s' WHERE `sid`=%s",
                sha1($new_password),
                $mysqli->escape_string($nickname),
                $mysqli->escape_string($mobile),
                $mysqli->escape_string($address),
                $row['sid']
            );
        }
        if ($mysqli->query($sql)) {
            $msg = array(
                'success' => true,
                'info' => '修改完成',
            );
            $_SESSION['user']['nickname'] = $nickname;
            $_SESSION['user']['mobile'] = $mobile;
            $_SESSION['user']['address'] = $address;
        } else {
            $msg = array(
                'success' => false,
                'info' => '錯誤, 請找開發人員',
            );
        }
    } else {
        $msg = array(
            'success' => false,
            'info' => '密碼錯誤',
        );
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/user_edit.css">

</head>
<body>
<div class="check_abc">
    <?php include __DIR__ . '/NSGnav.php' ?>
    <div class="container_aa">
        <div class="edit-page">
            <div class="form">

                <p class="member_edit">會員資料修改</p>

                <form name="form1" class="edit-form" method="post" onsubmit="return checkForm();"> <!-- 不要讓表單送出 -->
                    <div class="form_edit">
                        <input type="email" name="email_id" id="email_id" placeholder="Email"
                               value="<?= $_SESSION['user']['email_id'] ?>" disabled style="color: #ccc;">
                    </div>
                    <div class="form_edit">
                        <input type="nickname" name="nickname" id="nickname" placeholder="姓名"
                               value="<?= $_SESSION['user']['nickname'] ?>"> <span
                            id="nickname" style="color:red;display:none;">姓名長度請設定大於 2 !</span>
                    </div>
                    <div class="form_edit">
                        <input type="text" name="form-control" id="mobile" placeholder="手機號碼"
                               value="<?= $_SESSION['user']['mobile'] ?>">
                    </div>
                    <div class="form_edit">
                        <input type="address" name="form-control" id="address"
                               placeholder="地址"> <?= $_SESSION['user']['address'] ?>
                    </div>

                    <div class="form_edit">
                        <input type="password" name="form-control" id="password" placeholder="密碼"><span
                            id="password" style="color:red;display:none;">密碼長度請設定大於 6 !</span>
                    </div>
                    <div class="form_edit">
                        <input type="password" name="form-control" id="new_password" placeholder="確認密碼"><span id="new_password"
                                                                                                              style="color:red"></span></p>
                    </div>


                    <div class="form_edit">
                        <button type="submit" class="btn_edit">修改</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


<script>

    function checkForm() {
        var password = form1.password.value;
        var nickname = form1.nickname.value;


        var isPass = true;

        var info2 = $('#new_password');
        var info3 = $('#nickname');

        info2.hide();
        info3.hide();

        if (password.length < 6) {
            info2.show();
            isPass = false;
        }
        if (nickname.length < 2) {
            info3.show();
            isPass = false;
        }
        return true;
    }

</script>

<?php include __DIR__ . '/sg_footer.php' ?>
</body>
</html>
