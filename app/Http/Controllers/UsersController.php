<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
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
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function dashboard(): View
    {
        return view('users.dashboard');
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
        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * @param UserUpdateRequest $request
     * @param User $user
     * @return mixed
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update([
            'email' => $request->getEmail(),
            'password' => bcrypt($request->getPassword()),
            'name' => $request->getName()]);

        return redirect()->back()
            ->withSuccess('User has been updated');
    }

    /**
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()
            ->withSuccess('User has been deleted');
    }
}
