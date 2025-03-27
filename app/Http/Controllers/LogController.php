<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LogController extends Controller
{
    protected $logPath;

    public function __construct()
    {
        $this->logPath = storage_path('logs');
    }

    /**
     * Display a listing of all log files.
     */
    public function index()
    {
        $logFiles = $this->getLogFiles();
        
        return view('logs.index', compact('logFiles'));
    }

    /**
     * Display the contents of a specific log file.
     */
    public function show($fileName)
    {
        $filePath = $this->logPath . '/' . $fileName;
        
        if (!File::exists($filePath)) {
            return redirect()->route('logs.index')
                ->with('error', 'Log file not found.');
        }

        $content = File::get($filePath);
        $logEntries = $this->parseLogContent($content);
        
        return view('logs.show', compact('logEntries', 'fileName'));
    }

    /**
     * Download a specific log file.
     */
    public function download($fileName)
    {
        $filePath = $this->logPath . '/' . $fileName;
        
        if (!File::exists($filePath)) {
            return redirect()->route('logs.index')
                ->with('error', 'Log file not found.');
        }
        
        return response()->download($filePath);
    }

    /**
     * Delete a specific log file.
     */
    public function destroy($fileName)
    {
        $filePath = $this->logPath . '/' . $fileName;
        
        if (!File::exists($filePath)) {
            return redirect()->route('logs.index')
                ->with('error', 'Log file not found.');
        }
        
        File::delete($filePath);
        
        return redirect()->route('logs.index')
            ->with('success', 'Log file deleted successfully.');
    }

    /**
     * Get all log files with their sizes and last modified dates.
     */
    protected function getLogFiles()
    {
        $files = File::files($this->logPath);
        $logFiles = [];
        
        foreach ($files as $file) {
            if (Str::endsWith($file->getFilename(), '.log')) {
                $logFiles[] = [
                    'name' => $file->getFilename(),
                    'size' => $this->formatFileSize($file->getSize()),
                    'modified' => date('Y-m-d H:i:s', $file->getMTime())
                ];
            }
        }
        
        // Sort files by modification date (newest first)
        usort($logFiles, function($a, $b) {
            return strtotime($b['modified']) - strtotime($a['modified']);
        });
        
        return $logFiles;
    }

    /**
     * Parse the log file content into structured entries.
     */
    protected function parseLogContent($content)
    {
        $pattern = '/\[(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})\](.*?)(?=\[\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}\]|$)/s';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
        
        $logEntries = [];
        foreach ($matches as $match) {
            $timestamp = $match[1];
            $details = $match[2];
            
            // Parse log level
            $level = 'info';
            if (preg_match('/\.(error|debug|info|warning|critical|alert|emergency|notice)/', $details, $levelMatch)) {
                $level = strtolower($levelMatch[1]);
            }
            
            $logEntries[] = [
                'timestamp' => $timestamp,
                'level' => $level,
                'details' => trim($details)
            ];
        }
        
        // Sort entries by timestamp (newest first)
        usort($logEntries, function($a, $b) {
            return strtotime($b['timestamp']) - strtotime($a['timestamp']);
        });
        
        return $logEntries;
    }

    /**
     * Format file size to human-readable format.
     */
    protected function formatFileSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $i = 0;
        
        while ($size >= 1024 && $i < count($units) - 1) {
            $size /= 1024;
            $i++;
        }
        
        return round($size, 2) . ' ' . $units[$i];
    }

}
