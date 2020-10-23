<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employment
 *
 * @property int $id
 * @property string $name
 * @property string $informations
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkingTerm[] $workingTerms
 * @property-read int|null $working_terms_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employment extends Model
{
    use HasFactory;

    public function workingTerms()
    {
        return $this->belongsToMany(WorkingTerm::class);
    }

}
