<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\MentorCreateRequest;
use App\Http\Requests\MentorUpdateRequest;
use App\Http\Requests\PasswordChangeRequest;
use App\Services\SearchService;
use App\Services\PasswordChangeService;
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
     * @var SearchService
     */
    private $searchService;

    /**
     * @var PasswordChangeService
     */
    private $passwordChangeService;

    /**
     * MentorsController constructor.
     * @param MentorsRepository $mentorsRepository
     * @param SearchService $searchService
     * @param PasswordChangeService $passwordChangeService
     */
    public function __construct(MentorsRepository $mentorsRepository, SearchService $searchService,
                                PasswordChangeService $passwordChangeService)
    {
        $this->mentorsRepository = $mentorsRepository;
        $this->searchService = $searchService;
        $this->passwordChangeService = $passwordChangeService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $mentors = $this->mentorsRepository->model()::paginate(5);

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
     * @param MentorCreateRequest $request
     * @return View
     */
    public function store(MentorCreateRequest $request)
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

        return redirect()->back()
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
            'password' => bcrypt($request->getPassword()),
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


    /**
     * @return View
     */
    public function search() : View {
        return view('mentors.search');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function found(Request $request) : View {
        $mentors = $this->searchService->getMentors($request);

        return view('mentors.found', ['mentors' => $mentors]);
    }

    /**
     * @param PasswordChangeRequest $request
     * @return mixed
     */
    public function changePassword(PasswordChangeRequest $request)
    {
        $this->passwordChangeService->changePassword($request);

        return redirect()->back()
            ->withSuccess('Password has been changed');
    }
}
