<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function index()
    {
        $users = User::all(); // Puxa todos os usuários
        return view('admin.users.index', compact('users')); // Retorna a view com os usuários
    }

    public function editAccessLevel()
    {
        // Busca todos os usuários
        $users = User::where('id', '!=', auth()->id())->get(); // Exclui o admin atual da lista

        // Passa os usuários para a view
        return view('profile.edit-access-level', compact('users'));
    }

    // access level
    public function updateAccessLevel(Request $request): RedirectResponse
    {
        // Valida o nível de acesso enviado pelo formulário
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'access_level' => 'required|in:admin,user',
        ]);

        // Busca o usuário pelo ID
        $user = User::findOrFail($request->input('user_id'));

        // Atualiza o nível de acesso
        $user->access_level = $request->input('access_level');
        $user->save();

        // Redireciona de volta com uma mensagem de sucesso
        return Redirect::route('admin.edit-access-level')->with('status', 'profile-access-update');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
