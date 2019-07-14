
<body>

<nav class="navmenu">
    <ul class="menu">
        <li class="p"><a href="usuarios"><span class="glyphicon glyphicon-list-alt"></span> Curriculm Vitae</a></li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01">
          <li class="p"><span class="glyphicon glyphicon-briefcase"></span> Ofertas </li>
          </a>
          <div class="collapse" id="toggleDemo" >
            <ul >
              <form method="get" action="ofertas">
              {{ csrf_field() }}
                @forelse($sectores as $sector)
                  <label><input type="checkbox" name="sectores[]" value="{{$sector->nombre}}">{{$sector->nombre}}</label>
                  <br>
                @empty
                  <li><a href="#">Vacio</a></li>
                @endforelse  
              <button class="btn btn-info" type="submit">Buscar</button>
              </form>
            </ul>
          </div>
        </li>
    </ul>
</nav>

</body>

