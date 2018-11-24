
<!DOCTYPE html>
<html>
<head>  
<title>Office of Academic Resources Study Room</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link href="css/calendar.css" type="text/css" rel="stylesheet" />
   <link href="css/styles.css" type="text/css" rel="stylesheet" />
   <link rel="stylesheet" href="css/bootstrap-custom.css">
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="css/responsive-tables.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/responsive-tables.js"></script>
   <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/jquery-ui.js"></script>
	   <link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/JavaScript">
function validateForm()
 { 
var x=document.forms["rsroom"]["email"].value;
 if (x==null || x=="")
   {
   alert("กรุณาใส่อีเมล์!");
   return false;
   }
 x=document.forms["rsroom"]["code1"].value;
 if (x==null || x=="")
   {
   alert("กรุณาใส่ Student ID ของคุณ!");
   return false;
   }

 x=document.forms["rsroom"]["code2"].value;
 if (x==null || x=="")
   {
   alert("กรุณาใส่ Student ID ไม่น้อยกว่า 4 คน!");
   return false;
   }
 x=document.forms["rsroom"]["code3"].value;
 if (x==null || x=="")
   {
   alert("กรุณาใส่ Student ID ไม่น้อยกว่า 4 คน!");
   return false;
   }
 x=document.forms["rsroom"]["code4"].value;
 if (x==null || x=="")
   {
   alert("กรุณาใส่ Student ID ไม่น้อยกว่า 4 คน!");
   return false;
   }

var string=document.getElementById("txtHint1").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
 var string=document.getElementById("txtHint2").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint3").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint4").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint5").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
 var string=document.getElementById("txtHint6").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint7").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint8").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
var string=document.getElementById("txtHint9").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
 var string=document.getElementById("txtHint10").innerHTML;
if (string.indexOf("ไม่มี Student ID") > -1) {
 alert("กรุณาใส่ Student ID ให้ถูกต้อง");
   return false;
   }
 var string=document.getElementById("txtHint1").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
 var string=document.getElementById("txtHint2").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
    var string=document.getElementById("txtHint3").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
 var string=document.getElementById("txtHint4").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
    var string=document.getElementById("txtHint5").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
 var string=document.getElementById("txtHint6").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
    var string=document.getElementById("txtHint7").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
 var string=document.getElementById("txtHint8").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
       var string=document.getElementById("txtHint9").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
 var string=document.getElementById("txtHint10").innerHTML;
if (string.indexOf("จองห้องครบ") > -1) {
 alert("มี Student ID ที่จองห้องครบแล้ว");
   return false;
   }
  var string=document.getElementById("txtHint1").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint2").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint3").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint4").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
   var string=document.getElementById("txtHint5").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint6").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint7").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint8").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint9").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
  var string=document.getElementById("txtHint10").innerHTML;
if (string.indexOf("จองเพิ่มได้อีก") > -1) {
 alert("มี Student ID ที่จองห้องไว้ 1 ชั่วโมงในวันนี้แล้ว จองเพิ่มได้อีกแค่ 1 ชั่วโมงเดียว");
   return false;
   }
 }
 	
function showUser(str, div_id,day,n) {

	if (n=='') var nums='2'; else if (n==1) var nums='1';
    if (str == "") {
        document.getElementById(div_id).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(div_id).innerHTML = xmlhttp.responseText;
            }

        }; 
        xmlhttp.open("GET","getuser.php?q="+str+"&day="+day+"&nums="+nums,true);
        xmlhttp.send();
    }
}

</script>
</head>
<body>
<div class='right'><a href="lib/"><img src='images/user.png' width=30></a></div>
<div class="container-fluid">
     <div class="row">
     <div class="col-sm-6">
<div class="pcenter"><img src='images/frame.png'></div>
		<div class="faq_container">
		   <div class="faq">
      <div class="faq_question"><p class = "topic">เงื่อนไข (Terms and conditions)</p></div>
           <div class="faq_answer_container">
              <div class="faq_answer">
		<ul><li>ผู้ขอใช้ห้องค้นคว้ากลุ่มต้องเป็นนิสิต อาจารย์ และบุคลากรจุฬาฯ จำนวนอย่างน้อย 4 คน <span class='red'>กรุณาใส่ Student ID ของทุกคนที่เข้าใช้ห้อง</span></li>
		    <li>ใช้บริการติดต่อกันได้ไม่เกิน 2 ชั่วโมง/ครั้ง/วัน ถ้าต้องการใช้ติดต่อกันมากกว่า 2 ชั่วโมงต่อวัน และมีห้องว่าง กรุณาติดต่อเจ้าหน้าที่ที่เคาน์เตอร์บริการ</li>
			<li class=red>หากมาช้าเกินกว่า 15 นาที ระบบจะทำการยกเลิกการจองโดยอัตโนมัติ</li>
			<li>ในกรณีที่จองห้องในเวลาที่ใกล้ปิดห้องสมุด (เช่น 17.00-18.00 น. ในวันเสาร์-อาทิตย์ หรือ 20.00-21.00 น.ในวันจันทร์-ศุกร์ หรือ 23.00-24.00 น.ในช่วงสอบ) กรุณาออกจากห้องก่อนเวลาปิด 10 นาที </li>
			</ul>
<hr>
			<ul><li>Reservations must be made by groups of, at least, 4 people per room, and the groups must be member of CU only. <span class='red'> Student ID of everyone in the groups must be entered in the reservation form.</span></li>
		    <li>Reservations are limited maximum to 2 hours a day. If the extension of time to use the room is needed, please contact at the service counter. For the examination period, we're reserved the right to not give permission to every extension request.</li>
			<li class=red>Reservations will be automatically cancelled if the group who books the room are late than 15 minutes.</li>
			<li>If the reservations are made near the library closing time (17.00-18.00 For Sat-Sun, 20.00-21.00 in Weekdays, and 23.00-24.00 for examination period), please be aware to leave the room 10 minutes before the mentioned time. </li>
			</ul>
			</div>
           </div>        
    </div>
 </div>
		<div class="faq_container">
		   <div class="faq">
      <div class="faq_question"><p class = "topic">ขั้นตอนการจองห้องและเข้าใช้บริการ (To make reservation and use the service)</p></div>
           <div class="faq_answer_container">
              <div class="faq_answer"><ol><li>คลิกเลือกวันที่จะขอใช้ห้องค้นคว้ากลุ่มที่ปฏิทิน สามารถจองล่วงหน้าได้ไม่เกิน 7 วัน</li>
		    <li>เลือกช่องที่เป็นแถบสีเขียว หมายถึง ยังเป็นห้องว่าง ถ้าช่องที่เป็นแถบสีแดง หมายถึง ห้องในช่วงเวลานั้นมีคนจองแล้ว และถ้าช่องที่เป็นแถบสีม่วง หมายถึง ขณะนั้นกำลังมีคนใช้ห้องนั้นอยู่ เมื่อคลิกเลือกช่องที่เป็นแถบสีเขียว ช่องนั้นจะเปลี่ยนเป็นแถบสีส้ม</li>
			<li>ใส่ระดับชั้น Student ID ของผู้จอง email ของผู้จอง Student ID ของนิสิตที่ร่วมใช้ห้องอย่างน้อย 3 คน <span class='blueviolet'>(สำหรับนิสิตวิทยาลัยปิโตรเลี่ยมและปิโตรเคมี  Student ID  ให้พิมพ์ Student ID  7 ตัวแรกและตามด้วย p)</span></li>
			<li class=red>กดปุ่ม submit แล้วตรวจสอบอีเมลตอบรับจากระบบ</span></li>
			<li>ก่อนเข้าใช้บริการ แสดงตนพร้อมบัตรประจำตัวครบทุกคนตามจำนวนที่กรอกไว้ในแบบฟอร์ม</li></ol>
			<hr>
			<ol><li>Click any date to make reservation. reservations can be made up to 7 days in advance.</li>
		    <li>Click at the green areas to make reservation.</li>
			<li>Fill the form with student ID of everyone who uses the room and enter e-mail of the student who makes the reservation. <span class='blueviolet'>(for Petroleum and Petrochemical College student enter the first 7 digits and type p by the final digit)</span></li>
			<li class=red>Click submit and the system will send a notice email to inform the room's number.</span></li>
			<li>Please show student ID card by the names that are entered in the reservation form every time before asking for the service.</li></ol>
			</div>
           </div>        
    </div>
 </div>
		<div class="faq_container">
		   <div class="faq">
      <div class="faq_question"><p class = "topic">ขั้นตอนการยกเลิกการจองห้อง (To make cancellation)</p></div>
           <div class="faq_answer_container">
              <div class="faq_answer"><ol><li>คลิกที่แถบสีแดงจะปรากฎชื่อผู้จองที่ด้านล่างตาราง</li>
		<li>กรอกอีเมลที่ใช้ในการจองห้อง แล้วกดปุ่ม Submit</li>
		<li>ตรวจสอบอีเมลที่ได้รับจากระบบ และคลิกที่ link ที่แนบไปกับอีเมลเพื่อยืนยันการยกเลิกการจองห้อง</li>
		<li>เมื่อมาตรวจสอบที่ตารางการจองห้อง ห้องที่เคยจองไว้ แถบสีแดงจะเปลี่ยนเป็นสีเขียว</li></ol>
		<hr>
		<ol><li>Click at the red areas then the list of the groups who book the room will be shown in the table below</li>
		<li>Enter the same email that is used in the reservation making, then click submit</li>
		<li>Please look through the email from reservation system to find the attached link then click it to confirm the cancellation. </li>
		<li>Once the cancellation is confirmed, the cancelled rooms on the table will change status to (green) available.</li></ol>
		</div>
           </div>        
    </div>
 </div><br>
 <div class='center emphasize'>เมื่อเข้าใช้ห้อง กรุณาติดต่อรับกุญแจได้ที่เคาน์เตอร์บริการชั้น 2</div>
</div>
	      <div class="col-sm-4">

<div id="calendar"><div class="box"><div class="header"><a class="prev" href="/studyroom/index.php?month=10&year=2018">Prev</a><span class="title">2018 November</span><a class="next" href="/studyroom/index.php?month=12&year=2018">Next</a></div></div><div class="box-content"><ul class="label"><li class="start title title">Mon</li><li class="start title title">Tue</li><li class="start title title">Wed</li><li class="start title title">Thu</li><li class="start title title">Fri</li><li class="start title title">Sat</li><li class="start title title">Sun</li></ul><div class="clear"></div><ul class="dates"><li id="li-" class=" start mask"></li><li id="li-" class=" mask"></li><li id="li-" class=" mask"></li><li id="li-2018-11-01" class=" ">1</li><li id="li-2018-11-02" class=" ">2</li><li id="li-2018-11-03" class=" ">3</li><li id="li-2018-11-04" class=" end ">4</li><li id="li-2018-11-05" class=" start ">5</li><li id="li-2018-11-06" class=" ">6</li><li id="li-2018-11-07" class=" ">7</li><li id="li-2018-11-08" class=" ">8</li><li id="li-2018-11-09" class=" ">9</li><li id="li-2018-11-10" class=" ">10</li><li id="li-2018-11-11" class=" end ">11</li><li id="li-2018-11-12" class=" start ">12</li><li id="li-2018-11-13" class=" ">13</li><li id="li-2018-11-14" class=" ">14</li><li id="li-2018-11-15" class=" ">15</li><li id="li-2018-11-16" class=" ">16</li><li id="li-2018-11-17" class=" ">17</li><li id="li-2018-11-18" class=" end ">18</li><li id="li-2018-11-19" class=" start "><a href='index.php?day2=1&day=19&month=11&year=2018'><span class='orange'>19</span></a></li><li id="li-2018-11-20" class=" "><a href='index.php?day2=2&day=20&month=11&year=2018'><span class='orange'>20</span></a></li><li id="li-2018-11-21" class=" "><a href='index.php?day2=3&day=21&month=11&year=2018'><span class='orange'>21</span></a></li><li id="li-2018-11-22" class=" "><a href='index.php?day2=4&day=22&month=11&year=2018'><span class='orange'>22</span></a></li><li id="li-2018-11-23" class=" "><a href='index.php?day2=5&day=23&month=11&year=2018'><span class='orange'>23</span></a></li><li id="li-2018-11-24" class=" "><a href='index.php?day2=6&day=24&month=11&year=2018'><span class='orange'>24</span></a></li><li id="li-2018-11-25" class=" end "><a href='index.php?day2=7&day=25&month=11&year=2018'><span class='orange'>25</span></a></li><li id="li-2018-11-26" class=" start ">26</li><li id="li-2018-11-27" class=" ">27</li><li id="li-2018-11-28" class=" ">28</li><li id="li-2018-11-29" class=" ">29</li><li id="li-2018-11-30" class=" ">30</li><li id="li-" class=" mask"></li><li id="li-" class=" end mask"></li></ul><div class="clear"></div></div></div>
</div><div class="col-sm-2"><img src ="images/room_status.png" ></div>
</div> 
  </div><div>


<div class="container-fluid">
<div class="pcenter">
<h3>วันจันทร์ที่ 19 พฤศจิกายน 2561</h3></div>
<table  class="responsive"><tr><th></th><th>08.00-09.00</th><th>09.00-10.00</th><th>10.00-11.00</th><th>11.00-12.00</th><th>12.00-13.00</th><th>13.00-14.00</th><th>14.00-15.00</th><th>15.00-16.00</th><th>16.00-17.00</th><th>17.00-18.00</th><th>18.00-19.00</th><th>19.00-20.00</th><th>20.00-21.00</th><th>21.00-22.00</th><th>22-23.00</th><th>23-24.00</th></tr>
    <tr><th height="25">Room 1 (Flr 2) (10 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" ดวงกมล เจียมจำเริญสุข
จองห้อง Room 1 (Flr 2)
 เวลา 16.00-18.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ถิรพุทธิ์ ติระพงศ์ธวัช
ไตรสิทธิ์ เจริญสินทวีกุล
ทัตพงศ์ เดียวอรุณ





" id="6030213021@student.chula.ac.th::13478::6030213021::ดวงกมล เจียมจำเริญสุข::Room 1 (Flr 2)::19 พฤศจิกายน 2561::16.00-18.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td title="Room 1 (Flr 2)::2018-11-19::18.00-19.00" id=""><span class="trans">|</span></td> <td style="background-color:red;cursor:default;" title=" มัณฑนา จันทราสินธุ์
จองห้อง Room 1 (Flr 2)
 เวลา 19.00-21.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ชลิตา พุฒิสกุลวงศ์
แพรสิริ รอดวินิจ
ภัสกร กรีทอง





" id="h_naoto13@hotmail.com::13415::6182098826::มัณฑนา จันทราสินธุ์::Room 1 (Flr 2)::19 พฤศจิกายน 2561::19.00-21.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" มัณฑนา จันทราสินธุ์
จองห้อง Room 1 (Flr 2)
 เวลา 19.00-21.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ชลิตา พุฒิสกุลวงศ์
แพรสิริ รอดวินิจ
ภัสกร กรีทอง





" id="h_naoto13@hotmail.com::13415::6182098826::มัณฑนา จันทราสินธุ์::Room 1 (Flr 2)::19 พฤศจิกายน 2561::19.00-21.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td title="Room 1 (Flr 2)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 1 (Flr 2)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 1 (Flr 2)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 2 (Flr 2) (10 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td><td title="Room 2 (Flr 2)::2018-11-19::17.00-18.00" id=""><span class="trans">|</span></td> <td style="background-color:red;cursor:default;" title=" ฐิติพงศ์ สิทธิ์ธนพุฒิกร
จองห้อง Room 2 (Flr 2)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฐณิชา ศรลัมพ์
เทียนชัย มังคลาด
ชนวีร์ จำปีเจริญสุข





" id="titipong_work@hotmail.com::13467::5933027723::ฐิติพงศ์ สิทธิ์ธนพุฒิกร::Room 2 (Flr 2)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" ฐิติพงศ์ สิทธิ์ธนพุฒิกร
จองห้อง Room 2 (Flr 2)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฐณิชา ศรลัมพ์
เทียนชัย มังคลาด
ชนวีร์ จำปีเจริญสุข





" id="titipong_work@hotmail.com::13467::5933027723::ฐิติพงศ์ สิทธิ์ธนพุฒิกร::Room 2 (Flr 2)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td title="Room 2 (Flr 2)::2018-11-19::20.00-21.00" id=""><span class="trans">|</span></td> <td title="Room 2 (Flr 2)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 2 (Flr 2)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 2 (Flr 2)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 3 (Flr 2) (10 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">|</span></td></tr>
    <tr><th height="25">Room 4 (Flr 2) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td></tr>
    <tr><th height="25">Room 5 (Flr 2) (10 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td></tr>
    <tr><th height="25">Room 6 (Flr 2) (10 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td> 
                 <td style="background-color:red;cursor:default;"><span class="trans">| </span></td></tr>
    <tr><th height="25">Room 7 (Flr 4) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" อนันต์ สุนทรา
จองห้อง Room 7 (Flr 4)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฐศิวัช เอี่ยมการลิขิต
ปัณณิสรา กิตติศุภกร
ชญานุตม์ พาณิชยูปการนันท์





" id="Anansuntara@gmail.com::13470::6135644831::อนันต์ สุนทรา::Room 7 (Flr 4)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" อนันต์ สุนทรา
จองห้อง Room 7 (Flr 4)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฐศิวัช เอี่ยมการลิขิต
ปัณณิสรา กิตติศุภกร
ชญานุตม์ พาณิชยูปการนันท์





" id="Anansuntara@gmail.com::13470::6135644831::อนันต์ สุนทรา::Room 7 (Flr 4)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td style="background-color:red;cursor:default;" title=" พริมา รอดโพธิ์ทอง
จองห้อง Room 7 (Flr 4)
 เวลา 19.00-21.00 น. 
นิสิตที่ร่วมใช้ห้อง 
วริษฐา ใจภพ
ชนิษฐา ยุคง
ภาสวี อารีรักษ์





" id="Anansuntar@gmail.com::13471::6135575131::พริมา รอดโพธิ์ทอง::Room 7 (Flr 4)::19 พฤศจิกายน 2561::19.00-21.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" พริมา รอดโพธิ์ทอง
จองห้อง Room 7 (Flr 4)
 เวลา 19.00-21.00 น. 
นิสิตที่ร่วมใช้ห้อง 
วริษฐา ใจภพ
ชนิษฐา ยุคง
ภาสวี อารีรักษ์





" id="Anansuntar@gmail.com::13471::6135575131::พริมา รอดโพธิ์ทอง::Room 7 (Flr 4)::19 พฤศจิกายน 2561::19.00-21.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td title="Room 7 (Flr 4)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 7 (Flr 4)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 7 (Flr 4)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 8 (Flr 4) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td><td title="Room 8 (Flr 4)::2018-11-19::17.00-18.00" id=""><span class="trans">|</span></td>  <td style="background-color:blueviolet;cursor:default;" title=" พิชชาภา พะวงษ์
จองห้อง Room 8 (Flr 4)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฏฐนิช กุลศรี
ณัฐกิตต์ สมอร่าม
อรวรรณ มูลพันธ์





" id="ploypitch3338@gmail.com::13472::5833647723::พิชชาภา พะวงษ์::Room 8 (Flr 4)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" พิชชาภา พะวงษ์
จองห้อง Room 8 (Flr 4)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ณัฏฐนิช กุลศรี
ณัฐกิตต์ สมอร่าม
อรวรรณ มูลพันธ์





" id="ploypitch3338@gmail.com::13472::5833647723::พิชชาภา พะวงษ์::Room 8 (Flr 4)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td title="Room 8 (Flr 4)::2018-11-19::20.00-21.00" id=""><span class="trans">|</span></td> <td title="Room 8 (Flr 4)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 8 (Flr 4)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 8 (Flr 4)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 9 (Flr 4) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" ตรายุทธ อับดุลลาห์
จองห้อง Room 9 (Flr 4)
 เวลา 17.00-18.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ปณาลี อำพันสุข
ณวิรินทร์ ธนเสถียรธานนท์
ณัฐนพิน พละเสวีนันท์





" id="tultrayut@gmail.com::13486::5940080022::ตรายุทธ อับดุลลาห์::Room 9 (Flr 4)::19 พฤศจิกายน 2561::17.00-18.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td style="background-color:red;cursor:default;" title=" พิไชยลักษณ์ กุลวัฒนาพันธ์
จองห้อง Room 9 (Flr 4)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
วิมลมาส ปุรินทราภิบาล
ธนกฤต สืบบุญประเทือง
จุฬาลักษณ์ บัวบุญ





" id="pichai_pk12125@outlook.com::13476::6045575729::พิไชยลักษณ์ กุลวัฒนาพันธ์::Room 9 (Flr 4)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" พิไชยลักษณ์ กุลวัฒนาพันธ์
จองห้อง Room 9 (Flr 4)
 เวลา 18.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
วิมลมาส ปุรินทราภิบาล
ธนกฤต สืบบุญประเทือง
จุฬาลักษณ์ บัวบุญ





" id="pichai_pk12125@outlook.com::13476::6045575729::พิไชยลักษณ์ กุลวัฒนาพันธ์::Room 9 (Flr 4)::19 พฤศจิกายน 2561::18.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td title="Room 9 (Flr 4)::2018-11-19::20.00-21.00" id=""><span class="trans">|</span></td> <td title="Room 9 (Flr 4)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 9 (Flr 4)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 9 (Flr 4)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 10(Flr 4) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" พิชชาพร โทณวรรณากร
จองห้อง Room 10(Flr 4)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ลภัสกร ศันสนะศุภพงศ์
ณัฐธิดา วิเศษสุข
ประภาสิริ นิสสัยสุข





" id="mukky_pitcha@hotmail.com::13483::6040167422::พิชชาพร โทณวรรณากร::Room 10(Flr 4)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" พิชชาพร โทณวรรณากร
จองห้อง Room 10(Flr 4)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ลภัสกร ศันสนะศุภพงศ์
ณัฐธิดา วิเศษสุข
ประภาสิริ นิสสัยสุข





" id="mukky_pitcha@hotmail.com::13483::6040167422::พิชชาพร โทณวรรณากร::Room 10(Flr 4)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td title="Room 10(Flr 4)::2018-11-19::19.00-20.00" id=""><span class="trans">|</span></td> <td title="Room 10(Flr 4)::2018-11-19::20.00-21.00" id=""><span class="trans">|</span></td> <td title="Room 10(Flr 4)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 10(Flr 4)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 10(Flr 4)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
    <tr><th height="25">Room 11(Flr 5) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" ชนาพร ชัยพฤกษ์เดชา
จองห้อง Room 11(Flr 5)
 เวลา 16.00-18.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ทิชาณัช เรืองศิริ
ศุภณัฐ สุทธิศิริกุล
ณิชารีย์ สุวรรณทิพย์





" id="Hongandaoe@hotmail.com::13484::6142016826::ชนาพร ชัยพฤกษ์เดชา::Room 11(Flr 5)::19 พฤศจิกายน 2561::16.00-18.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td style="background-color:red;cursor:default;" title=" ชูศักดิ์ แซ่คู
จองห้อง Room 11(Flr 5)
 เวลา 18.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
พรธาดา อภิชาติบุตรพงศ์
นนทิยุต ชัยพงศ์พณิชย์
ภัณฑิรา พนาภักดี





" id="choosaksaekoo@gmail.com::13487::5940061022::ชูศักดิ์ แซ่คู::Room 11(Flr 5)::19 พฤศจิกายน 2561::18.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" ศุภพงศ์ ศิรินภาพันธ์
จองห้อง Room 11(Flr 5)
 เวลา 19.00-20.00 น. 
นิสิตที่ร่วมใช้ห้อง 
แพรวา สังสนา
กุลปริยา เจริญจาตุรงค์
รุย จุนเกียรติ





" id="thung_pu_prc@hotmail.com::13488::5940516322::ศุภพงศ์ ศิรินภาพันธ์::Room 11(Flr 5)::19 พฤศจิกายน 2561::19.00-20.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" ชนาภัทร พัฒนชัยโรจน์
จองห้อง Room 11(Flr 5)
 เวลา 20.00-21.00 น. 
นิสิตที่ร่วมใช้ห้อง 
รวีพร จูจีน
ฐิติมาศ ศรีสุข
อารีรัตน์ สินสุวรรณกุล





" id="jeansyeancnp@gmail.com::13489::5940502522::ชนาภัทร พัฒนชัยโรจน์::Room 11(Flr 5)::19 พฤศจิกายน 2561::20.00-21.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" ณัฐนพิน พละเสวีนันท์
จองห้อง Room 11(Flr 5)
 เวลา 21.00-22.00 น. 
นิสิตที่ร่วมใช้ห้อง 
กฤตยชญ์ มีสัตย์
จรรยา เมฆรักษากิจ
ลลิตา สังขพันธ์





" id="darkdiamond_51@hotmail.com::13490::5940507722::ณัฐนพิน พละเสวีนันท์::Room 11(Flr 5)::19 พฤศจิกายน 2561::21.00-22.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" รติรัตน์ ธนะราช
จองห้อง Room 11(Flr 5)
 เวลา 22.00-23.00 น. 
นิสิตที่ร่วมใช้ห้อง 
จรรยาสรรค์ จึงสงวนพรสุข
กฤตรัตน์ ชุมแก้ว
นาตาลี นาฆาลอ





" id="cartoondoraemon_2009@hotmail.com::13491::5940514022::รติรัตน์ ธนะราช::Room 11(Flr 5)::19 พฤศจิกายน 2561::22.00-23.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 <td style="background-color:red;cursor:default;" title=" กติกา กากแก้ว
จองห้อง Room 11(Flr 5)
 เวลา 23.00-24.00 น. 
นิสิตที่ร่วมใช้ห้อง 
ชุติกาญจน์ พงษารัตน์
อรรถวิท ฉายเรืองเกียรติ
พรธาดา อภิชาติบุตรพงศ์





" id="tam_tum55@hotmail.com::13492::5940501922::กติกา กากแก้ว::Room 11(Flr 5)::19 พฤศจิกายน 2561::23.00-24.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> 
				 </tr>
    <tr><th height="25">Room 12(Flr 5) ( 6 Seats)</th>
           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td>           <td style="background-color:#999;cursor:default;"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" อัยยรัช สินธุรา
จองห้อง Room 12(Flr 5)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
อรณิชา เพ็ชรทรัพย์
นิติพงศ์ น้อยพยัคฆ์
หรรษลักษณ์ โกศัยภัทร์
ศุภรัฐกรณ์ เสถียรสถาพร




" id="King.sinthura@gmail.com::13485::5841060524::อัยยรัช สินธุรา::Room 12(Flr 5)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td> <td style="background-color:blueviolet;cursor:default;" title=" อัยยรัช สินธุรา
จองห้อง Room 12(Flr 5)
 เวลา 17.00-19.00 น. 
นิสิตที่ร่วมใช้ห้อง 
อรณิชา เพ็ชรทรัพย์
นิติพงศ์ น้อยพยัคฆ์
หรรษลักษณ์ โกศัยภัทร์
ศุภรัฐกรณ์ เสถียรสถาพร




" id="King.sinthura@gmail.com::13485::5841060524::อัยยรัช สินธุรา::Room 12(Flr 5)::19 พฤศจิกายน 2561::17.00-19.00 น.::"  data-toggle="tooltip"><span class="trans">|</span></td><td title="Room 12(Flr 5)::2018-11-19::19.00-20.00" id=""><span class="trans">|</span></td> <td title="Room 12(Flr 5)::2018-11-19::20.00-21.00" id=""><span class="trans">|</span></td> <td title="Room 12(Flr 5)::2018-11-19::21.00-22.00" id=""><span class="trans">|</span></td> <td title="Room 12(Flr 5)::2018-11-19::22.00-23.00" id=""><span class="trans">|</span></td> <td title="Room 12(Flr 5)::2018-11-19::23.00-24.00" id=""><span class="trans">|</span></td> </tr>
		</table> 
		
</div>

<div class = "form">
<br><FORM name = "rsroom" id = "rsroom" action = "record.php" method = "POST" onsubmit="return validateForm()" autocomplete="off">
<input autocomplete="false" name="hidden" type="text" style="display:none;">
	 <p>รายละเอียดการจอง</p>
	 <ol class = "rlist">
	 </ol>
<p class="aright red">* Required field</p>
<div  class="cbp-mc-form">
<div class="cbp-mc-column">
<label>Degree</label>
<select name="elevel">
            <option value="ปริญญาตรี">Bachelor</option>
            <option value="ปริญญาโท">Master</option>
            <option value="ปริญญาเอก">Doctor</option>
			<option value="บุคคลากรจุฬาฯ">CU Personnel</option>
			</select><br>
<label>1) Student ID <span class="red">*</span> </label><input type="text" name="code1" onblur="showUser(this.value,'txtHint1','2018-11-19',this.form.numofhour.value)" id="code1" class="inputtext selector numbersOnly"><span id="txtHint1"><b></b></span><br>
<label>Email  <span class="red">*</span> </label><input type = "text" name= "email" id= "email"  class="inputtext3"><br>
<label>2) Student ID <span class="red">*</span> </label><input type = "text" name= "code2" onblur="showUser(this.value,'txtHint2','2018-11-19',this.form.numofhour.value)" id= "code2"  class="inputtext selector numbersOnly"><span id="txtHint2"><b></b></span><br>
</div>
	  				<div class="cbp-mc-column">
<label>3) Student ID <span class="red">*</span> </label><input type = "text" name= "code3" onblur="showUser(this.value,'txtHint3','2018-11-19',this.form.numofhour.value)" id= "code3"  class="inputtext selector numbersOnly"><span id="txtHint3"><b></b></span><br>
<label>4) Student ID <span class="red">*</span> </label><input type = "text" name= "code4" onblur="showUser(this.value,'txtHint4','2018-11-19',this.form.numofhour.value)"  id= "code4"  class="inputtext selector numbersOnly"><span id="txtHint4"><b></b></span><br>
<label>5) Student ID</label><input type = "text" name= "code5"  onblur="showUser(this.value,'txtHint5','2018-11-19',this.form.numofhour.value)" id= "code5"  class="inputtext selector numbersOnly"><span id="txtHint5"><b></b></span><br>
<label>6) Student ID</label><input type = "text" name= "code6"  onblur="showUser(this.value,'txtHint6','2018-11-19',this.form.numofhour.value)" id= "code6"  class="inputtext selector numbersOnly"><span id="txtHint6"><b></b></span><br>
	  				</div>
	  				<div class="cbp-mc-column">
<label>7) Student ID</label><input type = "text" name= "code7"  onblur="showUser(this.value,'txtHint7','2018-11-19',this.form.numofhour.value)" id= "code7"  class="inputtext selector numbersOnly"><span id="txtHint7"><b></b></span><br>
<label>8) Student ID</label><input type = "text" name= "code8"  onblur="showUser(this.value,'txtHint8','2018-11-19',this.form.numofhour.value)" id= "code8"  class="inputtext selector numbersOnly"><span id="txtHint8"><b></b></span><br>
<label>9) Student ID</label><input type = "text" name= "code9"  onblur="showUser(this.value,'txtHint9','2018-11-19',this.form.numofhour.value)" id= "code9"  class="inputtext selector numbersOnly"><span id="txtHint9"><b></b></span><br>
<label>10) Student ID</label><input type = "text" name= "code10"  onblur="showUser(this.value,'txtHint10','2018-11-19',this.form.numofhour.value)" id= "code10"  class="inputtext selector numbersOnly"><span id="txtHint10"><b></b></span><br>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Submit" /></div>

				</form>
</div></div>
<div class = "form2"> 

<br><FORM name = "cancelr" action = "cancel.php" method = "POST">
<p class="canceln">ผู้จอง : </p>
<p class="aright">* Required field</p>
<p>ถ้าต้องการยกเลิกการจองห้องนี้ ใส่อีเมล์ด้านล่าง</p>
<div class="formLayout2">
<label>อีเมล์*</label><input type = "text" name= "email" id= "email" size = "30" class="inputtext5"><br>
<label></label><input type = "submit" value="submit">
</div></form>
</div>


</body>
</html>      
