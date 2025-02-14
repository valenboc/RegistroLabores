<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card form-container">
        <div class="card-body">
            <h4 class="text-center mb-4">Formulario de Registro</h4>
            <form action="{{ $action }}" method="POST">
                @csrf
                @if(isset($method)) @method($method) @endif

                <div class="mb-3">
                    <label class="form-label">Labor Realizada</label>
                    <select name="labor_realizada" class="form-control">
                        <option value="">Seleccione una opción</option>
                        <option value="Labor1" {{ old('labor_realizada', $labor->labor_realizada ?? '') == 'Labor1' ? 'selected' : '' }}>Labor1</option>
                        <option value="Labor2" {{ old('labor_realizada', $labor->labor_realizada ?? '') == 'Labor2' ? 'selected' : '' }}>Labor2</option>
                        <option value="Labor3" {{ old('labor_realizada', $labor->labor_realizada ?? '') == 'Labor3' ? 'selected' : '' }}>Labor3</option>
                    </select>
                    @error('labor_realizada') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha</label>
                    <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $labor->fecha ?? '') }}">
                    @error('fecha') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" value="{{ old('cantidad', $labor->cantidad ?? '') }}">
                    @error('cantidad') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tarifa</label>
                    <input type="number" step="0.01" name="tarifa" class="form-control" value="{{ old('tarifa', $labor->tarifa ?? '') }}">
                    @error('tarifa') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Empleado</label>
                    <input type="text" name="empleado" class="form-control" value="{{ old('empleado', $labor->empleado ?? '') }}">
                    @error('empleado') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Lote</label>
                    <select name="lote" class="form-control">
                        <option value="">Seleccione una opción</option>
                        <option value="Lote1" {{ old('lote', $labor->lote ?? '') == 'Lote1' ? 'selected' : '' }}>Lote1</option>
                        <option value="Lote2" {{ old('lote', $labor->lote ?? '') == 'Lote2' ? 'selected' : '' }}>Lote2</option>
                        <option value="Lote3" {{ old('lote', $labor->lote ?? '') == 'Lote3' ? 'selected' : '' }}>Lote3</option>
                    </select>
                    @error('lote') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">{{ $buttonText }}</button>
            </form>
        </div>
    </div>
</div>
