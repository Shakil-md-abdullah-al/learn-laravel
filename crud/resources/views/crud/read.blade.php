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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($students as $student)
                            <tr>
{{--                                <td>{{ $loop->iteration }}</td>--}}
                                <td>{{ $i }}</td>
                                <td>{{ $student->first_name.' '.$student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <a href="{{ route('edit',['id'=>$student->id]) }}" class="btn btn-sm btn-primary">edit</a>
                                    <a href="{{ route('delete',['id'=>$student->id]) }}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                                @php $i++ @endphp
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


