@extends('adminlte::page')

<meta name="csrf-token" content="{{ csrf_token() }}">



@section('content_header')
    <h1 style="text-align: center;">Cadastros em promoções</h1>
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
    <painel titulo="Cadastros em promoções realizados">
     <tabela-lista
      v-bind:titulos="['#','Promoção','Usuário']"
      v-bind:itens="{{json_encode($listaModelo)}}"
      ordem="desc" ordemcol="1"
      detalhe="/administrador/usuarios-promocoes/" modal="sim"


      ></tabela-lista>
      <div align="center">
        {{$listaModelo->links()}}
      </div>
    </painel>


  </pagina>

  <modal nome="detalhe" v-bind:titulo="$store.state.item.promotion_name">
      <!--<p><b>Nome da promoção:</b> @{{$store.state.item.promotion_name}}<br></p>-->
      <p><b>Usuário:</b> @{{$store.state.item.user_id}}<br></p>
      <p><b>Data de cadastro:</b> @{{$store.state.item.date}}</p>
  </modal>
      
</div>
@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

