<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;

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
    public function index()
    {
        if (auth('student')->check())
            return view('students.dashboard');

        else if (auth('mentor')->check())
            return view('mentors.dashboard');

        else if (auth('web')->check())
            return view('users.dashboard');

        return view('login.index');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connect(LoginRequest $request)
    {
        if ($this->loginService->tryStudent($request))
            return view('students.dashboard');

        else if ($this->loginService->tryMentor($request))
            return view('mentors.dashboard');

        else if ($this->loginService->tryUser($request))
            return view('users.dashboard');

        else return redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disconnect()
    {
        auth()->logout();

        return view('login.index');
    }
}