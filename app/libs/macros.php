<?php

HTML::macro('survey', function ($questions, $title = "SURVEY DEMO") {
	$count  = 1;
	$output = '<fieldset><legend>' . $title . '</legend>';
	$output .= Form::open();
	$output .= '<div class="col-xs-9 col-sm-9 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">';
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
	$output .= '<div class="col-md-8 col-lg-offset-2">
			<div class="col-md-6">' . HTML::link('/', 'VOLVER', array('class' => 'btn btn-default')) . '</div>
			<div class="col-md-6">' . Form::submit('CONTESTAR!', array('id' => 'submit_survey', 'class' => 'btn btn-warning  pull-right')) .'</div>
			</div>';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});

