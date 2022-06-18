<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $admin_id
 * @property int    $user_id
 * @property int    $admin_contact
 * @property string $admin_password
 * @property string $admin_email
 * @property string $admin_fname
 * @property string $admin_lname
 * @property string $admin_username
 * @property string $username
 * @property string $password
 */
class Administrator extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'administrator';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'admin_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'admin_password', 'admin_email', 'admin_contact', 'admin_fname', 'admin_lname', 'admin_username', 'username', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'admin_id' => 'int', 'user_id' => 'int', 'admin_password' => 'string', 'admin_email' => 'string', 'admin_contact' => 'int', 'admin_fname' => 'string', 'admin_lname' => 'string', 'admin_username' => 'string', 'username' => 'string', 'password' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
