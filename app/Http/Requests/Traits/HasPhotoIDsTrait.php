<?php

namespace App\Http\Requests\Traits;

trait HasPhotoIDsTrait
{
	/**
	 * @var array<int>
	 */
	protected array $photoIDs = [];

	/**
	 * @return array<int>
	 */
	public function photoIDs(): array
	{
		return $this->photoIDs;
	}
}
