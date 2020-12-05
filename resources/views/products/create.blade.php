<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form action="{{route(product.save)}}" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name">
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Price</label>
            <input type="text" class="form-control" id="inputPassword4" name="price" placeholder="Price">
        </div>
    </div>

    @csrf
    <button type="submit" class="btn btn-primary">Save</button>
</form>

/*
    formlarda get metodu yerine post metodu kullanılır.
*/
