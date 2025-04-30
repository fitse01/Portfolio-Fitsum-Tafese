<?php
/**
 * General functions for the portfolio website
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Check if user is logged in
 * 
 * @return bool True if user is logged in, false otherwise
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Check if user is an admin
 * 
 * @return bool True if user is an admin, false otherwise
 */
function isAdmin() {
    return isLoggedIn() && isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

/**
 * Redirect to a URL
 * 
 * @param string $url URL to redirect to
 * @return void
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Set a flash message to be displayed on the next page
 * 
 * @param string $message Message to display
 * @param string $type Type of message (success, error, warning, info)
 * @return void
 */
function setFlashMessage($message, $type = 'info') {
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_message_type'] = $type;
}

/**
 * Sanitize input data
 * 
 * @param string $data Data to sanitize
 * @return string Sanitized data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email address
 * 
 * @param string $email Email address to validate
 * @return bool True if email is valid, false otherwise
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Format date
 * 
 * @param string $date Date string
 * @param string $format Format string
 * @return string Formatted date
 */
function formatDate($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

/**
 * Generate a slug from a string
 * 
 * @param string $string String to convert to slug
 * @return string Slug
 */
function generateSlug($string) {
    // Replace non-alphanumeric characters with hyphens
    $string = preg_replace('/[^a-z0-9]+/i', '-', $string);
    // Convert to lowercase
    $string = strtolower($string);
    // Remove leading and trailing hyphens
    $string = trim($string, '-');
    
    return $string;
}

/**
 * Get excerpt from content
 * 
 * @param string $content Content to get excerpt from
 * @param int $length Maximum length of excerpt
 * @return string Excerpt
 */
function getExcerpt($content, $length = 150) {
    // Strip HTML tags
    $content = strip_tags($content);
    
    // If content is shorter than length, return as is
    if (strlen($content) <= $length) {
        return $content;
    }
    
    // Find the last space within the length limit
    $lastSpace = strrpos(substr($content, 0, $length), ' ');
    
    // If no space found, just cut at the length
    if ($lastSpace === false) {
        $lastSpace = $length;
    }
    
    // Return the excerpt with ellipsis
    return substr($content, 0, $lastSpace) . '...';
}

/**
 * Upload a file
 * 
 * @param array $file File from $_FILES
 * @param string $destination Destination directory
 * @param array $allowedTypes Allowed file types
 * @param int $maxSize Maximum file size in bytes
 * @return string|bool Filename if successful, false otherwise
 */
function uploadFile($file, $destination, $allowedTypes = [], $maxSize = 5242880) {
    // Check if file was uploaded without errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    
    // Check file size
    if ($file['size'] > $maxSize) {
        return false;
    }
    
    // Check file type if allowed types are specified
    if (!empty($allowedTypes)) {
        $fileType = mime_content_type($file['tmp_name']);
        if (!in_array($fileType, $allowedTypes)) {
            return false;
        }
    }
    
    // Create destination directory if it doesn't exist
    if (!file_exists($destination)) {
        mkdir($destination, 0755, true);
    }
    
    // Generate a unique filename
    $filename = uniqid() . '_' . basename($file['name']);
    $targetPath = $destination . '/' . $filename;
    
    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        return $filename;
    }
    
    return false;
}

/**
 * Delete a file
 * 
 * @param string $filepath Path to the file
 * @return bool True if successful, false otherwise
 */
function deleteFile($filepath) {
    if (file_exists($filepath)) {
        return unlink($filepath);
    }
    
    return false;
}

/**
 * Count words in a string
 * 
 * @param string $string String to count words in
 * @return int Number of words
 */
function countWords($string) {
    return str_word_count(strip_tags($string));
}

/**
 * Estimate reading time
 * 
 * @param string $content Content to estimate reading time for
 * @param int $wordsPerMinute Average reading speed in words per minute
 * @return int Reading time in minutes
 */
function estimateReadingTime($content, $wordsPerMinute = 200) {
    $wordCount = countWords($content);
    $minutes = ceil($wordCount / $wordsPerMinute);
    
    return max(1, $minutes);
}

/**
 * Format content with Markdown-like syntax
 * 
 * @param string $content Content to format
 * @return string Formatted content
 */
function formatContent($content) {
    // Convert line breaks to paragraphs
    $content = '<p>' . str_replace("\n\n", '</p><p>', $content) . '</p>';
    $content = str_replace("\n", '<br>', $content);
    
    // Convert Markdown-like headings
    $content = preg_replace('/## (.*?)$/m', '