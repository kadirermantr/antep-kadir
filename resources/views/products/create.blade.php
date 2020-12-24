<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{route('product.save')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Product Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="product_name" placeholder="Name">
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1">Created By</label>
            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                <option value="0">Select Created By</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1">Category </label>
            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                <option value="0">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Product Photo</label>
            <input type="file" class="form-control" id="inputEmail4" name="photo" >
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputPassword4">Price</label>
            <input type="text" class="form-control" id="inputPassword4"  name="price" placeholder="Price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>


</body>
</html>
