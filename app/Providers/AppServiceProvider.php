<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\General;
use App\Models\Langs;
use App\Models\Message;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $datosgenerales = General::first(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('datosgenerales', $datosgenerales);
        });
        View::composer('components.app.sidebar', function ($view) {
            // Obtener los datos del footer
            $mensajes = Message::where('is_read', '!=', 1 )->where('status', '!=', 0)->count(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('mensajes', $mensajes);
        });
        View::composer('components.public.header', function ($view) {
            // Obtener los datos del footer
            $langs = Langs::all() ;
            $blogs =  Blog::all()->count();
            $datosgenerales = General::all(); 
            // Pasar los datos a la vista
            $view->with([
                'langs' => $langs,
                'blogs' => $blogs,
                'datosgenerales' => $datosgenerales
            
            ]);
        });
        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $langs = Langs::all() ;  // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('langs', $langs);
        });
    }
}
