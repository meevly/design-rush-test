<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->generateCompanyName() . ' ' . fake()->unique()->word();
        
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            // a custom method because fake()->imageUrl() no longer works due to placeholder.com shutdown as of 05/21/2025
            // TODO: need refactor to use native method once library fixed to use another service.
            'logo' => $this->generateLogoUrl($name),
            'description' => fake()->paragraphs(2, true),
        ];
    }
    
    private function generateCompanyName(): string
    {
        $prefixes = [
            'Tech', 'Dev', 'Code', 'Byte', 'Data', 'Cloud', 'Cyber', 'Net', 
            'Logic', 'App', 'Soft', 'Web', 'Digital', 'Next', 'Smart', 'Meta',
            'Quantum', 'Pixel', 'Alpha', 'Beta', 'Nova', 'Echo', 'Fusion', 'Spark'
        ];
        
        $suffixes = [
            'Solutions', 'Systems', 'Technologies', 'Labs', 'Works', 'Innovations',
            'Software', 'Group', 'Interactive', 'Studios', 'Dynamics', 'Networks',
            'Media', 'Engine', 'Hub', 'Sphere', 'Wave', 'Matrix', 'Link', 'Pulse'
        ];
        
        return fake()->randomElement($prefixes) . ' ' . fake()->randomElement($suffixes);
    }

    private function generateLogoUrl(string $name): string
    {
        $hash = md5($name);
        $seed = hexdec(substr($hash, 0, 8));
        $seed = abs($seed);

        return 'https://picsum.photos/seed/' . $seed . '/400/300';
    }
}