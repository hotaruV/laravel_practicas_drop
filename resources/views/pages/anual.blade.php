@extends('layouts.plantilla')


@section('contenido')
    <section class="form">
        <div class="alerta_validacion">
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
              </div>
            @endif
        </div>
        <form action="" method="post"name="form__d_p_f" id="form__d_p_f" class="form__d_p_f">
            @include('includes.forms.registroform')
            @include('includes.buttons.btnEnvioFormulario')
        </form>
    </section>
@endsection



@section('scripts')
    <script src="https://kit.fontawesome.com/f3cd46a135.js" crossorigin="anonymous"></script>
@endsection
