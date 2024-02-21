<?php

namespace NunoMaduro\SkeletonPhp;

class CronServices
{
    protected $cronManagerModel;

    public function __construct(CronManagerModel $cronManagerModel)
    {
        $this->cronManagerModel = $cronManagerModel;
    }

    public function create($data = []): void
    {
        // Create a new record using the provided data
        $this->cronManagerModel->create($data);
    }
}
