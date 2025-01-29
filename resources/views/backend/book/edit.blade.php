@extends('backend.layouts.master')

@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Edit Book</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.book-categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <form action="{{ route('admin.books.update', $book) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Book Title -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Book Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title) }}">
                                </div>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Author Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="author_name">Author Name</label>
                                    <input type="text" name="author_name" id="author_name" class="form-control" value="{{ old('author_name', $book->author_name) }}">
                                </div>
                                @error('author_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Edition -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="edition">Edition</label>
                                    <input type="text" name="edition" id="edition" class="form-control" value="{{ old('edition', $book->edition) }}">
                                </div>
                                @error('edition')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- ISBN -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="isbn">ISBN</label>
                                    <input type="number" name="isbn" id="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}">
                                </div>
                                @error('isbn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Book Category -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="book_category_id">Book Category</label>
                                    <select name="book_category_id" id="book_category_id" class="form-control" required>
                                        <option disabled selected>Select Category</option>
                                        @foreach ($bookCategories as $bookCategory)
                                            <option value="{{ $bookCategory->id }}"
                                                {{ old('book_category_id', $book->book_category_id) == $bookCategory->id ? 'selected' : '' }}>
                                                {{ $bookCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('book_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Cover Image -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" name="cover_image" id="cover_image" class="form-control">
                                    @if($book->cover_image)
                                        <div>
                                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover Image" width="100">
                                        </div>
                                    @endif
                                </div>
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- File -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                    @if($book->file)
                                        <div>
                                            <a href="{{ asset('storage/' . $book->file) }}" target="_blank">View File</a>
                                        </div>
                                    @endif
                                </div>
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1" {{ $book->status ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ !$book->status ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
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
