@extends('admin.master')


@section('title')
    Add  Category
@endsection



@section('body')


    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4 text-center text-success display-6">Add Category Form</h3>
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name'):''}}</span>
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
                                <button type="submit" class="btn btn-primary w-md">Create New Category</button>
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

