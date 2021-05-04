@extends('dashboard.main')
@section('title', 'Categories Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Categories</h1>
            <a class="btn btn-lg btn-primary mb-3" href="{{route('categories.create')}}">New Category</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Name (AR)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->name_ar}}</td>
                        <td>
                            <button class="btn btn-lg btn-primary" type="button" onclick="location.href='{{route('categories.edit', $category->id)}}'">Edit</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"> There is no rows</td>
                    </tr>
                @endforelse
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
