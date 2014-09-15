<?php

/**
 * Question
 *
 * @property integer $id
 * @property string $text
 * @property boolean $state
 * @property integer $survey_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Survey $survey
 * @property-read \Illuminate\Database\Eloquent\Collection|\Answer[] $answers
 * @method static \Illuminate\Database\Query\Builder|\Question whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereSurveyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Question whereUpdatedAt($value)
 */
class Question extends Eloquent
{
	protected $table = 'questions';
	protected $primaryKey = 'id';
	//	protected $fillable = array('text');
	protected $hidden = array('id','survey_id');
	//	public static $rules = array(// 'title' => 'required');
	public function survey()
	{
		return $this->belongsTo('Survey');
	}

	public function answers()
	{
		return $this->belongsToMany('Answer', 'question_answer', 'question_id', 'answer_id');
	}

	public function responsed($user_id, $question_id)
	{
		$user = new User();
		return $user->find($user_id)
		->questionAnswers()
		->where('question_id', $question_id)
		->where('state',true)
		->first();
		// return Cliente::find(Session::get('ses_user_id'))->clientePreguntas()->where(DB::raw('return_pregunta(id_pregunta_respuesta)'), $idPregunta)->where('estado', 'A')->first();
	}

	public function scopeActive($query) {
		return $query->whereState(true);
	}
}