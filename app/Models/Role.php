<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
  protected $table = 'roles';

  public function users(): BelongsToMany
  {
    return $this->belongsToMany(User::class);
  }
  public function permissions(): BelongsToMany
  {
    return $this->belongsToMany(User::class, 'role_has_permissions', 'role_id', 'permission_id');
  }
}
