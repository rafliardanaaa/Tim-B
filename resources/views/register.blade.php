<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register | Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="mr-3">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign Up Start -->

        <div class="container-fluid">
                <div class="align-items-center justify-content-center w-100 h-100">
                    <div class="bg">
                        <!-- form start -->
                        <form action="{{ route('sign-up') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <!-- title -->
                                <div class="">
                                    <h1 class="text-center mb-5 text-dark">SIGN UP</h1>
                                </div>
                                <!-- name here -->
                                <div class="form-floating mb-3 border-bottom border-danger mb-3 text-dark">
                                    <input type="text" name="name" class="form-control bg-transparent border-0 @error('name') is-invalid @enderror" id="floatingInput" placeholder="Your name here ....">
                                    <label for="floatingInput">Username</label>
                                    @error('name')
                                        <div class="valid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!-- email -->
                                <div class="form-floating mb-3 border-bottom border-danger">
                                    <input type="email" name="email" class="form-control bg-transparent border-0  @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                    @error('email')
                                    <div class="valid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!-- password -->
                                <div class="form-floating mb-4 border-bottom border-danger">
                                    <input type="password" name="password" class="form-control bg-transparent border-0 @error('password') is-invalid @enderror" id="floatingInput" placeholder="Insert Your Password">
                                    <label for="floatingInput">Password</label>
                                    @error('password')
                                    <div class="valid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <!-- CTA -->
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                                    <!-- back to sign up -->
                                    <p class="text-center mb-0">Already have an Account? <a href="{{ url('/sign-in') }}">Sign In</a></p>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!-- Sign Up End -->

        <!-- image start -->
        <img src="{{ asset('28_img/sign-up.png') }}" alt="#" class="w-50 h-100">
        <!-- image end -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
