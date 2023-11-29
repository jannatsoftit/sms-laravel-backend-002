<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// -------Auth Controller --------//

use App\Http\Controllers\API\AuthController;








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

use App\Http\Controllers\Admin\Grade\{
    GradeDestroyController,
    GradeListController,
    GradeShowController,
    GradeStoreController,
    GradeUpdateController,
};

use App\Http\Controllers\Admin\Mark\{
    MarkDestroyController,
    MarkListController,
    MarkShowController,
    MarkStoreController,
    MarkUpdateController,
};

use App\Http\Controllers\Admin\OfflineExam\{
    OfflineExamDestroyController,
    OfflineExamListController,
    OfflineExamShowController,
    OfflineExamStoreController,
    OfflineExamUpdateController,
};


use App\Http\Controllers\Admin\ClassRoom\{
    ClassRoomDestroyController,
    ClassRoomListController,
    ClassRoomShowController,
    ClassRoomStoreController,
    ClassRoomUpdateController,
};

use App\Http\Controllers\Admin\Subject\{
    SubjectDestroyController,
    SubjectListController,
    SubjectShowController,
    SubjectStoreController,
    SubjectUpdateController,
};

use App\Http\Controllers\Admin\Syllabus\{
    SyllabusDestroyController,
    SyllabusListController,
    SyllabusShowController,
    SyllabusStoreController,
    SyllabusUpdateController,
};

use App\Http\Controllers\Admin\ClassRoutine\{
    ClassRoutineDestroyController,
    ClassRoutineListController,
    ClassRoutineShowController,
    ClassRoutineStoreController,
    ClassRoutineUpdateController,
};


use App\Http\Controllers\Admin\StudentFee\{
    StudentFeeDestroyController,
    StudentFeeListController,
    StudentFeeShowController,
    StudentFeeStoreController,
    StudentFeeUpdateController,
};


use App\Http\Controllers\Admin\ExpanseCategory\{
    ExpanseCategoryDestroyController,
    ExpanseCategoryListController,
    ExpanseCategoryShowController,
    ExpanseCategoryStoreController,
    ExpanseCategoryUpdateController,
};


use App\Http\Controllers\Admin\School\{
    SchoolListController,
    SchoolShowController,
    SchoolStoreController,
    SchoolUpdateController,
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

    // Auth routes
    Route::post('register', [AuthController::class, 'register']);




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


    // Exam category
    Route::group(['prefix' => 'examCategories'], function() {
        Route::get('', ExamCategoryListController::class);
        Route::post('', ExamCategoryStoreController::class);
        Route::group(['prefix' => '{examCategory}'], function() {
        Route::get('', ExamCategoryShowController::class);
        Route::put('', ExamCategoryUpdateController::class);
        Route::delete('', ExamCategoryDestroyController::class);
        });
    });


    // Grade
    Route::group(['prefix' => 'grades'], function() {
        Route::get('', GradeListController::class);
        Route::post('', GradeStoreController::class);
        Route::group(['prefix' => '{grade}'], function() {
        Route::get('', GradeShowController::class);
        Route::put('', GradeUpdateController::class);
        Route::delete('', GradeDestroyController::class);
        });
    });

    // Mark
    Route::group(['prefix' => 'marks'], function() {
        Route::get('', MarkListController::class);
        Route::post('', MarkStoreController::class);
        Route::group(['prefix' => '{mark}'], function() {
        Route::get('', MarkShowController::class);
        Route::put('', MarkUpdateController::class);
        Route::delete('', MarkDestroyController::class);
        });
    });

    // Offline Exam
    Route::group(['prefix' => 'offlineExams'], function() {
        Route::get('', OfflineExamListController::class);
        Route::post('', OfflineExamStoreController::class);
        Route::group(['prefix' => '{offlineExam}'], function() {
        Route::get('', OfflineExamShowController::class);
        Route::put('', OfflineExamUpdateController::class);
        Route::delete('', OfflineExamDestroyController::class);
        });
    });


    // Class Room
    Route::group(['prefix' => 'classRooms'], function() {
        Route::get('', ClassRoomListController::class);
        Route::post('', ClassRoomStoreController::class);
        Route::group(['prefix' => '{classRoom}'], function() {
        Route::get('', ClassRoomShowController::class);
        Route::put('', ClassRoomUpdateController::class);
        Route::delete('', ClassRoomDestroyController::class);
        });
    });

    // Subject
    Route::group(['prefix' => 'subjects'], function() {
        Route::get('', SubjectListController::class);
        Route::post('', SubjectStoreController::class);
        Route::group(['prefix' => '{subject}'], function() {
        Route::get('', SubjectShowController::class);
        Route::put('', SubjectUpdateController::class);
        Route::delete('', SubjectDestroyController::class);
        });
    });

    // Syllabus
    Route::group(['prefix' => 'syllabuses'], function() {
        Route::get('', SyllabusListController::class);
        Route::post('', SyllabusStoreController::class);
        Route::group(['prefix' => '{syllabus}'], function() {
        Route::get('', SyllabusShowController::class);
        Route::put('', SyllabusUpdateController::class);
        Route::delete('', SyllabusDestroyController::class);
        });
    });

    // Class Routine
    Route::group(['prefix' => 'classRoutines'], function() {
        Route::get('', ClassRoutineListController::class);
        Route::post('', ClassRoutineStoreController::class);
        Route::group(['prefix' => '{classRoutine}'], function() {
        Route::get('', ClassRoutineShowController::class);
        Route::put('', ClassRoutineUpdateController::class);
        Route::delete('', ClassRoutineDestroyController::class);
        });
    });

    // StudentFee
    Route::group(['prefix' => 'studentFees'], function() {
        Route::get('', StudentFeeListController::class);
        Route::post('', StudentFeeStoreController::class);
        Route::group(['prefix' => '{studentFee}'], function() {
        Route::get('', StudentFeeShowController::class);
        Route::put('', StudentFeeUpdateController::class);
        Route::delete('', StudentFeeDestroyController::class);
        });
    });

    // ExpanseCategory
    Route::group(['prefix' => 'expanseCategories'], function() {
        Route::get('', ExpanseCategoryListController::class);
        Route::post('', ExpanseCategoryStoreController::class);
        Route::group(['prefix' => '{expanseCategory}'], function() {
        Route::get('', ExpanseCategoryShowController::class);
        Route::put('', ExpanseCategoryUpdateController::class);
        Route::delete('', ExpanseCategoryDestroyController::class);
        });
    });

    // School Information:
    Route::group(['prefix' => 'schools'], function() {
        Route::get('', SchoolListController::class);
        Route::post('', SchoolStoreController::class);
        Route::group(['prefix' => '{school}'], function() {
        Route::get('', SchoolShowController::class);
        Route::put('', SchoolUpdateController::class);
        });
    });


});


