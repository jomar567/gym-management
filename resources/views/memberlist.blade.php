<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #EFF6EE;
        }
        table {
            border: 1px solid #000;
            width: 100%;
        }
        tbody tr td,
        thead tr th {
            padding: 10px;
            border: 1px solid #000;
        }
        thead tr th {
            text-align: left;
            background-color: gray;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>List of Member</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Trainer Name</th>
                <th>Trainer Specialization</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->trainer->name}}</td>
                <td>{{$member->trainer->specialization}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
