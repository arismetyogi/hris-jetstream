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
  public $roles = [];
  public $perPage = 10;

  public $sortBy = 'updated_at';
  public $sortDir = 'desc';
  public function mount()
  {
    // Fetch roles for the filter dropdown
    $this->roles = Role::pluck('name', 'id')->toArray();
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

    $users = User::with('department')
      ->when($this->selectedRole, function ($query) {
        // Apply the role filter
        // @dump($this->selectedRole);
        $query->whereHas('roles', function ($roleQuery) {
          $roleQuery->where('name', $this->selectedRole);
        });
      })
      ->where('first_name', 'like', '%' . $this->search . '%')
      ->orWhere('last_name', 'like', '%' . $this->search . '%')
      ->orWhere('email', 'like', '%' . $this->search . '%')
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);

    return view('livewire.user-list', [
      'users' => $users,
    ]);
  }
}
