@extends('base')

@section('title', 'Home')

@section('content')
<style>
    .category {
        position: relative;
    }
    .subcategories {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }
    .category:hover .subcategories {
        display: block;
    }
    .subcategories a {
        color: black;
        text-decoration: none;
        display: block;
    }
</style>

<div class='bxc-grid__text a-text-left   bxc-grid__text--light'>
    <h1 class="fs-1">BOOKS</h1>
<p></p>
<p>Find the book you need in our sections : <a href="/b/ref=s9_bw_cg_KBHPH1_md1_w?ie=UTF8&amp;node=301146&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Rentrée Scolaire</a> | <a href="/b/ref=s9_bw_cg_KBHPH1_md2_w?ie=UTF8&amp;node=8434456031&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Calendriers &amp; Agenda</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md3_w?ie=UTF8&amp;node=316172011&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Prix Littéraires</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md4_w?ie=UTF8&amp;node=301134&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Romans Policiers</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md5_w?ie=UTF8&amp;node=301132&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Romans et Littérature</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md6_w?ie=UTF8&amp;node=301133&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">BD</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md7_w?ie=UTF8&amp;node=302004&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Mangas</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md8_w?ie=UTF8&amp;node=301137&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Livres pour Enfants</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md9_w?ie=UTF8&amp;node=1381962031&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Science-Fiction</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md10_w?ie=UTF8&amp;node=689214031&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Histoire</a> I <a href="/b/ref=s9_bw_cg_KBHPH1_md11_w?ie=UTF8&amp;node=22934562031&amp;pf_rd_m=A1X6FK5RDHNB96&amp;pf_rd_s=merchandised-search-1&amp;pf_rd_r=D4HK0S1V4P2P17RA6BYB&amp;pf_rd_t=101&amp;pf_rd_p=76a8af89-f85c-4f2c-8675-176ab3825b3e&amp;pf_rd_i=301061">Livres en Langues Etrangères</a>... et bien plus encore !
</p>
</div>
<h1 class="fs-1">Categories in the spotlight</h1>
<p></p>
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Childrens.png') }}" alt="Livres pour enfants" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Children's books</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Games, Arts and Creation</a>
                   <a href="#">Sports and Leisure</a>
                   <a href="#">Humour</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Literature.png') }}" alt="Romans et littérature" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Novels and literature</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Reference</a>
                   <a href="#">Biographies</a>
                   <a href="#">Poesie</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Foreign.png') }}" alt="Livres en langues étrangères" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Foreign language <br> books</a>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Health.png') }}" alt="Santé, Forme et Diététique" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Health, Fitness and <br> Dietetics</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Food, diet and dietetics</a>
                   <a href="#">Exercise and Fitness</a>
                   <a href="#">Women's health</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_School.png') }}" alt="Scolaire et Parascolaire" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">School and <br> Extracurricular</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Kindergarten</a>
                   <a href="#">Elementary</a>
                   <a href="#">College</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Comics.png') }}" alt="Bandes dessinées" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Comic books</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Comics</a>
                   <a href="#">Fantastic</a>
                   <a href="#">Heroic Fantasy</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Manga.png') }}"  alt="Manga" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Manga</p>
                <div class="subcategories">
                    <hr>
                   <a href="#">Isekai </a>
                   <a href="#">Seinen</a>
                   <a href="#">Thriller and Suspense</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category">
                <img src="{{ Storage::url('public/images/books_Himan.png') }}" alt="Sciences humaines" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Sciences <br> human</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Sociology</a>
                   <a href="#">Geography and urban planning</a>
                   <a href="#">Philosophy</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="category ">
                <img  class="bookcover" loading="lazy" src="{{ Storage::url('public/images/books_Scientific.png') }}" alt="Science, Techinques et Medcine" class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Science, Technics <br> and Medcine</a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Physics - Material sciences</a>
                   <a href="#">Scientists</a>
                   <a href="#">Agricultural sciences</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category text-center">
                <img src="{{ Storage::url('public/images/books_Religion.png') }}"  class="rounded-circle" width="150px" height="150px">
                <br>
                <a href="#">Religion et Spiritualities<br> </a>
                <div class="subcategories">
                    <hr>
                   <a href="#">Esotericism and the paranormal</a>
                   <a href="#">Paranormal et parapsychologique</a>
                   <a href="#">Religion and society</a>
                </div>
            </div>
        </div>
</div>
<hr>
<div class="carousel-section-header">
    <h2 class="home-h2">Trending Books</h2>
</div>
<p></p>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($books as $key => $book)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($books as $key => $book)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="carousel-caption d-none d-md-block text-center">
                <h5>{{ $book->Title }}</h5>
                <p>
                    <a class="btn btn-primary" href="{{ route('login') }}">Borrow</a>
                    @if ($book->files)
                    <a class="btn btn-secondary" href="{{ Storage::url($book->files) }}" target="_blank">Read</a>
                    @else
                    Can't read
                    @endif
                </p>
            </div>
            <img class="bookcover mx-auto d-block" loading="lazy" src="{{ Storage::url($book->Cover) }}" alt="{{ $book->Title }}">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="btn btn-info">Precedent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="btn btn-info">Next</span>
    </a>
</div>
<hr>
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Library BOOKWISE</h5>

          <p>
            123 Street of Library, Palogo BIT, Burkina Faso
            <br>
            Phone : 05670981
            <br>
            Email : info@bibliobookwise.bf
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Open Time</h5>

          <p>
            Monday - Friday : 9h00 - 18h00
            <br>
            Saturday : 10h00 - 17h00
            <br>
            Sunday : Closed
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Library Bookwise
    </div>
    <!-- Copyright -->
  </footer>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
