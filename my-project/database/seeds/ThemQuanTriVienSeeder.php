<?php

use Illuminate\Database\Seeder;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Quan_Tri_Vien::create([
        	'ten_dang_nhap' => 'admin',
        	'mat_khau' => Hash::make('1234'),
        	'ho_ten' => 'Thiện'
        ]);
    }
}
