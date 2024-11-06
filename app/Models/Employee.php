<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
  protected $fillable = [
    "department_id",
    "nik",
    "first_name",
    "last_name",
    "date_of_birth",
    "phone_no",
    "sex",
    "employees.address",
    "postcode_id",
    "npwp",
    "employee_status_id",
    "title_id",
    "subtitle_id",
    "band_id",
    "outlet_id",
    "sap_id",
    "npp",
    "gradeeselon_id",
    "area_id",
    "emplevel_id",
    "saptitle_id",
    "saptitle_name",
    "date_hired",
    "date_promoted",
    "date_last_mutated",
    "descstatus_id",
    "bpjs_id",
    "insured_member_count",
    "bpjs_class",
    "bpjstk_id",
    "contract_document_id",
    "contract_sequence_no",
    "contract_term",
    "contract_start",
    "contract_end",
    "status_pasangan",
    "jumlah_tanggungan",
    "pasangan_ditanggung_pajak",
    "rekening_no",
    "rekening_name",
    "bank_id",
    "recruitment_id",
    "pants_size",
    "shirt_size",
    "blood_type",
    "religion",
    "sap_id",
  ];
  public function department(): BelongsTo
  {
    return $this->belongsTo(Department::class);
  }
  public function store(): BelongsTo
  {
    return $this->belongsTo(Store::class);
  }
}
