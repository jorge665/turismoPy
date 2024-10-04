<div>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Detalles del Usuario</h5>
        </div>
        <div class="card-body">
            @if($selectedUser)
                <div class="mb-3">
                    <strong>Nombre:</strong> {{ $selectedUser->name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $selectedUser->email }}
                </div>
                <div class="mb-3">
                    <strong>Rol:</strong>
                    <select class="form-select" wire:model="selectedRole">
                        @foreach($roles as $role)
                            <option wire:key='rol-{{$role->id}}' value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" wire:click="save">Guardar Cambios</button>
                </div>
            @else
                <p class="text-muted">Selecciona un usuario de la tabla para ver sus detalles.</p>
            @endif
        </div>
    </div>

    <!-- Mensaje de Éxito -->
    @if($successMessage)
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ $successMessage }}
            <button type="button" class="btn-close" wire:click="$set('successMessage', '')" aria-label="Cerrar"></button>
        </div>
    @endif

    <!-- Mensaje de Error -->
    @if($errorMessage)
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ $errorMessage }}
            <button type="button" class="btn-close" wire:click="$set('errorMessage', '')" aria-label="Cerrar"></button>
        </div>
    @endif
</div>

