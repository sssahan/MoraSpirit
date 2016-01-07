<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href={{asset("/css/bootstrap.min.css")}} rel="stylesheet">

    <link href={{asset("/fonts/css/font-awesome.min.css")}} rel="stylesheet">
    <link href={{asset("/css/animate.min.css")}} rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href={{asset("/css/custom.css")}} rel="stylesheet">
    <link href={{asset("/css/icheck/flat/green.css")}} rel="stylesheet">


    <script src={{asset("/js/jquery.min.js")}}></script>

    <!--[if lt IE 9]>
    <script src={{asset("../assets/js/ie8-responsive-file-warning.js")}}></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src={{asset("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js")}}></script>
    <script src={{asset("https://oss.maxcdn.com/respond/1.4.2/respond.min.js")}}></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;">

<div class="">

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form action = {{route('register')}}>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" name = "id" class="form-control" placeholder="ID" required="" />
                    </div>
                    <div>
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                    </div>
                    <div>
                        <input type="text" name="contactNo" class="form-control" placeholder="Contact Number" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" >Register</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>

    </div>
</div>

</body>

</html>