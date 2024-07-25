<?php

namespace App\Queue\Task;

use Queue\Queue\Task;

class UserMailTask extends Task {

    public ?int $retries = 2;

	/**
	 * @param array<string, mixed> $data The array passed to QueuedJobsTable::createJob()
	 * @param int $jobId The id of the QueuedJob entity
	 * @return void
	 */
	public function run(array $data, int $jobId): void {
        $userId = $data['id'];

        $user = $this->getTableLocator()->get('Users')->get($userId);
        throw new \Exception('User ' . $user->id);
	}

}
