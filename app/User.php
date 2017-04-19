<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Crypt;
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
public static function updateById($request, $id){
        $name    = $request['name'];
        $email = $request['email'];
        $role = $request['role'];
        $phone = $request['phone'];
        $password = Crypt::encrypt($request['password']);
        $mobile = $request['mobile'];
        $sex  = $request['sex'];
        $CMND = $request['CMND'];
        $job = $request['job'];
        $office = $request['office'];
        $address = $request['address'];
        $point = $request['point'];
        $money = $request['money'];
        $buyMoney = $request['buyMoney'];
        DB::table('users')->where('id', '=', $id)->update(array('name'=>$name, 'email'=>$email, 'role'=>$role, 'phone'=>$phone, 'password'=>$password, 'mobile'=>$mobile, 'sex'=>$sex, 'CMND'=>$CMND, 'job'=>$job, 'office'=>$office, 'address'=>$address, 'point'=>$point, 'money'=>$money, 'buyMoney'=>$buyMoney));
        return true;
}
public static function destroyById($id){
        DB::table('users')->where('id', '=', $id)->delete();
}
// --- hàm tìm kiếm
public static function findQuery($request){
        $phone = $request['phone'];
        $mobile = $request['mobile'];
        $name = $request['name'];
        if($phone !=null and $mobile ==null and $name==null){
             $data = DB::table('users')->where('phone', '=', $phone)->get();
            return $data;
        }if($mobile !=null and $phone==null and $name==null){
             $data = DB::table('users')->where('mobile', '=', $mobile)->get();
             return $data;
        }if($name !=null and $phone==null and $mobile ==null){
            $data = DB::table('users')->where('name', 'like', "%".$name."%")->get();
             return $data;
        }if($phone !=null and $mobile !=null and $name ==null){
            $data = DB::table('users')->where('phone', '=', $phone)->orWhere('mobile', '=', $mobile)->get();
            return $data;
        }if($phone !=null and $name !=null and $mobile ==null){
            $data = DB::table('users')->where('phone', '=', $phone)->orWhere('name', 'like', "%".$name."%")->get();
            return $data;
        }if($name !=null and $mobile !=null and $phone==null){
             $data = DB::table('users')->where('name', 'like', "%".$name."%")->orWhere('mobile', '=', $mobile);
             return $data;
        }if($phone !=null and $mobile !=null and $name !=null){
            $data = DB::table('users')->where('phone', '=', $phone)->where('mobile', '=', $mobile)->where('name', 'like', "%".$name."%")->get();
            return $data;
        }else{
            $data = DB::table('users')->get();
            return $data;
        }
    }

public static function getAdmin(){
    $data = DB::table('users')->where('role', '=', 'admin')->get();
    return $data;
}

}
