<?php
namespace App\Http\Controllers;


use App\Model\Hero;
use Illuminate\Http\Request;


class HeroesController extends Controller{


    public function __construct(){

    }


    public function index(Request $request){
        $name = $request->get('name');

        $heroes = Hero::where('name', 'LIKE', "%$name%")->get();
        return response()->json(array('data' => $heroes));
    }


    public function edit($id){
        $hero = Hero::find($id);
        return response()->json(array('data' => $hero));

    }

    public function save(Request $request){
        $name = $request->get('name');
        $hero = Hero::create(["name" => $name]);

        return response()->json(array('data' => $hero));
    }

    public function update(Request $request){
        $id = $request->get('id');
        $name = $request->get('name');

        $hero = Hero::findOrFail($id);
        $hero->name = $name;
        $hero->save();

        return response()->json(array('data' => $hero));

    }

    public function delete($id){
        Hero::destroy($id);
    }

}
