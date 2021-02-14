

<div>
    @include('livewire.categorias.create')
    @include('livewire.categorias.update')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>All Students
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoriasModal">
                                    Add new Category
                                </button>
                            </h3>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($categorias as $categoria)
                                   <tr>
                                        <td>{{ $categoria->id }}</td>
                                        <td>{{ $categoria->nombrecategoria }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateCategoriasModal" wire:click.prevent="edit({{ $categoria->id }})">Update</button>

                                            <button type="button" class="btn btn-info" data-bs-dismiss="modal" wire:click.prevent="delete({{$categoria->id}})">Delete</button>
                                            
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
