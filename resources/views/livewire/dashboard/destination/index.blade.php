<div>
    <!-- Mensajes de Éxito y Error -->
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

    <!-- Botón para Crear Nuevo Destino -->
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-primary" wire:click="openModal">
            <i class="bi bi-plus-circle"></i> Nuevo Destino
        </button>
    </div>

    <!-- Tabla de Destinos -->
    <div class="card">
        <div class="card-header">
            <input type="text" class="form-control" placeholder="Buscar Destinos..."
                wire:model.live.debounce.300ms="search">
        </div>
        <div class="card-body p-0">
            @include('livewire.dashboard.destination.table')
        </div>

        <div class="card-footer">
            {{ $this->destinations->links() }}
        </div>
    </div>

    <!-- Modal de Creación/Edición -->
    @if ($isOpen)
        @include('livewire.dashboard.destination.modal')
    @endif
</div>


