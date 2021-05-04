@extends('dashboard.main')
@section('title', 'New News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">New Video</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('videos.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" value="" required>
                            </div>


                            <div class="col-sm-12">
                                <label for="link" class="form-label">Video Link</label>
                                <input type="text" class="form-control" id="link" name="link" placeholder="Enter the link" value="" required>
                            </div>

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
