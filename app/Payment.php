<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primarykey = 'id';

    public $timestamps = true;

    public $fillable = ['payment_mode', 'amount'];
}
