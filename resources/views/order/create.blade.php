<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create order</title>
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

    <form action="{{route('order.store')}}" method="post">
        @csrf
        <p>Telephone:</p>
        <input type="text" name="telephone">
        @error('telephone')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Pip:</p>
        <input type="text" name="pip">
        @error('pip')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Email:</p>
        <input type="text" name="email">
        @error('email')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Tour id:</p>
        <input type="integer" name="tour_id">
        @error('tour_id')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Count day:</p>
        <input type="text" name="count_day">
        @error('count_day')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Price:</p>
        <input type="text" name="price">
        @error('price')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="createbtn" value="Create">
    </form>

</body>
</html>