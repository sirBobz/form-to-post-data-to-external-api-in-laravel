<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Jobs\PostDataToApi;
use Illuminate\Support\Facades\Bus;

class EmployeeRegistration extends Component
{
    public $name;
    public $date_of_birth;
    public $location;
    public $email;
    public $username;
    public $timezone;

    protected $rules = [
        'name' => 'required|max:100',
        'date_of_birth' => 'required|max:20',
        'email' => 'required|email|max:100',
        'location' => 'required|max:100',
        'username' => 'required|max:100',
        'timezone' => 'required|max:100',
    ];

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function submit() {

        $this->posttoApi = true;
        $validatedData = $this->validate();

        //send data to queue
        $batch = Bus::batch([
            new PostDataToApi($validatedData),
        ])->dispatch();

        $this->batchId = $batch->id;
    }

    // public function getImportBatchProperty()
    // {
    //     if (!$this->batchId) {
    //         return null;
    //     }

    //     return Bus::findBatch($this->batchId);
    // }

    // public function updateImportProgress()
    // {
    //     $this->importFinished = $this->importBatch->finished();

    //     if ($this->importFinished) {
    //         $this->posttoApi = false;
    //     }
    // }

    public function render()
    {
        return view('livewire.employee-registration');
    }
}
