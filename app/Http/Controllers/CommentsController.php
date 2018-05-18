<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Mentor;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    /**
     * @var CommentsRepository
     */
    private $commentsRepository;

    /**
     * CommentsController constructor.
     * @param CommentsRepository $commentsRepository
     */
    public function __construct(CommentsRepository $commentsRepository)
    {
        $this->commentsRepository = $commentsRepository;
    }

    /**
     * @param Mentor $mentor
     * @param CommentStoreRequest $request
     * @return View
     */
    public function store(Mentor $mentor, CommentStoreRequest $request) : View{
        if (Auth::check())
        {
            $id = Auth::id();

            $data = [
                'body'          => $request->getBody(),
                'mentor_id'     => $mentor['id'],
                'student_id'    => $id
            ];

            $this->commentsRepository->create($data);
        }

        return view('mentors.show', compact('mentor'));
    }
}
