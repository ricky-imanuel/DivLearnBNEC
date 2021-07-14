<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" {{ URL::asset('loginAndRegisterPage.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
</head>
<body>
    <div class="navbarAndContent">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="https://playvalorant.com/id-id/"><img src="./assets/logo.jpg" alt=""></a>
              
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Article</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Competition
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Live Streaming</a></li>
                      <li><a class="dropdown-item" href="#">Leaderboard</a></li>
                      <li><a class="dropdown-item" href="#">History Match</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('loginAndRegister')}}">Register</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div class="fullContent">
            
            <div class="row" id="bodyForm">
                <div class="col-md-6 mx-auto p-0">
                    <div class="card">
                        <div class="login-box">
                            <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
                                <div class="login-space">
                                    <div class="login">
                                        <form action="{{route('home')}}">
                                            <div class="group"> <label for="user" class="label">Email Address</label> <input id="user" type="text" class="input" placeholder="Email address" required> </div>
                                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Password" required> </div>
                                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                            <div class="group"> <input type="submit" class="button" value="Login"> </div>
                                        </form>
                                        <div class="hr"></div>
                                        <div class="foot"> <input id="tab-2" type="radio" name="tab" class="sign-in"><label for="tab-2" class="tab" style="font-size: 16px; text-transform: none;">Dont have Account?</label> </div>
                                    </div>
                                    <div class="sign-up-form">
                                        <form action="{{route('home')}}">
                                            <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="text" class="input" placeholder="Email address" required> </div>
                                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" class="input" placeholder="Username" required> </div>
                                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Password" required> </div>
                                            <div class="group"> <input id="checkRegis" type="checkbox" class="check" checked> <label for="checkRegis"><span class="icon"></span> I Agree with term & conditions</label> </div>
                                             <!-- <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password"> </div> -->
                                            <div class="group"> <input type="submit" class="button" value="Register"> </div>
                                        </form>
                                        <div class="hr"></div>
                                        <div class="foot"> <label for="tab-1">Already Have Account?</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
   
    <div class="footer">
        <div class="footerTop">
          <div class= "SocialMedia">
            <h5>Social Media</h5>
            <a href="https://www.youtube.com/"><img src="./assets/youtube.png" alt="">Valorant Conqueror Cup</a>
            <a href="https://www.instagram.com/"><img src="./assets/ig.jfif" alt=""> Valorant Conqueror Cup</a>
            <a href="https://www.facebook.com/"><img src="./assets/facebook.webp" alt="" >Valorant Conqueror Cup</a>
            </div>
            <hr>
              <div class="contactPerson">
              <h5>Contant Person</h5>
              <br>
                <h6>Ricky Imanuel</h6>
                <p>08123456789</p>
                <p>ricky@gmail.com</p>
            </div>
        </div>
        <div class="copyright">
          &copy;2021 Copyright by Ricky imanuel 
        </div>
      </div>
   


</body>
</html>