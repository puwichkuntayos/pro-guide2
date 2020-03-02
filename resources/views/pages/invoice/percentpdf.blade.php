
<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>testgrid</title>
</head>
<style type="text/css">
	@font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body{
        	font-family: THSarabunNew;
        	color: black;
        	font-size: 15px;
        }

        input{
        	border: none;
        	border-bottom: 1px dotted ;
        	box-sizing: border-box;
        }

        #title{
        	font-weight: bold;
        }

        #pretitle{
        	font-weight: bold;
        }

        #border-first{
        	margin-left: 10px;
        	margin-right: 10px;
        	margin-top: 10px;
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        }

        #border-second{
        	margin-left: 10px;
        	margin-right: 10px;
        	/*margin-top: 10px;*/
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        } 

        #four_border{
        	margin-left: 10px;
        	margin-right: 10px;
        	/*margin-top: 10px;*/
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        }

         #five_border{
        	margin-left: 10px;
        	margin-right: 10px;
        	/*margin-top: 10px;*/
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        }

        #bottom_row_first{
        	width: 40%;
        	margin-left: 10px;
        	margin-right: 5px;
        	/*margin-top: 10px;*/
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        }

        #bottom_row_second{
        	width: 56%;
        	margin-left: 10px;
        	margin-right: 10px;
        	margin-top: -100px;
        	margin-bottom: 1px;
        	border: 1px solid black;
        	border-radius: 5px;
        	float: right;
        }

        #no_input{
        	border: 1px solid black;
        	border-radius: 5px;
        	margin-top:7px;
        	width: 130px;
        }

        .checkbox{
        	border: none;
        	margin-top: 8px;
        	padding-left: 30px;
        }

        .checkbox2{
        	border: none;
        	margin-top: 8px;
        	padding-left: 10px;
        }

        table{
        	margin-left: 10px;
        	margin-right: 10px;
        	/*margin-top: 10px;*/
			border: 1px solid #000;
			border-collapse: collapse;
        }

        th{
        	border: 1px solid #000;
        	text-align: center;
        }

        td{
        	height: -10%;
        	border: 1px solid #000;
        }

        #thaitext{
        	background-color: gray;
        	width: 200px;
        }

        .container-fluid{
        	/*border: 1px solid black;*/
        	margin-top: -40px; 
        }

</style>
<body>
	<!-- <img src="http://www.sum.co.th/websmas/product/pay/gif/new50.jpg" width="100%"></img> -->
	<div class="container-fluid">
		<div class="row" id="title" >
			
			<span style="margin-left: 270px;">หนังสือรับรองการหักภาษี ณ ที่จ่าย</span>
			<span style="margin-left: 150px">เล่มที่ </span>
			<input type="text" name="" style="margin-left: 550px; width: 20%;" >
			
		</div>

		<div class="row" id="pretitle">
			<span style="margin-left: 260px;">ตามมาตรา 50 ทวิ แห่งประมวลรัษฎากร</span>
			<span style="margin-left: 150px">เลขที่</span>
			<input type="text" name="no" style="margin-left: 550px; width: 20%;" >
		</div>

		<!-- กรอบแรก -->
		<div id="border-first">
			<div class="row" >
				<span style="margin-left: 10px;">ผู้มีหน้าที่หักภาษี ณ ที่จ่าย :</span>
				<input style="margin-left: px;" type="text" name="">

				<span style="margin-left: 20px;">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*
</span>
				<input style="margin-left: px;" type="text" name="">	
			</div>
			<div class="row" >
				<span style="margin-left: 10px;">ชื่อ</span>
				<input style="width: 400px;" type="text" name="">
			</div>
			<div class="row" style="margin-left: 30px;">
				<span>(ให้ระบุว่าเป็นบุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)</span>
			</div>
			<div class="row">
				<span style="margin-left: 10px;">ที่อยู่</span>
				<input style="width: 400px;" type="text" name="">
			</div>
			<div class="row" style="margin-left: 30px;">
				<span>(ให้ระบุ ชื่ออาคาร/หมู่บ้าน ชั้นที่ เลขที่่ ตรอก/ซอย หมู่ที่ ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)</span>
			</div>
		</div>
		<!-- จบกรอบแรก -->

		<!-- กรอบสอง -->
		<div class="row" id="border-second">
			<div class="row" >
				<span style="margin-left: 10px;">ผู้ถูกหักภาษี ณ ที่จ่าย :</span>
				<input style="margin-left: px;" type="text" name="">

				<span style="margin-left: 30px;">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*</span>
				<input style="margin-left: px;" type="text" name="">	
			</div>
			<div class="row" >
				<span style="margin-left: 10px;">ชื่อ</span>
				<input style="width: 400px;" type="text" name="">
			</div>
			<div class="row" style="margin-left: 30px;">
				<span>(ให้ระบุว่าเป็นบุคคล นิติบุคคล บริษัท สมาคม หรือคณะบุคคล)</span>
			</div>
			<div class="row">
				<span style="margin-left: 10px;">ที่อยู่</span>
				<input style="width: 400px;" type="text" name="" >
			</div>
			<div class="row" style="margin-left: 30px;">
				<span>(ให้ระบุ ชื่ออาคาร/หมู่บ้าน ชั้นที่ เลขที่่ ตรอก/ซอย หมู่ที่ ถนน ตำบล/แขวง อำเภอ/เขต จังหวัด)</span>
			</div>

			<div class="row">
				<span style="margin-left: 10px;">ลำดับที่</span>
				<input id="no_input" type="text" name="" value="">
				<span >ในแบบ</span>
				<input class="checkbox" type="checkbox" name="test" value="value1">
				(1) <span>ภ.ง.ด.1ก </span>

				<input class="checkbox" type="checkbox" name="test" value="value1">
				(2) <span>ภ.ง.ด.1ก พิเศษ</span>

				<input class="checkbox" type="checkbox" name="test" value="value1">
				(3) <span>ภ.ง.ด.2</span>

				<input class="checkbox" type="checkbox" name="test" value="value1">
				(4) <span>ภ.ง.ด.3</span>

			</div>

			<div class="row">
				<span style="margin-left: 20px;">(ให้สามารถอ้างอิงหรือสอบยันกันได้ระหว่างลำดับที่ตาม</span>


				<input style="margin-left: 28px;" class="checkbox2" type="checkbox" name="test" value="value1">
				(5) <span>ภ.ง.ด.2ก</span>

				<input style="margin-left: 22px;" class="checkbox2" type="checkbox" name="test" value="value1">
				(6) <span>ภ.ง.ด.3ก</span>

				<input style="margin-left: 40px;" class="checkbox2" type="checkbox" name="test" value="value1">
				(7) <span>ภ.ง.ด.53</span>

			</div>

			<div class="row">
				<span style="margin-left: 30px;">หนังสือรับรองฯ กับแบบยื่นรายการภาษีหักที่จ่าย)</span>
			</div>
		</div>
		<!-- จบกรอบสอง -->

		<div class="row">
			<table style="width:100%;">
				<tr>
					<th>ประเภทเงินได้พึงประเมินที่จ่าย</th>
					<th width="15%">วัน เดือน หรือปีภาษี ที่จ่าย</th>
					<th>จำนวนเงินที่จ่าย</th>
					<th>ภาษีที่หักและนำส่งไว้</th>
				</tr>
				<tr>
					<td>1. เงินเดือน ค่าจ้าง เบี้ยเลี้ยง โบนัส ฯลฯ ตามมาตรา 40(1) </td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2. ค่าธรรมเนียม ค่านายหน้า ฯลฯ ตามมาตรา 40 (4)(ข)</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>3. ค่าแห่งลิขสิทธิ์ ฯลฯ ตามมาตรา 40 (3)</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>4. (ก) ดอกเบี้ย ฯลฯ ตามมาตรา 40 (ก) 
						<div style="margin-top: -20px;margin-bottom: -10px; margin-left: 10px;">
							<p>(ข) เงินปันผล เงินส่วนแบ่งกำไร ฯลฯ ตามมาตรา 40 (4)(ข)</p>
						</div>
						<div style="margin-top: -40px;margin-bottom: -10px; margin-left: 23px;">
							<p>(1) กรณีผู้ได้รับเงินปันผลได้รับเครดิตภาษี โดยจ่ายจาก</p>
						</div><div style="margin-top: -40px;margin-bottom: -10px; margin-left: 40px;">
							<p>กำไรสุทธิของกิจการที่ต้องเสียภาษีเงินได้นิติบุคลในอัตราดังนี้</p>
						</div>
					</td>

					<td colspan="3"></td>
					
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(1.1) อัตราร้อยละ 30 ของกำไรสุทธิ</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(1.2) อัตราร้อยละ 25 ของกำไรสุทธิ</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(1.2) อัตราร้อยละ 20 ของกำไรสุทธิ</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(1.2) อัตราอื่นๆ (ระบุ) <input type="text" name="" value="" style="width: 30px;"> ของกำไรสุทธิ</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>
						<div style="margin-top: -20px;margin-bottom: -10px; margin-left: 23px;">
							<p>(2) กรณีผู้ได้รับเงินปันผลไม่ได้รับเครดิตภาษี เนื่องจากจ่ายจาก</p>
						</div>
					</td>
					<td colspan="3"></td>	
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(2.1) กำไรสุทธิ ของกิจการที่ได่้ร้บยกเว้นภาษีเงินได้นิติบุคคล</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(2.2) เงินปันผลหรือเงินส่วนนแบ่งของกำไรที่ได้รับยกเว้นไม่ต้องนำมารวม</div>
						<div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;"> คำนวณเปนรายได้เพื่อเสียภาษีเงินได้นิติบุคคล</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(2.3) กำไรสุทธิส่วนได้หักผลขาดทุนสุทธิยกมาไม่เกิน 5 ปี </div><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">ก่อนรอบระยะเวลาบัญชีปีปัจจุบัน</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(2.4) กำไรที่รับรู้ทางบัญชีโดยวิธีส่วนได้เสีย (equity method)</div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><div style="margin-top: 0px;margin-bottom: 1px; margin-left: 40px;">(2.5) อื่นๆ (ระบุ) <input type="text" style=""></input></div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>5. การจ่ายเงินได้ต้องหักภาษี ณ ที่จ่าย ตามคำสั่งกรมสรรพากรที่ออกมาตามมาตรา 3 เตรส เช่น รางวัล ส่วนลดหรือประโยชน์ใดๆ เนื่องจากการส่งเสริมการขาย รางวัลในการประกวด การแข่งขัน การชิงโชค ค่าแสดงของนักแสดงสาธารณะ ค่าจ้างทำของ ค่าโฆษณา ค่าเช่า ค่าขนส่ง ค่าบริการ ค่าเบี้ยประกันวินาศภัย ฯลฯ </td>
					<td colspan="3"></td>
					
				</tr>

				<tr>
					<td><div>6. อื่นๆ (ระบุ) <input type="text" style=""></input></div></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td style="text-align: right; font-weight: bold;" ><span>รวมเงินที่จ่ายและภาษีที่หักนำส่ง</span></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td style="text-align: right; font-weight: bold;" ><span>รวมเงินภาษีที่หักนำส่ง (ตัวอักษร)</span></td>
					<td colspan="3"></td>
				</tr>

			</table>
		</div>

		<!-- กรอบที่ 4 -->
		<div class="row" id="four_border" >
			<div><span style="margin-left: 10px;font-weight: bold;">เงินที่จ่ายเข้า</span>&nbsp;&nbsp;<span>กบข./กสจ./กองทุนสงเคราะห์ครูโรงเรียนเอกชน</span><input style="width: 70px;" type="text" name=""><span>บาท</span>&nbsp;&nbsp;<span>กองทุนประกันสังคม</span><input style="width: 70px;" type="text" name=""><span>บาท</span> &nbsp;&nbsp;<span>กองทุนสำรองเลี้ยงชีพ</span><input style="width: 70px;" type="text" name=""><span>บาท</span></div>
		</div>

		<!-- กรอบที่ 5 -->
		<div class="row" id="five_border" style="padding: 2px;">
			<span style="font-weight: bold; margin-left: 10px;">ผู้จ่ายเงิน</span>
			<input style="margin-left: 10px;" class="checkbox" type="checkbox" name="test" value="value1">
				(1) <span>หัก ณ ที่จ่าย</span>
			<input style="margin-left: 10px;" class="checkbox" type="checkbox" name="test" value="value1">
				(2) <span>ออกให้ ตลอดไป</span>
			<input style="margin-left: 10px;" class="checkbox" type="checkbox" name="test" value="value1">
				(3) <span>ออกให้ครั้งเดียว</span>
			<input style="margin-left: 10px;" class="checkbox" type="checkbox" name="test" value="value1">
				(4) <span>อื่น ๆ (ระบุ)</span>
			<input type="text" name="">
		</div>
		<!-- จบกรอบที่ 5 -->

		<!-- กรอบล่าง -->
			<div class="row">
				
				<div id="bottom_row_first">
					<span style="margin-left: 10px; font-weight: bold;">คำเตือน</span>
					<span style="margin-left: 20px;"> ผู้มีหน้าที่ออกหนังสือรับรองการหักภาษี ณ ที่จ่าย</span>
					<span style="margin-left: 60px;"> หากฝ่าฝืนไม่ปฏิบัติตามมาตรา 50 ทวิแห่งประมวล</span>
					<span style="margin-left: 60px;"> รัษฎากร ต้องรับโทษทางอาญาตามมาตรา 35</span>
					<span style="margin-left: 60px;"> แห่งประมวลรัษฎากร</span>
				</div>

				<div id="bottom_row_second" style="text-align: center;">
					<span>ขอรับรองว่าข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความจริงทุกประการ</span>
					<div>
						<span>ลงชื่อ</span>
						<input style="margin-left: 90px;" type="text" name="">
						<span style="margin-left: -80px;">ผู้จ่ายเงิน</span>
					</div>

					<div class="row" style="padding: 10px; margin-left: 100px;">
						<input type="text" name="">	
					</div>

					<div class="row" style="padding: 10px; margin-left: -20">
						<span>(วัน เดือน ปี ทีออกหนังสือรับรองฯ)</span>
					</div>
				</div>	

				<div class="row" style="margin-top: 100px; margin-left: 10px;">
					<span style="font-weight: bold;">หมายเหตุ </span>
					<span>เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)* หมายถึง</span>
					<span>1. กรณีบุคคลธรรมดาไทย ให้ใช้ เลขประจำตัวประชาชนของกรมการปกครอง</span>
				</div>
				<div class="row" style="margin-left: 202px;">
					<span>2. กรณีนิติบุคคล ให้ใช้ เลขทะเบียนนิติบุคคลของกรมพัฒนาธุรกิจการค้า</span>
				</div>
				<div class="row" style="margin-left: 202px;">
					<span>3. กรณีอีน ๆ นอกเหนือจาก 1. และ 2. ให้ใช้ เลขประจำตัวผู้เสียภาษีอากร (13 หลัก) ของกรมสรรพากร</span>
				</div>

			</div>

		<!-- จบกรอบล่าง -->

		



	</div>



</body>
</html>

