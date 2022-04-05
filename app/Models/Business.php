<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    public $fillable = ['user_id','name', 'company_name','country_code', 'phone','email','role', 'interest', 'establish_date','industry','location','employees_number','entity_type','description','highlights','facility_details','Avg_monthly_sales','year_sales','EBITDA','assets','Phisycal_assets_value','photo','document','proof','receiving_quotations','plan'];

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
