<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mascota;
use Illuminate\Http\Request;
class MascotaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function getAllPets(){
        return response()->json(Mascota::all());
    }
    public function getPetById($id){
        return response()->json(Mascota::find($id));
    }
    public function sign(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'raza' => 'required',
            'genero' => 'required'
        ]);
        $pet = Mascota::create($request->all());
        return response()->json($pet, 201);


    }
    public function update($id, Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'raza' => 'required',
            'genero' => 'required'
        ]);
        $pet = Mascota::findOrFail($id);
        $pet->update($request->all());
        return response()->json($pet, 200);
    }
    public function delete($id){
        Mascota::findOrFail($id)->delete();
        return response()->json('Deleted', 200);
    }
    public function prueba(){

        return response()->json(Mascota::find(1));
    }
}
