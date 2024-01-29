<?php

namespace App\Models\Frontend\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class QuestionsCategories extends Model
{
    use HasFactory;

    protected $table = 'questions_categories';
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
        "name",
        "icon",
        'created_at',
        'updated_at',
    ];

    public function subCategory()
    {
        return $this->hasMany(QuestionsSubCategories::class, 'question_categories_id', 'id');
    }
}
