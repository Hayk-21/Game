<?php
    session_start();
    $_SESSION['error-p'] = '';
    $_SESSION['error-h4'] = '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Game of Desire / Sign in page</title>
    <link rel="icon" type="image/png" href="img/logo.png" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>
<body class="text-center"  style="background: #25282f">

<main class="form-signin">
    <form method="post" action="backend/">
        <img class="mb-4" src="img/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal" style="color: white">Please write your name</h1>

        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            <label for="name">Name</label>
            <br>
        </div>
        <!--<div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>-->

        <div class="checkbox mb-3">
            <label style="color: white">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="submit" onclick="validation()" id="submit" type="button">Get started !</button>
        <p class="mt-5 mb-3 text-muted" style="color: white">It's my work bro!</p>
    </form>
    <div class="container">
        <div class="row" id="errorblock">

            <!--<div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Max name length: 50</h4>
              <p>Please choose a shorter name.</p>
            </div>-->
        </div>
    </div>
</main>


<script>
    function validation() {
        var name = $('#name').val();
        var errElem = '';
        var errorH4 = '';
        var errorP = '';

        if (name == '') {
            errorH4 = 'The line is empty!';
            errorP = 'Please write your name.';
        } else if (name.length > 30) {
            errorH4 = 'Max name length: 30';
            errorP = 'Please choose a shorter name.';
        } else if (name.length < 3) {
            errorH4 = 'Min name length: 3';
            errorP = 'Please choose a longer name.';
        }

        errElem = "<div class='alert alert-danger' role='alert'>"+
            "<h4 class='alert-heading'>"+errorH4+"</h4>" +
            "<p>"+errorP+"</p></div>";

        if (name.length >= 3 && name.length <= 30 && name != '') {
            errElem = '';
            $.ajax({
                type: 'POST',
                url: '/room/logic.php',
                data: { name: name},
                success: function(data) {
                    alert(data);
                    // window.location.href = "/room/";
                }
            });
        }
        document.getElementById('errorblock').innerHTML = errElem;
    }
</script>

</body>
</html>
