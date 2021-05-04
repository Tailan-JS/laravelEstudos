<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class Navi extends Controller
{
    public function index(){
    	return view('index');
    }

    public function events(){
    	$search = request('search');
    	if ($search) {
    		$events = Event::where([
    			['name','like','%'.$search.'%' ]
    		])->get();
    	}
    	else{
    	$events = Event::all();
    }
    	return view('events',['events' =>$events,'search' => $search]);
    }
    public function store(request $request){
    	$table = new Event;
    	$table->name = $request->name;
    	$table->cidade = $request->city;
    	$table->description = $request->description;
    	$table->date = $request->date;
        $table->owner = $request->owner;

    	//upload da imagem
    	if ($request->hasFile('image') && $request->file('image')->isValid()) {
    		$extension = $request->image->extension();
    		$name = md5($request->image->getClientOriginalName() .strtotime("now")).".".$extension;

    		$request->image->move(public_path('img/events'),$name);
    		$table->img = $name;

    	}

        $user = auth()->user();
        $table->user_id = $user->id;
    	$table->save();
    	return redirect('/')->with('msg','Evento criado com sucesso');

    }
    public function show($id){
    	$event = Event::findOrFail($id);
    	return view('details',['event'=>$event,'id'=>$id]);
    }
    public function destroy($id){
        $event = Event::findOrFail($id)->delete();

        return redirect('/events');

    }

    public function update(request $req){
        $event = Event::findOrFail($req->id)->update($req->all());

        return redirect('/events')->with('msg','Atualizãçãorealizada com sucesso');
    }

    public function dashboard(){

        $user = auth()->user();
        $events = $user->events;
        return view('dashboard',['events'=> $events,'user'=>$user]);
    }
}
