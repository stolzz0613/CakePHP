<?php

use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class CreateAdminSeedMigration extends AbstractMigration
{
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity("Users", 1, [
            "first_name" => "Andres",
            "last_name"  => "Bustos",
            "email"      => "and@utp.edu.co",
            "password"   => function () {
                $hasher = new DefaultPasswordHasher();
                return $hasher->hash("secret");
            },
            "role" => "admin",
            "active"=>1,
            "created" => function () use ($faker){
                return $faker -> dateTimeBetween($startDate = "now", $endDate = "now");
            },
            "modified" => function () use ($faker){
                return $faker -> dateTimeBetween($startDate = "now", $endDate = "now");
            }
        ]);

        $populator->execute();
    }
}