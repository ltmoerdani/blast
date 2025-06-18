<?php
/**
 * Simple Database Test for Archery Blast
 */

echo "🎯 Archery Blast - Database Test\n";
echo "================================\n\n";

// Test database configuration
echo "Database Configuration:\n";
echo "Host: 127.0.0.1\n";
echo "Database: blast\n";
echo "Username: root\n";
echo "Driver: MySQLi\n\n";

// Test connection manually
echo "Testing connection...\n";
try {
    $connection = new mysqli('127.0.0.1', 'root', '', 'blast');
    
    if ($connection->connect_error) {
        echo "❌ Connection failed: " . $connection->connect_error . "\n";
    } else {
        echo "✅ Database connected successfully!\n";
        
        // Count tables
        $result = $connection->query("SHOW TABLES");
        $tableCount = $result ? $result->num_rows : 0;
        echo "📊 Tables found: $tableCount\n";
        
        $connection->close();
    }
} catch (Exception $e) {
    echo "❌ Connection error: " . $e->getMessage() . "\n";
}

echo "\n✅ Database test completed!\n";
