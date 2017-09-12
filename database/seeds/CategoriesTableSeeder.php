<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::firstOrNew([
            'slug' => 'magento2',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Magento 2',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'magento1',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Magento 1',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'laravel',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Laravel',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'php',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Modern PHP',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'linux',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Linux',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'pro-tips',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name'       => 'Quick Tips',
            ])->save();
        }
    }
}
