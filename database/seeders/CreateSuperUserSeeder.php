<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Company;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Country;
use App\Models\State;
use Carbon\Carbon;
use DB;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currentTimestamp = Carbon::now();

        Company::updateOrCreate([
            'company_name'=>'Smart HRMS',
            'created_by'=>'1'
        ]);

        $user_super_admin = User::updateOrCreate([
            'first_name'=>'Mr',
            'last_name'=>'Due',
            'username'=>'JoneDue',
            'email'=>'jondue10.superadmin@gmail.com',
            'employee_id'=>'EMP001',
            'joining_date'=>$currentTimestamp->toDateString(),
            'email_verified_at'=> $currentTimestamp,
            'password' => bcrypt('Admin@123'),
            'gender'=>'m',
            'company_id'=>'1'
        ]);

        $department = Department::updateOrCreate([
            'name'=>'Administrative',
            'status'=>true,
            'user_id'=>$user_super_admin->id,
            'created_by'=>$user_super_admin->id,
        ]);

        $designation_id =  Designation::updateOrCreate([
            'name'=>'Management',
            'status'=>true,
            'department_id'=>$department->id,
            'user_id'=>$user_super_admin->id,
            'created_by'=>$user_super_admin->id,
        ]);

        $country =  Country::updateOrCreate([
            'name'=>'Canada',
            'code'=>'CA',
            'status'=>true,
            'created_by'=>$user_super_admin->id,
        ]);

        $state =  Country::updateOrCreate([
            'name'=>'Ontario',
            'code'=>'ON',
            'status'=>true,
            'country_id'=>$country->id,
            'created_by'=>$user_super_admin->id,
        ]);

        $role_admin = Role::updateOrCreate(['name'=>'Administrative / Super Admin','guard_name'=>'web']);

        $role_hr = Role::updateOrCreate(['name'=>'HR','guard_name'=>'web','created_by'=>$user_super_admin->id]);

        $role_employee = Role::updateOrCreate(['name'=>'Employee','guard_name'=>'web','created_by'=>$user_super_admin->id]);

        $permission_admin = Permission::updateOrCreate(['name' => 'all-access','guard_name'=>'web','created_by'=>$user_super_admin->id]);

        $role_admin->givePermissionTo($permission_admin);

        $role_hr->givePermissionTo($permission_admin);

        $role_employee->givePermissionTo($permission_admin);

        $user_super_admin->assignRole($role_admin);

        $user_hr = User::updateOrCreate([
            'first_name'=>'Mr',
            'last_name'=>'Johness',
            'username'=>'JohnessDave',
            'email'=>'johanessdave.hr@gmail.com',
            'employee_id'=>'EMP002',
            'joining_date'=>$currentTimestamp->toDateString(),
            'email_verified_at'=> $currentTimestamp,
            'password' => bcrypt('Admin@123'),
            'gender'=>'m',
            'company_id'=>'1'
        ]);

        $user_hr->assignRole($role_hr);

        $user_employee = User::updateOrCreate([
            'first_name'=>'Mr',
            'last_name'=>'David',
            'username'=>'DavidSain',
            'email'=>'davidSain.employee@gmail.com',
            'employee_id'=>'EMP003',
            'joining_date'=>$currentTimestamp->toDateString(),
            'email_verified_at'=> $currentTimestamp,
            'password' => bcrypt('Admin@123'),
            'gender'=>'m',
            'company_id'=>'1'
        ]);

        $user_employee->assignRole($role_employee);
    }
}
