<div class="rd-navbar-wrap rd-navbar-modern-wrap">
    <nav class="rd-navbar rd-navbar-modern " >
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand"><a class="brand" href="{{url('/')}}"><img src="{{asset('images/img/cavalifb.png')}}" alt="" width="196" height="47"/></a></div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              
            
              <ul class="rd-navbar-nav">
               
                    <li class="rd-nav-item {{request()->is('/') ? 'active' : ''}}"><a class="rd-nav-link " href="{{url('/')}}">Inicio</a>
                    </li>
                  
                    <li class="rd-nav-item {{request()->is('catalogo') ? 'active' : ''}}"><a class="rd-nav-link " href="{{route('catalogo')}}">Catálogo</a>
                    </li>
                
                  
                    <li class="rd-nav-item {{request()->is('login') ? 'active' : ''}}"><a class="rd-nav-link" href="{{url('login')}}">Ingresar</a>
                    </li>
               
                
              </ul>
            </div>
 
          </div>

        </div>
      </div>
    </nav>
  </div>
  