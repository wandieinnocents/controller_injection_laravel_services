<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Log;



class PostObserver
{
    /**
     * Handle the Post "created" event.
     */

    public function creating(Post $post)
    {
        //check 1
        if (empty($post->title)) {
            $post->title = 'Random title if empty';
            $post->body = 'Random body if empty';
        }

        //log this message before saving
        Log::info('A post is being created: ' . $post->title);

        //  test if this action will run
        Log::info('Before saving! Lol.. Post created with ID: ' . $post->id);
    }

    public function created(Post $post): void
    {
        // dd("testing observer");
        //  test if this action will run
        Log::info(' Post created with Title: ' . $post->title);
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
