<?php
/**
 * Database connection and helper functions
 * 
 * This file handles database connections and provides helper functions
 * for working with the database. For this portfolio project, we're using
 * a file-based data storage system instead of a traditional database.
 */

// Define data directories
define('DATA_DIR', __DIR__ . '/../data');
define('PROJECTS_DIR', DATA_DIR . '/projects');
define('POSTS_DIR', DATA_DIR . '/posts');
define('MESSAGES_DIR', DATA_DIR . '/messages');
define('USERS_DIR', DATA_DIR . '/users');

// Create data directories if they don't exist
function initializeDataDirectories() {
    $directories = [DATA_DIR, PROJECTS_DIR, POSTS_DIR, MESSAGES_DIR, USERS_DIR];
    
    foreach ($directories as $dir) {
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
    }
}

// Initialize data directories
initializeDataDirectories();

/**
 * Save data to a JSON file
 * 
 * @param string $directory Directory to save the file in
 * @param string $id Unique identifier for the file
 * @param array $data Data to save
 * @return bool True if successful, false otherwise
 */
function saveData($directory, $id, $data) {
    $filename = $directory . '/' . $id . '.json';
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    
    return file_put_contents($filename, $jsonData) !== false;
}

/**
 * Load data from a JSON file
 * 
 * @param string $directory Directory where the file is located
 * @param string $id Unique identifier for the file
 * @return array|null Data from the file, or null if file doesn't exist
 */
function loadData($directory, $id) {
    $filename = $directory . '/' . $id . '.json';
    
    if (!file_exists($filename)) {
        return null;
    }
    
    $jsonData = file_get_contents($filename);
    return json_decode($jsonData, true);
}

/**
 * Delete a data file
 * 
 * @param string $directory Directory where the file is located
 * @param string $id Unique identifier for the file
 * @return bool True if successful, false otherwise
 */
function deleteData($directory, $id) {
    $filename = $directory . '/' . $id . '.json';
    
    if (!file_exists($filename)) {
        return false;
    }
    
    return unlink($filename);
}

/**
 * Get all data files from a directory
 * 
 * @param string $directory Directory to scan
 * @param array $options Optional parameters:
 *                      - 'sort_by': Field to sort by
 *                      - 'sort_order': 'asc' or 'desc'
 *                      - 'limit': Maximum number of items to return
 *                      - 'offset': Number of items to skip
 *                      - 'filter': Associative array of field => value to filter by
 * @return array Array of data from all files
 */
function getAllData($directory, $options = []) {
    $files = glob($directory . '/*.json');
    $data = [];
    
    foreach ($files as $file) {
        $jsonData = file_get_contents($file);
        $item = json_decode($jsonData, true);
        
        // Add the ID (filename without extension)
        $item['id'] = pathinfo($file, PATHINFO_FILENAME);
        
        // Apply filter if specified
        if (isset($options['filter']) && is_array($options['filter'])) {
            $include = true;
            
            foreach ($options['filter'] as $field => $value) {
                if (!isset($item[$field]) || $item[$field] != $value) {
                    $include = false;
                    break;
                }
            }
            
            if (!$include) {
                continue;
            }
        }
        
        $data[] = $item;
    }
    
    // Sort data if sort_by is specified
    if (isset($options['sort_by']) && !empty($data)) {
        $sortBy = $options['sort_by'];
        $sortOrder = isset($options['sort_order']) && strtolower($options['sort_order']) === 'desc' ? SORT_DESC : SORT_ASC;
        
        $sortColumn = array_column($data, $sortBy);
        array_multisort($sortColumn, $sortOrder, $data);
    }
    
    // Apply limit and offset
    if (isset($options['offset']) || isset($options['limit'])) {
        $offset = isset($options['offset']) ? intval($options['offset']) : 0;
        $limit = isset($options['limit']) ? intval($options['limit']) : null;
        
        $data = array_slice($data, $offset, $limit);
    }
    
    return $data;
}

/**
 * Generate a unique ID
 * 
 * @return string Unique ID
 */
function generateUniqueId() {
    return uniqid() . bin2hex(random_bytes(8));
}

/**
 * Get featured projects
 * 
 * @param int $limit Maximum number of projects to return
 * @return array Array of featured projects
 */
function getFeaturedProjects($limit = 3) {
    return getAllData(PROJECTS_DIR, [
        'filter' => ['featured' => true],
        'sort_by' => 'order',
        'limit' => $limit
    ]);
}

/**
 * Get latest blog posts
 * 
 * @param int $limit Maximum number of posts to return
 * @return array Array of latest blog posts
 */
function getLatestPosts($limit = 3) {
    return getAllData(POSTS_DIR, [
        'sort_by' => 'date',
        'sort_order' => 'desc',
        'limit' => $limit
    ]);
}

/**
 * Get project by ID
 * 
 * @param string $id Project ID
 * @return array|null Project data or null if not found
 */
function getProject($id) {
    return loadData(PROJECTS_DIR, $id);
}

/**
 * Get blog post by ID
 * 
 * @param string $id Post ID
 * @return array|null Post data or null if not found
 */
function getPost($id) {
    return loadData(POSTS_DIR, $id);
}

/**
 * Get user by username
 * 
 * @param string $username Username to look for
 * @return array|null User data or null if not found
 */
function getUserByUsername($username) {
    $users = getAllData(USERS_DIR);
    
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return $user;
        }
    }
    
    return null;
}

/**
 * Create a new message from the contact form
 * 
 * @param array $messageData Message data
 * @return bool True if successful, false otherwise
 */
function createMessage($messageData) {
    $messageId = generateUniqueId();
    return saveData(MESSAGES_DIR, $messageId, $messageData);
}

/**
 * Create a new blog post
 * 
 * @param array $postData Post data
 * @return string|bool Post ID if