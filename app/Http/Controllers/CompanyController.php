<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyModel;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = CompanyModel::all();
        return view('company.companylist', compact('companies'));
    }
   public function apiIndex()
    {
        $companies = CompanyModel::all();
        return response()->json([
            'status' => 'success',
            'data' => $companies
        ]);
    }
    public function create()
    {
        return view('company.company_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email',
            // অন্যান্য fields validate করতে পারেন
        ]);

        $company = new CompanyModel();
        $company->company_name = $request->company_name;
        $company->company_details = $request->company_details;
        $company->company_address = $request->company_address;
        $company->cell_number = $request->cell_number;
        $company->phone_number = $request->phone_number;
        $company->hotline_number = $request->hotline_number;
        $company->email = $request->email;
        $company->website_url = $request->website_url;
        $company->trade_license_no = $request->trade_license_no;
        $company->etin_no = $request->etin_no;
        $company->bin_no = $request->bin_no;
        $company->currency = $request->currency;
        $company->status = $request->status;

        // file upload example
        if ($request->hasFile('left_logo')) {
            $file = $request->file('left_logo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('app/public/images/companies'), $filename);
            $company->left_logo ='images/companies/' . $filename;
        }

        if ($request->hasFile('small_logo')) {
            $file = $request->file('small_logo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('app/public/images/companies'), $filename);
            $company->small_logo  ='images/companies/' . $filename;
        }

        $company->save();

        return redirect()->route('company.index')->with('success', 'Company created successfully!');
    }

    public function edit($id)
    {
        $company = CompanyModel::findOrFail($id);
        return view('company.company_edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = CompanyModel::findOrFail($id);

        $company->company_name = $request->company_name;
        $company->company_details = $request->company_details;
        $company->company_address = $request->company_address;
        $company->cell_number = $request->cell_number;
        $company->phone_number = $request->phone_number;
        $company->hotline_number = $request->hotline_number;
        $company->email = $request->email;
        $company->website_url = $request->website_url;
        $company->trade_license_no = $request->trade_license_no;
        $company->etin_no = $request->etin_no;
        $company->bin_no = $request->bin_no;
        $company->currency = $request->currency;
        $company->status = $request->status;

        // handle file uploads if new files uploaded

               if ($request->hasFile('left_logo')) {
            $file = $request->file('left_logo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('app/public/images/companies'), $filename);
            $company->left_logo ='images/companies/' . $filename;
        }

         if ($request->hasFile('small_logo')) {
            $file = $request->file('small_logo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('app/public/images/companies'), $filename);
            $company->small_logo  ='images/companies/' . $filename;
        }

        $company->save();

        return redirect()->route('company.index')->with('success', 'Company updated successfully!');
    }

    public function destroy($id)
    {
        $company = CompanyModel::findOrFail($id);
        $company->delete();

        return redirect()->route('company.index')->with('success', 'Company deleted successfully!');
    }
}
