<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	protected $primaryKey = 'ID';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['ID','Name','ContactNo','Password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function getAuthPassword() {
		return $this->Password;
	}

	public function getRememberToken()
	{
		return null; // not supported
	}

	public function setRememberToken($value)
	{
		// not supported
	}

	public function getRememberTokenName()
	{
		return null; // not supported
	}

	/**
	 * Overrides the method to ignore the remember token.
	 */
	public function setAttribute($key, $value)
	{
		$isRememberTokenAttribute = $key == $this->getRememberTokenName();
		if (!$isRememberTokenAttribute) {
			parent::setAttribute($key, $value);
		}

	}

}
