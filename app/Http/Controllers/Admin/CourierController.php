<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couriers = Courier::all();

        if(count($couriers) > 0) {

            return view('admin.courier.index', compact('couriers'));
        } else {
            return view('admin.courier.index');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $courier = new Courier();

        return view('admin.courier.create', compact('courier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tracking_no' => 'required|string',
            'sender_contact' => 'required',
            'sender_address' => 'required',
            'sender_city' => 'required',
            'sender_state' => 'required',
            'sender_pin' => 'required',
            'sender_country' => 'required',
            'recipient_name'  => 'required',
            'recepient_contact' => 'required',
            'recepient_address'  => 'required',
            'recipient_city'  => 'required',
            'recipient_state'  => 'required',
            'recepient_pin'  => 'required',
            'recepient_country'  => 'required',
            'courier_desc'  => 'required',
            'weight'  => 'required',
            'length'  => 'required',
            'breadth'  => 'required',
            'height'  => 'required',
            'from_location'  => 'required',
            'to_location'  => 'required',
            'status'  => 'required|string',
            'company_logo'  => 'required||image|mimes:png,jpg,jpeg'
        ]);

        $slug = Str::slug($request->recepient_contact);

        $image = $request->file('company_logo');

        if(isset($image)) {
            $date = Carbon::now()->toDateString();
            $imageName = $slug . '-' .$date . '-'.uniqid(). '-' .$image->getClientOriginalExtension();


            if(!Storage::disk('public')->exists('company')) {

                Storage::disk('public')->makeDirectory('company');
            }

            $companyLogo = Image::make($image)->resize(250, 100)
            ->save($image->getClientOriginalExtension());

            Storage::disk('public')->put('company/'.$imageName, $companyLogo);

            // $companyLogo = Image::make($image)->resize('250','100');

        } else {
            $imageName = 'default.png';
        }

        $courier = new Courier();

        $courier->tracking_no = $request->tracking_no;
        $courier->sender_contact = $request->sender_contact;
        $courier->sender_address = $request->sender_address;
        $courier->sender_city = $request->sender_city;
        $courier->sender_state = $request->sender_state;
        $courier->sender_pin  = $request->sender_pin;
        $courier->sender_country = $request->sender_country;
        $courier->recipient_name = $request->recipient_name;
        $courier->recepient_contact = $request->recepient_contact;
        $courier->recepient_address = $request->recepient_address;
        $courier->recipient_city = $request->recipient_city;
        $courier->recipient_state = $request->recipient_state;
        $courier->recepient_pin = $request->recepient_pin;
        $courier->recepient_country = $request->recepient_country;
        $courier->courier_desc = $request->courier_desc;
        $courier->weight = $request->weight;
        $courier->length = $request->length;
        $courier->breadth = $request->breadth;
        $courier->height = $request->height;
        $courier->from_location = $request->from_location;
        $courier->to_location = $request->to_location;
        $courier->status = $request->status;
        $courier->company_logo = $request->company_logo;
        $courier->save();
        return redirect()->back()->with('success', 'Courier Details Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        return view('admin.courier.show', compact('courier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        return view('admin.courier.edit', compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        $data = $this->validate($request, [
            'tracking_no' => 'required|string',
            'sender_contact' => 'required',
            'sender_address' => 'required',
            'sender_city' => 'required',
            'sender_state' => 'required',
            'sender_pin' => 'required',
            'sender_country' => 'required',
            'recipient_name'  => 'required',
            'recepient_contact' => 'required',
            'recepient_address'  => 'required',
            'recipient_city'  => 'required',
            'recipient_state'  => 'required',
            'recepient_pin'  => 'required',
            'recepient_country'  => 'required',
            'courier_desc'  => 'required',
            'weight'  => 'required',
            'length'  => 'required',
            'breadth'  => 'required',
            'height'  => 'required',
            'from_location'  => 'required',
            'to_location'  => 'required',
            'status'  => 'required|string',   ]);
            $courier->update($data);

            return redirect()->back()->with('success', 'Courier Details Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        $courier->delete();
        return redirect()->back()->with('success', 'Courier Details Deleted Successfully');
    }

    public function search(Request $request) {
        //Get the search value from the request
        $search = $request->input('search');

        // search in the title and body columns for the Couriers table
        $couriers = Courier::query()
        ->where('tracking_no', 'LIKE', "%{$search}%")->get();

        //Return the search view with the resluts compacted
        return view('search', compact('couriers'));
    }


}
