<?php

namespace App\Livewire\UserManagement;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class UsersList extends Component
{
    public function render() : View
    {
        $users = User::paginate(25);

        return view('livewire.user-management.users-list', [
            'users' => $users,
        ])->layout('layouts.admin');
    }
}
