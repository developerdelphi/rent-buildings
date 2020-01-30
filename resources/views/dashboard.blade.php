@extends('layouts.app')

@section('link-right')
    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-light" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="Novo registro">
        <i class="fas fa-plus"></i>
    </a>
@endsection

@section('title-header')
    <i class="fas fa-cogs"></i>
    <span class="d-inline mr-2">Painel Administrativo</span>
@endsection

@section('content')
    Seja bem-vindo!
@endsection

@section('footer')
<div class="row justify-content-center">

</div>
@endsection
