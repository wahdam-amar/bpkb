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
 * App\Models\Menu
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Menu[] $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MenuItem
 *
 * @property int $id
 * @property int $menu_id
 * @property int $child_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereChildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem whereUpdatedAt($value)
 */
	class MenuItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Person
 *
 * @property int $id
 * @property string $name
 * @property string|null $nickname
 * @property string|null $job
 * @property string|null $birthplace
 * @property string|null $birthdate
 * @property string $gender
 * @property string|null $address
 * @property string $phone
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Database\Factories\PersonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereBirthplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereUpdatedAt($value)
 */
	class Person extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Template
 *
 * @property int $id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template query()
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereUpdatedAt($value)
 */
	class Template extends \Eloquent {}
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
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vehicle
 *
 * @property int $id
 * @property int $person_id
 * @property string $name
 * @property string $no
 * @property string $brand
 * @property string $type
 * @property string $jenis
 * @property string $made_date
 * @property string $effective_date
 * @property string $plate
 * @property string $engine
 * @property string $frame
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Person $person
 * @method static \Database\Factories\VehicleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereEngine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereFrame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereMadeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle wherePersonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle wherePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
 */
	class Vehicle extends \Eloquent {}
}

