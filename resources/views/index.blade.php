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
   }
   .containerxl{
      font-family: SukhumvitSet, sans-serif;
      max-width:1920px;
      width:100%;
      margin:0 auto;
   }
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
      height:1520px;
   }
   .nav-menu{
      background-color:#BAC9B8;
   }
   .content{
      background-color:#E9F1E6;
   }
   .menu-logo1{
      height:160px;
      width:100%;
   }
   .menu-logo1 img{
      width:100px;
      height:100px;
   }
   .menu-logo1 h3{
      font-size:45px;
      color:#585858;
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
               <a href="#" class="text-right">เข้าสู่ระบบ/</a>
               <a href="#" class="text-right">สมัครสมาชิก</a>
            </div>
         </div>
      </div>
   </div>
@endsection
<!---------- end header ---------->


   <!---------- start content ---------->
@section('content')
   <div class="containerxl">
      <div class="main row">
            <ul class="nav-menu mx-3 col-3">
               <li class="menu-logo1 d-flex justify-content-center align-items-center"><img src="{{asset('img/menu-logo/online-booking.png')}}" alt=""><h3 class="ml-3 font-weight-bold">FTU RRS</h3></li>
               <li><img src="{{asset('img/menu-logo/calendar.pn')}}" alt=""><h3>ปฎิทินการจองห้อง</h3></li>
               <li><img src="" alt=""><h3>ข้อมูลการจองห้อง</h3></li>
               <li><img src="" alt=""><h3>รายการห้องประชุม</h3></li>
               <li><img src="" alt=""><h3>เกี่ยวกัยเรา</h3></li>
            </ul>
         <div class="content col-9">
            <p></p>
         </div>
      </div>    
   </div>
@endsection
   <!---------- end content ---------->

   <!---------- start footer ---------->
   @section('footer')

   @endsection
   <!---------- start footer ---------->
