<?php

namespace Yarscript\Ciloquent;

use IntlDateFormatter;

/**
 * A localized date/time package inspired
 *
 * Requires the intl PHP extension.
 *
 */
class Time extends \DateTime
{
    /**
     * @var \DateTimeZone
     */
    protected \DateTimeZone $timezone;

    /**
     * @var string
     */
    protected string $locale;

    /**
     * Format to use when displaying datetime through __toString
     *
     * @var string
     */
    protected string $toStringFormat = 'yyyy-MM-dd HH:mm:ss';

    /**
     * Outputs a short format version of the datetime.
     *
     * @throws \Exception
     */
    public function __toString(): string
    {
        return IntlDateFormatter::formatObject($this->toDateTime(), $this->toStringFormat, $this->locale);
    }

    /**
     * Converts the current instance to a mutable DateTime object.
     *
     * @throws \Exception
     *
     * @return \DateTime
     */
    public function toDateTime(): \DateTime
    {
        $dateTime = new \DateTime('', $this->getTimezone());
        $dateTime->setTimestamp(parent::getTimestamp());

        return $dateTime;
    }
}