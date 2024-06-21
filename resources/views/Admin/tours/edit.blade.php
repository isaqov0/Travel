@extends('Admin.layouts')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <!-- Include Date Range Picker -->
    <main id="main" class="main">
        <div class="card-body">
            <h5 class="card-title">Tours Create</h5>

            <!-- Floating Labels Form -->
            <form action="{{route('admin.tours.update' , $tours->id)}}" method="POST" enctype="multipart/form-data"
                  class="row g-3">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">

                        <input name="name" value="{{$tours->name}}" type="text" class="form-control" id="floatingName"
                               placeholder="Your Name">
                        <label for="floatingName">Tours Name</label>
                    </div>
                    @if($errors->has('name'))
                        <span class="error" style="color: darkred">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="departure_city" value="{{$tours->departure_city}}" type="text" class="form-control"
                               id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Departure City</label>
                    </div>
                    @if($errors->has('departure_city'))
                        <span class="error" style="color: darkred">{{$errors->first('date')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select name="country_id" class="form-select" id="floatingSelect" aria-label="State">
                            <option selected value="{{$tours->country->id}}">{{$tours->country->name}}</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Country</label>
                    </div>
                    @if($errors->has('country_id'))
                        <span class="error" style="color: darkred">{{$errors->first('country_id')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    {{--                        {{$tours->country->id}}--}}
                    <div class="form-floating mb-3">
                        <select name="region_id" class="form-select" id="floatingSelect" aria-label="State">
                            <option selected value="{{$tours->region->id}}">{{$tours->region->name}}</option>
                            @foreach($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Region</label>
                    </div>
                    @if($errors->has('region_id'))
                        <span class="error" style="color: darkred">{{$errors->first('region_id')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select name="category_id" class="form-select" id="floatingSelect" aria-label="State">
                            <option selected value="{{$tours->category->id}}">{{$tours->category->name}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Category</label>
                    </div>
                    @if($errors->has('category_id'))
                        <span class="error" style="color: darkred">{{$errors->first('category_id')}}</span>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input name="price" value="{{$tours->price}}" type="number" class="form-control"
                               id="floatingName">
                        <label for="floatingName">Price</label>
                    </div>
                    @if($errors->has('price'))
                        <span class="error" style="color: darkred">{{$errors->first('price')}}</span>
                    @endif
                </div>
                <div class="col-md-2">
                    <div class="form-floating mb-3">
                        <select name="currency" class="form-select" id="floatingSelect" >
                            <option selected value="{{$tours->currency}}">{{$tours->currency}}</option>
                            @foreach($currency as $item)
                                <option value="{{$item['code']}}">{{$item['code']}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Currency</label>
                    </div>
                    @if($errors->has('currency'))
                        <span class="error" style="color: darkred">{{$errors->first('currency')}}</span>
                    @endif
                </div>
                <div class="col-12">
                    <div class="form-floating">
                                    <textarea name="description" class="form-control" placeholder="Address"
                                              id="floatingTextarea"
                                              style="height: 100px;">{{$tours->description}}</textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                    @if($errors->has('description'))
                        <span class="error" style="color: darkred">{{$errors->first('description')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input name="duration" value="{{$tours->duration}}" type="number" class="form-control"
                                   id="floatingCity">
                            <label for="floatingCity">Duration</label>
                        </div>
                    </div>
                    @if($errors->has('duration'))
                        <span class="error" style="color: darkred">{{$errors->first('duration')}}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input name="date" value="{{$tours->date}}" class="form-control " type="text" id="fromDate">
                            <label for="fromDate">Start Date</label>
                        </div>
                    </div>
                    @if($errors->has('date'))
                        <span class="error" style="color: darkred">{{$errors->first('date')}}</span>
                    @endif
                </div>
                {{--            @dd($tours)--}}
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-floating">
                            {{--                        @dd($tours->images[0]->image)--}}
                            <input name="image" value="{{asset('assets/image/'.$tours->images[0]->image)}}" type="file"
                                   multiple class="form-control" id="floatingCity">
                            <label for="floatingCity">Image</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <img src="{{asset('assets/image/'.$tours->images[0]->image)}}" width="200px" height="200px"
                                 class="" id="floatingCity">
                            <label for="floatingCity">Image</label>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#fromDate").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
            }).on('changeDate', function (selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#toDate').datepicker('setStartDate', minDate);
            });

            $("#toDate").datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
            }).on('changeDate', function (selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#fromDate').datepicker('setEndDate', minDate);
            });
        });
    </script>
@endsection