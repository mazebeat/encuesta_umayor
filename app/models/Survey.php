<?php

/**
 * Survey
 *
 * @property integer $id
 * @property string $title
 * @property string $slogan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Question[] $questions
 * @method static \Illuminate\Database\Query\Builder|\Survey whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Survey whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Survey whereSlogan($value)
 * @method static \Illuminate\Database\Query\Builder|\Survey whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Survey whereUpdatedAt($value)
 */
class Survey extends Eloquent
{
	protected $table = 'surveys';
	protected $primaryKey = 'id';
	//	protected $fillable = array();
		protected $hidden = array('id');
	//	public static $rules = array(// 'title' => 'required' );
	//
	public function questions()
	{
		return $this->hasMany('Question');
	}
}