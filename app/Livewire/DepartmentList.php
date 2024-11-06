<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class DepartmentList extends Component
{
  use WithPagination;
  public $perPage = 10;
  public $search = '';
  public function render()
  {
    $departments = Department::where('id', 'like', '%' . $this->search . '%')
      ->orWhere('name', 'like', '%' . $this->search . '%')
      ->paginate($this->perPage);
    return view(
      'livewire.department-list',
      ['departments' => $departments]
    );
  }
}
