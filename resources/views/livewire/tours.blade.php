<div>
    <div class="" id="sidebar">

        <h2 class=""><i class="fa fa-sliders" aria-hidden="true"></i> Фильтр туров</h2>


        <div class="filter">
            <div class="filter__row" wire:ignore>
                <div class="row">
                    <div class="col-md-6">
                        <div class="filter__item" id="filter-country2">

                            <span class="filter__label">Страны</span>
                            <select onchange="course_id(this.value)" name="country_id" id="countries-select">
                                <option value=""> Country</option>
                                @foreach($countries as $country)
                                    <option  value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="filter__item" id="filter-rest2">

                            <span class="filter__label">Тип отдыха</span>
                            <select onchange="category_id(this.value)" name="category" id="rest-select">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter__row">
                <div class="row">
                   {{-- <div class="col-md-6">
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
                    </div>--}}

                    <div class="col-md-12">
                        <button class="btn btn--blue filter__btn">Найти туры</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">



</script>