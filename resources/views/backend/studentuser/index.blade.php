@extends('backend.layouts.master')

@section('content')
    <div class="col-md-12 margin_top_30">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Student Users</h2>
                </div>
                <div class="row">
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>admi
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('admin.student-register.updateStatus', $user) }}">
                                            @if ($user->status == 1)
                                                <i class="btn btn-sm btn-toggle btn-success">On</i>
                                            @else
                                                <i class="btn btn-sm btn-toggle btn-danger">Off</i>
                                            @endif
                                        </a>
                                    </td>

                                    <td>


<form action="{{ route('admin.student-register.destroy', $user->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this category?')">
        Delete
    </button>
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
