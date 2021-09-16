<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PostDataToApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = Http::post(
                'http://statumapi.test:8080/',
                [
                    'name' => $this->data->name,
                    'date_of_birth' => $this->data->date_of_birth,
                    'email' => $this->data->email,
                    'location' => $this->data->location,
                    'username' => $this->data->username,
                    'timezone' => $this->data->timezone,
                ]
            );

        Log::info("API Response: " . $response);
    }
}
