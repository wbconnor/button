<?php
namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

Class Button extends Model
{
    use SoftDeletes;

    protected $table = 'buttons';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'password',
        'created_at',
        'updated_at',
    ];

    /*
     * Query Scopes
     */
    public function scopeDateRange($query, $range)
    {
        if (!empty($range))
        {
            return $query->where('created_at', '>=', $range);
        }
        else
        {
            return $query;
        }
    }

    public function scopeByOrderNumber($query, $orderNumber)
    {
        if (!empty($orderNumber))
        {
            return $query->where('order_number', $orderNumber);
        }
        else
        {
            return $query;
        }
    }

}