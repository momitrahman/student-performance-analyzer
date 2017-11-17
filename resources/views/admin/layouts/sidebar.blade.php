@section('sidebar')
         <!--========= Sidebar part start here =========-->
         <section class="sidebar" id="sidebar">
             <!--logo  -->
             <div class="logo">
                 <a href="index.html"><img src="/img/logo.png" alt="logo"></a>
             </div>
             <!--/logo  -->

             <ul id="accordion" class="accordion">
                 <li>
                     <div class="link"><i class="fa fa-database"></i>Student Information<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('studentInfoIdGenerator') }}>New Student</a></li>
                         <li><a href={{ route('studentSearch') }}>Verify Student</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-code"></i>Student Performance Entry<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href="search-info-for-mark.html">Marks</a></li>
                         <li><a href="search-info-for-extra-curr.html">Extra Curriculum</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-globe"></i>Other's<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href="add-subject-name.html">New Subject Entry</a></li>
                         <li><a href="add-extra-curr-name.html">New Extra Curriculum Entry</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-filter"></i>Filter Student<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href="select-subject-or-class.html">Advance Filter</a></li>
                     </ul>
                 </li>
             </ul>
             <!-- /.accordion  -->
         </section>
         <!--========= Sidebar part End here =========-->
@show
