<?php

namespace Modules\Utility\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Modules\Utility\Filament\Pages\UtilityPage;

class FilamentServiceProvider extends PluginServiceProvider
{
    public function isEnabled(): bool{
        $module = \Module::find('utility');
        return $module->isEnabled();
    }
    protected array $pages = [];
    protected array $resources =[];
    public function configurePackage(Package $package): void
    {
        $package->name('utility');
    }

    public function getResources(): array
    {
        return ($this->isEnabled())?$this->resources:[];
    }

    public function getPages(): array
    {
        return ($this->isEnabled())?$this->pages:[];
    }

    public function boot()
    {
        Filament::serving(function (){
            if(config('utility.navigation.enabled'))
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label(config('utility.navigation.name'))
            ]);
        });
        return parent::boot();
    }
}
