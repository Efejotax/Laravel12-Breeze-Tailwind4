<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage = null)
 */

class Student extends Model
{
    /** @use HasFactory<StudentFactory> */
    use HasFactory;
    protected $fillable = ['name', 'phone', 'address', 'email',  'curso'];
    static public function getLabels(): array|string|null
    {
        return __("students");
    }

   /* public static function paginate(int $int)
    {

    }*/
}
