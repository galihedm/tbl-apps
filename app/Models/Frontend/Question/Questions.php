<?php

namespace App\Models\Frontend\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Questions extends Model
{
    use HasFactory;

    protected $table = 'questions';
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
        "question_sub_categories_id",
        "question_text",
        "question_content_text",
        "question_file_url",
        "helper_id",
        'created_at',
        'updated_at',
    ];
}
