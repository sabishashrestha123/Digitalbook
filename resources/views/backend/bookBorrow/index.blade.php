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
               <a href="{{ route('admin.book-barrow.create') }}" class="btn btn-primary">Add Book Issue</a>
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

                     <th>Remaining Days</th>
                     <th>Late Fee</th>
                     <th>Action</th>
                  </tr>
               </thead>
               @foreach ($bookBorrows as $bookBorrow)
               <tbody>
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $bookBorrow->book->title }}</td>
                     <td>{{ $bookBorrow->user->name }}</td>


                     <td>
                        @php
                            $return_date = \Carbon\Carbon::parse($bookBorrow->return_date);
                            $today = \Carbon\Carbon::now();
                            if ($today->gt($return_date)) {
                                echo 'Overdue';
                            } else {
                                $remaining_days = floor($today->diffInDays($return_date));
                                echo $remaining_days . ' ' . Str::plural('day', $remaining_days) . ' remaining';
                            }
                        @endphp
                     </td>

                     <td>
                        @php
                            $return_date = \Carbon\Carbon::parse($bookBorrow->return_date);
                            $today = \Carbon\Carbon::now();
                            if ($today->gt($return_date)) {
                                $overdue_days = floor($today->diffInDays($return_date));
                                $late_fee = $overdue_days * 5;
                                echo 'Overdue (' . $overdue_days . ' days)<br>';
                                echo 'Late Fee: Rs. ' . $late_fee;
                            } else {
                                $remaining_days = floor($today->diffInDays($return_date));
                                echo $remaining_days . ' ' . Str::plural('day', $remaining_days) . ' remaining';
                            }
                        @endphp
                     </td>



                     <td>
                        <a href="{{ route('admin.book-barrow.edit', $bookBorrow) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.book-barrow.destroy', $bookBorrow  ) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
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
