<?php

namespace AhmedArafat\AllInOne\Traits;

use Exception;

trait SeederHelperTrait
{
    /**
     * @param array $data
     * @param $model
     * @param array $cols
     * @param string|null $add_cols
     * @return void
     * @throws Exception
     */
    public function seederInsertionForTranslatableModels(array &$data, $model, array $cols = [], string $add_cols = null): void
    {
        if (!isset($data['en'])) throw new Exception("Key `en` Not Found");
        if (!isset($data['ar'])) throw new Exception("Key `ar` Not Found");

        for ($i = 0; $i < count($data['en']); $i++) {
            $records = [];
            foreach ($cols as $col) {
                $records['en'][$col] = $data['en'][$i][$col];
                $records['ar'][$col] = $data['ar'][$i][$col];
            }
            if (!empty($add_cols)) {
                foreach ($data[$add_cols][$i] as $col => $val) {
                    $records[$col] = $val;
                }
            }
            $model::query()->updateOrCreate([
                'id' => $i + 1
            ], $records);
        }
    }
}
