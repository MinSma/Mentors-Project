<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(Mentor $mentor, CommentStoreRequest $request) : View {
        $id = Auth::guard('student')->user()['id'];

        if($id != null){
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
