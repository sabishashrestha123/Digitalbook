@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Edit Book Issue </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.book-borrow.index') }}" class="btn btn-secondary">Back to Book Issue</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <form action="{{ route('admin.book-borrow.update', $bookBorrow) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- User Selection -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">User Name</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        <option disabled selected>select user</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $bookBorrow->user_id == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Book Selection -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="book_id">Book Title</label>
                                    <select name="book_id" id="book_id" class="form-control" required>
                                        <option disabled selected>select book</option>
                                        @foreach ($books as $book)
                                            <option value="{{ $book->id }}"
                                                {{  $bookBorrow->book_id == $book->id ? 'selected' : '' }}>
                                                {{ $book->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('book_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Issue Date -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="borrow_date">Issue Date</label>
                                    <input type="date" name="borrow_date" id="borrow_date" class="form-control"
                                        value="{{ $bookBorrow->borrow_date  }}" required>
                                </div>
                                @error('borrow_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Return Date -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_date">Return Date</label>
                                    <input type="date" name="return_date" id="return_date" class="form-control"
                                        value="{{ $bookBorrow->return_date }}" required>
                                </div>
                                @error('return_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit & Reset Buttons -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Update Book
                                Issue</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
