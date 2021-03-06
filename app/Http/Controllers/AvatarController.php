<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Request $request)
    {
        if ($request->hasFile('img')) {
            if (!($user->avatar == '')) {
                Storage::disk('public')->delete($user->avatar);
            }
            $user = auth()->user();
            $path = $request->file('img')->store('avatars', 'public');

            $user->avatar = '/storage/' . $path;
            $user->save();

            return redirect()->back()->with('status', 'Фотография успешно загруженна!');
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
