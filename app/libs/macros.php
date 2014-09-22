<?php

HTML::macro('survey', function ($survey, $questions) {
	$count  = 1;
	$output = '<fieldset><legend><h2>' . $survey->title . '</h2></legend>';
	$output .= '<h3>' . $survey->slogan . '</h3><p> ' . $survey->description .  ' </p>';
	$output .= Form::open();
	$output .= '<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">';
	foreach($questions as $question) {
		$answers = Question::find($question->id)->answers()->select(array('answers.id','text'))->get();
		if(count($answers)) {
			$output .= '<article class="question">';
			$output .= '<h4>' . $count++ . ' - ' . trim($question->text) . '</h4>';
			foreach($answers as $answer) {
				$output .= '<div class="radio">';
				$output .= '<label>';
				$output .= '<input type="radio" name="' . trim($question->id) . '" value="' . trim($answer->id) . '">
				' . $answer->text . '';
				$output .= '</label>';
				$output .= '</div>';
			}
			$output .= '</article>';
		}
	}
	$output .= '<div class="clearfix">';
	$output .=  HTML::link('/logout', 'Salir', array('class' => 'btn btn-default btn-lg text-uppercase'));
	$output .=  Form::submit('Contestar!', array('id' => 'submit_survey', 'class' => 'btn btn-hot text-uppercase btn-lg pull-right'));
	$output .= '</div>';
	$output .= '</div><!-- /.col-lg-12 -->';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});

