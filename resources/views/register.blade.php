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
   .register{
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
   .register-header{
      height:100px;
      background-color:#BAC9B8;
      border-radius:10px;
      align-items:center;
   }
   .register-header img{
      height:70px;
      width:70px;
   }
   .register-header h3{
      font-size:45px;
      color:#585858;
   }
   .register-fill h4{
      font-size:35px;
      color:#585858;
   }
   .register-fill input{
      background-color:#BAC9B8;
      border:2px solid #3D5538;
      border-radius:5px;
      width:500px;
      height:60px;
      padding:0 15px;
   }
   .register-fill select{
      width:200px;
      height:60px;
      background-color:#BAC9B8;
      border:2px solid #3D5538;
      border-radius:5px;
      font-size:23px;
      color:#3D5538;
   }
   .register-fill-items5 button{
      width:220px;
      height:60px;
      border:none;
      background-color:#3D5538;
      border-radius: 5px;
      font-size:35px;
      color:#F0F8FF;
   }
   .register-fill-items5 button:hover{
      background-color:#597154;
   }
   .register-fill-items5 a{
      font-size:35px;
      color:#F0F8FF;
   }
   .register-fill-items5 a:hover{
      text-decoration:none;
      color:#F0F8FF;
   }

   ::placeholder{
      font-size:23px;
      color:#3D5538;
   }
   .register-sex option{
      font-size:23px;
   }
   .register-question{
      font-size:25px;
   }
   .register-fill input[type]{
      font-size:23px;
      color:#3D5538;
   }

   /********** start footer **********/
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
   /********** end footer **********/

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
         </div>
         <div class="register p-0 col-9">
            <div class="register-container mx-5 my-4">
               <div class="register-header d-flex">
                  <div class="register-header-img ml-5">
                     <img src="{{asset('img/menu-logo/users.png')}}" alt="">
                  </div>
                  <div class="register-header-h ml-4">
                     <h3>สมัครสมาชิก</h3>
                  </div>
               </div>
               <div class="register-fill my-5">
                  <form action="#" method="post">
                     <div class="register-fill-items1 row">
                        <div class="register-username col-6 mb-4">
                           <h4>ชื่อผู้ใช้</h4>
                           <input type="username" name="username" placeholder="Username" require>
                        </div>
                        <div class="register-password col-6">
                           <h4>รหัสผ่าน</h4>
                           <input type="password" name="password" placeholder="Password" require>
                        </div>
                     </div>
                     <div class="register-fill-items2 row mb-4">
                        <div class="register-cpassword col-6">
                           <h4>ยืนยันรหัสผ่าน</h4>
                           <input type="password" name="confirmpassword" placeholder="Confirm Password" require>
                        </div>
                        <div class="register-name col-6">
                           <h4>ชื่อ-นามสกุล</h4>
                           <input type="text" name="name" placeholder="ชื่อ - นามสกุล" require>
                        </div>
                     </div>
                     <div class="register-fill-items3 row mb-4">
                        <div class="register-sex col-6">
                           <h4>เพศ</h4>
                           <select name="sex" class="pl-2" require>
                              <option select>เลือก</option>
                              <option value="male">ชาย</option>
                              <option value="female">หญิง</option>
                           </select>
                        </div>
                        <div class="register-email col-6">
                           <h4>อีเมล</h4>
                           <input type="email" name="email" placeholder="อีเมล" require>
                        </div>
                     </div>
                     <div class="register-fill-items4 row mb-5">
                        <div class="register-phone col">
                           <h4>เบอร์โทร</h4>
                           <input type="text" name="phone" placeholder="เบอร์โทรศัพท์" require>
                        </div>
                     </div>
                     <div class="register-fill-items5 mb-5 d-flex">
                        <button type="submit">สมัคร</button>
                        <button class="bg-danger ml-3"><a href="#">ยกเลิก</a></button>
                     </div>
                  </form>
                  <span class="register-question">สมัครสมาชิกแล้ว? <a href="#">เข้าสู่ระบบ</a></span>
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
