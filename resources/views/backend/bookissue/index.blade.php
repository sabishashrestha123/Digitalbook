@extends('backend.layouts.master')

@section('content')
<div class="col-md-12 margin_top_30">
   <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
            <h2>Book Issue</h2>
         </div>
         <div class="row">
            <div class="col-md-6">
               <a href="{{ route('admin.book-issues.create') }}" class="btn btn-primary">Add Book Issue</a>
            </div>
         </div>
      </div>
      <div class="table_section padding_infor_info">
         <div class="table-responsive-sm">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Book Title</th>
                     <th>User Name</th>
                     <th>Issue Date</th>
                     <th>Return Date</th>
                     <th>Action</th>
                  </tr>
               </thead>
               @foreach ($bookIssues as $bookIssue)
               <tbody>
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $bookIssue->book->title }}</td>
                     <td>{{ $bookIssue->user->name }}</td>
                     <td>{{ $bookIssue->issue_date }}</td>
                     <td>{{ $bookIssue->return_date }}</td>
                     <td>
                        <a href="{{ route('admin.book-issues.edit', $bookIssue) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.book-issues.destroy', $bookIssue  ) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
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
