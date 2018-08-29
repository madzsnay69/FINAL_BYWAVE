<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
	
	protected $dates=['deleted_at'];
	
	protected $fillable=['name','slug','idnum','email','salary','phone',
		'address','datestarted', 'full_time', 'password', 'role_id'];

	protected $hidden = [
        'password', 'remember_token',
    ];	
	
	public $with = ['role','payrolls'];
	
	public function role(){
		return $this->belongsTo('App\Role');
	}
	
	public function payrolls(){
		return $this->hasMany('App\Payroll');
	}
	
	
}
