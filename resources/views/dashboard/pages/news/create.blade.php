@extends('dashboard.main')
@section('title', 'New News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">New News</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter news title" value="" required>
                            </div>

                            <div class="col-sm-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="editor" name="description" placeholder=""></textarea>
                            </div>

                            <div class="col-sm-12 mb-5">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
