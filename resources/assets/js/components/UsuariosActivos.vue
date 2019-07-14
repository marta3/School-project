<template>

<div id="content" class="col-lg-10 col-lg-offset-1">

  
<h3>Usuarios</h3>
    <!-- Componente actual -->
    <table class="table table-hover">
    <thead>
    <tr>
      <th>Registrado</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Localidad</th>
      <th>Admin</th>
    </tr>
  </thead>
  <tbody>
    
   
    <tr v-if="usuarios.length" v-for="usuario in usuarios">
      <td>{{since(usuario.created_at)}}</td>
      <td>{{usuario.name}}</td>
      <td>{{usuario.second_name}}</td>
      <td>{{usuario.localidad}}</td>
      <td v-if="usuario.tipo==0"><button class="btn btn-info"><a v-on:click.prevent="admin(usuario)"><span class="
glyphicon glyphicon-ok-circle"></span> Hacer admin</a></button></td>
      <td v-if="usuario.tipo==1"><button class="btn btn-danger"><a v-on:click.prevent="admin(usuario)" style="color:white;"> <span class="glyphicon glyphicon-remove-circle"></span> Quitar admin</a></button></td>
    </tr>

    </tbody>
</table>
</div>
</template>

<script>
import axios from 'axios'
import moment from 'moment';
moment.lang('es');
    export default {

        data(){
            return{
                usuarios:[],
            }
        },
        created: function(){
            this.getUsuariosActivos();
        },
        methods:{
            since: function(fecha){
                return moment(fecha).fromNow();
            },
            getUsuariosActivos: function(){
                var urlUsuariosActivos='m-usuarios-activos';
                axios.get(urlUsuariosActivos).then(response=>{
                    this.usuarios=response.data
                });
            },
            admin: function(usuario){
                var urlAdmin='admin_admin' + usuario.id;
                axios.get(urlAdmin).then(response =>{
                    this.getUsuariosActivos();
                });
                
            }
        }
    }
</script>
