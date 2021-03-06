<?php

namespace Harmony\Sdk\Theme;

/**
 * Interface ThemeInterface
 *
 * @package Harmony\Sdk\Theme
 */
interface ThemeInterface
{

    /**
     * Returns the theme name.
     *
     * @return string The Theme name
     */
    public function getIdentifier(): string;

    /**
     * Returns the theme name.
     *
     * @return string The Theme name
     */
    public function getName(): string;

    /**
     * Returns the theme description.
     *
     * @return string The Theme description
     */
    public function getDescription(): string;

    /**
     * Returns the theme version.
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Returns the theme authors.
     *
     * @return array
     */
    public function getAuthors(): array;

    /**
     * Returns the theme preview image.
     *
     * @return null|string The theme preview image
     */
    public function getPreview(): ?string;

    /**
     * Gets the Theme directory path.
     * The path should always be returned as a Unix path (with /).
     *
     * @return string The Theme absolute path
     */
    public function getPath(): string;

    /**
     * Returns theme short name, formatted has: vendor/name
     *
     * @return string
     */
    public function getShortName(): string;

    /**
     * Check if the theme has settings.
     *
     * @return bool
     */
    public function hasSettings(): bool;

    /**
     * Returns the full path for `settings.yaml` file.
     *
     * @return string
     */
    public function getSettingPath(): string;

    /**
     * Get parent theme (FQDN class).
     *
     * @return null|ThemeInterface
     */
    public function getParent(): ?ThemeInterface;

    /**
     * Get the theme translation domain.
     *
     * @return string
     */
    public function getTransDomain(): string;
}