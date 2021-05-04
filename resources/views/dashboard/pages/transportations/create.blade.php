@extends('dashboard.main')
@section('title', 'New News Page')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection
@section('content')
    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Adding New Transportation To A Player</h1>
            <main>
                <div class="row g-5">
                    <div class="col-12">
                        <form action="{{route('transportations.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="player_id" class="form-label">Select Player</label>
                                    <select type="text" class="form-control" id="player_id" name="player_id" required>
                                        <option value="">-SELECT PLAYER-</option>
                                        @foreach($model as $m)
                                            <option value="{{ $m->id }}">{{ $m->name }} - {{ $m->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-6">
                                    <label for="from_location" class="form-label">From Location</label>
                                    <input type="text" class="form-control" id="from_location" name="from_location"
                                           placeholder="Enter transportation form location" value="" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="from_description" class="form-label">From Description</label>
                                    <input type="text" class="form-control" id="from_description" name="from_description"
                                           placeholder="Enter transportation form description" value="" required>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-6">
                                    <label for="to_location" class="form-label">To Location</label>
                                    <input type="text" class="form-control" id="to_location" name="to_location"
                                           placeholder="Enter transportation to location" value="" required>
                                </div>


                                <div class="col-md-6">
                                    <label for="to_description" class="form-label">To Description</label>
                                    <input type="text" class="form-control" id="to_description" name="to_description"
                                           placeholder="Enter transportation to description" value="" required>
                                </div>
                            </div>


                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-4">
                                    <label for="from_time" class="form-label">From Time</label>
                                    <input type="text" class="form-control" id="from_time" name="from_time"
                                           placeholder="Enter transportation from time" value="" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="to_time" class="form-label">To Time</label>
                                    <input type="text" class="form-control" id="to_time" name="to_time"
                                           placeholder="Enter transportation to time" value="" required>
                                </div>


                                <div class="col-md-4">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="text" class="form-control datepicker" id="date" name="date"
                                           placeholder="Enter transportation to time" value="" required>
                                </div>
                            </div>

                            <button class="w-100 btn btn-primary btn-lg" style="margin-top: 40px" type="submit">Add Transportation</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>
@endsection
