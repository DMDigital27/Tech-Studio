<?php
/**
 * Index File Regenerator Script
 * 
 * This script regenerates index.php from index-data.txt
 * Use this to restore your index file when it gets attacked
 * 
 * Usage: php regenerate_index.php
 * Or set up as a cron job to run automatically
 */

// Configuration
$sourceFile = __DIR__ . '/index-data.txt';
$targetFile = __DIR__ . '/index.php';
$backupDir = __DIR__ . '/backups/';
$logFile = __DIR__ . '/regeneration.log';

// Create backup directory if it doesn't exist
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}

// Function to log messages
function logMessage($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] $message" . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
    echo $logEntry;
}

// Function to create backup
function createBackup($file) {
    global $backupDir;
    if (file_exists($file)) {
        $backupName = 'index_backup_' . date('Y-m-d_H-i-s') . '.php';
        $backupPath = $backupDir . $backupName;
        if (copy($file, $backupPath)) {
            logMessage("Backup created: $backupPath");
            return true;
        } else {
            logMessage("ERROR: Failed to create backup");
            return false;
        }
    }
    return true; // No file to backup
}

// Function to clean old backups (keep only last 10)
function cleanOldBackups() {
    global $backupDir;
    $backups = glob($backupDir . 'index_backup_*.php');
    if (count($backups) > 10) {
        // Sort by modification time, oldest first
        usort($backups, function($a, $b) {
            return filemtime($a) - filemtime($b);
        });
        
        // Remove oldest backups
        $toRemove = count($backups) - 10;
        for ($i = 0; $i < $toRemove; $i++) {
            unlink($backups[$i]);
            logMessage("Removed old backup: " . basename($backups[$i]));
        }
    }
}

// Main execution
logMessage("=== Index Regeneration Started ===");

// Check if source file exists
if (!file_exists($sourceFile)) {
    logMessage("ERROR: Source file not found: $sourceFile");
    exit(1);
}

// Create backup of current index.php if it exists
if (file_exists($targetFile)) {
    if (!createBackup($targetFile)) {
        logMessage("ERROR: Could not create backup, aborting for safety");
        exit(1);
    }
}

// Copy source to target
if (copy($sourceFile, $targetFile)) {
    // Set proper permissions
    chmod($targetFile, 0644);
    
    logMessage("SUCCESS: index.php regenerated from index-data.txt");
    
    // Clean old backups
    cleanOldBackups();
    
    logMessage("=== Index Regeneration Completed ===");
    exit(0);
} else {
    logMessage("ERROR: Failed to copy source file to target");
    exit(1);
}
?>
