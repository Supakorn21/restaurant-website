<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use App\Models\FoodItem;
use App\Models\GeneralSetting;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\SocialSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticPagesController extends Controller
{
    public function home()
    {

        $categories = FoodCategory::all();;

        return view('home', [
            'categories' => $categories,
        ]);
    }
    public function about()
    {


        return view('pages.about');
    }
    public function reservations()
    {
        return view('pages.reservations');
    }
    public function saveReservation()
    {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required'],
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/reservations/thank-you');
    }
    public function reservationThankyou()
    {
        return view('pages.thankyou-reservations');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function offers()
    {
        return view('pages.offers');
    }
    public function registerMember()
    {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ]);
        // return request()->all();
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');
    }
    public function offersThankyou()
    {
        return view('pages.thankyou-offers');
    }
    public function menu()
    {
        $categories = FoodCategory::paginate(10);


        return view('menu.all-categories', [
            'categories' => $categories,
        ]);
    }
    public function singleMenu($slug)
    {
        $foodCategory = FoodCategory::where('title', '=', $slug)->first();
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();



        return view('menu.single-menu', [
            'foodItem' => ucfirst($slug),
            'foodItems' => $foodItems,
        ]);
    }
}
