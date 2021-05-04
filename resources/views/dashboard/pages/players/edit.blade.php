@extends('dashboard.main')
@section('title', 'New Product Page')

@section('content')

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Edit Player Info</h1>
            <main>
                <div class="row g-5">
                    <form action="{{route('players.update', $player->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" value="{{ $player->name }}" id="name" name="name" placeholder="Enter the player name" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{ $player->email }}" id="email" name="email" placeholder="Enter the player official Email" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <select name="country" id="country" class="form-control" required>
                                    <option value="">-SELECT PLAYER COUNTRY-</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->name }}"
                                        @if($player->country === $country->name)
                                            selected
                                        @endif
                                        >{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">-SELECT PLAYER GENDER-</option>
                                    <option value="Male"
                                    @if($player->gender === 'Male')
                                        selected
                                    @endif>Male</option>
                                    <option value="Female"
                                    @if($player->gender === 'Female')
                                        selected
                                    @endif>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" value="{{ $player->age }}" id="age" name="age" placeholder="Enter the player age" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" value="{{ $player->facebook }}" id="facebook" name="facebook" placeholder="Enter the player Facebook link" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" value="{{ $player->instagram }}" id="instagram" name="instagram" placeholder="Enter the player Instagram link" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" value="{{ $player->twitter }}" id="twitter" name="twitter" placeholder="Enter the player Twitter link" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password <small style="color: blue">(Enter password only if you want to change it)</small></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter the player login password" value="">
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg" style="margin-top: 30px" type="submit"><i class="fa fa-edit"></i> Edit Player</button>
                    </form>
                </div>
            </main>
        </div>
    </main>

@endsection
