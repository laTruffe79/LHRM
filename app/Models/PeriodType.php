<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PeriodType
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PeriodType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PeriodType extends Model
{
    use HasFactory;



}
