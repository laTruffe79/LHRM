<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WorkingTerm
 *
 * @property int $id
 * @property int $user_id
 * @property int $employment_id
 * @property int $service_id
 * @property string|null $valid_untill
 * @property int $active
 * @property int|null $days_off_per_year
 * @property int|null $additional_days_off
 * @property int|null $current_balance_days_off
 * @property int|null $working_time_per_week
 * @property float|null $annual_salary
 * @property float|null $current_total_bonus
 * @property string $currency_code
 * @property string|null $informations
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bonus[] $bonuses
 * @property-read int|null $bonuses_count
 * @property-read \App\Models\Employment|null $employment
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm active()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereAdditionalDaysOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereAnnualSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereCurrentBalanceDaysOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereCurrentTotalBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereDaysOffPerYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereEmploymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereValidUntill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkingTerm whereWorkingTimePerWeek($value)
 * @mixin \Eloquent
 */
class WorkingTerm extends Model
{
    use HasFactory;

    public function scopeActive($query){
        return $query->where('active',1);

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class);
    }

    public function employment()
    {
        return $this->hasOne(Employment::class);
    }
}
