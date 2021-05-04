@extends('dashboard.main')
@section('title', 'New Category Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">New Category</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('news-categories.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                            </div>
                            <div class="col-sm-12 mb-5">
                                <label for="name_ar" class="form-label">Name (AR)</label>
                                <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="" value="" required>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
