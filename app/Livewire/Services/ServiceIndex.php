<?php

namespace App\Livewire\Services;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\Item;
use App\Models\Category;

#[Layout('components.layouts.app')]
class ServiceIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $categoryId = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategoryId()
    {
        $this->resetPage();
    }

    public function deleteItem($id)
    {
        Item::destroy($id);
    }

    public function render()
    {
        $query = Item::with('category')->latest();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->categoryId) {
            $query->where('category_id', $this->categoryId);
        }

        return view('livewire.services.service-index', [
            'items' => $query->paginate(10),
            'categories' => Category::all()
        ]);
    }
}
