@extends('dashboard.main')
@section('title', 'News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">News</h1>
            <a class="btn btn-lg btn-primary mb-3" href="{{route('news.create')}}">New News</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($news as $news)
                    <tr>
                        <td><img style="width: 60px; height: 60px" src="{{asset('public/uploads/'.$news->image)}}" alt="{{$news->name}}"></td>
                        <td>{{$news->title}}</td>
                        <td>
                            <button class="btn btn-lg btn-primary" type="button" onclick="location.href='{{route('news.edit', $news->id)}}'">Edit</button>

                            <form style="display: inline" method="post"
                                  action="{{route('news.destroy',[$news->id])}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-lg btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"> There is no rows</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
