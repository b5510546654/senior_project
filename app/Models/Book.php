<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('name','description','userRatingCount','userRating','criticRating','TAG','category','criticRatingCount','user_id');
	protected $primaryKey = 'id';

	public function user() {
		return $this->belongsTo('App\Models\User');
	}

	public function contents() {
		return $this->belongsToMany('App\Models\Content','books_contents', 'book_id', 'content_id');
	}

	public function comments() {
		return $this->hasMany('App\Models\Comment');
	}
}
