<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\StudentsRepository;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class ReservationsController
 * @package App\Http\Controllers
 */
class ReservationsController extends Controller
{
    /**
     * @var StudentsRepository
     */
    private $studentsRepository;

    /**
     * ReservationsController constructor.
     * @param StudentsRepository $studentsRepository
     */
    public function __construct(StudentsRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }

    /**
     * @param Mentor $mentor
     * @param CommentStoreRequest $request
     * @return View
     */
    public function store(Mentor $mentor) {
        $id = Auth::guard('student')->user()['id'];

        $student = $this->studentsRepository->all()->find($id);

        if($id != null){
            $data = [
                'mentor_id' => NULL
            ];

            $student->update($data);
        }

        return redirect()->back();
    }
}
