<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bonus
 *
 * @property int $id
 * @property int $working_terms_id
 * @property int $user_id
 * @property string $name
 * @property int $amount
 * @property string $payment_date
 * @property string|null $informations
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @property-read \App\Models\WorkingTerm $workingTerm
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bonus whereWorkingTermsId($value)
 * @mixin \Eloquent
 */
class Bonus extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function workingTerm(){
        return $this->belongsTo(WorkingTerm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
