<?php 
namespace Modules\User\Repositories;

use Modules\User\Entities\User;

trait UserTrait{
    public static function generateVerificationCode($user_id) {    
	    $varification_code =  base64_encode($user_id);
	    //dd($token);
	    return $varification_code;
	}
	public static function getUserByVerificationCode($varification_code) {    
	    $user = json_decode(base64_decode($varification_code));
	    if(count((array)$user)<=0){
	      return false;
	    }
	    return User::findorfail($user->id);
	    //dd($token);
	}
}