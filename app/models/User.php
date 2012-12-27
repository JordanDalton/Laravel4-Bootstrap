<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface
{
	/**
	 * The database table used by the model.
	 *
	 * @access   protected
	 * @var      string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @access   protected
	 * @var      array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @access   public
	 * @return   mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @access   public
	 * @return   string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the user full name.
	 *
	 * @access   public
	 * @return   string
	 */
	public function fullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
