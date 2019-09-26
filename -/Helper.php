<?php
/**
 * Helper functions to reduce redundancy.
 *
 * @since 2019-09-25
 * @package Lessn
 */

namespace Lessn\Helper;

/**
 * Class Helper
 *
 * @package Lessn\Helper
 */
class Helper
{

    /**
     * Is page accesses via SSL.
     *
     * @return bool
     */
    private function isSsl()
    {
        if (!empty($_SERVER['https'])) {
            return true;
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            return true;
        }

        return false;
    }

    /**
     * Get the string for the used protocol.
     *
     * @return string
     */
    public function http()
    {
        return ($this->isSsl()) ? 'https://' : 'http://';
    }
}
