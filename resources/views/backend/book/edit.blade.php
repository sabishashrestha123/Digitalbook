@extends('backend.layouts.master')

@section('content')
<div class="col-md-12 margin_top_30">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0 d-flex justify-content-between align-items-center">
                <h2>Edit Book</h2>
                <a href="{{ route('admin.books.index') }}" class="btn btn-secondary btn-sm">
                    Back to book
                </a>
            </div>
        </div>

        <div class="table_section padding_infor_info">
            <div class="container">
                <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        <!-- Book Title -->
                        <div class="col-md-6">
                            <label for="title" class="form-label">Book Title</label>
                            <input type="text" name="title" id="title"
                                   class="form-control" value="{{ old('title', $book->title) }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Author Name -->
                        <div class="col-md-6">
                            <label for="author_name" class="form-label">Author Name</label>
                            <input type="text" name="author_name" id="author_name"
                                   class="form-control" value="{{ old('author_name', $book->author_name) }}">
                            @error('author_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Edition -->
                        <div class="col-md-6">
                            <label for="edition" class="form-label">Edition</label>
                            <input type="text" name="edition" id="edition"
                                   class="form-control" value="{{ old('edition', $book->edition) }}">
                            @error('edition') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- ISBN -->
                        <div class="col-md-6">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="number" name="isbn" id="isbn"
                                   class="form-control" value="{{ old('isbn', $book->isbn) }}">
                            @error('isbn') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Book Category -->
                        <div class="col-md-6">
                            <label for="book_category_id" class="form-label">Book Category</label>
                            <select name="book_category_id" id="book_category_id" class="form-control" required>
                                <option disabled>Select Category</option>
                                @foreach ($bookCategories as $bookCategory)
                                    <option value="{{ $bookCategory->id }}"
                                        {{ $book->book_category_id == $bookCategory->id ? 'selected' : '' }}>
                                        {{ $bookCategory->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('book_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="1" {{ $book->status ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !$book->status ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Cover Image -->
                        <div class="col-md-6">
                            <label for="cover_image" class="form-label">Cover Image</label>
                            <input type="file" name="cover_image" id="cover_image" class="form-control">
                            @if ($book->cover_image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $book->cover_image) }}"
                                         alt="Cover Image" class="img-thumbnail" width="120">
                                </div>
                            @endif
                            @error('cover_image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- File -->
                        <div class="col-md-6">
                            <label for="file" class="form-label">File</label>
                            <input type="file" name="file" id="file" class="form-control">
                            @if ($book->file)
                                <div class="mt-2">
                                    <a href="{{ asset('storage/' . $book->file) }}"
                                       class="btn btn-sm btn-outline-primary" target="_blank">View File</a>
                                </div>
                            @endif
                            @error('file') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary px-4">Save Book</button>
                        <button type="reset" class="btn btn-outline-danger px-4">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
