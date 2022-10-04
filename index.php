<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS fontawesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body{
      background: var( --bg);
    }
:root{
  --light : #f8f9fa;
  --dark :#1A1F27;
  --light-border: rgba(72, 77, 88, 0.508);
  --dark-border: #212529;
  --bg:#17181F;

}
/* :root{
  --dark : #f8f9fa;
  --light :#212529;
    --light-border: #d5d5d5;
  --dark-border:  #212529;
  --bg:#ffffff;
} */
.light{
background: var(--light) !important;
}
.dark{
background: var(--dark) !important;
}
.color-light{
color: var(--light) !important;
}
.color_dark{
color: var(--dark) !important;
}
.light_border{
border-color: var(--light-border) !important;
}
.dark_border{
border-color: var(--dark-border) !important;
}
    .wrapper {
      display: flex;
    }

    @media (max-width:768px){

      aside{
        max-width: 0px ;
        /* transform: translateX(-100px); */
        transition: .3s;
        position: fixed;
        top: 0%;
        left: -100px;
        background: #fff;
        z-index: 9999;
        bottom: 0%;
      }
  .hide_siderbar{
    max-width:100px ;
        left: 0%;
        transition: .3s;
  }
  main header {

      left:0px !important;

    }
    }
    .logo {
      width: 100%;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .nav_active {
      position: relative;
      overflow: hidden;
      background: linear-gradient(to right bottom,#0D6EFD,#0047b2);
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.151);
    }

    li a {
      width: 100%;
      height: 100%;
      padding: 6px 19px;
      color: rgb(0, 0, 0);
    }

    li a:hover {
      color: #000;
    }

    .nav_active a:hover {
      color: rgb(255, 255, 255);
    }

    .nav_active a {
      color: rgb(255, 255, 255) !important;
    }

    main {
      width: 100%;
    }

    main header{
      position: fixed;
      height: 100px;
      background: #fff;
      left:105px;
      right: 0%;
      z-index: 9;
      transition: .4s;
    }
    /* main header{
      position: relative;
    } */

    .search_box {
      display: flex;
      width: 350px;
      height: 40px;
      position: relative;
    }

    .search_box input {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      padding-right: 45px;
    }

    .search_box span {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translate(0,-50%);
      color: grey;
    }

    .latest_cover {
      width: 100%;
      height: auto;

      border-radius: 5px;
    }

    .latest_cover img {
      border-radius: 5px;
    }
    .fs-7 {
      font-size: 0.8rem;
    }

    .sugest_active {
      background:#0D6EFD !important;
      color: #fff !important;
    }

    .content {
      min-height: 300px;
    }
.content_cover{
  height: 200px;
}
    .c-p {
      cursor: pointer;
    }


    .dropdown:hover {
      background: #00000010;
      color: #212529 !important;
    }

    #aside_toggle_show{
display: none;
    }
    .profile_img{
      width: 45px  !important;
      height: 45px !important;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <aside id="aside" class=" border-end light_border dark color-light">
      <div class="logo">
        <i class="fa-light fa-align-right"></i>
        <div class="ms-1 fs-5">Glacier</div>
      </div>
      <div class="asider-links">
        <ul class="list-unstyled text-center">
          <li class="nav_active text-light my-4 rounded-1 mx-4 py-1 ">
            <a href="#" class="color-light"><i class="fa-thin fa-house"></i></a>
          </li>
          <li class="my-4 rounded-1 mt-0 mx-4 py-1 ">
            <a href="#" class="color-light"><i class="fa-thin fa-user"></i></a>
          </li>
          <li class="my-4 rounded-1 mx-4 py-1 ">
            <a href="#" class="color-light"><i class="fa-thin fa-list"></i></a>
          </li>
          <li class="my-4 rounded-1 mx-4 py-1 ">
            <a href="#" class="color-light"><i class="fa-thin fa-comment-check"></i></a>
          </li>

          <li class="my-4 rounded-1 mx-4 py-1 ">
            <a href="#" class="color-light"><i class="fa-thin fa-arrow-up-left-from-circle"></i></a>
          </li>

        </ul>
      </div>
    </aside>
    <main>
      <style>.alert{
        width: 15px;
        height: 15px;
      display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    font-size: .6rem;
    top: 8px;
    right: 8px;
      }
    ._btn{
      background: linear-gradient(to bottom right,#0D6EFD,#0047b2);
      border: none;
    }
    .danger-gradient{
      background: linear-gradient(to bottom right,#dc3545,#a80011);
      border: none;
    }
    .dropdown-item:hover {
background: rgba(0, 0, 0, 0.074) !important;
backdrop-filter: blur(10px);
    }
      </style>
      <header style="height: 100px;" class="dark shadow border-bottom light_border d-flex justify-content-between align-items-center color-light">
        <div class="search_box ms-3">
          <input placeholder="What do you want" class="form-control dark color-light light_border" type="text" /><span><i class="fa-regular fa-magnifying-glass"></i></span>
        </div>
        <div>
          <ul class="list-unstyled m-0 d-flex align-items-center">
            <li>
              <button class="btn d-none _btn px-3 text-light bg-primary rounded-pill fs-7 ">Login</button>
              <button class="btn d-none color-light border light_border rounded-pill fs-7 ">Connect</button>
              <button class="btn btn-danger danger-gradient rounded-pill btn-sm fs-7 px-3 py-1 ms-auto ">Logout</button>

            </li>
            <li class="position-relative"><i class="p-3 fa-thin  fs-5 fa-envelope"></i><span class="alert bg-success rounded-circle p-0 ">1</span></li>
            <li class="position-relative"><i class="p-3 fa-thin  fs-5 fa-bell"></i><span class="alert bg-primary rounded-circle p-0 ">1</span></li>
            <div class="btn-group d-block d-lg-none">
              <li><i class="p-3 fa-thin profile_trigger fs-5 fa-user c-p" data-bs-toggle="dropdown"
                  aria-expanded="false"></i>
                <ul class="dropdown-menu dropdown-menu-end border light_border color-light" style="background-color: var(--dark)25;backdrop-filter: blur(25px);">
                  <li>
                    <div class="user_info d-flex align-items-center  pb-0 p-3">
                      <img class="rounded-circle" width="25px" height="25px" src="./Assets/Images/blog.png" alt="">
                      <h6 class="ms-1 me-3 mb-0 text-truncate fw-light">Muhammad Taha</h5>
                      <i class="fa-thin ms-auto fs-7 fa-edit c-p  p-2"></i>
                    </div>
                  </li>
                  <li><hr class="dropdown-divider light_border"></li>
                  <li><button class="dropdown-item color-light fw-light" type="button"><i class="fa-thin fs-7 fa-user me-2"></i>Edit Profile</button></li>
                  <li><button class="dropdown-item color-light fw-light" type="button"><i class="fa-thin fs-7 fa-gear me-2"></i>Settings</button></li>
                  <li><button class="dropdown-item color-light fw-light" type="button"><i class="fa-thin fs-7 fa-arrow-up-left-from-circle me-2"></i>Logout</button></li>
                </ul>
              </li>
            </div>
            <li id="aside_toggle" class="c-p"><i class="p-3 d-block d-md-none fa-thin fs-5 fa-bars"></i></li>
          </ul>
        </div>
      </header>
      <div class="row m-0  color-light" style=" margin-top:100px !important;">
        <div class="col-12 col-lg-8 border-end light_border ps-3 ">
          <div class="my-3 p-0 me-2">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="fw-normal">Article Of The Day</h2>
              <button class="btn btn-sm px-3 rounded-pill border light_border fw-light color-light">
                View More
              </button>
            </div>
            <div class="latest_cover mb-3 mt-2">
              <img width="100%" height="100%" style="object-fit: cover;" src="./Assets/Images/post1.png" alt="" />
            </div>
          </div>
          <div class="mt-4 p-0">
            <h2 class="fw-normal">Topic Match for You</h2>

            <div class="suggestions mt-3 mb-3">
              <a href="#" class="text-decoration-none sugest_active border light_border rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                HTML
              </a>
              <a href="#" class="text-decoration-none border light_border  rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                CSS
              </a>
              <a href="#" class="text-decoration-none border light_border  rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                JavaScript
              </a>
              <a href="#" class="text-decoration-none border light_border  rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                Core PHP
              </a>
              <a href="#" class="text-decoration-none border light_border  rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                Mysql Database
              </a>
              <a href="#" class="text-decoration-none border light_border  rounded-pill mx-1 p-0 py-1  px-2 fs-7 mb-2 text-muted">
                Premium Tricks
              </a>
            </div>
          </div>
          <div class="row m-0 d-flex">
            <div class="col-12 col-sm-6 col-md-4 mx-auto col-lg-6   ps-0">
              <div class="content  dark border light_border my-2">
                <div class="content_cover">
                  <img width="100%" height="100%" style="object-fit: cover;"src="./Assets/Images/blog.png" alt="" />
                </div>
                <div class="content_title p-2">
                  <h6 class="fw-normal">How to get canva premium totally free on one click</h6>
                  <p class="text-muted fs-7 lh-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas, rerum.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="profile_img rounded-circle"><img src="./Assets/Images/ads.jpg"  width="45px" height="100%" class="rounded-circle" style="object-fit: cover;" alt=""></div>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="lh-sm">
                        <span class="text-muted ms-2 me-1 fs-7">By</span><span class="color-light fs-7">Dev Rayyan</span>
                        <div class="c-p"><i class="fa-solid fa-heart ms-2 fs-7 text-danger"></i><span class="fs-7 ms-1 text-muted">25</span></div>
                      </div>
                      <div class="fs-7 text-muted">12-21-2020</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mx-auto col-lg-6  ps-0">
              <div class="content dark border light_border  my-2">
                <div class="content_cover">
                  <img width="100%" height="100%" style="object-fit: cover;" src="./Assets/Images/post.jpg" alt="" />
                </div>
                <div class="content_title p-2">
                  <h6 class="fw-normal">How to get canva premium totally free on one click</h6>
                  <p class="text-muted fs-7 lh-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas, rerum.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="profile_img rounded-circle"><img src="./Assets/Images/ads.jpg"  width="45px" height="100%" class="rounded-circle" style="object-fit: cover;" alt=""></div>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="lh-sm">
                        <span class="text-muted ms-2 me-1 fs-7">By</span><span class="color-light fs-7">Dev Rayyan</span>
                        <div class="c-p"><i class="fa-solid fa-heart ms-2 fs-7 text-muted"></i><span class="fs-7 ms-1 text-muted">25</span></div>
                      </div>
                      <div class="fs-7 text-muted">12-21-2020</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mx-auto col-lg-6  ps-0">
              <div class="content dark  border light_border  my-2">
                <div class="content_cover">
                  <img width="100%" height="100%" style="object-fit: cover;" src="./Assets/Images/post1.png" alt="" />
                </div>
                <div class="content_title p-2">
                  <h6 class="fw-normal">How to get canva premium totally free on one click</h6>
                  <p class="text-muted fs-7 lh-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas, rerum.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="profile_img rounded-circle"><img src="./Assets/Images/ads.jpg"  width="45px" height="100%" class="rounded-circle" style="object-fit: cover;" alt=""></div>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="lh-sm">
                        <span class="text-muted ms-2 me-1 fs-7">By</span><span class="color-light fs-7">Dev Rayyan</span>
                        <div class="c-p"><i class="fa-solid fa-heart ms-2 fs-7 text-muted"></i><span class="fs-7 ms-1 text-muted">25</span></div>
                      </div>
                      <div class="fs-7 text-muted">12-21-2020</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mx-auto col-lg-6  ps-0">
              <div class="content dark  border light_border  my-2">
                <div class="content_cover">
                  <img width="100%" height="100%" style="object-fit: cover;" src="./Assets/Images/blog.png" alt="" />
                </div>
                <div class="content_title p-2">
                  <h6 class="fw-normal">How to get canva premium totally free on one click</h6>
                  <p class="text-muted fs-7 lh-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas, rerum.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="profile_img rounded-circle"><img src="./Assets/Images/ads.jpg"  width="45px" height="100%" class="rounded-circle" style="object-fit: cover;" alt=""></div>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                      <div class="lh-sm">
                        <span class="text-muted ms-2 me-1 fs-7">By</span><span class="color-light fs-7">Dev Rayyan</span>
                        <div class="c-p"><i class="fa-solid fa-heart ms-2 fs-7 text-muted"></i><span class="fs-7 ms-1 text-muted">25</span></div>
                      </div>
                      <div class="fs-7 text-muted">12-21-2020</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="right_area d-none d-lg-block col-lg-4 my-3 p-0">
          <!-- user profile -->
          <div class="profile px-2">
            <div class="d-flex align-items-center">
              <div class="profile_img rounded-circle "><img width="45px" height="100%" class="rounded-circle" style="object-fit: cover;" src="./Assets/Images/ads.jpg" alt=""></div>
              <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="d-flex lh-sm ms-2 flex-column">
                  <span class="color-light fs-4">Rayyan Ali</span>
                  <span class="fs-7 text-muted">New Member</span>
                </div>
                <div class="fs-6 border light_border rounded-circle px-2 py-1 c-p"><i class="fa-thin fa-edit"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- advertisment space -->
          <style>
            .ads {
              position: relative;
              width: 100%;
              height: 200px;
              background: linear-gradient(to right bottom,
                  rgb(56, 56, 56),
                  rgb(0, 0, 0),
                  rgb(56, 56, 56));
              /* display: flex;
        justify-content: center;
        align-items: end; */
            }

            .ads:hover>.ads_close {
              opacity: 1;
              top: -20px;
            }

            .ads .ads_close {
              content: "";
              position: absolute;
              top: 0px;
              left: 50%;
              transform: translate(-50%);
              width: 45px;
              height: 45px;
              border-radius: 50%;
              background: rgba(0, 0, 0, 0.336);
              /* z-index: -1; */
              display: flex;
              justify-content: center;
              align-items: center;
              color: #fff;
              opacity: 0;
              transition: .3s;
            }
          </style>
          <div class="p-3 mt-3">
            <div class="ads rounded mb-4">
              <span class="ads_close c-p"><i class="fa-regular fa-xmark"></i></span>
              <img width="100%" height="100%" class="rounded" style="object-fit: cover;" src="./Assets/Images/ads.jpg" alt="">
              <button class="btn btn-sm _btn text-light  px-3 py-1 shadow position-absolute "
                style="right:15px;bottom: 15px;">Learn more</button>
            </div>
            <hr style="color: rgb(94, 94, 94);">
            <div class="ads rounded mb-4">
              <span class="ads_close c-p"><i class="fa-regular fa-xmark"></i></span>
              <img width="100%" height="100%" class="rounded" style="object-fit: cover;" src="./Assets/Images/ads.jpg" alt="">
              <button class="btn btn-sm _btn text-light  px-3 py-1 shadow position-absolute "
                style="right:15px;bottom: 15px;">Learn more</button>
            </div>
            <hr style="color: rgb(94, 94, 94);">
            <div class="ads rounded mb-4">
              <span class="ads_close c-p"><i class="fa-regular fa-xmark"></i></span>
              <img width="100%" height="100%" class="rounded" style="object-fit: cover;" src="./Assets/Images/ads.jpg" alt="">
              <button class="btn btn-sm _btn text-light  px-3 py-1 shadow position-absolute "
              style="right:15px;bottom: 15px;">Learn more</button>
            </div>
            <hr style="color: rgb(94, 94, 94);">
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
<script>
  // document.getElementById('aside_toggle').addEventListener("click",function(){
  //   document.getElementById('aside').classList.add("hide_siderbar");
  //   // alert('hello')
  // })
    $(document).ready(function(){

$('#aside_toggle').click(function(){
  $('#aside_toggle i').toggleClass('fa-xmark')
  $('#aside').toggleClass('hide_siderbar')

})
$(window).scroll(function(){
  if(($(window).scrollTop())>100){
$("header").toggleClass("nav_fixed")
  }else{
  }
})
})


// for bootstrap tooltip

</script>
<!-- javascript Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>