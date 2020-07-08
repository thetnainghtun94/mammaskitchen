<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use App\Category;
use App\Item;
use App\Reservation;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sliderCount = Slider::count();
        $categoryCount = Category::count();
        $itemCount = Item::count();
        $reservations = Reservation::where('status', false)->get();
        $contactCount = Contact::count();
        return view('admin.dashboard', compact('sliderCount', 'categoryCount', 'itemCount', 'reservations', 'contactCount'));
    }
}
