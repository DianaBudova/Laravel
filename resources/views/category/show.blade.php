<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show category</title>
    <style>
        * {
            color: #e1e1e3;
            background-color: #1a202c;
        }

        body {
            text-align: center;
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
        <h1>{{$category->name}}</h1>
        <p>Id: {{$category->id}}</p>
        <p>Name: {{$category->name}}</p>
    </div>

</body>

</html>