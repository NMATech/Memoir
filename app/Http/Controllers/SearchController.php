<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'input' => ['required', 'string'],
        ]);

        $fuzzy = implode("%", str_split($request->input));
        $fuzzy = "%$fuzzy%";

        $resourceUser = new UserResource($request->user());

        $users = User::query()->where("name", "like", $fuzzy)->get();
        $resourceUsers = UserResource::collection($users);
        return view('pages.search')->with('user', $resourceUser->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('search', $resourceUsers->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
}
