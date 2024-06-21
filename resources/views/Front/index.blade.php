@extends('Front.layouts.master')
@section('content')

    {{--<main id="main" class="main" role="main">
        <section class="intro" style="background: #eff4f8">
            <div class="mm-links">
                <div class="container">
                    <div class="clea">
                        <div class="m-links__item">
                            <a href="#" onclick="showblog('main-filter-tour')" class="main mm-links__link"
                               style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1-300x200.jpg)">
                                <span class="mm-links__head">Туры</span>
                            </a>
                        </div>
                        <div class="mm-links__item">
                            <a href="#" onclick="showblog('main-countries')" class="main mm-links__link"
                               style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1132-300x196.jpg)">
                                <span class="mm-links__head">Countyries</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__form">
                <div class="container">
                    <div class="form align-center">
                        <h1>Поиск горящих туров онлайн</h1>
                        <div class="tv-search-form tv-moduleid-181896"></div>
                        <h2>Большое турагентство - маленькие цены</h2>
                        <br>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </div>
                </div>
            </div>
        </section>

        <section class="section m-tours">
            <div class="container">
                <h2 class="section__head">Организуйте себе отдых в теплой стране</h2>
                <div class="row">
                    <div class="col-md-7">

                        <p class="section__desc">Все хлопоты по выбору тура и комфортному
                            пребыванию берем на себя</p>
                    </div>

                    <div class="col-md-5 align-right">
                        <!-- <button href="#popup-form" type="button" class="btn js-pop-up-btn btn-primary m-tours__btn" data-head="Заявка на подбор тура" data-desc="Оставьте заявку и мы вам перезвоним">Оставить заявку на подбор тура</button> -->

                        <a rel="nofollow"
                           href="https://api.whatsapp.com/send/?phone=996700708900&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D0%B2%D1%83%D0%B9%D1%82%D0%B5+Kochevnik.kg"
                           class="btn btn-primary m-tours__btn" target="_blank">Оставить заявку на подбор тура</a>
                    </div>
                </div>

                <div class="articles-wrap main-tours-wrap">
                    @foreach($tours as $tour)
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="{{'/https://8a12-213-230-102-230.ngrok-free.app/tours/page/'.$tour->id}}"
                                       title="Анталья | Sherwood Dreams Resort 5*">
                                        <img src="{{asset('assets/image/'.$tour->images[0]->image)}}"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="tours/page/{{$tour->id}}"
                                   class="tour-loop__country">
                                    {{$tour->country->name}} </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="tours/page/{{$tour->id}}"
                                   title="Анталья | Sherwood Dreams Resort 5*">
                                    {{$tour->region->name}} | {{$tour->name}} </a>
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
                        <a href="tours" class="main-tours-wrap__btn">Больше туров</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section main-countries">
            <div class="container">
                <h2 class="section__head">Популярные страны, где чаще всего отдыхают
                    туристы из Кыргызстана</h2>
                <h3 class="section__desc">Страны</h3>
                <div class="clear">
                    @foreach($countries as $country)
                        <article class="main-country">
                            <a class="main-country__link" title="Туры в Турцию"
                               href="/countries/{{$country->id}}">
                                <div class="main-country__img-wrap">
                                    <img src="{{asset('assets/image/countries/'.$country->image)}}" width="400px"
                                         height="200px"
                                         class="main-country__img wp-post-image" alt=""/></div>

                                <div class="main-country__content">
                                    <img class=""
                                         src="{{$country->flag}}"
                                         width="40px"
                                         alt="">

                                    <h3 style="margin-top: -5px">{{$country->name}}</h3>
                                </div>
                            </a>
                        </article>
                    @endforeach

                </div>

                <div class="align-right"><a class="main-countries__link btn" href="countries">Другие
                        страны</a></div>


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
        </section>



    </main>--}}
    <main id="main" class="main" role="main">

        <section class="intro" style="background: #eff4f8">
            <div class="intro__wrap">
                <div class="tv-image-slider tv-moduleid-960021"></div>
            </div>


            <div class="mm-links">
                <div class="container">
                    <div class="clear">
                        <div class="mm-links__item">
                            <a href="#" onclick="showblog('main-filter-tour')" class="main mm-links__link"
                               style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1-300x200.jpg)">
                                <span class="mm-links__head">Туры</span>
                            </a>
                        </div>
                        <div class="mm-links__item">
                            <a href="#" onclick="showblog('main-countries')" class="main mm-links__link"
                               style="background-image: url(https://kochevnik.kg/wp-content/uploads/2019/10/1132-300x196.jpg)">
                                <span class="mm-links__head">Countyries</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro__form">
                <div class="container">
                    <div class="form align-center">
                        <h2>Поиск горящих туров онлайн</h2>
                        <div class="tv-search-form tv-moduleid-181896"></div>
                        <h3>Большое турагентство - маленькие цены</h3>
                        <br>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </div>
                </div>
            </div>
        </section>

        <section class="section m-tours">
            <div class="container">
                <h4 class="section__head">Организуйте себе отдых в теплой стране</h4>
                <div class="row">
                    <div class="col-md-7">

                        <p class="section__desc">Все хлопоты по выбору тура и комфортному
                            пребыванию берем на себя</p>
                    </div>

                    <div class="col-md-5 align-right">
                        <!-- <button href="#popup-form" type="button" class="btn js-pop-up-btn btn-primary m-tours__btn" data-head="Заявка на подбор тура" data-desc="Оставьте заявку и мы вам перезвоним">Оставить заявку на подбор тура</button> -->

                        <a rel="nofollow"
                           href="#" onclick="showblog('main-filter-tour')"
                           class="btn btn-primary m-tours__btn" target="_blank">Оставить заявку на подбор тура</a>
                    </div>
                </div>

                <div class="articles-wrap main-tours-wrap">

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="#" onclick="showblog('main-filter-tour')"
                                   title="Анталья | Sherwood Dreams Resort 5*">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/59626620-1024x768.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-100x75.jpg 100w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="#" onclick="showblog('main-filter-tour')"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="#" onclick="showblog('main-filter-tour')"
                               title="Анталья | Sherwood Dreams Resort 5*">
                                Анталья | Sherwood Dreams Resort 5* </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>582</strong>
						EUR
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-768x513.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-100x67.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25.jpg 1600w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/nasledie-turcii/" class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                Наследие Турции </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                   title="Вся Турция за 8 дней | Великолепный Век">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160.jpg 1160w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                               title="Вся Турция за 8 дней | Великолепный Век">
                                Вся Турция за 8 дней | Великолепный Век </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                   title="Анталья | Fame Residence Kemer & Spa 5*">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/13436821-1024x681.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/13436821.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-100x67.jpg 100w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                               title="Анталья | Fame Residence Kemer & Spa 5*">
                                Анталья | Fame Residence Kemer & Spa 5* </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>570</strong>
						EUR
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/tury-uzbekistan/"
                                   title="Голубые купола Узбекистана 2020">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-300x135.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-768x345.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1.jpg 1200w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/tury-uzbekistan/" class="tour-loop__country">
                                Туры в Узбекистан </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/tury-uzbekistan/"
                               title="Голубые купола Узбекистана 2020">
                                Голубые купола Узбекистана 2020 </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>19000</strong>
						KGS
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                   title="Майские праздники в Солнечной Анталье">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-300x225.png 300w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-768x576.png 768w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-100x75.png 100w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244.png 1200w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                               title="Майские праздники в Солнечной Анталье">
                                Майские праздники в Солнечной Анталье </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>690</strong>
						USD
					</span>
                        </div>
                    </article>

                    <div class="align-center">
                        <a href="https://kochevnik.kg/tours/" class="main-tours-wrap__btn">Больше туров</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section main-countries">
            <div class="container">
                <h4 class="section__head">Популярные страны, где чаще всего отдыхают
                    туристы из Кыргызстана</h4>
                <h4 class="section__desc">Страны</h4>
                <div class="clear">

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Турцию"
                           href="https://kochevnik.kg/countries/turcija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/turkey-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Turkey-300x199.png"
                                     alt="Туры в Турцию флаг">

                                <h3 class="main-country__title">Турция</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Египет"
                           href="https://kochevnik.kg/countries/egipet/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/egypt-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Египте"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Egypt-300x199.png"
                                     alt="Туры в Египет флаг">

                                <h3 class="main-country__title">Египет</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Таиланд"
                           href="https://kochevnik.kg/countries/tailand/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/thailand-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Thailand-300x198.png"
                                     alt="Туры в Таиланд флаг">

                                <h3 class="main-country__title">Таиланд</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в ОАЭ" href="https://kochevnik.kg/countries/oaje/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/uae-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/arab_emirates-300x150.jpg"
                                     alt="Туры в ОАЭ флаг">

                                <h3 class="main-country__title">ОАЭ</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Грузию"
                           href="https://kochevnik.kg/countries/gruzija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/gruziya-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Georgia-300x223.png"
                                     alt="Туры в Грузию флаг">

                                <h3 class="main-country__title">Туры в Грузию</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Китай" href="https://kochevnik.kg/countries/kitaj/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2018/05/china-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Китае"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/05/082.-Kitaj-300x200.jpg"
                                     alt="Китай флаг">

                                <h3 class="main-country__title">Китай</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Мальдивы" href="https://kochevnik.kg/countries/maldivy/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/maldives-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Maldives-300x198.png"
                                     alt="Мальдивы флаг">

                                <h3 class="main-country__title">Мальдивы</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Малайзия" href="https://kochevnik.kg/countries/malajzija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/07/malaiziya-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Малайзии"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Malaysia-300x148.png"
                                     alt="Малайзия флаг">

                                <h3 class="main-country__title">Малайзия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры во Вьетнам"
                           href="https://kochevnik.kg/countries/vetnam/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/vietnam.jpg"
                                     class="main-country__img wp-post-image" alt=""
                                     srcset="https://kochevnik.kg/wp-content/uploads/2017/06/vietnam.jpg 3072w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-1024x683.jpg 1024w"
                                     sizes="(max-width: 300px) 100vw, 300px"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Vietnam-300x198.png"
                                     alt="Туры во Вьетнам флаг">

                                <h3 class="main-country__title">Вьетнам</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Индия" href="https://kochevnik.kg/countries/indija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/india-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в индии"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/India-300x199.png"
                                     alt="Индия флаг">

                                <h3 class="main-country__title">Индия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Чехия" href="https://kochevnik.kg/countries/chehija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya.jpg"
                                     class="main-country__img wp-post-image" alt=""
                                     srcset="https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya.jpg 3072w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-300x199.jpg 300w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-768x510.jpg 768w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-1024x680.jpg 1024w"
                                     sizes="(max-width: 300px) 100vw, 300px"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Czech_Republic-300x196.png"
                                     alt="Чехия флаг">

                                <h3 class="main-country__title">Чехия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры на Шри-Ланку"
                           href="https://kochevnik.kg/countries/shri-lanka/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/sri-lanka-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Sri_Lanka-300x143.png"
                                     alt="Туры на Шри-Ланку флаг">

                                <h3 class="main-country__title">Шри ланка</h3>
                            </div>
                        </a>
                    </article>

                </div>

                <div class="align-right"><a class="main-countries__link btn" href="https://kochevnik.kg/countries/">Другие
                        страны</a></div>


                <div class="cat-list-wrap">
                    <h3 class="section__desc">Типы отдыха</h3>
                    <ul class="cat-list cat-list--rest">

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/akvapark/" class="cat-list__link">
                                <span class="cat-list__title">Аквапарк</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/gorjashhie/" class="cat-list__link">
                                <img class="cat-list__icon"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/09/fire.png"
                                     alt="Иконка - Огонь">
                                <span class="cat-list__title">Горящие туры</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/kombinirovannye-tury/" class="cat-list__link">
                                <span class="cat-list__title">Комбинированные туры</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/molodezhnye-tury/" class="cat-list__link">
                                <span class="cat-list__title">Молодежные туры</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/molodezhnyj-otdyh/" class="cat-list__link">
                                <span class="cat-list__title">молодежный отдых</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/morskoj-kruiz/" class="cat-list__link">
                                <span class="cat-list__title">Морские круизы</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/na-prazdnichnye-daty/" class="cat-list__link">
                                <span class="cat-list__title">На праздничные даты</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/pljazhnye/" class="cat-list__link">
                                <img class="cat-list__icon"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/09/sun-umbrella.png"
                                     alt="Иконка - Пляж">
                                <span class="cat-list__title">Пляжный отдых</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/rannee-bronirovanie/" class="cat-list__link">
                                <img class="cat-list__icon"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/09/study.png"
                                     alt="Иконка - Читающий человек">
                                <span class="cat-list__title">Раннее бронирование</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/svadebnyj-tur/" class="cat-list__link">
                                <span class="cat-list__title">Свадебный тур</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/semejnye-tury/" class="cat-list__link">
                                <img class="cat-list__icon"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/09/family-of-three.png"
                                     alt="Иконка - Семья">
                                <span class="cat-list__title">Семейные туры</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/stokovyj-tur/" class="cat-list__link">
                                <span class="cat-list__title">Стоковый тур</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/shopping-tur/" class="cat-list__link">
                                <span class="cat-list__title">шоппинг тур</span>
                            </a>
                        </li>

                        <li class="cat-list__item">
                            <a href="https://kochevnik.kg/rest_type/jekskursionnyj-tur/" class="cat-list__link">
                                <span class="cat-list__title">Экскурсионный тур</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 		<section class="section">
					<div class="container">
						<div data-sletat-module-id="7d2224f1-6fe3-466c-b59a-c752ab0b84c6"></div>
						<script charset="utf-8" src="https://front.sletat.ru/modules/module6/latest/module.js" defer></script>
					</div>
				</section> -->

    </main>
    <main id="main-filter-tour" class="main  d-none" role="main">

        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap"
                 style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/tours-bg.jpg)">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Туры</h1>
                </div>
            </div>
        </div>

        <div class="container">

            <div>
                <div class="sidebar filter-block loading" id="sidebar">

                    <h2 class="sidebar__head"><i class="fa fa-sliders" aria-hidden="true"></i> Фильтр туров</h2>


                    <div class="filter">
                        <div class="filter__row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="filter__item" id="filter-country">

                                        <span class="filter__label">Страны</span>

                                        <select name="country" id="countries-select" multiple>
                                            <option value="45">Азербайджан</option>
                                            <option value="57">Венгрия</option>
                                            <option value="65">Греция</option>
                                            <option value="27">Доминикана</option>
                                            <option value="23">Индия</option>
                                            <option value="31">Индонезия</option>
                                            <option value="67">Испания</option>
                                            <option value="73">Италия</option>
                                            <option value="32891">Камбоджа</option>
                                            <option value="81">Кипр</option>
                                            <option value="24702">Китай</option>
                                            <option value="33">Малайзия</option>
                                            <option value="25">Мальдивы</option>
                                            <option value="108">Россия</option>
                                            <option value="33687">Танзания</option>
                                            <option value="88">Туры в Грузию</option>
                                            <option value="13">Туры в Египет</option>
                                            <option value="17">Туры в ОАЭ</option>
                                            <option value="21">Туры в Таиланд</option>
                                            <option value="15">Туры в Турцию</option>
                                            <option value="24584">Туры в Узбекистан</option>
                                            <option value="51">Туры во Вьетнам</option>
                                            <option value="19">Туры на Шри-Ланку</option>
                                            <option value="92">Франция</option>
                                            <option value="100">Чехия</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="filter__item" id="filter-rest">

                                        <span class="filter__label">Тип отдыха</span>
                                        <select name="rest" id="rest-select" multiple>
                                            <option value="83">Стоковый тур</option>
                                            <option value="85">Экскурсионный тур</option>
                                            <option value="84">Морские круизы</option>
                                            <option value="6">Пляжный отдых</option>
                                            <option value="12">Семейные туры</option>
                                            <option value="94">Молодежные туры</option>
                                            <option value="86">Комбинированные туры</option>
                                            <option value="95">Аквапарк</option>
                                            <option value="97">молодежный отдых</option>
                                            <option value="101">Свадебный тур</option>
                                            <option value="102">шоппинг тур</option>
                                            <option value="11">Раннее бронирование</option>
                                            <option value="113">На праздничные даты</option>
                                            <option value="7">Горящие туры</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter__row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="filter__item" id="filter-departure">
                                        <span class="filter__label">Город вылета</span>
                                        <div class="filter__col">
                                            <input class="filter__input" id="filter-departure-14" name="departure"
                                                   type="checkbox" value="14">
                                            <label class="filter__cb-label" for="filter-departure-14">Бишкек</label>

                                            <span class="filter__check">

									</span>
                                        </div>
                                        <div class="filter__col">
                                            <input class="filter__input" id="filter-departure-15" name="departure"
                                                   type="checkbox" value="15">
                                            <label class="filter__cb-label" for="filter-departure-15">Алматы</label>

                                            <span class="filter__check">

									</span>
                                        </div>
                                        <div class="filter__col">
                                            <input class="filter__input" id="filter-departure-16" name="departure"
                                                   type="checkbox" value="16">
                                            <label class="filter__cb-label" for="filter-departure-16">Москва</label>

                                            <span class="filter__check">

									</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn--blue filter__btn">Найти туры</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="tour-listing main-tours-wrap" id="tour-listing">

                    <p class="count-tours">Найдено туров: <b>556</b></p>
                    <div class="articles-wrap main-tours-wrap">
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/59626620-1024x768.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-100x75.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/"
                                   class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/antalja-sherwood-dreams-resort-5/"
                                   title="Анталья | Sherwood Dreams Resort 5*">
                                    Анталья | Sherwood Dreams Resort 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>582</strong>
						EUR
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-768x513.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-100x67.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25.jpg 1600w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                    Наследие Турции </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                       title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160.jpg 1160w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                   class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                   title="Вся Турция за 8 дней | Великолепный Век">
                                    Вся Турция за 8 дней | Великолепный Век </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/13436821-1024x681.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/13436821.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                   class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                   title="Анталья | Fame Residence Kemer &#038; Spa 5*">
                                    Анталья | Fame Residence Kemer &#038; Spa 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>570</strong>
						EUR
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tury-uzbekistan/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2019/04/2-1-1024x460.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-300x135.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1-768x345.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/2-1.jpg 1200w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tury-uzbekistan/" class="tour-loop__country">
                                    Туры в Узбекистан </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tury-uzbekistan/"
                                   title="Голубые купола Узбекистана 2020">
                                    Голубые купола Узбекистана 2020 </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>19000</strong>
						KGS
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                       title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-300x225.png 300w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-768x576.png 768w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-100x75.png 100w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244.png 1200w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                   class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                   title="Майские праздники в Солнечной Анталье">
                                    Майские праздники в Солнечной Анталье </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>690</strong>
						USD
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-300x182.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-768x466.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1.jpg 1100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                                   class="tour-loop__country">
                                    Турция </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                                   title="Золотое Кольцо Турции 2020">
                                    Золотое Кольцо Турции 2020 </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>345</strong>
						USD
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/225701578-1024x575.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/225701578.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-300x168.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-768x431.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-100x56.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                   class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                   title="Пхукет | The Nature Phuket 5*">
                                    Пхукет | The Nature Phuket 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>812</strong>
						USD
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/117680370-1024x683.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/117680370.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                   class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                   title="Пхукет | Dream Phuket Hotel Laguna 5*">
                                    Пхукет | Dream Phuket Hotel Laguna 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>758</strong>
						EUR
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                       title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/11469547-1024x768.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/11469547.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-100x75.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                   class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                   title="Пхукет | Swissotel Resort Phuket Patong Beach 5*">
                                    Пхукет | Swissotel Resort Phuket Patong Beach 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>705</strong>
						EUR
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                       title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/241293737-1024x683.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/241293737.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                   class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                   title="Пхукет | Splash Beach Resort By Langham 5*">
                                    Пхукет | Splash Beach Resort By Langham 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>669</strong>
						EUR
					</span>
                            </div>
                        </article>
                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/" title="">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-300x198.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-768x506.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-100x66.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665.jpg 1280w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                   class="tour-loop__country">
                                    Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                   title="Пхукет | PGS Hotels Casadel Sol 4*">
                                    Пхукет | PGS Hotels Casadel Sol 4* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>661</strong>
						EUR
					</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="tv-search-form tv-moduleid-181896"></div>

            <br><br>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

        </div>
    </main>
    <!--  Country page  -->
    <main id="main-country" class="main d-none" role="main">
        <div class="article__header page-tour__header">
            <div class="page-tour__thumb-wrap"
                 style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/countries-bg.jpg)">
            </div>

            <div class="page-tour__header-cont">
                <div class="container">
                    <h1 class="article__head page-tour__head">Страны</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <br><br>

            <div class="tv-search-form tv-moduleid-181896"></div>

            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

            <div class="section">
                <h2 class="section__head">Популярные страны</h2>

                <div class="clear">

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Турцию"
                           href="https://kochevnik.kg/countries/turcija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/turkey-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Turkey-300x199.png"
                                     alt="Туры в Турцию флаг">

                                <h3 class="main-country__title">Турция</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Египет"
                           href="https://kochevnik.kg/countries/egipet/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/egypt-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Египте"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Egypt-300x199.png"
                                     alt="Туры в Египет флаг">

                                <h3 class="main-country__title">Египет</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Таиланд"
                           href="https://kochevnik.kg/countries/tailand/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/thailand-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Thailand-300x198.png"
                                     alt="Туры в Таиланд флаг">

                                <h3 class="main-country__title">Таиланд</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в ОАЭ" href="https://kochevnik.kg/countries/oaje/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/uae-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/arab_emirates-300x150.jpg"
                                     alt="Туры в ОАЭ флаг">

                                <h3 class="main-country__title">ОАЭ</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры в Грузию"
                           href="https://kochevnik.kg/countries/gruzija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/gruziya-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Georgia-300x223.png"
                                     alt="Туры в Грузию флаг">

                                <h3 class="main-country__title">Туры в Грузию</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Китай" href="https://kochevnik.kg/countries/kitaj/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2018/05/china-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Китае"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/05/082.-Kitaj-300x200.jpg"
                                     alt="Китай флаг">

                                <h3 class="main-country__title">Китай</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Мальдивы" href="https://kochevnik.kg/countries/maldivy/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/maldives-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Maldives-300x198.png"
                                     alt="Мальдивы флаг">

                                <h3 class="main-country__title">Мальдивы</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Малайзия" href="https://kochevnik.kg/countries/malajzija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/07/malaiziya-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в Малайзии"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Malaysia-300x148.png"
                                     alt="Малайзия флаг">

                                <h3 class="main-country__title">Малайзия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры во Вьетнам"
                           href="https://kochevnik.kg/countries/vetnam/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/vietnam.jpg"
                                     class="main-country__img wp-post-image" alt=""
                                     srcset="https://kochevnik.kg/wp-content/uploads/2017/06/vietnam.jpg 3072w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2017/06/vietnam-1024x683.jpg 1024w"
                                     sizes="(max-width: 300px) 100vw, 300px"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Vietnam-300x198.png"
                                     alt="Туры во Вьетнам флаг">

                                <h3 class="main-country__title">Вьетнам</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Индия" href="https://kochevnik.kg/countries/indija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/india-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt="Отдых в индии"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/India-300x199.png"
                                     alt="Индия флаг">

                                <h3 class="main-country__title">Индия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Чехия" href="https://kochevnik.kg/countries/chehija/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya.jpg"
                                     class="main-country__img wp-post-image" alt=""
                                     srcset="https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya.jpg 3072w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-300x199.jpg 300w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-768x510.jpg 768w, https://kochevnik.kg/wp-content/uploads/2017/06/chekhiya-1024x680.jpg 1024w"
                                     sizes="(max-width: 300px) 100vw, 300px"/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Czech_Republic-300x196.png"
                                     alt="Чехия флаг">

                                <h3 class="main-country__title">Чехия</h3>
                            </div>
                        </a>
                    </article>

                    <article class="main-country">
                        <a class="main-country__link" title="Туры на Шри-Ланку"
                           href="https://kochevnik.kg/countries/shri-lanka/">
                            <div class="main-country__img-wrap">
                                <img src="https://kochevnik.kg/wp-content/uploads/2017/06/sri-lanka-1-300x200.jpg"
                                     class="main-country__img wp-post-image" alt=""/></div>


                            <div class="main-country__content">
                                <img class="main-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Sri_Lanka-300x143.png"
                                     alt="Туры на Шри-Ланку флаг">

                                <h3 class="main-country__title">Шри ланка</h3>
                            </div>
                        </a>
                    </article>
                </div>
            </div>


            <div class="section">
                <h2 class="section__head">Все страны</h2>
                <div class="clear loop-countries">
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Австрия"
                           href="https://kochevnik.kg/countries/avstrija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Austria-300x196.png"
                                     alt="Австрия флаг">

                                <h3 class="loop-country__title">Австрия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Азербайджан"
                           href="https://kochevnik.kg/countries/azerbajdzhan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Azerbaijan-300x146.png"
                                     alt="Азербайджан флаг">

                                <h3 class="loop-country__title">Азербайджан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Англия"
                           href="https://kochevnik.kg/countries/anglija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/england-300x180.png"
                                     alt="Англия флаг">

                                <h3 class="loop-country__title">Англия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Болгария"
                           href="https://kochevnik.kg/countries/bolgarija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Bulgaria-300x196.png"
                                     alt="Болгария флаг">

                                <h3 class="loop-country__title">Болгария</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Венгрия"
                           href="https://kochevnik.kg/countries/vengrija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Hungary-300x196.png"
                                     alt="Венгрия флаг">

                                <h3 class="loop-country__title">Венгрия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Греция"
                           href="https://kochevnik.kg/countries/grecija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Greece-300x198.png"
                                     alt="Греция флаг">

                                <h3 class="loop-country__title">Греция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Доминикана"
                           href="https://kochevnik.kg/countries/dominikana/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Dominican_Republic-300x196.png"
                                     alt="Доминикана флаг">

                                <h3 class="loop-country__title">Доминикана</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Замбия"
                           href="https://kochevnik.kg/countries/zambija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Zambia-300x196.png"
                                     alt="Замбия флаг">

                                <h3 class="loop-country__title">Замбия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Индия"
                           href="https://kochevnik.kg/countries/indija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/India-300x199.png"
                                     alt="Индия флаг">

                                <h3 class="loop-country__title">Индия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Индонезия"
                           href="https://kochevnik.kg/countries/indonezija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Indonesia-300x198.png"
                                     alt="Индонезия флаг">

                                <h3 class="loop-country__title">Индонезия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Иордания"
                           href="https://kochevnik.kg/countries/iordanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Jordan-300x149.png"
                                     alt="Иордания флаг">

                                <h3 class="loop-country__title">Иордания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Ирландия"
                           href="https://kochevnik.kg/countries/irlandija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Ireland-300x148.png"
                                     alt="Ирландия флаг">

                                <h3 class="loop-country__title">Ирландия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Испания"
                           href="https://kochevnik.kg/countries/ispanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Spain-300x195.png"
                                     alt="Испания флаг">

                                <h3 class="loop-country__title">Испания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Италия"
                           href="https://kochevnik.kg/countries/italija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Italy-300x191.png"
                                     alt="Италия флаг">

                                <h3 class="loop-country__title">Италия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Казахстан"
                           href="https://kochevnik.kg/countries/kazahstan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Kazakhstan-300x145.png"
                                     alt="Казахстан флаг">

                                <h3 class="loop-country__title">Казахстан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Камбоджа"
                           href="https://kochevnik.kg/countries/kambodzha/">

                            <div class="loop-country__content">

                                <h3 class="loop-country__title">Камбоджа</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Кипр"
                           href="https://kochevnik.kg/countries/kipr/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Cyprus-300x180.png"
                                     alt="Кипр флаг">

                                <h3 class="loop-country__title">Кипр</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Китай"
                           href="https://kochevnik.kg/countries/kitaj/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/05/082.-Kitaj-300x200.jpg"
                                     alt="Китай флаг">

                                <h3 class="loop-country__title">Китай</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Куба"
                           href="https://kochevnik.kg/countries/kuba/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Cuba-300x148.png"
                                     alt="Куба флаг">

                                <h3 class="loop-country__title">Куба</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Кыргызстан"
                           href="https://kochevnik.kg/countries/kyrgyzstan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Kyrgyzstan-300x177.png"
                                     alt="Кыргызстан флаг">

                                <h3 class="loop-country__title">Кыргызстан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Литва"
                           href="https://kochevnik.kg/countries/litva/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Lithuania-300x145.png"
                                     alt="Литва флаг">

                                <h3 class="loop-country__title">Литва</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Маврикий"
                           href="https://kochevnik.kg/countries/mavrikij/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Mauritius-300x197.png"
                                     alt="Маврикий флаг">

                                <h3 class="loop-country__title">Маврикий</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Малайзия"
                           href="https://kochevnik.kg/countries/malajzija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Malaysia-300x148.png"
                                     alt="Малайзия флаг">

                                <h3 class="loop-country__title">Малайзия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мальдивы"
                           href="https://kochevnik.kg/countries/maldivy/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Maldives-300x198.png"
                                     alt="Мальдивы флаг">

                                <h3 class="loop-country__title">Мальдивы</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мальта"
                           href="https://kochevnik.kg/countries/malta/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Malta-300x197.png"
                                     alt="Мальта флаг">

                                <h3 class="loop-country__title">Мальта</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Марокко"
                           href="https://kochevnik.kg/countries/marokko/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Morocco-300x197.png"
                                     alt="Марокко флаг">

                                <h3 class="loop-country__title">Марокко</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Мексика"
                           href="https://kochevnik.kg/countries/meksika/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Mexico-300x163.png"
                                     alt="Мексика флаг">

                                <h3 class="loop-country__title">Мексика</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Монако"
                           href="https://kochevnik.kg/countries/monako/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Monaco-300x226.png"
                                     alt="Монако флаг">

                                <h3 class="loop-country__title">Монако</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Нидерланды"
                           href="https://kochevnik.kg/countries/niderlandy/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Netherlands-300x195.png"
                                     alt="Нидерланды флаг">

                                <h3 class="loop-country__title">Нидерланды</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Польша"
                           href="https://kochevnik.kg/countries/polsha/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Poland-300x196.png"
                                     alt="Польша флаг">

                                <h3 class="loop-country__title">Польша</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Португалия"
                           href="https://kochevnik.kg/countries/portugalija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Portugal-300x198.png"
                                     alt="Португалия флаг">

                                <h3 class="loop-country__title">Португалия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Россия"
                           href="https://kochevnik.kg/countries/rossija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Russian_Federation-300x195.png"
                                     alt="Россия флаг">

                                <h3 class="loop-country__title">Россия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Румыния"
                           href="https://kochevnik.kg/countries/rumynija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Romania-300x177.png"
                                     alt="Румыния флаг">

                                <h3 class="loop-country__title">Румыния</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Сейшельские острова"
                           href="https://kochevnik.kg/countries/sejshelskie-ostrova/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Seychelles-300x147.png"
                                     alt="Сейшельские острова флаг">

                                <h3 class="loop-country__title">Сейшельские острова</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Словакия"
                           href="https://kochevnik.kg/countries/slovakija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Slovakia-300x188.png"
                                     alt="Словакия флаг">

                                <h3 class="loop-country__title">Словакия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Танзания"
                           href="https://kochevnik.kg/countries/tanzanija/">

                            <div class="loop-country__content">

                                <h3 class="loop-country__title">Танзания</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Тунис"
                           href="https://kochevnik.kg/countries/tunis/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Tunisia-300x197.png"
                                     alt="Тунис флаг">

                                <h3 class="loop-country__title">Тунис</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Андорру"
                           href="https://kochevnik.kg/countries/andorra/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Andorra-300x197.png"
                                     alt="Туры в Андорру флаг">

                                <h3 class="loop-country__title">Андорра</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="туры в германию"
                           href="https://kochevnik.kg/countries/germanija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Germany-300x199.png"
                                     alt="туры в германию флаг">

                                <h3 class="loop-country__title">Германия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Грузию"
                           href="https://kochevnik.kg/countries/gruzija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Georgia-300x223.png"
                                     alt="Туры в Грузию флаг">

                                <h3 class="loop-country__title">Туры в Грузию</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Египет"
                           href="https://kochevnik.kg/countries/egipet/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Egypt-300x199.png"
                                     alt="Туры в Египет флаг">

                                <h3 class="loop-country__title">Египет</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в ОАЭ"
                           href="https://kochevnik.kg/countries/oaje/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/arab_emirates-300x150.jpg"
                                     alt="Туры в ОАЭ флаг">

                                <h3 class="loop-country__title">ОАЭ</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Таиланд"
                           href="https://kochevnik.kg/countries/tailand/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Thailand-300x198.png"
                                     alt="Туры в Таиланд флаг">

                                <h3 class="loop-country__title">Таиланд</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Турцию"
                           href="https://kochevnik.kg/countries/turcija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Turkey-300x199.png"
                                     alt="Туры в Турцию флаг">

                                <h3 class="loop-country__title">Турция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры в Узбекистан"
                           href="https://kochevnik.kg/countries/uzbekistan/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/03/uzbekistan-300x150.gif"
                                     alt="Туры в Узбекистан флаг">

                                <h3 class="loop-country__title">Туры в Узбекистан</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры во Вьетнам"
                           href="https://kochevnik.kg/countries/vetnam/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Vietnam-300x198.png"
                                     alt="Туры во Вьетнам флаг">

                                <h3 class="loop-country__title">Вьетнам</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Туры на Шри-Ланку"
                           href="https://kochevnik.kg/countries/shri-lanka/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Sri_Lanka-300x143.png"
                                     alt="Туры на Шри-Ланку флаг">

                                <h3 class="loop-country__title">Шри ланка</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Украина"
                           href="https://kochevnik.kg/countries/ukraina/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Ukraine-300x198.png"
                                     alt="Украина флаг">

                                <h3 class="loop-country__title">Украина</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Финляндия"
                           href="https://kochevnik.kg/countries/finljandija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Finland-300x177.png"
                                     alt="Финляндия флаг">

                                <h3 class="loop-country__title">Финляндия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Франция"
                           href="https://kochevnik.kg/countries/francija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/France-300x196.png"
                                     alt="Франция флаг">

                                <h3 class="loop-country__title">Франция</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Хорватия"
                           href="https://kochevnik.kg/countries/horvatija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Croatia-300x147.png"
                                     alt="Хорватия флаг">

                                <h3 class="loop-country__title">Хорватия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Черногория"
                           href="https://kochevnik.kg/countries/chernogorija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/chernogoria-300x150.jpg"
                                     alt="Черногория флаг">

                                <h3 class="loop-country__title">Черногория</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Чехия"
                           href="https://kochevnik.kg/countries/chehija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Czech_Republic-300x196.png"
                                     alt="Чехия флаг">

                                <h3 class="loop-country__title">Чехия</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Швейцария"
                           href="https://kochevnik.kg/countries/shvejcarija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Switzerland-300x300.png"
                                     alt="Швейцария флаг">

                                <h3 class="loop-country__title">Швейцария</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Эстония"
                           href="https://kochevnik.kg/countries/jestonija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/Estonia-300x198.png"
                                     alt="Эстония флаг">

                                <h3 class="loop-country__title">Эстония</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="ЮАР"
                           href="https://kochevnik.kg/countries/juar/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2017/07/South_Africa-300x199.png"
                                     alt="ЮАР флаг">

                                <h3 class="loop-country__title">ЮАР</h3>
                            </div>
                        </a>
                    </article>
                    <article class="loop-country">
                        <a class="loop-country__link match-height" title="Япония"
                           href="https://kochevnik.kg/countries/japonija/">

                            <div class="loop-country__content">
                                <img class="loop-country__flag"
                                     src="https://kochevnik.kg/wp-content/uploads/2018/08/flag_of_japan-300x200.gif"
                                     alt="Япония флаг">

                                <h3 class="loop-country__title">Япония</h3>
                            </div>
                        </a>
                    </article>
                </div>
            </div>

        </div>

    </main>
    <!--  All Countries page  -->
    <main id="main-countries" class="main d-none" role="main">


        <article id="post-21"
                 class="post-21 countries type-countries status-publish has-post-thumbnail hentry continents-asia">
            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                     style="background-image: url(https://kochevnik.kg/wp-content/uploads/2017/06/thailand.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">Туры в Таиланд</h1>
                    </div>

                    <nav id="article-nav" class="article__nav">
                    </nav>
                </div>
            </div>

            <div class="container">
                <div>
                    <h2> Горящие туры в Таиланд из Бишкека и Алматы</h2>
                    <div class="tv-hot-tours tv-moduleid-969369"></div>
                    <p>
                        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
                    </p>
                </div>


                <div class="country-tours" id="country-tours">
                    <h2 class="article__subhead">Туры в Таиланд</h2>

                    <div class="articles-wrap main-tours-wrap">

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                       title="Пхукет | The Nature Phuket 5*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/225701578-1024x575.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/225701578.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-300x168.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-768x431.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/225701578-100x56.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-the-nature-phuket-5/"
                                   title="Пхукет | The Nature Phuket 5*">
                                    Пхукет | The Nature Phuket 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>812</strong>
							USD
						</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                       title="Пхукет | Dream Phuket Hotel Laguna 5*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/117680370-1024x683.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/117680370.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/117680370-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-dream-phuket-hotel-laguna-5/"
                                   title="Пхукет | Dream Phuket Hotel Laguna 5*">
                                    Пхукет | Dream Phuket Hotel Laguna 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>758</strong>
							EUR
						</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                       title="Пхукет | Swissotel Resort Phuket Patong Beach 5*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/11469547-1024x768.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/11469547.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-768x576.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/11469547-100x75.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-swissotel-resort-phuket-patong-beach-5/"
                                   title="Пхукет | Swissotel Resort Phuket Patong Beach 5*">
                                    Пхукет | Swissotel Resort Phuket Patong Beach 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>705</strong>
							EUR
						</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                       title="Пхукет | Splash Beach Resort By Langham 5*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/241293737-1024x683.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/241293737.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/241293737-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-splash-beach-resort-by-langham-5/"
                                   title="Пхукет | Splash Beach Resort By Langham 5*">
                                    Пхукет | Splash Beach Resort By Langham 5* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>669</strong>
							EUR
						</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                       title="Пхукет | PGS Hotels Casadel Sol 4*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-1024x674.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-300x198.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-768x506.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665-100x66.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/03/original_78571665.jpg 1280w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/phuket-pgs-hotels-casadel-sol-4/"
                                   title="Пхукет | PGS Hotels Casadel Sol 4*">
                                    Пхукет | PGS Hotels Casadel Sol 4* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>661</strong>
							EUR
						</span>
                            </div>
                        </article>

                        <article class="tour-loop article-loop main-tour">
                            <div class="tour-loop__top">
                                <div class="tour-loop__img-wrap">
                                    <a href="https://kochevnik.kg/tours/tailand-ozone-condotel-kata-beach-4/"
                                       title="Пхукет | Ozone Condotel Kata Beach 4*">
                                        <img src="https://kochevnik.kg/wp-content/uploads/2020/02/115847126-1024x683.jpg"
                                             class="tour-loop__img article-loop__img wp-post-image" alt=""
                                             srcset="https://kochevnik.kg/wp-content/uploads/2020/02/115847126.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/02/115847126-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/02/115847126-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/02/115847126-100x67.jpg 100w"
                                             sizes="(max-width: 900px) 100vw, 900px"/> </a>
                                </div>

                                <a href="https://kochevnik.kg/countries/tailand/" class="tour-loop__country">
                                    Туры в Таиланд </a>
                            </div>

                            <h3 class="tour-loop__title main-tour__title match-height">
                                <a href="https://kochevnik.kg/tours/tailand-ozone-condotel-kata-beach-4/"
                                   title="Пхукет | Ozone Condotel Kata Beach 4*">
                                    Пхукет | Ozone Condotel Kata Beach 4* </a>
                            </h3>

                            <div class="tour-loop__price-wrap">
						<span class="tour-loop__price">
							<strong>645</strong>
							EUR
						</span>
                            </div>
                        </article>

                        <div class="align-center">
                            <a href="https://kochevnik.kg/tours/" class="main-tours-wrap__btn">Загрузить еще</a>
                        </div>
                    </div>
                </div>


                <div class="article__about article__content">
                    <h2 class="article__subhead">Описание</h2>
                    <div class="article__about"><h2 id="&quot;1&quot;">Географическое положение</h2>
                        <p>Королевство Таиланд (историческое название Сиам) – страна в юго-восточной Азии, расположенная
                            в юго-западной части Индокитайского полуострова и в северной части полуострова Малакка.
                            Граничит на востоке с Камбоджей и Лаосом, на западе с Мьянмой (Бирмой), а на юге с
                            Малайзией, омывается водами Тихого и Индийского океанов. Территория страны составляет 514
                            тыс. кв. км., немногим уступает Франции.<br/>
                            Географически Таиланд можно поделить на шесть основных регионов:<br/>
                            1. Центральная часть – долина реки Чаопрайа (Бангкок, Аюттайа);<br/>
                            2. Северо-восточное плато – самый бедный регион из-за частых наводнений (Кхао Яй);<br/>
                            3. Северный горный район (Чианг Май, Чианг Рай, Мехонгсон);<br/>


                    </div>
                </div>



                <div class="article__currency article__content">
                    <h2 class="article__subhead">Валюта</h2>
                    <div class="article__currency"><h2>Валюта Таиланда &#8212; таиландский бат</h2>
                        <p>1 бат = 100 сатангов. Международное обозначение: ฿. В настоящее время в обращении находятся
                            банкноты достоинством 20, 50, 100, 500, 1000 бат и монеты 1, 2, 5, 10 бат, а также 25 и 50
                            сатангов (жёлтого цвета). Монеты имеют различный цвет:<br/>
                            1 бат &#8212; белая;<br/>
                            2 бата &#8212; белая и желтая;<br/>
                            5 батов &#8212; белая;<br/>
                            10 батов &#8212; двухцветная;<br/>
                            25 и 50 сатангов &#8212; желтые.<br/>
                            Все они содержат изображение короля Рама IX (Пхумипон Адульядет), правящего с 1946 года, и
                            различных святынь</p>
                    </div>
                </div>


                <div class="">
                    <h2 class="article__subhead">Регионы Таиланда</h2>

                    <div class="regions-wrap">

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/bangkok/">
                                    Бангкок </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/krabi/">
                                    Краби </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/lanta/">
                                    Ланта </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/pattajja/">
                                    Паттайя </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/pha-nga/">
                                    Пха Нга </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/phi-phi/">
                                    Пхи Пхи </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/phuket/">
                                    Пхукет </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/rajong/">
                                    Районг </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/samet/">
                                    Самет </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/samui/">
                                    Самуи </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/hua-hin/">
                                    Хуа Хин </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/cha-am/">
                                    Ча-ам </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/chang/">
                                    Чанг </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/chang-mjej/">
                                    Чанг Мэй </a>
                            </h3>
                        </article>

                        <article class="region-loop">
                            <h3 class="region-loop__title">
                                <a href="https://kochevnik.kg/regions/chiang-raj/">
                                    Чианг Рай </a>
                            </h3>
                        </article>
                    </div>
                </div>

                <div class="country-form">

                    <h3 class="country-form__head">Планируете отдых в Таиланде?</h3>

                    <p class="country-form__cap">Отправьте заявку и мы найдем для вас подходящее предложение</p>

                    <!-- <button href="#popup-form" class="btn btn-primary js-pop-up-btn" data-head="Отдых в Таиланде" data-desc="Заполните форму и мы вам перезвоним">
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
    <!--    Tours page-->
    <main id="main-tours" class="main d-none" role="main">
        <article id="post-34004"
                 class="page-tour post-34004 tours type-tours status-publish has-post-thumbnail hentry catalog-turkey departure_city-bishkek rest_type-akvapark rest_type-gorjashhie rest_type-molodezhnye-tury rest_type-na-prazdnichnye-daty rest_type-pljazhnye rest_type-svadebnyj-tur rest_type-semejnye-tury rest_type-stokovyj-tur">


            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                     style="background-image: url('https://kochevnik.kg/wp-content/uploads/2020/03/59626620.jpg')">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <p class="page-tour__country">
                            <a class="page-tour__country-link" href="https://kochevnik.kg/countries/turcija/"
                               title="Туры в Турцию">Турция</a>

                            <a class="page-tour__country-link" href="https://kochevnik.kg/regions/antalja/"
                               title="Туры в Анталию">Анталья</a>
                        </p>

                        <h1 class="article__head page-tour__head">Анталья | Sherwood Dreams Resort 5*</h1>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="tour-info">
                    <div class="clear tour-info__wrap">
                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Дата</span>
                            <span class="tour-info__val">19.03.21 - 25.03.21</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Длительность</span>
                            <span class="tour-info__val"><b>6</b> ночей</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Стоимость</span>
                            <span class="tour-info__val">
									<strong class="tour-info__val--num">582</strong>
									EUR								</span>
                        </div>

                        <div class="tour-info__item match-height">
                            <span class="tour-info__label">Город вылета</span>
                            <span class="tour-info__val"><b>Бишкек</b></span>
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
                            <h1><span style="color: #ff6600;">Sherwood Dreams Resort 5*</span></h1>
                            <p><strong>Почему мы рекомендуем именно приобрести тур в Анталию в этот отель сезона
                                    2020?</strong></p>
                            <p>Курортный отель Sherwood Dreams с собственным песчаным пляжем расположен на побережье
                                города Белек. К услугам гостей 4 открытых бассейна, водные горки, а также спа-центр с
                                турецкой баней и сауной.</p>
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
                            <p><strong>Для кого этот тур будет лучшим?</strong><br/>
                                • Молодожёнов<br/>
                                • Шумных компаний<br/>
                                • Любителям тенниса<br/>
                                • Семейным парам, желательно с детьми</p>
                            <p><img class="wp-image-34005 aligncenter"
                                    src="http://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg" alt=""
                                    width="500" height="377"
                                    srcset="https://kochevnik.kg/wp-content/uploads/2020/03/59626620-300x225.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/59626620-100x75.jpg 100w"
                                    sizes="(max-width: 500px) 100vw, 500px"/> <img class="wp-image-34006 aligncenter"
                                                                                   src="http://kochevnik.kg/wp-content/uploads/2020/03/9866150-300x200.jpg"
                                                                                   alt="" width="500" height="333"
                                                                                   srcset="https://kochevnik.kg/wp-content/uploads/2020/03/9866150-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/9866150-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/9866150.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/9866150-100x67.jpg 100w"
                                                                                   sizes="(max-width: 500px) 100vw, 500px"/>
                                <img class="wp-image-34007 aligncenter"
                                     src="http://kochevnik.kg/wp-content/uploads/2020/03/13065125-300x200.jpg" alt=""
                                     width="500" height="333"
                                     srcset="https://kochevnik.kg/wp-content/uploads/2020/03/13065125-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/13065125-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/13065125.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/13065125-100x67.jpg 100w"
                                     sizes="(max-width: 500px) 100vw, 500px"/></p>
                        </div>

                        <div class="article__content clear">


                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="page-tour__sidebar tour-sidebar">
                            <div class="tour-sidebar__price">
                                <strong class="tour-sidebar__price-num">582</strong>
                                EUR
                            </div>

                            <div class="tour-sidebar__block">
                                <h3 class="tour-sidebar__head">В стоимость входит</h2>
                                    <div class="tour-sidebar__desc"><p>• Авиаперелёт<br/>
                                            • Проживание в отеле<br/>
                                            • Питание «всё включено»<br/>
                                            • Трансфер аэропорт – отель – аэропорт</p>
                                    </div>
                                </h3>
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

                        <div class="form form--subscribe page-tour__sidebar-block">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>Подписка на новости</strong>
                            </p>

                            <div role="form" class="wpcf7" id="wpcf7-f23045-p34004-o1" lang="ru-RU" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/tours/antalja-sherwood-dreams-resort-5/#wpcf7-f23045-p34004-o1"
                                      method="post" class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="23045"/>
                                        <input type="hidden" name="_wpcf7_version" value="5.1.5"/>
                                        <input type="hidden" name="_wpcf7_locale" value="ru_RU"/>
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f23045-p34004-o1"/>
                                        <input type="hidden" name="_wpcf7_container_post" value="34004"/>
                                        <input type="hidden" name="g-recaptcha-response" value=""/>
                                    </div>
                                    <p><span class="wpcf7-form-control-wrap user-email"><input type="email"
                                                                                               name="user-email"
                                                                                               value="" size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Email"/></span>
                                        <button class="btn">Подписаться</button>
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>

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


                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-1024x684.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-768x513.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25-100x67.jpg 100w, https://kochevnik.kg/wp-content/uploads/2020/01/Anya-Dryagina-Efes-IMG_8492-25.jpg 1600w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/nasledie-turcii/" class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/nasledie-turcii/" title="Наследие Турции">
                                Наследие Турции </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                                   title="Вся Турция за 8 дней | Великолепный Век">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-1024x681.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/04/11292607_1160.jpg 1160w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/vsja-turcija-za-8-dnej-velikolepnyj-vek/"
                               title="Вся Турция за 8 дней | Великолепный Век">
                                Вся Турция за 8 дней | Великолепный Век </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>399</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                                   title="Анталья | Fame Residence Kemer & Spa 5*">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/13436821-1024x681.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/13436821.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-768x511.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/13436821-100x67.jpg 100w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/antalja-fame-residence-kemer-spa-5/"
                               title="Анталья | Fame Residence Kemer & Spa 5*">
                                Анталья | Fame Residence Kemer & Spa 5* </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>570</strong>
						EUR
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                                   title="Майские праздники в Солнечной Анталье">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-1024x768.png 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-300x225.png 300w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-768x576.png 768w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244-100x75.png 100w, https://kochevnik.kg/wp-content/uploads/2020/03/d7c1b4f233d81605743409d5e1a69065fe2d010308a6b3799a3d9c728ee74244.png 1200w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/majskie-prazdniki-v-solnechnoj-antale/"
                               title="Майские праздники в Солнечной Анталье">
                                Майские праздники в Солнечной Анталье </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>690</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                                   title="Золотое Кольцо Турции 2020">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2019/08/3-1-1024x621.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-300x182.jpg 300w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1-768x466.jpg 768w, https://kochevnik.kg/wp-content/uploads/2019/08/3-1.jpg 1100w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/" class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/zolotoe-kolco-turcii-2020/"
                               title="Золотое Кольцо Турции 2020">
                                Золотое Кольцо Турции 2020 </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>345</strong>
						USD
					</span>
                        </div>
                    </article>

                    <article class="tour-loop article-loop main-tour">
                        <div class="tour-loop__top">
                            <div class="tour-loop__img-wrap">
                                <a href="https://kochevnik.kg/tours/antalja-granada-luxury-belek-5/"
                                   title="Анталья | Granada Luxury Belek 5*">
                                    <img src="https://kochevnik.kg/wp-content/uploads/2020/03/184161325-1024x683.jpg"
                                         class="tour-loop__img article-loop__img wp-post-image" alt=""
                                         srcset="https://kochevnik.kg/wp-content/uploads/2020/03/184161325.jpg 1024w, https://kochevnik.kg/wp-content/uploads/2020/03/184161325-300x200.jpg 300w, https://kochevnik.kg/wp-content/uploads/2020/03/184161325-768x512.jpg 768w, https://kochevnik.kg/wp-content/uploads/2020/03/184161325-100x67.jpg 100w"
                                         sizes="(max-width: 900px) 100vw, 900px"/> </a>
                            </div>

                            <a href="https://kochevnik.kg/tours/antalja-granada-luxury-belek-5/"
                               class="tour-loop__country">
                                Турция </a>
                        </div>

                        <h3 class="tour-loop__title main-tour__title match-height">
                            <a href="https://kochevnik.kg/tours/antalja-granada-luxury-belek-5/"
                               title="Анталья | Granada Luxury Belek 5*">
                                Анталья | Granada Luxury Belek 5* </a>
                        </h3>

                        <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>753</strong>
						EUR
					</span>
                        </div>
                    </article>

                    <div class="align-center">
                        <a href="https://kochevnik.kg/tours/" class="main-tours-wrap__btn">Посмотреть больше туровы</a>
                    </div>
                </div>

            </div>
        </article>


    </main>
    <!--    Contact-->
    <main id="main-contact" class="main d-none" role="main">
        <div class="container">
            <article id="post-3328" class="article">

                <h1 class="article__head">Контакты</h1>

                <div class="article__content">
                </div>


                <div class="c-office">
                    <h3 class="c-office__city">Бишкек</h3>

                    <p class="c-office__address">пр. Байтик Баатыра 74 </p>

                    <p>
											<span class="c-office__phone h-contacts__phone ">
												<a href="tel:+996550312949">+996 (550) 312949</a>											</span>
                    </p>


                    <div class="c-office__map">
                        <p><a class="dg-widget-link"
                              href="http://2gis.kg/bishkek/firm/70000001045815753/center/74.60982799530031,42.85567578734514/zoom/16?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=bigMap">Посмотреть
                                на карте Бишкека</a></p>
                        <div class="dg-widget-link"><a
                                    href="http://2gis.kg/bishkek/firm/70000001045815753/photos/70000001045815753/center/74.60982799530031,42.85567578734514/zoom/17?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=photos">Фотографии
                                компании</a></div>
                        <div class="dg-widget-link"><a
                                    href="http://2gis.kg/bishkek/center/74.60982,42.854788/zoom/16/routeTab/rsType/bus/to/74.60982,42.854788╎Кочевник.kg, туристическая компания?utm_medium=widget-source&#038;utm_campaign=firmsonmap&#038;utm_source=route">Найти
                                проезд до Кочевник.kg, туристическая компания</a></div>
                        <p>
                            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                            <script charset="utf-8">new DGWidgetLoader({
                                    "width": 640,
                                    "height": 600,
                                    "borderColor": "#a3a3a3",
                                    "pos": {"lat": 42.85567578734514, "lon": 74.60982799530031, "zoom": 16},
                                    "opt": {"city": "bishkek"},
                                    "org": [{"id": "70000001045815753"}]
                                });</script>
                            <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует
                                JavaScript. Включите его в настройках вашего браузера.
                            </noscript>
                        </p>
                    </div>
                </div>
                <div class="c-office">
                    <h3 class="c-office__city">Ош</h3>

                    <p class="c-office__address">пр-т Масалиева, 28/2</p>

                    <p>
											<span class="c-office__phone h-contacts__phone ">
												<a href="tel:+996323286677">+996 (3232) 8 66 77</a>											</span>
                    </p>
                    <p>
											<span class="c-office__phone h-contacts__phone ">
												<a href="tel:+996550086677">+996 (550) 086-677</a>											</span>
                    </p>


                </div>
                <!-- <div class="contacts__map">
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1nS-vaY-6bxIRzDz0gPWuSmQ59hc" width="100%" height="600"></iframe>
</div> -->
            </article>

        </div>
    </main>
@endsection