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
         "url" => "required",
         "date" => "required",
        ]);

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }

        if($request->hasfile('logo')){
            $logo = $request->file('logo');
            $extension = $logo->guessClientExtension();
            //$base64logo = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($logo));
            $diretorio = 'image/logos/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $logo->move($diretorio, $nomeImg);
            $imagemlogo = $diretorio.$nomeImg;
        }

        if($request->hasfile('shopfacade')){
            $shopfacade = $request->file('shopfacade');
            $extension = $shopfacade->guessClientExtension();
            //$base64shopfacade = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($shopfacade));
            $diretorio = 'image/shopfacades/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $shopfacade->move($diretorio, $nomeImg);
            $imagemshopfacade = $diretorio.$nomeImg;
            //$dados['shopfacade'] = $base64shopfacade;
        }

        /*
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
        */
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
        $empresa->url = $data['url'];
        $empresa->date = $data['date'];
        $empresa->logo = $imagemlogo;
        $empresa->shopfacade = $imagemshopfacade;
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
        $empresa = Company::find($id);
        $validacao2 = \Validator::make($data,[
         "socialname" => "required",
         "fantasyname" => "required",
         "number" => "required",
         //"logo" => "image|max:1999",
         //"shopfacade" => "image|max:1999",
         "latitude" => "required",
         "longitude" => "required",
         "industry" => "required",
         "descriptive" => "required",
         "keywords" => "required",
         "url" => "required",
         "date" => "required",
        ]);

        if($request->hasfile('logo')){
            $logo = $request->file('logo');
            $extension = $logo->guessClientExtension();
            //$base64logo = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($logo));
            $diretorio = 'image/logos/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $logo->move($diretorio, $nomeImg);
            $imagemlogo = $diretorio.$nomeImg;
        }

        if($request->hasfile('shopfacade')){
            $shopfacade = $request->file('shopfacade');
            $extension = $shopfacade->guessClientExtension();
            //$base64shopfacade = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($shopfacade));
            $diretorio = 'image/shopfacades/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $shopfacade->move($diretorio, $nomeImg);
            $imagemshopfacade = $diretorio.$nomeImg;
            //$dados['shopfacade'] = $base64shopfacade;
        }


        if($validacao2->fails()){
          return redirect()->back()->withErrors($validacao2)->withInput();
        }

        $user = auth()->user();

        $empresa->socialname = $data['socialname'];
        $empresa->fantasyname = $data['fantasyname'];
        $empresa->number = $data['number'];
        $empresa->latitude = $data['latitude'];
        $empresa->longitude = $data['longitude'];
        $empresa->industry = $data['industry'];
        $empresa->descriptive = $data['descriptive'];
        $empresa->keywords = $data['keywords'];
        $empresa->url = $data['url'];
        $empresa->date = $data['date'];
        $empresa->user_id = $user->id;
        
        if($request->hasfile('logo')){
            
            $empresa->logo = $imagemlogo;
        }
        if($request->hasfile('shopfacade')){
            
            $empresa->shopfacade = $imagemshopfacade;
        }
        $empresa->save();
        return redirect('/administrador/empresas')->with('success','post updated');
    }

    public function destroy($id)
    {
        $empresa = Company::find($id);
        $empresa->delete();

        return redirect()->back();
    }
}
