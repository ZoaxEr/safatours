<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RentRequest as StoreRequest;
use App\Http\Requests\RentRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class RentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RentCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Rent');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/rent');
        $this->crud->setEntityNameStrings('rent', 'rents');

        $this->crud->addField([
            'label' => "Trace NO.",
            'type' => 'text',
            'name' => 'traceNumber',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'renter_name',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'label' => 'Whatsapp Available',
            'name' => 'has_whatsapp',
            'type' => 'checkbox',
            'attributes' => [
                'disabled' => 'disabled',
            ],
            'wrapperAttributes' => [
                'class' => 'col-md-12'
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'renter_phone',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'email',
            'name' => 'renter_mail',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'date_picker',
            'name' => 'pick_up_date',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'date_picker',
            'name' => 'drop_off_date',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'time',
            'name' => 'pick_up_time',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'time',
            'name' => 'drop_off_time',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'address',
            'name' => 'pick_up_location',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'address',
            'name' => 'drop_off_location',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'label' => 'Needs Driver',
            'name' => 'has_driver',
            'type' => 'toggle',
            'hide_when' => [
                0 => ['driver_id'],
            ],
            'attributes' => [
                'disabled' => 'disabled',
            ],
            'wrapperAttributes' => [
                'class' => 'col-md-12',
                'style' => 'display: none;',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'renter_nation',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'label' => "Driver",
            'type' => 'select2',
            'name' => 'driver_id',
            'entity' => 'driver',
            'attribute' => 'name',
            'model' => "App\Models\Driver"
        ]);

        $this->crud->addField([
            'type' => 'tinymce',
            'name' => 'renter_notes',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'car_amount',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'paid_amount',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'remaining_amount',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'insurance_amount',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'HGS_amount',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        $this->crud->addField([
            'type' => 'hidden',
            'name' => 'reviewed',
        ]);

        $this->crud->addField([
            'name'        => 'confirmed', 
            'label'       => 'Confirm', 
            'type'        => 'radio',
            'options'     => [ 
                1 => "Confirm",
                2 => "Cancel"
            ],
            'inline'      => true,
        ]);

        $this->crud->addField([
            'name' => 'cancelled',
            'type' => 'hidden'
        ]);



        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in RentRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
