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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/cart_list.css">
    </head>
<body>
<?php include __DIR__ . '/NSGnav.php' ?>

<div class="container">
    <div id="content_list">
        <div class="steps">
            <ul>
                <li><a href="cart_list.php">1.檢視清單</a></li>
                <li><a href="javascript;">2.填寫資料</a></li>
                <li><a href="javascript;">3.完成訂購</a></li>
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
                    <th class="first">圖片</th>
                    <th class="second">產品</th>
                    <th class="third">價格</th>
                    <th class="fourth">數量</th>
                    <th class="fifth">小計</th>
                    <th class="sixth">刪除</th>
                </tr>
                </thead>

                <?php foreach ($sids as $sid): ?>
                <tr data-sid="<?= $sid ?>"></tr>

                    <tbody>
                    <!-- shopping cart contents -->
                    <tr class="productitm" data-sid="<?= $sid ?>">
                        <td class="thumb"><a href="wine.php?sid=<?= $sid ?>"><img src="imgs/small/<?= $p_data[$sid]['p_id'] ?>.png" alt=""></a></td>
                        <td><?= $p_data[$sid]['p_name'] ?></td>
                        <td><?= $p_data[$sid]['price'] ?></td>

                        <td>
                            <select class="qty_sel" data-qty="<?= $p_data[$sid]['qty'] ?>">
                                <?php for ($i = 1;
                                $i <= 10;
                                $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </td>
                    <td class="sub-total"> <?=$p_data[$sid]['qty']*$p_data[$sid]['price']?></td>
                        <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"><i class="fa fa-trash-o"></i></span>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                    <tr class="extracosts">
                        <td ><h3>運費：</h3></td>
                        <td colspan="3" class="light"></td>
                        <td><h3>免運費</h3></td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr class="totalprice">
                        <td class="light">合計：</td>
                        <td colspan="3">&nbsp;</td>
                            <td colspan="3"><strong id="totalPrice">計算中</strong>
                       </td>
                    </tr>

                    <!-- checkout btn -->
                    <tr class="checkoutrow">
                        <td colspan="6" class="checkout">
                            <button id="submitbtn"><?php if (!isset($_SESSION['user'])): ?>
                                    <a type="button" class="btn btn-default" href="login.php">點我先登入</a>
                                <?php else: ?>
                                    <a type="button" class="btn btn-danger" href="cart_list_info.php">結帳</a>
                                <?php endif; ?></button>

                        </td>
                    </tr>
                    </tbody>
            </table>

        </div>
    </div>
    </div>

</div>

    <script>
        $('.glyphicon-remove-sign').click(function () {
            var sid = $(this).closest('tr').attr('data-sid');
//            console.log(sid);
            var tr = $(this).closest('tr');

            $.get('add_to_cart.php', {sid: sid}, function (data) {
//                console.log(data);
                calTotalQty(data);
                //location.href = location.href; //刷新頁面, 第一種作法

                tr.remove(); // 移除 tr 元素, 第二種作法
                calTotal();
            }, 'json');

        });

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
//                console.log(data);
                tr.find('.sub-total').text(price * qty)
                calTotal();
//                setCartQty(data);
            }, 'json');
        });

        var calTotal = function () {
            var total = 0;
                $('.productitm[data-sid]').each(function () {
                total += $(this).find('td').eq(2).text() * $(this).find('.qty_sel').val();
//                console.log($(this).find('td').eq(3).text(),  $(this).find('.qty_sel').val());
            });
//            console.log(total);

            $('#totalPrice').text(total);
        };

        calTotal();
    </script>
    <?php include __DIR__ . '/sg_footer.php' ?>
</body>
</html>
