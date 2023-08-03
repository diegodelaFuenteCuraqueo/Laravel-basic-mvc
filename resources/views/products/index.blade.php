<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Product</h1>

  <div>
    @if(session()->has('success'))
      <div>
        {{session()->get('success')}}
      </div>
    @endif
  </div>

  <div>

    <div>
      <a href="{{route('product.create')}}">Create</a>
    </div>

    <table border="1">
      <tr>
        <th>ID<th> <th>Name</th> <th>Description</th> <th>Price</th> <th>Qty</th>
      </tr>

      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td> <td>{{$product->name}}</td> <td>{{$product->description}}</td> <td>{{$product->price}}</td> <td>{{$product->qty}}</td> 
        <td>
          <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
        </td>
        <td>
          <form method="POST" action="{{route('product.delete', ['product' => $product])}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
          </form>
      </tr>
      @endforeach
    </table>

  </div>
</body>
</html>