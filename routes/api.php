<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//----- Custom Admin Dashboard Start -----//

use App\Http\Controllers\Admin\Admin\{
    // AdminDashboardController,
    AdminDestroyController,
    AdminListController,
    AdminShowController,
    AdminStoreController,
    AdminUpdateController,
};

use App\Http\Controllers\Admin\Student\{
    StudentDestroyController,
    StudentListController,
    StudentShowController,
    StudentStoreController,
    StudentUpdateController,
};

use App\Http\Controllers\Admin\Parent\{
    ParentDestroyController,
    ParentListController,
    ParentShowController,
    ParentStoreController,
    ParentUpdateController,
};

use App\Http\Controllers\Admin\Teacher\{
    TeacherDestroyController,
    TeacherListController,
    TeacherShowController,
    TeacherStoreController,
    TeacherUpdateController,
};


use App\Http\Controllers\Admin\Accountant\{
    AccountantDestroyController,
    AccountantListController,
    AccountantShowController,
    AccountantStoreController,
    AccountantUpdateController,
};


use App\Http\Controllers\Admin\Librarian\{
    LibrarianDestroyController,
    LibrarianListController,
    LibrarianShowController,
    LibrarianStoreController,
    LibrarianUpdateController,
};

use App\Http\Controllers\Admin\ExamCategory\{
    ExamCategoryDestroyController,
    ExamCategoryListController,
    ExamCategoryShowController,
    ExamCategoryStoreController,
    ExamCategoryUpdateController,
};




//----- Custom Admin Dashboard End -----//

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'admin','auth'], function(){

    //---- Admin profile routes
    // Route::get('admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('role_id');
    // Route::get('admin/profile', [AdminDashboardController::class, 'adminProfile'])->name('admin.profile')->middleware('role_id');
    // Route::post('admin/profile/update/{id}', [AdminDashboardController::class,'adminProfileUpdate'])->name('admin.profileUpdate');

    // //---- Admin routes
    // Route::get('admin/admin', [AdminListController::class,'adminList'])->name('admin.admin');
    // Route::get('admin/admin/create', [AdminStoreController::class,'adminCreate'])->name('admin.admin.create');
    // Route::post('admin/admin/store', [AdminStoreController::class,'adminStore'])->name('admin.admin.store');
    // Route::get('admin/admin/show/{id}', [AdminShowController::class,'adminShow'])->name('admin.admin.show');
    // Route::get('admin/admin/edit/{id}', [AdminUpdateController::class,'adminEdit'])->name('admin.admin.edit');
    // Route::post('admin/admin/update/{id}', [AdminUpdateController::class,'adminUpdate'])->name('admin.admin.update');
    // Route::get('admin/admin/delete/{id}', [AdminDestroyController::class,'adminDelete'])->name('admin.admin.delete');

  Route::group(['prefix' => 'admins'], function() {
    Route::get('', AdminListController::class);
    Route::post('', AdminStoreController::class);
      Route::group(['prefix' => '{admin}'], function() {
        Route::get('', AdminShowController::class);
        Route::put('', AdminUpdateController::class);
        Route::delete('', AdminDestroyController::class);
      });
  });

    Route::group(['prefix' => 'students'], function() {
        Route::get('', StudentListController::class);
        Route::post('', StudentStoreController::class);
        Route::group(['prefix' => '{student}'], function() {
        Route::get('', StudentShowController::class);
        Route::put('', StudentUpdateController::class);
        Route::delete('', StudentDestroyController::class);
        });
    });

    Route::group(['prefix' => 'parents'], function() {
        Route::get('', ParentListController::class);
        Route::post('', ParentStoreController::class);
        Route::group(['prefix' => '{parent}'], function() {
        Route::get('', ParentShowController::class);
        Route::put('', ParentUpdateController::class);
        Route::delete('', ParentDestroyController::class);
        });
    });

    Route::group(['prefix' => 'teachers'], function() {
        Route::get('', TeacherListController::class);
        Route::post('', TeacherStoreController::class);
        Route::group(['prefix' => '{teacher}'], function() {
        Route::get('', TeacherShowController::class);
        Route::put('', TeacherUpdateController::class);
        Route::delete('', TeacherDestroyController::class);
        });
    });


    Route::group(['prefix' => 'accountants'], function() {
        Route::get('', AccountantListController::class);
        Route::post('', AccountantStoreController::class);
        Route::group(['prefix' => '{accountant}'], function() {
        Route::get('', AccountantShowController::class);
        Route::put('', AccountantUpdateController::class);
        Route::delete('', AccountantDestroyController::class);
        });
    });

    Route::group(['prefix' => 'librarians'], function() {
        Route::get('', LibrarianListController::class);
        Route::post('', LibrarianStoreController::class);
        Route::group(['prefix' => '{librarian}'], function() {
        Route::get('', LibrarianShowController::class);
        Route::put('', LibrarianUpdateController::class);
        Route::delete('', LibrarianDestroyController::class);
        });
    });

    Route::group(['prefix' => 'examCategories'], function() {
        Route::get('', ExamCategoryListController::class);
        Route::post('', ExamCategoryStoreController::class);
        Route::group(['prefix' => '{examCategory}'], function() {
        Route::get('', ExamCategoryShowController::class);
        Route::put('', ExamCategoryUpdateController::class);
        Route::delete('', ExamCategoryDestroyController::class);
        });
    });



});


