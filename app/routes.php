<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
	return View::make('hello');
});

Route::get('survey', function () {
	$questions = Question::all();
	return View::make('showSurvey')->with('questions', $questions);
});

HTML::macro('survey', function ($questions, $title = "SURVEY DEMO") {
	$count  = 1;
	$output = '';
	$output .= '<fieldset class="col-md-offset-1"><legend>' . $title . '</legend>';
	$output .= Form::open();
	foreach ($questions as $question) {
		$answers = Question::find($question->id)->answers()->select('text')->get();
		$output .= '<h4>' . $count++ . '- ' . $question->text . '</h4>';
		foreach ($answers as $answer) {
			$output .= '<div class="input-group col-xs-8 col-sm-8 col-md-8"><span class="input-group-addon">';
			$output .= '<input type="radio" name="' . $question->id . '" value="' . $answer->id . '></span>';
			$output .= '<label type="text" class="form-control">' . $answer->text . '</label></div>';
		}
	}
	$output .= '<button class="btn btn-primary btn-lg pull-right" id="botonRegistrar">CONTESTAR</button>';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});