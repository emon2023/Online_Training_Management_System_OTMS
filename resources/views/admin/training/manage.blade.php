@extends('admin.master')

@section('title')

    Teacher Training Manage

@endsection



@section('body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center text-danger">All Training Info</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                        <tr>
                            <th>SO NO</th>
                            <th>Title</th>
                            {{--                            <th>Description</th>--}}
                            <th>Starting_date</th>
                            <th>Prize</th>
                            {{--                            <th>Image</th>--}}
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody class="text-center">
                        @foreach($trainings as $training)
                            <tr class="{{$training->status == 1 ? ' ' : 'bg-warning text-white'}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$training->title}}</td>
                                {{--                                <td>{{$training->description}}</td>--}}
                                <td>{{$training->starting_date}}</td>
                                <td>{{$training->prize}}</td>
                                {{--                                <td>--}}
                                {{--                                    <img src="{{asset($training->image)}}" alt="" width="120" height="120">--}}
                                {{--                                </td>--}}
                                <td>{{$training->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td class="d-flex ">
                                    <a href="{{route('admin.update-training-status',['id'=>$training->id])}}" class="btn btn-sm btn-success  mr-1">
                                        <i class="fa fa-arrow-alt-circle-up"></i>
                                    </a>

                                    <a href="{{route('admin.training-detail',['id'=>$training->id])}}" class="btn btn-sm btn-success  mr-1">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
