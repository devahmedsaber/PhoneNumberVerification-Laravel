<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Models\Country;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return view('phone.index', compact('phones'));
    }

    public function check()
    {
        $countries = Country::pluck('name', 'code');

        return view('phone.check', compact('countries'));
    }

    public function verify(PhoneRequest $request)
    {
        $access_key = 'bdffa42efc4b0cc2ac66e063b73d383c';
        $phone_number = $request->countryCode . $request->number;
        $url = "http://apilayer.net/api/validate?access_key=$access_key&number=$phone_number";

        $get_request = file_get_contents($url);
        $data = json_decode($get_request, true);

        Phone::create([
            'number' => $data['number'],
            'local_format' => $data['local_format'],
            'international_format' => $data['international_format'],
            'country_prefix' => $data['country_prefix'],
            'country_code' => $data['country_code'],
            'country_name' => $data['country_name'],
            'location' => $data['location'],
            'carrier' => $data['carrier'],
            'line_type' => $data['line_type'],
            'status' => $data['valid'],
        ]);

        if ($data['valid'] == 1){
            return redirect()->route('phone.index')->with('success', 'Phone Number is Valid.');
        }else{
            return redirect()->route('phone.index')->with('error', 'Phone Number is Invalid.');
        }
    }

    public function delete($id)
    {
        $phone = Phone::find($id);

        if (!$phone){
            return redirect()->route('phone.index')->with('error', 'Phone Does Not Exist.');
        }

        $phone->delete();

        return redirect()->route('phone.index')->with('success', 'Phone Deleted Successfully.');
    }

    public function history()
    {
        $phones = Phone::all();
        return view('phone.history', compact('phones'));
    }

    public function filter(Request $request)
    {
        $status = $request->status;
        $phones = Phone::where('status', $status)->get();
        return view('phone.history', compact('phones', 'status'));
    }
}
