<?php include __DIR__. '/__connect_db.php';

if(! isset($_SESSION['user'])){
    header('Location: cart_list.php');
    exit;
}

if(empty($_SESSION['cart'])){
    header('Location: product_red.php');
    exit;
}

$sids = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM `products` WHERE `sid` IN (%s) ", implode(',', $sids));
$result = $mysqli->query($sql);
$p_data = array();

$totalPrice = 0;

while($row=$result->fetch_assoc()){
    $row['qty'] = $_SESSION['cart'][$row['sid']];
    $p_data[$row['sid']] = $row;
    $totalPrice += $row['qty']*$row['price'];
}

$sql = "INSERT INTO `orders`(
          `member_sid`, `amount`, `order_date`
        ) VALUES (
            {$_SESSION['user']['sid']},
            $totalPrice,
            NOW()
        )";

//echo $sql;

$mysqli->query($sql);
$order_sid = $mysqli->insert_id; //取得訂單編號


//
//foreach($sids as $sid){
//    $sql = "INSERT INTO `order_details`(
//              `order_sid`, `product_sid`, `price`, `quantity`
//            ) VALUES (
//                $order_sid,
//                $sid,
//                {$p_data[$sid]['price']},
//                {$p_data[$sid]['qty']}
//            )";
//    $mysqli->query($sql);
//}
unset($_SESSION['cart']); //清空購物車

?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/buy.css">

</head>
<body>
<?php include __DIR__. '/NSGnav.php' ?>
<div id="content_list">
    <div class="steps">
        <ul class="info_list">
            <li><a href="javascript:;">1.檢視清單</a></li>
            <li><a href="javascript:;">2.填寫資料</a></li>
            <li><a href="javascript:;">3.完成訂購</a></li>
        </ul>
    </div>
    <div id="w">
        <header id="title">
            <h1>Steak Gallery</h1>
        </header>
        <div id="page">
            <table id="cart">
                <thead>
                <tr>

                    <th class="first_two">訂購成功！&nbsp;訂單編號</th>
                </tr>
                </thead>
                <tbody>
                <tr class="productitm">
                    <td> <?php
                        function ordersn2(){
                            $yCode_web = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
                            $orderSn = $yCode_web[intval(date('Y')) - 2011].date("YmdHis",time()).sprintf('%03d%02d', rand(100, 999),rand(0,99));
                            return $orderSn;
                        }
                        echo orderSn2();
                        ?></td>
                </tr>

                <tr class="extracosts">
                    <td class="light"></td>
                </tr>
                <tr class="totalprice">
                    <td class="light">謝謝購買！</td>
                </tr>

                <!-- checkout btn -->
                <tr class="checkoutrow">
                    <td colspan="5" class="checkout"><a href="product_red.php"></a><button id="submitbtn">回首頁</button></td><a>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<?php include __DIR__. '/sg_footer.php' ?>
</html>

