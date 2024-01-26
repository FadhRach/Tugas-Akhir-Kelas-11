<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Plalogisc</title>
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="{{asset('CSS/login.css')}}">
    <script src="{{asset('CSS/login.js')}}"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
           <div class="title login">
              Login Form
           </div>
           <div class="title signup">
              Signup Form
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
           </div>
           <div class="form-inner">
              <form action="" method="POST" class="login">
                @csrf
                 <div class="field">
                    <input name="email" type="text" placeholder="Email Address" value="{{ old('email')}}">
                 </div>
                 <div class="field">
                    <input name="password" type="password" placeholder="Password" value="{{ old('password')}}">
                 </div>
                 <div class="pass-link">
                    <a href="/">Kembali</a>
                 </div>
                 <br>
                 @if($errors->any())
                 <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $item)
                              <li>{{ $item }}</li>
                          @endforeach
                      </ul>
                 </div>
                 @endif
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                 </div>
                 <div class="signup-link">
                    Belum Punya Akun?<a href="">Sign Up</a>
                 </div>
              </form>
              <form action="/signup" method="POST" class="signup">
               {{ csrf_field() }}
                 <div class="field">
                    <input name="name" type="text" placeholder="Name" required>
                 </div>
                 <div class="field">
                    <input name="email" type="text" placeholder="Email Address" required>
                 </div>
                 <div class="field">
                    <input name="password" type="password" placeholder="Password" required>
                 </div>
                 <div class="field">
                  <select name="id_eskul">
                      @foreach($user as $u)
                          <option value="{{ $u->id_eskul }}">{{ $u->eskul->namaeskul }}</option>
                      @endforeach
                  </select>
                  </div>

                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Signup">
                 </div>
              </form>
           </div>
        </div>
     </div>
     <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return false;
        });
     </script>
</body>
</html>