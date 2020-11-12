<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">


</head>

<body>
    <section id="logo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="img/img/my-logo.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>We're working hard and we are ready to launch in...</p>
                </div>
            </div>
        </div>
    </section>


    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="countdown">

                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="icons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.twitter.com" target="blank"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li></a>
                            <a href="https://www.facebook.com" target="blank"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
                            <a href="https://www.google.com" target="blank"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
                            <a href="https://www.instagram.com" target="blank"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li></a>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline" role="form" method="post" action="#signup">
                        <input type="email" class="form-control form-control-sm"name="email" placeholder="enter your email">
                        <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <script>
        $(function () {
            $('.countdown').countdown({
                date: "June 7, 2087 15:03:26"
            });
        });
    </script>
</body>

</html>