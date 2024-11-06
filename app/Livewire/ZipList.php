<?php

namespace App\Livewire;

use App\Models\Zip;
use Livewire\Component;
use Livewire\WithPagination;

class ZipList extends Component
{
  use WithPagination;
  public $search = '';
  public $perPage = 25;

  public $sortBy = 'provinces.name';
  public $sortDir = 'asc';

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
    $zips = Zip::with('province')
      ->leftJoin('provinces', 'provinces.code', '=', 'zips.province_code')
      ->where(function ($query) {
        // Apply search conditions for province, urban, subdistrict and email
        $query
          ->where('urban', 'like', '%' . $this->search . '%')
          ->orWhere('subdistrict', 'like', '%' . $this->search . '%')
          ->orWhere('city', 'like', '%' . $this->search . '%')
          ->orWhere('zipcode', 'like', '%' . $this->search . '%')
          ->orWhere('provinces.name', 'like', '%' . $this->search . '%');
      })
      ->orderBy($this->sortBy, $this->sortDir)
      ->paginate($this->perPage);
    return view('livewire.zip-list', [
      'zips' => $zips,
    ]);
  }
}
