<?php

namespace Modules\Logs\Models;

use Nova\Database\ORM\Model;


class LogGroup extends Model
{
    protected $table = 'log_groups';

    protected $primaryKey = 'id';

    protected $fillable = array('name', 'slug', 'description');


    public function logs()
    {
        return $this->hasMany('Modules\Logs\Models\Log', 'group_id');
    }
}
