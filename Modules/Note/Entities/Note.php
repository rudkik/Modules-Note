<?php

namespace Modules\Note\Entities;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note  extends Model
{
    use HasFactory;

    /**
     * The attributes name table
     */
    protected $table = 'notes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'questions',
        'answer',
        'top',
        'bottom',
    ];

}
