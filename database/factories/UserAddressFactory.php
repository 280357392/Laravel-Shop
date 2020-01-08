<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    $addresses = [
        ["北京市", "市辖区", "东城区"],
        ["河北省", "石家庄市", "长安区"],
        ["江苏省", "南京市", "浦口区"],
        ["江苏省", "苏州市", "相城区"],
        ["广东省", "深圳市", "福田区"],
    ];

    // randomElement() 方法随机取出一个
    $address = $faker->randomElement($addresses);

    return [
        'province' => $address[0],
        'city' => $address[1],
        'district' => $address[2],
        // 随机的街道号数
        'address' => sprintf('第%d街道第%d号', $faker->randomNumber(2), $faker->randomNumber(3)),
        'zip' => $faker->postcode,
        'contact_name' => $faker->name,
        'contact_phone' => $faker->phoneNumber,
    ];
});

/*
 $ php artisan tinker
 factory(App\Models\UserAddress::class)->make()
 >>> factory(App\Models\UserAddress::class, 3)->create(['user_id' => 1])
 */

/*
     province: "北京市",
     city: "市辖区",
     district: "东城区",
     address: "第92街道第41号",
     zip: "771000",
     contact_name: "戚阳",
     contact_phone: "14780064277",
   }
 */
