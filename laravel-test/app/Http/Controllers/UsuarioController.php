<?php

namespace Cinema\Http\Controllers;
use Illuminate\Http\Request;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;

use Cinema\User;
use Cinema\Http\Requests;

/* Aqui importamos uma livraria para poder acessár aos parámetros route.php */
use Illuminate\Routing\Route;


class UsuarioController extends Controller
{
    
    public function __construct(Route $route){
        $this->middleware('auth');
        $this->middleware('admin');
       /*Esta ordem e executada antes das funções, neste caso, somente no edit, update e destroy */
        //$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
       // $this->middleware('commomHeadUserMethod',['only' => ['edit','update','destroy']]);
        //$this->middleware($this->find($route),['only' => ['edit','update','destroy']]);
    }
    
    
    //aqui e gerado o métdo a ser executado antes dos citados
    public function find(Route $route){
        //Resgatamos a tabela o registro da tabela users no qual queremos trabalhar
        $this->user = User::find($route->getParameter('usuario'));
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*//tras todos os registros
        $users = User::All();*/
        $users = User::paginate(5);
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        /*
            User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
            ]);

        */
            User::create($request->all());
        /* vamos redirecionar a pagina index do usuario e enviar uma mensagem */    
        return redirect('/usuario')->with('message','Usuario gerado com sucesso!');
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
        $user = User::find($id);
        return view('usuario.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        
        Session::flash('message','Usuario editado corretamente!');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /*// Se for apagar permanentemente o registro
        User::destroy($id);*/
        //Para apagar via softDelete, mais permanece no DB
        $user = User::find($id);
        $user->delete();
        
        Session::flash('message','Usuario eliminado corretamente!');
        return Redirect::to('/usuario');
        
    }
}
