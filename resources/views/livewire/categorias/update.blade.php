<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateCategoriasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form>
                <input type="hidden" name="id" wire:model="ids">
              <div class="mb-3">
                <label for="nombrecategoria" class="col-form-label">Categoria:</label>
                <input type="text" class="form-control" name="nombrecategoria" wire:model="nombrecategoria">
                @error('nombrecategoria') <span class="text-danger">{{$message}}</span> @enderror
              </div>
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update</button>
        </div>
      </div>
    </div>
  </div>