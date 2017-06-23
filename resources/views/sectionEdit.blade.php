@extends('layouts.app')

@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Editar Sección</h1>
            
            @foreach ($listSection as $section)

            <form action="{{ url('/SeccionesAdmin/Editar/' . $section->ID_SECCION . '/Edit') }}" method="GET">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input value="{{ $section->NOMBRE }}" name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="name">Encargado(a)</label>
                    <select name="inCharge" class="form-control">
                        @foreach ($listUser as $user)
                            @if ($section->id == $user->id)
                                <option value="{{$user->id}}" selected>{{$user->name}}</option>
                            @else
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Editar</button>
            </form>

            @endforeach
        </div>
    </div>
</div>
@endsection