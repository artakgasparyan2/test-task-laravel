<div class="main-w3layouts wrapper">
    <h1>SignUp Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type='hidden' name='recaptcha_token' id='recaptcha_token'>
                <input class="text" type="text" name="name" placeholder="Full name" required>
                @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                <input class="text email" type="text" name="birthday" placeholder="10/10/10" required="">
                @if($errors->has('birthday'))
                    <div class="error">{{ $errors->first('birthday') }}</div>
                @endif
                <input class="text email" type="email" name="email" placeholder="Email" >
                @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
                <input class="text" type="password" name="password" placeholder="Password" required="">
                @if($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                @endif
                <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                @if($errors->has('password_confirmation'))
                    <div class="error">{{ $errors->first('password_confirmation') }}</div>
                @endif
                <input type="file" name="image" class="text">
                @if($errors->has('image'))
                    <div class="error">{{ $errors->first('image') }}</div>
                @endif
                <input type="submit" value="SIGNUP">
            </form>
            <p>Already have an Account? <a href="{{route('loginPage')}}"> Login Now!</a></p>
        </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
        <p>This site is protected by reCaptcha</p>
    </div>
    <div class="colorlibcopy-agile">

    </div>
</div>
