<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use SoftDeletes;
    
    protected $table = 'customer';
    //primary key = "id"
    protected $primaryKey = 'customer_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
        'store_id',
        'first_name', 
        'last_name',
        'email',
        'address_id',   
        'active' 
    ];
}