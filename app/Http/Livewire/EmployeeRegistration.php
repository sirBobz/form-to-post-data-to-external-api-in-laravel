<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Jobs\PostDataToApi;
use App\Models\Employee;

class EmployeeRegistration extends Component
{
    public $name;
    public $date_of_birth;
    public $location;
    public $email;
    public $username;
    public $timezone;
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|max:100',
        'date_of_birth' => 'required|max:20',
        'email' => 'required|email|max:100',
        'location' => 'required|max:100',
        'username' => 'required|max:100',
        'timezone' => 'required|max:100',
    ];

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }

    public function submit()
    {

        $validatedData = $this->validate();

        Employee::create($validatedData);

        //send data to queue
        PostDataToApi::dispatch($validatedData);

        $this->successMessage = 'Employee Created Successfully.';
        $this->clearForm();
    }

    public function clearForm(){
        $this->name = '';
        $this->date_of_birth = '';
        $this->email = '';
        $this->location = '';
        $this->username = '';
        $this->timezone = '';
    }

    public function render()
    {
        return view('livewire.employee-registration');
    }
}
