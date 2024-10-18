<?php
return [
  'disks' => [
    /* blueprint/disks *//* VersionchangerStart */ 'blueprint:versionchanger' => [ 'driver' => 'local', 'root' => storage_path('extensions/versionchanger'), 'url' => env('APP_URL') . '/fs/extensions/versionchanger', 'visibility' => 'public', 'throw' => false, ], /* VersionchangerEnd *//* NebulaStart */ 'blueprint:nebula' => [ 'driver' => 'local', 'root' => storage_path('extensions/nebula'), 'url' => env('APP_URL') . '/fs/extensions/nebula', 'visibility' => 'public', 'throw' => false, ], /* NebulaEnd *//* SlateStart */ 'blueprint:slate' => [ 'driver' => 'local', 'root' => storage_path('extensions/slate'), 'url' => env('APP_URL') . '/fs/extensions/slate', 'visibility' => 'public', 'throw' => false, ], /* SlateEnd */
  ],
];