<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="uploads/logo.png" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="uploads/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link ">Home</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link ">About</a></li>
                        <li class="nav-item"><a href="/preventions" class="nav-link ">Prevention</a></li>
                        <li class="nav-item"><a href="/products" class="nav-link ">Products</a></li>
                        <li class="nav-item"><a href="/news" class="nav-link ">News</a></li>
                        <li class="nav-item"><a href="javascript:void;" class="nav-link dropdown-toggle">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/photo-gallery" class="nav-link">Photo Gallery</a></li>
                                    <li class="nav-item"><a href="/video-gallery" class="nav-link">Video Gallery</a></li>
                                    <li class="nav-item"><a href="/faq" class="nav-link">FAQ</a></li>
                                    <li class="nav-item"><a href="/doctors" class="nav-link">Doctors</a></li>
                                    <li class="nav-item"><a href="/who-we-are" class="nav-link">Who We Are</a></li>
                                    <li class="nav-item"><a href="/what-we-do" class="nav-link">What We Do</a></li>
                                </ul>
                            </li>
                        <li class="nav-item"><a href="/contact" class="nav-link ">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            @if (isset($searchTitle))
                <h1>{{$searchTitle}}</h1>
            @else
            <h1>{{$urlRelatif = Route::getCurrentRoute()->uri()}}</h1>
            @endif
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$urlRelatif = Route::getCurrentRoute()->uri()}}</li>
                  </ol>
            </nav>
        </div>
    </div>
    @endif