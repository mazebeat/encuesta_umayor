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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('survey', function () {
	$questions = Question::all();
	return View::make('showSurvey')->with('questions', $questions);
});

HTML::macro('survey', function ($questions, $title = "SURVEY DEMO") {
	$count = 1;
	$output = '';
	$output .= '<fieldset class=""><legend>' . $title . '</legend>';
	$output .= Form::open();
	foreach ($questions as $question) {
		$answers = Question::find($question->id)->answers()->select('text')->get();
		$output .= '<h4>' . $count++ . '- ' . $question->text . '</h4>';
		foreach ($answers as $answer) {
			$output .= '<div class="col-xs-12 col-sm-12 col-lg-12">';
			$output .= '<div class="input-group">';
			$output .= '<span class="input-group-addon beautiful">';
			$output .= '<input type="radio" name=" ' . $question->id . ' " value=" ' . $answer->id . ' ">';
			$output .= '</span>';
			$output .= '<input type="text" class="form-control" placeholder=" '  . $answer->text . ' " readonly>';
			// $output .= '<label type="text" class="">' . $answer->text . '</label>';
			$output .= '</div><!-- /input-group -->';
			$output .= '</div><!-- /.col-lg-6 -->';

			// <div class="col-lg-6">
			// 	<div class="input-group">
			// 		<span class="input-group-addon">
			// 			<input type="radio">
			// 		</span>
			// 		<input type="text" class="form-control">
			// 	</div><!-- /input-group -->
			// </div><!-- /.col-lg-6 -->
		}
	}
	$output .= '<button class="btn btn-primary">CONTESTAR</button>';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});