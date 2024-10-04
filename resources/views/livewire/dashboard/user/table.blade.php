<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Lista de Usuarios</h5>
            <div class="input-group w-50">
                <input type="text" class="form-control" placeholder="Buscar usuarios..."
                    wire:model.live.debounce.300ms="search">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($this->users as $user)
                            <tr wire:key='user-{{ $user->id }}' wire:click="selectUser({{ $user->id }})"
                                class="{{ $selectedUserId === $user->id ? 'table-primary' : '' }}"
                                style="cursor: pointer;">
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td class="d-flex">
                                    <button class="btn btn-sm btn-secondary me-2"
                                        wire:click="editUser({{ $user->id }})"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"
                                        wire:click="confirmDelete({{ $user->id }})"
                                        wire:confirm='Desea eliminar el usuario?'><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No se encontraron usuarios.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{ $this->users->links() }}
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
