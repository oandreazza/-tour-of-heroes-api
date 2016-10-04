<?php
namespace App\Http\Controllers;


use App\Model\Hero;
use Illuminate\Http\Request;


class HeroesController extends Controller{


    public function __construct(){

    }

    public function index(){
        $heroes = Hero::all();
        return response()->json(array('data' => $heroes));
    }


    public function edit($id){
        $hero = Hero::find($id);
        return response()->json(array('data' => $hero));

    }

    public function save(Request $request){
        $name = $request->json()->get('name');
        Hero::create(["name" => $name]);
    }

    public function update(Request $request){
        $id = $request->json()->get('id');
        $name = $request->json()->get('name');

        $hero = Hero::findOrFail($id);
        $hero->name = $name;
        $hero->save();

    }

}
