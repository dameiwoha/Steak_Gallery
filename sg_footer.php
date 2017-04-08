<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/modaal.css">
<link rel="stylesheet" href="css/grid-system.css">

<link rel="stylesheet" href="css/sweet-alert.css">
<script src="js/sweet-alert.js"></script>

     <footer class=" c-xs-12 c-sm-12 c-lg-2 x_123">
      <h2 id="foot_h2">未滿十八歲請勿飲酒&nbsp;&nbsp;&nbsp;酒後不開車&nbsp;&nbsp;&nbsp;安全有保障</h2>
		 <div class="bk"><span class="c-xs-3 c-sm-2 ">book a reservation </span>

			 <input type="text" name="dateof" id="dateof" class="c-xs-2 c-sm-2">
			 <select id="time" class="c-xs-3 c-sm-2 c-lg-2">
				 <option value="1130">11:30</option>
				 <option value="1230" disabled>12:30 已額滿</option>
				 <option value="1330">13:30</option>
				 <option value="1730" disabled>17:30 已額滿</option>
				 <option value="1800">18:00</option>
				 <option value="1830">18:30</option>
				 <option value="1900" disabled>19:00 已額滿</option>
				 <option value="1930">19:30</option>
				 <option value="2000">20:00</option>
				 <option value="2030">20:30</option>
			 </select>
			 <select id="people" class="c-xs-2 c-sm-2 c-lg-2">
				 <option value="2P">2位</option>
				 <option value="3P">3位</option>
				 <option value="4P">4位</option>
				 <option value="5P">5位</option>
				 <option value="6P">6位</option>
				 <option value="7P">7位</option>
			 </select>
			 <a href="#inline" data-modaal-type="inline" data-modaal-animation="fade" id="enter_footer" class="btn modaal" style="color:#fff; font-size:1.2vw; ">訂位</a>
<!--			 <a href="#inline"> <input type="submit" value="訂位"  class="c-xs-2 c-sm-2 c-lg-2" "></a>-->
		 </div>
		 <div class="cnt c-xs-12 c-sm-12">
			 <ul>
				 <li><i class="fa fa-home" aria-hidden="true"><a href="#"> 台北市大安區安和路一段49巷10號1樓</a></i></li>
				 <li><i class="fa fa-phone" aria-hidden="true"><a href="#"> (02)2775-3011</a></i></li>
				 <li><i class="fa fa-facebook" aria-hidden="true"><a href="#"> FACEBOOK</a></i></li>
				 <li><i class="fa fa-instagram" aria-hidden="true"><a href="#"> INSTAGRAM</a></i></li>
			 </ul>

			 <i class="fa fa-copyright c-xs-6 c-sm-6" style="font-size: 10px; text-align: center;">steak gallery</i>

		 </div>
	</footer>



	 <div id="inline" style="display:none;">
		 <h1>線上預訂表單</h1>
		 <div class="form_all">



			 <div class="form-group">*聯 絡 人：
				 <input type="text" name="contant_name" id="contant_name" />
				 <input class="radio" id="male" name="收件人稱謂" type="radio" value="True" /><label for="male">先生</label>
				 <input class="radio" id="female" name="收件人稱謂" type="radio" value="False" /><label for="female" id="radioError">小姐</label>
			 </div>
			 <div class="form-group">*行 動 電 話：
				 <input type="text" name="contant_phone"/>
			 </div>
			 <div class="form-group">*郵 件 地 址：
				 <input type="text" name="contant_phone"/>
			 </div>
			 <div class="form-group_a">
				 <button type="submit" class="btn_out">送出</button>
			 </div>
		 </div>
		 <div class="info1_1">
			 <h4>1.*為必填欄位，故請務必填寫。</h4>
				 <h4>2.訂位需求送出後不代表訂位成功，餐飲訂席中心會盡快為您進行訂位事宜，訂位完成後，將發出簡訊通知訂位方為成立，請務必留下手機聯絡電話。</h4>
					 <h4>3.如遇無法點選日期時，表示當日尚未開放訂位或訂位已滿，敬請見諒。</h4>
						 <h4>4.若有任何疑問或欲取消訂位請洽訂位專線(02)2775-3011 由專員為您服務。</h4>
		 </div>
	 </div>
	 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/modaal.js"></script>
<script type="text/javascript">
	$( function() {
		$( "#dateof" ).datepicker({ minDate:0, maxDate: "+1M +10D" });
	} );




	$(document).ready(function () {

		$('.inline').modaal();

	});

	$('.form-group_a').click(function(){

		swal(
			'表單送出成功!',
			'若有任何疑問請洽訂位專線(02)2775-3011 由專員為您服務',
			'success'
		)
	});



</script>