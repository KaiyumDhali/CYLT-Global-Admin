<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'company_details',
        'company_address',
        'cell_number',
        'phone_number',
        'hotline_number',
        'email',
        'website_url',
        'trade_license_no',
        'etin_no',
        'bin_no',
        'currency',
        'left_logo',
        'small_logo',
        'status',
    ];
}

