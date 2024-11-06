<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeList extends Component
{
  use WithPagination;
  public $perPage = 10;
  public $sortBy = 'employee.updated_at';
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
    $employees = Employee::with('department')
      ->with('store')
      ->leftJoin('departments', 'departments.id', '=', 'employees.department_id')
      ->leftJoin('stores', 'stores.id', '=', 'employees.store_id')
      ->where(function ($query) {
        // Apply search conditions for province, urban, subdistrict and email
        $query
          ->where('departments.name', 'like', '%' . $this->search . '%')
          ->orWhere('stores.name', 'like', '%' . $this->search . '%')
          ->orWhere('employees.first_name', 'like', '%' . $this->search . '%')
          ->orWhere('employees.last_name', 'like', '%' . $this->search . '%')
          ->orWhere('employees.sap_id', 'like', '%' . $this->search . '%')
          ->orWhere('employees.npp', 'like', '%' . $this->search . '%')
          ->orWhere('stores.department_id', 'like', '%' . $this->search . '%');
      })
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);
    return view('livewire.employee-list', [
      'employees' => $employees,
    ]);
  }
}
