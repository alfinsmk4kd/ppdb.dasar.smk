<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('admin/beranda', 'Admin::beranda');
$routes->post('insert/beranda', 'Admin::saveBeranda');
$routes->get('/auth', 'auth::index');
$routes->get('auth/login', 'auth::login');
$routes->get('auth/link', 'auth::loginlink');
$routes->get('auth/logins', 'auth::logins');
$routes->post('auth/cek_login_user', 'Auth::cek_login_user');
$routes->post('auth/cek_login_siswa', 'Auth::cek_login_siswa');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/auth/logouts', 'Auth::logouts');

// Agama
$routes->get('/agama', 'Agama::index');
$routes->post('agama/insert', 'Agama::insertData');
$routes->post('agama/edit/(:segment)', 'Agama::editData/$1');
$routes->post('agama/delete/(:any)', 'Agama::deleteData/$1');

// Tahun Ajaran
$routes->get('/ta', 'Ta::index');
$routes->get('ta/statusNonAktif/(:segment)', 'Ta::statusNonAktif/$1');
$routes->get('ta/statusAktif/(:segment)', 'Ta::statusAktif/$1');
$routes->post('ta/insert', 'Ta::insertData');
$routes->post('ta/edit/(:segment)', 'Ta::editData/$1');
$routes->post('ta/delete/(:any)', 'Ta::deleteData/$1');

// Jurusan
$routes->get('/jurusan', 'Jurusan::index');
$routes->get('ta/statusNonAktif/(:segment)', 'Ta::statusNonAktif/$1');
$routes->get('ta/statusAktif/(:segment)', 'Ta::statusAktif/$1');
$routes->post('ta/insert', 'Ta::insertData');
$routes->post('ta/edit/(:segment)', 'Ta::editData/$1');
$routes->post('ta/delete/(:any)', 'Ta::deleteData/$1');

// daftar
$routes->get('/daftar', 'Daftar::index');
$routes->post('pendaftaran/insert', 'Daftar::insertData');

// pendaftaran
$routes->get('/pendaftaran', 'Pendaftaran::index');
$routes->get('pendaftaran/logins', 'Pendaftaran::logins');
$routes->post('pendaftaran/edit/(:segment)', 'Pendaftaran::editData/$1');
$routes->post('pendaftaran/delete/(:any)', 'Pendaftaran::deleteData/$1');

// Pendidikan
$routes->get('/pendidikan', 'Pendidikan::index');
$routes->post('pendidikan/insert', 'Pendidikan::insertData');
$routes->post('pendidikan/edit/(:segment)', 'Pendidikan::editData/$1');
$routes->post('pendidikan/delete/(:any)', 'Pendidikan::deleteData/$1');

// Pekerjaan
$routes->get('/pekerjaan', 'Pekerjaan::index');
$routes->post('pekerjaan/insert', 'Pekerjaan::insertData');
$routes->post('pekerjaan/edit/(:segment)', 'Pekerjaan::editData/$1');
$routes->post('pekerjaan/delete/(:any)', 'Pekerjaan::deleteData/$1');

// Pekerjaan
$routes->get('/penghasilan', 'Penghasilan::index');
$routes->post('penghasilan/insert', 'Penghasilan::insertData');
$routes->post('penghasilan/edit/(:segment)', 'Penghasilan::editData/$1');
$routes->post('penghasilan/delete/(:any)', 'Penghasilan::deleteData/$1');

// User
$routes->get('/user', 'User::index');
$routes->post('user/insert', 'User::insertData');
$routes->post('user/edit/(:segment)', 'User::editData/$1');
$routes->post('user/delete/(:any)', 'User::deleteData/$1');

// Setting
$routes->get('admin/setting', 'Admin::setting');
$routes->post('setting/insert', 'Admin::insertSetting');

// siswa
$routes->get('/siswa', 'Siswa::index');
$routes->post('siswa/editp/(:segment)', 'Siswa::updateSiswa/$1');
$routes->post('siswa/editf/(:segment)', 'Siswa::updateFoto/$1');
$routes->post('siswa/edits/(:segment)', 'Siswa::updatePeserta/$1');

$routes->get('/baner', 'Baner::index');
$routes->post('baner/insert', 'Baner::insertData');

// Jalur Masuk
$routes->get('/jalur', 'Jalur::index');
$routes->post('jalur/insert', 'Jalur::insertData');
$routes->post('jalur/edit/(:segment)', 'Jalur::editData/$1');
$routes->post('jalur/delete/(:any)', 'Jalur::deleteData/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
