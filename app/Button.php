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
}