<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
        	'payment_menthod' => 'Thanh Toán Khi Giao Hàng',
        	'payment_status' => 'Đang chờ xử lý',
        ]);
        Payment::create([
        	'payment_menthod' => 'Thanh Toán bằng ATM',
        	'payment_status' => 'Đang chờ xử lý',
        ]);
    }
}