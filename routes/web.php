<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AttributesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\LogosClientController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LangsController;
use App\Http\Controllers\LegalesController;
use App\Http\Controllers\LibroReclamacionesController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\PoliticasdePrivacidadController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StrengthController;
use App\Http\Controllers\ValoresAtributosController;

use App\Http\Controllers\TagController;
use App\Http\Controllers\TerminosycondicionesController;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use SoDe\Extend\JSON;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Las rutas publicas */


Route::get('/', function (Request $request) {
  return view('lang');
});

Route::middleware(['language'])->group(function () {

  Route::prefix('/{lang}')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/destino', [IndexController::class, 'destino'])->name('destino');
    Route::get('/actividad/{id}', [IndexController::class, 'actividad'])->name('actividad');
    Route::get('/detalleActividad/{id}', [IndexController::class, 'detalleActividad'])->name('detalleActividad');

    Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
    Route::get('/post/{id}', [IndexController::class, 'post'])->name('post');

    Route::get('/contacto', [IndexController::class, 'contacto'])->name('contacto');
    Route::get('/nosotros', [IndexController::class, 'nosotros'])->name('nosotros');

    Route::get('/destino?source=paquete', [IndexController::class, 'destino'])->name('ayuda');

    // Route::get('/catalogo/{id}', [IndexController::class, 'destino'])->name('catalogo');
    // // Route::get('/contacto', [IndexController::class, 'destino'] )->name('contacto');
    // Route::get('/comentario', [IndexController::class, 'destino'])->name('comentario');



    Route::get('/servicios', [IndexController::class, 'index'])->name('servicios');

    Route::get('/politica_privacidad', [IndexController::class, 'politicaprivacidad'])->name('politica_privacidad');
    Route::get('/term_condiciones', [IndexController::class, 'term_condiciones'])->name('term_condiciones');

    Route::post('guardarContactos', [IndexController::class, 'guardarContacto'])->name('guardarContactos');

    Route::get('/libro-de-reclamaciones', [IndexController::class, 'librodereclamaciones'] )->name('librodereclamaciones');
    Route::get('/esnapolicies', [IndexController::class, 'esnapolicies'] )->name('esnapolicies');
    Route::get('buscartour', [IndexController::class, 'buscartour'])->name('buscartour');
    
  });
});
// Route::post('guardarUserNewsLetter', [IndexController::class, 'guardarUserNewsLetter'])->name('guardarUserNewsLetter');
Route::post('guardarAgencia', [IndexController::class, 'guardarAgencia'])->name('guardarAgencia');


Route::post('guardarformulario', [LibroReclamacionesController::class, 'storePublic'] )->name('guardarFormReclamo');

Route::get('/obtenerProvincia/{departmentId}', [IndexController::class, 'obtenerProvincia'])->name('obtenerProvincia');
Route::get('/obtenerDistritos/{provinceId}', [IndexController::class, 'obtenerDistritos'])->name('obtenerDistritos');
Route::post('guardarUserNewsLetter', [NewsletterSubscriberController::class, 'guardarUserNewsLetter'])->name('guardarUserNewsLetter');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
        Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');

        /* subscripciones */
        Route::get('/subscripciones', [NewsletterSubscriberController::class, 'showSubscripciones'])->name('subscripciones') ;


        Route::resource('/verPoliticasPrivacidad', PoliticasdePrivacidadController::class);
        Route::post('verPoliticasPrivacidad/delete', [PoliticasdePrivacidadController::class, 'delete'])->name('PoliticasPrivacidad.delete');


        Route::resource('terminoscondiciones', TerminosycondicionesController::class);
        Route::post('terminoscondiciones/delete', [TerminosycondicionesController::class, 'delete'])->name('terminoscondiciones.delete');
       


        Route::post('/politicasPrivacidadUpdate/{id}', [LegalesController::class, 'politicasPrivacidadUpdate'])->name('politicasPrivacidadUpdate');



        //Libro de reclamaciones
        Route::resource('/reclamo', LibroReclamacionesController::class);
        Route::post('/reclamo/borrar', [LibroReclamacionesController::class, 'borrar'])->name('reclamo.borrar');

        //messages
        Route::resource('/mensajes', MessageController::class);
        Route::post('/mensajes/borrar', [MessageController::class, 'borrar'])->name('mensajes.borrar');

        

        //Datos Generales
        Route::resource('/datosgenerales', GeneralController::class);

        //Testimonies
        Route::resource('/testimonios', TestimonyController::class);
        Route::post('/testimonios/deleteTestimony', [TestimonyController::class, 'deleteTestimony'])->name('testimonios.deleteTestimony');
        Route::post('/testimonios/updateVisible', [TestimonyController::class, 'updateVisible'])->name('testimonios.updateVisible');

        //Categorías
        Route::resource('/destination', CategoryController::class);
        Route::post('/destination/deleteCategory', [CategoryController::class, 'deleteCategory'])->name('destination.deleteCategory');
        Route::post('/destination/updateVisible', [CategoryController::class, 'updateVisible'])->name('destination.updateVisible');

        //Actividades
        Route::resource('/activity', ProductsController::class);
        Route::post('/activity/updateVisible', [ProductsController::class, 'updateVisible'])->name('activity.updateVisible');
        Route::post('/activity/borrar', [ProductsController::class, 'borrar'])->name('activity.borrar');
        Route::post('/activity/borrarimg', [ProductsController::class, 'borrarimg'])->name('activity.borrarimg');


        //Servicios
        Route::resource('/servicios', ServiceController::class);
        Route::post('/servicios/deleteService', [ServiceController::class, 'deleteService'])->name('servicio.deleteService');
        Route::post('/servicios/updateVisible', [ServiceController::class, 'updateVisible'])->name('servicio.updateVisible');


        //Blog
        Route::resource('/blogs', BlogController::class);
        Route::post('/blogs/deleteBlog', [BlogController::class, 'deleteBlog'])->name('blogs.deleteBlog');
        Route::post('/blogs/updateVisible', [BlogController::class, 'updateVisible'])->name('blogs.updateVisible');

        //Crud Logos
        Route::resource('/logos', LogosClientController::class);
        Route::post('/logos/deleteLogo', [LogosClientController::class, 'deleteLogo'])->name('logos.deleteLogo');

        Route::resource('/staff', StaffController::class);
        Route::post('/staff/updateVisible', [StaffController::class, 'updateVisible'])->name('staff.updateVisible');

        Route::resource('/strength', StrengthController::class);
        Route::post('/strength/updateVisible', [StrengthController::class, 'updateVisible'])->name('strength.updateVisible');
        Route::post('/strength/borrar', [StrengthController::class, 'borrar'])->name('strength.borrar');

        //Atributes

        Route::resource('/aboutus', AboutUsController::class);
        Route::post('/aboutus/updateVisible', [AboutUsController::class, 'updateVisible'])->name('aboutus.updateVisible');
        Route::post('/aboutus/borrar', [AboutUsController::class, 'borrar'])->name('aboutus.borrar');

        Route::resource('/attributes', AttributesController::class);
        Route::post('/attributes/updateVisible', [AttributesController::class, 'updateVisible'])->name('attributes.updateVisible');
        Route::post('/attributes/borrar', [AttributesController::class, 'borrar'])->name('attributes.borrar');

        //valores atributes
        Route::resource('/valoresattributes', ValoresAtributosController::class);
        Route::post('/valoresattributes/borrar', [ValoresAtributosController::class, 'borrar'])->name('valoresattributes.borrar');
        Route::post('/valoresattributes/updateVisible', [ValoresAtributosController::class, 'updateVisible'])->name('valoresattributes.updateVisible');


        //Etiquetas
        Route::resource('/tags', TagController::class);
        Route::post('/tags/deleteTags', [TagController::class, 'deleteTags'])->name('tags.deleteTags');

        //sliders
        Route::resource('/slider', SliderController::class);
        Route::post('/slider/updateVisible', [SliderController::class, 'updateVisible'])->name('slider.updateVisible');
        Route::post('/slider/deleteSlider', [SliderController::class, 'deleteSlider'])->name('slider.deleteSlider');


        Route::resource('/faqs', FaqsController::class);
        Route::post('/faqs/updateVisible', [FaqsController::class, 'updateVisible'])->name('faqs.updateVisible');
        Route::post('/faqs/borrar', [FaqsController::class, 'borrar'])->name('faqs.borrar');

        Route::resource('/galerie', GalerieController::class);
        Route::post('/galerie/updateVisible', [GalerieController::class, 'updateVisible'])->name('galerie.updateVisible');
        Route::post('/galerie/borrar', [GalerieController::class, 'borrar'])->name('galerie.borrar');

        Route::resource('/langs', LangsController::class);
        Route::post('/langs/updateVisible', [LangsController::class, 'updateVisible'])->name('langs.updateVisible');
        Route::post('/langs/borrar', [LangsController::class, 'borrar'])->name('langs.borrar');



        Route::fallback(function () {
            return view('pages/utility/404');
        });
    });
});
