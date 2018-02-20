<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

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
        return view('mentors.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('mentors.create');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function store(Request $request): View
    {
        return view('mentors.index');
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
        return view('mentors.show', compact('mentor'));
    }

    /**
     * @param Request $request
     * @param Mentor $mentor
     * @return View
     */
    public function update(Request $request, Mentor $mentor): View
    {
        return view('mentors.show', compact('mentor'));
    }

    /**
     * @param Mentor $mentor
     * @return View
     */
    public function destroy(Mentor $mentor): View
    {
        return view('mentors.show', compact('mentor'));
    }
}
