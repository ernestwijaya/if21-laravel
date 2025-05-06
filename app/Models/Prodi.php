<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use function PHPUnit\Framework\returnArgument;

class Prodi extends Model
{
    protected $table = 'prodi';

    public function fakultas(): BelongsTo {
        return $this -> belongsTo(Fakultas::class, 'fakultas_id', 'id');
    }
}
