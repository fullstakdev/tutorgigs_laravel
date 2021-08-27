<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index(){
       $data['title'] = 'Manage Holiday';
       $data['holidays'] = Holiday::all();
       return view('holiday.index',$data);
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
        Holiday::create(['holiday_date'=> $request->date, 'holiday_title' => $request->title]);
        return redirect()->back()->withSuccess('Holiday added successfully...');
    }

    public function update(Request $request, Holiday $holiday){
        $request->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
        $holiday->update(['holiday_date'=> $request->date, 'holiday_title' => $request->title]);
        return redirect()->back()->withSuccess('Holiday update successfully...');
    }

    public function delete(Holiday $holiday){
        $holiday->delete();
        return redirect()->back()->withSuccess('Holiday deleted successfully...');
    }
}
