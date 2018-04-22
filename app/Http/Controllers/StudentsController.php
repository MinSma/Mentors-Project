<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentCreateRequest;
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
        $students = $this->studentsRepository->all();

        return view('students.index', ['students' => $students]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function dashboard(): View
    {
        return view('students.dashboard');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * @param StudentCreateRequest $request
     * @return View
     */
    public function store(StudentCreateRequest $request): View
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
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * @param StudentCreateRequest $request
     * @param Student $student
     * @return View
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $student->update([
            'password' => bcrypt($request->getPassword()),
            'first_name' => $request->getFirstName(),
            'last_name' => $request->getLastName(),
            'gender' => $request->getGender(),
            'age' => $request->getAge(),
            'city' => $request->getCity()]);

        return redirect()->route('students.index')
            ->withSuccess('Student has been updated');
    }

    /**
     * @param Student $student
     * @return View
     * @throws \Exception
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back()
            ->withSuccess('Student has been deleted');
    }
}
