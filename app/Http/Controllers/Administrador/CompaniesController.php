<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Company;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    
    public function index()
    {
        $listaMigalhas = json_encode([
          ["titulo"=>"Administrador","url"=>route('administrador')],
          ["titulo"=>"Empresas","url"=>""]
        ]);


        $listaModelo = Company::select('id','fantasyname')->paginate(5);

        

        return view('administrador.empresas.index',compact('listaMigalhas','listaModelo'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
         "socialname" => "required",
         "fantasyname" => "required",
         "number" => "required",
         "logo" => "image|required|max:1999",
         "shopfacade" => "image|required|max:1999",
         "latitude" => "required",
         "longitude" => "required",
         "industry" => "required",
         "descriptive" => "required",
         "keywords" => "required",
         "date" => "required",
        ]);

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }

        //Hamdle file upload
        if($request->hasfile('logo')){
            //get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('logo')->storeAs('public/Imagens/Companies', $fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpg';
        }

        //imagem 2
        if($request->hasfile('shopfacade')){
            //get filename with the extension
            $filenameWithExt = $request->file('shopfacade')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('shopfacade')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('shopfacade')->storeAs('public/Imagens/Companies', $fileNameToStore2);
        }else{
            $fileNameToStore2 ='noimage.jpg';
        }
    
        $user = auth()->user();

        $empresa = new Company;
        
        $empresa->socialname = $data['socialname'];
        $empresa->fantasyname = $data['fantasyname'];
        $empresa->number = $data['number'];
        $empresa->latitude = $data['latitude'];
        $empresa->longitude = $data['longitude'];
        $empresa->industry = $data['industry'];
        $empresa->descriptive = $data['descriptive'];
        $empresa->keywords = $data['keywords'];
        $empresa->date = $data['date'];
        $empresa->logo = $fileNameToStore;
        $empresa->shopfacade = $fileNameToStore2;
        $empresa->user_id = $user->id;
        $empresa->save();
        return redirect()->back();
    }

    public function show($id)
    {
        return Company::find($id);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validacao2 = \Validator::make($data,[
         "socialname" => "required",
         "fantasyname" => "required",
         "number" => "required",
         "logo" => "image|max:1999",
         "shopfacade" => "image|max:1999",
         "latitude" => "required",
         "longitude" => "required",
         "industry" => "required",
         "descriptive" => "required",
         "keywords" => "required",
         "date" => "required",
        ]);

         //Hamdle file upload
        if($request->hasfile('logo')){
            //get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('logo')->storeAs('public/Imagens/Companies', $fileNameToStore);
        }

        //imagem 2
        if($request->hasfile('shopfacade')){
            //get filename with the extension
            $filenameWithExt = $request->file('shopfacade')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('shopfacade')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('shopfacade')->storeAs('public/Imagens/Companies', $fileNameToStore2);
        }


        if($validacao2->fails()){
          return redirect()->back()->withErrors($validacao2)->withInput();
        }

        $user = auth()->user();

        $empresa = Company::find($id);
        $empresa->socialname = $data['socialname'];
        $empresa->fantasyname = $data['fantasyname'];
        $empresa->number = $data['number'];
        $empresa->latitude = $data['latitude'];
        $empresa->longitude = $data['longitude'];
        $empresa->industry = $data['industry'];
        $empresa->descriptive = $data['descriptive'];
        $empresa->keywords = $data['keywords'];
        $empresa->date = $data['date'];
        $empresa->user_id = $user->id;
        
        if($request->hasfile('logo')){
            Storage::delete('public/Imagens/Companies/'.$empresa->logo);
            $empresa->logo = $fileNameToStore;
        }
        if($request->hasfile('shopfacade')){
            Storage::delete('public/Imagens/Companies/'.$empresa->shopfacade);
            $empresa->shopfacade = $fileNameToStore2;
        }
        $empresa->save();
        return redirect('/administrador/empresas')->with('success','post updated');
    }

    public function destroy($id)
    {
        $empresa = Company::find($id);
        if($empresa->logo != 'noimage.jpg'){
            //Apaga a imagem
            Storage::delete('public/Imagens/Companies/'.$empresa->logo);
        }

        if($empresa->shopfacade != 'noimage.jpg'){
            //Apaga a imagem
            Storage::delete('public/Imagens/Companies/'.$empresa->shopfacade);
        }
        
        $empresa->delete();

        return redirect()->back();
    }
}
