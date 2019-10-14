@extends('login.loginMaster')
@section('title')
    Login
@endsection()
@section('loginpage')
    <div class="container-login100">
    <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(loginPage/images/banner.png);background-color: rgba(0, 0, 0, 0.1);">
					<span class="login100-form-title-1">

					</span>
        </div>
       <div>
           @if (\Session::has('error'))
               <div class="alert alert-danger">
                   <ul>
                       <li style="text-align: center;">{!! \Session::get('error') !!}</li>
                   </ul>
               </div>
           @endif
       </div>



        <form class="login100-form validate-form" action="{{route('adminlogin')}}" method="post">
            {{ csrf_field() }}
            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                <span class="label-input100">Email Id</span>
                <input class="input100" type="text" name="email" placeholder="Enter Email Id">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" name="password" placeholder="Enter password">
                <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div >
                    <a href="#" class="txt1">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection()