<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use DB;

class MenuController extends Controller
{

	public function index() {
		/*$menu = new menu();
		$menu->home = 'home2';
		$menu->contact = 'contact2';
		$menu->introduction = 'introduction2';
		$menu->save();*/

		$menuList = menu::all();
		return view('user.menu')->with('menu',$menuList);

		// $pList = menu::find(1);
		// $arr = array(
  //           'home' => 'tieu de 33333',
  //           'contact' => 'tieu de 33333',
  //           'introduction' => 'tieu de 33333'
  //       );
  //       menu::where('id', 2)->update($arr);

		// $pList = menu::all();

	 // return view('user.menu')->with('menu',$pList);
	}

	public function selectAll(){
		$data = DB::table('menu')->get();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	public function update(){
		DB::table('menu')->where('id',2)
		->update(array('contact'=>'lien he'));
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$menuList = menu::all();
		return view('user.menu')->with('menu',$menuList);
	}

	public function insert(){
 		DB::table('menu')->insert([
			'home'=> 'homealone',
			'contact'=>'contact3',
			'introduction'=>'introduction'
		]);
 		return redirect('post/list');
	}

// 	public function delete(){
// 		$data = DB::table('menu')->where('contact','contact2')->delete();
			
// 		$menuList = menu::all();
// 		return view('user.menu')->with('menu',$menuList);
// 	}

	public function delete(){
		DB::table('menu')->where('id','>',3)->delete();
		$menuList = menu::all();
		return view('user.menu')->with('menu',$menuList);
	}

}
