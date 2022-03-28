<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  /*        $path =  base_path().'/database/data/function.sql';

        $sql = file_get_contents($path);
        DB::unprepared($sql);

        $path =  base_path().'/database/data/menus.sql';

        $sql = file_get_contents($path);
        DB::unprepared($sql);

        $path =  base_path().'/database/data/main_page.sql';

        $sql = file_get_contents($path);
        DB::unprepared($sql);
*/
        $path =  base_path().'/database/data/newses.sql';

        $sql = file_get_contents($path);
        DB::unprepared($sql);

        $path =  base_path().'/database/data/static_page.sql';

        $sql = file_get_contents($path);
        DB::unprepared($sql);

    }
}
