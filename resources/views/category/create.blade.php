<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create category</title>
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

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <p>Name:</p>
        <input type="text" name="name">
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="createbtn" value="Create">
    </form>

</body>
</html>