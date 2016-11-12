<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table='link';

    protected $primaryKey = 'id_link';

    public $timestamps=false;

    protected $fillable = [
    	'url_large',
    	'url_short',    	
    ];

    protected $guarded = [
    ];

    //relaciones con otros modelos:
    public function ips()
    {
        return $this->hasMany ('App\Ip', 'id_link', 'id_link');
    }
}
