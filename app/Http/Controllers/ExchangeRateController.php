<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('currency');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['from_currency' => 'required', 'to_currency' => 'required', 'rate' => 'required'

        ]);

        $data = $request->except(['_token']);

        if ($id = ExchangeRate::create($data)->id)
        {
            return redirect('currencies/' . $id)->with('success', 'New User has been added.');
        }

        return back()
            ->with('error', 'Error adding User');

    }

    public function show($id)
    {
        $user = ExchangeRate::findOrFail($id);

        return view('currency');

    }

    public function convert(Request $request)
    {

        if ($request->driver == 'local')
        {
            $rate = ExchangeRate::getRate($request->from_currency, $request->to_currency);
            $convert = $request->amount * 1.30;
            if (count($rate) > 0)
            {
                return response()->json(['status' => 'success', 'msg' => 'converted successfully', 'Amount Converted' => $convert, 'Rate' => $rate[0]]);
            }

        }
        else if ($request->driver == 'external')
        {
            $api = 'fa07f49ba00b6982a647dda4cbe24dc1';

            $client = new \GuzzleHttp\Client();
            $params = ['access_key' => $api, 'from' => $request->from_currency, 'to' => $request->to_currency, 'amount' => $request->amount

            ];

            $request = $client->get('https://api.exchangeratesapi.io/v1/convert', ['query' => $params]);
            $response = $request->getBody();

            dd($response);

        }

    }

}

