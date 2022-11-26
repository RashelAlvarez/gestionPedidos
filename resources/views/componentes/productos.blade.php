<section class="section section-md bg-default">
    <div class="container">
        <div class="oh">
            <h2 class="wow slideInUp" data-wow-delay="0s">Más destacados</h2><!---LANDING PAGE---->
        </div>
        <div class="row">
        
            <!-------------------------------------------- Productos----------------------------------------->
            
            @foreach ($productos as $item)    
           
                
            <!-------------------------------------------1er producto--------------------------------->
            <div class="col-sm-6 col-md-12 col-lg-4">
            <div class="oh-desktop">
           
                <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
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
</section>

<section class="section section-md section-first bg-default">
    <div class="container">
      <div class="row row-30 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4 wow fadeIn">
         <img src=" {{asset('images/img/deliveryfast.gif')}}" alt="">
       
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4 align-self-center wow fadeInRight">
                <h4> Ahora no tienes excusas, se realizan envios a todo la ciudad de Valencia.</h4>
                 <p>  Pide lo que quieras. Descubre el catalogo ¡y recibe tu pedido donde estés!
                 </p>
        </div>
     
      </div>
    </div>
  </section>