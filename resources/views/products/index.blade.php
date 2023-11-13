@extends('layouts.app')

@section('content')
<body>
    <h1>Products</h1>
    <div>
@if (session()-> has('success'))
<div>
    {{session('success')}}
</div>

        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">create a product</a>
        </div>
        <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>


                    </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>

                        <a href="{{route('product.edit',['product' => $product])}}">Edit</a>

                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy',['product'=> $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
@endsection

