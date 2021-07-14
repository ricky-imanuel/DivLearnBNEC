<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
</head>
<body>
    
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

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" >
              <h2>Valorant Conqueror Cup 2021!</h2>
              <p>Come and join us to challenge your skill in the biggest valorant competition around the world</p>
              <button type="button" class="btn btn-danger" >Register Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Valorant Conqueror Cup 2021!</h2>
              <p>Come and join us to challenge your skill in the biggest valorant competition around the world</p>
              <button type="button" class="btn btn-danger">Register Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/carousel3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Valorant Conqueror Cup 2021!</h2>
              <p>Come and join us to challenge your skill in the biggest valorant competition around the world</p>
              <button type="button" class="btn btn-danger">Register Now</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="content1">
        <div class="aboutUs">
          <h1>About Us</h1>
          <hr>
          <p> Valorant Conqueror Cup merupakan salah satu kompetisi e-sport game valorant terbesar di dunia yang diselenggarakan di Indonesia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ullam rerum ipsam error consequatur fuga quaerat in facilis obcaecati fugit dolore deleniti ex ad placeat cumque ea libero, nisi sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem eveniet cupiditate minus, libero aut velit ratione doloribus ipsum debitis amet iure eum harum saepe, quibusdam accusantium magnam animi maxime natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur, consectetur, qui tempora repellat dolores quo, odit molestiae eligendi ipsa cumque quas? Obcaecati et repudiandae nostrum, quaerat magni saepe blanditiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maxime placeat esse repudiandae accusantium rem rerum ipsam tenetur magni enim voluptatem tempore at, ab deserunt ullam voluptatibus suscipit sequi dolor!</p>
        </div>
  
        <div class="whyMustJoin">
          <h1>Why you must join ?</h1>
          <hr>
          <p>Karena ini adalah kompetisi valorant paling bergengsi di dunia sehingga pastinya banyak sekali orang yang ingin sekali mendapatkan penghargaan ini dan juga belum lagi total prize pool yang sangat menggiurkan yaitu Rp. 3.000.000.000,00. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A amet qui fuga, minus velit facilis, accusantium excepturi quae magni alias enim. Eligendi consectetur autem voluptatum neque vitae cupiditate minus sequi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dicta magni vero officiis facilis praesentium deserunt aperiam atque ab, qui et nulla? Quibusdam corrupti quisquam officia ipsam delectus quam voluptas?</p>
        </div>
      </div>
      <div class="content2">
        <h1>Timeline </h1>
        <section class="timeline">
          
          <ul>
            <li>
              <div>
                <time>16 April 2021 - 18 April 2021</time>
                <hr>
                Register 
              </div>
            </li>
            <li>
              <div>
                <time>19 April 2021 - 22 April 2021</time>
                <hr>
                Online Qualifier Match
              </div>
            </li>
            <li>
              <div>
                <time> 25 April 2021 </time>
                <hr>
                Top 64 Teams Qualification Match
              </div>
            </li>
            <li>
              <div>
                <time> 26 April 2021 </time>
                <hr>
                Top 32 Teams Qualification Match
              </div>
            </li>
            <li>
              <div>
                <time> 27 April 2021 </time>
                <hr>
                Top 16 Teams Qualification (Octo Final) Match
              </div>
            </li>
            <li>
              <div>
                <time> 28 April 2021 </time>
                <hr>
                Top 8 Teams Qualification (Quarter Final) Match
              </div>
            </li>
            <li>
              <div>
                <time> 29 April 2021 </time>
                <hr>
                Semi Final Match
              </div>
            </li>
            <li>
              <div>
                <time> 30 April 2021 </time>
                <hr>
                GrandFinal Match
              </div>
            </li>
            <li>
              <div>
                <time> 1 May 2021 </time>
                <hr>
                Announcement the winner
              </div>
            </li>
          
        </ul>
        </section>
      </div>

      <div class="proTips">
        <H1>Pro Tips Article</H1>

        <!-- <div class= "cardGroup">
          <div class="card" style="width: 18rem;">
            <img src="./assets/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Jett Ulti Tutorial</p>
              <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
              <br>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/card2.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">How To Entrance Hookah</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <br>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/006474900_1591163401-valorant-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">How to Care A short from A heaven</p>
              <p class="card-text"><small class="text-muted">Last updated 2 hour ago</small></p>
              <br>
            </div>
          </div>
        </div> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class= "cardGroup">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/card1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Jett Ulti Tutorial</p>
                    <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    <br>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="./assets/card2.jfif" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How To Entrance Hookah</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <br>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="./assets/006474900_1591163401-valorant-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How to Care A short from A heaven</p>
                    <p class="card-text"><small class="text-muted">Last updated 2 hour ago</small></p>
                    <br>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class= "cardGroup">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/card2.jfif" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How To Entrance Hookah</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <br>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="./assets/006474900_1591163401-valorant-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How to Care A short from A heaven</p>
                    <p class="card-text"><small class="text-muted">Last updated 2 hour ago</small></p>
                    <br>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                  <img src="./assets/HD4dPwZgBQchdiDrXAetwX.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How to pick mid B in haven</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 hour ago</small></p>
                    <br>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class= "cardGroup">
                <div class="card" style="width: 18rem;">
                  <img src="./assets/006474900_1591163401-valorant-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">How to Care A short from A heaven</p>
                    <p class="card-text"><small class="text-muted">Last updated 2 hour ago</small></p>
                    <br>
                  </div>
                </div>
                  <div class="card" style="width: 18rem;">
                    <img src="./assets/HD4dPwZgBQchdiDrXAetwX.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">How to pick mid B in haven</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 hour ago</small></p>
                      <br>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img src="./assets/card4.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">How To Set Up dart in Hookah</p>
                      <p class="card-text"><small class="text-muted">Last updated 1 days ago</small></p>
                      <br>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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
      

     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>