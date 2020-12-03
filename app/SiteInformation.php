<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Site;

class SiteInformation extends Model
{
    protected $table = 'site_information';
    protected $guarded = [];

    public function site() {
        return $this->hasOne(Site::class, 'id', 'site_id');
    }
}
