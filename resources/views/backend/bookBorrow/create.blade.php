@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Add Book Issue</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.book-barrow.index') }}" class="btn btn-secondary">Back to Book Issue</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <form action="{{ route('admin.book-barrow.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="status">User Name</label>
                                    <select name="user_id" id="status" class="form-control" required>
                                        <option disabled selected>select user id</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="book_id">Book Title</label>
                                    <select name="book_id" id="book_id" class="form-control" required>
                                        <option disabled selected>select book</option>
                                        @foreach ($books as $book)
                                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('book_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Issue Date</label>
                                    <input type="date" name="borrow_date" id="category_name" class="form-control"
                                        placeholder="Enter Issue Date">
                                </div>
                                @error('issue_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Return Date</label>
                                    <input type="date" name="return_date" id="category_name" class="form-control"
                                        placeholder="Enter Return Date">
                                </div>
                                @error('return_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
