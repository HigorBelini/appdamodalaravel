<template>

    <td v-for="i in item">{{i | formataData}}</td>
    <section class="content">

      <div class="row">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{asset ('img/perfil.jpg') }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">{{ Auth::user()->email }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Membro desde</b> <a class="pull-right">{{ Auth::user()->created_at }}</a>
                </li>
                <li class="list-group-item">
                  <b>Última atualização</b> <a class="pull-right">{{ Auth::user()->updated_at }}</a>
                </li>
                <li class="list-group-item">
                  <b>Função</b> <a class="pull-right">Administrador</a>
                </li>
              </ul>
              <button type="button" class="btn btn-primary btn-block" v-if="editar && !modal" v-bind:href="editar"> Editar </button>
              <modallink v-if="editar && modal" v-bind:item="item" v-bind:url="editar" tipo="link" nome="editar" titulo=" Editar |" css=""></modallink>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       </div>
    </section>

</template>

<script>
    export default {
      props:['titulos','itens','ordem','ordemcol','criar','detalhe','editar','deletar','token','modal'],
      data: function(){
        return {
          buscar:'',
          ordemAux: this.ordem || "asc",
          ordemAuxCol: this.ordemcol || 0
        }
      },
      methods:{
        executaForm: function(index){
          document.getElementById(index).submit();
        },
        ordenaColuna: function(coluna){
          this.ordemAuxCol = coluna;
          if(this.ordemAux.toLowerCase() == "asc"){
            this.ordemAux = 'desc';
          }else{
            this.ordemAux = 'asc';
          }
        }
      },
      filters: {
        formataData: function(valor){
          if(!valor) return '';
          valor = valor.toString();
          if(valor.split('-').length == 3){
            valor = valor.split('-');
            return valor[2] + '/' + valor[1]+ '/' + valor[0];
          }

          return valor;
        }
      },
      computed:{
        lista:function(){
          let lista = this.itens.data;
          let ordem = this.ordemAux;
          let ordemCol = this.ordemAuxCol;
          ordem = ordem.toLowerCase();
          ordemCol = parseInt(ordemCol);

          if(ordem == "asc"){
            lista.sort(function(a,b){
              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return 1;}
              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return -1;}
              return 0;
            });
          }else{
            lista.sort(function(a,b){
              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return 1;}
              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return -1;}
              return 0;
            });
          }

          if(this.buscar){
            return lista.filter(res => {
              res = Object.values(res);
              for(let k = 0;k < res.length; k++){
                if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                  return true;
                }
              }
              return false;

            });
          }


          return lista;
        }
      }
    }
</script>
