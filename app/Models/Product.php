<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int|null $sku
 * @property string|null $product_name
 * @property int|null $weight
 * @property string|null $point_1
 * @property string|null $point_2
 * @property string|null $point_3
 * @property string|null $image
 * @property string|null $colour
 * @property string|null $material
 * @property string|null $range
 * @property string|null $size
 * @property string|null $type
 * @property bool|null $overn_safe
 * @property bool|null $dishwasher_safe
 * @property bool|null $wash_by_hand
 * @property int|null $guarantee_period
 * @property int|null $proce
 * @property int|null $stock
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	public $timestamps = false;

	protected static function booted(): void
    {
        static::created(fn (Product $dish) => self::clearCache());
        static::updated(fn (Product $dish) => self::clearCache());
        static::deleted(fn (Product $dish) => self::clearCache());
    }

	protected $casts = [
		'sku' => 'int',
		'weight' => 'int',
		'overn_safe' => 'bool',
		'dishwasher_safe' => 'bool',
		'wash_by_hand' => 'bool',
		'guarantee_period' => 'int',
		'proce' => 'int',
		'stock' => 'int'
	];

	protected $fillable = [
		'sku',
		'product_name',
		'weight',
		'point_1',
		'point_2',
		'point_3',
		'image',
		'colour',
		'material',
		'range',
		'size',
		'type',
		'overn_safe',
		'dishwasher_safe',
		'wash_by_hand',
		'guarantee_period',
		'proce',
		'stock'
	];
}
