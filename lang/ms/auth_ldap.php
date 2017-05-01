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
 * Strings for component 'auth_ldap', language 'ms', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Jika Anda ingin menggunakan "bind-user" untuk mencari pengguna, tentukanlah disini. Misalnya \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Kata laulan untuk';
$string['auth_ldap_bind_pw_key'] = 'Kata laluan';
$string['auth_ldap_changepasswordurl_key'] = 'URL penukaran kata laluan';
$string['auth_ldap_contexts'] = 'Senarai konteks dimana pengguna terletak. Asingkan konteks-konteks yang berbeza dengan \';\'. Sebagai contoh: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteks';
$string['auth_ldap_create_context'] = 'Jika anda membenarkan pendaftaran pengguna menggunakan email, perincikan konteks dimana pengguna didaftarkan. Ini mestilah berbeza daripada pengguna yang lain untuk mengelakkan isu-isu keselamatan. Anda tidak perlu menambahkan konteks ini pada ldap_context-variable, kerana Moodle akan mencari pengguna-pengguna konteks ini secara automatik.';
$string['auth_ldap_creators'] = 'Senarai kumpulan yang mana anggota-anggotanya dibenarkan mencipta kursus-kursus baru. Asingkan kumpulan berbeza degan ";". Selalunya seperti \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldapdescription'] = 'Cara ini melakukan pengesahan melalui pelayan LDAP luaran.
Jika nama pengguna dan password kata laluan adalah sah, Moodle akan mencipta pengguna baru
dalam pangkalan datanyaa. Modul ini dapat membaca atribut pengguna dari LDAP dan memasukkan terlebih dahulu dalam ruangan yang diperlukan oleh Moodle.  Untuk daftar masuk selanjutnya hanya nama pengguna dan kata laluan yang diperiksa.';
$string['auth_ldap_expiration_key'] = 'Tamat tempoh';
$string['auth_ldap_expiration_warning_key'] = 'Amaran tamat tempoh';
$string['auth_ldap_expireattr_key'] = 'Atribut tamat tempoh';
$string['auth_ldapextrafields'] = 'Ruang-ruang ini adalah pilihan. Anda dapat memilih untuk memasukkan terlebih dahulu beberapa ruang pengguna dari Moodle dengan maklumat dari <b>ruangan LDAP</b> yang anda tentukan disini. <br />Jika anda kosongkan, maka tiada maklumat yang akan digunakan.<br />Walau bagaimana pun, pengguna akan dapat mengubah kesemua ruangan ini setelah mereka daftar masuk.';
$string['auth_ldap_host_url'] = 'Tentukan hos LDAP dengan format URL  seperti \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'URL hos';
$string['auth_ldap_ldap_encoding_key'] = 'Pengekodan LDAP';
$string['auth_ldap_memberattribute'] = 'Perincikan atribut pengguna, apabila pengguna adalah anggota sesebuah kumpulan. Selalunya \'member\'';
$string['auth_ldap_passtype_key'] = 'Format kata laluan';
$string['auth_ldap_search_sub'] = 'Masukkan nilai <> 0 jika anda ingin untuk mencari pengguna dari sub-konteks.';
$string['auth_ldap_server_settings'] = 'Penetapan pelayan LDAP';
$string['auth_ldap_update_userinfo'] = 'Kemaskini maklumat pengguna (nama depan, namaakhir, alamat..) dari LDAP ke Moodle. Lihat /auth/ldap/attr_mappings.php untuk maklumat pemetaannya';
$string['auth_ldap_user_attribute'] = 'Atribut yang digunakan untuk nama/cari pengguna. Biasanya \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atribut pengguna';
$string['auth_ldap_user_type_key'] = 'Jenis pengguna';
$string['auth_ldap_version'] = 'Versi protokol LDAP pada server ini.';
$string['auth_ldap_version_key'] = 'Versi';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Aktif';
$string['auth_ntlmsso_subnet_key'] = 'Subrangkaian';
$string['auth_ntlmsso_type_key'] = 'Jenis pengesahan';
$string['connectingldap'] = 'Sambungan ke pelayan LDAP...';
$string['creatingtemptable'] = 'Mewujudkan jadual sementara {$a}';
$string['gotcountrecordsfromldap'] = 'Mendapat {$a} rekod dari LDAP';
$string['nodnforusername'] = 'Ralat di user_update_password(). Tiada DN bagi: {$a->username}';
$string['noupdatestobedone'] = 'Tiada kemaskini yang perlu dilakukan';
$string['nouserentriestoremove'] = 'Tiada entri pengguna yang perlu dipadamkan';
$string['nouserentriestorevive'] = 'Tiada entri pengguna yang perlu dipulihkan semula';
$string['nouserstobeadded'] = 'Tiada pengguna yang perlu ditambah';
$string['ntlmsso_attempting'] = 'Percubaan Daftar Tunggal melalui NTLM...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO tidak diaktifkan.';
$string['ntlmsso_unknowntype'] = 'Jenis ntlmsso tidak diketahui!';
$string['pluginname'] = 'Gunakan pelayan LDAP';
$string['pluginnotenabled'] = 'Plugin tidak diaktifkan!';
$string['renamingnotallowed'] = 'Menamakan semua pengguna tidak dibenarkan dalam LDAP';
$string['userentriestoadd'] = 'Entri pengguna untuk ditambah: {$a}';
$string['userentriestoremove'] = 'Entri pengguna untuk dipadam: {$a}';
$string['userentriestorevive'] = 'Entri pengguna untuk dipulihkan semula: {$a}';
$string['userentriestoupdate'] = 'Entri pengguna untuk dikemas kini: {$a}';
$string['usernotfound'] = 'Pengguna tidak ditemui dalam LDAP';
