<?php

namespace App\Observers;

use App\Models\Post;

class postObserver
{
    public function creating(Post $post)
    {
        if (empty($post->title)) {
            $post->title = 'Random title if emoty';
            $post->body = 'Random body if emoty';

            //log message before saving
            Log::info('Creating post'. $post->title);

            // test if this action will run
            Log::info('Before saving, post created with id :'. $post->id);

            
        }
    }
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
