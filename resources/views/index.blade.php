<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVD Euro VHS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="https://kit.fontawesome.com/5c2fca66e1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
    <header class="header">
        <div class="head">DVD Euro VHS</div>
        <nav class="nav">
            <section class="ss-icon">
                <span><i class="fa fa-facebook"></i></span>
                <span><i class="fa fa-twitter"></i></span>
                <span><i class="fa fa-instagram"></i></span>
               <a href="/logowanie"><span><i class="fa fa-sign-in-alt"></i></span></a>
            </section>
        </nav>
    </header>
    <div id="scroll"></div>
    <script>
        $(document).ready(function(){
            header = $('.header');
            head   = $('.head');
            navSocials = $('.nav');

                $(document).scroll(function(){
                    var top = $(this).scrollTop();
                    if(top>5){
                        header.addClass('headerActiver');
                        head.addClass('headActive');
                        navSocials.addClass('socialActive');
                    }
                    else{
                        header.removeClass('headerActive');
                        header.addClass('header');
                        head.removeClass('headActive');
                        head.addClass('head');
                        navSocials.removeClass('socialActive');
                        navSocials.addClass('nav');
                    }
            })
        })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>