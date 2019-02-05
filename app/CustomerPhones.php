<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CustomerPhones
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CustomerPhones newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CustomerPhones newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CustomerPhones query()
 * @mixin \Eloquent
 */
class CustomerPhones extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_no','display_name'
    ];
    
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'delete_reason','deleted_at'
    ];
    
    /** Return existing phone instance
     * @param int $id
     *
     * @return CustomerPhones|CustomerPhones[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public static function isPhoneExist($id)
    {
        return self::findOrFail($id);
    }
}
