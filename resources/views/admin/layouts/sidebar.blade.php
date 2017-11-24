@section('sidebar')
         <!--========= Sidebar part start here =========-->
         <section class="sidebar" id="sidebar">
             <!--logo  -->
             <div class="logo">
                 <a href={{ route('adminHome') }}><img src="/img/logo.png" alt="logo"></a>
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
                         <li><a href={{ route('checkStudentIdMark') }}>Marks</a></li>
                         <li><a href={{ route('checkStudentIdExtra') }}>Extra Curriculum</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-globe"></i>Subject<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('addSubject') }}>New Subject Entry</a></li>
                         <!-- <li><a href={{ route('addExtracurricular') }}>New Extra Curricular Entry</a></li> -->
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-globe"></i>Extra Curricular Activities<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <!-- <li><a href={{ route('addSubject') }}>New Subject Entry</a></li> -->
                         <li><a href={{ route('addExtracurricular') }}>New Extra Curricular Entry</a></li>
                     </ul>
                 </li>

                 <li>
                     <div class="link"><i class="fa fa-filter"></i>Filter Student<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('selectOption')}}>Advanced Filter</a></li>
                     </ul>
                 </li>

             </ul>
             <!-- /.accordion  -->
         </section>
         <!--========= Sidebar part End here =========-->
@show
