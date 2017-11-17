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

Route::prefix('/admin')->group(function() {
	Route::prefix('/student')->group(function() {
		Route::match(['get', 'post'], '/', 'StudentInfoController@studentInfoIdGenerator')->name('studentInfoIdGenerator');
		Route::match(['get', 'post'], '/next', 'StudentInfoController@studentInfoOther')->name('studentInfoOther');
		Route::match(['get', 'post'], '/store', 'StudentInfoController@studentInfoStore')->name('studentInfoStore');
		Route::get('/view/{sid}', 'StudentInfoController@studentInfoSubmitView')->name('studentInfoSubmitView');
		Route::get('/search', 'StudentInfoController@studentSearch')->name('studentSearch');
	});

	Route::prefix('/mark')->group(function() {
		Route::get('/', 'MarkentryController@checkStudentId')->name('checkStudentIdMark');
		Route::post('/next', 'MarkentryController@checkBasicInfo')->name('checkBasicInfoMark');
		Route::post('/select', 'MarkentryController@selectSubject')->name('selectSubject');
		Route::post('/entry', 'MarkentryController@subjectMarkEntry')->name('subjectMarkEntry');
		Route::post('/store', 'MarkentryController@storeSubjectMark')->name('storeSubjectMark');

	});

	Route::prefix('/extra')->group(function() {
		Route::get('/', 'ExtracurricularentryController@checkStudentId')->name('checkStudentIdExtra');
		Route::post('/next', 'ExtracurricularentryController@checkBasicInfo')->name('checkBasicInfoExtra');
		Route::post('/select', 'ExtracurricularentryController@selectExtra')->name('selectExtra');
		Route::post('/entry', 'ExtracurricularentryController@extraEntry')->name('extraEntry');
		Route::post('/store', 'ExtracurricularentryController@storeExtraEntry')->name('storeExtraEntry');

	});

	Route::prefix('/other')->group(function() {
		Route::get('/addsubject', 'SubjectController@addSubject')->name('addSubject');
		Route::post('/subjectstore', 'SubjectController@subjectStore')->name('subjectStore');
		Route::get('/addextracurricular', 'ExtracurricularController@addExtracurricular')->name('addExtracurricular');
		Route::post('/extracurricularstore', 'ExtracurricularController@extracurricularStore')->name('extracurricularStore');
	});

	Route::prefix('/filter')->group(function() {
		Route::get('/', 'AdvancedfilterController@selectfilter')->name('selectfilter');
		Route::post('/Select', 'AdvancedfilterController@filterFormSelect')->name('filterFormSelect');
		Route::post('/entry', 'AdvancedfilterController@entryFilter')->name('entryFilter');
		Route::post('/show', 'AdvancedfilterController@showFilterResult')->name('showFilterResult');
	});
});

Route::get('/test', function(){
		return view('admin.studentSearch');
});
