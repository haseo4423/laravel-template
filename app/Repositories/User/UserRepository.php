<?php

namespace App\Repositories\User;

use App\Models\User;
use Log;

/**
 * users テーブルの操作実態クラス
 *
 * User モデルクラスを使用して、users テーブルの CRUD 操作を行う。
 */
class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
     * コンストラクタ
     *
     * @param App\Models\User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 全データ取得
     *
     * データを全て取得する。
     *
     * @return \App\Models\User
     */
    public function findAll()
    {
        Log::debug('START');
        Log::debug('END');
        return $this->user->all();
    }
}
