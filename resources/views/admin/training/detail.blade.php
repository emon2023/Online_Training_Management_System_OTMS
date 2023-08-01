@extends('admin.master')

@section('title')

    Teacher Training Detail

@endsection



@section('body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center text-danger">Training Detail Info</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <tr>
                            <th>Training ID</th>
                            <td>{{$training->id}}</td>
                        </tr>
                        <tr>
                            <th>Training Category</th>
                            <td>{{$training->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Training Title</th>
                            <td>{{$training->title}}</td>
                        </tr>
                        <tr>
                            <th>Teacher Info</th>
                            <td>{{$training->teacher->name.'('.$training->teacher->mobile.')'}}</td>
                        </tr>
                        <tr>
                            <th>Training Description</th>
                            <td>{!! $training->description !!}</td>
                        </tr>
                        <tr>
                            <th>Starting Date</th>
                            <td>{{$training->starting_date}}</td>
                        </tr>
                        <tr>
                            <th>Training Prize</th>
                            <td>{{$training->prize}}</td>
                        </tr>
                        <tr>
                            <th>Training Image</th>
                            <td><img src="{{asset($training->image)}}" alt="" height="100" width="120"></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$training->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
