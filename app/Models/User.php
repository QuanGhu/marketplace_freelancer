<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\GenerateUuid;

class User extends Authenticatable
{
    use Notifiable, GenerateUuid;
    
    protected $table = 'users';

    protected $fillable = [
        'username','email','password','name','birthdate',
        'gender','address','state','city','district','sub_district',
        'postal_code','phone','about','is_admin','uuid'
    ];

    public function skills()
    {
        return $this->hasMany(UserSkill::class, 'user_id');
    }

    public function dataTableSource()
    {
        return datatables($this->query())
            ->addIndexColumn()
            ->toJson();
    }
}
