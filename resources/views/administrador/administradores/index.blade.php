@extends('adminlte::page')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content_header')
    <h1 style="text-align: center;">Administradores</h1>
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
    <painel titulo="Autores cadastrados">
     <tabela-lista
      v-bind:titulos="['#','Nome']"
      v-bind:itens="{{json_encode($listaModelo)}}"
      ordem="desc" ordemcol="1"
      criar="#criar" detalhe="/administrador/administradores/" editar="/administrador/administradores/" modal="sim"


      ></tabela-lista>
      <div align="center">
        {{$listaModelo->links()}}
      </div>
    </painel>


  </pagina>

  <modal nome="adicionar" titulo="Adicionar">
      <formulario id="formAdicionar" css="" action="{{route('administradores.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
    
        <div class="form-group">
          <label for="name">Nome*</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required="required"> 
        </div>

        <div class="form-group">
          <label for="email">E-mail*</label>
          <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required="required"> 
        </div>

        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required="required"> 
        </div>

        <div class="form-group">
          <label for="admin">Administrador</label>
          <select class="form-control" id="admin" name="admin">
            <option {{(old('admin') && old('admin') == 'N' ? 'selected' : '' )}} value="N">Não</option>
            <option {{(old('admin') && old('admin') == 'S' ? 'selected' : ''  )}} {{(!old('admin') ? 'selected' : ''  )}} value="S">Sim</option>
          </select>
        </div>
        
      </formulario>
      <span slot="botoes"><button form="formAdicionar" class="btn btn-info">Adicionar</button></span>
  </modal>



  
  <modal nome="editar" titulo="Editar">
      <formulario id="formEditar" css="" v-bind:action="'/administrador/administradores/' + $store.state.item.id" method="put" enctype="multipart/form-data" token="{{ csrf_token() }}">
        
        <div class="form-group">
          <label for="name">Nome*</label>
          <input type="text" class="form-control" id="name" name="name" v-model="$store.state.item.name" required="required"> 
        </div>

        <div class="form-group">
          <label for="email">E-mail*</label>
          <input type="text" class="form-control" id="email" name="email" v-model="$store.state.item.email" required="required"> 
        </div>

        <div class="form-group">
          <label for="password">Senha*</label>
          <input type="password" class="form-control" id="password" name="password" v-model="$store.state.item.password"> 
        </div>

        <div class="form-group">
          <label for="admin">Administrador</label>
          <select class="form-control" id="admin" name="admin" v-model="$store.state.item.admin">
            <option value="N">Não</option>
            <option value="S">Sim</option>
          </select>
        </div>

        <br> 
        <div style="font-size: 1em; margin-left: 30px; text-align: left;"><b>(*)Campos obrigatórios</b></div>

      </formulario>
      
      <span slot="botoes"><button form="formEditar" class="btn btn-info">Atualizar</button></span>
  </modal>

  <modal nome="detalhe" v-bind:titulo="$store.state.item.name">
      <p><b>E-mail:</b> @{{$store.state.item.email}}<br></p>
  </modal>
      
</div>
@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

