<!DOCTYPE html>
<html lang="en">
<head>
    <title>Microsoft Student Tech Club - Alexandria University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <style>
        @font-face{
            font-family: "Thonburi-Bold";
            src: url('{{ asset('font/segoeui.ttf') }}'),
            url('{{ asset('font/segoeui.ttf') }}'); /* IE */
        }
        body {
            font-family: Thonburi-Bold;
        }

        .carousel-control.left, .carousel-control.right {
            background-image: none;
            z-index:7;
        }
        .ontopheader {
            height: 15%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right:0;
            z-index: 10;
            pointer-events:none;
        }
        a {
            color: #fab133;
        }
        a:link {
            color: #fab133;
        }
        a:visited {
            color: #fab133;
        }
        a:hover {
            color: #fab133;
        }
        textarea:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #fab133;

        }
    </style>
</head>
<body>

<!--header-->
<div class="container ontopheader" style="display:flex;justify-content:center;align-items:center;">
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" src="{{ asset('image/logo-white.png') }}" alt="logo">
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-2">
            <a href="#" class="btn1 btn1-primary1 btn1-lg1 outline1" role="button">Sign in</a>
        </div>
    </div>
</div>

<!--Slider-->
<header id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="filll" style="background-color: black; opacity: 0.6"></div>
            <div class="fill" style="background-image:url('{{ asset('image/slider/1.jpg') }}');"></div>
            <div class="carousel-caption">
                <h1>End of summer courses</h1>
                <h4>Web development , character design and windows phone.</h4>
                <br>
                <a href="#" class="btn btn-warning" role="button" style="color: white">Learn More</a>
                <br>  <br>  <br>
            </div>
        </div>

        <div class="item">
            <div class="filll" style="background-color: black; opacity: 0.6"></div>
            <div class="fill" style="background-image:url('{{ asset('image/slider/9.jpg') }}');"></div>
            <div class="carousel-caption">
                <h1>End of summer courses</h1>
                <h4>Web development , character design and windows phone.</h4>
                <br>
                <a href="#" class="btn btn-warning" role="button" style="color: white">Learn More</a>
                <br>  <br>  <br>
            </div>
        </div>

        <div class="item">
            <div class="filll" style="background-color: black; opacity: 0.6"></div>
            <div class="fill" style="background-image:url('{{ asset('image/slider/19.jpg') }}');"></div>
            <div class="carousel-caption">
                <h1>End of summer courses</h1>
                <h4>Web development , character design and windows phone.</h4>
                <br>
                <a href="#" class="btn btn-warning" role="button" style="color: white">Learn More</a>
                <br>  <br>  <br>
            </div>
        </div>

        <div class="item">
            <div class="filll" style="background-color: black; opacity: 0.6"></div>
            <div class="fill" style="background-image:url('{{ asset('image/slider/36.jpg') }}');"></div>
            <div class="carousel-caption">
                <h1>End of summer courses</h1>
                <h4>Web development , character design and windows phone.</h4>
                <br>
                <a href="#" class="btn btn-warning" role="button" style="color: white">Learn More</a>
                <br>  <br>  <br>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</header>

<!--projects-->
<div class="container-fluid fill" style="background-color: white">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" style="background-color: brown">hello</div>
                <div class="col-md-4" style="background-color: black">ya</div>
                <div class="col-md-4" style="background-color: blueviolet">bashar</div>
            </div>
        </div>
    </div>
</div>

<!--news-->
<div class="container-fluid fill" style="background-color: #f1f1f1">
    <!--title-->
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"style="text-align: center;font-size: 36px;padding-top: 40px">News</div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"style="padding-top: 40px">
                    <img src="{{ asset('image/slider/19%20-%20Copy.jpg') }}" class="img-thumbnail img-circle" alt="Cinque Terre" width="200" height="200"style="display : block; margin : auto;">
                </div>
                <div class="col-md-9" style="padding-top: 40px">
                    <p style="font-size: 18px">Portfolio</p>
                    <p style="font-size: 14px">
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    </p>
                    <a href="#" style="right: 0px;position: absolute;padding: 10px;">Read more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"style="padding-top: 40px">
                    <img src="{{ asset('image/slider/19%20-%20Copy.jpg') }}" class="img-thumbnail img-circle" alt="Cinque Terre" width="200" height="200"style="display : block; margin : auto;">
                </div>
                <div class="col-md-9" style="padding-top: 40px">
                    <p style="font-size: 18px">Portfolio</p>
                    <p style="font-size: 14px">
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    </p>
                    <a href="#" style="right: 0px;position: absolute;padding: 10px;">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--about-->
<div class="container-fluid fill" style="background-color: #fab133">
</div>

<!--contact us-->
<div class="container-fluid fill" style="background-color: white">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"style="text-align: center;font-size: 36px;padding-top: 40px">Contact Us</div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid" style="padding-top: 40px">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="name" placeholder="Name">
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <form role="form">
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" id="email" placeholder="Email">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row"style="padding-top: 30px">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="pwd" placeholder="Title">
                        </div>

                    </form>
                </div>
            </div>

            <div class="row"style="padding-top: 30px">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <form role="form">
                        <div class="form-group">
                            <textarea  class="form-control input-lg" rows="10" id="comment" placeholder="Message"></textarea>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <a href="#"  class="btn btn-warning btn-lg" role="button" style="color: white">Submit</a>
                </div>
                <div class="col-md-5"></div>
            </div>

        </div>
    </div>
</div>

<!--footer-->
<div class="container-fluid fill" style="background-color: #333">
</div>

</body>
</html>