<?php
// SETUP FILE - HAPUS SETELAH SELESAI!
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    
    echo "<h1>🔧 Running Setup...</h1>";
    echo "<p>Mohon tunggu, proses ini memakan waktu 1-2 menit...</p><hr>";
    
    // Migration
    echo "<h3>1. Running Migration...</h3>";
    $exitCode = $kernel->call('migrate', ['--force' => true]);
    if ($exitCode === 0) {
        echo "✅ <strong style='color:green'>Migration berhasil!</strong><br>";
    } else {
        echo "❌ <strong style='color:red'>Migration gagal!</strong><br>";
    }
    
    // Seeder
    echo "<h3>2. Running Seeder...</h3>";
    $exitCode = $kernel->call('db:seed', ['--force' => true]);
    if ($exitCode === 0) {
        echo "✅ <strong style='color:green'>Seeder berhasil!</strong><br>";
    } else {
        echo "❌ <strong style='color:red'>Seeder gagal!</strong><br>";
    }
    
    // Storage Link
    echo "<h3>3. Creating Storage Link...</h3>";
    $exitCode = $kernel->call('storage:link');
    if ($exitCode === 0) {
        echo "✅ <strong style='color:green'>Storage link berhasil!</strong><br>";
    } else {
        echo "❌ <strong style='color:red'>Storage link gagal!</strong><br>";
    }
    
    // Clear Cache
    echo "<h3>4. Clearing Cache...</h3>";
    $kernel->call('config:clear');
    $kernel->call('cache:clear');
    $kernel->call('view:clear');
    $kernel->call('route:clear');
    echo "✅ <strong style='color:green'>Cache cleared!</strong><br>";
    
    echo "<hr><h2 style='color:green; font-size: 24px;'>✅ SETUP SELESAI!</h2>";
    echo "<p style='color:red; font-weight:bold; font-size: 18px;'>⚠️ PENTING: HAPUS FILE setup.php SEKARANG!</p>";
    echo "<p><a href='/' style='color:blue; font-size: 16px;'>← Kembali ke Home</a></p>";
    
} catch (Exception $e) {
    echo "<h2 style='color:red'>❌ ERROR!</h2>";
    echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
    echo "<p><strong>File:</strong> " . $e->getFile() . ":" . $e->getLine() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
