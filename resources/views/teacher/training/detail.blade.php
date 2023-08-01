@extends('teacher.master')

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
                            <th>{{$training->id}}</th>
                        </tr>
                        <tr>
                            <th>Training Category</th>
                            <th>{{$training->category->name}}</th>
                        </tr>
                        <tr>
                            <th>Training Title</th>
                            <th>{{$training->title}}</th>
                        </tr>
                        <tr>
                            <th>Training Description</th>
                            <th>{!! $training->description !!}</th>
                        </tr>
                        <tr>
                            <th>Starting Date</th>
                            <th>{{$training->starting_date}}</th>
                        </tr>
                        <tr>
                            <th>Training Prize</th>
                            <th>{{$training->prize}}</th>
                        </tr>
                        <tr>
                            <th>Training Image</th>
                            <th><img src="{{asset($training->image)}}" alt="" height="100" width="120"></th>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <th>{{$training->status == 1 ? 'Published' : 'Unpublished'}}</th>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
