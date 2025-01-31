@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Slider</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Add Slider</a>
                    </div>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($sliders as $slider)
                            <tbody>

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td><img src="{{ $slider->image }}" height="100" width="200"
                                            alt="{{ $slider->title }}"></td>
                                    <td>
                                        <a href="{{ route('admin.slider.updateStatus', $slider) }}">
                                            @if ($slider->status == 1)
                                                <span class="btn btn-success">

                                                    Active
                                                </span>
                                            @else
                                                <span class="btn btn-danger">
                                                 InActive
                                                </span>
                                            @endif
                                        </a>


                                    </td>

                                    <td>
                                        <a href="{{ route('admin.slider.edit', $slider) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.slider.destroy', $slider) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
