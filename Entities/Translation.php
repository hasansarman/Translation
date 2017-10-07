<?php

namespace Modules\Translation\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use Translatable;

    protected $table = 'translation';
    public $translatedAttributes = ['VALUE'];
    protected $fillable = ['KEY', 'VALUE'];
    protected $primaryKey="ID";





    	const CREATED_AT = 'IDATE';
    	const UPDATED_AT = 'UDATE';

    
}
