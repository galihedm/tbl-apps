<?php

namespace App\Models\Frontend\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class QuestionsSubCategories extends Model
{
    use HasFactory;

    protected $table = 'questions_sub_categories';
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
        'question_categories_id',
        'sub_category_name',
        'sub_category_icon',
        'sub_category_quota',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->hasOne(QuestionsCategories::class, 'id', 'question_categories_id');
    }
}
