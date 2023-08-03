<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Edit</h1>
  <div>
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
  </div>

  <form method="POST" action="{{route('product.update', product}}">
    @csrf
    @method('put')
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="{{$product->name}}">
    </div>
    <div>
      <label for="description">Description</label>
      <input type="text" name="description" id="description" value="{{$product->description}}">
    </div>
    <div>
      <label for="price">Price</label>
      <input type="text" name="price" id="price" value="{{$product->price}}">
    </div>
    <div>
      <label for="qty">Qty</label>
      <input type="text" name="qty" id="qty" value="{{$product->qty}}">
    </div>
    <div>
      <button type="submit">Update</button>
    </div>
  </form>
</body>
</html>