<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class TransferDetail extends Model
{
    use HasFactory;
    protected $table = 'transfer_details';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'transfer_id','requisition_id','machine_id','product_id','batch','quantity','user_production',
    ];

    protected $casts = [
        'id'                            => 'integer',
        'transfer_id'                   => 'integer',
        'requisition_id'                => 'integer',
        'machine_id'                    => 'boolean',
        'product_id'                    => 'string', // MIGRATED: ahora apunta a products.code
        'batch'                         => 'string',
        'quantity'                      => 'integer',
        'user_production'               => 'integer',
    ];

    public function product()
    {
        // MIGRATED: ahora busca por ARTICULO (PK en Softland)
        return $this->hasOne(Product::class, 'ARTICULO', 'product_id');
    }

    public function userproduction()
    {
        return $this->hasOne(User::class, 'id', 'user_production');
    }

    public function transfer()
    {
        return $this->hasOne(Transfer::class, 'id', 'transfer_id');
    }

    public function machine()
    {
        return $this->hasOne(Machine::class, 'U_CODIGO', 'machine_id');
    }

    public function requisition()
    {
        return $this->hasOne(Requisiton::class, 'id', 'requisition_id');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

}
