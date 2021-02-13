<x-app-layout>
    <div class="container">
        <h1>Formulario de contacto</h1>
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'contactanos.store', 'autocomplete'=>'off']) !!}                
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Su Nombre']) !!}
                        @error('nombre')
                            <p><strong>{{ message }}</strong></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('correo', 'Correo:') !!}
                        {!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Su correo electronico']) !!}
                        @error('nombre')
                            <p><strong>{{ message }}</strong></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('mensaje', 'Mensaje:') !!}
                        {!! Form::textarea('mensaje', null, ['class' => 'form-control']) !!}
                        @error('nombre')
                            <p><strong>{{ message }}</strong></p>
                        @enderror
                    </div>
                    {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        @if (session('info'))
            <script>
                alert("{{ session('info') }}");
            </script>
        @endif
    </div>
</x-app-layout>