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
                        <form action="{{route('create')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="row mb-3">
                                <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="first_name" class="form-control" id="inputFirstName">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputSecond" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="last_name" class="form-control" id="inputSecond">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="inputPhone">
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


