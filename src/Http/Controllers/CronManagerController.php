<?php

namespace NunoMaduro\SkeletonPhp\Http\Controllers;

use NunoMaduro\SkeletonPhp\Models\CronManager;

class CronManagerController
{
    public function index()
    {
        return view('contact::contact');
    }
//    protected CronManager $cronManagerModel;
//
//    public function __construct(CronManager $cronManagerModel)
//    {
//        $this->cronManagerModel = $cronManagerModel;
//    }
//
//    public function create(array $data): void
//    {
//        // Create a new record using the provided data
////        $this->cronManagerModel->create($data);
//    }
}
