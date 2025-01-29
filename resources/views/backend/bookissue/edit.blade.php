@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Edit Book Issue</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.book-issues.index') }}" class="btn btn-secondary">Back to Book Issue</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <form action="{{ route('admin.book-issues.update', $bookIssue) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Book Title</label>
                                    <input type="text" name="name" id="category_name" class="form-control" value="{{old('name'), $bookIssue->book_id }}">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name">User Name</label>
                                        <input type="text" name="name" id="category_name" class="form-control" value="{{old('name'), $bookIssue->user_id }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_name">Issue Date</label>
                                            <input type="date" name="name" id="category_name" class="form-control" value="{{old('name'), $bookIssue->issue_date }}">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="category_name">Return Date</label>
                                                <input type="date" name="name" id="category_name" class="form-control" value="{{old('name'), $bookIssue->return_date }}">
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
                            <button type="submit" class="btn btn-primary">Save Book Issue</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
