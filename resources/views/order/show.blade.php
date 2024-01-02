<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Phone: {{$order->telephone}}</h1>
        <p>Pip: {{$order->pip}}</p>
        <p>Email: {{$order->email}}</p>
        <p>Tour id: {{$order->tour_id}}</p>
        <p>Count day: {{$order->count_day}}</p>
        <p>Price: {{$order->price}}</p>
    </div>

</body>

</html>