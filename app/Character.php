<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Character
 *
 * @property integer $guid Global Unique Identifier
 * @property integer $account Account Identifier
 * @property string $name
 * @property boolean $race
 * @property boolean $class
 * @property boolean $gender
 * @property boolean $level
 * @property integer $xp
 * @property integer $money
 * @property integer $playerBytes
 * @property integer $playerBytes2
 * @property integer $playerFlags
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property integer $map Map Identifier
 * @property boolean $dungeon_difficulty
 * @property float $orientation
 * @property string $taximask
 * @property boolean $online
 * @property boolean $cinematic
 * @property integer $totaltime
 * @property integer $leveltime
 * @property integer $logout_time
 * @property boolean $is_logout_resting
 * @property float $rest_bonus
 * @property integer $resettalents_cost
 * @property integer $resettalents_time
 * @property float $trans_x
 * @property float $trans_y
 * @property float $trans_z
 * @property float $trans_o
 * @property integer $transguid
 * @property integer $extra_flags
 * @property boolean $stable_slots
 * @property integer $at_login
 * @property integer $zone
 * @property integer $death_expire_time
 * @property string $taxi_path
 * @property integer $arenaPoints
 * @property integer $totalHonorPoints
 * @property integer $todayHonorPoints
 * @property integer $yesterdayHonorPoints
 * @property integer $totalKills
 * @property integer $todayKills
 * @property integer $yesterdayKills
 * @property integer $chosenTitle
 * @property integer $watchedFaction
 * @property integer $drunk
 * @property integer $health
 * @property integer $power1
 * @property integer $power2
 * @property integer $power3
 * @property integer $power4
 * @property integer $power5
 * @property string $exploredZones
 * @property string $equipmentCache
 * @property integer $ammoId
 * @property string $knownTitles
 * @property boolean $actionBars
 * @property integer $deleteInfos_Account
 * @property string $deleteInfos_Name
 * @property integer $deleteDate
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereAccount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereRace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereXp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereMoney($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePlayerBytes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePlayerBytes2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePlayerFlags($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePositionX($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePositionY($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePositionZ($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereMap($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDungeonDifficulty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereOrientation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTaximask($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereOnline($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereCinematic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTotaltime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereLeveltime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereLogoutTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereIsLogoutResting($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereRestBonus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereResettalentsCost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereResettalentsTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTransX($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTransY($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTransZ($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTransO($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTransguid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereExtraFlags($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereStableSlots($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereAtLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereZone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDeathExpireTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTaxiPath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereArenaPoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTotalHonorPoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTodayHonorPoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereYesterdayHonorPoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTotalKills($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereTodayKills($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereYesterdayKills($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereChosenTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereWatchedFaction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDrunk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereHealth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePower1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePower2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePower3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePower4($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character wherePower5($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereExploredZones($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereEquipmentCache($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereAmmoId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereKnownTitles($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereActionBars($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDeleteInfosAccount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDeleteInfosName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Character whereDeleteDate($value)
 * @mixin \Eloquent
 */
class Character extends Model
{
    protected $connection = 'chars';
	protected $table = 'characters';
}
