<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\validateRequest;
use App\Http\Requests\updateRequest;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams=Exam::latest()->get();

        return view('exams.index',compact('exams'))->with('message','Entry Created');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validateRequest $request)
    {
        Exam::create($request->validated());
        return redirect('/index');
        
         
        //return response()->json(['Message'=>'Entry Created','redirect'=>url('api/show')],201);
        /*
        $exams=Exam::latest()->paginate(5);

        return view('exams.kami',compact('exams'))->with('message','Entry Created');
        return response()->json(['Message'=>'Entry Created','Entries'=>$exams]);
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //return response()->json(['Message'=>'Entry Created','Entries'=>$exams]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::findOrFail($id);
        return view('exams.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRequest $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $exam->update($request->validated());

        return redirect()->route('exams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
?>
