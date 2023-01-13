@extends('layouts.app')


@section('content')
   <div class="container">
   <h1>Edit Product Page</h1>
      <div class="row">
        <div class="col-12"> 
            <div class="row">

                <form method="POST" action="{{route('products.update',$product->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="">Product</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                    <label for="" class="mt-3">Price</label>
                    <input class="form-control " type="number" name="price" value="{{ $product->price }}">
                    <button class="btn btn-warning mt-3" type="submit">Update Product</button>
                </form> 
      
            </div>
        
    </div>
    </div>
   </div>
@endsection