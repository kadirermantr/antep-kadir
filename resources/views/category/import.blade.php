<form action="{{route('category.import')}}" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    @csrf
    <input type="submit" value="Yükle">
</form>
