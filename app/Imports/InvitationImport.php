<?php

namespace App\Imports;

use App\Models\WeedingInvitation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class InvitationImport implements ToModel
{
    private $weeding_id;
    public function __construct($weeding_id)
    {
        $this->weeding_id = $weeding_id;
    }

    public function model(array $row)
    {
        return new WeedingInvitation([
            'weeding_id' => $this->weeding_id,
            'name' => $row[1],
            'slug' => Str::slug(strtolower($row[1])),
            'phone' => $row[0],
        ]);
    }
}
