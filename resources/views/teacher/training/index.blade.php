@extends('teacher.master')

@section('title')

    Teacher Training Add

@endsection



@section('body')

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4 text-center text-success display-6">Add Training Form</h3>
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('training.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Training Category</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-control" required>
                                <option value="" disabled selected>--Select Training Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Training Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('title') ? $errors->first('title'):''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Training Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control summernote" id="horizontal-email-input"></textarea>
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Starting Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="starting_date" class="form-control" id="horizontal-password-input">
                            <span class="text-danger">{{$errors->has('starting_date') ? $errors->first('starting_date'):''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Training Prize</label>
                        <div class="col-sm-9">
                            <input type="number" name="prize" class="form-control" />
                            <span class="text-danger">{{$errors->has('prize') ? $errors->first('prize'):''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
                            <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
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
