<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class DepartmentList extends Component
{
  use WithPagination;
  public $perPage = 10;
  public $sortBy = 'name';
  public $sortDir = 'DESC';
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
    $departments = Department::where('id', 'like', '%' . $this->search . '%')
      ->orWhere('name', 'like', '%' . $this->search . '%')
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);
    return view(
      'livewire.department-list',
      ['departments' => $departments]
    );
  }
}
