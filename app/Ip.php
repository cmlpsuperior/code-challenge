<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    protected $table='ip';

    protected $primaryKey = 'id_ip';

    public $timestamps=false;

    protected $fillable = [
    	'ip_addres',
    	'id_link',    	
    ];

    protected $guarded = [
    ];

    //relaciones con otros modelos:
    public function link()
    {
        return $this->belongTo ('App\Link', 'id_link', 'id_link');
    }
}
