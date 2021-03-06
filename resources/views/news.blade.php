@extends('layouts.app')

@section('content')

<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            @if (isset($searchTitle))
                <h1>{{$searchTitle}}</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                  </ol>
                </nav>
            @else
                <h1>{{ $pageDatas->page_name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $pageDatas->page_name }}</li>
                    </ol>
                </nav>
            @endif
        </div>
    </div>
    @endif
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section">
                        @foreach ($newses as $news)
                        <div class="blog-item">
                            <div class="featured-photo">
                                <a href="../news/{{$news->news_slug}}"><img src="../uploads/{{$news->photo}}"></a>
                            </div>
                            <div class="text">
                                <h2><a href="../news/{{$news->news_slug}}">{{$news->news_title}}</a></h2>
                                <p>{{$news->news_content_short}}</p>
                                <div class="read-more"><a href="../news/{{$news->news_slug}}">Read More</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="mt_20">
                                <ul class="pagination">
                                    {{ $newses->links() }}                                  
                                </ul>
                            </nav>
                        </div>	
                    </div>
                </div>
                {{-- ---------------------aside------------------------------	 --}}
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <form action="/search" method="post">
                                @csrf
                                <div class="search input-group md-form form-sm form-2 pl-0">
                                    <input name="search_string" class="form-control my-0 py-1 red-border" type="text" placeholder="Search News ...">
                                    <div class="input-group-append">
                                        <button type="submit" name="form_search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget">
                            <h3>Categories</h3>
                            <div class="type-1">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="../category/{{ $category->category_slug }}">{{ $category->category_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h3>Recent Posts</h3>
                            <div class="type-2">
                                <ul>
                                    @for ($i = 0; $i < 5; $i++)
                                    <li>
                                        <img src="../uploads/{{$newsSide[$i]->photo}}">
                                        <a href="../news/{{$newsSide[$i]->news_slug}}">{{$newsSide[$i]->news_title}}</a>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- -------------------end-aside----------------------------------- --}}
            </div>
        </div>
    </div>
</div>
@endsection