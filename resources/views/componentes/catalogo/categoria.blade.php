<section class="section section-md section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-40 justify-content-center">
      
        <div class="col-md-10 col-lg-10 col-xl-10">
         <!--  <h2>Recetas</h2> -->
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-vertical tabs-line" id="tabs-4">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Anillos</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Aretes</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Brazaletes</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-4" data-toggle="tab">Gafas</a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">
               <div class="row">
                @foreach ($catAnillos as $item)    
           
   
                <!-------------------------------------------1er producto--------------------------------->
                <div class="col-sm-6 col-md-12 col-lg-4">
                <div class="oh-desktop">
               
                    <article class="product product-2 box-ordered-item wow fadeIn" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                        <div class="product-figure"><img src="images/img/{{$item->image}}" alt="" width="270" height="280"/>
                        @if (Route::has('login'))
                        @auth
                        <div class="product-button"><a class="button button-md button-white button-ujarak" href="ingresar">Agregar al carrito</a></div>
                        @endauth
                        
                        
    
                        @endif
                            
                        <div class="product-button"><a class="button button-md button-white button-ujarak" href="{{route('detalle.show', $item->id)}}">Ver Detalle</a></div>
                        </div>
                 {{--        href="{{url('/usuario/'.$usuario->id.'/edit')}}" --}}
                        </div>
                        <div class="unit-body">
                        <h6 class="product-title"><a href="{{route('detalle.show', $item->id)}}">{{$item->nombre}}</a></h6>
                        @if (Route::has('login'))
                        @auth
                        <h6 class="product-title">Precio: ${{$item->precio}}</h6>
                        @endauth
                        @endif
                    
                        </div>
                    </div>
                    </article>
                
                </div>
                </div>
            
                @endforeach
              </div>
              </div>
             
               
             
            
              <div class="tab-pane fade" id="tabs-4-2">
                <div class="row">
                  @foreach ($catAretes as $item)    
             
     
                  <!-------------------------------------------1er producto--------------------------------->
                  <div class="col-sm-6 col-md-12 col-lg-4">
                  <div class="oh-desktop">
                 
                      <article class="product product-2 box-ordered-item wow fadeIn" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                          <div class="unit-left">
                          <div class="product-figure"><img src="images/img/{{$item->image}}" alt="" width="270" height="280"/>
                          @if (Route::has('login'))
                          @auth
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="ingresar">Agregar al carrito</a></div>
                          @endauth
                          
                          
      
                          @endif
                              
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="{{route('detalle.show', $item->id)}}">Ver Detalle</a></div>
                          </div>
                   {{--        href="{{url('/usuario/'.$usuario->id.'/edit')}}" --}}
                          </div>
                          <div class="unit-body">
                          <h6 class="product-title"><a href="{{route('detalle.show', $item->id)}}">{{$item->nombre}}</a></h6>
                          @if (Route::has('login'))
                          @auth
                          <h6 class="product-title">Precio: ${{$item->precio}}</h6>
                          @endauth
                          @endif
                      
                          </div>
                      </div>
                      </article>
                  
                  </div>
                  </div>
              
                  @endforeach
                </div>

              </div>
              <div class="tab-pane fade" id="tabs-4-3">
                <div class="row">
                  @foreach ($catBraza as $item)    
             
     
                  <!-------------------------------------------1er producto--------------------------------->
                  <div class="col-sm-6 col-md-12 col-lg-4">
                  <div class="oh-desktop">
                 
                      <article class="product product-2 box-ordered-item wow fadeIn" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                          <div class="unit-left">
                          <div class="product-figure"><img src="images/img/{{$item->image}}" alt="" width="270" height="280"/>
                          @if (Route::has('login'))
                          @auth
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="ingresar">Agregar al carrito</a></div>
                          @endauth
                          
                          
      
                          @endif
                              
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="{{route('detalle.show', $item->id)}}">Ver Detalle</a></div>
                          </div>
                   {{--        href="{{url('/usuario/'.$usuario->id.'/edit')}}" --}}
                          </div>
                          <div class="unit-body">
                          <h6 class="product-title"><a href="{{route('detalle.show', $item->id)}}">{{$item->nombre}}</a></h6>
                          @if (Route::has('login'))
                          @auth
                          <h6 class="product-title">Precio: ${{$item->precio}}</h6>
                          @endauth
                          @endif
                      
                          </div>
                      </div>
                      </article>
                  
                  </div>
                  </div>
              
                  @endforeach
                </div>
              </div>

              <div class="tab-pane fade" id="tabs-4-4">
                <div class="row">
                  @foreach ($catGafas as $item)    
             
     
                  <!-------------------------------------------1er producto--------------------------------->
                  <div class="col-sm-6 col-md-12 col-lg-4">
                  <div class="oh-desktop">
                 
                      <article class="product product-2 box-ordered-item wow fadeIn" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                          <div class="unit-left">
                          <div class="product-figure"><img src="images/img/{{$item->image}}" alt="" width="270" height="280"/>
                          @if (Route::has('login'))
                          @auth
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="ingresar">Agregar al carrito</a></div>
                          @endauth
                          
                          
      
                          @endif
                              
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="{{route('detalle.show', $item->id)}}">Ver Detalle</a></div>
                          </div>
                   {{--        href="{{url('/usuario/'.$usuario->id.'/edit')}}" --}}
                          </div>
                          <div class="unit-body">
                          <h6 class="product-title"><a href="{{route('detalle.show', $item->id)}}">{{$item->nombre}}</a></h6>
                          @if (Route::has('login'))
                          @auth
                          <h6 class="product-title">Precio: ${{$item->precio}}</h6>
                          @endauth
                          @endif
                      
                          </div>
                      </div>
                      </article>
                  
                  </div>
                  </div>
              
                  @endforeach
                </div>
              </div>





            </div>
          </div>
        </div>
      </div>
    </div>
  </section>