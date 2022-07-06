<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\auth;


class SubjectController extends Controller
{
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectItem = new Subject();
        $newSubjectItem ->subject_title= $request->subTitle;
        $newSubjectItem ->subject_description=$request->subDescription;
        $newSubjectItem ->subject_price = $request->subPrice;
        $newSubjectItem ->subeject_TotalLearningHours = $request->subTotalLearningHours;
        $newSubjectItem ->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubjects' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }
    public function markDelete($id)
    {
        $listItem = Subject::find($id);
        $listItem->delete();
        return redirect('mainpage');
    }

    public function markUpdate($id, Request $request)
    {
        $listItem = Subject::find($id);
        $listItem->subject_title= $request->subTitle;
        $listItem->subject_description=$request->subDescription;
        $listItem->subject_price = $request->subPrice;
        $listItem->subeject_TotalLearningHours = $request->subTotalLearningHours;
        $listItem->update();
        return redirect('mainpage');
    }
}