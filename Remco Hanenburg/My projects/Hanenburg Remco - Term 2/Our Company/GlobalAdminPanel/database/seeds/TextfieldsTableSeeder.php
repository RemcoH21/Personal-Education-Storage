<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextfieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('textfields')->insert([
          'name' => 'textfield1',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '1',
      ]);
      DB::table('textfields')->insert([
          'name' => 'textfield2',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '1',
      ]);
      DB::table('textfields')->insert([
          'name' => 'textfield3',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '1',
      ]);
      DB::table('textfields')->insert([
          'name' => 'textfield4',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '1',
      ]);
      DB::table('textfields')->insert([
          'name' => 'textfield5',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '2',
      ]);
      DB::table('textfields')->insert([
          'name' => 'textfield6',
          'content' => 'hello this is a test field with test content please insert this on your website',
          'page_id' => '2',
      ]);
    }
}
