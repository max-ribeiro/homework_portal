<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    private File $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }
    //
    public function index() {
        return $this->file->all();
    }

    public function store(Request $request) {
        return $this->file->create($request->all());
    }

    public function show(int $id) {
        return $this->file->find($id);
    }

    public function update(Request $request, int $id) {
        $file = $this->file->find($id);
        if(!$file) {
            return response()->json([
                'message' => 'file not found'
            ], 404);
        }
        $file->fill($request->all());
        $file->save();
        return $file;
    }
    public function destroy(int $id) {
        $file = $this->file->find($id);
        if(!$file) {
            return response()->json([
                'message' => 'file not found'
            ], 404);
        }
        $status = $file->delete($id);
        return response()->json([
            'message'=> 'file deleted'
        ], 200);
    }
}
