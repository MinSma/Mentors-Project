<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\MentorUpdateRequest;
use Illuminate\Http\Request;
use App\Repositories\MentorsRepository;
use App\Models\Mentor;
use Illuminate\View\View;

/**
 * Class MentorsController
 * @package App\Http\Controller
 */
class MentorsController extends Controller
{
    /**
     * @var MentorsRepository
     */
    private $mentorsRepository;

    /**
     * MentorsController constructor.
     * @param MentorsRepository $mentorsRepository
     */
    public function __construct(MentorsRepository $mentorsRepository)
    {
        $this->mentorsRepository = $mentorsRepository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $mentors = $this->mentorsRepository->all();

        return view('mentors.index', ['mentors' => $mentors]);
    }

    /**
     * @return View
     */
    public function dashboard(): View
    {
        return view('mentors.dashboard');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('mentors.create');
    }

    /**
     * @param MentorUpdateRequest $request
     * @return View
     */
    public function store(MentorUpdateRequest $request): View
    {
        $data = [
            'email' => $request->getEmail(),
            'password' => bcrypt($request->getPassword()),
            'first_name' => $request->getFirstName(),
            'last_name' => $request->getLastName(),
            'gender' => $request->getGender(),
            'age' => $request->getAge(),
            'city' => $request->getCity(),
            'topic' => $request->getTopic(),
            'fixed_hour_price' => $request->getFixedHourPrice(),
            'rating' => 0.0
        ];

        $this->mentorsRepository->create($data);

        return view('mentors.index')
                         ->withSuccess('Mentor has been created');
    }

    /**
     * @param Mentor $mentor
     * @return View
     */
    public function show(Mentor $mentor): View
    {
        return view('mentors.show', compact('mentor'));
    }

    /**
     * @param Mentor $mentor
     * @return View
     */
    public function edit(Mentor $mentor): View
    {
        return view('mentors.edit', compact('mentor'));
    }

    /**
     * @param MentorUpdateRequest $request
     * @param Mentor $mentor
     * @return mixed
     */
    public function update(MentorUpdateRequest $request, Mentor $mentor)
    {
        $mentor->update([
            'email' => $request->getEmail(),
//            'password' => bcrypt($request->getPassword()),
            'first_name' => $request->getFirstName(),
            'last_name' => $request->getLastName(),
            'gender' => $request->getGender(),
            'age' => $request->getAge(),
            'city' => $request->getCity(),
            'topic' => $request->getTopic(),
            'fixed_hour_price' => $request->getFixedHourPrice()]);

        return redirect()->route('mentors.index')
            ->withSuccess('Mentor has been updated');
    }

    /**
     * @param Mentor $mentor
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();

        return redirect()->back()
            ->withSuccess('Mentor has been deleted');
    }
}
