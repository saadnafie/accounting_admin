<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\AdminPermission;
Use DB;
use Config;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function get_all_shops()
    {
        $shops = Shop::all();
        return view('admin.storeslist');
    }
	
	
	 public function newshops_form_display()
    {
        return view('admin.newstore');
    }


    public function shop_activation(Request $request){
        $shop = Shop::find($request->id)->update(['isActive',$request->status]);
        return redirect()->back();
    }

    public function get_shop_permissions()
    {
        //$permissions = AdminPermission::where('shop_id',$id)->get();
        /*$shop = Shop::find($id);
        DB::disconnect('mysql2');//here connection name, I used mysql for example
        Config::set('database.connections.mysql2.database', $shop->db_name);//new database name, you want to connect to.
        Config::set('database.connections.mysql2.username', $shop->db_username);//new database username, you want to connect to.
        Config::set('database.connections.mysql2.password', $shop->db_password);//new database password, you want to connect to.
        $permissions = AdminPermission::all();
        return $permissions;*/

        return view('admin.storepermission');
    }

    public function shop_permission_activation(Request $request){
        $permission = AdminPermission::find($request->id)->update(['isActive',$request->status]);
        return redirect()->back();
    }

}
