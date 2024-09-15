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

    <div class='container mt-5'>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>s.n.</th>
                    <th>Name of Candidate</th>
                    <th>Associated Party</th>
                    <th>Total Votes</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src='can-1.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Shushil Shah</td>
                    <td>A</td>

                    <td id='shushil'></td>
                </tr>
                <tr>
                    <td>
                        <img src='can-2.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Anil Shah</td>
                    <td>B</td>

                    <td id='anil'></td>
                </tr>
                <tr>
                    <td>
                        <img src='can-3.jpg' class="rounded-circle circle-image"
                            style="width:100px;height:100px;object-fit:cover;">
                    </td>
                    <td>Santosh Shah</td>
                    <td>C</td>

                    <td id='santosh'></td>
                </tr>
            </tbody>


        </table>
    </div>

    <!-- JavaScript to display total votes from localStorage -->
    <script>
        // Retrieve the vote counts from localStorage
        const votes = JSON.parse(localStorage.getItem('votes'));

        // Display the total votes for each candidate
        document.getElementById('shushil').textContent = votes.john;
        document.getElementById('anil').textContent = votes.jane;
        document.getElementById('santosh').textContent = votes.emily;
    </script>

</body>

</html>
