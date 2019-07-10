<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Resources\V1\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * profile API
     * @param  Request $request
     * @return UserResource
     */
    public function profile(Request $request)
    {
        return new UserResource($request->user());
    }
}
