<?php

namespace App\Http\Controllers;

use App\APropo;
use App\Carousel;
use App\CarouselCitation;
use App\Icon;
use App\Log;
use App\Logo;
use App\Media;
use App\MessageContact;
use App\Produit;
use App\Role;
use App\Service;
use App\Technologie;
use App\User;
use Illuminate\Http\Request;
use App\Contact;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }

    public function dashboard() {
        $contact_count = countElement(Contact::class);
        $user_count = countElement(User::class);
        $role_count = countElement(Role::class);
        $service_count = countElement(Service::class);
        $apropos_count = countElement(APropo::class);
        $log_count = countElement(Log::class);
        $media_count = countElement(Media::class);
        $message_count = countElement(MessageContact::class);

        return view('dashboard',compact(
            'user_count',
            'service_count',
            'role_count',
            'contact_count',
            'log_count',
            'apropos_count',
            'media_count',
            'message_count'
        ));
    }
}
