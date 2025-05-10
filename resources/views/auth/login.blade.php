
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INSITUTE LOGIN </title>
  <link rel="stylesheet" href="{{ asset('dist/style.css') }}">
</head>
<body>
   <h1> INSITUTE MANEGEMENT SYSTEM  </h1>
   <BR>
   <BR>

  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="#">
        <h1>Create Account</h1>


        <!-- <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div> -->


        <span>or use your email for registration</span>
        <BR>
        <BR>

        <input type="text" placeholder="Name" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <button>Sign Up</button>

      </form>
    </div>
    <div class="form-container sign-in-container">

      <form action=" {{ url('login_post') }}" method="post">
        <h1>Sign in</h1>
        {{ csrf_field() }}

        <!-- <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div> -->

        <span>or use your account</span>

        <BR>
        <BR>

        @include('_message')

        <input type="email" name="email" value="{{ old('email')}}" class="form-control" placeholder="Email" required/>
        <input type="password" name="password" class="form-control" placeholder="Password" required/>
        <a href="#">Forgot your password?</a>
        <button type="submit">Sign In</button>
      </form>


    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h2>Hello,</h2>
          <h1> WELCOME INSITUTE MANEGEMENT SYSTEM </h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <!-- <footer>
    <p>
      Created with <i class="fa fa-heart"></i> by
      <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
      - Read how I created this and how you can join the challenge
      <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
    </p>
  </footer> -->

<script src="{{ asset('dist/script.js')}}"></script>


</body>
</html>

