<?php

namespace App\Http\Controllers\Sos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\usuario;
use DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $lista = usuario::all();
            return response()->json($lista);

        } catch(Exception $e){
            return response()->json([
                'success'=>true, 
                'message'=>$e->getMessage()
            ]);
        }
    }

    public function getUsuario($id)
    {
        # code...
        try{
            $lista = usuario::where('id', $id)->get();
            return response()->json($lista);

        } catch(Exception $e){
            return response()->json([
                'success'=>true, 
                'message'=>$e->getMessage()
            ]);
        }
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
        try{
            \DB::beginTransaction();
            usuario::create($request->all());
            \DB::commit();
            return response()->json([
                'success'=>true,
                'message'=>'Se registro correctamente'
            ]);
        }
        catch(Exception $e){
            \DB::rollback();
            return response()->json([
                'success'=>false,
                'message'=>$e->getMessage()
            ]);
        }
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
        try{
            \DB::beginTransaction();
            $usuario = usuario::FindOrFail($id);
            $input = $request->all();
            $usuario->fill($input)->save();
            \DB::commit();
            return response()->json([
                'success'=>true,
                'message'=>'Se modifico correctamente'
            ]);
        }
        catch(Exception $e){
            \DB::rollback();
            return response()->json([
                'success'=>false,
                'message'=>$e->getMessage()
            ]);
        }
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
        try{
            \DB::beginTransaction();
            $usuario = usuario::FindOrFail($id);
            $usuario->delete();
            \DB::commit();
            return response()->json([
                'success'=>true,
                'message'=>'Se elimino correctamente'
            ]);
        }
        catch(Exception $e){
            \DB::rollback();
            return response()->json([
                'success'=>false,
                'message'=>$e->getMessage()
            ]);
        }
    }
}
