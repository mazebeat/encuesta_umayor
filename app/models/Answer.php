<?php

/**
 * Answer
 *
 * @property integer $id
 * @property string $text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Question[] $questions
 * @method static \Illuminate\Database\Query\Builder|\Answer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Answer whereUpdatedAt($value)
 */
class Answer extends Eloquent
{
	protected $table = 'answers';
	protected $primaryKey = 'id';
	//	protected $fillable = array('text', 'state');
	protected $hidden = array('id');
	//	public static $rules = array(// 'title' => 'required');

	public function questions()
	{
		return $this->belongsToMany('Question', 'question_answer', 'answer_id', 'question_id');
	}
}