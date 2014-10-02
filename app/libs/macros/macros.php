<?php

Form::macro('radio_scale', function ($data = array(), $max_number = 0, $order = 'ASC', $options = array()) {
	$output = '';
	$header = '';
	$body   = '';
	$name   = array_get($data, 'name', 'default');
	$header .= '<div class="table-responsive hidden-xs hidden-sm"><table class="table table-hover table-condensed"><thead class="text-center"><tr><td></td>';
	for($i = 1; $i <= $max_number; $i++) {
		$header .= '<td>' . $i . '</td>';
	}
	$header .= '</tr></thead><tbody class="text-center"><tr><td class="text-left">' . $name . '</td>';
	switch(Str::upper($order)) {
		case 'ASC':
			for($i = 1; $i <= $max_number; $i++) {
				$body .= '<td>' . Form::radio('name', $i, false, $options) . '</td>';
			}
			break;
		case 'DESC':
			for($i = $max_number; $i >= 1; $i--) {
				$body .= '<td>' . Form::radio('name', $i, false, array('required' => 'required')) . '</td>';
			}
			break;
	}
	$body .= '</tr>
				</tbody>
				</table>';
	echo $header . $body;
});

HTML::macro('survey', function ($survey, $questions) {
	$count  = 1;
	$output = '<fieldset><legend><h2>' . $survey->title . '</h2></legend>';
	$output .= '<h3>' . $survey->slogan . '</h3><p> ' . $survey->description . ' </p>';
	$output .= Form::open();
	$output .= '<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">';
	foreach($questions as $question) {
		$answers = Question::find($question->id)->answers()->select(array(
			'answers.id',
			'text'
		))->get();
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
	$output .= HTML::link('/logout', 'Salir', array('class' => 'btn btn-default btn-lg text-uppercase'));
	$output .= Form::submit('Contestar!', array(
		'id'    => 'submit_survey',
		'class' => 'btn btn-hot text-uppercase btn-lg pull-right'
	));
	$output .= '</div>';
	$output .= '</div><!-- /.col-lg-12 -->';
	$output .= Form::close();
	$output .= '</fieldset>';

	return $output;
});

HTML::macro('create_alert', function ($data = array(), $options = array()) {
	if(!count($data) || $data === '' || $data == 0) {
		return;
	}
	if(!count($options) || $options === '' || $options == 0) {
		$options = null;
	}
	$title    = array_get($data, 'title', null);
	$subtitle = array_get($data, 'subtitle', null);
	$text     = array_get($data, 'text', null);
	$type     = array_get($data, 'type', null);
	switch($type) {
		case 'danger':
			$type = 'alert-danger';
			break;
		case 'info':
			$type = 'alert-info';
			break;
		case 'success':
			$type = 'alert-success';
			break;
		case 'warning':
			$type = 'alert-warning';
			break;
		default:
			break;
	}
	$output = '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
				<div role="alert" class="alert ' . $type . ' fade in">
                    <button data-dismiss="alert" class="close" type="button"><i class="fa fa-times"></i></button>';
	$output .= isset($title) ? '<h4>' . $title . '</h4>' : '';
	$output .= isset($subtitle) ? '<h5>' . $subtitle . '</h5>' : '';
	$output .= isset($text) ? '<p>' . $text . '</p>' : '';
	if(isset($options)) {
		$output .= '<p>';
		foreach($options as $option) {
			$output .= $option;
		}
		$output .= '</p>';
	}
	$output .= '<p class="clearfix">';
	$output .= '</div>
			</div>';
	echo $output;
});

HTML::macro('alert', function ($type, $messages, $head = null) {
	$message = '';
	$count   = 1;
	foreach($messages as $value) {
		$message .= $count++ . '- ' . $value . '<br>';
	}
	//		switch($type) {
	//			case 'danger': //red
	//				$head = $head ? $head : 'Error:';
	//				break;
	//			case 'warning': //yellow
	//				$head = $head ? $head : 'Warning:';
	//				break;
	//			case 'info': //blue
	//				$head = $head ? $head : 'Info:';
	//				break;
	//			case 'success': //green
	//				$head = $head ? $head : 'Success:';
	//				break;
	//		}
	$script = '
		<script type="text/javascript">
			setTimeout(function () {
				$(".errors").removeClass("in");
				$(".errors").slideToggle("slow");
			}, 10000);
		</script>';

	return '<div class="errors alert alert-' . $type . '"><strong>' . $head . '</strong>' . Str::upper($message) . '</div>' . $script;
});

Form::macro('selectRange2', function ($name, $begin, $end, $selected = null, $options = array()) {
	$list  = '<option></option>';
	$range = array_combine($range = range($begin, $end), $range);

	foreach($range as $key => $value) {
		$list .= "<option value='{$key}'>{$value}</option>";
	}

	//		Tools::printr($options);
	//		die();

	$options = attributes($options);
	unset($range);

	return '<select name=' . e($name) . $options . '>' . $list . '</select>';
});

function attributes($attributes)
{
	$html = array();

	foreach((array)$attributes as $key => $value) {
		$element = attributeElement($key, $value);

		if(!is_null($element))
			$html[] = $element;
	}

	return count($html) > 0 ? ' ' . implode(' ', $html) : '';
}

function attributeElement($key, $value)
{
	if(is_numeric($key))
		$key = $value;

	if(!is_null($value))
		return $key . '="' . e($value) . '"';
}