<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Illuminate\Http\Request;

class ShipAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function divisionIndex()
    {
        $devisions = ShipDivision::all();
        return view('admin.ship.division.index', compact('devisions'));
    }


    public function divisionStore(Request $request)
    {
        $request->validate([
            'division_name' => 'required',
        ]);

        $division = new ShipDivision();
        $division->division_name = $request->division_name;
        $division->save();

        return redirect()->back()->with('message', 'Division Added Sccessfully');
    }

    public function divisionEdit($id)
    {
        $division = ShipDivision::find($id);

        return view('admin.ship.division.edit', compact('division'));
    }

    public function divisionUpdate(Request $request, $id)
    {
        $request->validate([
            'division_name' => 'required',
        ]);

        $division = ShipDivision::find($id);
        $division->division_name = $request->division_name;
        $division->save();

        return redirect()->route('admin.division')->with('message', 'Division Updated Sccessfully');
    }


    public function divisionDelete($id)
    {
        ShipDivision::find($id)->delete();
        return redirect()->back()->with('message', 'Division Deleted Sccessfully');
    }

    // District start

    public function districtIndex()
    {
        $devisions = ShipDivision::all();
        $districts = ShipDistrict::all();

        return view('admin.ship.disctrict.index', compact('devisions', 'districts'));
    }


    public function districtStore(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required',
        ]);

        $district = new ShipDistrict();
        $district->division_id = $request->division_id;
        $district->district_name = $request->district_name;
        $district->save();

        return redirect()->back()->with('message', 'District Added Sccessfully');
    }

    public function districtEdit($id)
    {
        $district = ShipDistrict::find($id);
        $devisions = ShipDivision::all();
        return view('admin.ship.disctrict.edit', compact('district', 'devisions'));
    }

    public function districtUpdate(Request $request, $id)
    {
        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required',
        ]);

        $district = ShipDistrict::find($id);
        $district->division_id = $request->division_id;
        $district->district_name = $request->district_name;
        $district->save();

        return redirect()->route('admin.district')->with('message', 'District Updated Sccessfully');
    }


    public function districtDelete($id)
    {
        ShipDistrict::find($id)->delete();
        return redirect()->back()->with('message', 'District Deleted Sccessfully');
    }
    // District End


    // State Start
    public function stateIndex()
    {

        $devisions = ShipDivision::all();
        $districts = ShipDistrict::all();
        $states = ShipState::all();
        return view('admin.ship.state.index', compact('devisions', 'districts', 'states'));
    }

    public function getDistrict($division_id)
    {
        $district = ShipDistrict::where('division_id', $division_id)->latest()->get();

        return response()->json($district);
    }

    public function stateStore(Request $request)
    {
        // return $request->all();

        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required',
        ]);

        $state = new ShipState();
        $state->division_id = $request->division_id;
        $state->district_id = $request->district_id;
        $state->state_name = $request->state_name;
        $state->save();

        return redirect()->back()->with('message', 'State Added Sccessfully');
    }

    public function stateEdit($id)
    {
        $devisions = ShipDivision::all();
        $districts = ShipDistrict::all();
        $state = ShipState::find($id);

        return view('admin.ship.state.edit', compact('districts', 'devisions', 'state'));
    }

    public function stateUpdate(Request $request, $id)
    {
        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required',
        ]);

        $state = ShipState::find($id);
        $state->division_id = $request->division_id;
        $state->district_id = $request->district_id;
        $state->state_name = $request->state_name;
        $state->save();

        return redirect()->route('admin.state')->with('message', 'State Updated Sccessfully');
    }

    public function stateDelete($id)
    {
        ShipState::find($id)->delete();

        return redirect()->back()->with('message', 'State Deleted Sccessfully');
    }
}
