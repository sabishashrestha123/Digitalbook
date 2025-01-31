@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Add Semester</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.semester.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <!-- Form for adding a new category -->
                    <form action="{{ route('admin.semester.index') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Semester Name</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter category name">
                                </div>
                                @error('tilte')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="status">Book Category</label>
                                    <select name="book_category_id" id="status" class="form-control" required>
                                        <option  disabled selected>select category</option>
                                        @foreach ($bookCategories as $bookCategory)
                                            <option value="{{ $bookCategory->id }}">{{ $bookCategory->name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Category</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
