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

    public function update(Request $request, $id)
    {
        $id_karyawan = $request->id_karyawan;
        $nama = $request->nama;
        $divisi = $request->divisi;
    }
}
