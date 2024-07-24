<?php

namespace App\Observers;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class patientObserver
{

      public function creating(Patient $patient)
    {
        if (empty($patient->title)) {
            // $patient->first_name = 'Random title if empty';
            // $patient->last_name = 'Random body if empty';

            //log message before saving
            Log::info('Creating patient '. $patient->first_name);

            // test if this action will run
            Log::info('Before saving, patient created with id: '. $patient->id);

            
        }
    }
    /**
     * Handle the Patient "created" event.
     */
    public function created(Patient $patient): void
    {
        Log::info('After saving, patient created with id: '. $patient->id);
        $patient_name = $patient->first_name . ' ' . $patient->last_name;
        $patient->slug = Str::slug($patient_name, '-');
    }

    /**
     * Handle the Patient "updated" event.
     */
    public function updated(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "deleted" event.
     */
    public function deleted(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "restored" event.
     */
    public function restored(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "force deleted" event.
     */
    public function forceDeleted(Patient $patient): void
    {
        //
    }
}
