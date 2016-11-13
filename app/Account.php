<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Account
 *
 * @property integer $id Identifier
 * @property string $username
 * @property string $sha_pass_hash
 * @property boolean $gmlevel
 * @property string $sessionkey
 * @property string $v
 * @property string $s
 * @property string $email
 * @property string $joindate
 * @property string $last_ip
 * @property integer $failed_logins
 * @property boolean $locked
 * @property string $last_login
 * @property integer $active_realm_id
 * @property boolean $expansion
 * @property integer $mutetime
 * @property boolean $locale
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereShaPassHash($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereGmlevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereSessionkey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereV($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereS($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereJoindate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereLastIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereFailedLogins($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereLocked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereActiveRealmId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereExpansion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereMutetime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereLocale($value)
 * @mixin \Eloquent
 */
class Account extends Model
{
    //
    protected $connection = 'realmd';
    //protected $table = 'account';
    public $timestamps = false;

    protected $fillable = [
        'username', 'sha_pass_hash',
    ];

    public function characters() {
        return $this->hasMany('App\Character', 'account');
    }
}
