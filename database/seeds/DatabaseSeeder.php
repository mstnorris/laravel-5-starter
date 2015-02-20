<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
     * @var array
     */
    private $tables = array(
        'permission_role',
        'permissions',
        'role_user',
        'roles',
        'users'
    );

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->cleanDatabase();

        $this->call('ConstantsTableSeeder');
        
		// $this->call('UserTableSeeder');
	}

	public function cleanDatabase()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
