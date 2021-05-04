@extends('dashboard.main')
@section('title', 'News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Transportation</h1>
            <a class="btn btn-lg btn-primary mb-3" href="{{route('transportations.create')}}">Add Player Transportation</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Player</th>
                    <th>From Location</th>
                    <th>To Location</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($model as $m)
                    <tr>
                        <td>{{$m->player->name}} - {{ $m->player->email }}</td>
                        <td>{{$m->from_location}} - <small style="font-weight: bold; color: #0d6efd">{{ $m->from_description }}</small></td>
                        <td>{{$m->to_location}} - <small style="font-weight: bold; color: #0d6efd">{{ $m->to_description }}</small></td>
                        <td>{{$m->from_time}}->{{$m->to_time}}</td>
                        <td>{{$m->date}}</td>
                        <td>
                            <a href="{{ route('transportations.edit', $m->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                            <form style="display: inline" method="post"
                                  action="{{route('transportations.destroy',[$m->id])}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
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
