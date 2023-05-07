<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Single - Future Imperfect by HTML5 UP</title>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ secure_asset("assets/css/main.css") }}" />
</head>
<body class="single is-preload">

<!-- Wrapper -->
<div id="wrapper">
    <!-- Header -->
    <header id="header">
        <h1><a href="{{ url('FrontOffice') }}">INTELLIGENCE ARTIFICIELLE</a></h1>
        <nav class="main">
            <ul>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">
        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="{{ url('FrontOffice') }}" class="button large fit">retour</a></li>
            </ul>
        </section>
    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h3><a href="#">{{ $data->titre }}</a></h3>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">{{ $function->date_inword($data->date_sortie)  }}</time>
                    <a href="#" class="author"><span class="name">{{ $data->auteur }}</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <span class="image featured"><img src="data:image/{{ $data->extension }};base64,{{ $data->image }}" alt="" /></span>
            {!! $data->contenu !!}
            <footer>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

    </div>

    <!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
    </section>

</div>

<!-- Scripts -->
<script src="{{ secure_asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ secure_asset("assets/js/browser.min.js") }}"></script>
<script src="{{ secure_asset("assets/js/breakpoints.min.js") }}"></script>
<script src="{{ secure_asset("assets/js/util.js") }}"></script>
<script src="{{ secure_asset("assets/js/main.js") }}"></script>
</body>
</html>
