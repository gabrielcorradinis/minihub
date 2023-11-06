<?php

namespace App\Services;

use App\Models\Webhook;
use App\Repositories\WebhookRepository;

class WebhookService
{
    protected $webhookRepository;

    public function __construct(WebhookRepository $webhookRepository)
    {
        $this->webhookRepository = $webhookRepository;
    }

}
