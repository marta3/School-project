<template>

<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed" style="margin-right: -10px;">
          <h4>
          Control Panel
          <br>
          <small>{{user}} <span class="caret"></span></small>
          </h4>
          </a>
          <div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="perfil"><span class="icon-edit"></span>Editar perfil</a></li>
              
              <li>
                  <a href="administracion_ofertas">
                     <span class="glyphicon glyphicon-share"></span> Ir a administración de ofertas
                  </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="icon-user"></span> Usuarios <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li><router-link :to="{name:'usuariosActivos'}"><span class="icon-ok"></span>Usuarios activos</router-link></li>
              <li><router-link :to="{name:'usuariosTotales'}"><span class="icon-list"></span>Listado de usuarios</router-link></li>
            </ul>
          </div>
        </li>
      </ul>
      </div>
    </div>
  </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">
        <div class="container">
            
                <div class="page-header">
    <h3 style="text-align: center;"><span class="glyphicon glyphicon-th-list"></span> PANEL DE ADMINISTRACIÓN DE USUARIOS</h3>
</div>
    <div class="container">
            <router-view></router-view>
    </div>
            
        </div>
    </div>
</div>



</template>

<script>


    export default {
      props: {
            user: String ,
    },
     methods:{
            sendMessage(){
                this.$emit('messagesent', {
                    user: {
                    name: this.userName
                            }
                });
                
            }

    }
  }
</script>
