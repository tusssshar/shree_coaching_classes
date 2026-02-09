<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGeneralInfo extends Model
{
    protected $table = "v1_scc_student_general_info";

    public function documentInfo(){
        return $this->hasOne(StudentDocumentInfo::class,'student_id');
    }

    public function paymentInfo(){
        return $this->hasOne(StudentPaymentInfo::class,'student_id');
    }

    public function standardData()
    {
        return $this->belongsTo(Standard::class, 'standard', 'id');
    }

    public function mediumData()
    {
        return $this->belongsTo(Medium::class, 'medium', 'id');
    }

    public function boardData()
    {
        return $this->belongsTo(Board::class, 'board', 'id');
    }

    public function typeOfPaymentData()
    {
        return $this->belongsTo(TypeOfPayment::class, 'type_of_payment', 'id');
    }

    public function modeOfPaymentData()
    {
        return $this->belongsTo(ModeOfPayment::class, 'mode_of_payment', 'id');
    }
}
