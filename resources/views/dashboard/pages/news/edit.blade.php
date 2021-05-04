@extends('dashboard.main')
@section('title', 'Edit News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Edit News</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('news.update', $news->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-sm-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$news->title}}" required>
                            </div>

                            <div class="col-sm-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="editor" name="description" placeholder="">{{$news->description}}</textarea>
                            </div>

                            <div class="col-sm-12 mb-5">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
