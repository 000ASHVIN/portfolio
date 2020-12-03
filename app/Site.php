<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SiteInformation;

class Site extends Model
{
    protected $guarded = [];

    public function siteInformation() {
        return $this->belongsTo(SiteInformation::class);
    }
}
