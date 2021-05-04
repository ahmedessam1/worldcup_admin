@extends('dashboard.main')
@section('title', 'About Us Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">About Us</h1>
{{--            <a class="btn btn-lg btn-primary mb-3" href="{{route('about-us.create')}}">New Category</a>--}}
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Name (AR)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$about->text}}</td>
                        <td>{{$about->text_ar}}</td>
                        <td>
                            <button class="btn btn-lg btn-primary" type="button" onclick="location.href='{{route('about-us.edit', $about->id)}}'">Edit</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <th>Name</th>
                    <th>Name (AR)</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </main>
@endsection
