@extends('layouts.template')
@section('titulo')
Catálogo
@endsection

@section('nombre')
Catálogo
@endsection


@section('banner')
@include('componentes.banner')
@endsection

@section('contenido')
@include('componentes.catalogo.categoria')
 
@endsection
