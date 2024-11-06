<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
  use WithPagination;

  public function mount()
  {
    //
  }
  public $search = '';
  public $perPage = 10;
  public function render()
  {

    $users = User::with('department')
      ->where('first_name', 'like', '%' . $this->search . '%')
      ->orWhere('last_name', 'like', '%' . $this->search . '%')
      ->orWhere('email', 'like', '%' . $this->search . '%')
      ->paginate($this->perPage);

    return view('livewire.user-list', [
      'users' => $users,
    ]);
  }
}
