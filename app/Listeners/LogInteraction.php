<?php

namespace App\Listeners;

use App\Events\LinkInteraction;
use App\Models\Interaction;

class LogInteraction
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(LinkInteraction $linkInteraction)
    {
        $interaction = new Interaction([
            'campaign_link_id' => $linkInteraction->link->id,
            'ip' => $linkInteraction->request->ip(),
            'user_agent' => $linkInteraction->request->userAgent()
        ]);

        $interaction->save();
    }
}
