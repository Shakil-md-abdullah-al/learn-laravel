@include('include.header')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Category Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category.update')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" value="{{$category->id}}" name="id">

                            <div class="row mb-3">
                                <label for="inputFirstName" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name"value="{{$category->category_name}}" class="form-control" id="inputFirstName">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" value="Save Info" class="form-control btn btn-outline-success" id="inputEmail3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="{{asset('crud.asset')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>


