<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;

class CompanyController extends Controller
{
    public function list() {
        $companies = Company::all();
        return view('company.list', ['bedrijven' =>$companies]);
    }

    public function details($id) {
        $company = Company::find($id);
        return $company->name;
    }
}
