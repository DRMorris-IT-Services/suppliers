<?php

namespace duncanrmorris\suppliers\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class suppliers_contacts extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_id', 'name', 'email', 'job_role', 'telephone', 'mobile', 'primary',
    ];
}
