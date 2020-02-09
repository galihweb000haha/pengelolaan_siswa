<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('home.index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|integer',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'age' => 'required|int',
            'email' => 'required|email'
        ]);
        Student::create([
            'nisn' => (int)$request->nisn,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'age' => (int)$request->age,
            'email' => $request->email        
        ]);
        return redirect('/')->with('status', 'Data siswa telah ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {           
        $student = Student::where('id', '=', $id)->first();
        return view('home.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|integer',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'age' => 'required|int',
            'email' => 'required|email'
        ]);
        Student::where('id', $id)
        ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nisn' => $request->nisn,
            'address' => $request->address,
            'age' => $request->age,
            'email' => $request->email
        ]);
        return redirect('/')->with('status', 'Data siswa telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/')->with('status', 'Data siswa berhasil dihapus!');
    }
    public function search(Request $request){
        $keyword = $request->search;
        $students = Student::where('first_name', 'LIKE', "%$keyword%")->paginate(10);        
        return view('home.index', compact('students'));
    }
}
