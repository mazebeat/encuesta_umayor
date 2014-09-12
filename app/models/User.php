<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	use UserTrait, RemindableTrait;

	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $guarded = array();
	protected $fillable = array();
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);

	public function User_answer()
	{
		return $this->hasMany('User_answer', 'user_id');
	}

}
