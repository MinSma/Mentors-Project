<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Repositories\CommentsRepository;
use App\Models\Mentor;
use App\Models\Student;

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

    public function store(Request $request) {

    }
}
