<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        body {
            margin: 25px;
            font-size: 25px;
        }
    </style>
</head>
<body>

<h2>Şifremi Unuttum</h2>

<small>Format: 05551112233</small><br><br>

<form action="{{route('login.send-password')}}" method="post" class="form-inline">
    <input type="tel" name="phone" class="form-control mb-2 mr-sm-2" id="telephone" placeholder="05551112233" pattern="[0-9]{11}" required>
    @csrf
    <button type="submit" class="btn btn-primary mb-2">Gönder</button>
</form>

</body>
</html>
