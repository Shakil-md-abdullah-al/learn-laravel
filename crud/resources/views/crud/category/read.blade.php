@include('include.header')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Form</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name}}</td>
                                    <td>{{ $category->status?'published': 'unpublished' }}</td>
                                    <td>

                                        @if($category->status == 1)
                                            <a href="{{ route('status',['id'=>$category->id]) }}" class="btn btn-sm btn-warning">UnPublish</a>
                                        @else
                                            <a href="{{ route('status',['id'=>$category->id]) }}" class="btn btn-sm btn-warning">Publish</a>
                                        @endif

                                        <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-sm btn-primary">Edit</a>
{{--                                        <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-sm btn-danger">delete</a>--}}
                                        <form action="{{ route('category.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $category->id }}">
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


