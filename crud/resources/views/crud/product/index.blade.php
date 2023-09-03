@include('include.header')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Create Form</h3>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>sl</th>
                                <th>Product Name</th>
                                <th>Brand Name</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>


                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand_id}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" class="img-fluid">
                                </td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->status==1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('products.destroy', $product->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="{{asset('crud.asset')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>


