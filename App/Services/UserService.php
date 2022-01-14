<?php
namespace App\Services;
use App\Models\User;

class UserService extends BaseService
{
    public $users;
    public function __construct()
    {
        $this->filename = "user";
        $this->users = $this->loadData();
    }

    public function getAll()
    {
        return $this->users;
    }

}