<?php

namespace App\Models\accounts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsBalance extends Model
{
    use HasFactory;
    protected $table = 'accounts_balance';
    protected $fillable = [
        'account_id',
        'opening_balance',
        'closing_balance',
        'business_id',
    ];
}
