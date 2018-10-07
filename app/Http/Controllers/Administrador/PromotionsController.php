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

        $user = auth()->user();

    	$company = 1;
        $promocao = new Promotion;
        
        $promocao->name = $data['name'];
        $promocao->company_id = $company;
        $promocao->startdate = $data['startdate'];
        $promocao->finaldate = $data['finaldate'];
        $promocao->descriptive = $data['descriptive'];
        $promocao->promotionimage = $fileNameToStore;
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
        $validacao2 = \Validator::make($data,[
         "name" => "required",
         "startdate" => "required",
         "finaldate" => "required",
         "descriptive" => "required",
         "promotionimage" => "image|max:1999",
        ]);

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
        }

        if($validacao2->fails()){
          return redirect()->back()->withErrors($validacao2)->withInput();
        }
        $user = auth()->user();
        $promocao = Promotion::find($id);
        $promocao->name = $data['name'];
        $promocao->startdate = $data['startdate'];
        $promocao->finaldate = $data['finaldate'];
        $promocao->descriptive = $data['descriptive'];
        $promocao->user_id = $user->id;
        
        if($request->hasfile('promotionimage')){
            Storage::delete('public/Imagens/Promotions/'.$promocao->promotionimage);
            $promocao->promotionimage = $fileNameToStore;
        }
     
        $promocao->save();
        return redirect('/administrador/promocoes')->with('success','post updated');
    }

    public function destroy($id)
    {
        $promocao = Promotion::find($id);
        if($promocao->promotionimage != 'noimage.jpg'){
            //Apaga a imagem
            Storage::delete('public/Imagens/Promotions/'.$promocao->promotionimage);
        }
        
        $promocao->delete();

        return redirect()->back();
    }
}
