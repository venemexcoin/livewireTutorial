<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.users',['users'=>$users]);
    }
}
