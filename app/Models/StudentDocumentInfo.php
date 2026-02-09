<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDocumentInfo extends Model
{
    protected $table = "v1_scc_student_document_info";

    public function student(){
        return $this->belongsTo(StudentGeneralInfo::class,'student_id');
    }
}
