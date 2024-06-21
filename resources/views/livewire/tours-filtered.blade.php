<div>
{{--    <div class="tour-listing main-tours-wrap" id="tour-listing">--}}

        <p class="count-tours">Найдено туров: <b>{{$tours->count()}}</b></p>
        <div class="articles-wrap main-tours-wrap">
            @foreach($tours as $tour)
                <article class="tour-loop article-loop main-tour">
                    <div class="tour-loop__top">
                        <div class="tour-loop__img-wrap">
                            <a href="tours/page/{{$tour->id}}" title="">
                                <img src="{{asset('assets/image/'.$tour->images[0]->image)}}"
                                     class="tour-loop__img article-loop__img wp-post-image" alt=""
                                     sizes="(max-width: 900px) 100vw, 900px"/> </a>
                        </div>

                        <a href="{{asset('tours/page/'.$tour->id)}}" class="tour-loop__country">
                            {{$tour->country->name}} </a>
                    </div>

                    <h3 class="tour-loop__title main-tour__title match-height">
                        <a href="{{asset('tours/page/'.$tour->id)}}" title="Наследие Турции">
                            {{$tour->name }} </a>
                    </h3>

                    <div class="tour-loop__price-wrap">
					<span class="tour-loop__price">
						<strong>{{$tour->price}}</strong>
						USD
					</span>
                    </div>
                </article>
            @endforeach
        </div>

{{--    </div>--}}
</div>
