<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Promotion;
use App\Company;
use Illuminate\Support\Facades\DB;

class PromotionsController extends Controller
{
    
    public function index()
    {
        $listaMigalhas = json_encode([
          ["titulo"=>"Administrador","url"=>route('administrador')],
          ["titulo"=>"Promoções","url"=>""]
        ]);


        $listaModelo = Promotion::select('id','name')->paginate(5);

        return view('administrador.promocoes.index',compact('listaMigalhas','listaModelo'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
         "name" => "required",
         "startdate" => "required",
         "finaldate" => "required",
         "descriptive" => "required",
         "promotionimage" => "image|required|max:1999",
        ]);

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }

        if($request->hasfile('promotionimage')){
            $promotionimage = $request->file('promotionimage');
            $extension = $promotionimage->guessClientExtension();
            //$base64logo = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($logo));
            $diretorio = 'image/promotions/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $promotionimage->move($diretorio, $nomeImg);
            $imagempromotionimage = $diretorio.$nomeImg;
        }
        /*
        //Hamdle file upload
        if($request->hasfile('promotionimage')){
            //get filename with the extension
            $filenameWithExt = $request->file('promotionimage')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('promotionimage')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('promotionimage')->storeAs('public/Imagens/Promotions', $fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpg';
        }
        */
        $user = auth()->user();

        $promocao = new Promotion;
        
        $promocao->name = $data['name'];
        $promocao->company_id = $data['company_id'];
        $promocao->startdate = $data['startdate'];
        $promocao->finaldate = $data['finaldate'];
        $promocao->descriptive = $data['descriptive'];
        $promocao->promotionimage = $imagempromotionimage;
        $promocao->user_id = $user->id;
        $promocao->save();
        return redirect()->back();
    }

    public function show($id)
    {
        return Promotion::find($id);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $promocao = Promotion::find($id);
        $validacao2 = \Validator::make($data,[
         "name" => "required",
         "startdate" => "required",
         "finaldate" => "required",
         "descriptive" => "required",
         //"promotionimage" => "image|max:1999",
        ]);

         //Hamdle file upload

         if($request->hasfile('promotionimage')){
            $promotionimage = $request->file('promotionimage');
            $extension = $promotionimage->guessClientExtension();
            //$base64logo = 'data:image/'.$extension.';base64,'. base64_encode(file_get_contents($logo));
            $diretorio = 'image/promotions/';
            $nomeImg = 'img_'.rand(1111,9999).'.'.$extension;
            $promotionimage->move($diretorio, $nomeImg);
            $imagempromotionimage = $diretorio.$nomeImg;
        }


        if($validacao2->fails()){
          return redirect()->back()->withErrors($validacao2)->withInput();
        }
        $user = auth()->user();
        $promocao->name = $data['name'];
        $promocao->startdate = $data['startdate'];
        $promocao->finaldate = $data['finaldate'];
        $promocao->descriptive = $data['descriptive'];
        $promocao->user_id = $user->id;

        if($request->hasfile('promotionimage')){
            
            $promocao->promotionimage = $imagempromotionimage;
        }
        
        $promocao->save();
        return redirect('/administrador/promocoes')->with('success','post updated');
    }

    public function destroy($id)
    {
        
        $promocao->delete();

        return redirect()->back();
    }
}
