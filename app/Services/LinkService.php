<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Database\Eloquent\Collection;

class LinkService{


    public function __construct(private Link $link)
    {
    }

    public function getLinksByUserId(?int $userId): Collection
    {}

    public function generateShortLink(?string $link): ?string
    {
    }

    public function deleteLink(?int $linkId, bool $isForceDelete = false): bool
    {}

    public function getOneLink(?int $linkId): ?Link
    {}

    public function updateLink(?int $linkId, array $data): bool
    {}

    public function updateLinkStatus(string $status): bool
    {}
}