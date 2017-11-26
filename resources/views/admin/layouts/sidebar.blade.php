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
                         <li><a href={{ route('studentInfoIdGenerator') }}>New</a></li>
                         <li><a href={{ route('studentSearch') }}>Verify</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-code"></i>Student Performance Entry<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('checkStudentIdMark') }}>Marks</a></li>
                         <li><a href={{ route('checkStudentIdExtra') }}>Extra Curricular</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-globe"></i>Subject<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('addSubject') }}>New </a></li>
                         <li><a href={{ route('subjectShow') }}>List</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-globe"></i>Extra Curricular Activities<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('addExtracurricular') }}>New</a></li>
                         <li><a href={{ route('extracurricularShow') }}>List</a></li>
                     </ul>
                 </li>

                 <li>
                     <div class="link"><i class="fa fa-filter"></i>Student Filter<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('selectOption')}}>Advanced Filter</a></li>
                     </ul>
                 </li>

             </ul>
             <!-- /.accordion  -->
         </section>
         <!--========= Sidebar part End here =========-->
@show
