<?php

namespace App\Http\Controllers\Admin\UserAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\EditUserRequest;
use App\Http\Requests\User\InsertUserRequest;
use App\Models\UserAdmin;
use Illuminate\Http\Request;

class UserAdminController extends Controller
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

        // if($insertUserRequest->hasFile('image')){
        //     $file = $insertUserRequest->image;
        //     $fileExtension = $file->getClientOriginalExtension();
        //     $file->move("uploads",$insertUserRequest->email.".". $fileExtension);
        // }
        // $users = new UserAdmin();
        // $users->Username = $insertUserRequest->Username;
        // $users->Password = bcrypt($insertUserRequest->Password);
        // $users->Accrole = $insertUserRequest->level;
        // $users->Anh = $insertUserRequest->email. "." . $fileExtension;
        // $users->save();
        // return redirect('/admin/useradmin');
        if($insertUserRequest->hasFile('image')){
            $file = $insertUserRequest->image;
            $fileExtension = $file->getClientOriginalExtension();
            $file->move("uploads", $insertUserRequest->Username . "." . $fileExtension);
        }
        $user = new UserAdmin();
        $user->Username = $insertUserRequest->Username;
        $user->Password = bcrypt($insertUserRequest->Password);
        $user->Accrole = $insertUserRequest->level;
        $user->Anh = $insertUserRequest->Username. "." . $fileExtension;
        $user->save();
        return redirect('/admin/useradmin');
    }
    public function edit(Request $request,$id){
        $data['user'] = UserAdmin::find($id);
        return view('/backend/users/edituser',$data);
    }
    public function update(EditUserRequest $editUserRequest ,$id){
        
        $user = UserAdmin::find($id);
        $user->Username = $editUserRequest->Username;
        $user->Password = bcrypt($editUserRequest->Password);
        $user->Accrole = $editUserRequest->level;
        if($editUserRequest->hasFile('image')){
            $file = $editUserRequest->image;
            $fileExtension = $file->getClientOriginalExtension();
            $file->move("uploads", $editUserRequest->Username . "." . $fileExtension);
            $user->Anh = $editUserRequest->Username. "." . $fileExtension;
        }
        $user->save();
        return redirect('/admin/useradmin');
    }
    public function delete(Request $request,$id){
        $user = UserAdmin::find($id);
        $user->delete();
        return redirect('/admin/useradmin');
    }
}
