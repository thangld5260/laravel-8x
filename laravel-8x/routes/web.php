<?php									
use Illuminate\Support\Facades\Route;									
use App\Http\Controllers\CustomAuthController;	
								
									
/*									
|--------------------------------------------------------------------------									
| Web Routes									
|--------------------------------------------------------------------------									
*/									
// Route::get('/', function () {
//     return view('welcome');
// });
// tao route 
Route::get('abo', function () {
    return 'abo';
});
// tao route nang cao
Route::get('abo/a', function () {
    return 'a';
});
// tao route THAM SO
Route::get('abo/{theSubject}', function ($theSubject) {
    return $theSubject;
});
// tao route THAM SO
Route::get('abo/test/{a}/{b}', function ($a, $b) {
    return "the product  $a and $b";
});
//uy quyền route
route::get('ahihi',function(){
    return Redirect('abo');
});
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);									
Route::get('login', [CustomAuthController::class, 'index'])->name('login');									
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');									
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::get('', [CustomAuthController::class, 'registration'])->name('register-user');									
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');									
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');									
									
									