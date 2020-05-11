@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="/style/style.css">
@endsection
@section('content')
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
@endsection