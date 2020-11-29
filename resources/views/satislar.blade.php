<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 30%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Satışlar</h2>

<table>
    <tr>
        <th>Ad</th>
        <th>Ürün</th>
        <th>Fiyatı</th>
    </tr>

    @foreach($sales as $sale)
        <tr>
            <td>{{$sale->name}}</td>
            <td>{{$sale->pName}}</td>
            <td>{{$sale->price}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
