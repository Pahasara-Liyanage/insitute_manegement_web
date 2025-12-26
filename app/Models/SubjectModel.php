<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    protected $table = 'subject_models';

    protected $fillable = [
        'subject_name',
    ];

    public function teachers()
    {
        return $this->hasMany(TeacherModel::class, 'subject_model_id');
    }
}
