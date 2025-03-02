<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;   // Movie
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $buyer = User::where('email', 'buyer@cinema.com')->first();
        if (!$buyer) {
            return;
        }

        $movies = Product::inRandomOrder()->take(4)->get();

        $order1 = Order::create([
            'order_number' => Str::uuid(),
            'user_id'      => $buyer->id,
        ]);

        $orderItems1 = $movies->take(2);
        foreach ($orderItems1 as $movie) {
            OrderItem::create([
                'order_id'   => $order1->id,
                'product_id' => $movie->id,
                'quantity'   => 1,            // условно 1 штука
                'price'      => $movie->price,
            ]);
        }

        $order2 = Order::create([
            'order_number' => Str::uuid(),
            'user_id'      => $buyer->id,
        ]);

        $orderItems2 = $movies->skip(2)->take(2);
        foreach ($orderItems2 as $movie) {
            OrderItem::create([
                'order_id'   => $order2->id,
                'product_id' => $movie->id,
                'quantity'   => 1,
                'price'      => $movie->price,
            ]);
        }
    }
}
