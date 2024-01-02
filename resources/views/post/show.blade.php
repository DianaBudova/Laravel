<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
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
        <h1>{{$post->name}}</h1>
        <p>Id: {{$post->id}}</p>
        <p>Name: {{$post->name}}</p>
        <p>Description: {{$post->description}}</p>
    </div>

</body>

</html>