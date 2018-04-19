<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\User;
use Illuminate\View\View;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * UsersController constructor.
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $users = $this->usersRepository->all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * @param UserUpdateRequest $request
     * @return mixed
     */
    public function store(UserUpdateRequest $request)
    {
        $data = [
            'email' => $request->getEmail(),
            'password' => bcrypt($request->getPassword()),
            'name' => $request->getName(),
        ];

        $this->usersRepository->create($data);

        return redirect()->back()
            ->withSuccess('User has been created');
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return View
     */
    public function update(Request $request, User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * @param User $user
     * @return View
     */
    public function destroy(User $user): View
    {
        return view('users.show', compact('user'));
    }
}
