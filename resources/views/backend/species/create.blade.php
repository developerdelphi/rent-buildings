@extends('layouts.app')

@section('link-right')
    <a href="{{ route('species.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-city"></i></a>
@endsection

@section('title-header')
    <i class="fas fa-city"></i>
    <span class="d-inline mr-2">Nova Espécies de Condomínio</span>
@endsection

@section('content')

    {!! Form::open(['route' => 'species.store', 'method' => 'POST']) !!}
    {!! Form::token() !!}

    {{ Form::pretorInput(
            [
                'name'=>'title',
                'value'=>old('title'),
                'label'=>'Nome',
                'placeholder'=>'Nome da Espécie de Condomínio',
                'required'=>true,
                'autofocus'=>true
            ],
            $errors
        )
    }}
    <hr>
    {{ Form::pretorSubmit('Confirmar') }}
@endsection
