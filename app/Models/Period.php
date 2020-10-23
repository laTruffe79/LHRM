<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Period
 *
 * @property int $id
 * @property int $user_id
 * @property int $validator_id
 * @property int|null $period_type_id
 * @property string|null $informations
 * @property int|null $accepted
 * @property int|null $denied
 * @property string|null $reason_denied
 * @property int|null $read_by_manager
 * @property int|null $read_by_user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Period newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Period query()
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereAccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereDenied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period wherePeriodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereReadByManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereReadByUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereReasonDenied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Period whereValidatorId($value)
 * @mixin \Eloquent
 */
class Period extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodType()
    {
        return $this->hasOne('App\Models\PeriodType','id','period_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function validator()
    {
        return $this->hasOne('App\Model\User', 'id', 'validator_id');
    }




}
