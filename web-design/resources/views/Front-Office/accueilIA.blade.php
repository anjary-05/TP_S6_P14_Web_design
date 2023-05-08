<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
<head>
    <title>Future Imperfect by HTML5 UP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ secure_asset("assets/css/main.css") }}" />
    <meta name="description" content="Première source d'information francophone consacrée à l'intelligence artificielle">
    <meta http-equiv="Content-Security-Policy" content="script-src 'none'">
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1>Intelligence Artificielle</h1>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="{{ url('Search') }}">
                        @csrf
                        <input type="text" name="search" placeholder="Search" />
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">

        <!-- Search
        <section>
            <form class="search" method="post" action="#">
                <input type="text" name="search" placeholder="Search" />
            </form>
        </section>
        -->

        <!-- Actions 
        <section>
            <ul class="actions stacked">
                <li><a href="#" rel="noopener" target="_blank" class="button large fit">quitter</a></li>
            </ul>
        </section>
        -->

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        @if(!empty($data))
        @foreach($data as $data2)
        <article class="post">
            <header>
                <div class="title">
                    <h2><a rel="noopener" target="_blank" href="#">{{$data2->titre}}</a></h2>
                   <!-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>-->
                </div>
                <div class="meta">
                    <time class="published" >{{ $function->date_inword($data2->date_sortie) }}</time>
                    <a href="#" rel="noopener" target="_blank" class="author"><span class="name">{{ $data2->auteur }}</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="#" rel="noopener" target="_blank" class="image featured"><img src="data:image/{{ $data2->extension }};base64,{{ $data2->image }}" alt="" /></a>
            {!!  $data2->contenu !!}
            <footer>
                <ul class="actions">
                    <li><a href="{{ route('detail', ['id' => md5($data2->id)]) }}" class="button large">voir en detail</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#" rel="noopener" target="_blank">General</a></li>
                    <li><a href="#" rel="noopener" target="_blank" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" rel="noopener" target="_blank" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>
        @endforeach
        @else
            <p style="color: red">aucun resultat de votre recherche</p>
        @endif
        <!-- Pagination -->
        <ul  class="actions pagination">
            @if(!empty($data))
            {{ $data->links() }}
            @endif
        </ul>

    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
            <header>
                <h2>INTELLIGENCE ARTIFICIELLE</h2>
                <p>Première source d'information francophone consacrée à l'intelligence artificielle</p>
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">

                <!-- Mini Post -->
                @if(!empty($data))
                @foreach($data as $data1)
                <article class="mini-post">
                    <header>
                        <h3><a href="#" rel="noopener" target="_blank" >{{ $data1->titre }}</a></h3>
                        <time class="published" datetime="2015-10-20">{{ $function->date_inword($data1->date_sortie) }} </time>
                        <a href="#" rel="noopener" target="_blank" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" rel="noopener" target="_blank" class="image"><img src="data:image/{{ $data1->extension }};base64,{{ $data1->image }}" alt="" /></a>
                </article>
               @endforeach
                @else
                    <section class="blurb">
                        <h2>donnees</h2>
                        <p>L'intelligence artificielle (IA) est un domaine de l'informatique qui vise à créer des systèmes capables d'effectuer des tâches qui nécessitent normalement l'intelligence humaine, comme la reconnaissance de la parole, la vision, la prise de décision</p>
                        <ul class="actions">
                            <li><a href="#" rel="noopener" target="_blank" class="button">Learn More</a></li>
                        </ul>
                    </section>
                @endif
            </div>
        </section>

        <!-- About -->
        <section class="blurb">
            <h2>à propos</h2>
            <p>Le portail francophone indépendant consacré à l'intelligence artificielle et à la datascience, à destination des chercheurs, étudiants, professionnels et passionnés</p>
            <ul class="actions">
                <li><a href="#" rel="noopener" target="_blank" class="button">savoir plus</a></li>
            </ul>
        </section>

        <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <li><a href="#" rel="noopener" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" rel="noopener" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" rel="noopener" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" rel="noopener" target="_blank" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                <li><a href="#" rel="noopener" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
        </section>

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
