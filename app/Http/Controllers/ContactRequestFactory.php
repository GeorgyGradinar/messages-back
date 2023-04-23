<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequestFirst;
use App\Models\ContactRequestSecond;


class ContactRequestFactory
{
    static function createContactRequest(Request $request, bool $isSaveToDB) {
        if ($isSaveToDB) {
        
            $contactRequest = new ContactRequestFirst();
        } else {
            $contactRequest = new ContactRequestSecond();
        }

        $contactRequest -> create($request);

        return $contactRequest;
     }
}
