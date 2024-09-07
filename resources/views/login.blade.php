<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{ url('/login') }}" method="POST">
        <div class="container">

            <div class="form-group">
                <label for="voter_id">Voter ID</label>
                <input type="number" name="voter_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="citizenship_number">Citizenship Number</label>
                <input type="number" name="citizenship_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="voter_id">Voter ID</label>
                <input type="number" name="voter_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control">
            </div>

        </div>
    </form>


</body>

</html>
