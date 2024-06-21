@extends('Admin.layouts')
@section('content')

    <main id="main" class="main">
        <div class="row">
            <div class="pagetitle col">
                <h1>Data Tables</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="col-1">
                <a href="categories/create" type="submit" class="btn ml-5 "><h1><i class="bi bi-file-earmark-plus w-75"
                                                                                  style="width: 400px ; height: 400px"></i>
                    </h1>
                </a>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body mt-4">

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>

                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a type="submit"
                                               href="{{route('admin.categories.edit',['id'=>$category->id])}}"
                                               class="btn">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a type="submit" href="/admin/categories/delete/{{$category ->id}}"
                                               class="btn mr-5">
                                                <i class="ri-delete-bin-6-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
