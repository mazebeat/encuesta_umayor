<?php

HTML::macro('survey', function ($survey, $questions) {
	$count  = 1;
	$output = '<fieldset><legend><h2>' . $survey->title . '</h2></legend>';
	$output .= '<h4>' . $survey->slogan . '</h4><p> ' . $survey->description .  ' </p>';
	$output .= Form::open();
	$output .= '<div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-2 col-lg-9 col-lg-offset-2">';
	foreach($questions as $question) {
		$answers = Question::find($question->id)->answers()->select(array('answers.id','text'))->get();
		if(count($answers)) {
			$output .= '<h4>' . $count++ . ' - ' . trim($question->text) . '</h4>';
			foreach($answers as $answer) {
				$output .= '<div class="radio">
				<label>
				<input type="radio" name="' . trim($question->id) . '" value="' . trim($answer->id) . '">
				' . $answer->text . '
				</label>
				</div>';
			}
		}
	}
	$output .= '</div><!-- /.col-lg-12 -->';
	$output .= '<div class="clearfix">' . HTML::link('/', 'Volver', array('class' => 'btn btn-default btn-lg text-uppercase')) . ' ' .
			Form::submit('Contestar!', array('id' => 'submit_survey', 'class' => 'btn btn-hot text-uppercase btn-lg pull-right')) .'</div>';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});

