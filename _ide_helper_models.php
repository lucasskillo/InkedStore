<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Account
 *
 * @property int $id
 * @property string $name
 * @property float $balance
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereBalance($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereUpdatedAt($value)
 */
	class Account extends \Eloquent {}
}

namespace App{
/**
 * App\Client
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $taxid
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereTaxid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace App{
/**
 * App\Item
 *
 * @property int $id
 * @property string $name
 * @property float $avgprice
 * @property int $quantity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereAvgprice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App{
/**
 * App\Provider
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $taxid
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereTaxid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Provider whereUpdatedAt($value)
 */
	class Provider extends \Eloquent {}
}

namespace App{
/**
 * App\Purchase
 *
 * @property int $id
 * @property int $provider_id
 * @property int $account_id
 * @property string $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereAccountId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereProviderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Purchase whereUpdatedAt($value)
 */
	class Purchase extends \Eloquent {}
}

namespace App{
/**
 * App\Sale
 *
 * @property int $id
 * @property int $client_id
 * @property int $account_id
 * @property string $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereAccountId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereClientId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale whereUpdatedAt($value)
 */
	class Sale extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

