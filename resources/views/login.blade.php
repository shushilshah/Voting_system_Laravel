<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="/main/login.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form action="{{ url('/loginUser') }}" method="POST">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif

        @csrf

        <h1 style="margin-left:70px">Voter Login</h1>
        <div class="container">
            <div class="form-group">
                <label for="">Voter ID</label>
                <input type="number" name="voter_id" class="form-control" value="{{ old('voter_id') }}">
                <span class="danger">
                    @error('voter_id')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Citizenship Number</label>
                <input type="number" name="citizenship_number" class="form-control"
                    value="{{ old('citizenship_number') }}">
                <span class="danger">
                    @error('citizenship_number')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>

        <a><button class="btn btn-primary" type="submit">Login</button></a>
        <p>Not yet registered?</p>
        <button class="btn btn-success"><a href="{{ url('/signup') }}">Sign Up</a></button>

    </form>



</body>

</html>
