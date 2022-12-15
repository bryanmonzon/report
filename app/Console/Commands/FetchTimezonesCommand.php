<?php

namespace App\Console\Commands;

use App\Models\Timezone;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchTimezonesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:timezones';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches and updates the Timezones table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Fetching timezones from Savvy Cal...');

        $url = 'https://api.savvycal.com/v1/time_zones';

        $response = Http::withToken(config('services.savvycal.private_token'), "Bearer")
            ->withHeaders(['Accept' => 'application/json'])
            ->get($url);

            if(!$response->ok()) {
                $this->error('Err something went wrong while fetching from SavvyCal');
                return Command::FAILURE;
            }
            
                $this->info('Successfully fetched timezones. Updating the timezones table...');
                
                $timezones = collect($response->json());
                $bar = $this->output->createProgressBar(count($timezones));
                $bar->start();
                
                $timezones->each(function($timezone) use ($bar){
                    Timezone::updateOrCreate(
                        [
                            'id' => $timezone['id'],
                            'abbreviation' => $timezone['abbreviation'],
                        ]);
                    $bar->advance();
                });
                $bar->finish();
                $this->newLine();
                $this->info('Done importing timezones');
            
        

        return Command::SUCCESS;
    }
}
