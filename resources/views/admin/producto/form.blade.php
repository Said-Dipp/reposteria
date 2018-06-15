<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $producto->nombre or ''}}" >
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('costo') ? 'has-error' : ''}}">
    <label for="costo" class="col-md-4 control-label">{{ 'Costo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="costo" type="number" step="0.1" min="0" id="costo" value="{{ $producto->costo or ''}}" >
        {!! $errors->first('costo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="col-md-4 control-label">{{ 'Cantidad' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ $producto->cantidad or ''}}" >
        {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $producto->descripcion or ''}}" >
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('duracion') ? 'has-error' : ''}}">
    <label for="duracion" class="col-md-4 control-label">{{ 'Duracion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="duracion" type="number" id="duracion" value="{{ $producto->duracion or ''}}" >
        {!! $errors->first('duracion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('categoria_producto_id') ? 'has-error' : ''}}">
    <label for="categoria_producto_id" class="col-md-4 control-label">{{ 'Categoria Producto Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="categoria_producto_id" type="number" id="categoria_producto_id" value="{{ $producto->categoria_producto_id or ''}}" >
        {!! $errors->first('categoria_producto_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
