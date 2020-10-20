<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersList extends Component
{
    public $users;
    public $search;

    public function render()
    {
        if($this->search==''){
            $this->users = User::with(['activeWorkingTerms','employment','service.company'])
                ->orderBy('users.name','asc')
                ->limit(20)
                ->get();
        }else{
            $search = $this->search;
            $this->users = User::with(['activeWorkingTerms','employment','service','service.company'])
                ->where('users.name','like','%'.$this->search.'%')
                ->orWhere('users.email','like','%'.$this->search.'%')
                ->orWhereHas('service',function($q) use($search){
                    $q->where('name','like',$search.'%');
                })
                ->orWhereHas('service.company',function($q) use($search){
                    $q->where('name','like',$search.'%');
                })
                ->orderBy('users.name','asc')
                ->limit(10)
                ->get();
        }

        return view('livewire.resources.user.users-list',['users' => $this->users]);
    }
}
