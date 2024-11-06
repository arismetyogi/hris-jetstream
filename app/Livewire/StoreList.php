<?php

namespace App\Livewire;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class StoreList extends Component
{
  use WithPagination;
  public $perPage = 10;
  public $sortBy = 'stores.name';
  public $sortDir = 'ASC';
  public $search = '';
  public function updatedSearch()
  {
    $this->resetPage();
  }

  public function setSortBy($sortByCol)
  {
    // $this->sortDir = 'ASC';
    if ($this->sortBy = $sortByCol) {
      $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
    }
    $this->sortBy = $sortByCol;
  }
  public function render()
  {
    $stores = Store::select(
      'outlet_sap_id',
      'stores.name',
      'department_id',
      'store_type',
      'operational_date',
      'address',
      'latitude',
      'longitude',
      'phone'
    )->with('department')
      ->leftJoin('departments', 'departments.id', '=', 'stores.department_id')
      ->where(function ($query) {
        // Apply search conditions for province, urban, subdistrict and email
        $query
          ->where('departments.name', 'like', '%' . $this->search . '%')
          ->orWhere('stores.name', 'like', '%' . $this->search . '%')
          ->orWhere('stores.outlet_sap_id', 'like', '%' . $this->search . '%')
          ->orWhere('stores.department_id', 'like', '%' . $this->search . '%');
      })
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);
    return view('livewire.store-list', [
      'stores' => $stores,
    ]);
  }
}
