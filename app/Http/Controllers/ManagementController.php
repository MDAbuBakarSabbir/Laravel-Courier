<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function add_admin()
    {
        // return view()
    }
    public function show_admin()
    {
        return view('adminDashboard.manage.admin.index');
    }
    public function add_hub()
    {

    }
    public function show_hub()
    {
        return view('adminDashboard.manage.hub.index');
    }
    public function add_deliveryMan()
    {

    }
    public function show_deliveryMan()
    {
        return view('adminDashboard.manage.deliveryMan.index');
    }

    public function marchant_info(){
        return view('adminDashboard.manage.marchant.index');
    }
}
