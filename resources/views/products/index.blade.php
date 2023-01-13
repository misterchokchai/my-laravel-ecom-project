@extends('layouts.app')


@section('content')
   <div class="container">
    <a class="btn btn-success mb-2 "  href="{{ route('products.create') }}">Add product</a>

{{--     @if ($message = Session::has('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif --}}

        <div class="row">
            {{-- <div class="col-12"> 
                <div class="row">
                    @foreach ( $productsView as $item)
                        <div class="col-4">  
                            <a href="">
                                <div class="card p-2  text-center">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ $item->price }}</p>
                                </div>
                            </a>
                            <a href="{{ route('products.edit',$item->id) }}" class="btn btn-warning mt-2">แก้ไข</a>
                            <form action="{{ route('products.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </div>
                      @endforeach 
    
                </div>
            </div> --}}

       
            <div class="table-reponsive">

                <table class="table table-striped table-hover table align-middle mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                    @foreach ($productsView as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td width="250px">
                            <a href="{{ route('products.edit',$item->id) }}" class="btn btn-warning float-start">แก้ไข</a>
                            <form action="{{ route('products.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ms-1" value="555">ลบ</button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="ps text-danger float-end">
                    <p>* This version has not prompt for user yes or no..., Be careful when you delete or edit </p>
                </div>
            </div>
           
   
        </div>
   </div>
@endsection