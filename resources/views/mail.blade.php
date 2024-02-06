<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Comments</th>
        <th scope="col">Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach($mail as $key)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$key->name}}</td>
        <td>{{$key->email}}</td>
        <td>{{$key->subject}}</td>
        <td>{{$key->comments}}</td>
        <td>{{$key->created_at->format('H:i:s') }} on {{ $key->created_at->format('Y-m-d') }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
