<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Format;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }

    public function create(Request $request)
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business();
        $business->name = $request->name;
        $business->company_name = $request->company_name;
        $business->country_code = $request->country_code;
        $business->user_id =  auth::user()->id;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->designation = $request->designation;
        $business->brand_name = $request->brand_name;
        $business->website = $request->website;
        $business->offering = $request->offering;
        $business->industry = $request->industry;
        $business->brand_description = $request->brand_description;
        $business->all_products_services = $request->all_products_services;
        $business->brand_start_year = $request->brand_start_year;
        $business->brand_location = $request->brand_location;
        $business->brand_latitude = $request->brand_latitude;
        $business->brand_longitude = $request->brand_longitude;
        $business->expectation = $request->expectation;
        $business->support = $request->support;
        $business->expand_location = $request->expand_location;
        $business->franchise_format_count = $request->franchise_format_count;
        $business->brand_logo = $request->brand_logo;
        $business->store_photo = $request->store_photo;
        $business->procedure = $request->procedure;
        $business->brochure = $request->brochure;
        $business->business_proof = $request->business_proof;
        $business->current_plan_price = $request->current_plan_price;
        $business->current_plan_title = $request->current_plan_title;

     
     if( $business->save())
     {
        // dd($franchise);

        $format = new Format;
        $format->business_id = $business->id;
        $format->name = $request->format_name;
        $format->min_required_space = $request->min_required_space;
        $format->max_required_space = $request->max_required_space;
        $format->min_investment = $request->min_investment;
        $format->max_investment = $request->max_investment;
        $format->brand_fee = $request->brand_fee;
        $format->staff_number = $request->staff_number;
        $format->charged_royality = $request->charged_royality;
        $format->monthly_sales = $request->monthly_sales;
        $format->profit_margin = $request->profit_margin;
  
        $format->save();
        return back()->with('message', 'item stored successfully');

     }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('businesses.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $business->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
