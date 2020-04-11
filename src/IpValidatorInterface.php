<?php

namespace Wheesnoza\IpValidator;

interface IpValidatorInterface
{
    /**
     * Check if ip is valid
     *
     * @param string
     * @return boolean
     */
    public function check(string $ip): bool;

    /**
     * Check ipv6
     *
     * @param string $ip
     * @return boolean
     */
    public function checkIpv6(string $ip): bool;

    /**
     * Check ipv4
     *
     * @param string $ip
     * @return boolean
     */
    public function checkIpv4(string $ip): bool;
}