<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_db', language 'ms', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbchangepasswordurl_key'] = 'URL perubahan-kata laluan';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdeleteuser'] = 'Pengguna dipadam {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Ralat memadam pengguna {$a}';
$string['auth_dbdescription'] = 'Cara ini menggunakan pangkalan data luaran untuk memeriksa samada nama pengguna dan kata laluan yang dimasukkan adalah sah. Jika akaun adalah akaun baru, maka maklumat dari jadual-jadual yang lain juga boleh dimasukkan ke Moodle.';
$string['auth_dbextencoding'] = 'Pengekodan db luaran';
$string['auth_dbextencodinghelp'] = 'Pengekodan yang digunakan dalam pangkalan data luaran';
$string['auth_dbextrafields'] = 'Ruang-ruang ini adalah pilihan. Anda dapat memilih untuk memasukkan lebih dulu beberapa ruang pengguna dari Moodle dengan maklumat dari <b>ruangan pangkalan data luaran</b> yang anda tentukan disini. <br />Jika anda kosongkan, maka maklumat asal yang akan digunakan.<br />Walau bagaimana pun, pengguna akan dapat mengubah kesemua ruangan ini setelah mereka daftar masuk.';
$string['auth_dbfieldpass'] = 'Nama dari ruangan yang berisi kata laluan';
$string['auth_dbfieldpass_key'] = 'Bidang kata laluan';
$string['auth_dbfielduser'] = 'Nama dari ruangan yang berisi nama pengguna';
$string['auth_dbfielduser_key'] = 'Bidang nama pengguna';
$string['auth_dbhost'] = 'Komputer yang menyimpan pelayan pangkalan data.';
$string['auth_dbhost_key'] = 'Hos';
$string['auth_dbinsertuser'] = 'Pengguna dimasukkan {$a->name} id {$a->id}';
$string['auth_dbname'] = 'Nama pangkalan data itu sendiri';
$string['auth_dbname_key'] = 'Nama DB';
$string['auth_dbpass'] = 'Kata laluan sama dengan nama pengguna';
$string['auth_dbpass_key'] = 'Kata laluan';
$string['auth_dbpasstype'] = 'Terangkan format kata laluan itu disimpan. Enkripsi MD5 sangat berguna untuk tujuan penyambungan dengan aplikasi internet yang lain seperti PostNuke';
$string['auth_dbpasstype_key'] = 'Format kata laluan';
$string['auth_dbreviveduser'] = 'Pengguna dipulihkan semula {$a->name} id {$a->id}';
$string['auth_dbsetupsql'] = 'Arahan persediaan SQL';
$string['auth_dbsuspenduser'] = 'Pengguna digantung {$a->name} id {$a->id}';
$string['auth_dbtable'] = 'Nama jadual pada pangkalan data';
$string['auth_dbtable_key'] = 'Jadual';
$string['auth_dbtype'] = 'Jenis pangkalan data (Lihat <a href="../lib/adodb/readme.htm#drivers">Dokumentasi ADOdb</a> untuk keterangannya)';
$string['auth_dbtype_key'] = 'Pangkalan data';
$string['auth_dbupdatinguser'] = 'Pengguna dikemaskini {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nama pengguna yang mempunyai akses baca untuk pangkalan data';
$string['auth_dbuser_key'] = 'Pengguna DB';
$string['auth_dbusernotexist'] = 'Tidak boleh kemaskini pengguna yang tidak wujud: {$a}';
$string['auth_dbuserstoadd'] = 'Entri pengguna untuk ditambah: {$a}';
$string['auth_dbuserstoremove'] = 'Entri pengguna untuk dihapus: {$a}';
$string['pluginname'] = 'Gunakan pangkalan data luaran';
