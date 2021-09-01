<?php

namespace App\Http\Controllers\Api\v1;

use App\UserAction;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserActionsRequest;
use App\Http\Requests\UpdateUserActionsRequest;
use App\Http\Resources\UsersActionResource;

class UserActionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function getusersaction()
    {
        $user_actions = UserAction::get();
        return UsersActionResource::collection($user_actions);
    }

    /**
     * Display a listing of UserAction.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_actions = UserAction::all();

        return view('user_actions.index', compact('user_actions'));
    }
}
