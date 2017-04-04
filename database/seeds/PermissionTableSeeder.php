<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $createInvoice = new Permission();
        $createInvoice->name = "create-invoice";
        $createInvoice->display_name = "Create-Invoice";
        $createInvoice->description = " Create new invoice";
        $createInvoice->save();

        $EditInvoice = new Permission();
        $EditInvoice->name = "edit-invoice";
        $EditInvoice->display_name = "Edit-invoice";
        $EditInvoice->description = " Edit Existing Invoce";
        $EditInvoice->save();

        $DeleteInvoice = new Permission();
        $DeleteInvoice->name = "delete-invoice";
        $DeleteInvoice->display_name = "Delete-invoice";
        $DeleteInvoice->description = " Delete Existing invoice";
        $DeleteInvoice->save();

    }
}
