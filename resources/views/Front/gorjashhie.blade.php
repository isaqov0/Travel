@extends('Front.layouts.master')
@section('content')
    <nav class="nav-breadcrumbs">
        <div class="container">
            <p id="breadcrumbs" class="breadcrumbs"><span><span><a href="https://kochevnik.kg/">Турагенство</a> | <span
                                class="breadcrumb_last" aria-current="page">Горящие туры</span></span></span></p></div>
    </nav>
    <main id="main" class="main" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap" style="background-image: url()">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Горящие туры</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="article__content">
                <div class="tv-hot-tours tv-moduleid-960016"></div>
                <p>
                    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                </p>
            </div>

            <h2 class="article__subhead">Туры</h2>

            <div class="articles-wrap main-tours-wrap">
            @foreach($tours as $tour)
                <article class="tour-loop article-loop main-tour">
                    <div class="tour-loop__top">
                        <div class="tour-loop__img-wrap">
                            <a href="{{asset('tours/page/'.$tour->id)}}" title="">
                                <img src="{{asset('assets/image/'.$tour->images[0]->image)}}"
                                     class="tour-loop__img article-loop__img wp-post-image" alt=""
                                     sizes="(max-width: 900px) 100vw, 900px"/> </a>
                        </div>

                        <a href="{{asset('tours/page/'.$tour->id)}}"
                           class="tour-loop__country">
                            {{$tour->country->name}} </a>
                    </div>

                    <h3 class="tour-loop__title main-tour__title match-height">
                        <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/"
                           title="Анталья | Sherwood Dreams Resort 5*">
                            {{$tour->region->name}} | {{$tour->name}} </a>
                    </h3>

                    <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>{{$tour->price}}</strong>
						EUR
					</span>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="pagination">
            </div>


            <div class="cat-list-wrap">
                <h3 class="section__desc">Типы отдыха</h3>
                <ul class="cat-list cat-list--rest">
                    @foreach($categories as $category)
                    <li class="cat-list__item">
                        <a href="category/{{$category->id}}" class="cat-list__link">
                            <span class="cat-list__title">{{$category->name}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </main>
@endsection