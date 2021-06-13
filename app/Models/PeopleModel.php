<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use OwenIt\Auditing\Contracts\Auditable;

class PeopleModel extends Model 
//implements Auditable    
{
    //use \OwenIt\Auditing\Auditable;
    protected $table = 'people'; 
    public $timestamps = false; 

    protected $fillable = [
        'name',
        'last_name',
        'id_number',
        'gender',
        'birth_date',
        'city',
        'contract_start_date',
        'contract_finish_date',
        'id_position',
    ];
}
