<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Model AS Models;
use App\Http\Model\UserModel;


/**
 * 
 */
class UserController extends Controller
{
	/**
	 * 获取用户
	 * @param int $id 用户uid
     * @param Request $request 请求
	 * */
	public function getUser(int $uid = 0 , Request $request){
        $uid = $request->only(['uid']);
	    $userList = UserModel::where('uid',$uid)->first();


	    return [$uid,$userList,'ok'];
	}

	/**
	 * 添加用户
	 * @param Request $request 请求
	 * @return json
	 * */
	public function addUser(Request $request){
//        $validatedData = $this->validate($request,[
//            'username'  => 'required|size:11|string',
//            'nickname'  => 'required|min:2|string',
//            'password'  => 'required|min:6|string',
//        ]);

        $request->validate([
            'username'  => 'required|size:11|string',
            'nickname'  => 'required|min:2|string',
            'password'  => 'required|min:6|string',
        ]);

        return response()->json(['msg'=>123123123]);


        $inputDate = $request->only(['username','nickname','password']);

        $UserModel = UserModel::where(['username'=>$inputDate['username']])->first();

        if( !empty($UserModel) ){
            //返回错误

        }
        $UserModel = new UserModel();
        $UserModel->setAttributes($inputDate);

        if($UserModel->save()){
            throw new \Exception('Add User failed',3);
        }


        return [$request->all(),$UserModel];
    }



}