<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Resources\V1\CustomerResource;
use App\http\Resources\V1\CustomerCollection;
use App\Models\Customer;

class ShowController extends Controller
{
    public function index()
    {
        //we used resource to show some of the data as in pagination
        $data = new CustomerCollection(Customer::paginate());
        return view('dashboard.show.index',compact('data'));

        // return new CustomerCollection(Customer::paginate());
    }

    public function create(){
        return view('dashboard.show.creat');
    }
}
