@extends('layouts.app')

@section('title', 'Page Title')

@section('contenido')
<br><br>

<style>

.input-narrow {
    width: 400px; /* Adjust the width as needed */
}

.input-transparent {
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the transparency as needed */
}
</style>

<h1>Crear indicadores de rendimiento del agente</h1>

<form method="POST" action="{{ route('indicador.store') }}">
    @csrf

    <div class="mb-3">
        <label for="id_agente" class="form-label">ID del agente:</label>
        <input type="number" class="form-control input-narrow input-transparent" id="id_agente" name="id_agente" required>
    </div>

    <div class="mb-3">
        <label for="chat_atendidos" class="form-label">Chats atendidos:</label>
        <input type="number" class="form-control input-narrow input-transparent" id="chat_atendidos" name="chat_atendidos" required>
    </div>

    <div class="mb-3">
        <label for="tiempo_promedio_chat" class="form-label">Tiempo promedio de manejo:</label>
        <input type="number" class="form-control input-narrow input-transparent" id="tiempo_promedio_chat" name="tiempo_promedio_chat" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="calificacion_satisfaccion" class="form-label">Calificación de satisfacción del cliente:</label>
        <input type="number" class="form-control input-narrow input-transparent" id="calificacion_satisfaccion" name="calificacion_satisfaccion" step="0.01" max="5" min="1" required>
    </div><br>

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
