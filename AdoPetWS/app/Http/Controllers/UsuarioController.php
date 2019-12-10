<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use Illuminate\Http\Request;
class UsuarioController extends Controller
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
    public function getAllUsers(){
        return response()->json(Usuario::all());
    }
    public function getUserById($id){
        return response()->json(Usuario::find($id));
    }
    public function sign(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'username' => 'required',
            'correo' => 'required',
            'contrasena' => 'required'
        ]);
        $correo = $request->input('correo');
        $username = $request->input('username');
        $users = DB::select("SELECT * FROM usuarios WHERE correo = '$correo' OR username = '$username'");
        if($users!=null){
            $error['error'] = 'User already exists';
            return response()->json($error, 409);
        }else{
            $usuario = Usuario::create($request->all());
            return response()->json($usuario, 201);
        }

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'username' => 'required',
            'correo' => 'required'
        ]);
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }
    public function delete($id){
        Usuario::findOrFail($id)->delete();
        return response("Deleted success");
    }
    public function login(Request $request){
        $this->validate($request, [
            'correo' => 'required',
            'contrasena' => 'required'
        ]);
        $correo = $request->input('correo');
        $contrasena = $request->input('contrasena');
        $users = DB::select("SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");
        if($users == null){
            $error['error'] = 'User not found';
            return response()->json($error, 404);
        }
        return response()->json($users[0], 200);
    }
    public function prueba(){
        #return response(date_default_timezone_get());
        return response()->json(date('m/d/Y h:i:s a',time()));
    }
}
