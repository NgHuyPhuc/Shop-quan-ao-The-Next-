<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\InsertUserRequest;
use App\Models\UserAdmin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $data['users'] = UserAdmin::paginate(3);
        // dd($data['users']);
        return view('/backend/users/listuser',$data);
    }
    public function create(){
        return view('/backend/users/adduser');
    }
    public function insert(InsertUserRequest $insertUserRequest){
        if($insertUserRequest->hasFile('image')){
            $file = $insertUserRequest->image;
            $fileExtension = $file->getClientOriginalExtension();
            $file->move("uploads",$insertUserRequest->email.".". $fileExtension);
        }
        $users = new UserAdmin();
        $users->Username = $insertUserRequest->email;
        $users->Password = bcrypt($insertUserRequest->password);
        $users->Accrole = $insertUserRequest->level;
        $users->image = $insertUserRequest->email. "." . $fileExtension;
        $users->save();
        return redirect('/admin/user');
    }
    public function edit(Request $request){
        return view('/backend/users/edituser');
    }
    public function update(Request $request){
        return "asdsa";
    }
    public function delete(Request $request){
        return "asdasd";
    }
}
