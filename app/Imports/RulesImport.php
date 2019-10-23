<?php

namespace App\Imports;

use App\Models\Rule;
use App\Models\ParameterRule;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RulesImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row)
        {
            $rule = Rule::create([
                'id' => $key+1,
                'name' => $row['nama_aturan'],
                'game_id' => $row['nama_permainan'],
            ]);

            ParameterRule::create([
                'rule_id'       => $row['rule_id'],
                'parameter_id'  => $row['parameter_id'],
            ]);


        }
    }
}
