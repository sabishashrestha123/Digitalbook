@extends('backend.layouts.master')

@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Edit Semester</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.semester.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="container">
                    <form action="{{ route('admin.semester.update', $semester) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <!-- Semester Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Semester Name</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ old('title', $semester->title) }}" required>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Book Category -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="book_category_id">Book Category</label>
                                    <select name="book_category_id" id="book_category_id" class="form-control" required>
                                        <option disabled selected>Select Category</option>
                                        @foreach ($bookCategories as $bookCategory)
                                            <option value="{{ $bookCategory->id }}"
                                                {{ $semester->book_category_id == $bookCategory->id ? 'selected' : '' }}>
                                                {{ $bookCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('book_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1" {{ $semester->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $semester->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Submit & Reset Buttons -->
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Update Semester</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
