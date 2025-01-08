<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Frontend\TagController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ExamController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\UserController;

use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\MediaController;
use App\Http\Controllers\Frontend\BannerController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\FilterController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\UnibannerController;
use App\Http\Controllers\Frontend\UniversityController;
use App\Http\Controllers\Dashboard\SiteSettingController;
use App\Http\Controllers\Dashboard\SocialMediaController;
use App\Http\Controllers\Dashboard\ExamController as DashboardExamController;
use App\Http\Controllers\Dashboard\LocationController as DashboardLocationController;
use App\Http\Controllers\Dashboard\TagController as DashboardTagController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\PageController as DashboardPageController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
use App\Http\Controllers\Dashboard\UserController as DashboardUserController;
use App\Http\Controllers\Dashboard\BannerController as DashboardBannerController;
use App\Http\Controllers\Dashboard\CommentController as DashboardCommentController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\UnibannerController as DashboardUnibannerController;

Route::name("auth.")->group(function() {
    Route::get("/signup", [SignupController::class, "index"])->name("signup");
    Route::post("/signup", [SignupController::class, "signup"])->name("signup.submit");
    Route::get("/login", [LoginController::class, "index"])->name("login");
    Route::post("/login", [LoginController::class, "login"])->name("login.submit");
    Route::post("/logout", [LogoutController::class, "index"])->name("logout");
});
Route::name("dashboard.")->prefix("/dashboard")->middleware(["auth"])->group(function() {
    // dashboard home
    Route::get("/", [DashboardHomeController::class, "index"])->name("home");

    // posts
    Route::prefix("/posts")->name("posts.")->controller(DashboardPostController::class)->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/{id}/featured", "featured")->name("featured");
        Route::get("/{id}/comment", "comment")->name("comment");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/posts", DashboardPostController::class)->except(["show"]);

    // media
    Route::resource("/media", MediaController::class)->except(["show", "edit", "update"]);

    // comments
    Route::prefix("/comments")->name("comments.")->controller(DashboardCommentController::class)->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/comments", DashboardCommentController::class)->only(["index", "show", "destroy"]);

    // categories
    Route::prefix("/categories")->name("categories.")->controller(DashboardCategoryController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/categories", DashboardCategoryController::class)->middleware(["admin"]);   

    //banner
    Route::prefix("/banner")->name("banner.")->controller(DashboardBannerController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/banner", DashboardBannerController::class)->middleware(["admin"]);
    //University Logo
    Route::prefix("/unibanner")->name("unibanner.")->controller(DashboardUnibannerController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/unibanner", DashboardUnibannerController::class)->middleware(["admin"]);

    //tags
    Route::prefix("/tags")->name("tags.")->controller(DashboardTagController::class)->middleware(["admin"])->group(function() {
        Route::get("/index", "index")->name("index");
        Route::delete("/{id}/destroy", "destroy")->name("destroy");
    });

    // users
    Route::prefix("/users")->name("users.")->controller(DashboardUserController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
    });
    Route::resource("/users", DashboardUserController::class)->middleware(["admin"]);

    // pages
    Route::prefix("/pages")->name("pages.")->controller(DashboardPageController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/pages", DashboardPageController::class)->except(["show"])->middleware(["admin"]);
    
     // Location
     Route::prefix("/location")->name("location.")->controller(DashboardLocationController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
        
    });
    Route::resource("/location", DashboardLocationController::class)->except(["show"])->middleware(["admin"]);
    


    // Exam
      Route::prefix("/exams")->name("exams.")->controller(DashboardExamController::class)->middleware(["admin"])->group(function() {
        Route::get("/{id}/status", "status")->name("status");
        Route::get("/trashed", "trashed")->name("trashed");
        Route::get("/{id}/restore", "restore")->name("restore");
        Route::delete("/{id}/delete", "delete")->name("delete");
    });
    Route::resource("/exams", DashboardExamController::class)->except(["show"])->middleware(["admin"]);
    

    // settings
    Route::prefix("/settings")->name("settings.")->middleware(["admin"])->group(function() {
        // site settings
        Route::get("/site-settings", [SiteSettingController::class, "index"])->name("site");
        Route::post("/site-settings", [SiteSettingController::class, "update"])->name("site.update");
        // profile update
        Route::get("/profile", [ProfileController::class, "index"])->withoutMiddleware(["admin"])->name("profile");
        Route::post("/profile", [ProfileController::class, "update"])->withoutMiddleware(["admin"])->name("profile.update");
        // password change
        Route::get("/change-password", [ProfileController::class, "password"])->withoutMiddleware(["admin"])->name("password");
        Route::post("/change-password", [ProfileController::class, "passwordUpdate"])->withoutMiddleware(["admin"])->name("password.update");
        // social media
        Route::get("/social-media", [SocialMediaController::class, "index"])->name("social.media");
        Route::post("/social-media", [SocialMediaController::class, "add"])->name("social.media.add");
        Route::get("/social-media/{id}/status", [SocialMediaController::class, "status"])->name("social.media.status");
        Route::delete("/social-media/{id}/delete", [SocialMediaController::class, "delete"])->name("social.media.delete");
        // site menu
        Route::get("/menus/header", [MenuController::class, "header"])->name("menus.header");
        Route::post("/menus/header", [MenuController::class, "headerUpdate"])->name("menus.header.update");
        Route::get("/menus/footer", [MenuController::class, "footer"])->name("menus.footer");
        Route::post("/menus/footer", [MenuController::class, "footerUpdate"])->name("menus.footer.update");
    });
});


Route::name("frontend.")->group(function() {
    Route::get("/filter", [FilterController::Class, "index"]);
    Route::get("/university", [UniversityController::Class, "index"]);
    // Route::get("/course", [CourseController::Class, "index"]);
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/search", [SearchController::class, "index"])->name("search");
    Route::get("/post/{slug}", [PostController::class, "index"])->name("post");
    Route::post("/comment/{id}", [CommentController::class, "index"])->name("comment");
    Route::post("/comment-reply", [CommentController::class, "reply"])->name("comment.reply");
    Route::get("/{slug}", [CategoryController::class, "index"])->name("category");  
    Route::get("/banner/{slug}", [BannerController::class, "index"])->name("banner");
    Route::get("/unibanner/{slug}", [UnibannerController::class, "index"])->name("unibanner");
    Route::get("/user/{username}", [UserController::class, "index"])->name("user");
    Route::get("/tag/{name}", [TagController::class, "index"])->name("tag");
    Route::get("page/{slug}", [PageController::class, "index"])->name("page");
    Route::get("location/{slug}", [LocationController::class, "index"])->name("location");
    Route::get("exams/{slug}", [ExamController::class, "index"])->name("exams");
    Route::get('/{categorySlug}/{pageSlug}', [CategoryController::class, 'showCategoryPage'])
    ->name('frontend.category.index');
    Route::get('/page/{pageSlug}', [PageController::class, 'show'])->name('page.show');
    Route::get('/{categorySlug}', [CategoryController::class, 'showCategoryPages'])->name('frontend.course.index');
});



