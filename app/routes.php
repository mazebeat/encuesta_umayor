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

Route::get('test', function(){
	$a = new Question();
	// $a = $a->returnId(1,1);
	// $a = QuestionAnswer::find(31)->users;
	$a = $a->responsed(1, 2);
	// $a = new User();
	// $a = $a->find(1)
	// ->questionAnswers()
	// ->where('id', 36);
	// $a = $a->questionAnswers;
	printr($a);
});


function printr($a) {
	echo "<pre>" . htmlspecialchars(print_r($a, true)) . "</pre>";
}

HTML::macro('survey', function ($questions, $title = "SURVEY DEMO") {
	$count  = 1;
	$output = '';
	$output .= '<fieldset class=""><legend>' . $title . '</legend>';
//	$output .= Form::open(array('url' => 'question', 'method' => 'POST'));
	$output .= Form::open();
	foreach ($questions as $question) {
		$answers = Question::find($question->id)->answers()->select('text')->get();
		if (count($answers)) {
			$output .= '<h4>' . $count++ . ' - ' . $question->text . '</h4>';
			foreach ($answers as $answer) {
				$output .= '<div class="col-xs-12 col-sm-12 col-lg-12">';
				$output .= '<div class="input-group">';
				$output .= '<span class="input-group-addon">';
				$output .= '<input type="radio" name="' . $question->id . '" data-question="' . $question->id . '" value="' . $answer->id . '">';
				$output .= '</span>';
				$output .= '<input type="text" class="form-control" value="' . $answer->text . '" readonly>';
				$output .= '</div><!-- /input-group -->';
				$output .= '</div><!-- /.col-lg-6 -->';
			}
		}
	}
	$output .= HTML::link('/logout', 'VOLVER', array('class' => 'btn btn-default btn-lg'));
	$output .= Form::submit('CONTESTAR!', array('id' => 'submit_survey' , 'class' => 'btn btn-primary btn-lg'));
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});