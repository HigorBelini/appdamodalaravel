
@extends('adminlte::page')

<meta name="csrf-token" content="{{ csrf_token() }}">



@section('content_header')
    <h1 style="text-align: center;">Empresas</h1>
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
    <painel titulo="Empresas cadastradas">
     <tabela-lista
      v-bind:titulos="['#','Nome']"
      v-bind:itens="{{json_encode($listaModelo)}}"
      ordem="desc" ordemcol="1"
      criar="#criar" detalhe="/administrador/empresas/" editar="/administrador/empresas/" deletar="/administrador/empresas/" token="{{ csrf_token() }}" modal="sim"


      ></tabela-lista>
      <div align="center">
        {{$listaModelo->links()}}
      </div>
    </painel>


  </pagina>

  <modal nome="adicionar" titulo="Adicionar">
      <formulario id="formAdicionar" css="" action="{{route('empresas.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
        <div class="form-group">
          <label for="socialname">Razão Social</label>
          <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Razão Social" value="{{old('socialname')}}" required="required">
        </div>

        <div class="form-group">
          <label for="fantasyname">Nome Fantasia</label>
          <input type="text" class="form-control" id="fantasyname" name="fantasyname" placeholder="Nome Fantasia" value="{{old('fantasyname')}}" required="required">
        </div>

        <div class="form-group">
          <label for="number">Número</label>
          <input type="text" class="form-control" id="number" name="number" placeholder="Número" value="{{old('number')}}" required="required">
        </div>

        <label for="descricao">Logo</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="logo" name="logo" required="required"><br>
        </div>

        <label for="descricao">Imagem da empresa</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="shopfacade" name="shopfacade" required="required"><br>
        </div>

        <div class="form-group">
          <label for="latitudeandlongitude">Latitude e longitude. Ex: -20.000000 -40.000000</label>
          <input type="text" class="form-control" id="latitudeandlongitude" name="latitudeandlongitude" placeholder=" Ex: -20.000000 -40.000000" value="{{old('latitudeandlongitude')}}" required="required">
        </div>

        <div class="form-group">
          <label for="industry">Ramo de atuação</label>
          <input type="text" class="form-control" id="industry" name="industry" placeholder="Ramo de atuação" value="{{old('industry')}}" required="required">
        </div>

        <div class="form-group">
          <label for="descriptive">Descrição</label>
          <textarea class="form-control" id="descriptive" name="descriptive" required="required">{{old('descriptive')}}</textarea>
        </div>
        <div class="form-group">
          <label for="keywords">Palavras-chave</label>
          <textarea class="form-control" id="keywords" name="keywords" required="required">{{old('keywords')}}</textarea>
        </div>

        <div class="form-group">
          <label for="url">Endereço do site na Internet</label>
          <input type="text" class="form-control" id="url" name="url" placeholder="Pode ser redes sociais" value="{{old('url')}}" required="required">
        </div>
       
        <div class="form-group">
          <label for="date">Data de cadastro</label>
          <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" required="required"> 
        </div>

      </formulario>
      <span slot="botoes"><button form="formAdicionar" class="btn btn-info">Adicionar</button></span>
  </modal>



  
  <modal nome="editar" titulo="Editar">
      <formulario id="formEditar" css="" v-bind:action="'/administrador/empresas/' + $store.state.item.id" method="put" enctype="multipart/form-data" token="{{ csrf_token() }}">

        <div class="form-group">
          <label for="socialname">Razão social</label>
          <input type="text" class="form-control" id="socialname" name="socialname" v-model="$store.state.item.socialname" placeholder="Razão social" required="required">
        </div>

        <div class="form-group">
          <label for="fantasyname">Nome fantasia</label>
          <input type="text" class="form-control" id="fantasyname" name="fantasyname" v-model="$store.state.item.fantasyname" placeholder="Nome Fantasia" required="required">
        </div>

        <div class="form-group">
          <label for="number">Número</label>
          <input type="text" class="form-control" id="number" name="number" v-model="$store.state.item.number" placeholder="Número" required="required">
        </div>

        <label for="logo">Logo</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="logo" name="logo"><br>
        </div>

        <label for="shopfacade">Imagem da empresa</label>
        <div class="form-group">    
        <!-- The file input field used as target for the file upload widget -->
        <input type="file" id="shopfacade" name="shopfacade"><br>
        </div>

        <div class="form-group">
          <label for="latitudeandlongitude">Latitude e longitude</label>
          <input type="text" class="form-control" id="latitudeandlongitude" name="latitudeandlongitude" v-model="$store.state.item.latitudeandlongitude" placeholder="Latitude e longitude" required="required">
        </div>

        <div class="form-group">
          <label for="industry">Ramo de atuação</label>
          <input type="text" class="form-control" id="industry" name="industry" v-model="$store.state.item.industry" placeholder="Ramo de atuação" required="required">
        </div>

        <div class="form-group">
          <label for="descriptive">Descrição</label>
          <textarea class="form-control" id="descriptive" name="descriptive" v-model="$store.state.item.descriptive" required="required"></textarea>
        </div>

        <div class="form-group">
          <label for="keywords">Palavras-chave</label>
          <textarea class="form-control" id="keywords" name="keywords" v-model="$store.state.item.keywords" required="required"></textarea>
        </div>

        <div class="form-group">
          <label for="url">Endereço do site na Internet</label>
          <input type="text" class="form-control" id="url" name="url" v-model="$store.state.item.url" placeholder="Endereço do site na Internet" required="required">
        </div>
       
        <div class="form-group">
          <label for="date">Data de cadastro</label>
          <input type="date" class="form-control" id="date" name="date" v-model="$store.state.item.date" required="required"> 
        </div>

      </formulario>
      
      <span slot="botoes"><button form="formEditar" class="btn btn-info">Atualizar</button></span>
  </modal>

  <modal nome="detalhe" v-bind:titulo="$store.state.item.socialname">
        <p><b>Nome fantasia:</b> @{{$store.state.item.fantasyname}}<br></p>
        <p><b>Número:</b> @{{$store.state.item.number}}<br></p>
        <p><b>Latitude e longitude:</b> @{{$store.state.item.latitudeandlongitude}}<br></p>
        <p><b>Ramo de atuação:</b> @{{$store.state.item.industry}}<br></p>
        <p><b>Descrição:</b> @{{$store.state.item.descriptive}}</p>
        <p><b>Palavras-chave:</b> @{{$store.state.item.keywords}}<br></p>
        <p><b>Data de cadastro:</b> @{{$store.state.item.date}}</p>
        <p><b>Usuário que efetuou cadastro:</b> @{{$store.state.item.user_id}}<br></p>
        <p><b>Endereço do site:</b> @{{$store.state.item.url}}<br></p>
        <p><b>Logo:</b></p>
        <img style="max-width: 100%; margin-bottom: 20px;" v-bind:src="'/' + $store.state.item.logo">
        <p><b>Imagem da empresa:</b></p>
        <img style="max-width: 100%; margin-bottom: 20px;" v-bind:src="'/' + $store.state.item.shopfacade">
  </modal>

</div>
@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

