<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\CustomerFilter;
use App\Models\Customer;
use App\Http\Requests\V1\StoreCustomerRequest;
use App\Http\Requests\V1\UpdateCustomerRequest;
use App\Http\Controllers\Controller;
use App\http\Resources\V1\CustomerResource;
use App\http\Resources\V1\CustomerCollection;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //we used resource to show some of the data as in pagination
        // $data = new CustomerCollection(Customer::paginate());
        // return view('dashboard.show.index',compact('data'));

        $filter= new CustomerFilter();
        $filterItems = $filter->transform($request); //[['column', 'operator','value']]

        $includeInvoices =$request->query('includeInvoices');
        
        $customers= Customer::where($filterItems);
        if($includeInvoices){
            $customers=$customers->with('invoices');
        }
        return new CustomerCollection($customers->paginate()->appends($request->query()));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        return new CustomerResource((Customer::create($request->all())));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $includeInvoices =request()->query('includeInvoices');
        if($includeInvoices){
        return new CustomerResource($customer->loadMissing('invoices'));

        }

        return new CustomerResource($customer);
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->Update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
