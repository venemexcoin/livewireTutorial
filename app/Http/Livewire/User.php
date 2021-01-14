<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;

class User extends Component
{

    public $users;

    public function render()
    {
        // return <<<'blade'
        //     <div>
        //         <h1>This is User Component</h1>
        //     </div>
        // blade;

        $this->users = Users::all();

        return view('livewire.user');
    }
}
