<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPaymentInfo extends Model
{
    protected $table = "v1_scc_student_payment_info";

    public function student(){
        return $this->belongsTo(StudentGeneralInfo::class,'student_id');
    }
}
