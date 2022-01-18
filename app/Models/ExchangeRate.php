<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory;

    protected $fillable = ['from_currency', 'to_currency', 'rate'];

     public static function getRate($from, $to){
        return ExchangeRate::where('from_currency',$from)->where('to_currency',$to)->pluck('rate');
    }


}
