<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Figure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tránh tạo user trùng email
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'), // nên có password rõ ràng nếu cần login
            ]);
        }

        // Tránh tạo trùng FigureCode
        if (!Figure::where('figureCode', 'VIOGSC2025')->exists()) {
            Figure::factory()->create([
                'figureName'  => 'Violet',
                'figureCode'  => 'VIOGSC2025',
                'figureBrand' => 'Good Smile Company',
                'figureType'  => 'Scale 1/7',
            ]);
        }
    }
}
