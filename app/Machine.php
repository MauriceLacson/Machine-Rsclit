<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
	protected $fillable = [
		'machine_no',
		'model_no',
		'package',
		'date_started',
		'date_finished',
		'date_next_rsclit',
		'work_week'
	];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getMachineNo()
    {
    	return $this->machine_no;
    }
}
