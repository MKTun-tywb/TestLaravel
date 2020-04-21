<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Fishes;

class FishController extends Controller
{
    public function create(){
      $data = new Fishes;
      $data-> fish_Name = request() -> txtName;

      $image = request() -> file('txtImage');
      $extension = $image -> getClientOriginalExtension();
      $imagename = time().".".$extension;
      $image -> move('Fish_Image/',$imagename);

      $data-> fish_Image = $imagename;
      $data -> fish_Rate = request() -> txtRate;
      $data -> fish_Quantity = request() -> txtStock;
      $data -> fish_Packing = request() -> txtPack;
      $data-> save();
      return redirect('/add');
    }
    public function home(){
      session()->flush();
      $data =  Fishes::orderBy('id','asc') -> paginate(5);
      return view('homes',compact('data'));
    }
    public function admin($code){
      session()->put('code',$code);
      $data =  Fishes::orderBy('id','asc') -> paginate(5);
      return view('homes',compact('data'));
    }
    public function detail($id){
      $data = Fishes::find($id);
      return view('Fish_Detail',compact('data'));
    }
    public function edit($id){
      $data = Fishes::find($id);
      return view('Fish_Edit',compact('data'));
    }
    public function realedit($id){
      $data = Fishes::find($id);
      $data -> fish_Name = request() -> fish_Name;
      if(request()-> hasFile('txtImage')){

      $image = request() -> file('txtImage');
      $extension = $image -> getClientOriginalExtension();
      $imagename = time().".".$extension;
      $image -> move('Fish_Image/',$imagename);
      $data-> fish_Image = $imagename;
      $data -> fish_Rate = request() -> txtRate;
      $data -> fish_Quantity = request() -> txtStock;
      $data -> fish_Packing = request() -> txtPack;
    }

      $data -> save();
      return redirect("/Fish_Edit/$id");
    }
    public function delete($id){
      $data = Fishes::find($id);
      $data -> delete();
      return redirect("/homes")-> with('hi','Fish deleted!');
    }
}
