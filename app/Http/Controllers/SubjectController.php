<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private Subject $subject;
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }
    //
    public function index() {
        return $this->subject->all();
    }

    public function store(Request $request) {
        return $this->subject->create($request->all());
    }

    public function show(int $id) {
        return $this->subject->find($id);
    }

    public function update(Request $request, int $id) {
        $subject = $this->subject->find($id);
        if(!$subject) {
            return response()->json([
                'message' => 'subject not found'
            ], 404);
        }
        $subject->fill($request->all());
        $subject->save();
        return $subject;
    }
    public function destroy(int $id) {
        $subject = $this->subject->find($id);
        if(!$subject) {
            return response()->json([
                'message' => 'subject not found'
            ], 404);
        }
        $status = $subject->delete($id);
        return response()->json([
            'message'=> 'subject deleted'
        ], 200);
    }
}
