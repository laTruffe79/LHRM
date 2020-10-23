<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Bonus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string|null $siret
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $postal_code
 * @property string $country
 * @property string|null $business_hour_from
 * @property string|null $business_hour_to
 * @property string|null $email
 * @property string|null $website
 * @property int $head_office
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBusinessHourFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBusinessHourTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHeadOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSiret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
 * @mixin \Eloquent
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
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
	class Employment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Manager
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bonus[] $bonuses
 * @property-read int|null $bonuses_count
 * @property-read \App\Models\Team $currentTeam
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employment[] $employment
 * @property-read int|null $employment_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $service
 * @property-read int|null $service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkingTerm[] $workingTerms
 * @property-read int|null $working_terms_count
 * @method static \Illuminate\Database\Eloquent\Builder|Manager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manager query()
 * @mixin \Eloquent
 */
	class Manager extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Membership
 *
 * @property int $id
 * @property int $team_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 * @mixin \Eloquent
 */
	class Membership extends \Eloquent {}
}

namespace App\Models{
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
	class Period extends \Eloquent {}
}

namespace App\Models{
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
	class PeriodType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $informations
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $Company
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @mixin \Eloquent
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $guid
 * @property string|null $domain
 * @property string|null $hired_at
 * @property string|null $gender
 * @property string|null $birthdate
 * @property string|null $phone_prefix
 * @property string|null $phone_number
 * @property int|null $is_manager
 * @property string|null $informations
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bonus[] $bonuses
 * @property-read int|null $bonuses_count
 * @property-read \App\Models\Team|null $currentTeam
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employment[] $employment
 * @property-read int|null $employment_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $service
 * @property-read int|null $service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkingTerm[] $workingTerms
 * @property-read int|null $working_terms_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInformations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhonePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent implements \LdapRecord\Laravel\Auth\LdapAuthenticatable, \LdapRecord\Laravel\LdapImportable {}
}

namespace App\Models{
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
	class WorkingTerm extends \Eloquent {}
}

