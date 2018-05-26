<?php

namespace App\Http\Controllers;

use App\Http\Requests\RatingStoreRequest;
use App\Repositories\MentorsRepository;
use App\Repositories\RatingsRepository;
use App\Repositories\StudentsRepository;


/**
 * Class RatingController
 * @package App\Http\Controllers
 */
class RatingController extends Controller
{
    /**
     * @var RatingsRepository
     */
    private $ratingsRepository;

    /**
     * @var StudentsRepository
     */
    private $studentsRepository;

    /**
     * @var MentorsRepository
     */
    private $mentorsRepository;

    /**
     * RatingController constructor.
     * @param RatingsRepository $ratingsRepository
     * @param StudentsRepository $studentsRepository
     * @param MentorsRepository $mentorsRepository
     */
    public function __construct(RatingsRepository $ratingsRepository, StudentsRepository $studentsRepository,
                                MentorsRepository $mentorsRepository)
    {
        $this->ratingsRepository = $ratingsRepository;
        $this->studentsRepository = $studentsRepository;
        $this->mentorsRepository = $mentorsRepository;
    }

    /**
     * @param Mentor $mentor
     * @param RatingStoreRequest $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Mentor $mentor, RatingStoreRequest $request) {
        $id = Auth::guard('student')->user()['id'];

        if($id != null)
        {
            $doesHaveRating = $this->ratingsRepository->model()
                ::where('mentor_id', $mentor['id'])
                ->where('student_id', $id)
                ->first();

            if($doesHaveRating == NULL)
            {
                $data = [
                    'rating' => $request->getRating(),
                    'mentor_id' => $mentor['id'],
                    'student_id' => $id
                ];

                $this->ratingsRepository->create($data);

                $howManyRatingsMentorHave = $this->ratingsRepository->model()
                    ::where('mentor_id', $mentor['id']);

                $newRating = $mentor['rating'] + $request->getRating();

                $mentor->update([
                    'rating' => $newRating / $howManyRatingsMentorHave
                ]);

                return view('mentors.show', compact('mentor'));
            }

            return redirect()->back()->withErrors('Nepavyko įvertinti, Jūs jau esate įvertinęs šį mentorių');
        }

        return redirect()->back()->withErrors('Nepavyko įvertinti, jūs nesate studentas');
    }
}
