<?php

namespace App\Models\accounts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = [
        'account_name',
        'account_number',
        'branch_name',
        'account_balance_type',
        'notes',
        'date',
        'is_active',
        'user_id',
        'business_id',
    ];
}
