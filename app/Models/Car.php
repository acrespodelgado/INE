<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Car extends Model
{
    use HasFactory;
    protected $table = 'Car';

    static function Offerings() {
        $sCurrentDate = Carbon::now()->format('Y-m-d H:i:s');
        return Car::where(DB::raw('date_format(discountStart_at, "%Y-%m-%d")'), '<=', date('Y-m-d', strtotime($sCurrentDate)))
        ->where(DB::raw('date_format(discountEnd_at, "%Y-%m-%d")'), '>=', date('Y-m-d', strtotime($sCurrentDate)))
        ->get();
    }

    static function NewProducts() {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Car::where(DB::raw('date_format(updated_at, "%Y-%m-%d")'),'>=', date('Y-m-d', strtotime($sNow)))
        ->where('updated_at', '<=', date('Y-m-d',strtotime($sNextWeek)))
        ->get();
    }

    public function HasDiscount() {
        $sNow = date('Y-m-d H:i:s');
        return $this->discountPercent > 0 && !is_null($this->discountStart_at) && !is_null($this->discountEnd_at) &&
        date('Y-m-d', strtotime($this->discountStart_at)) <= date('Y-m-d', strtotime($sNow)) && 
        date('Y-m-d', strtotime($sNow)) <= date('Y-m-d', strtotime($this->discountEnd_at)) ? true : false;
    }

    public function carmodelbrand() {
        return $this->belongsTo('App\Models\CarModelBrand');
    }
}
