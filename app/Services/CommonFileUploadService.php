<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class CommonFileUploadService {

    /**
     * Upload a file to public folder.
     *
     * @param UploadedFile|null $file
     * @param string $folder Relative folder inside public, e.g., 'students'
     * @return string|null
     */
    public function upload(?UploadedFile $file, string $folder): ?string
    {
        if (!$file) {
            return null;
        }

        $filename = time() . '_' . $file->getClientOriginalName();

        // Move file to public folder
        $file->move(public_path($folder), $filename);

        // Return relative path for DB storage
        return $folder . '/' . $filename;
    }

    /**
     * Replace an old file with a new one in public folder.
     *
     * @param UploadedFile|null $file
     * @param string $folder Relative folder inside public, e.g., 'students'
     * @param string|null $oldFilePath Existing file relative path, e.g., 'students/old.jpg'
     * @return string|null
     */
    public function replaceFile(?UploadedFile $file, string $folder, ?string $oldFilePath): ?string
    {
        if (!$file) {
            return $oldFilePath; // Keep old file if no new file uploaded
        }

        // Delete old file if exists
        if ($oldFilePath && file_exists(public_path($oldFilePath))) {
            unlink(public_path($oldFilePath));
        }

        // Upload new file
        return $this->upload($file, $folder);
    }
}
