@extends('admin.master')


@section('title')
    Manage Teacher
@endsection



@section('body')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center text-danger">All Teacher Info</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                        <tr>
                            <th>SO NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th >Action</th>
                        </tr>
                        </thead>


                        <tbody class="text-center">
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->mobile}}</td>
                            <td>
                                <img src="{{asset($teacher->image)}}" alt="" width="120" height="120">
                            </td>
                            <td class="d-flex ">
                                <a href="{{route('teacher.edit',['id'=>$teacher->id])}}" class="btn btn-sm btn-success  mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{route('teacher.delete',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you to delete this')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



@endsection
