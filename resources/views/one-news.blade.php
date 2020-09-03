@extends('layouts.app')

@section('content')
<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $news->news_title }}</h1>
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/news">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news->news_title }}</li>
                  </ol>
            </nav>
        </div>
    </div>
    @endif
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
				    <div class="single-section">
                        <div class="featured-photo">
                            <img src="/uploads/{{$news->photo}}">
                        </div>
                        <div class="text">
                            <h2>{{$news->news_title}}</h2>
                            <h3>Posted on: {{ Carbon\Carbon::createFromDate($news->news_date)->toFormattedDateString() }}</h3>
                            {!!$news->news_content!!}
                        </div>
					<hr class="mt_50">
					<div class="comment mt_50">						
						<h2 class="mb_40">Comments ({{$comments->count()}})</h2>
                        @foreach ($comments as $key=>$comment)
						<div class="comment-item">
							<div class="text">
                                <h4>{{$key+1}}. {{$comment->person_name}}</h4>
                                <div class="date">{{ Carbon\Carbon::createFromDate($comment->comment_date)->toFormattedDateString() }} at {{$comment->comment_time}}</div>
                                <div class="des">
                                    <p>{{$comment->person_message}}	</p>
                                </div>
							</div>
						</div>
                        @endforeach
						<hr class="mt_50">
						<h2 class="mt_35">Post Your Comment</h2>
						<form action="" method="post">
                            @csrf
							<div class="row mb_20">
								<div class="col">
									<input type="text" class="form-control" placeholder="Name" name="person_name">
								</div>
								<div class="col">
									<input type="email" class="form-control" placeholder="Email Address" name="person_email">
								</div>
							</div>
							<div class="row mb_20">
								<div class="col">
									<textarea name="person_message" class="form-control h-200" cols="30" rows="10" placeholder="Comment"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<button type="submit" class="btn btn-primary" name="form_comment">Post Comment</button>
								</div>
							</div>
						</form>                           
					</div>
				</div>
			</div>
                {{-- ---------------------aside------------------------------	 --}}
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <form action="search" method="post">
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