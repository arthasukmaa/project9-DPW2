<?php 
namespace App\Models;

use App\Models\User;

class Produk extends Model{
	protected $table =  'product';

	protected $casts = [
         'ccreated_at' => 'datetime',
         'updated_at'  => 'datetime',
         'harga' => 'decimal:2'
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}



    function getHargaStringAttribute(){
    	return "Rp.".number_format($this->attributes['harga']);
    }

}