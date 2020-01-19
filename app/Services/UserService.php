<?php

namespace App\Services;

use Log;
use App\Repositories\User\UserRepositoryInterface;

class UserService
{
    /**
     * コンストラクタ
     */
    public function __construct(
        UserRepositoryInterface $userRepositoryInterface
    ) {
        $this->userRepository = $userRepositoryInterface;
    }

    /**
     * 設定情報取得 (表示設定)
     *
     * @return json
     */
    public function getUsers()
    {
        Log::debug('START');

        $users = $this->userRepository->findAll();

        $result = $users;

        Log::debug('END');

        return $result;
    }
}
