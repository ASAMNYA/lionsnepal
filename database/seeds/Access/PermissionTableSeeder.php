<?php

use Carbon\Carbon;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;

/**
 * Class PermissionTableSeeder.
 */
class PermissionTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncateMultiple([config('access.permissions_table'), config('access.permission_role_table')]);

        /**
         * Don't need to assign any permissions to administrator because the all flag is set to true
         * in RoleTableSeeder.php.
         */

        /**
         * Misc Access Permissions.
         */
        $permission_model = config('access.permission');
        $viewBackend = new $permission_model();
        $viewBackend->name = 'view-backend';
        $viewBackend->display_name = 'View Backend';
        $viewBackend->sort = 1;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->save();


        $permission_model = config('access.permission');
        $viewParent = new $permission_model();
        $viewParent->name = 'view-parent';
        $viewParent->display_name = 'View Parent';
        $viewParent->sort = 0;
        $viewParent->created_at = Carbon::now();
        $viewParent->updated_at = Carbon::now();
        $viewParent->save();


        $permission_model = config('access.permission');
        $viewTeacher = new $permission_model();
        $viewTeacher->name = 'view-teacher';
        $viewTeacher->display_name = 'View Teacher';
        $viewTeacher->sort = 0;
        $viewTeacher->created_at = Carbon::now();
        $viewTeacher->updated_at = Carbon::now();
        $viewTeacher->save();


        $permission_model = config('access.permission');
        $viewStudent = new $permission_model();
        $viewStudent->name = 'view-student';
        $viewStudent->display_name = 'View Student';
        $viewStudent->sort = 0;
        $viewStudent->created_at = Carbon::now();
        $viewStudent->updated_at = Carbon::now();
        $viewStudent->save();

        $this->enableForeignKeys();
    }
}
