<template>
    <div class="card">
        <img class="card-img-top" src="" alt="Curso Hardware Smartphones">
          <div class="card-body">
            <small style="font-size:0.7em;">{{data}} - {{autor}}</small>
            <h4 class="card-title">{{titulo}}</h4>
            <p class="card-text wow zoomIn">{{descricao}}
            </p>
            <a href="link" class="btn btn-outline-secondary">LEIA MAIS</a>
          </div>
    </div>
</template>

<script>
    export default {
      props:['titulo','descricao','link','imagem','data','autor'],
      filters: {
        formataData: function(valor){
          if(!valor) return '';
          valor = valor.toString();
          valor = valor.split('-');
          return valor[2] + '/' + valor[1]+ '/' + valor[0];
        }
      }
    }
</script>
            