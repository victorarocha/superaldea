<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCommunities;
use App\Nova\Metrics\NewPeople;
use App\Nova\Metrics\NewUsers;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new NewUsers(),
            new NewPeople(),
            new NewCommunities()

        ];
    }
}
