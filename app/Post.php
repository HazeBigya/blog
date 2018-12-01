<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
//Time stamps   
public $timestamps = true;

public function user()
{
    return $this->belongsTo('App\User');
}

public function scopeFilter($query, $filters)
	{
    	if (isset($filters['month']) && $month = $filters['month'])
			{
	    		$query->whereMonth('created_at', Carbon::parse($month)->month);
			}
		if (isset($filters['year']) && $year = $filters['year'])
			{
	    		$query->whereYear('created_at', $year); 
			}
	}

public static function archives(){
return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) pubished')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
}
 
}
