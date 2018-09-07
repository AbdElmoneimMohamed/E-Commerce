<?php

use App\Shop\Employees\Employee;
use App\Shop\Roles\Role;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        factory(Employee::class)->create([
            "name" => "Super Admin",
            "email" => "admin@admin.com",
            "password" => bcrypt("123456789"),
            'status' => 1
        ])->each(function (Employee $employee) {
            factory(Role::class)->create(['name' => 'admin'])->each(function(Role $role) use ($employee) {
                $employee->roles()->save($role);
            });
        });
        factory(Employee::class)->create(
        );
    }
}
