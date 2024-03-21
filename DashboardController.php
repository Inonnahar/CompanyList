<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Companies;
use App\Models\Employees;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index()
    {
        return view('dashboard.index');
    }

    public function companies_list()

    {
        $data = Companies::paginate(10);
      
        return view('dashboard.company_list',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function add_company()
    {
        return view('dashboard.add_company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_company(Request $company)

    {
     //dd( $company);
    
    $company->validate([
        'name' => 'required',
        'logo'=>'required|max:2048',
    ]);
   
    $data = $company->all();
  
    if($logo= $company->file('logo')){
        $path = "uploads/";
        $pname = date('YmdHis').'.'.$logo->getClientOriginalExtension();
        $logo->move($path,$pname);
        $data['logo'] = $pname;
    }

            Companies::create($data);
         return redirect(route('companies_list'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_company(string $id)

    {
        $company = Companies::find($id);
        return view('dashboard.edit_company',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_company(Request $company, string $id)
    {
        $company->validate([
            'name' => 'required',
            'logo'=>'required|max:2048',
        ]);
       
        $data = $company->all();
      
        if($logo= $company->file('logo')){
            $path = "uploads/";
            $pname = date('YmdHis').'.'.$logo->getClientOriginalExtension();
            $logo->move($path,$pname);
            $data['logo'] = $pname;
        }
        $data_update = Companies::find($id);

        $data_update->update($data);
        return redirect(route('companies_list'))->with('info','company edit succeesfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete_company($id)
    {
        $company = Companies::find($id);
        $company->delete();
       return redirect(route('companies_list'))->with('info','company deleted succeesfully');
    }


//Epmloyee Section Start


    public function employees_list()

    {
        $data = Employees::paginate(10);
        return view('dashboard.employee_list',compact('data'));
    }

    public function add_employee()
    {
        $data = Companies::get();
        return view('dashboard.add_employee', compact('data'));
    }

    public function store_employee(Request $employee)

    {
     //dd( $company);
    
    $employee->validate([
        'first_name' => 'required',
        'last_name' => 'required',
    ]);
   
    $data = $employee->all();
  
    
    Employees::create($data);
    return redirect(route('employees_list'));
    }

    public function delete_employee($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
       return redirect(route('employees_list'))->with('info','employee deleted succeesfully');
    }

    public function edit_employee(string $id)

    {
        $employee = Employees::find($id);
        return view('dashboard.edit_employee',compact('employee'));
    }

    public function update_employee(Request $employee, string $id)
    {
        $employee->validate([
            'first_name' => 'required',
            'last_name' => 'required',
         
        ]);
       
        $data = $employee->all();
      
       
        $data_update = Employees::find($id);

        $data_update->update($data);
        return redirect(route('employees_list'))->with('info','employee edit succeesfully');
    
    }


}
