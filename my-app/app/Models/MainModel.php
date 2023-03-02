<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MainModel extends Model
{
    use HasFactory;
    public static function models(){
        $data=([
            'id'=>1,
            'home'=>'Home',
            'about'=>'About',
            'cart'=>'Cart',
            'name'=>'Meian Shop',
            'homelogo'=>'M Shop',
            'bio'=>'Do a k with Meian Shop website, That you\'ll get satisfaction. We got it all for US.',
            'select'=>'Buy it',


            ////Item Data////


            //fancy prod
            'productname1' => 'Fancy Product',
            'price1' => '$40.00 - $80.00',
            // special it
            'productname2' => 'Special Item',
            'price2' => '$20.00 $18.00',
            // sale item
            'productname3' => 'Sale Item',
            'price3' => ' $25.00',
            // populat item
            'productname4' => 'Popular Item',
            'price4' => '$40.00',
            // Shayne Item
            'productname5' => 'Shayne Item',
            'price5' => '$25.00',
            // Angelo Sayson Item
            'productname6' => 'Angelo Sayson Item',
            'price6' => '$120.00 - $280.00',
            // Ball Item
            'productname7' => 'Ball Item',
            'price7' => '$18.00',
            // G-tech Item
            'productname8' => 'G-tech Item',
            'price8' => '$40.00',

    ]);
         return $data;
    }
}
