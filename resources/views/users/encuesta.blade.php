@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Evaluando a {{$usuarios->name}}</div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('encuesta.store', $usuarios->id )}}">
                            {{csrf_field()}}
                            @forelse($preguntas as $pregunta)
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>¿{{$pregunta->titulo}}?</h3>
                                        <?php $i = 5; ?>
                                        @forelse($pregunta->respuestas()->get() as $respuesta)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                       name="{{'respuesta_pregunta'.$respuesta->pregunta_id}}"
                                                       id="{{'respuesta_pregunta'.$respuesta->pregunta_id}}"
                                                       value="{{$i.'-'.$pregunta->id}}"
                                                       checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    {{$respuesta->titulo}}
                                                </label>
                                            </div>
                                            <?php $i--; ?>
                                        @empty
                                            <h3>No hay repuestas asociadas a esta pregunta</h3>
                                        @endforelse
                                    </div>
                                </div>
                            @empty
                                <h2>No hay preguntas para responder</h2>
                            @endforelse
                            <br><br>
                            <button type="submit" class="btn-primary btn-microsoft">Evaluar</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

