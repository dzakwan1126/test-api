<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //untuk mengirim data dari model Employee
    public function index()
    {
        return Employee::all();
    }

    //untuk menyimpan data 
    public function create(Request $request)
    {
        $employee = new Employee;
        $employee->id_karyawan = $request->id_karyawan;
        $employee->nama = $request->nama;
        $employee->divisi = $request->divisi;
        $employee->save();

        return "data berhasil disimpan";
    }

    //untuk meng-update data
    public function update(Request $request, $id)
    {
        $id_karyawan = $request->id_karyawan;
        $nama = $request->nama;
        $divisi = $request->divisi;

        $employee = Employee::find($id);
        $employee->id_karyawan = $id_karyawan;
        $employee->nama = $nama;
        $employee->divisi = $divisi;
        $employee->save();

        return "data berhasil diubah";
    }

    //untuk menghapus data
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return "data berhasil dihapus";
    }
}
