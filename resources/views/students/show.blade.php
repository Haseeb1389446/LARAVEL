<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 pt-5">
                <a class="btn btn-primary mb-3" href="{{url('/insert-students')}}"> < Back </a>
                <h1>Fetch Data</h1>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">CITY</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($students as $std)
                    
                    <tr>
                        <th scope="row">{{$std->id}}</th>
                        <td>{{$std->name}}</td>
                        <td>{{$std->email}}</td>
                        <td>{{$std->city}}</td>
                        <td><a class="btn btn-warning" href="{{url('/edit-students',$std->id)}}">Edit</a> <a class="btn btn-danger" href="{{url('/delete-students',$std->id)}}">Delete</a></td>
                    </tr>
                    
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>