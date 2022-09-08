<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public static function queryAll()
    {
        return Product::select(\DB::raw("products.id, products.title, products.type,
            products.capacity, count(bookings.id) as booked,
            case when count(bookings.id) < capacity then 'Yes' else 'No' end as available,
            products.description"))
                        ->leftJoin('bookings', 'products.id', '=', 'bookings.product_id')
                        ->groupBy('products.id')
                        ->orderBy('products.title')
                        ->get();
    }
}
