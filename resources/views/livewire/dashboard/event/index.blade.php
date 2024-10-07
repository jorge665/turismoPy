<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
            <i class="bi bi-plus-circle"></i> Nuevo Evento
        </button>
    </div>

    <!-- Tabla de Destinos -->
    @include('livewire.dashboard.event.table')

    <!-- Modal de Creación/Edición -->
    @if ($isOpen)
        @include('livewire.dashboard.event.modal')
    @endif
</div>
