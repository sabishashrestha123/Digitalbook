@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Add Book Category</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.book-categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <!-- Form for adding a new category -->
                    <form action="{{ route('admin.book-categories.update', $bookCategory) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" name="name" id="category_name" class="form-control" value="{{old('name'), $bookCategory->name }}">
                                </div>
                                @error('name')
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
