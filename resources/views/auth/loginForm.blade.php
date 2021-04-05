<div class="main-w3layouts wrapper">
    <h1>Login Form</h1>
    <div class="main-agileinfo">
        @if(Session::has('error'))
            <h2 style="text-align: center">{{ Session::get('error') }}</h2>
        @endif
        <div class="agileits-top">
            <form action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                <input type='hidden' name='recaptcha_token' id='recaptcha_token'>
                <input class="text email" type="email" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="password" placeholder="Password" required="">
                <input type="submit" value="SIGNIN">
            </form>
            <p>Don't have an Account? <a href="{{route('registerPage')}}"> Register Now!</a></p>
        </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
        <p>This site is protected by reCaptcha</p>
    </div>
</div>
