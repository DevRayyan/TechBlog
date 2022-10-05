<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<style>
    body {
        background: #17181F;
        /* min-height: 100vh; */
        position: relative mb-3;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .grapper {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        position: relative;
        width: 100%;
        height: 100vh;

    }

    .sign {
        background: #17181F21;
        backdrop-filter: blur(25px);
        z-index: 9999999 !important;
        padding: 0 40px 40px 40px;
        border-radius: 10px;

    }

    .oaths {
        border: 2px solid #353541 !important;
        border-radius: 10px;
        background: #17181F;
        outline: none;

    }

    .signIn input::placeholder {
        color: aliceblue;
        font-size: .8rem;

    }

    .gradient_circle3 {
        content: "";
        position: absolute;
        top: 10%;
        right: 10%;
        width: 100px;
        height: 100px;
        background: linear-gradient(25deg, #000000, #2D2D3D);
        box-shadow: 1px 1px 10px #0000001c;
        /* transform: translate(-50%,100%); */
        border-radius: 50%;
        z-index: -1;
    }

    .gradient_circle2 {
        content: "";
        position: absolute;
        top: -5%;
        left: 10%;
        width: 200px;
        height: 200px;
        background: linear-gradient(25deg, #dc3545, transparent);
        box-shadow: 1px 1px 10px #0000001c;
        /* transform: translate(-50%,100%); */
        border-radius: 50%;
        z-index: -1;
    }

    .gradient_circle {
        content: "";
        position: absolute;
        bottom: -5%;
        right: 10%;
        width: 200px;
        height: 200px;
        background: linear-gradient(25deg, #0d6efd, transparent);
        box-shadow: 1px 1px 10px #0000001c;
        /* transform: translate(-50%,100%); */
        border-radius: 50%;
        z-index: -1;
    }

    .fs-7 {
        font-size: .9rem;

    }

    .c-p {
        cursor: pointer;
    }

    .sign_btn {
        background: linear-gradient(to right, #17181F, #2D2D3D, #17181F);
        box-shadow: 1px 1px 10px #13141a;
    }
</style>

<body>
    <span class="gradient_circle"></span>
    <span class="gradient_circle2"></span>
    <span class="gradient_circle3"></span>
    <div class="grapper">
        <div class="sign login mt-5 pt-5 mb-0 pb-0">
            <div class=" mb-5 d-flex justify-content-between">
                <h1 class="text-light login_trigger c-p">Sign in.</h1>
                <h1 class="text-muted register_trigger c-p">Sign up</h1>
            </div>
            <div class="d-flex flex-column">
                <button class="btn oaths text-light px-5 mb-3"><i class="fa-brands fa-google me-1"></i> Continue with Google</button>
                <button class="btn oaths text-light px-5 mb-3"><i class="fa-brands fa-facebook me-1"></i> Continue with Facebook</button>
                <button class="btn oaths text-light px-5 "><i class="fa-brands fa-github me-1"></i> Continue with Github</button>
                <div class="text-center text-light my-3">or</div>
                <input placeholder="Email" type="email" class="oaths py-2 text-light mb-3 ps-3 fs-7" required>
                <input placeholder="Password" type="password" class="oaths py-2 text-light mb-4 ps-3 fs-7" required>
                <input type="submit" value="Signin." type="button" class="bg-primary sign_btn py-2 text-light border-0 rounded fs-7">
            </div>
            <div class="lh-1">
                <p class=" mt-4 mb-3 text-muted text-center fs-7">Dont have an account? <span class="text-light">Create Account</span></p>
                <p class=" text-light text-center fs-7">Forget Password?</p>
            </div>

        </div>
        <div class="sign register mt-5 pt-5 mb-0 pb-0">
            <div class=" mb-5 d-flex justify-content-between">
                <h1 class="text-muted login_trigger c-p">Sign in.</h1>
                <h1 class="text-light register_trigger c-p">Sign up</h1>
            </div>
            <div class="d-flex flex-column">
                <button class="btn oaths text-light px-5 mb-3"><i class="fa-brands fa-google me-1"></i> Continue with Google</button>
                <button class="btn oaths text-light px-5 mb-3"><i class="fa-brands fa-facebook me-1"></i> Continue with Facebook</button>
                <button class="btn oaths text-light px-5 "><i class="fa-brands fa-github me-1"></i> Continue with Github</button>
                <div class="text-center text-light my-3">or</div>
                <div class="d-flex flex-column position-relative mb-3 position-relative">
                    <input data-id="1" placeholder="username" type="text" class="check-data username oaths py-2 text-light  ps-3 fs-7" required>
                    <span class="check-username position-absolute top-0 py-2 end-0 pe-2 mb-3 fs-7 fw-light  text-light"> </span>
                </div>
                <div class="d-flex flex-column position-relative mb-3">
                    <input data-id="2" placeholder="Email" type="email" class="check-data email oaths py-2 text-light ps-3 fs-7" required>
                    <span class="check-email position-absolute top-0 py-2 end-0 pe-2 mb-3 fs-7 fw-light text-light"></span>
                </div>
                <div class="d-flex flex-column position-relative mb-3">
                    <input data-id="3" placeholder="Password" type="password" class="check-data password oaths py-2 text-light  ps-3 fs-7" required>
                    <span class="check-password position-absolute top-0 py-2 end-0 pe-2 mb-3 fs-7 fw-light text-light"></span>
                </div>
                <div class="d-flex flex-column position-relative mb-3">
                    <input data-id="4" placeholder="correct Password" type="password" class="check-data  cpassword oaths py-2 text-light ps-3 fs-7" required>
                    <span class="check-cpassword position-absolute top-0 py-2 end-0 pe-2 mb-3 fs-7 fw-light text-light"></span>
                </div>

                <input type="submit" value="Signup..." type="button" class="bg-primary sign_btn py-2 text-light border-0 rounded fs-7 btn" id="sign-up">
            </div>
            <div class="lh-1">
                <p class=" mt-4 mb-3 text-muted text-center fs-7">You have an account? <span class="text-light">Login here</span></p>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('.register').hide()
        $('.login').show()
        $(".login_trigger").click(function() {
            $('.register').hide()
            $('.login').show()
        })
        $(".register_trigger").click(function() {
            $('.register').show()
            $('.login').hide()
        })
        $("#sign-up").click(function (e) { 
            e.preventDefault();
            alert("taha")
         })
        $('.check-data').keyup(function() {
            let id = $(this).data('id');
            let keyword = $(this).val(); 

            if (id == 1) {  
                $.ajax({
                    url: "register_validation.php",
                    type: "POST",
                    data: {
                        key: keyword,
                        user: "user"
                    },
                    success: function(response) {
                        if (response == "user") {
                            $(".check-username").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'>Username Already Exist!</span>")
                            $("#sign-up").addClass("disabled");
                        } else if (keyword.length < 4 || keyword.length > 16) {
                            $(".check-username").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'> 4 - 17 Characters</span>")
                            $("#sign-up").addClass("disabled");
                        } else {
                            $(".check-username").html("<span  style='background: #17181F;'><i class='fa-solid fa-check text-success'><i/></span>")
                        }
                    }
                })
            }
            if (id == 2) {
                $.ajax({
                    url: "register_validation.php",
                    type: "POST",
                    data: {
                        key: keyword,
                        email: "email"
                    },
                    success: function(response) {
                        if (response == "email") {
                            $(".check-email").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'>Email Already Exist!</span>")
                            $("#sign-up").addClass("disabled");
                        } else if (keyword.length - 4 != keyword.indexOf('.') || keyword.length - 10 != keyword.indexOf('@')) {
                            $(".check-email").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'> Invalid Email</span>")
                            $("#sign-up").addClass("disabled");
                        } else {
                            $(".check-email").html("<span  style='background: #17181F;'><i class='fa-solid fa-check text-success'><i/></span>")
                        }
                    }
                })
            }
            if (id == 3) {
                cpass = $(".cpassword").val();
                if (keyword.length < 8 || keyword.length > 21) {
                    $(".check-password").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'>8 - 20 characters</span>")
                    $("#sign-up").addClass("disabled");
                } else {
                    $(".check-password").html("<span  style='background: #17181F;'><i class='fa-solid fa-check text-success'><i/></span>")
                }
            }
            if (id == 4) {
                pass = $(".password").val();
                console.log(pass)
                if (keyword !== pass) {
                    $(".check-cpassword").html("<span class='text-danger fs-7 fw-normal' style='background: #17181F;'>Not Match</span>")
                    $("#sign-up").addClass("disabled");
                } else {
                    $(".check-cpassword").html("<span  style='background: #17181F;'><i class='fa-solid fa-check text-success'><i/></span>")
                }
            }

        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>

</html>