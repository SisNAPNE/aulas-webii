<?php

namespace App\Facades;
use App\Models\Permission;
 
class UserPermissions {
   
    public static function loadPermissions($user_paper) {

       $sess = Array();   
       $perm = Permission::with('role')->where('paper_id', $user_paper)->get();
       
       foreach($perm as $item) {
           $sess[$item->role->name] = (boolean) $item->permissao;
       }
       
       session(['user_permissions' => $sess]);
    }
   
    public static function isAuthorized($rule) {
        
        $permissions = session('user_permissions');
        return $permissions[$rule];
    }
   
    public static function test() {
       return "<h1>UserPermissionsFacade - Running!!</h1>";
    }
}
