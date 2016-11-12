<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Realm
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property integer $port
 * @property boolean $icon
 * @property boolean $realmflags Supported masks: 0x1 (invalid, not show in realm list), 0x2 (offline, set by mangosd), 0x4 (show version and build), 0x20 (new players), 0x40 (recommended)
 * @property boolean $timezone
 * @property boolean $allowedSecurityLevel
 * @property float $population
 * @property string $realmbuilds
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm wherePort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereRealmflags($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereTimezone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereAllowedSecurityLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm wherePopulation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Realm whereRealmbuilds($value)
 * @mixin \Eloquent
 */
class Realm extends Model
{
    //
    protected $connection = 'realmd';
    protected $table = 'realmlist';
}
