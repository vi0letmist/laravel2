<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Mahasiswa;
use App\Customer;
class CustomerController extends Controller
{
    public function index()
    {
    	//Query Builder
    	$mahasiswa = DB::table('tbl_mahasiswa')->get();
    	// dd($mahasiswa);
    	//Eloquent
    	// $mahasiswa = Mahasiswa::all();
    	// return view('mahasiswa', compact('mahasiswa'));
    	
    	$data['mahasiswa'] = Mahasiswa::all();
    	dd($data);
    	return view('mahasiswa', $data);
    }
    function customer(){
    	$data['customer'] = Customer::limit(10)->get();
    	//explore variable with dd();
    	// dd($data['customer']);
    	return view('customer',$data);
    }
    public function customer_join()
    {
        /* query builder */
        /*
         $data['customer'] = Customer::join('tbl_store','customer.store_id','=','tbl_store.store_id')
        ->limit(10)
        ->get();
        */
        /* Eloquent Relationship */
        $data['customer']  = Customer::limit(10)->get();
        // dd($data['customer']->store);
        return view('customer',$data);
    }
    public function tambah_customer(Request $request)
    {
        // dd() -> die(var_dump(array()))
        // dd($request->all());
        // cara pertama
        // $customer = new Customer();
        // $customer->store_id = $request->store_id;
        // $customer->first_name = $request->first_name;
        // $customer->last_name = $request->last_name;
        // $customer->email = $request->email;
        // $customer->address_id = $request->address_id;
        // $customer->active = $request->active;
        // $customer->save();
        // gunakana function create dengan Eloquent
        $data = [
            "store_id" => $request->store_id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "address_id" => $request->address_id,
            "active" => $request->active
        ];
        Customer::create($data);
        return "data berhasil disimpan";
    }
    public function update_customer(Request $request, $id)
    {
        dd($id);
        $data = [
            "store_id" => $request->store_id,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "address_id" => $request->address_id,
            "active" => $request->active
        ];
        Customer::where('customer_id',$id)->update($data);
        //delete function
        // Customer::where('customer_id',$id)->delete();
        return "berhasil update data";
    }
}