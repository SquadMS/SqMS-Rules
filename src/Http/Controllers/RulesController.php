<?php

namespace SquadMS\Rules\Http\Controllers;

use Illuminate\Routing\Controller;
use SquadMS\Rules\Models\RuleArticle;

class RulesController extends Controller
{
    /**
     * Shows the rules page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /* Show home page */
        return view('sqms-rules::rules', [
            'rules' => RuleArticle::ordered()->get(),
        ]);
    }
}
