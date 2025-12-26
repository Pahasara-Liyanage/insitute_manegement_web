<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher_models';

    protected $fillable = [
        'teacher_fname',
        'teacher_lname',
        'teacher_email',
        'teacher_phone',
        'teacher_nic',
        'subject_model_id',
    ];

    public function subject()
    {
        return $this->belongsTo(SubjectModel::class, 'subject_model_id');
    }
}
