<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\VehicleRequest as StoreRequest;
use App\Http\Requests\VehicleRequest as UpdateRequest;
use App\States;
use Backpack\CRUD\CrudPanel;

/**
 * Class VehicleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class VehicleCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Vehicle');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/vehicle');
        $this->crud->setEntityNameStrings('vehicle', 'vehicles');

        $this->crud->addField([
            'label' => "Trace NO.",
            'type' => 'text',
            'name' => 'traceNumber',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Type",
            'type' => 'text',
            'name' => 'type',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Plate NO.",
            'type' => 'text',
            'name' => 'PlateNumber',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Mark",
            'type' => 'text',
            'name' => 'mark',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Model",
            'type' => 'text',
            'name' => 'model',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'type' => 'hidden',
            'name' => 'slug',
        ]);

        $this->crud->addField([
            'label' => "Description",
            'type' => 'tinymce',
            'name' => 'description',
        ]);

        $states = array();
        foreach (\App\States::pluck('state') as $state) {
            $states[] = $state;
        }
        $this->crud->addField([
            'label' => "Available States",
            'type' => 'select2_multiple',
            'name' => 'states',
            'entity' => 'states',
            'attribute' => 'state',
            'model' => "\App\States",
            'pivot' => true,
            'select_all' => true,
        ]);

        $this->crud->addField([
            'label' => "Kilometres Travelled",
            'type' => 'number',
            'name' => 'KilometresTravelled',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Adults",
            'type' => 'number',
            'name' => 'AdultMax',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Children",
            'type' => 'number',
            'name' => 'ChildMax',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Engine",
            'type' => 'text',
            'name' => 'engine',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Gearbox",
            'type' => 'text',
            'name' => 'gearbox',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([
            'label' => "Outlay",
            'type' => 'text',
            'name' => 'outlay',
        ]);

        $this->crud->addField([
            'label' => "Earnings",
            'type' => 'text',
            'name' => 'earnings',
        ]);

        $this->crud->addField([
            'label' => "Status",
            'type' => 'select_from_array',
            'name' => 'status',
            'options' => ['New', 'Used'],
        ]);

        $this->crud->addField([
            'label' => "Ownership",
            'type' => 'select_from_array',
            'name' => 'ownership',
            'options' => ['Owned', 'Rented'],
        ]);

        $this->crud->addField([
            'label' => "GPS NO.",
            'type' => 'text',
            'name' => 'GPSNumber',
        ]);

        $this->crud->addField([
            'label' => "Old Damages",
            'type' => 'tinymce',
            'name' => 'oldDamages',
        ]);

        $this->crud->addField([
            'label' => "Featured Photo",
            'type' => 'image',
            'name' => 'Thumbnail',
            'upload' => true,
            'attributes' => [
                'accept' => 'image/*',
            ],
        ]);

        $this->crud->addField([
            'label' => "Photos",
            'type' => 'upload_multiple',
            'name' => 'photos',
            'upload' => true,
            'attributes' => [
                'accept' => 'image/*',
                'class' => 'form-control file',
            ],
        ]);

        $this->crud->addField([
            'label' => "Video",
            'type' => 'upload',
            'name' => 'video',
            'mimetypes' => 'video/avi,video/mpeg,video/quicktime,video/mp4',
            'upload' => true,
            'attributes' => [
                'accept' => 'video/mp4,video/x-m4v,video/*',
            ],
        ]);

        $this->crud->addField([
            'label' => "Price",
            'type' => 'number',
            'name' => 'price',
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->crud->addField([ 
            'name' => 'features',
            'label' => 'Features',
            'type' => 'table',
            'entity_singular' => 'Feature', 
            'columns' => [
                'name' => 'Feature',
            ],
        ]);

        $this->crud->addField([ 
            'name' => 'hide',
            'label' => 'Hide',
            'type' => 'checkbox',
        ]);

        $this->crud->addColumn([
            'label' => 'Trace NO.',
            'type' => 'text',
            'name' => 'traceNumber',
        ]);

        $this->crud->addColumn([
            'label' => 'Type',
            'type' => 'text',
            'name' => 'type',
        ]);

        $this->crud->addColumn([
            'label' => 'Plate NO.',
            'type' => 'text',
            'name' => 'PlateNumber',
        ]);

        $this->crud->addColumn([
            'label' => 'Mark',
            'type' => 'text',
            'name' => 'mark',
        ]);

        $this->crud->addColumn([
            'label' => 'Model',
            'type' => 'text',
            'name' => 'model',
        ]);

        $this->crud->addColumn([
            'label' => 'GPS NO.',
            'type' => 'text',
            'name' => 'GPSNumber',
        ]);

        $this->crud->addColumn([
            'label' => 'Thumbnail',
            'type' => 'image',
            'name' => 'Thumbnail',
            'upload' => true,
        ]);

        $this->crud->addColumn([
            'label' => 'Photos',
            'type' => 'text',
            'name' => 'photos',
        ]);

        $this->crud->addColumn([
            'label' => 'Features',
            'type' => 'table',
            'name' => 'features',
            'columns' => [
                'name' => 'Feature',
            ],
        ]);

        $this->crud->addColumn([
            'label' => 'Price',
            'type' => 'text',
            'name' => 'price',
        ]);

        $this->crud->addColumn([
            'label' => 'Adults Maximum',
            'type' => 'text',
            'name' => 'AdultMax',
        ]);

        $this->crud->addColumn([
            'label' => 'Children Maximum',
            'type' => 'text',
            'name' => 'ChildMax',
        ]);

        $this->crud->addColumn([
            'label' => 'Kilometres Travelled',
            'type' => 'text',
            'name' => 'KilometresTravelled',
        ]);


        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in VehicleRequest
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

    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        \App\VehiclesHasStates::where('vehicle_id', $id)->delete();

        return $this->crud->delete($id);
    }

}
