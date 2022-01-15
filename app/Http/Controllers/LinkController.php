<?php

namespace App\Http\Controllers;

use App\Events\LinkInteraction;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function __invoke(Request $request)
    {
        // grab path
        $path = $request->path();

        // check if link exists with path
        $resolvedLink = Link::where('path', $path)->first();

        // if no link exists, just 404 the request
        if (!$resolvedLink) {
            abort(404);
        }

        // link does exist, so log the interaction
        LinkInteraction::dispatch($request, $resolvedLink);

        // then send the user to their destination
        return redirect($resolvedLink->destination);
    }
}
