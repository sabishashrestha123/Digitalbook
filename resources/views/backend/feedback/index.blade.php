@extends('backend.layouts.master')

@section('content')
<div class="col-md-12 margin_top_30">
   <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
            <h2>Feedback</h2>
         </div>
         <div class="row">
            <div class="col-md-6">
               {{-- <a href="{{ route('admin..create') }}" class="btn btn-primary">Add Book</a> --}}
            </div>
         </div>
      </div>
      <div class="table_section padding_infor_info">
         <div class="table-responsive-sm">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Name </th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Subject</th>


                     <th>Action</th>
                  </tr>
               </thead>
               @foreach ($feedbacks as $feedback)
               <tbody>
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $feedback->name }}</td>
                     <td>{{ $feedback->email }}</td>
                     <td>{{ $feedback->phone }}</td>
                     <td>{{ $feedback->subject }}</td>


                     <td>
                        <a href="{{ route('admin.feedback.show', $feedback) }}" class="btn btn-primary">view</a>
                        <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this feedback?')">
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
