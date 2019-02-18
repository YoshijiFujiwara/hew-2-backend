<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SessionResource;
use App\Model\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class SessionController extends Controller
{
    public function index()
    {
        return SessionResource::collection(Session::all());
    }

    public function show(Session $session)
    {
        return new SessionResource($session);
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
