<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit tour</title>
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

    <form action="{{route('tour.update', $tour->id)}}" method="post">
        @csrf
        @method('PUT')
        <p>Name:</p>
        <input type="text" name="name" value="{{$tour->name}}">
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Price:</p>
        <input type="text" name="price" value="{{$tour->price}}">
        @error('price')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Image:</p>
        <input type="text" name="img" value="{{$tour->img}}">
        @error('img')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Short description:</p>
        <input type="text" name="short_description" value="{{$tour->short_description}}">
        @error('short_description')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Description:</p>
        <input type="text" name="description" value="{{$tour->description}}">
        @error('description')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Status:</p>
        <input type="text" name="status" value="{{$tour->status}}">
        @error('status')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="editbtn" value="Edit">
    </form>

</body>
</html>