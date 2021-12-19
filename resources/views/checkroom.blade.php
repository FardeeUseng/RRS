@extends('layout.master')
@section('title','ระบบจองห้องประชุมออนไลน์')
<style>
   *{
      margin:0;
      padding:0;
      box-sizing:border-box;
   }
   body{
      height:100%;
      font-family: SukhumvitSet, sans-serif;
   }
   /* .containerxl{
      font-family: SukhumvitSet, sans-serif;
      max-width:1920px;
      width:100%;
      margin:0 auto;
   }  */
   .header-container{
      height:217px;
      background-color:#BAC9B8;
   }
   .header-logo img{
      width:120px;
      height:120px;
   }
   .header-logo-left{
      margin-left: 220px;
   }
   .header-logo-right{
      margin-left: 65px;
   }
   .header-logo-right h1{
      color:#585858;
   }
   .header-signup a{
      font-size:30px;
      color:#585858;
   }
   .main {
      height:100%;
   }
   .nav-menu{
      width:100px;
      background-color:#BAC9B8;
   }
   .content{
      background-color:#E9F1E6;
   }
   .nav-menu-logo{
      height:160px;
      width:100%;
   }
   .nav-menu-logo img{
      width:100px;
      height:100px;
   }
   .nav-manu-items li{
      display:flex;
      padding:20px;
      width:;
      height:90px;
      list-style: none;
      align-items: center;
   }
   .nav-manu-items li img{
      width:50px;
      height:50px;
   }
   .nav-manu-items li h3{
      align-items:center;
      margin-left:20px;
      display:inline;
      color:#585858;
   }
   .nav-manu-items li a:hover{
      text-decoration:none;
   }
   .nav-manu-items li a{
      display:flex;
      align-items:center;
   }
   .nav-manu-items li:nth-child(3){
      background-color:#3D5538;
   }
   .nav-manu-items li:nth-child(3) h3{
      color:#F0F8FF;
   }
   .nav-manu-items li:hover,.nav-manu-items a h3:hover{
      background-color:#72916C;
      color:#F0F8FF;
   }
   .nav-menu-logo h3{
      font-size:40px;
      color:#585858;
   }
   .header-signup-item a:hover{
      color:DodgerBlue;
      text-decoration:none;
   }
   .content-header{
      height:100px;
      background-color:#BAC9B8;
      border-radius:10px;
      align-items:center;
   }
   .content-header img{
      height:70px;
      width:70px;
   }
   .content-header h3{
      font-size:45px;
      color:#585858;
   }

   .content-search-button{
      background-color:#3D5538;
      color:#F0F8FF;
   }
   .content-search{
      justify-content:flex-end;
   }
   .content-search form{
      width:500px;
   }
   .content-table th{
      font-size:30px;
      font-weight: normal;
   }
   .content-table td{
      font-size:20px;
      font-weight: normal;
   }
   .content-table thead{
      background-color:#BAC9B8;
      color:#585858;
   }
   .content-table tbody{
      background-color:#CDD9CC;
      color:#585858;
   }
   .footer{
      background-color:#BAC9B8;
   }
   .footer-link li img{
      width:40px;
      height:40px;
   }
   .footer-link li{
      list-style: none;
   }
   .footer-top{
      display:flex;
      height:74px;
      justify-content:center;
      align-items:center;
   }
   .footer-top h3{
      font-size:40px;
      color:#585858;
      font-weight:bold;
   }
   .footer-buttom{
      display:flex;
      height:74px;
      justify-content:center;
   }

   .footer-link{
      width:350px;
      height:70px;
      align-items:center;
      justify-content:space-between;
   }
</style>
   
<!---------- start header ---------->
@section('header')
   <div class="containerxl">
      <div class="row header-container d-flex flex-row align-items-center">
         <div class="header-logo d-flex align-items-center col-8">
            <div class="header-logo-left">
               <img src="{{asset('img/Ftu_logo.png')}}">
            </div>
            <div class="header-logo-right">
               <h1 style="font-size:50px" class="font-weight-bold">FTU Room Reservation System</h1>
            </div>
         </div>         
         <div class="header-signup col-4 row">
            <div class="header-profile col-4">
               <img src="" alt="">
            </div>
            <div class="header-signup-item col-8 text-center">
               <a href="#" class="text-right">เข้าสู่ระบบ /</a>
               <a href="#" class="text-right">สมัครสมาชิก</a>
            </div>
         </div>
      </div>
   </div>
@endsection
<!---------- end header ---------->


   <!---------- start content ---------->
@section('content')
      <div class="main row">
         <div class="nav-menu col-3 p-0">
            <div class="nav-menu-logo d-flex justify-content-center align-items-center p-3"><img src="{{asset('img/menu-logo/online-booking.png')}}" alt=""><h3 class="ml-3 font-weight-bold">FTU RRS</h3>
            </div>
            <ul class="nav-manu-items pl-3">
               <li><a href="#"><img src="{{asset('img/menu-logo/calendar.png')}}" alt=""><h3>ปฎิทินการจองห้องประชุม</h3></a></li>
               <li><a href="#"><img src="{{asset('img/menu-logo/booking.png')}}" alt=""><h3>ข้อมูลการจองห้องประชุม</h3></a></li>
               <li><a href="#"><img src="{{asset('img/menu-logo/meeting-room.png')}}" alt=""><h3>รายการห้องประชุม</h3></a></li>
               <li><a href="#"><img src="{{asset('img/menu-logo/about-us.png')}}" alt=""><h3>เกี่ยวกับเรา</h3></a></li>
            </ul>
         </div>
         <div class="content p-0 col-9">
            <div class="content-container mx-5 my-4">
               <div class="content-header d-flex">
                  <div class="content-header-img ml-5">
                     <img src="{{asset('img/menu-logo/meeting-room.png')}}" alt="">
                  </div>
                  <div class="content-header-h ml-4">
                     <h3>รายการห้องประชุม</h3>
                  </div>
               </div>
               <div class="content-search d-flex mt-5 mb-4">
                  <form method="post" class="input-group">                  
                     <select class="custom-select" id="">
                        <option value="allbuilding" selected>อาคารทั้งหมด</option>
                        <option value="scienceandit">วิทยาศาสตร์และเทคโนโลยี</option>
                        <option value="arts">ศิลปศาสตร์และสังคมศาสตร์</option>
                        <option value="education">ศึกษาศาสตร์</option>
                        <option value="islamic">อิสลามศึกษา</option>
                     </select>
                     <button class="content-search-button px-2 rounded-right" type="submit">ค้นหา</button>
                  </form>
               </div>
               <div class="content-table bg-dark">
                  <table class="text-center table table-bordered">
                     <thead>
                        <tr>
                           <th>ลำดับ</th>
                           <th>ชื่อห้องประชุม</th>
                           <th>ขนาด</th>
                           <th>รองรับ</th>
                           <th>ผู้ดูแล</th>
                           <th>โทร</th>
                           <th>สถานะ</th>
                           <th>รายละเอียด</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>หอประชุมวันม.นอร์ มะทา</td>
                           <td>ใหญ่</td>
                           <td>1000</td>
                           <td>นาย ฟัรดี อูเซ็ง</td>
                           <td>0650505204</td>
                           <td class="text-success">ใช้งานได้</td>
                           <td><a href="#">ดูเพิ่มเติม</a></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>วิจัย</td>
                           <td>เล็ก</td>
                           <td>50</td>
                           <td>นาย นุรดิน เจ็ะเลาะห์</td>
                           <td>0650505204</td>
                           <td class="text-danger">ปิดปรับปรุง </td>
                           <td><a href="#">ดูเพิ่มเติม</a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="content-footer row">
                  <div class="content-footer-left col-7">
                     <p class="">จาก 1 ถึง 20 ทั้งหมด 100</p>
                  </div>
                  <div class="content-footer-right col-5">
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>   
@endsection
<!---------- end content ---------->

<!---------- start footer ---------->
@section('footer')
   <div class="footer">
      <div class="footer-top">
         <h3>Fatoni University</h3>
      </div>
      <div class="footer-buttom">
         <ul class="footer-link d-flex">
            <li><a href="#"><img src="{{asset('img/menu-logo/globe-grid.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{asset('img/menu-logo/facebook.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{asset('img/menu-logo/instagram.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{asset('img/menu-logo/twitter.png')}}" alt=""></a></li>
            <li><a href="#"><img src="{{asset('img/menu-logo/youtube.png')}}" alt=""></a></li>
         </ul>
      </div>
   </div>
@endsection
   <!---------- end footer ---------->