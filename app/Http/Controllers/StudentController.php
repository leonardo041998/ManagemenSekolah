<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Brian2694\Toastr\Facades\Toastr;

use DB;



class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('keyword')) {
            $params = DB::table('students')->where('nama_lengkap', 'LIKE', '%' . $request->keyword . '%')
                ->orwhere('nisn', 'LIKE', '%' . $request->keyword . '%')
                ->orwhere('kelas', 'LIKE', '%' . $request->keyword . '%')
                ->orwhere('jurusan', 'LIKE', '%' . $request->keyword . '%')
                ->paginate();
        } else {
            $params = \App\Models\Student::all();
        }
        return view('students.index', ['params' => $params]);
    }



    public function create(Request $request)
    {
        $students = \App\Models\Student::create($request->all());
        Toastr::success('Data siswa Berhasil Diinput', 'Success');
        return redirect('/students');
    }

    public function edit($id)
    {
        $students = \App\Models\Student::find($id);
        return view('students.edit', ['students' => $students]);
    }

    public function update(Request $request, $id)
    {

        $students = \App\Models\Student::find($id);
        $students->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('img/', $request->file('avatar')->getClientOriginalName());
            $students->avatar = $request->file('avatar')->getClientOriginalName();
            $students->save();
        }
        Toastr::success('Data siswa berhasil diubah', 'Success');
        return view('students.profile', ['students' => $students]);
    }

    public function delete($id)
    {
        $students = \App\Models\Student::find($id);
        $students->delete();
        Toastr::success('Data siswa berhasil dihapus', 'Success');
        return redirect('/students');
    }

    public function profile($id)
    {
        $students = \App\Models\Student::find($id);
        return view('students.profile', ['students' => $students]);
    }
}
