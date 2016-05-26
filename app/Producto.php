<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	protected $table ='productos';
 
	protected $fillable = ['codigoproducto','nombreproducto','codigotipo'];

	public function scopeSearch($querty, $codigoproducto){
		return $querty->where('codigoproducto', 'LIKE',"%$codigoproducto%");
	}
}
