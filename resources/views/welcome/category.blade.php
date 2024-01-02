<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Guest</title>
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
            <th>Category id</th>
            <th>Category name</th>
            <th>Category create</th>
            <th>Category update</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td><a href="{{route('category.show', $category->id)}}">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>