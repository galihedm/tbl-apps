<?php

namespace App\Models\Frontend\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class QuestionsAnswers extends Model
{
    use HasFactory;

    protected $table = 'questions_answers';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    // Use the creating event to generate a UUID for the 'id' field
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Uuid::uuid4();
        });
    }

    protected $fillable = [
        'answer_name',
        'answer_code',
        'answer_point',
        'is_correct',
        'question_id',
        'question_category_id',
        'question_sub_category_id',
        'helper_id',
        'created_at',
        'updated_at',
    ];
}
