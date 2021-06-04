<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->id();
            $table->string('id_karyawan');
            $table->string('nama');
            $table->string('divisi');
        });
    }

}
