<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UserIndex extends Component
{
  use WithPagination;

  public  $search;

  public function updatingSearch()
  {
    $this->resetPage();
  }

  protected $paginationTheme = 'bootstrap';

  public function render()
  {
    $users = User::where('name', 'LIKE', '%' . $this->search . '%')
      ->orWhere('email', 'LIKE', '%' . $this->search . '%')
      ->paginate();

    return view('livewire.admin.user-index', compact('users'));
  }
}