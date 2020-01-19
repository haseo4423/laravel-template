<?php

namespace App\Repositories\User;

/**
 * users テーブルの操作インターフェース
 */
interface UserRepositoryInterface
{
    /**
     * データを全て取得する。
     *
     * @return \App\Models\User
     */
    public function findAll();
}
