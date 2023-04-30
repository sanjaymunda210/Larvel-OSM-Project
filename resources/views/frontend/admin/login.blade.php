@extends('frontend.admin.layouts.main')
@push('title')
    <title>Admin / Online Shopping Mart</title>
@endpush
@section('admin-main-section')
    <!-- login body-->

    <div class="login_body">
        <div class="login_card card">
            <img src="{{ url('assets/images/Banner_Hamburger_400.webp') }}" alt="banner">
            <div class="login_form">
                <h4>Login or Signup</h4>
                <form method="post" action="">
                    <div class="input_bar">
                        <input type="tel" name="userId" placeholder="10 Digit Mobile Number" pattern="[0-9]{10}"
                            required>
                    </div>
                    <div class="login_instruction">
                        By continuing, I agree to the <a href="#">Terms of Use</a> &
                        <br /><a href="#">Privacy Policy</a>
                    </div>
                    <div class="login_btn">
                        <button name="login">CONTINUE</button>

                    </div>
                    <div class="trouble">
                        Have trouble logging in? <a href="#">Get help</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
