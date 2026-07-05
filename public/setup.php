<?php
// Zenith Edge Investment — one-time setup runner. Deletes itself when done.
set_time_limit(300);
ini_set('memory_limit', '256M');

// Find artisan (works in both public_html root and subfolder layouts)
$base = dirname(__DIR__);
$app  = null;
foreach ([$base, dirname($base) . '/investment', $base . '/investment'] as $c) {
    if (file_exists($c . '/artisan')) { $app = $c; break; }
}
if (!$app) {
    die('ERROR: Cannot find artisan. Check your upload directory.');
}

$php = PHP_BINARY ?: 'php';
$log = [];

function sh($cmd) {
    global $log;
    $out = []; $rc = 0;
    exec($cmd . ' 2>&1', $out, $rc);
    $log[] = ['cmd' => $cmd, 'rc' => $rc, 'out' => implode("\n", $out)];
    return $rc === 0;
}

sh("$php $app/artisan config:clear");
sh("$php $app/artisan view:clear");
sh("$php $app/artisan config:cache");
sh("$php $app/artisan route:cache");
sh("$php $app/artisan view:cache");
sh("$php $app/artisan migrate --force");
sh("$php $app/artisan db:seed --force");

// Storage symlink
$pubStorage = __DIR__ . '/storage';
$appStorage  = $app . '/storage/app/public';
if (is_link($pubStorage)) @unlink($pubStorage);
if (!is_dir($pubStorage)) @symlink($appStorage, $pubStorage);

sh("chmod -R 755 $app/storage $app/bootstrap/cache");

// Self-delete
@unlink(__FILE__);

header('Content-Type: text/plain; charset=utf-8');
echo "=== SETUP COMPLETE ===\n\nApp: $app\n\n";
foreach ($log as $e) {
    echo '[' . ($e['rc'] == 0 ? 'OK  ' : 'FAIL') . '] ' . $e['cmd'] . "\n";
    if ($e['out']) echo '     ' . str_replace("\n", "\n     ", trim($e['out'])) . "\n";
}
echo "\nAdmin: https://zenithedgeinvest.xyz/admin\n";
echo "Email: admin@zenithedgeinvestment.com\n";
echo "Pass:  M4MML9hcTp9p%#@\n";
