<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @param Request $request
     * @return View
     */
    public function store(Request $request): View
    {
        return view('students.index');
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
