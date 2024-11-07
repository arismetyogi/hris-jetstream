<?php

namespace App\Livewire;

use App\Models\Payroll;
use Livewire\Component;
use Livewire\WithPagination;

class PayrollList extends Component
{
  use WithPagination;
  public $search = '';
  public $perPage = 10;

  public $sortBy = 'payrolls.updated_at';
  public $sortDir = 'desc';

  // reset to page 1 when searching
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
    $payrolls = Payroll::with(['employee', 'department', 'store'])
      ->leftJoin('employees', 'employees.id', '=', 'payrolls.employee_id')
      ->where(function ($query) {
        // Apply search conditions for first_name, last_name, and email
        $query
          ->where('employees.first_name', 'like', '%' . $this->search . '%')
          ->orWhere('employees.last_name', 'like', '%' . $this->search . '%')
          ->orWhere('nik', 'like', '%' . $this->search . '%')
          ->orWhere('sap_id', 'like', '%' . $this->search . '%')
          ->orWhere('npp', 'like', '%' . $this->search . '%');
      })
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);

    return view('livewire.payroll-list', [
      'payrolls' => $payrolls,
    ]);
  }
}
