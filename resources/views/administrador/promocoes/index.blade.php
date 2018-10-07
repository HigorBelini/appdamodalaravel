
@extends('adminlte::page')

<meta name="csrf-token" content="{{ csrf_token() }}">



@section('content_header')
    <h1 style="text-align: center;">Promoções</h1>
@stop

@section('content')
  
<div id="app" style="display: none;">
  <pagina tamanho="12">

    @if($errors->all())
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @foreach ($errors->all() as $key => $value)
          <p><strong>{{$value}}</strong></p>
        @endforeach
      </div>
    @endif

    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <painel titulo="Promoções cadastradas">
     <tabela-lista
      v-bind:titulos="['Código','Nome']"
      v-bind:itens="{{json_encode($listaModelo)}}"
      ordem="desc" ordemcol="1"
      criar="#criar" detalhe="/administrador/promocoes/" editar="/administrador/promocoes/" deletar="/administrador/promocoes/" token="{{ csrf_token() }}" modal="sim"


      ></tabela-lista>
      <div align="center">
        {{$listaModelo->links()}}
      </div>
    </painel>


  </pagina>

  <modal nome="adicionar" titulo="Adicionar">
      <formulario id="formAdicionar" css="" action="{{route('promocoes.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{old('name')}}" required="required">
        </div>
        
        <label for="company_id"></label>
        <select>
        </select>

        <div class="form-group">
          <label for="descriptive">Descrição</label>
          <textarea class="form-control" id="descriptive" name="descriptive" required="required">{{old('descriptive')}}</textarea>
        </div>
        
        <label for="promotionimage">Imagem da promoção</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="promotionimage" name="promotionimage" required="required"><br>
        </div>

        <div class="form-group">
          <label for="startdate">Data de início</label>
          <input type="date" class="form-control" id="startdate" name="startdate" value="{{old('startdate')}}" required="required"> 
        </div>

        <div class="form-group">
          <label for="finaldate">Data final</label>
          <input type="date" class="form-control" id="finaldate" name="finaldate" value="{{old('finaldate')}}" required="required"> 
        </div>

      </formulario>
      <span slot="botoes"><button form="formAdicionar" class="btn btn-info">Adicionar</button></span>
  </modal>



  
  <modal nome="editar" titulo="Editar">
      <formulario id="formEditar" css="" v-bind:action="'/administrador/promocoes/' + $store.state.item.id" method="put" enctype="multipart/form-data" token="{{ csrf_token() }}">

        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" name="name" v-model="$store.state.item.name" placeholder="Nome" required="required">
        </div>

         <div class="form-group">
          <label for="descriptive">Descrição</label>
          <textarea class="form-control" id="descriptive" name="descriptive" v-model="$store.state.item.descriptive" required="required"></textarea>
        </div>

        <label for="promotionimage">Imagem da promoção</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="promotionimage" name="promotionimage"><br>
        </div>

        <div class="form-group">
          <label for="startdate">Data de início</label>
          <input type="date" class="form-control" id="startdate" name="startdate" v-model="$store.state.item.startdate" required="required"> 
        </div>

        <div class="form-group">
          <label for="finaldate">Data final</label>
          <input type="date" class="form-control" id="finaldate" name="finaldate" v-model="$store.state.item.startdate" required="required"> 
        </div>

      </formulario>
      
      <span slot="botoes"><button form="formEditar" class="btn btn-info">Atualizar</button></span>
  </modal>

  <modal nome="detalhe" v-bind:titulo="$store.state.item.name">
      <p><b>Descrição:</b> @{{$store.state.item.descriptive}}<br></p>
      <p><b>Data de início:</b> @{{$store.state.item.startdate}}<br></p>
      <p><b>Data Final:</b> @{{$store.state.item.finaldate}}<br></p>
      <p><b>Usuário que efetuou cadastro:</b> @{{$store.state.item.user_id}}<br></p>
      <p><b>Imagem principal:</b></p>
      <img style="max-width: 100%; margin-bottom: 20px;" v-bind:src="'/storage/Imagens/Promotions/' + $store.state.item.promotionimage">
  </modal>

</div>
@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

