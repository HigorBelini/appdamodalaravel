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
                        @can('eAdmin')
                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalEmpresas}}" titulo="Empresas" url="{{route('empresas.index')}}" cor="#FBB13C" icone="fa fa-fw fa-building"></caixa>
                        </div>
                      
                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalPromocoes}}" titulo="Promoções" url="{{route('promocoes.index')}}" cor="#2176AE" icone="fa fa-fw fa-shopping-bag"></caixa>
                        </div>

                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalCadastrosPromocoes}}" titulo="Cadastros em promoções" url="{{route('usuarios-promocoes.index')}}" cor="#DDC9B4" icone="fa fa-fw fa-gift"></caixa>
                        </div>

                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalFavoritos}}" titulo="Cadatros em favoritos" url="{{route('favoritos.index')}}" cor="tomato" icone="fa fa-fw fa-star"></caixa>
                        </div>

                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="#A0DBA4" icone="fa fa-fw fa-users"></caixa>
                        </div>

                        <div class="col-lg-4 col-xs-6">
                            <caixa qtd="{{$totalAdministradores}}" titulo="Administradores" url="{{route('administradores.index')}}" cor="#3C787E" icone="fa fa-fw fa-key"></caixa>
                        </div>

                        
                        @endcan
                    </div>
                </div>
    </div>

    

@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
@stop

