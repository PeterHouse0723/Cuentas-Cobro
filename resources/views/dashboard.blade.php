@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <h2>Bienvenido {{ Auth::user()->nombre }}</h2>
                    
                    @php
                        $organizacionActual = session('organizacion_actual');
                    @endphp

                    @if($organizacionActual)
                        <p>Organización actual: {{ \App\Models\Organizacion::find($organizacionActual)->nombre ?? 'No definida' }}</p>
                    @else
                        <p>No has seleccionado una organización</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection