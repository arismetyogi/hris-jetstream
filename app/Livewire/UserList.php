<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserList extends Component
{
  use WithPagination;
  public $search = '';
  public $selectedRole = '';
  public $perPage = 10;

  public $sortBy = 'users.updated_at';
  public $sortDir = 'desc';

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

    $users = User::with('department')
      ->leftJoin('departments', 'departments.id', '=', 'users.department_id')
      ->leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
      ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
      ->where(function ($query) {
        // Apply search conditions for first_name, last_name, and email
        $query
          ->where('first_name', 'like', '%' . $this->search . '%')
          ->orWhere('last_name', 'like', '%' . $this->search . '%')
          ->orWhere('email', 'like', '%' . $this->search . '%');
      })
      ->when($this->selectedRole, function ($query) {
        $query->where('roles.name', $this->selectedRole);
      })
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);

    return view('livewire.user-list', [
      'users' => $users,
    ]);
  }
}
