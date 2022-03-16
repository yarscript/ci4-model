<?php

namespace Yarscript\Ciloquent;

class Validation
{
    /**
     * Loads custom rule groups (if set) into the current rules.
     *
     * Rules can be pre-defined in Config\Validation and can
     * be any name, but must all still be an array of the
     * same format used with setRules(). Additionally, check
     * for {group}_errors for an array of custom error messages.
     *
     * @return array|ValidationException|null
     */
    public function loadRuleGroup(?string $group = null)
    {
        if (empty($group)) {
            return null;
        }

        if (! isset($this->config->{$group})) {
            throw ValidationException::forGroupNotFound($group);
        }

        if (! is_array($this->config->{$group})) {
            throw ValidationException::forGroupNotArray($group);
        }

        $this->setRules($this->config->{$group});

        // If {group}_errors exists in the config file,
        // then override our custom errors with them.
        $errorName = $group . '_errors';

        if (isset($this->config->{$errorName})) {
            $this->customErrors = $this->config->{$errorName};
        }

        return $this->rules;
    }
}