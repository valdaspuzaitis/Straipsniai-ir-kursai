<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Image;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $imageName;

    public function __construct($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $img = Image::make(public_path('queueImages/'.$this->imageName))->widen(200);       
        $img->save(public_path('images/'.$this->imageName));
        $img->destroy();
        File::delete(public_path('queueImages/'.$this->imageName));
    }
}
