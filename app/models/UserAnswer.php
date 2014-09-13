<?php

/**
 * UserAnswer
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $question_answer_id
 * @property boolean $state
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \QuestionAnswer $questionAnswer
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereQuestionAnswerId($value)
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\UserAnswer whereUpdatedAt($value)
 */
class UserAnswer extends Eloquent
{
	protected $table = 'user_answer';
	protected $primaryKey = 'id';
	//	protected $fillable = array();
    protected $hidden = array('id', 'question_id', 'answer_id');
    //	public static $rules = array(// 'title' => 'required');

    public function user()
    {
      return $this->belongsTo('User');
    }

    public function questionAnswer()
    {
      return $this->belongsTo('QuestionAnswer');
    }
}