<?php

declare(strict_types=1);

namespace Modules\Api\Rest\V1\Controllers;

use App\Entities\Podcast;
use App\Models\PodcastModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Response;
use Modules\Api\Rest\V1\Config\Services;

class PodcastController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        Services::restApiExceptions()->initialize();
    }

    public function list(): Response
    {
        $data = (new PodcastModel())->findAll();
        array_map(static function ($podcast): void {
            $podcast->feed_url = $podcast->getFeedUrl();
        }, $data);
        return $this->respond($data);
    }

    public function view(int $id): Response
    {
        $data = (new PodcastModel())->getPodcastById($id);
        if (! $data instanceof Podcast) {
            return $this->failNotFound('Podcast not found');
        }

        $data->feed_url = $data->getFeedUrl();
        return $this->respond($data);
    }
}
