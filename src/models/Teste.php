<?php

namespace NanoSoluctions\NanoCMS\Models;

use Illuminate\Database\Eloquesnt\Models;

class Teste extends Model
{
	protected $table = "nano_cms_teste";

	protected $fillable = [
		'name',
		'active',
		'parent_id'
	];
}