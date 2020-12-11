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

<h2>Sliders</h2>

<table>
    <tr>
        <td>No</td>
        <td>Adı</td>
        <td>Resim</td>
        <td>İşlem</td>
    </tr>

    @foreach($sliders as $slider)
        <tr>
            <td>{{$slider->id}}</td>
            <td>{{$slider->name}}</td>
            <td>{{$slider->photo}}</td>
            <td><a href="{{route('delete.slider',$slider->id)}}">Delete</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>
