<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu_main;
use App\menu_sub_1;
use App\menu_sub_2;
class MenuController extends Controller
{

    public function index(){
        
    }    
   /* public function index()
    {
        $menu_main = menu_main::where('status', 'active')->get(); 

        $lists = [];	   
        foreach ($menu_main as $item) {
            
            $result_sub_menu1 = $this->GetMenuSub1($item->id);

            $lists[] = [
                "nama"=> $item->nama,
                "icon"=> $item->icon,
                "route"=> $item->route,
                "menu_sub_1"=>$result_sub_menu1
            ];
        }
        return $lists;
    }


    public function GetMenuSub1($id_menu_main){
        $menu_sub_1 = menu_sub_1::where('status', 'active')->where('id_menu_main', $id_menu_main)->get(); 
        return $menu_sub_1;
    }

    // level ke 3 belum diterapkan
    public function GetMenuSub2(){
        $menu_sub_2 = menu_sub_2::where('status', 'active')->get(); 
        return $menu_sub_2;
    }*/
}
