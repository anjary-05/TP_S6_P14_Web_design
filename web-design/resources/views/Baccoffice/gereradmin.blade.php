<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Future Imperfect by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}" />
    <script src="{{ asset("ckeditor/ckeditor.js") }}"></script>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h5><a href="index.html">INTELLIGENCE ARTIFICIELLE</a></h5>
        <nav class="links">
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>

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
                <li><a href="{{ url('connexion') }}" class="button large fit">Log out</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">
        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h5>ajout de contenu sur l information intelligence artificielle</h5>
                </div>
            </header>
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        @if($message!="")
                        <div class="text-center">
                             <h6 class="text-success">contenu ajoutee</h6>
                        </div>
                        @endif
                        <form action="{{ url('ajoutcontenu') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="titre" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">auteur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="auteur" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"> Domaine</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="iddomaine">
                                        @foreach ( $domaine as $tab )
                                            <option value={{ $tab->id}}>{{ $tab->domaine}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"> categorie</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="idcategorie">
                                        @foreach ( $categorie as $tab )
                                            <option value={{ $tab->id}}>{{ $tab->categorie}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"> Description</label>
                                <div class="col-sm-10">
                                    <textarea name="contenu" id="editor" cols="30" rows="10" ></textarea>
                                    <script>
                                        CKEDITOR.replace( 'editor', {
                                            filebrowserUploadMethod: 'form'
                                        } );
                                    </script>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="text-lg-end">
                                    <button type="submit"  style="width: 200px;height: 40px" class="btn btn-light">ajouter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
            <header>
                <h2>Intelligence Artificielle</h2>
                <p>l' atout de l' intelligence artificielle</p>
            </header>
        </section>


        <!-- Posts List -->
        <section>
            <ul class="posts">
                @if(!empty($data))
                    @foreach($data as $item)
                  <li>
                      <article>
                        <header>
                            <h3>{{ $item->titre }}</h3>
                            <time class="published" >{{ $function->date_inword($item->date_sortie) }}</time>
                        </header>
                        <a href="single.html" class="image"><img src="data:image/{{ $item->extension }};base64,{{ $item->image }}" alt="" /></a>
                      </article>
                  </li>
                    @endforeach
                @endif
            </ul>
        </section>

        <!-- About -->
        <section class="blurb">
            <h2>à propos</h2>
            <p>Le portail francophone indépendant consacré à l'intelligence artificielle et à la datascience, à destination des chercheurs, étudiants, professionnels et passionnés</p>
            <ul class="actions">
                <li><a href="#" class="button">savoir plus</a></li>
            </ul>
        </section>

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

    </section>

</div>

<!-- Scripts -->
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/browser.min.js") }}"></script>
<script src="{{ asset("assets/js/breakpoints.min.js") }}"></script>
<script src="{{ asset("assets/js/util.js") }}"></script>
<script src="{{ asset("assets/js/main.js") }}"></script>
</body>
</html>

