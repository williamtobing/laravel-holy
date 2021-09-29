<?php

namespace App\Http\Controllers;

use App\Models\carousel;
use Inertia\Inertia;

class BackendController extends Controller
{
    public function toCarouselPage()
    {
        $carousels = carousel::orderBy('id', 'DESC')->get();
        return Inertia::render('Backend/CarouselPage/CarouselPage', [
            'carousels' => $carousels,
        ]);
    }
}
