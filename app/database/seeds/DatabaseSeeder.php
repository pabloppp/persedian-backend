<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


        $this->command->info('Seeding currencies table...');
		$this->call('CurrenciesSeeder');
        $this->command->info('Seeding users table...');
        $this->call('UserSeeder');
        $this->command->info('Seeding inventories table...');
        $this->call('InventorySeeder');
        $this->command->info('Seeding collaborators table...');
        $this->call('CollaboratorsSeeder');
        $this->command->info('Seeding tags table...');
        $this->call('TagSeeder');
        $this->command->info('Seeding items table...');
        $this->call('ItemSeeder');

	}

}
