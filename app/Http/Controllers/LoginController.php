<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @var LoginService
     */
    private $loginService;

    /**
     * LoginController constructor.
     * @param LoginService $loginService
     */
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(Auth::check())
            return redirect()->route('login.dashboard');

        return view('login.index');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connect(LoginRequest $request)
    {
        if ($this->loginService->tryStudent($request))
            echo 'as studentas';

        else if ($this->loginService->tryMentor($request))
            echo 'as mentorius';

        else if ($this->loginService->tryUser($request))
            echo 'as useris';

        else return redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disconnect()
    {
        auth()->logout();

        return redirect()->route('login');;
    }
}