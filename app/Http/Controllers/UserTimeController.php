<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeekModel;

class UserTimeController extends Controller
{
    public function week_list()
    {
        //  echo "echo";die();
        $data['getRecords'] = WeekModel::get();
        return view('admin.week.list', $data);
    }

    public function week_add(Request $request)
    {
        //  echo"week add";die();
        return view('admin.week.add');
    }

    public function week_add_store(Request $request)
    {
        // dd($request->all());
        $week = new WeekModel();
        $week->name = trim($request->name);
        $week->save();

        return redirect('admin/week')->with('success', 'Week Added Successfully. . .');
    }

    public function week_edit($id)
    {
        $data['getRecord'] = WeekModel::find($id);
        if (empty($data['getRecord'])) {
            abort(404);
        }
        return view('admin.week.edit', $data);
    }

    public function week_update($id, Request $request)
    {
        $week = WeekModel::find($id);
        if (empty($week)) {
            abort(404);
        }
        $week->name = trim($request->name);
        $week->save();

        return redirect('admin/week')->with('success', 'Week Updated Successfully. . .');
    }

    public function week_delete($id)
    {
        $week = WeekModel::find($id);
        if (empty($week)) {
            abort(404);
        }
        $week->delete();

        return redirect()->back()->with('success', 'Week Deleted Successfully. . .');
    }
}
