<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create</h1>
  <form method="POST" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="description">Description</label>
      <input type="text" name="description" id="description">
    </div>
    <div>
      <label for="price">Price</label>
      <input type="text" name="price" id="price">
    </div>
    <div>
      <label for="qty">Qty</label>
      <input type="text" name="qty" id="qty">
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>
</html>