<?php
    
namespace App\Http\Controllers;
    
use App\Empresa as Empresa;
use App\Pais as Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
    
class EmpresaController extends Controller
{    
    
    public function create()
    {
       $paises = Pais::all(['id', 'nombre']); 
       $selectedCountry = null;
       return \View::make('create', compact('paises','selectedCountry'));
    }
        
    public function store(Request $request)
    {
        
        $rules = array(
            'nombre' => 'required',
            'id_tipo' => 'required',
            'id_pais' => 'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:8',
            'repetir_password' => 'required|min:8|same:password'
        );
            
        $validator = Validator::make(Input::all(), $rules);
            
            
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('empresa/create')->withErrors($messages);        
                
        }else{
            
            $empresa=new Empresa; // Creando el objecto del modelo
            $empresa -> create($request->all());
            return redirect('empresa/create')->with('message', '¡Registro guardado con &eacute;xito!');       
                
        }
            
    }
        
    public function update($id)
    {   
        $empresa = Empresa::findOrFail($id);
        $data = Input::all();
        $empresa->fill($data);
        $empresa->save();
        return redirect()->back()->with('message', '¡Registro actualizado con &eacute;xito!');
    }
        
    public function edit($id)
    {   
        $paises = Pais::all('id','nombre');
        $empresa = Empresa::findOrFail($id);
        $selectedCountry = $empresa->id_pais;
        return view('update', compact(['empresa', 'paises', 'selectedCountry']));
    }
    
    public function destroy($id){
        $registro= Empresa::find($id);
        $registro->delete();
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');
        
    }
        
    public function lista()
    {
        $empresas = Empresa::all()-> sortBy("nombre");
        return \View::make('lista', compact('empresas'));  
    }
        
    public function Paises()
    {
        $paises = Pais::all(['id', 'nombre']);
        return view('empresa/create', compact('paises'));
    } 
}