@section('sidebar')
         <!--========= Sidebar part start here =========-->
         <section class="sidebar" id="sidebar">
             <!--logo  -->
            <!-- <div class="logo">
                <a href="index.html"><img src="assets/resources/img/logo.png" alt="logo"></a>
            </div> -->
            <a href="{{ route('adminHome') }}">
                <div class="logo">
                    <div class="logo-short-form">
                        S
                        <span>P</span> A
                    </div>
                    <div class="logo-full-form">
                        <p>Student Performance Analyzer</p>
                    </div>
                </div>
            </a>
            <!--/logo  -->

             <ul id="accordion" class="accordion">
                 <li>
                     <div class="link"><i class="fa fa-database"></i>Student Information<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('studentInfoIdGenerator') }}>New</a></li>
                         <li><a href={{ route('studentSearch') }}>Verify</a></li>
                         <li><a href={{ route("studentNameList") }}>Search</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-list-alt"></i>Student Performance Entry<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('checkStudentIdMark') }}>Marks</a></li>
                         <li><a href={{ route('checkStudentIdExtra') }}>Extra Curricular</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-book"></i>Subject<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('addSubject') }}>New </a></li>
                         <li><a href={{ route('subjectShow') }}>List</a></li>
                     </ul>
                 </li>
                 <li>
                     <div class="link"><i class="fa fa-th-large"></i>Extra Curricular Activities<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('addExtracurricular') }}>New</a></li>
                         <li><a href={{ route('extracurricularShow') }}>List</a></li>
                     </ul>
                 </li>

                 <li>
                     <div class="link"><i class="fa fa-filter"></i>Advanced Student Filter<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('selectOptionMark')}}>Marks</a></li>
                         <li><a href={{ route('selectOptionExtra')}}>Extra Curricular</a></li>
                     </ul>
                 </li>
                 <li>
                     @if(session('admin_type') == 0)
                     <div class="link"><i class="fa fa-filter"></i>Admin<i class="fa fa-chevron-down"></i></div>
                     <ul class="submenu">
                         <li><a href={{ route('adminCreate')}}>Admin Create</a></li>
                         <li><a href={{ route('adminList')}}>Admin List</a></li>
                     </ul>
                     @endif
                 </li>

             </ul>
             <!-- /.accordion  -->
         </section>
         <!--========= Sidebar part End here =========-->
@show
