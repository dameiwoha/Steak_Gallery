<?php include __DIR__ . '/__connect_db.php';

$page_name = 'cart_list';

if (empty($_SESSION['cart'])) {
    header('Location: product_red.php');
    exit();
}

$sids = array_keys($_SESSION['cart']);

//$sql = "SELECT * FROM `products` WHERE `sid` IN (". implode(',', $sids). ") ";
$sql = sprintf("SELECT * FROM `products` WHERE `sid` IN (%s) ", implode(',', $sids));
//echo $sql;
$result = $mysqli->query($sql);
$p_data = array();

while ($row = $result->fetch_assoc()) {
    $row['qty'] = $_SESSION['cart'][$row['sid']];
    $p_data[$row['sid']] = $row;
}

//print_r($p_data);

?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/cart_list_info.css">

</head>
<body>
<?php include __DIR__. '/NSGnav.php'; ?>

        <div id="content_list">
            <div class="steps">
                <ul class="info_list">
                    <li><a href="cart_list.php">1.檢視清單</a></li>
                    <li><a href="cart_list_info.php">2.填寫資料</a></li>
                    <li><a href="buy.php">3.完成訂購</a></li>
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
                <th class="first">商品圖片</th>
                <th class="second">產品名稱</th>
                <th class="third">價格</th>
                <th class="fourth">數量</th>
                <th class="fifth">小計</th>
            </tr>
            </thead>
            <?php foreach ($sids as $sid): ?>



                <tbody>
                <!-- shopping cart contents -->
                <tr class="productitm" data-sid="<?= $sid ?>">
                    <td class="thumb"><img src="imgs/small/<?= $p_data[$sid]['p_id'] ?>.png" alt=""></td>
                    <td><?= $p_data[$sid]['p_name'] ?></td>
                    <td><?= $p_data[$sid]['price'] ?></td>
                    <td class="qty_sel"><?= $p_data[$sid]['qty'] ?></td>
                    <td class="sub-total"><?=$p_data[$sid]['qty']*$p_data[$sid]['price']?></td>
                </tr>
                <?php endforeach; ?>

                <tr class="extracosts">
                    <td class="light_fri"><h3>運費：</h3></td>
                    <td colspan="3" class="light"></td>
                    <td><h3>優惠期間免運費</h3></td>
                    <td>&nbsp;</td>
                </tr>

                <tr class="totalprice">
                    <td class="light">合計：</td>
                    <td colspan="3">&nbsp;</td>
                    <td colspan="3"><strong id="totalPrice">計算中</strong>
                    </td>
                </tr>

                </tbody>
        </table>

        <form id="orderform" name="form1" method="post">
            <div class="info">

                <div class="roundbox_center_3">
                    <h2>收件人資訊</h2>
                    <ul class="form_list">
                        <li class="name">
                            <h3><label>收件人姓名</label></h3>
                            <input type="text" id="buyname" name="buyname" value="" />
                            <strong>您必須輸入中文全名。</strong></span>
                            <input class="radio" id="male" name="收件人稱謂" type="radio" value="True" /><label for="male">先生</label>
                            <input class="radio" id="female" name="收件人稱謂" type="radio" value="False" /><label for="female" id="radioError">小姐</label>
                        </li>

                        <li class="phone">
                            <h3><label>手機號碼</label></h3>
                            <input id="buyphone" name="buyphone" type="text" value="" />
                            <span class="remind">
                            <strong>輸入範例：0912345678</strong></span>
                        </li>

                        <li class="address">
                            <h3><label>收件人地址</label></h3>
                            <input id="buyaddress" name="buyaddress" type="text" value="" />
                            <span class="remind">
                        </li>

                        <li class="payment">
                            <h3>付款方式</h3>
                            <input class="radio" id="paytype" name="paytype" type="radio" value="True" /><label for="atm">ATM匯款</label>
                            <input class="radio" id="paytype" name="paytype" type="radio" value="True" /><label for="online">貨到付款</label>
                        </li>
                    </ul>
                </div>
                <!-- end of roundbox-cneter -->
                <div class="roundbox_down_3"></div>
            </div>
        </form>
        <tr class="checkoutrow">
            <td colspan="6" class="checkout">
                <button id="submitbtn">
                    <a type="button" class="btn buy_confirm" href="buy.php">下一步</a>

            </td>
        </tr>
    </div>
</div>
</div>
<script>
    var qty_sel = $('.qty_sel');
    qty_sel.each(function () {
        var qty = $(this).attr('data-qty');
        $(this).val(qty);
    });

    qty_sel.change(function () {
        var tr = $(this).closest('tr');
        var sid = tr.attr('data-sid');
        var qty = $(this).val();
        var price = tr.find('td').eq(2).text();

        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
//               console.log(data);
            tr.find('.sub-total').text(price * qty)
            calTotal();
//            setCartQty(data);
        }, 'json');
    });

    var calTotal = function () {
        var total = 0;
        $('.productitm[data-sid]').each(function () {
            total += $(this).find('td').eq(2).text() * $(this).find('.qty_sel').text();
//                console.log($(this).find('td').eq(3).text(),  $(this).find('.qty_sel').val());
        });
//            console.log(total);

        $('#totalPrice').text(total);
    };

    calTotal();


</script>
</body>
</html>

