<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
public static function insertGetId($request){

        $name    = $request['name'];
        $email = $request['email'];
        $role = $request['role'];
        $phone = $request['phone'];
        $password = $request['password'];
        $mobile = $request['mobile'];
        $sex  = $request['sex'];
        $CMND = $request['CMND'];
        $job = $request['job'];
        $office = $request['office'];
        $address = $request['address'];
        $point = $request['point'];
        $money = $request['money'];
        $buyMoney = $request['buyMoney'];
        DB::table('users')->insertGetId(array('name'=>$name, 'email'=>$email, 'role'=>$role, 'phone'=>$phone, 'password'=>$password, 'mobile'=>$mobile, 'sex'=>$sex, 'CMND'=>$CMND, 'job'=>$job, 'office'=>$office, 'address'=>$address, 'point'=>$point, 'money'=>$money, 'buyMoney'=>$buyMoney));
}
public static function destroyById($id){
        DB::table('users')->where('id', '=', $id)->delete();
}
}
