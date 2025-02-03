@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
            <a>DASHBOARD</a>
          </div>
       </div>
    </div>
    <div class="row column1">
       <div class="col-md-6 col-lg-3">
          <div class="full counter_section margin_bottom_30">
             <div class="couter_icon">
                <div>
                   <i class="fa fa-book green_color"></i>
                </div>
             </div>
             <div class="counter_no">
                <div>
                   <p class="total_no">{{ $book }}</p>
                   <p class="head_couter">Total Books</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6 col-lg-3">
          <div class="full counter_section margin_bottom_30">
             <div class="couter_icon">
                <div>
                   <i class="fa fa-book yellow_color"></i>
                </div>
             </div>
             <div class="counter_no">
                <div>
                   <p class="total_no">0</p>
                   <p class="head_couter">Available Books</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6 col-lg-3">
          <div class="full counter_section margin_bottom_30">
             <div class="couter_icon">
                <div>
                   <i class="fa fa-book red_color"></i>
                </div>
             </div>
             <div class="counter_no">
                <div>
                   <p class="total_no">0</p>
                   <p class="head_couter">Issued Books</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
           <div class="couter_icon">
              <div>
                 <i class="fa fa-book green_color"></i>
              </div>
           </div>
           <div class="counter_no">
              <div>
                 <p class="total_no">0</p>
                 <p class="head_couter">Returned Books  </p>
              </div>
           </div>
        </div>
     </div>
     <div class="col-md-6 col-lg-3">
        <div class="full counter_section margin_bottom_30">
           <div class="couter_icon">
              <div>
                 <i class="fa fa-user green_color"></i>
              </div>
           </div>
           <div class="counter_no">
              <div>
                 <p class="total_no">{{ $student }}</p>
                 <p class="head_couter">Total Students</p>
              </div>
           </div>
        </div>
     </div>

                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
