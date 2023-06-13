<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCommunities;
use App\Nova\Metrics\NewPeople;
use App\Nova\Metrics\NewUsers;
use Laravel\Nova\Dashboards\Main as Dashboard;

// Extra cards from stepanenko3/nova-cards
// https://github.com/stepanenko3/nova-cards

use Stepanenko3\NovaCards\Cards\GreeterCard;
use Stepanenko3\NovaCards\Cards\CountdownCard;
use Stepanenko3\NovaCards\Cards\HtmlCard;
use Stepanenko3\NovaCards\Cards\ScheduledJobsCard;
use Stepanenko3\NoovaCards\Cards\WorldClockCard;
use Stepanenko3\NovaCards\Cards\WeatherCard;


class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {

        $user = auth()->user();

        return [


            GreeterCard::make()
                ->user(
                    name: $user->name,
                    title: 'Admin',
                )
                ->message(
                    text: 'Bienvenido,',
                )
                ->avatar(
                    url: $user->avatar
                        ? storage_url($user->avatar, 'public')
                        :  'https://ui-avatars.com/api/?size=300&color=7F9CF5&background=EBF4FF&name=' . $user->name
                ),

            (new CountdownCard)
                ->to(now()->addDays(30)) // Required
                ->title('Tiempo para BETA 1') // Optional
                ->label('Restante para liberar Beta 1 de Superaldea'), // Optional

            (new WeatherCard)
                ->pollingTime(60000) // Optional
                ->startPolling()
                ->city('Mexico City')
                ->lang('sp')
            ,

            new NewUsers(),
            new NewPeople(),
            new NewCommunities(),




            (new ScheduledJobsCard)
                ->startPolling() // Optional. Auto start polling
                ->pollingTime(60000)
                ->width('1/2'),




            (new HtmlCard)
                ->width('1/3')
                ->html('<h1>Conexión a API de HikCentral Exitosa!</h1>'), // Required




        ];
    }
}
