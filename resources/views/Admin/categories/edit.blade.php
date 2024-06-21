@extends('Admin.layouts')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <!-- Include Date Range Picker -->
    <main id="main" class="main">
        <div class="card-body">
            <h5 class="card-title">Categories Edit</h5>

            <!-- Floating Labels Form -->
            <form action="{{route('admin.categories.update',$categories->id)}}" method="POST" enctype="multipart/form-data" class="row g-3" >
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">

                        <input name="name" value="{{$categories->name}}" type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Category Name</label>
                    </div>
                    @if($errors->has('name'))
                        <span class="error" style="color: darkred">{{$errors->first('name')}}</span>
                    @endif
                </div>

                <div class="text-end">
                    <button  type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </main>
@endsection