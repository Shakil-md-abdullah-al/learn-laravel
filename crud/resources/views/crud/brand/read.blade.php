@include('include.header')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Form</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>sl</th>
                                <th>Brand Name</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>

                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $brand->brand_name}}</td>
                                    <td>{{ $brand->status?'published': 'unpublished' }}</td>
                                    <td>

                                        @if($brand->status == 1)
                                            <a href="{{ route('status',['id'=>$brand->id]) }}" class="btn btn-sm btn-warning">UnPublish</a>
                                        @else
                                            <a href="{{ route('status',['id'=>$brand->id]) }}" class="btn btn-sm btn-warning">Publish</a>
                                        @endif

                                        <a href="{{ route('brand.edit',['id'=>$brand->id]) }}" class="btn btn-sm btn-primary">edit</a>
{{--                                        <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-sm btn-danger">delete</a>--}}
                                        <form action="{{ route('brand.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $brand->id }}">
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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


