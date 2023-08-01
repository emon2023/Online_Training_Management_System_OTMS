@extends('teacher.master')

@section('title')

    Teacher Training Edit

@endsection



@section('body')

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4 text-center text-success display-6">Edit Training Form</h3>
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('training.update',['id'=>$training->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Training Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="horizontal-firstname-input" value="{{$training->title}}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Training Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control summernote" id="horizontal-email-input">{{$training->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Starting Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="starting_date" class="form-control" id="horizontal-password-input" value="{{$training->starting_date}}">
                        </div>
                    </div>


                     <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Training Prize</label>
                        <div class="col-sm-9">
                            <input type="number" name="prize" class="form-control" value="{{$training->prize}}" />
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
                            <img src="{{asset($training->image)}}" alt="" height="120" width="120">
                        </div>
                    </div>


                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Create New Training</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end row -->


@endsection
