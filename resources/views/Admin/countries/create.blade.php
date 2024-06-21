
@extends('Admin.layouts')
@section('content')
    <!-- Include Date Range Picker -->
    <main id="main" class="main">
        <div class="card-body">
            <h5 class="card-title">Countries Create</h5>

            <!-- Floating Labels Form -->
            <form action="{{route('admin.countries.store')}}" method="POST" enctype="multipart/form-data"
                  class="row g-3">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <select name="name" class="form-select" id="floatingSelect" aria-label="State">
                            <option selected value="">Tanlang</option>
                            @foreach ($countries as $key => $country)
                                <option value="{{$key}}" >{{ $country['name'] }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Countries</label>
                    </div>
                    @if($errors->has('name'))
                        <span class="error" style="color: darkred">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input name="image" type="file" class="form-control" id="floatingCity">
                            <label for="floatingCity">Image</label>
                        </div>
                    </div>
                    @if($errors->has('image'))
                        <span class="error" style="color: darkred">{{$errors->first('image')}}</span>
                    @endif
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </main>
    {{--     <script src="https://gist.github.com/pratikbutani/20ded7151103bb30737e2ab1b336eb02.js"></script>--}}

@endsection