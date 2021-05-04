@extends('dashboard.main')
@section('title', 'New Product Page')

@section('content')

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Adding New Player</h1>
            <main>
                <div class="row g-5">
                    <form action="{{route('players.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter the player name" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter the player official Email" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <select name="country" id="country" class="form-control" required>
                                    <option value="">-SELECT PLAYER COUNTRY-</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">-SELECT PLAYER GENDER-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter the player age" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter the player Facebook link" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter the player Instagram link" value="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter the player Twitter link" value="" required>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter the player login password" value="" required>
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg" style="margin-top: 30px" type="submit"><i class="fa fa-plus"></i> Add Player</button>
                    </form>
                </div>
            </main>
        </div>
    </main>

@endsection
