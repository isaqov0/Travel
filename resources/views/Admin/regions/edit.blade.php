@extends('Admin.layouts')
@section('content')
    <!-- Include Date Range Picker -->
    <main id="main" class="main">
        <div class="card-body">
            <h5 class="card-title">Country Edit</h5>
            <!-- Floating Labels Form -->
            <form action="{{route('admin.regions.update' , $regions->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
                @csrf
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <select  name="country_id" class="form-select" id="floatingSelect" aria-label="State">
                            <option selected value="{{$regions->country->id}}">{{$regions->country->name}}</option>
                            @foreach ($countries as $key => $country)
                                <option value="{{$country->id}}" >{{ $country['name'] }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Countries</label>
                    </div>
                    @if($errors->has('country_id'))
                        <span class="error" style="color: darkred">{{$errors->first('country_id')}}</span>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                       <input class="form-control" name="name" value="{{$regions->name}}">
                        <label for="floatingSelect">Region</label>
                    </div>
                    @if($errors->has('name'))
                        <span class="error" style="color: darkred">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="text-end">
                    <button  type="submit" class="btn btn-primary">Update</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </main>
@endsection