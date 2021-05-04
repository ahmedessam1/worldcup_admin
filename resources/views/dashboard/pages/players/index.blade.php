@extends('dashboard.main')
@section('title', 'Players Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Plays</h1>
            <a class="btn btn-lg btn-primary mb-3" href="{{route('players.create')}}">Add New Player</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">Social Media</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
                <tbody>
                @forelse($model as $m)
                    <tr>
                        <td class="text-center">{{$m->name}}</td>
                        <td class="text-center"><a href="mailto:{{$m->email}}">{{$m->email}}</a></td>
                        <td class="text-center">{{$m->gender}}</td>
                        <td class="text-center">{{$m->age}}</td>
                        <td class="text-center">{{$m->country}}</td>
                        <td class="text-center">
                            <a href="{{ $m->facebook }}" class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $m->twitter }}" class="social-icon" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="{{ $m->instagram }}" class="social-icon" target="_blank"><i class="fa fa-instagram"></i></a>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-lg btn-primary" type="button" onclick="location.href='{{route('players.edit', $m->id)}}'">Edit</button>

                            <form style="display: inline" method="post"
                                  action="{{route('players.destroy',[$m->id])}}">
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
