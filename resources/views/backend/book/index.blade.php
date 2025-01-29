@extends('backend.layouts.master')

@section('content')
<div class="col-md-12 margin_top_30">
   <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
            <h2>Books</h2>
         </div>
         <div class="row">
            <div class="col-md-6">
               <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add Book</a>
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
                     <th>Author</th>
                     <th>Edition</th>
                     <th>ISBN</th>
                     <th>Status</th>
                     <th>Category</th>
                     <th>Action</th>
                  </tr>
               </thead>
               @foreach ($books as $book)
               <tbody>
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $book->title }}</td>
                     <td>{{ $book->author }}</td>
                     <td>{{ $book->edition }}</td>
                     <td>{{ $book->isbn }}</td>
                     <td>{{ $book->status == 1 ? 'Active' : 'Inactive' }}</td>
                     <td>{{ $book->bookCategory->name }}</td>
                     <td>
                        <a href="{{ route('admin.books.edit', $book) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.books.destroy', $book) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
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
