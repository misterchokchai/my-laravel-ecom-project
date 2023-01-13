@extends('layouts.app')


@section('content')
   <div class="container">
   <h1>Create Product Page</h1>
      <div class="row">
        <div class="col-12"> 
            <div class="row">
                
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    
                    <label for="">Product</label>
                    <input class="form-control" type="text" name="name" placeholder="Product Name" required>
                    <label for="" class="mt-3">Price    </label>
                    <input class="form-control " type="number" name="price" placeholder="Price of product" required>
                    <hr>
                    <button class="btn btn-success mt-3 " type="submit">Add Product</button>
                </form> 
            </div>
        
    </div>
    </div>
   </div>
@endsection