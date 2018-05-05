<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public $timestamps = false;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'rules_permissions', 'rule_id');
    }
}
