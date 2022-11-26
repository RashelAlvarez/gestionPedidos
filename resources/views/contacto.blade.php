
@extends('layouts.template')
@section('titulo')
Contacto
@endsection

@section('nombre')
Contacto
@endsection


@section('banner')
@include('componentes.banner')
@endsection
<style>
    .error{
 
     color: #f5543f;
     
}

  </style>
@section('contenido')
{{-- @include('componentes.contacto.info') --}}
  <!-- Contact information-->
  <section class="section section-md section-first bg-default">
    <div class="container">
      <div class="row row-30 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="tel:#">+58 0424-447-3798</a></p>
             
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-link52"></div>
              <div class="box-contacts-decor"></div>
              <p class="box-contacts-link"><a href="#">https://www.linkedin.com/in/rashel-alvarez-9951a0190/</a></p>
            </div>
          </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
          <article class="box-contacts">
            <div class="box-contacts-body">
              <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
              <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="mailto:#">rashelalvarez21@gmail.com</a></p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>


@endsection