<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $Students = \App\Models\Student::paginate(10);
        return view('student.index', compact('Students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
            'nim' => 'required|unique:students,nim',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
        ]);

        // Menyimpan data mahasiswa baru
        $student = new Student();
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->tempatlahir = $request->tempatlahir;
        $student->tanggallahir = $request->tanggallahir;
        $student->save();

        return redirect()->route('student.index');
    }

    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        // Validasi input data
        $request->validate([
            'nim' => 'required|unique:students,nim,' . $id,
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
        ]);

        // Menemukan data student berdasarkan ID
        $student = Student::find($id);

        // Update data
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->tempatlahir = $request->tempatlahir; // Update tempat lahir
        $student->tanggallahir = $request->tanggallahir; // Update tanggal lahir
        $student->save(); // Menyimpan perubahan

        return redirect()->route('student.index');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully');
    }
}
