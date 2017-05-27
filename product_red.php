<?php include __DIR__ . '/__connect_db.php';

$page_name = 'product_red';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
// 客戶端指定第幾頁
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
// 分類編號
$price = isset($_GET['price']) ? $_GET['price'] : '';
// 金額搜尋


//條件
$where = " WHERE 1 ";
$cate_param = '';
if (!empty($cate)) {
    $where .= " AND `p_count`=$cate";
    $cate_param = '&cate=' . $cate;
}


// 金額搜尋
$price_param = '';
if (!empty($price)) {
    switch ($price) {
        case 'p1':
            $where .= " AND `price`<=1000 ";
            break;
        case 'p2':
            $where .= " AND `price`<= 1500 AND `price`>1000 ";
            break;
        case 'p3':
            $where .= " AND `price`<=2000 AND `price`>1500 ";
            break;
        case 'p4':
            $where .= " AND  `price`>2000 ";
            break;
    }
    $price_param = '&price=' . $price;
}


$perPage = 6;
$sql = "SELECT count(1) FROM `products` $where";
// echo "$sql <br>";
$result = $mysqli->query($sql);
$totalRows = $result->fetch_row()[0];
$totalPages = ceil($totalRows / $perPage);

$page = $page > $totalPages ? $totalPages : $page; //避免輸入的頁碼過大
$beginIndex = $perPage * ($page - 1);
//echo "$perPage , $page <br>";
$sql = "SELECT * FROM `products` $where LIMIT $beginIndex, $perPage";

$result = $mysqli->query($sql);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><!-- icon -->
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/product_red.css">
    <!--<link rel="stylesheet" href="css/grid-system.css">-->
    <link rel="stylesheet" href="css/left_bar.css">
    <link rel="stylesheet" href="css/sweet-alert.css">
    <script src="js/sweet-alert.js"></script>
    <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.auto.min.js"></script>

</head>
<body class="lightbody">
<?php include(__DIR__ . '/NSGnav.php') ?>
<!-- menu-->
<div class="container-fliud">
    <div class="row">
       
        <div class="col-xs-12 col-md-2 wine_box">
                <div class="wine_item">
                    <div class="wine_title">
                       / 價格 /
                    </div>
                    <div class="price">
                        <select name="price_sel" id="price_sel" class="form-control myprice">
                            <option value="選擇價格">選擇價格</option>
                            <option value="p1">NT 1000以下</option>
                            <option value="p2">NT 1000~1500</option>
                            <option value="p3">NT 1500~2000</option>
                            <option value="p4">NT 2000以上</option>
                        </select>
                    </div>
                </div>

                <div class="wine_item">
                    <div class="wine_title">
                        <a href="product_red.php">
                        / 所有商品 /
                        </a>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 紅酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=1">法國</a></li>
                            <li><a href="?cate=2">美國</a></li>
                            <li><a href="?cate=3">智利</a></li>
                        </ul>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 白酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=4" >法國</a></li>
                            <li><a href="?cate=5">德國</a></li>
                            <li><a href="?cate=6">智利</a></li>
                        </ul>
                    </div>
                </div>
                <div class="wine_item">
                    <div class="wine_title">
                        <p>/ 香檳  氣泡酒 /</p>
                        </div>
                    <div class="wine_list">
                        <ul>
                            <li><a href="?cate=7">法國</a></li>
                            <li><a href="?cate=8">義大利</a></li>
                            <li><a href="?cate=9">西班牙</a></li>
                        </ul>
                    </div>
                </div>

                        <!--<div class="ad">
                            <div class="wine_ad c-xs-img">
                                <a href="winetaste.php"><img src="imgs/wine_04_02.png"></a>
                                <a href="winetaste.php"><img src="imgs/wine_04_01.png"></a>
                            </div>
                            <div class="wine_ad1 c-xs-img">
                                <a href="winetaste.php"><img src="imgs/wine_04_04.png"></a>
                                <a href="winetaste.php"><img src="imgs/wine_04_03.png"></a>
                            </div>
                            <div class="wine_ad2 c-xs-img">
                                <a href="find_wine.php"><img src="imgs/wine_04_06.png"></a>
                                <a href="find_wine.php"><img src="imgs/wine_04_05.png"></a>
                            </div>
                            <div class="wine_ad3 c-xs-img">
                                <a href="small_test.php"><img src="imgs/wine_04_08.png"></a>
                                <a href="small_test.php"><img src="imgs/wine_04_07.png"></a>
                            </div>
                        </div>-->
                
        </div>

   
       
  <!--  商品開始  -->
            <div class="col-xs-12 col-md-9 wine_products_box">
                
                    <?php if ($totalPages)
                        while ($row = $result->fetch_assoc()): ?>
                            <ul class="col-xs-12 col-md-6">
                                <li class="thumbnail mythumbnail">
                                    <div class="single_product">
                                        <a  href="wine.php?sid=<?= $row['sid'] ?>">
                                            <img src="imgs/small/<?= $row['p_id'] ?>.png">
                                        </a>
                                    </div>
                                    <div class="caption mycaption">
                                        <h5><?= $row['p_name'] ?></h5>
                                        <h4 class="wine-info-h4">
                                            <span class="label label-info mylabel-info">NT $<?= $row['price'] ?>
                                                <select name="qty" class="qty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                                <a class="add_car" data-sid="<?= $row['sid'] ?>">
                                                    <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></a>
                                            </span>
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                    <?php endwhile; ?>

                    <div class="myclearfix">
                        <!--  清除浮動  -->
                    </div>

                     <!--  頁碼開始  -->
                    <nav aria-label="Page navigation" class="winepage">
                        <ul class="pagination mypagination">
                            <li>
                                <a href="?page=<?= $page - 1 > 0 ? $page - 1 : 1 ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li <?= $i == $page ? 'class="active"' : '' ?>>
                                    <a href="?page=<?= $i . $cate_param . $price_param ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <li>
                                <a href="?page=<?= $page + 1 > $totalPages ? $totalPages : $page + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!--  頁碼end  -->

            </div>

    </div> <!--row-->
    
</div> <!--  container-fliud 結束  -->

</body>

<?php include(__DIR__ . '/sg_footer.php') ?>
</html>

<script>
    var params = <?= json_encode($_GET) ?>;
    var cate_get = <?= empty($_GET['cate']) ? 0 : intval($_GET['cate']) ?>;

    $('#price_sel').on('change', function () {
        //alert( $(this).val() );

        var qs = '?price=' + $(this).val();

        if (params.cate) {
            qs += '&cate=' + params.cate;
        }

        location.href = qs;
    });

    if (params.price) {
        $('#price_sel').val(params.price);
    }

    function calTotalQty(data) {
        var count = 0;

        for (var s in data) {
            count += data[s];
        }
        $('.cart_qty').text(count);
    }

    $('.add_car').click(function () {

        var sid = $(this).attr('data-sid');
        //var qty = $(this).prev().val();

        var qty = $(this).closest('.caption').find('.qty').val();

        //alert(sid+":"+qty);

        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            console.log(data);
            calTotalQty(data);

            document.querySelector('.add_car').onclick =
                $(function () {
                    swal({
                        title: '已加入購物車',
                        text: '眾多商品歡迎參考看看',
                        timer: 500
                    })
                });
        }, 'json');


    });


    $(function () {
        var wine_title = $('.wine_title');

        wine_title.click(function () {
            $(this).siblings().slideToggle().parent().siblings().children('.wine_list').slideUp();
            
        });


        // switch (cate_get) {
        //     case 1:
        //     case 2:
        //     case 3:
        //         wine_title.eq(2).click();
        //         break;
        //     case 4:
        //     case 5:
        //     case 6:
        //         wine_title.eq(3).click();
        //         break;
        //     case 7:
        //     case 8:
        //     case 9:
        //         wine_title.eq(4).click();
        //         break;
        //     default:
        //         break;
        // }

        $('a[href]').each(function () {
            if ($(this).attr('href') == '?cate=' + cate_get) {
                $(this).css('color', '#e1bb56');
            }
        });

    });
</script>

