@extends('adminlte::page')

@section('title', 'APP da Moda - Área do administrador')

@section('content_header')
	<h1 style="text-align: center;">Bem vindo(a) {{ Auth::user()->name }}</h1>
@stop

@section('content')
    <div id="app">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <h3 style="text-align: center;">Cadastros</h3>
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-lg-3 col-xs-6">
                            <caixa qtd="{{$totalEmpresas}}" titulo="Empresas" url="{{route('empresas.index')}}" cor="#FBB13C" icone="ion ion-document-text"></caixa>
                        </div>
                      
                        <div class="col-lg-3 col-xs-6">
                            <caixa qtd="{{$totalPromocoes}}" titulo="Promoções" url="{{route('promocoes.index')}}" cor="#2176AE" icone="ion ion-person-stalker"></caixa>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="#A0DBA4" icone="ion ion-person-stalker"></caixa>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <caixa qtd="{{$totalAdministradores}}" titulo="Administradores" url="{{route('administradores.index')}}" cor="tomato" icone="ion ion-person-stalker"></caixa>
                        </div>
                       
                    </div>
                </div>
    </div>

    

@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

