<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function() {
	return view('adminOrStudentSelection');
})->name("home");



Route::prefix('/admin')->group(function () {
	Route::get('/', 'adminAuthController@admin')->name('adminHome');

	Route::prefix('/student')->group(function () {
		Route::match(['get', 'post'], '/', 'StudentInfoController@studentInfoIdGenerator')->name('studentInfoIdGenerator');
		Route::match(['get', 'post'], '/next', 'StudentInfoController@studentInfoOther')->name('studentInfoOther');
		Route::match(['get', 'post'], '/store', 'StudentInfoController@studentInfoStore')->name('studentInfoStore');
		Route::get('/view/{sid?}', 'StudentInfoController@studentInfoSubmitView')->name('studentInfoSubmitView');
		Route::get('/search', 'StudentInfoController@studentSearch')->name('studentSearch');
		Route::match(['get', 'post'], '/name-search', 'StudentInfoController@studentNameList')->name('studentNameList');
	});

	Route::prefix('/mark')->group(function () {
		Route::get('/id/{message?}', 'MarkEntryController@checkStudentId')->name('checkStudentIdMark');
		Route::match(['get', 'post'], '/next', 'MarkEntryController@checkBasicInfo')->name('checkBasicInfoMark');
		Route::match(['get', 'post'], '/select', 'MarkEntryController@selectSubject')->name('selectSubject');
		Route::match(['get', 'post'], '/entry', 'MarkEntryController@subjectMarkEntry')->name('subjectMarkEntry');
		Route::match(['get', 'post'], '/store', 'MarkEntryController@storeSubjectMark')->name('storeSubjectMark');

	});

	Route::prefix('/extra')->group(function () {
		Route::get('/id/{message?}', 'ExtracurricularEntryController@checkStudentId')->name('checkStudentIdExtra');
		Route::match(['get', 'post'], '/next', 'ExtracurricularEntryController@checkBasicInfo')->name('checkBasicInfoExtra');
		Route::match(['get', 'post'], '/select', 'ExtracurricularEntryController@selectExtra')->name('selectExtra');
		Route::match(['get', 'post'], '/entry', 'ExtracurricularEntryController@extraEntry')->name('extraEntry');
		Route::match(['get', 'post'], '/store', 'ExtracurricularEntryController@storeExtraEntry')->name('storeExtraEntry');

	});

	Route::prefix('/other')->group(function () {
		// For Subject
		Route::get('/add-subject/{message?}', 'SubjectController@addSubject')->name('addSubject');
		Route::match(['get', 'post'], '/subject-store', 'SubjectController@subjectStore')->name('subjectStore');
		Route::get('/subject-list', 'SubjectController@subjectShow')->name('subjectShow');
		// For Extracurricular
		Route::get('/add-extracurricular/{message?}', 'ExtracurricularController@addExtracurricular')->name('addExtracurricular');
		Route::match(['get', 'post'], '/extracurricular-store', 'ExtracurricularController@extracurricularStore')->name('extracurricularStore');
		Route::get('/extracurricular-list', 'ExtracurricularController@extracurricularShow')->name('extracurricularShow');
	});

	Route::prefix('/mark-filter')->group(function () {
		Route::get('/start', 'AdvancedFilterMarkController@selectOption')->name('selectOptionMark');
		Route::match(['get', 'post'], '/next', 'AdvancedFilterMarkController@selectFilter')->name('selectFilterMark');
		Route::match(['get', 'post'], '/select', 'AdvancedFilterMarkController@filterFormSelect')->name('filterFormSelectMark');
		Route::match(['get', 'post'], '/entry', 'AdvancedFilterMarkController@entryFilter')->name('entryFilterMark');
		Route::match(['get', 'post'], '/show', 'AdvancedFilterMarkController@showFilterResult')->name('showFilterResultMark');
	});

	Route::prefix('/extra-filter')->group(function () {
		Route::get('/start', 'AdvancedFilterExtraController@selectOption')->name('selectOptionExtra');
		Route::match(['get', 'post'], '/select', 'AdvancedFilterExtraController@filterFormSelect')->name('filterFormSelectExtra');
		Route::match(['get', 'post'], '/entry', 'AdvancedFilterExtraController@entryFilter')->name('entryFilterExtra');
		Route::match(['get', 'post'], '/show', 'AdvancedFilterExtraController@showFilterResult')->name('showFilterResultExtra');
	});

	Route::prefix('/user')->group(function () {
		Route::get('/login', function() {
			return view('admin.adminLogin');
		})->name('adminLogin');
		Route::post('/login', 'adminAuthController@login')->name('adminLoginAttempt');
		Route::get('/logout', 'adminAuthController@logout')->name('adminLogout');
		Route::get('/new', 'adminAuthController@adminCreate')->name('adminCreate');
		Route::post('/store', 'adminAuthController@adminStore')->name('adminStore');
		Route::get('/list', 'adminAuthController@adminList')->name('adminList');

	});
});

Route::get('/test', function(){
	return view('student.studentExtracurricularList');
});

Route::prefix('/student')->group(function () {
	Route::get('/', 'StudentController@search')->name('search');
	Route::get('/dash', 'StudentController@dashboard')->name('dash');
	Route::get('/subject-select', 'StudentController@subjectSelect')->name('subjectSelect');
	Route::match(['get', 'post'], '/subject-mark', 'StudentController@subjectMark')->name('subjectMark');
	Route::get('/class-select', 'StudentController@classSelect')->name('classSelect');
	Route::match(['get', 'post'], '/class-mark', 'StudentController@classMark')->name('classMark');
	Route::get('/extra-list', 'StudentController@extraList')->name('extraList');
	Route::get('/extra-details/{extraName}', 'StudentController@extraDetails')->name('extraDetails');
	Route::get('/logout', 'StudentController@logout')->name('logout');
	Route::get('/show-id/{sid?}', 'StudentController@showById')->name('showById');
});