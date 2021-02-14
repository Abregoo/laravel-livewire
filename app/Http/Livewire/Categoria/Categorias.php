<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class Categorias extends Component
{


    public $ids;
    public $nombrecategoria;

    public function resetInputFields(){
        $this->nombrecategoria = '';
    }

    public function store () {
        $validateData = $this->validate([
            'nombrecategoria' => 'required',
        ]);

        Categoria::create($validateData);
        session()->flash('message', 'Categoria Created Successfully');
       // $this->resetInputFields();
        $this->emit('categoriaAdded');
    }


    public function edit($id)
    {
        $categoria = Categoria::where('id', $id)->first();
        $this->ids = $categoria->id;
        $this->nombrecategoria = $categoria->nombrecategoria;
    }

    public function update() {
        $this->validate([
            'nombrecategoria' => 'required',
        ]);

        if($this->ids)
        {
            $categoria = Categoria::find($this->ids);
            $categoria->update([
                'nombrecategoria' => $this->nombrecategoria,
            ]);
            session()->flash('message', 'Categoria update Successfully');
            $this->resetInputFields();
            $this->emit('categoriaUpdate');

        }

    }

    public function delete($id) {
        if($id) {
            Categoria::where('id', $id)->delete();
            session()->flash('message', 'Categoria Deleted Successfully');
            
        }
    }

    public function render()
    {

        $categoria = Categoria::orderBy('id', 'DESC')->get();

        return view('livewire.categorias.categoria', ['categorias'=>$categoria]);
    }
}
