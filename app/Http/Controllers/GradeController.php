<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    private Grade $grade;
    public function __construct(Grade $grade)
    {
        $this->grade = $grade;
    }
    //
    public function index() {
        return $this->grade->all();
    }

    public function store(Request $request) {
        return $this->grade->create($request->all());
    }

    public function show(int $id) {
        return $this->grade->find($id);
    }

    public function update(Request $request, int $id) {
        $grade = $this->grade->find($id);
        if(!$grade) {
            return response()->json([
                'message' => 'grade not found'
            ], 404);
        }
        $grade->fill($request->all());
        $grade->save();
        return $grade;
    }
    public function destroy(int $id) {
        $grade = $this->grade->find($id);
        if(!$grade) {
            return response()->json([
                'message' => 'grade not found'
            ], 404);
        }
        $status = $grade->delete($id);
        return response()->json([
            'message'=> 'grade deleted'
        ], 200);
    }
}
