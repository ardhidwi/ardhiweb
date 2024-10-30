<?php

namespace Traits;

// Simulated trait for JSON response formatter
trait ResponseFormatter {
    public function responseFormatter($code, $message, $data = null) {
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}