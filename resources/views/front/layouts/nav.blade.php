<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">YN<i>WA</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{(request()->getRequestUri() == "/")?"active":""}}"><a href="{{route('front')}}" class="nav-link">Home</a></li>
                <li class="nav-item {{(request()->getRequestUri() == "/all-posts")?"active":""}}"><a href="{{route('posts.all')}}" class="nav-link">Articles</a></li>
                <li class="nav-item {{(request()->getRequestUri() == "/about")?"active":""}}"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item {{(request()->getRequestUri() == "/contact")?"active":""}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
