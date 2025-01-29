@extends('backend.layouts.master')
@section('content')
<div class="col-md-12 margin_top_30">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2>Student Users</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
                <a href="{{route('admin.student-users.create')}}" class="btn btn-primary">Add Student User</a>

            </div>
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
                @foreach ($studentUsers as $studentUser)
                <tbody>

                   <tr>
                    <td>{{ $loop->iteration }}</td>
                      <td>{{ $studentUser->name }}</td>
                      <td>{{ $studentUser->email }}</td>
                      <td>{{ $studentUser->role }}</td>
                      <td>{{$studentUser->Action}}</td>
                      <td>{{ $studentUser->status == 1 ? 'Active' : 'Inactive' }}</td>
                      <td>
                        <a href="{{ route('admin.student-users.edit', $studentUser) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.student-users.destroy', $studentUser) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student user?')">Delete</button>
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
