<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\UserProfileRequest;
use App\Repositories\Eloquent\UserRepository;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function loginIndex() {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255|email:rfc,dns',
            'password' => 'required',
            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
                    'secret' => config('services.recaptcha.secret'),
                    'response' => $value,
                    'remoteip' => request()->ip(),
                ]);
                 if (!$g_response->json('success')) {
                    $fail("Google Recaptcha xetasi");
                };
            }]
        ]);


        if(Auth::attempt($request->only(['email', 'password']),$request->remember_token)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Daxil olunan email səhvdir.',
            'password' => "Daxil olunan şifrə səhvdir"
        ])->onlyInput('email','password');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

    public function profile()
    {
        $user = $this->userRepository->find(auth()->id());
        return view('admin.auth.profile', compact('user'));
    }

    public function updateProfile(UserProfileRequest $request)
    {

        $profile = $this->userRepository->updateProfile(Auth::user()->id, $request->validated());

        return redirect()->route('profile')->with($profile  ? "success" : "error", true);
    }

}