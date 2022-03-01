@extends('admin.master')


@section('content')

    <h1>Create a product</h1>

    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Name</label>
            <input type="text" name="nme" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product price</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
