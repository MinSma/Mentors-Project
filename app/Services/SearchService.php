<?php
declare(strict_types = 1);

namespace App\Services;
use Illuminate\Http\Request;
use App\Repositories\MentorsRepository;

/**
 * Class SearchService
 * @package App\Services
 */
class SearchService
{
    /**
     * @var MentorsRepository
     */
    private $mentorsRepository;

    /**
     * SearchService constructor.
     * @param MentorsRepository $mentorsRepository
     */
    public function __construct(MentorsRepository $mentorsRepository)
    {
        $this->mentorsRepository = $mentorsRepository;
    }

    /**
     * @param Request $request
     * @return Collection
     */
    public function getMentors(Request $request)
    {
        $topic = $request->get('topic');

        return $this->mentorsRepository->all()->where('topic', 'like', $topic);

    }
}