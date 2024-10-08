<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

use App\Models\Users\User;

class Subjects extends Model
{
    const UPDATED_AT = null;


    protected $fillable = [
        'subject'
    ];

    public function users(){
        return $this->belongsToMany('App\Models\Users\User', 'subject_users', 'user_id' ,'subject_id')->withPivot('id'); // リレーションの定義(中間テーブル「subject_users」を使って、リレーションを定義。)
    }
}
