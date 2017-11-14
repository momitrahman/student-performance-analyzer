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

Route::prefix('/studentinfo')->group(function() {
	Route::get('/', 'StudentInfoController@studentInfoIdGenearter')->name('studentInfoIdGenearter');
	Route::get('/next', 'StudentInfoController@StudentInfoOther')->name('studentInfoOther');
	Route::get('/store', 'StudentInfoController@studentInfoStore')->name('studentInfoStore');
	Route::get('/search', 'StudentInfoController@studentSearch')->name('studentSearch');
});

Route::prefix('/performance/mark')->group(function() {
	Route::get('/checkStudentId', 'MarkentryController@checkStudentId')->name('checkStudentIdMark');
	Route::post('/checkBasicInfo', 'MarkentryController@checkBasicInfo')->name('checkBasicInfoMark');
	Route::post('/selectSubject', 'MarkentryController@selectSubject')->name('selectSubject');
	Route::post('/subjectMarkEntry', 'MarkentryController@subjectMarkEntry')->name('subjectMarkEntry');
	Route::post('/storeSubjectMark', 'MarkentryController@storeSubjectMark')->name('storeSubjectMark');

});

Route::prefix('/performance/extra')->group(function() {
	Route::get('/checkStudentId', 'ExtracurricularentryController@checkStudentId')->name('checkStudentIdExtra');
	Route::post('/checkBasicInfo', 'ExtracurricularentryController@checkBasicInfo')->name('checkBasicInfoExtra');
	Route::post('/selectExtra', 'ExtracurricularentryController@selectExtra')->name('selectExtra');
	Route::post('/extraEntry', 'ExtracurricularentryController@extraEntry')->name('extraEntry');
	Route::post('/storeExtraEntry', 'ExtracurricularentryController@storeExtraEntry')->name('storeExtraEntry');

});

Route::prefix('/other')->group(function() {
	Route::get('/addsubject', 'SubjectController@addSubject')->name('addSubject');
	Route::post('/subjectstore', 'SubjectController@subjectStore')->name('subjectStore');
	Route::get('/addextracurricular', 'ExtracurricularController@addExtracurricular')->name('addExtracurricular');
	Route::post('/extracurricularstore', 'ExtracurricularController@extracurricularStore')->name('extracurricularStore');
});

Route::prefix('/filter')->group(function() {
	Route::get('/selectfilter', 'AdvancedfilterController@selectfilter')->name('selectfilter');
	Route::post('/filterFormSelect', 'AdvancedfilterController@filterFormSelect')->name('filterFormSelect');
	Route::post('/entryFilter', 'AdvancedfilterController@entryFilter')->name('entryFilter');
	Route::post('/storeFilterEntry', 'AdvancedfilterController@storeFilterEntry')->name('storeFilterEntry');
});
