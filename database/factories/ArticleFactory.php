<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => 'Review Lenovo ThinkPad P15s: Laptop Workstation Kelas Terjangkau',
        'image' => 'http://www.jagatreview.com/wp-content/uploads/2020/10/Review-Lenovo-ThinkPad-P15s-8.jpg'
    ];
});
