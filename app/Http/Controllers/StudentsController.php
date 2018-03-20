<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentUpdateRequest;
use App\Repositories\StudentsRepository;
use App\Models\Student;
use Illuminate\View\View;

/**
 * Class StudentsController
 * @package App\Http\Controllers
 */
class StudentsController extends Controller
{
    /**
     * @var StudentsRepository
     */
    private $studentsRepository;

    /**
     * StudentsController constructor.
     * @param StudentsRepository $studentsRepository
     */
    public function __construct(StudentsRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('students.show');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * @param StudentUpdateRequest $request
     * @return View
     */
    public function store(StudentUpdateRequest $request): View
    {
        $data = [
            'email' => $request->getEmail(),
            'password' => bcrypt($request->getPassword()),
            'first_name' => $request->getFirstName(),
            'last_name' => $request->getLastName(),
            'gender' => $request->getGender(),
            'age' => $request->getAge(),
            'city' => $request->getCity()
        ];

        $this->studentsRepository->create($data);

        return view('students.index')
            ->withSuccess('Student has been created');
    }

    /**
     * @param Student $student
     * @return View
     */
    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    /**
     * @param Student $student
     * @return View
     */
    public function edit(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    /**
     * @param Request $request
     * @param Student $student
     * @return View
     */
    public function update(Request $request, Student $student): View
    {
        return view('students.show', compact('student'));
    }

    /**
     * @param Student $student
     * @return View
     */
    public function destroy(Student $student): View
    {
        return view('students.show', compact('student'));
    }
}
