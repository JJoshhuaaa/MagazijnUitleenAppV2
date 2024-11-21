<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'student_number', 'product_id', 'special_requests', 'loan_date', 'expire_date'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
