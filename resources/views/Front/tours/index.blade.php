@extends('Front.layouts.master')
@section('content')
    <nav class="nav-breadcrumbs">
        <div class="container">
            <p id="breadcrumbs" class="breadcrumbs"><span><span><a href="https://kochevnik.kg/">Турагенство</a> | <span><a
                                    href="https://kochevnik.kg/tours/">Туры</a> | <span class="breadcrumb_last"
                                                                                        aria-current="page">{{$tours->region->name}} | {{$tours->name}}</span></span></span></span>
            </p></div>
    </nav>
    <main id="main" class="main" role="main">
        <article id="post-34004"
                 class="page-tour post-34004 tours type-tours status-publish has-post-thumbnail hentry catalog-turkey departure_city-bishkek rest_type-akvapark rest_type-gorjashhie rest_type-molodezhnye-tury rest_type-na-prazdnichnye-daty rest_type-pljazhnye rest_type-svadebnyj-tur rest_type-semejnye-tury rest_type-stokovyj-tur">


            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                     style="background-image: url(https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <p class="page-tour__country">
                            <a class="page-tour__country-link" href="https://kochevnik.kg/countries/turcija/"
                               title="Туры в Турцию">Турция</a>

                            <a class="page-tour__country-link" href="https://kochevnik.kg/regions/antalja/"
                               title="Туры в Анталию">{{$tours->region->name}}</a>
                        </p>

                        <h1 class="article__head page-tour__head">{{$tours->region->name}} | {{$tours->name}}</h1>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="tour-info">
                    <div class="clear tour-info__wrap">
                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Дата</span>
                            <span class="tour-info__val">{{$tours->date}}</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Длительность</span>
                            <span class="tour-info__val"><b>{{$tours->duration}}</b> ночей</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Стоимость</span>
                            <span class="tour-info__val">
									<strong class="tour-info__val--num">{{$tours->price}}</strong>
									{{$tours->currency}}								</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Город вылета</span>
                            <span class="tour-info__val"><b>{{$tours->departure_city}}</b></span>
                        </div>

                        <div class="tour-info__item match-height tour-info__item--last">
                            <!-- <button href="#popup-form" class="btn btn-primary tour-info__btn js-pop-up-btn" data-head="Анталья | Sherwood Dreams Resort 5*" data-desc="Заполните форму и мы вам перезвоним">Оставить заявку</button> -->
                            <a rel="nofollow" target="_blank"
                               href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                               class="btn btn-primary tour-info__btn">Оставить заявку</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <div class="article__content" style="margin: 60px 0;">
                            <h1><span style="color: #ff6600;">{{$tours->name}}</span></h1>
                            <p>{{$tours->description}}</p>
                            <p>Современные номера курортного отеля Sherwood оборудованы кондиционером, спутниковым
                                телевидением, мини-баром, а также балконом с видом на сад, бассейн, горы или Средиземное
                                море. В некоторых номерах установлена собственная гидромассажная ванна.</p>
                            <p>В распоряжении гостей 5 ресторанов, 4 бара и кафе курортного отеля, где вам на открытом
                                воздухе или в помещении подадут блюда турецкой и интернациональной кухни. В барах можно
                                заказать разнообразные алкогольные и безалкогольные напитки.</p>
                            <p>Вы можете посетить фитнес-центр с силовыми и кардиотернажерами, а также сыграть партию на
                                теннисном корте. Команда аниматоров курортного отеля организует мероприятия в течение
                                дня и развлекательные шоу по вечерам, что оправдает ожидания от путевки в Анталию.</p>
                            <p>На территории курортного отеля работает мини-клуб для детей в возрасте от 4 до 12 веков,
                                где они могут поиграть на детской площадке, раскрасить лица аквагримом и поучаствовать в
                                мини-дискотеке.</p>
                            <p><img class="wp-image-34005 aligncenter"
                                    src="{{asset('assets/image/' .$tours->images[0]->image)}}" alt=""
                                    width="500" height="377"
                                    sizes="(max-width: 500px) 100vw, 500px"/>
                        </div>

                        <div class="article__content clear">


                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="page-tour__sidebar tour-sidebar">
                            <div class="tour-sidebar__price">
                                <strong class="tour-sidebar__price-num">{{$tours->price}}</strong>
                                {{$tours->currency}}
                            </div>

                            <div class="tour-sidebar__block">
                                <h3 class="tour-sidebar__head">В стоимость входит</h3>
                                <div class="tour-sidebar__desc"><p>• Авиаперелёт<br/>
                                        • Проживание в отеле<br/>
                                        • Питание «всё включено»<br/>
                                        • Трансфер аэропорт – отель – аэропорт</p>
                                </div>
                            </div>


                            <!-- <button href="#popup-form" class="btn tour-sidebar__btn tour-sidebar__btn--book js-pop-up-btn" data-head="Анталья | Sherwood Dreams Resort 5*" data-desc="Заполните форму чтобы забронировать тур по выгодной цене">Забронировать</button> -->
                            <a rel="nofollow" target="_blank"
                               href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                               class="btn tour-sidebar__btn tour-sidebar__btn--book" style="display:block;">Забронировать</a>
                            <!-- <button href="#popup-form" class="btn btn--no-bg tour-sidebar__btn js-pop-up-btn" data-head="Анталья | Sherwood Dreams Resort 5*" data-desc="Заполните форму и мы вам перезвоним">Оставить заявку</button> -->
                            <a rel="nofollow" target="_blank"
                               href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                               class="btn btn--no-bg tour-sidebar__btn" style="display:block;">Оставить заявку</a>
                        </div>

                        <p class="tour-info__cap">
                            <span>Возможны изменения цен. Актуальные цены уточняйте у менеджеров.</span></p>

                        <div class="page-tour__sidebar-block">
                            <p><i class="fa fa-share-alt" aria-hidden="true"></i> <strong>Поделиться</strong></p>

                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                            <script src="https://yastatic.net/share2/share.js"></script>
                            <div class="ya-share2"
                                 data-services="vkontakte,facebook,odnoklassniki,twitter,whatsapp,telegram"></div>
                        </div>

                        {{--                        <div class="form form--subscribe page-tour__sidebar-block">--}}
                        {{--                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>Подписка на новости</strong>--}}
                        {{--                            </p>--}}

                        {{--                            <div role="form" class="wpcf7" id="wpcf7-f23045-p34004-o1" lang="ru-RU" dir="ltr">--}}
                        {{--                                <div class="screen-reader-response"></div>--}}
                        {{--                                <form action="/tours/antalja-sherwood-dreams-resort-5/#wpcf7-f23045-p34004-o1"--}}
                        {{--                                      method="post" class="wpcf7-form" novalidate="novalidate">--}}
                        {{--                                    <div style="display: none;">--}}
                        {{--                                        <input type="hidden" name="_wpcf7" value="23045"/>--}}
                        {{--                                        <input type="hidden" name="_wpcf7_version" value="5.1.5"/>--}}
                        {{--                                        <input type="hidden" name="_wpcf7_locale" value="ru_RU"/>--}}
                        {{--                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f23045-p34004-o1"/>--}}
                        {{--                                        <input type="hidden" name="_wpcf7_container_post" value="34004"/>--}}
                        {{--                                        <input type="hidden" name="g-recaptcha-response" value=""/>--}}
                        {{--                                    </div>--}}
                        {{--                                    <p><span class="wpcf7-form-control-wrap user-email"><input type="email"--}}
                        {{--                                                                                               name="user-email"--}}
                        {{--                                                                                               value="" size="40"--}}
                        {{--                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"--}}
                        {{--                                                                                               aria-invalid="false"--}}
                        {{--                                                                                               placeholder="Email"/></span>--}}
                        {{--                                        <button class="btn">Подписаться</button>--}}
                        {{--                                    </p>--}}
                        {{--                                    <div class="wpcf7-response-output wpcf7-display-none"></div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                </div>

                <div class="tour-form">
                    <div class="tour-form__desc"><strong>Количество путевок ограничено!</strong></div>
                    <h2 class="tour-form__head">Успей забронировать тур по выгодной цене</h2>
                    <!-- <button class="btn js-pop-up-btn" href="#popup-form" data-head="Анталья | Sherwood Dreams Resort 5*" data-desc="Расскажем о самых выгодных предложениях">Получить выгодное предложение</button> -->
                    <a rel="nofollow" target="_blank" class="btn"
                       href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg">Получить
                        выгодное предложение</a>
                </div>


                <div class="article__section main-tours-wrap page-tour__related">
                    <h2 class="">Похожие туры</h2>
                    @foreach($tour_all as $tour)
                        @if($tour->category_id == $tours->category_id)
                            <article class="tour-loop article-loop main-tour">
                                <div class="tour-loop__top">
                                    <div class="tour-loop__img-wrap">
                                        <a href="{{$tour->id}}" title="Наследие Турции">
                                            <img src="{{asset('assets/image/'.$tour->images[0]->image)}}"
                                                 class="tour-loop__img article-loop__img wp-post-image" alt=""
                                                 sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                    </div>

                                    <a href="{{$tour->id}}" class="tour-loop__country">
                                        {{$tour->country->name}} </a>
                                </div>

                                <h3 class="tour-loop__title main-tour__title match-height">
                                    <a href="{{$tour->id}}" title="Наследие Турции">
                                        {{$tour->name}} </a>
                                </h3>

                                <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>{{$tour->price}}</strong>
						USD 
					</span>
                                </div>
                            </article>
                        @else
                            @continue(1)
                        @endif
                    @endforeach
                    <div class="align-center">
                        <a href="/tours" class="main-tours-wrap__btn">Посмотреть больше туровы</a>
                    </div>
                </div>

            </div>
        </article>


    </main>
@endsection