 <!-- Sidebar  -->
 <nav id="sidebar">
     <div class="sidebar_blog_1">
         <div class="sidebar-header">
             <div class="logo_section">
                 <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('assets/logo.jpg') }}"
                         alt="#" /></a>
             </div>
         </div>
         <div class="sidebar_user_info">
             <div class="icon_setting"></div>
             <div class="user_profle_side">
                 <div class="user_img"><img class="img-responsive" src="{{ asset('assets/logo.jpg') }}"
                         alt="#" /></div>
                 <div class="user_info">
                     <h6>{{ Auth::user()?->name }}</h6>
                     <p><span class="online_animation"></span> Online</p>
                 </div>
             </div>
         </div>
     </div>
     <div class="sidebar_blog_2">
         <h4>Nepalgunj Campus Online Library Management System</h4>
         <ul class="list-unstyled components">
             <li class="active">
                 <a href="{{ route('admin.index') }}" aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i>
                     <span>Dashboard</span></a>
             </li>
             <li><a href="{{ route('admin.slider.index') }}"><i class="fa fa-image blue_color"></i>
                     <span>Slider</span></a></li>
             </li>

             @if (Auth::user()->role == 'admin')
                 <li>
                     <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                             class="fa fa-book purple_color"></i> <span>Manage Books</span></a>
                     <ul class="collapse list-unstyled" id="element">
                         <li><a href="{{ route('admin.book-categories.index') }}">> <span>Book Category</span></a></li>
                         <li><a href="{{ route('admin.semester.index') }}">> <span>Semester</span></a></li>
                         <li><a href="{{ route('admin.books.index') }}">> <span>Books</span></a></li>

                     </ul>
                 </li>
             @endif

             <li><a href="{{ route('admin.book-barrow.index') }}"><i class="fa fa-paper-plane orange_color"></i>
                     <span>Book Issue Request</span></a></li>
             </li>


             <li><a href="{{ route('admin.student-register.index') }}"><i class="fa fa-user blue_color"></i>
                     <span>Manage Student</span></a></li>
             </li>


     </div>
 </nav>
