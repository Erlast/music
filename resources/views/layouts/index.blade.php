<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>
    <link href="{{ asset('templates/index/css/default.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('templates/index/css/fonts.css') }}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="{{ route('home') }}">music</a></h1>
                <p>Easy for <a href="{{ route('home') }}" rel="nofollow">search</a></p>
            </div>
        </div>
        <div id="menu" class="container">
            <ul>
                <li class="current_page_item"><a href="#" accesskey="1" title="">Главная</a></li>
                @if (Route::has('login'))

                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Вход</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                            @endauth

                        @endif
            </ul>
        </div>
    </div>
    <div id="page" class="container">
        <div id="content">
            <div class="post">
                <h2>Mauris vulputate dolor</h2>
                <p><img src="{{ asset('templates/index/images/img03.jpg') }}" alt="" class="image image-full"/></p>
                <p>This is <strong>Reddened </strong>, a free, fully standards-compliant CSS template designed by <a
                            href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photo used in this template is
                    from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under the <a
                            href="http://creativecommons.org/licenses/by/3/">Creative Commons Attribution</a> license,
                    so you’re pretty much free to do whatever you want with it (even use it commercially) provided you
                    give us credit for it. Have fun :)</p>
            </div>
            <div class="post">
                <div class="post-title">
                    <h2>Mauris vulputate dolor</h2>
                    <span>Donec pulvinar ullamcorper metus</span>
                </div>
                <p>Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum
                    sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum
                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit.
                    Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris
                    quis nunc. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar
                    mollis. </p>
            </div>
        </div>
        <div id="sidebar1">
            <div>
                <h2> mattis condimentum</h2>
                <ul class="style2">
                    <li class="first">
                        <h3><a href="#">Maecenas luctus lectus</a></h3>
                        <p><a href="#">Quisque dictum integer nisl risus, convallis, congue, and nibh.</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Integer gravida nibh</a></h3>
                        <p><a href="#">Quisque dictum integer nisl risus, sagittis, rutrum id, congue, and nibh.</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Fusce ultrices fringilla</a></h3>
                        <p><a href="#">Quisque dictum nisl risus, sagittis convallis, rutrum id, congue nibh.</a></p>
                    </li>
                    <li>
                        <h3><a href="#">Integer gravida nibh</a></h3>
                        <p><a href="#">Quisque dictum risus, sagittis convallis, rutrum congue, and nibh.</a></p>
                    </li>
                </ul>
                <a href="#" class="button">Read More</a></div>
        </div>
    </div>
    <div id="portfolio-wrapper">
        <div id="portfolio" class="container">
            <div class="title">
                <h2>Aenean elementum</h2>
                <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span></div>
            <div class="column1">
                <div class="box">
                    <h3>Vestibulum venenatis</h3>
                    <p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
                    <a href="#" class="button">Etiam posuere</a></div>
            </div>
            <div class="column2">
                <div class="box">
                    <h3>Praesent scelerisque</h3>
                    <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button">Etiam posuere</a></div>
            </div>
            <div class="column3">
                <div class="box">
                    <h3>Donec dictum metus</h3>
                    <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button">Etiam posuere</a></div>
            </div>
            <div class="column4">
                <div class="box">
                    <h3>Mauris vulputate dolor</h3>
                    <p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
                    <a href="#" class="button">Etiam posuere</a></div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.
        Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html>
