@extends('dashboard.main')
@section('title', 'News Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">PDFS</h1>
            <a class="btn btn-lg btn-primary mb-3" href="{{route('pdf.create')}}">New PDF</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>PDF</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($model as $m)
                    <tr>
                        <td>{{$m->title}}</td>
                        <td>
                            <a href="{{ url('/') }}/public/uploads/{{ $m->file }}" target="_blank">
                                <i class="fa fa-file"></i>
                                View PDF
                            </a>
                        </td>
                        <td>

                            <form style="display: inline" method="post"
                                  action="{{route('pdf.destroy',[$m->id])}}">
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
