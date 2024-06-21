@extends('Front.layouts.master')
@section('content')
    <nav class="nav-breadcrumbs">
        <div class="container">
            <p id="breadcrumbs" class="breadcrumbs"><span><span><a href="https://kochevnik.kg/">Турагенство</a> | <span><a
                                    href="https://kochevnik.kg/countries/">Страны</a> | <span class="breadcrumb_last"
                                                                                              aria-current="page">{{$country_id->name}}</span></span></span></span>
            </p></div>
    </nav>
    <main id="main" class="main" role="main">


        <article id="post-24702"
                 class="post-24702 countries type-countries status-publish has-post-thumbnail hentry continents-asia">
            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                     style="background-image: url(https://kochevnik.kg/wp-content/uploads/2018/05/china.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">{{$country_id->name}}</h1>
                    </div>

                    <nav id="article-nav" class="article__nav">
                    </nav>
                </div>
            </div>

            <div class="container">
                <div>
                    <div class="tv-hot-tours tv-moduleid-969748"></div>
                    <p>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </p>
                </div>


                <div class="country-tours" id="country-tours">
                    <h2 class="article__subhead">Туры </h2>

                    <div class="articles-wrap main-tours-wrap">
                        @foreach($tours_new as $tour)

                            <article class="tour-loop article-loop main-tour">
                                <div class="tour-loop__top">
                                    <div class="tour-loop__img-wrap">
                                        <a href="/tours/page/{{$tour->id}}"
                                           title="Хайнань | Sunshine Resort Intime Sanya 5*">
                                            <img src="{{asset('assets/image/'.$tour->images[0]->image)}}"
                                                 class="tour-loop__img article-loop__img wp-post-image" alt=""
                                                 sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                    </div>

                                    <a href="/tours/page/{{$tour->id}}" class="tour-loop__country">
                                        {{$tour->country->name}} </a>
                                </div>

                                <h3 class="tour-loop__title main-tour__title match-height">
                                    <a href="/tours/page/{{$tour->id}}"
                                       title="Хайнань | Sunshine Resort Intime Sanya 5*">
                                        Region | {{$tour->name}} </a>
                                </h3>

                                <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>{{$tour->price}}</strong>
							USD
						</span>
                                </div>
                            </article>
                        @endforeach
                        <div class="align-center">
                            <a href="{{asset('tours')}}" class="main-tours-wrap__btn">Загрузить еще</a>
                        </div>
                    </div>
                </div>


                <div class="">
                    <h2 class="article__subhead">Регионы </h2>

                    <div class="regions-wrap">

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/hajnan/">
                                    Хайнань </a>
                            </h3>
                        </article>
                    </div>
                </div>

                <div class="country-form">

                    <h3 class="country-form__head">Планируете отдых ?</h3>

                    <p class="country-form__cap">Отправьте заявку и мы найдем для вас подходящее предложение</p>

                    <!-- <button href="#popup-form" class="btn btn-primary js-pop-up-btn" data-head="Отдых " data-desc="Заполните форму и мы вам перезвоним">
                        Отправить заявку
                    </button> -->

                    <a rel="nofollow"
                       href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                       target="_blank" class="btn btn-primary">
                        Отправить заявку
                    </a>

                    <a href="#country-tours" class="btn btn--blue btn-scroll">
                        Посмотреть туры
                    </a>
                </div>
            </div>

        </article>


    </main>
@endsection