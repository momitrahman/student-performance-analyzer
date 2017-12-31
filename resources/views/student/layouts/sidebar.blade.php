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
                    <a href="#"><div class="link"><i class="fa fa-book" aria-hidden="true"></i>Subject</div></a> 
                     
                 </li>
                 <li>
                    <a href="#"><div class="link"><i class="fa fa-list-ol" aria-hidden="true"></i>Class</div></a> 
                     
                 </li>
                 <li>
                    <a href="#"><div class="link"><i class="fa fa-line-chart" aria-hidden="true"></i>Status</div></a> 
                     
                 </li>
                 <li>
                    <a href="#"><div class="link"><i class="fa fa-th-large" aria-hidden="true"></i>Extra Curricular</div></a> 
                     
                 </li>
        

                 <!-- <li>
                     <div class="link"><i class="fa fa-filter"></i>Advanced Student Filter</div>
                     <ul class="submenu">
                         <li><a href={{ route('selectOptionMark')}}>Marks</a></li>
                         <li><a href={{ route('selectOptionExtra')}}>Extra Curricular</a></li>
                     </ul>
                 </li> -->

             </ul>
             <!-- /.accordion  -->
         </section>
         <!--========= Sidebar part End here =========-->
@show
