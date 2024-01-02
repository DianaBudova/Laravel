<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <style>
        * {
            color: #e1e1e3;
            background-color: #1a202c;
        }

        div {
            margin: 0 auto;
            background-color: #2a3447;
            width: 30%;
            padding: 1%;
        }

        div>* {
            background-color: #2a3447;
        }
    </style>
</head>

<body>
    <div>
        <h1>{{$tour->name}}</h1>
        <p>Id: {{$tour->id}}</p>
        <p>Name: {{$tour->name}}</p>
        <p>Price: {{$tour->price}}</p>
        <img style="object-fit: cover;" src="{{$tour->img}}" width="150" height="100">
        <p>Short desc: {{$tour->short_description}}</p>
        <p>Description: {{$tour->description}}</p>
        <p>Status: {{$tour->status}}</p>
    </div>

</body>

</html>