<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\WebhookService;
use App\Http\Requests\WebhookRequest;

class WebhookController extends Controller
{
    public function __construct(WebhookService $webhookService)
    {
        $this->webhookService = $webhookService;
    }
}
