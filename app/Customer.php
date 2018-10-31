<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    protected $fillable = [
    	'store_id','first_name','last_name','address_id','email','active'
    ];
    public function store()
    {
    	return $this->hasOne(\App\Store::class,'store_id','store_id');
    }
}