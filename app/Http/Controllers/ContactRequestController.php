<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactRequestFactory;

class ContactRequestController extends Controller
{
    public function insert(Request $request) {
        $currentContactRequest = [ContactRequestFactory::class, 'createContactRequest']($request, true);

        $currentContactRequest -> save();

        return 'Success';
     }
}
