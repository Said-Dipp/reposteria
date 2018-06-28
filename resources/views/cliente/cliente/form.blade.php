<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $cliente->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="col-md-4 control-label">{{ 'Direccion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ $cliente->direccion or ''}}" >
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="text" id="telefono" value="{{ $cliente->telefono or ''}}" >
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    <label for="celular" class="col-md-4 control-label">{{ 'Celular' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="celular" type="text" id="celular" value="{{ $cliente->celular or ''}}" >
        {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('num_aux') ? 'has-error' : ''}}">
    <label for="num_aux" class="col-md-4 control-label">{{ 'Numero auxiliar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="num_aux" type="text" id="num_aux" value="{{ $cliente->num_aux or ''}}" >
        {!! $errors->first('num_aux', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $cliente->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="password" id="password" value="{{ $cliente->password or ''}}" >
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="col-md-4 control-label">{{ 'Tipo' }}</label>
    <div class="col-md-6">
        <select class="form-control" name="tipo" id="tipo" value="{{ $cliente->tipo or ''}}" >
            <option value="frecuente">Frecuente</option>
            <option value="comun">Comun</option>
        </select>
        {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>





