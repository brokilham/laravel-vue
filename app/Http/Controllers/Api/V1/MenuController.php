<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\menu_main;
use App\menu_sub_1;
use App\menu_sub_2;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $menu_main = menu_main::where('status', 'active')->orderBy('Priority', 'asc')->get();

        $lists = [];	   
        foreach ($menu_main as $item) {
            
            $result_sub_menu1 = $this->GetMenuSub1($item->id);

            if(!empty($result_sub_menu1)){
                $lists[] = [
                    "name"=> $item->nama,
                    "icon"=> $item->icon,
                    "url"=> $item->route,
                    "title" => $item->isTitle,
                    "children"=>$result_sub_menu1,
                ];
            }else{
                $lists[] = [
                    "name"=> $item->nama,
                    "icon"=> $item->icon,
                    "url"=> $item->route,
                    "title" => $item->isTitle
                ];
            }
            
        }
        return $lists;
    }

    public function GetMenuSub1($id_menu_main){

        $menu_sub_1 = menu_sub_1::where('status', 'active')->where('id_menu_main', $id_menu_main)->get(); 
       
        $lists = [];	
        foreach ($menu_sub_1 as $item) {
            $lists[] = [
                "name"=> $item->nama,
                "icon"=> $item->icon,
                "url"=> $item->route,
            ];
        }
        return $lists;
    }
    
    // level ke 3 belum diterapkan
    public function GetMenuSub2(){
        $menu_sub_2 = menu_sub_2::where('status', 'active')->get(); 
        return $menu_sub_2;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
