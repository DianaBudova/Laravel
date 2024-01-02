<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit order</title>
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

    <form action="{{route('order.update', $order->id)}}" method="post">
        @csrf
        @method('PUT')
        <p>Telephone:</p>
        <input type="text" name="telephone" value="{{$order->telephone}}">
        @error('telephone')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Pip:</p>
        <input type="text" name="pip" value="{{$order->pip}}">
        @error('pip')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Email:</p>
        <input type="text" name="email" value="{{$order->email}}">
        @error('email')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Tour id:</p>
        <input type="integer" name="tour_id" value="{{$order->tour_id}}">
        @error('tour_id')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Count day:</p>
        <input type="integer" name="count_day" value="{{$order->count_day}}">
        @error('count_day')
        <p style="color: red">{{$message}}</p>
        @enderror
        <p>Price:</p>
        <input type="text" name="price" value="{{$order->price}}">
        @error('price')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="editbtn" value="Edit">
    </form>

</body>
</html>