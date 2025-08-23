<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private Section $section;
    public function __construct(Section $section)
    {
        $this->section = $section;
    }
    //
    public function index() {
        return $this->section->all();
    }

    public function store(Request $request) {
        return $this->section->create($request->all());
    }

    public function show(int $id) {
        return $this->section->find($id);
    }

    public function update(Request $request, int $id) {
        $section = $this->section->find($id);
        if(!$section) {
            return response()->json([
                'message' => 'section not found'
            ], 404);
        }
        $section->fill($request->all());
        $section->save();
        return $section;
    }
    public function destroy(int $id) {
        $section = $this->section->find($id);
        if(!$section) {
            return response()->json([
                'message' => 'section not found'
            ], 404);
        }
        $status = $section->delete($id);
        return response()->json([
            'message'=> 'section deleted'
        ], 200);
    }
}
