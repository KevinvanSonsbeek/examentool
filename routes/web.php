<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Get all exams with criteria trimmed out
$router->get('/exams', [
    'uses' => 'DeterminedExamController@getAllTrimmed'
]);
//Get all exams with all data
$router->get('/exams/full', [
    'uses' => 'DeterminedExamController@getAll'
]);

$router->get('/exam/{exam_id}', [
    'uses' => 'DeterminedExamController@getById'
]);

$router->get('/exam/{exam_id}/start', [
    'uses' => 'AssessmentController@startAssessment'
]);

$router->get('/assessments', [
    'uses' => 'AssessmentController@getAllFinalAssessments'
]);

$router->get('/assessment/{final_assessment_id}/join', [
   'uses' => 'AssessmentController@hookInOnAssessment'
]);
