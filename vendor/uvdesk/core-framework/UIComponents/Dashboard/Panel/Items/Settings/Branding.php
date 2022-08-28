<?php

namespace Webkul\UVDesk\CoreFrameworkBundle\UIComponents\Dashboard\Panel\Items\Settings;

use Webkul\UVDesk\CoreFrameworkBundle\Dashboard\Segments\PanelSidebarItemInterface;
use Webkul\UVDesk\CoreFrameworkBundle\UIComponents\Dashboard\Panel\Sidebars\Settings;

class Branding implements PanelSidebarItemInterface
{
    public static function getTitle() : string
    {
        return "Branding";
    }

    public static function getRouteName() : string
    {
        return 'helpdesk_member_knowledgebase_theme';
    }

    public static function getSupportedRoutes() : array
    {
        return [];
    }

    public static function getRoles() : array
    {
        return ['ROLE_ADMIN'];
    }

    public static function getSidebarReferenceId() : string
    {
        return Settings::class;
    }
}
