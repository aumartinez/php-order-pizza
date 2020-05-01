<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'prod_id' => 'pizza-01',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-01.png',
          'prod_name' => 'Apricot Chicken',
          'prod_description' => 'Crispy bacon, tasty ham, pineapple, onion and stretchy mozzarella, finished with a BBQ swirl.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-02',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-02.png',
          'prod_name' => 'Chicken Hawaii',
          'prod_description' => 'Extra-virgin olive oil, mozzarella cheese, thinly-sliced steak meat, garlic, green peppers, mushrooms and tomatoes.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-03',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-03.png',
          'prod_name' => 'Grand Italiano',
          'prod_description' => 'Ham, thin and crispy, purple onions, stretchy mozzarella, sweet peppers.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-04',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-04.png',
          'prod_name' => 'Hawaii Vegetarian Pizza',
          'prod_description' => 'Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and stretchy mozzarella, seasoned with garlic and oregano.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-05',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-05.png',
          'prod_name' => 'Italiano Original',
          'prod_description' => 'Ricotta, sun dried tomatoes, garlic, mozzarella cheese, topped with lightly drizzled red sauce, pesto, and fresh basil.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-06',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-06.png',
          'prod_name' => 'Pepperoni Calzone',
          'prod_description' => 'Piled with shrimp, calamari, clams, mussels, surimi and stretchy mozzarella, seasoned with tangy lemon pepper.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-07',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-07.png',
          'prod_name' => 'Pepperoni Pizza',
          'prod_description' => 'Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green olives, black olives, fresh tomatoes.',
          'prod_price' => 19.90           
        ]);
        
        DB::table('products')->insert([
          'prod_id' => 'pizza-08',
          'prod_type' => 'pizza',
          'prod_pic' => '/img/pizza-08.png',
          'prod_name' => 'Summer Pizza',
          'prod_description' => 'Shrimp, Red Capsicum, Green Capsicum, Onion, Chilli flakes, Lemon Pepper, Mozzarella, finished with Aioli.',
          'prod_price' => 19.90           
        ]);
    }
}
