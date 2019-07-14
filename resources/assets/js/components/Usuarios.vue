
<template>

<div class="container">
    <h3>Usuarios</h3>
    <div v-if="usuarios.length">
    <div v-for="usuario in usuarios">
        <div class="container-fluid well span6">
            <div class="row-fluid">
                <div class="span2" >
                    <img :src= "'../storage/app/users/' + usuario.foto" class="img-circle">
                </div>
                
                <div class="span8">
                    <h3>{{usuario.name}}</h3>
                    <h6>Email: {{usuario.email}}</h6>
                    <h6>Ubication: {{usuario.localidad}}({{usuario.provincia}})</h6>
                    <h6>Old: {{since(usuario.created_at)}}</h6>
                    
                </div>
                
                <div class="span2">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                            Ajustes 
                            <span class="icon-cog icon-white"></span><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li style="cursor: pointer;"><a v-if="usuario.confirmed == 0" v-on:click="verificar(usuario)" :id="usuario.email"><span class="icon-ok"></span> Verificar usuario</a></li>
                            <li style="cursor: pointer;"><a v-on:click.prevent="eliminarUsuario(usuario)"><span class="icon-trash"></span> Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p v-else>No hay usuarios</p>
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
            this.getUsuarios();
        },
        methods:{
            since: function(fecha){
                return moment(fecha).fromNow();
            },
            verificar: function(usuario){
                var urlConfirmar='admin/verificar/' + usuario.email + '/' + usuario.confirmation_code;
                axios.get(urlConfirmar);
            },
            getUsuarios: function(){
                var urlUsuarios='m-admin-usuarios';
                axios.get(urlUsuarios).then(response=>{
                    this.usuarios=response.data
                });
            },
            eliminarUsuario: function(usuario){
                var urlEliminarUsuario='m-borrar-usuarios/' + usuario.id;
                axios.get(urlEliminarUsuario).then(response =>{
                    this.getUsuarios();
                });
            }
        }
    }
</script>