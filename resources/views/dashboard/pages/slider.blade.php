@extends('dashboard.main')
@section('title', 'Products Page')

@section('content')


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Slider Images</h1>

            @foreach($slider as $s)
                <img src="{{ url('/') }}/public/uploads/{{ $s->image }}" style="height: 120px; margin-top: 60px" alt="">
                <form action="{{ route('admin.slider.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $s->id }}">
                    <input type="file" name="image" style="margin-top: 10px" accept="image/*" required>
                    <button class="btn btn-dark" type="submit">Change</button>
                </form>
            @endforeach
        </div>
    </main>
@endsection
