<?php

namespace App\Http\Controllers;

use App\Repositories\RatingsRepository;


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
     * RatingController constructor.
     * @param RatingsRepository $ratingsRepository
     */
    public function __construct(RatingsRepository $ratingsRepository)
    {
        $this->ratingsRepository = $ratingsRepository;
    }
}
