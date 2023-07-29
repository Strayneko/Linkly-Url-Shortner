<?php

namespace App\Services;

use App\Models\User;

class UserService{
    

    public function __construct(private User $user)
    {
    }


    public function storeUser(): ?User
    {}

    public function deleteUser(int $userId, bool $isForceDelete = false): bool
    {}

    public function findOne(int $userId): ?User
    {}
}