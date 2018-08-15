<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Cliente; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class ClienteController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(Request $request){ 
    //     header('Acces-Control-Allow-Origin: *');
    // if (Auth::Attempt(['email' => request ('email'), 'password' => request(password)])) {
    //         $user = Auth::user();
    //         $success['token'] = "mi_aplicacion_said123"
    //         $success['cliente_id'] = $user->id;
    //         return response()->json($success, $this->successStatus);
    // }
    // else {
    //     return response()->json(['error'=>'Unauthorised'], 401);
    // }
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
        $credentials = $request->only('email', 'password');
        //   if( Auth::guard('cliente')->attempt($credentials) ){ 
        // $cliente = null;
        //    $cliente = Cliente::where('email', $credentials['email'])->where('password', bcrypt($credentials['password']) )->first();
           return bcrypt($credentials['password']);
        // $cliente = Cliente::where('email', $credentials['email'])->first();
        //    return $cliente;
        if( $cliente != null ){ 
            $cliente = Auth::cliente(); 
            $success['token'] =  $cliente->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
}

    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'nombre' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
        
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $cliente = Cliente::create($input); 
        $success['token'] =  $cliente->createToken('MyApp')-> accessToken; 
        $success['nombre'] =  $cliente->nombre;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }
    
    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    // public function details() 
    // { 
    //     $user = Auth::user(); 
    //     return response()->json(['success' => $user], $this-> successStatus); 
    // } 
}