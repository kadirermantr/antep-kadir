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

<h2>Ürünler</h2>

<table>
    <tr>
        <th>No</th>
        <th>Ürün</th>
        <th>Fiyatı</th>
        <th>Ekleyen</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productName}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->user[0]->name}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
