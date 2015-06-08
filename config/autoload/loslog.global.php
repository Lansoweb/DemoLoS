<?php
$conf = [
    /**
     * Default log directory
     */
    //'log_dir' => 'data/logs',

    /**
     * Use EntityLogger
     */
    'use_entity_logger' => false,

    /**
     * Log filename for the EntityLogger
     */
    //'entity_logger_file' => 'entity.log',

    /**
     * Use SqlLogger
     */
    'use_sql_logger' => false,

    /**
     * Log filename for the SqlLogger
     */
    //'sql_logger_file' => 'sql.log',

    /**
     * Use ErrorLogger
     */
    'use_error_logger' => false,

/**
 * Log filename for the ErrorLogger
 */
    //'error_logger_file' => 'error.log',

/**
 * Log filename for the StaticLogger
 */
    //'static_logger_file' => 'static.log'
];

return ['loslog' => $conf];
