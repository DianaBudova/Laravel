<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
    <style>
        * {
            color: #e1e1e3;
            background-color: #1a202c;
        }
        body {
            text-align: center;
        }
        p {
            color: #1F7872;
        }
        input {
            background-color: #e1e1e3;
            color: black;
        }
        input:last-of-type {
            background-color: #1F7872;
            display: block;
            margin: 1% auto;
        }
    </style>
</head>
<body>

    <form action="{{route('category.update', $category->id)}}" method="post">
        @csrf
        @method('PUT')
        <p>Name:</p>
        <input type="text" name="name" value="{{$category->name}}">
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="editbtn" value="Edit">
    </form>

</body>
</html>