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

Route::prefix('/admin')->group(function () {
	Route::get('/', function () {
		return view('admin.home');
	})->name('adminHome');

	Route::prefix('/student')->group(function () {
		Route::match(['get', 'post'], '/', 'StudentInfoController@studentInfoIdGenerator')->name('studentInfoIdGenerator');
		Route::match(['get', 'post'], '/next', 'StudentInfoController@studentInfoOther')->name('studentInfoOther');
		Route::match(['get', 'post'], '/store', 'StudentInfoController@studentInfoStore')->name('studentInfoStore');
		Route::get('/view/{sid?}', 'StudentInfoController@studentInfoSubmitView')->name('studentInfoSubmitView');
		Route::get('/search', 'StudentInfoController@studentSearch')->name('studentSearch');
		Route::match(['get', 'post'], '/namesearch', 'StudentInfoController@studentNameList')->name('studentNameList');
	});

	Route::prefix('/mark')->group(function () {
		Route::get('/id/{message?}', 'MarkentryController@checkStudentId')->name('checkStudentIdMark');
		Route::match(['get', 'post'], '/next', 'MarkentryController@checkBasicInfo')->name('checkBasicInfoMark');
		Route::match(['get', 'post'], '/select', 'MarkentryController@selectSubject')->name('selectSubject');
		Route::match(['get', 'post'], '/entry', 'MarkentryController@subjectMarkEntry')->name('subjectMarkEntry');
		Route::match(['get', 'post'], '/store', 'MarkentryController@storeSubjectMark')->name('storeSubjectMark');

	});

	Route::prefix('/extra')->group(function () {
		Route::get('/id/{message?}', 'ExtracurricularentryController@checkStudentId')->name('checkStudentIdExtra');
		Route::match(['get', 'post'], '/next', 'ExtracurricularentryController@checkBasicInfo')->name('checkBasicInfoExtra');
		Route::match(['get', 'post'], '/select', 'ExtracurricularentryController@selectExtra')->name('selectExtra');
		Route::match(['get', 'post'], '/entry', 'ExtracurricularentryController@extraEntry')->name('extraEntry');
		Route::match(['get', 'post'], '/store', 'ExtracurricularentryController@storeExtraEntry')->name('storeExtraEntry');

	});

	Route::prefix('/other')->group(function () {
		// For Subject
		Route::get('/addsubject/{message?}', 'SubjectController@addSubject')->name('addSubject');
		Route::match(['get', 'post'], '/subjectstore', 'SubjectController@subjectStore')->name('subjectStore');
		Route::get('/subjectlist', 'SubjectController@subjectShow')->name('subjectShow');
		// For Extraccurricular
		Route::get('/addextracurricular/{message?}', 'ExtracurricularController@addExtracurricular')->name('addExtracurricular');
		Route::match(['get', 'post'], '/extracurricularstore', 'ExtracurricularController@extracurricularStore')->name('extracurricularStore');
		Route::get('/extracurricularlist', 'ExtracurricularController@extracurricularShow')->name('extracurricularShow');
	});

	Route::prefix('/filter')->group(function () {
		Route::get('/start/{message?}', 'AdvancedfilterController@selectOption')->name('selectOption');
		Route::match(['get', 'post'], '/next', 'AdvancedfilterController@selectFilter')->name('selectFilter');
		Route::match(['get', 'post'], '/select', 'AdvancedfilterController@filterFormSelect')->name('filterFormSelect');
		Route::match(['get', 'post'], '/entry', 'AdvancedfilterController@entryFilter')->name('entryFilter');
		Route::match(['get', 'post'], '/show', 'AdvancedfilterController@showFilterResult')->name('showFilterResult');
	});
});

Route::get('/test', function(){
	return view('admin.advancedFilterExtraView');
});