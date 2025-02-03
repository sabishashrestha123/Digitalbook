<?php

use App\Models\BookCategory;

// if (!function_exists('officeSetting')) {
//     function officeSetting()
//     {
//         return Cache::rememberForever('officeSetting', function () {
//             return OfficeSetting::with('officeCheifId', 'informationOfficerId')->latest()->first();
//         });
//     }
// }

if (!function_exists('bookCategories')) {

    function bookCategories()
    {
        return BookCategory::latest()->get();
    }
}



