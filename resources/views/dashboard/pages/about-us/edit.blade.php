@extends('dashboard.main')
@section('title', 'Edit About Us Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Edit About Us</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('about-us.update', $about->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-sm-12">
                                <label for="text" class="form-label">About Us</label>
                                <textarea type="text" class="form-control" id="editor" name="text" placeholder="" required>{{$about->text}}</textarea>
                            </div>
                            <div class="col-sm-12 mb-5">
                                <label for="text_ar" class="form-label">About Us (AR)</label>
                                <textarea type="text" class="form-control editor" name="text_ar" placeholder="" required>{{$about->text_ar}}</textarea>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
