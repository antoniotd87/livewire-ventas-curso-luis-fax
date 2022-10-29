<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoriesComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $search, $image, $name, $selected_id, $pageTitle, $componentName;

    private $pagination = 5;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias';
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $categories = [];
        if (strlen($this->search) > 0)
            $categories = Category::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        else
            $categories = Category::orderby('id', 'desc')->paginate($this->pagination);
        return view('livewire.category.categories-component', compact('categories'))
            ->extends('layouts.app')
            ->section('content');
    }

    public function edit(Category $category)
    {
        $this->name = $category->name;
        $this->selected_id = $category->id;
        $this->emit('show-modal', 'show');
    }
}
