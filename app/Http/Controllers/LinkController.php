<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function __invoke(Request $request)
    {
        // grab path
        $path = $request->path();

        // check if kin exists with path
        $resolvedLink = Link::where('path', $path)->first();

        if (!$resolvedLink) {
            abort(404);
        }

        return redirect($resolvedLink->destination);
    }
}
