<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //During creation:
    //code = refCode(env(PP_PREFIX_TRANSACTION, 'TRA'), $this->id);
    //frais_service = change(env("PP_CURRENCY", 0), $this->currency, env("PP_FRAIS_SERVICE", 0), $this->ordered_at)

}
