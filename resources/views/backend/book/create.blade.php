@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Add Book</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Back to Books</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Book Title</label>
                                    <input type="text" name="title" id="category_name" class="form-control"
                                        placeholder="Enter Book Title">
                                </div>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Author</label>
                                    <input type="text" name="author" id="category_name" class="form-control"
                                        placeholder="Enter Author">
                                </div>
                                @error('author')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">Edition</label>
                                    <input type="number" name="edition" id="category_name" class="form-control"
                                        placeholder="Enter Edition">
                                </div>
                                @error('edition')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">ISBN</label>
                                    <input type="number" name="isbn" id="category_name" class="form-control"
                                        placeholder="Enter ISBN">
                                </div>
                                @error('isbn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="status">Book Category</label>
                                    <select name="book_category_id" id="status" class="form-control" required>
                                        <option disabled selected>select category</option>
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

                                    <label for="status">Semeter</label>
                                    <select name="semester_id" id="status" class="form-control" required>
                                        <option disabled selected>select semester</option>
                                        @foreach ($semesters as $semester)
                                            <option value="{{ $semester->id }}">{{ $semester->title }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('semester_id')
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">cover img</label>
                                    <input type="file" name="cover_image" id="category_name" class="form-control"
                                        placeholder="Enter cover image">
                                </div>
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_name">file</label>
                                    <input type="file" name="file" id="category_name" class="form-control"
                                        placeholder="Enter file">
                                </div>
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Book</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
