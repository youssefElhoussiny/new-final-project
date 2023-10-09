<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = ["نص فرخة" , "ربع فرخة" ,"تمن فرخة" ,"فرخة"];
        $category = ['فراخ' ,"لحوم" ,"مشاوي"];
        return [
            'name' => $products[rand(0,3)],
            'category'=>$category[rand(0,2)],
            'price'=>rand(40,100),
            'bio'=>fake()->realText(50),
            'created_at'=>now(),
            
            
        ];
    }
}
