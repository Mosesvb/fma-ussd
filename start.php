<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//$data = Cart::all()->where('status', 'unpaid')->where('username', 'fredy')->first();
//$data2 = mysql_query(query) SELECT bphone, amount FROM cart join(cart_items) on (cart_items.id = cart_items.cart_id);  
  $data2  = DB::table('carts')
            ->join('cart_items', 'cart_items.id', '=', 'cart_items.cart_id')
            ->select('carts.bphone')
            ->get();
    var_dump($data2);



