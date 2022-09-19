<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Fact;
use App\Models\Security;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $attributes = $this->getAttributesCollection();
        $securities = $this->getSecuritiesCollection();
        $facts = $this->getFactsCollection();

        // Build Attributes
        $attributes->each(function (string $attributeName) {
           Attribute::factory()->create([
                'name' => $attributeName,
           ]);
        });

        // Build Securities
        $securities->each(function (string $securitySymbol) {
            Security::factory()->create([
                'symbol' => $securitySymbol,
            ]);
        });

        // Build Facts
        $facts->each(function (array $fact) {
            Fact::factory()->create([
               'attribute_id' => $fact['attribute_id'],
               'security_id' => $fact['security_id'],
               'value' => $fact['value'],
            ]);
        });
    }

    private function getAttributesCollection(): Collection
    {
        return collect([
            1 => 'price',
            2 => 'eps',
            3 => 'dps',
            4 => 'sales',
            5 => 'ebitda',
            6 => 'free_cash_flow',
            7 => 'assets',
            8 => 'liabilities',
            9 => 'debt',
            10 => 'shares',
        ]);
    }

    private function getSecuritiesCollection(): Collection
    {
        return collect([
            1 => 'ABC',
            2 => 'BCD',
            3 => 'CDE',
            4 => 'DEF',
            5 => 'EFG',
            6 => 'FGH',
            7 => 'GHI',
            8 => 'HIJ',
            9 => 'IJK',
            10 => 'JKL',
        ]);
    }

    private function getFactsCollection(): Collection
    {
        return collect([
            0 => [
                'security_id' => 1,
                'attribute_id' => 1,
                'value' => 1,
            ],
            1 => [
                'security_id' => 1,
                'attribute_id' => 2,
                'value' => 2,
            ],
            2 => [
                'security_id' => 1,
                'attribute_id' => 3,
                'value' => 3,
            ],
            3 => [
                'security_id' => 1,
                'attribute_id' => 4,
                'value' => 4,
            ],
            4 => [
                'security_id' => 1,
                'attribute_id' => 5,
                'value' => 5,
            ],
            5 => [
                'security_id' => 1,
                'attribute_id' => 6,
                'value' => 6,
            ],
            6 => [
                'security_id' => 1,
                'attribute_id' => 7,
                'value' => 7,
            ],
            7 => [
                'security_id' => 1,
                'attribute_id' => 8,
                'value' => 8,
            ],
            8 => [
                'security_id' => 1,
                'attribute_id' => 9,
                'value' => 9,
            ],
            9 => [
                'security_id' => 1,
                'attribute_id' => 10,
                'value' => 10,
            ],
            10 => [
                'security_id' => 2,
                'attribute_id' => 1,
                'value' => 2,
            ],
            11 => [
                'security_id' => 2,
                'attribute_id' => 2,
                'value' => 4,
            ],
            12 => [
                'security_id' => 2,
                'attribute_id' => 3,
                'value' => 6,
            ],
            13 => [
                'security_id' => 2,
                'attribute_id' => 4,
                'value' => 8,
            ],
            14 => [
                'security_id' => 2,
                'attribute_id' => 5,
                'value' => 10,
            ],
            15 => [
                'security_id' => 2,
                'attribute_id' => 6,
                'value' => 12,
            ],
            16 => [
                'security_id' => 2,
                'attribute_id' => 7,
                'value' => 14,
            ],
            17 => [
                'security_id' => 2,
                'attribute_id' => 8,
                'value' => 16,
            ],
            18 => [
                'security_id' => 2,
                'attribute_id' => 9,
                'value' => 18,
            ],
            19 => [
                'security_id' => 2,
                'attribute_id' => 10,
                'value' => 20,
            ],
            20 => [
                'security_id' => 3,
                'attribute_id' => 1,
                'value' => 3,
            ],
            21 => [
                'security_id' => 3,
                'attribute_id' => 2,
                'value' => 6,
            ],
            22 => [
                'security_id' => 3,
                'attribute_id' => 3,
                'value' => 9,
            ],
            23 => [
                'security_id' => 3,
                'attribute_id' => 4,
                'value' => 12,
            ],
            24 => [
                'security_id' => 3,
                'attribute_id' => 5,
                'value' => 15,
            ],
            25 => [
                'security_id' => 3,
                'attribute_id' => 6,
                'value' => 18,
            ],
            26 => [
                'security_id' => 3,
                'attribute_id' => 7,
                'value' => 21,
            ],
            27 => [
                'security_id' => 3,
                'attribute_id' => 8,
                'value' => 24,
            ],
            28 => [
                'security_id' => 3,
                'attribute_id' => 9,
                'value' => 27,
            ],
            29 => [
                'security_id' => 3,
                'attribute_id' => 10,
                'value' => 30,
            ],
            30 => [
                'security_id' => 4,
                'attribute_id' => 1,
                'value' => 4,
            ],
            31 => [
                'security_id' => 4,
                'attribute_id' => 2,
                'value' => 8,
            ],
            32 => [
                'security_id' => 4,
                'attribute_id' => 3,
                'value' => 12,
            ],
            33 => [
                'security_id' => 4,
                'attribute_id' => 4,
                'value' => 16,
            ],
            34 => [
                'security_id' => 4,
                'attribute_id' => 5,
                'value' => 20,
            ],
            35 => [
                'security_id' => 4,
                'attribute_id' => 6,
                'value' => 24,
            ],
            36 => [
                'security_id' => 4,
                'attribute_id' => 7,
                'value' => 28,
            ],
            37 => [
                'security_id' => 4,
                'attribute_id' => 8,
                'value' => 32,
            ],
            38 => [
                'security_id' => 4,
                'attribute_id' => 9,
                'value' => 36,
            ],
            39 => [
                'security_id' => 4,
                'attribute_id' => 10,
                'value' => 40,
            ],
            40 => [
                'security_id' => 5,
                'attribute_id' => 1,
                'value' => 5,
            ],
            41 => [
                'security_id' => 5,
                'attribute_id' => 2,
                'value' => 10,
            ],
            42 => [
                'security_id' => 5,
                'attribute_id' => 3,
                'value' => 15,
            ],
            43 => [
                'security_id' => 5,
                'attribute_id' => 4,
                'value' => 20,
            ],
            44 => [
                'security_id' => 5,
                'attribute_id' => 5,
                'value' => 25,
            ],
            45 => [
                'security_id' => 5,
                'attribute_id' => 6,
                'value' => 30,
            ],
            46 => [
                'security_id' => 5,
                'attribute_id' => 7,
                'value' => 35,
            ],
            47 => [
                'security_id' => 5,
                'attribute_id' => 8,
                'value' => 40,
            ],
            48 => [
                'security_id' => 5,
                'attribute_id' => 9,
                'value' => 45,
            ],
            49 => [
                'security_id' => 5,
                'attribute_id' => 10,
                'value' => 50,
            ],
            50 => [
                'security_id' => 6,
                'attribute_id' => 1,
                'value' => 6,
            ],
            51 => [
                'security_id' => 6,
                'attribute_id' => 2,
                'value' => 12,
            ],
            52 => [
                'security_id' => 6,
                'attribute_id' => 3,
                'value' => 18,
            ],
            53 => [
                'security_id' => 6,
                'attribute_id' => 4,
                'value' => 24,
            ],
            54 => [
                'security_id' => 6,
                'attribute_id' => 5,
                'value' => 30,
            ],
            55 => [
                'security_id' => 6,
                'attribute_id' => 6,
                'value' => 36,
            ],
            56 => [
                'security_id' => 6,
                'attribute_id' => 7,
                'value' => 42,
            ],
            57 => [
                'security_id' => 6,
                'attribute_id' => 8,
                'value' => 48,
            ],
            58 => [
                'security_id' => 6,
                'attribute_id' => 9,
                'value' => 54,
            ],
            59 => [
                'security_id' => 6,
                'attribute_id' => 10,
                'value' => 60,
            ],
            60 => [
                'security_id' => 7,
                'attribute_id' => 1,
                'value' => 7,
            ],
            61 => [
                'security_id' => 7,
                'attribute_id' => 2,
                'value' => 14,
            ],
            62 => [
                'security_id' => 7,
                'attribute_id' => 3,
                'value' => 21,
            ],
            63 => [
                'security_id' => 7,
                'attribute_id' => 4,
                'value' => 28,
            ],
            64 => [
                'security_id' => 7,
                'attribute_id' => 5,
                'value' => 35,
            ],
            65 => [
                'security_id' => 7,
                'attribute_id' => 6,
                'value' => 42,
            ],
            66 => [
                'security_id' => 7,
                'attribute_id' => 7,
                'value' => 49,
            ],
            67 => [
                'security_id' => 7,
                'attribute_id' => 8,
                'value' => 56,
            ],
            68 => [
                'security_id' => 7,
                'attribute_id' => 9,
                'value' => 63,
            ],
            69 => [
                'security_id' => 7,
                'attribute_id' => 10,
                'value' => 70,
            ],
            70 => [
                'security_id' => 8,
                'attribute_id' => 1,
                'value' => 8,
            ],
            71 => [
                'security_id' => 8,
                'attribute_id' => 2,
                'value' => 16,
            ],
            72 => [
                'security_id' => 8,
                'attribute_id' => 3,
                'value' => 24,
            ],
            73 => [
                'security_id' => 8,
                'attribute_id' => 4,
                'value' => 32,
            ],
            74 => [
                'security_id' => 8,
                'attribute_id' => 5,
                'value' => 40,
            ],
            75 => [
                'security_id' => 8,
                'attribute_id' => 6,
                'value' => 48,
            ],
            76 => [
                'security_id' => 8,
                'attribute_id' => 7,
                'value' => 56,
            ],
            77 => [
                'security_id' => 8,
                'attribute_id' => 8,
                'value' => 64,
            ],
            78 => [
                'security_id' => 8,
                'attribute_id' => 9,
                'value' => 72,
            ],
            79 => [
                'security_id' => 8,
                'attribute_id' => 10,
                'value' => 80,
            ],
            80 => [
                'security_id' => 9,
                'attribute_id' => 1,
                'value' => 9,
            ],
            81 => [
                'security_id' => 9,
                'attribute_id' => 2,
                'value' => 18,
            ],
            82 => [
                'security_id' => 9,
                'attribute_id' => 3,
                'value' => 27,
            ],
            83 => [
                'security_id' => 9,
                'attribute_id' => 4,
                'value' => 36,
            ],
            84 => [
                'security_id' => 9,
                'attribute_id' => 5,
                'value' => 45,
            ],
            85 => [
                'security_id' => 9,
                'attribute_id' => 6,
                'value' => 54,
            ],
            86 => [
                'security_id' => 9,
                'attribute_id' => 7,
                'value' => 63,
            ],
            87 => [
                'security_id' => 9,
                'attribute_id' => 8,
                'value' => 72,
            ],
            88 => [
                'security_id' => 9,
                'attribute_id' => 9,
                'value' => 81,
            ],
            89 => [
                'security_id' => 9,
                'attribute_id' => 10,
                'value' => 90,
            ],
            90 => [
                'security_id' => 10,
                'attribute_id' => 1,
                'value' => 10,
            ],
            91 => [
                'security_id' => 10,
                'attribute_id' => 2,
                'value' => 20,
            ],
            92 => [
                'security_id' => 10,
                'attribute_id' => 3,
                'value' => 30,
            ],
            93 => [
                'security_id' => 10,
                'attribute_id' => 4,
                'value' => 40,
            ],
            94 => [
                'security_id' => 10,
                'attribute_id' => 5,
                'value' => 50,
            ],
            95 => [
                'security_id' => 10,
                'attribute_id' => 6,
                'value' => 60,
            ],
            96 => [
                'security_id' => 10,
                'attribute_id' => 7,
                'value' => 70,
            ],
            97 => [
                'security_id' => 10,
                'attribute_id' => 8,
                'value' => 80,
            ],
            98 => [
                'security_id' => 10,
                'attribute_id' => 9,
                'value' => 90,
            ],
            99 => [
                'security_id' => 10,
                'attribute_id' => 10,
                'value' => 100,
            ],
        ]);

    }
}
