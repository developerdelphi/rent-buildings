@extends('layouts.app')

@section('link-right')
<a href="{{ route('species.create') }}" class="btn btn-sm btn-outline-light" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="Novo registro">
    <i class="fas fa-plus"></i>
</a>
@endsection

@section('title-header')
<i class="fas fa-city"></i>
<span class="d-inline mr-2">Espécies de Condomínio</span>
@endsection

@section('content')
<table class="table table-condensed table-sm table-hover">
    <thead>
        <th class="w-100">Nome</th>
        <th class="text-right pr-2">Ações</th>
    </thead>
    <tbody>
        @forelse($species as $specie)
        <tr>
            <td>{{ $specie->title }}</td>
            <td class="text-right">
                <form action="{{ route('species.destroy', ['species'=> $specie->id]) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <div class="btn-group" role="group">
                        <a href="{{ route('species.show', ['species'=> $specie->id]) }}" class="btn btn-sm btn-outline-secondary" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="Visualizar registro">
                            <i class="fas fa-folder-open"></i>
                        </a>
                        <a href="{{ route('species.edit', ['species'=> $specie->id]) }}" class="btn btn-sm btn-outline-primary" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="Atualizar registro">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <button type="submit" class="btn btn-sm btn-outline-danger" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="Excluir registro">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>
                <h5><span class="badge badge-secondary"> Espécies de Condomínio não localizados. </span></h5>
            </td>
        </tr>
        @endforelse

    </tbody>
</table>
@endsection

@section('footer')
<div class="row justify-content-center">
    {{ $species->links() }}
</div>
@endsection
