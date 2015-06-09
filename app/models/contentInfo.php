<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contentInfo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contentInfo';
	protected $fillable = array('name','description','userRatingCount','userRating','criticRating','TAG','category');
	protected $primaryKey = 'contentKey';
}
