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

Route::resource('survey', 'SurveyController');

//Route::get('test', function(){
//	printr();
//});

function printr($a)
{
	echo "<pre>" . htmlspecialchars(print_r($a, true)) . "</pre>";
}

HTML::macro('survey', function ($questions, $title = "SURVEY DEMO") {
	$count  = 1;
	$output = '<fieldset><legend>' . $title . '</legend>';
	//	$output .= Form::open(array('url' => 'question', 'method' => 'POST'));
	$output .= Form::open();
	$output .= '<div class="col-xs-12 col-sm-12 col-lg-12">';
	foreach($questions as $question) {
		$answers = Question::find($question->id)->answers()->select(array('answers.id','text'))->get();
		if(count($answers)) {
			$output .= '<h4>' . $count++ . ' - ' . $question->text . '</h4>';
			foreach($answers as $answer) {
				$output .= '<div class="radio">
				<label>
				<input type="radio" name="' . $question->id . '" value="' . $answer->id . '">
				' . $answer->text . '
				</label>
				</div>';
			}
		}
	}
	$output .= '</div><!-- /.col-lg-12 -->';
	$output .= HTML::link('/logout', 'VOLVER', array('class' => 'btn btn-default'));
	$output .= Form::submit('CONTESTAR!', array('id' => 'submit_survey', 'class' => 'btn btn-warning'));
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});