@extends('dashboard.main')
@section('title', 'Edit News Category Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Edit News Category</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('news-categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$category->name}}" required>
                            </div>
                            <div class="col-sm-12 mb-5">
                                <label for="name_ar" class="form-label">Name (AR)</label>
                                <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="" value="{{$category->name_ar}}" required>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
