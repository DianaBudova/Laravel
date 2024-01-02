<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Guest</title>
    <style>
        * {
            color: #e1e1e3;
            background-color: #1a202c;
        }

        table {
            margin: 0 auto;
            background-color: #2a3447;
        }

        a {
            color: #1F7872;
        }

        input {
            background-color: #D13F31;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <th>Post id</th>
            <th>Post name</th>
            <th>Post description</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->description}}</td>
                <td><a href="{{route('post.show', $post->id)}}">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>