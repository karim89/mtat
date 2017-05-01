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
 * Strings for component 'install', language 'ms', branch 'MOODLE_20_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Direktori admin yang dinyatakan adalah tidak betul';
$string['admindirname'] = 'Direktori admin';
$string['admindirsetting'] = 'Beberapa webhos menggunakan /admin sebagai URL khas untuk anda akses panel kawalan atau sesuatu yang lain. Malangnya, ini bertentangan dengan lokasi standard untuk halaman pentadbiran Moodle. Anda boleh memperbaiki ini dengan menamakan semula direktori admin dalam pemasangan anda, dan meletakkan nama baru di sini. Sebagai contoh: <br /> <br /> <b> moodleadmin </ b> <br /> <br />
Ini akan memulihkan pautan admin dalam Moodle.';
$string['admindirsettinghead'] = 'Tetapan direktori admin ...';
$string['admindirsettingsub'] = 'Beberapa webhos menggunakan /admin sebagai URL khas untuk anda akses panel kawalan atau sesuatu yang lain. Malangnya, ini bertentangan dengan lokasi standard untuk halaman pentadbiran Moodle. Anda boleh memperbaiki ini dengan menamakan semula direktori admin dalam pemasangan anda, dan meletakkan nama baru di sini. Sebagai contoh: <br /> <br /> <b> moodleadmin </ b> <br /> <br />
Ini akan memulihkan pautan admin dalam Moodle.';
$string['availablelangs'] = 'Senarai bahasa yang tersedia';
$string['caution'] = 'Berhati-hati';
$string['chooselanguage'] = 'Pilih bahasa';
$string['chooselanguagehead'] = 'Pilih bahasa';
$string['chooselanguagesub'] = 'Sila pilih bahasa untuk pemasangan. Bahasa dipilih akan digunakan sebagai bahasa lalai untuk laman, walau bagaimanapun ia boleh diubah kemudian.';
$string['cliadminpassword'] = 'Kata laluan pengguna admin baru';
$string['cliadminusername'] = 'Nama pengguna akaun admin';
$string['clialreadyinstalled'] = 'config.php fail sudah wujud, sila gunakan admin/cli/upgrade.php jika anda mahu menaik taraf laman web anda.';
$string['cliinstallfinished'] = 'Pemasangan siap dengan jayanya.';
$string['cliinstallheader'] = 'Baris arahan pemasangan program Moodle {$a}';
$string['climustagreelicense'] = 'Dalam mod bukan-interaktif anda mesti bersetuju kepada lesen dengan menentukan pilihan --agree-license';
$string['clitablesexist'] = 'Jadual pangkalan data yang telah wujud, pemasangan cli tidak boleh diteruskan.';
$string['compatibilitysettings'] = 'Memeriksa tetapan PHP anda ...';
$string['compatibilitysettingshead'] = 'Memeriksa tetapan PHP anda ...';
$string['compatibilitysettingssub'] = 'Pelayan anda harus lulus semua ujian ini untuk membuat Moodle berjalan dengan betul';
$string['configfilenotwritten'] = 'Script pemasang tidak dapat secara automatik mewujudkan fail config.php yang mengandungi tetapan yang anda pilih, mungkin kerana direktori Moodle tidak boleh ditulis. Anda boleh menyalin secara manual kod berikut ke dalam fail bernama config.php dalam direktori root Moodle.';
$string['configfilewritten'] = 'config.php telah berjaya mewujudkan';
$string['configurationcomplete'] = 'Konfigurasi selesai';
$string['configurationcompletehead'] = 'Konfigurasi selesai';
$string['configurationcompletesub'] = 'Moodle membuat percubaan untuk menyimpan konfigurasi anda dalam satu fail dalam root pemasangan Moodle anda.';
$string['database'] = 'Pangkalan data';
$string['databasecreationsettings'] = 'Sekarang anda perlu mengkonfigurasi tetapan pangkalan data yang mana kebanyakan data Moodle akan disimpan. Pangkalan data ini akan dibuat secara automatik oleh pemasang dengan tetapan yang dinyatakan di bawah. <br />
<br /><br />
<b>Jenis:</b> ditetap ke "mysql" oleh pemasang <br />
 <b>Hos:</b> ditetap ke "localhost" oleh pemasang <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> ditetap kepada "root" oleh pemasang <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> pilihan awalan yang akan digunakan untuk semua nama-nama jadual';
$string['databasecreationsettingshead'] = 'Sekarang, anda perlu mengkonfigurasi tetapan pangkalan data di mana kebanyakan data Moodle akan disimpan. Pangkalan data ini akan dibuka secara automatik oleh pemasang dengan tetapan yang dinyatakan di bawah.';
$string['databasecreationsettingssub'] = '<b>Jenis:</b> ditetap ke "mysql" oleh pemasang <br />
 <b>Hos:</b> ditetap ke "localhost" oleh pemasang <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> ditetap kepada "root" oleh pemasang <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> pilihan awalan yang akan digunakan untuk semua nama-nama jadual';
$string['databasecreationsettingssub2'] = '<b> Jenis: </b> ditetapkan ke "mysqli" oleh pemasang <br />
 <b> Hos: </b> ditetapkan ke "localhost" oleh pemasang <br />
 <b>Nama: </b> nama pangkalan data, contohnya Moodle <br />
 <b> Pengguna: </b> ditetapkan ke "root" oleh pemasang <br />
 <b> Kata laluan: </b> kata laluan pangkalan data anda <br />
 <b> Awalan Jadual: </b> awalan pilihan untuk digunakan untuk semua nama-nama jadual';
$string['databasehead'] = 'Penetapan pangkalan data';
$string['databasehost'] = 'Hos pangkalan data';
$string['databasename'] = 'Nama pangkalan data';
$string['databasepass'] = 'Kata laluan pangkalan data';
$string['databasesettings'] = 'Sekarang anda perlu mengkonfigurasi pangkalan data di mana kebanyakan data Moodle akan disimpan. Pangkalan data ini harus sudah dibuat dan nama pengguna dan kata laluan diciptakan untuk mengaksesnya. <br />
<br /><br />
<b>Jenis:</b> mysql atau postgres7 <br /> <b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br /> <b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> pilihan awalan yang akan digunakan untuk semua nama-nama jadual';
$string['databasesettingshead'] = 'Sekarang, anda perlu mengkonfigurasi pangkalan data di mana kebanyakan data Moodle akan disimpan. Pangkalan data ini harus sudah dibuat dan nama pengguna dan kata laluan diciptakan untuk mengaksesnya.';
$string['databasesettingssub'] = '<b>Jenis:</b> mysql atau postgres7 <br /> <b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> pilihan awalan yang akan digunakan untuk semua nama jadual';
$string['databasesettingssub_mssql'] = '<b>Jenis:</b> SQL*Server (bukan UTF-8) <strong  class="errormsg"><b>Eksperimen! (bukan untuk kegunaan dalam pengeluaran)</b></strong> <br />
<b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (wajib)';
$string['databasesettingssub_mssql_n'] = '<b>Jenis:</b> SQL*Server (UTF-8 dihidupkan) <br />
<b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (wajib)';
$string['databasesettingssub_mysql'] = '<b>Jenis:</b> MySQL <br />
<b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (pilihan)';
$string['databasesettingssub_mysqli'] = '<b>Jenis:</b> Peningkatan MySQL <br /> <b>Hos:</b> localhost misalnya atau db.isp.com <br /> <b>Nama:</b> nama database, misalnya moodle <br /> <b>Pengguna:</b> username database anda <br /> <b>Password:</b> password database anda <br /> <b>Jadual Prefix:</b> prefix digunakan untuk semua nama jadual (pilihan)';
$string['databasesettingssub_oci8po'] = '<b>Jenis:</b> Oracle <br />
<b>Hos:</b> tidak digunakan, harus dibiarkan kosong <br />
<b>Nama:</b> nama diberikan untuk sambungan tnsnames.ora <br /> <b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (wajib, 2cc. maks)';
$string['databasesettingssub_odbc_mssql'] = '<b>Jenis:</b> SQL*Server (melalui ODBC) <strong  class="errormsg"><b>Eksperimen! (bukan untuk kegunaan dalam pengeluaran)</b></strong> <br />
<b>Hos:</b> nama diberikan dari DSN di ODBC control panel <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (wajib)';
$string['databasesettingssub_postgres7'] = '<b>Jenis:</b> PostgreSQL <br />
<b>Hos:</b> localhost misalnya atau db.isp.com <br />
<b>Nama:</b> nama pangkalan data, misalnya moodle <br />
<b>Pengguna:</b> nama pengguna pangkalan data anda <br />
<b>Kata laluan:</b> kata laluan pangkalan data anda <br />
<b>Awalan Jadual:</b> awalan digunakan untuk semua nama jadual (wajib)';
$string['databasesettingswillbecreated'] = '<b>Nota:</b> Pemasang akan cuba untuk mencipta pangkalan data secara automatik jika tidak wujud.';
$string['databasesocket'] = 'Soket Unix';
$string['databasetypehead'] = 'Pilih pemacu pangkalan data';
$string['databasetypesub'] = 'Moodle menyokong beberapa jenis pelayan pangkalan data. Sila hubungi pentadbir pelayan jika anda tidak tahu jenis mana untuk digunakan.';
$string['databaseuser'] = 'Pengguna pangkalan data';
$string['dataroot'] = 'Direktori data';
$string['datarooterror'] = '\'Direktori data\' yang anda tetapkan tidak dapat ditemui atau dicipta. Anda perlu betulkan laluan atau buatkan direktori tersebut secara manual.';
$string['datarootpublicerror'] = '\'Direktori data\' yang anda tetapkan boleh diakses secara langsung melalui web, anda perlu menggunakan direktori yang berbeza.';
$string['dbconnectionerror'] = 'Kami tidak boleh menyambung ke pangkalan data yang anda berikan. Sila semak tetapan pangkalan data anda.';
$string['dbcreationerror'] = 'Ralat penciptaan pangkalan data. Tidak dapat mewujudkan pangkalan data menggunakan nama diberi dengan tetapan yang disediakan';
$string['dbhost'] = 'Hos pelayan';
$string['dbpass'] = 'Kata laluan';
$string['dbprefix'] = 'Awalan jadual';
$string['dbtype'] = 'Jenis';
$string['dbwrongencoding'] = 'Database yang dipilih sedang berjalan di bawah salah satu pengekodan bukan yang disyorkan ({$a}). Sebaliknya, adalah lebih baik menggunakan pangkalan data dikodkan Unicode (UTF-8). Bagaimanapun, anda boleh mengabaikan ujian ini dengan memilih "Langkau Ujian Pengekodan DB" semak di bawah ini, tetapi anda boleh mengalami masalah di masa akan datang.';
$string['dbwronghostserver'] = 'Anda harus mengikuti peraturan "Hos" seperti yang dijelaskan di atas.';
$string['dbwrongnlslang'] = 'Pembolehubah persekitaran NLS_LANG dalam pelayan web anda perlu menggunakan charset AL32UTF8. Lihat dokumentasi PHP tentang cara mengkonfigurasikan OCI8 dengan betul.';
$string['dbwrongprefix'] = 'Anda harus mengikuti peraturan "Awalan Jadual" seperti yang dijelaskan di atas.';
$string['directorysettings'] = '<p> Sila sahkan lokasi pemasangan Moodle ini. </p>

<p> <b>Alamat Web:</b> Nyatakan alamat web penuh mana Moodle akan dicapai. Jika laman web anda boleh diakses melalui beberapa URL, pilih yang paling biasa pelajar akan gunakan. Jangan masukkan palang belakang. </p>

<p> <b>Direktori Moodle:</b> Tentukan laluan lengkap ke direktori pemasangan ini. Pastikan huruf besar/kecil adalah betul. </p>

<p> <b>Direktori Data:</b> Anda memerlukan tempat di mana Moodle boleh menyimpan fail yang dimuat naik. Direktori ini harus boleh dibaca DAN ditulis oleh pengguna pelayan web (biasanya \'nobody\' atau \'apache\'), tetapi ia seharusnya tidak boleh diakses secara langsung melalui laman web. </p>';
$string['directorysettingshead'] = 'Sila sahkan lokasi pemasangan Moodle ini';
$string['directorysettingssub'] = '<p> <b>Alamat Web:</b> Nyatakan alamat web penuh mana Moodle akan dicapai. Jika laman web anda boleh diakses melalui beberapa URL, pilih yang paling biasa pelajar akan gunakan. Jangan masukkan palang belakang. </p>

<p> <b>Direktori Moodle:</b> Tentukan laluan lengkap ke direktori pemasangan ini. Pastikan huruf besar/kecil adalah betul. </p>

<p> <b>Direktori Data:</b> Anda memerlukan tempat di mana Moodle boleh menyimpan fail yang dimuat naik. Direktori ini harus boleh dibaca DAN DITULIS oleh pengguna pelayan web (biasanya \'nobody\' atau \'apache\'), tetapi ia seharusnya tidak boleh diakses secara langsung melalui laman web. </p>';
$string['dirroot'] = 'Direktori Moodle';
$string['dirrooterror'] = 'Tetapan \'Direktori Moodle\' seolah-olah tidak betul - tidak dapat mencari pemasangan Moodle sana. Nilai di bawah ini telah ditetapkan semula.';
$string['download'] = 'Muat turun';
$string['downloadlanguagebutton'] = 'Muat turun pek bahasa "{$a}"';
$string['downloadlanguagehead'] = 'Muat turun pek bahasa';
$string['downloadlanguagenotneeded'] = 'Anda boleh meneruskan proses pemasangan dengan menggunakan pek bahasa lalai, "{$a}".';
$string['downloadlanguagesub'] = 'Anda kini mempunyai pilihan untuk memuat turun pek bahasa dan meneruskan proses pemasangan dalam bahasa ini. <br /><br /> Jika anda tidak dapat memuat turun pek bahasa, proses pemasangan akan diteruskan dalam Bahasa Inggeris. (Setelah proses pemasangan selesai, anda masih boleh memuat turun dan memasang pek bahasa tambahan.)';
$string['doyouagree'] = 'Adakah anda bersetuju? (ya/tidak):';
$string['environmenthead'] = 'Memeriksa persekitaran anda ...';
$string['environmentsub'] = 'Kami memeriksa jika pelbagai komponen sistem anda memenuhi keperluan sistem';
$string['environmentsub2'] = 'Setiap pelepasan Moodle mempunyai keperluan minimum versi PHP dan beberapa sambungan mandatori PHP. Persekitaran penuh disemak sebelum setiap pemasangan dan naik taraf. Sila hubungi pentadbir pelayan jika anda tidak tahu bagaimana untuk memasang versi baru atau membolehkan sambungan PHP.';
$string['errorsinenvironment'] = 'Semakan persekitaran gagal!';
$string['fail'] = 'Gagal';
$string['fileuploads'] = 'Muat-naik fail';
$string['fileuploadserror'] = 'Ini harus diaktifkan';
$string['fileuploadshelp'] = '<p>Muat-naik fail nampaknya dilumpuhkan pada pelayan anda. </p>

<p>Moodle masih boleh dipasang, tetapi tanpa kebolehan ini, anda tidak akan dapat memuat-naik fail kursus atau gambar profil pengguna baru. </p>

<p>Untuk mengaktifkan muat-naik fail, anda (atau pentadbir sistem anda) perlu menyunting fail php.ini utama pada sistem anda dan menukar tetapan untuk <b>file_uploads</b> kepada \'1 \'. </p>';
$string['gdversion'] = 'Versi GD';
$string['gdversionerror'] = 'GD library perlu ada untuk memproses dan membuat gambar';
$string['gdversionhelp'] = '<p> Pelayan anda nampaknya tidak dipasang dengan GD. </p>

<p> GD adalah library yang diperlukan oleh PHP untuk membolehkan Moodle untuk memproses gambar (seperti profil ikon pengguna) dan untuk membuat gambar yang baru (seperti grafik log). Moodle masih boleh berjalan tanpa GD - ciri ini hanya tidak akan disediakan untuk anda. </p>

<p> Untuk menambah GD kepada PHP di bawah Unix, kompil PHP dengan menggunakan parameter --with-gd. </p><p> Pada Windows anda biasanya boleh mengedit php.ini dan membuang ulasan baris rujukan php_gd2.dll. </p>';
$string['globalsquotes'] = 'Pengendalian tidak selamat globals';
$string['globalsquoteserror'] = 'Perbaiki tetapan PHP anda: matikan register_globals  dan/atau aktifkan magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p> Kombinasi Magic Quotes GPC tidak diaktifkan dan pada masa yang sama register globals diaktifkan adalah tidak digalakkan. </p>

<p> Tetapan yang disarankan adalah <b>magic_quotes_gpc = On</b> dan <b>register_globals = Off</b> di php.ini anda </p>

<p> Jika anda tidak mempunyai akses kepada php.ini, anda mungkin boleh meletakkan baris berikut dalam fail yang dipanggil .htaccess dalam direktori Moodle anda: </p><blockquote><div> php_value magic_quotes_gpc On </div></blockquote><blockquote><div> php_value register_globals Off </div></blockquote>';
$string['inputdatadirectory'] = 'Direktori data:';
$string['inputwebadress'] = 'Alamat web:';
$string['inputwebdirectory'] = 'Direktori Moodle:';
$string['installation'] = 'Pemasangan';
$string['langdownloaderror'] = 'Malangnya fail bahasa "{$a}" tidak dapat dimuat turun. Proses pemasangan akan diteruskan dalam Bahasa Inggeris.';
$string['langdownloadok'] = 'Fail bahasa "{$a}" telah berjaya dipasang. Proses pemasangan akan diteruskan dalam bahasa ini.';
$string['magicquotesruntime'] = 'Magic quotes masa jalanan';
$string['magicquotesruntimeerror'] = 'Ini harus tidak aktif';
$string['magicquotesruntimehelp'] = '<p> Magic quotes runtime harus dimatikan untuk Moodle berfungsi dengan baik. </p>

<p> Biasanya tidak aktif secara default ... lihat tetapan <b>magic_quotes_runtime</b> dalam fail php.ini anda. </p>

<p> Jika anda tidak mempunyai akses kepada php.ini, anda mungkin boleh meletakkan baris berikut dalam fail dipanggil .htaccess dalam direktori Moodle anda: </p><blockquote><div> php_value magic_quotes_runtime Off </div></blockquote>';
$string['memorylimit'] = 'Had memori';
$string['memorylimiterror'] = 'Had memori PHP ditetapkan sangat rendah ... anda mungkin menghadapi masalah kemudian.';
$string['memorylimithelp'] = '<p> Had memori PHP untuk pelayan anda  ditetapkan kepada {$a}. </p>

<p> Hal ini akan menyebabkan Moodle untuk mendapat masalah memori di kemudian hari, terutama jika anda mempunyai banyak modul yang diaktifkan dan/atau ramai pengguna. </p>

<p> Kami menyarankan anda mengkonfigurasikan PHP dengan had yang lebih tinggi jika memungkinkan, seperti 40M. Ada beberapa cara untuk melakukan hal ini yang anda boleh cuba: </p>
<ol>
<li> Jika anda mampu, kompil semula PHP dengan <i>--enable-memory-limit.</i> Hal ini akan membolehkan Moodle untuk menetapkan batas memori itu sendiri. </li>
<li> Jika anda mempunyai akses ke fail php.ini, anda boleh menukar setting <b>memory_limit</b> di sana untuk sesuatu seperti 40M. Jika anda tidak mempunyai akses anda mungkin boleh meminta pentadbir anda untuk melakukan ini untuk anda. </li>
<li> Pada beberapa server PHP anda boleh mencipta baris fail .htaccess di direktori Moodle mengandungi ini: <blockquote><div> php_value memory_limit 40M </div></blockquote><p> Namun, pada beberapa server ini akan mencegah <b>semua</b> laman PHP dari berjalan (anda akan melihat ralat ketika anda melihat halaman), sehingga anda hapuskan file .htaccess. </p></li></ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan betul dengan sambungan MSSQL sehingga dapat berkomunikasi dengan SQL*Server. Sila semak fail php.ini anda atau kompil semula PHP.';
$string['mssql_n'] = 'SQL*Server dengan sokongan UTF-8 (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan untuk sambungan MySQL dengan betul, supaya ia dapat berkomunikasi dengan MySQL. Sila semak fail php.ini anda atau kompil semula PHP.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan betul dengan sambungan MySQLi sehingga dapat berkomunikasi dengan MySQL. Sila semak fail php.ini anda atau kompil semula PHP. MySQLi sambungan tidak sedia bagi PHP 4.';
$string['nativemssql'] = 'SQL*Server FreeTDS (native/mssql)';
$string['nativemssqlhelp'] = 'Sekarang anda perlu menetapkan pangkalan data di mana data Moodle akan disimpan. Pangkalan data ini mesti telah pun diwujudkan serta nama pengguna dan kata laluan untuk mengaksesnya. Awalan jadual adalah wajib.';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'Sekarang anda perlu menetapkan pangkalan data di mana data Moodle akan disimpan. Pangkalan data boleh diwujudkan jika pengguna pangkalan data mempunyai kebenaran yang diperlukan, nama pengguna dan kata laluan mesti sudah diwujudkan. Awalan jadual adalah pilihan.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Sekarang anda perlu menetapkan pangkalan data di mana data Moodle akan disimpan. Pangkalan data ini mesti telah pun diwujudkan serta nama pengguna dan kata laluan untuk mengaksesnya. Awalan jadual adalah wajib.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'Sekarang anda perlu menetapkan pangkalan data di mana data Moodle akan disimpan. Pangkalan data ini mesti telah pun diwujudkan serta nama pengguna dan kata laluan untuk mengaksesnya. Awalan jadual adalah wajib.';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Sekarang anda perlu menetapkan pangkalan data di mana data Moodle akan disimpan. Pangkalan data ini mesti telah pun diwujudkan serta nama pengguna dan kata laluan untuk mengaksesnya. Awalan jadual adalah wajib.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan betul dengan sambungan OCI8 sehingga dapat berkomunikasi dengan Oracle. Sila semak fail php.ini anda atau kompil semula PHP.';
$string['odbcextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan betul dengan sambungan ODBC sehingga dapat berkomunikasi dengan SQL*Server. Sila semak fail php.ini anda atau kompil semula PHP.';
$string['odbc_mssql'] = 'SQL*Server di ODBC (odbc_mssql)';
$string['pass'] = 'Lulus';
$string['paths'] = 'Laluan';
$string['pathserrcreatedataroot'] = 'Direktori data ({$a->dataroot}) tidak boleh diwujudkan oleh pemasang.';
$string['pathshead'] = 'Sahkan laluan';
$string['pathsrodataroot'] = 'Direktori dataroot tidak dapat ditulis.';
$string['pathsroparentdataroot'] = 'Direktori induk ({$a->parent}) tidak boleh tulis. Direktori data ({$a->dataroot}) tidak boleh diwujudkan oleh pemasang.';
$string['pathssubadmindir'] = 'Beberapa webhos menggunakan /admin sebagai URL khas untuk anda akses panel kawalan atau sesuatu yang lain. Malangnya, ini bertentangan dengan lokasi standard untuk halaman pentadbiran Moodle. Anda boleh memperbaiki ini dengan menamakan semula direktori admin dalam pemasangan anda, dan meletakkan nama baru di sini. Sebagai contoh: <br /> <br /> <b> moodleadmin </ b> <br /> <br />
Ini akan memulihkan pautan admin dalam Moodle.';
$string['pathssubdataroot'] = 'Anda perlukan lokasi di mana Moodle boleh menyimpan fail yang dimuat naik. Direktori ini sepatutnya boleh dibaca DAN DITULIS oleh pengguna web server (biasanya \'nobody\' atau \'apache\'), tetapi ia mestilah tidak boleh diakses secara langsung melalui laman web. Pemasang akan cuba untuk wujudkannya jika belum ada.';
$string['pathssubdirroot'] = 'Laluan penuh direktori untuk pemasangan Moodle.';
$string['pathssubwwwroot'] = 'Alamat penuh web di mana Moodle akan dicapai. Ia tidak mungkin untuk mengakses Moodle menggunakan berbilang alamat. Jika laman anda mempunyai pelbagai alamat awam, anda mesti menubuhkan pelencongan kekal kepada yang lain kecuali yang satu ini. Jika laman web anda boleh diakses kedua-dua Intranet dan Internet, gunakan alamat awam di sini dan tubuhkan DNS supaya pengguna Intranet boleh gunakan alamat awam juga. Jika alamat sekarang tidak betul, sila ubah URL di pelayar anda untuk memulakan semula pemasangan dengan nilai yang berbeza.';
$string['pathsunsecuredataroot'] = 'Lokasi dataroot tidak selamat';
$string['pathswrongadmindir'] = 'Direktori admin tidak wujud';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan betul dengan sambungan PGSQL sehingga dapat berkomunikasi dengan PostgreSQL. Sila semak fail php.ini anda atau kompil semula PHP.';
$string['phpextension'] = 'Sambungan PHP {$a}';
$string['phpversion'] = 'Versi PHP';
$string['phpversionhelp'] = '<p> Moodle memerlukan versi PHP minimal 4.3.0 atau 5.1.0 (5.0.x memiliki sejumlah masalah yang diketahui). </p>
<p> Anda sedang menjalankan versi {$a} </p>
<p> Anda harus upgrade PHP atau berpindah ke host dengan versi terbaru PHP! <br /> (Dalam kes 5.0.x Anda juga boleh turun taraf ke versi 4.4.x) </p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Untuk maklumat mengenai versi Moodle ini, sila lihat nota pelepasan pada {$a}';
$string['safemode'] = 'Safe mode';
$string['safemodeerror'] = 'Moodle mungkin menghadapi masalah dengan safe mode diaktifkan';
$string['safemodehelp'] = '<p> Moodle boleh memiliki pelbagai masalah dengan safe mode diaktifkan, sekurang-kurangnya ia mungkin tidak akan dibenarkan untuk membuat fail baru. </p>

<p> Safe Mode biasanya hanya diaktifkan oleh paranoid web hos awam, jadi anda mungkin perlu mencari syarikat hosting web baru untuk laman Moodle anda. </p>

<p> Anda boleh cuba meneruskan pemasangan jika anda suka, tetapi jangkakan beberapa masalah di kemudian hari. </p>';
$string['sessionautostart'] = 'Sesi auto permulaan';
$string['sessionautostarterror'] = 'Ini harus tidak aktif';
$string['sessionautostarthelp'] = '<p> Moodle memerlukan sokongan sesi dan tidak akan berfungsi tanpanya. </p>

<p> Sesi boleh dihidupkan dalam fail php.ini ... cari parameter session.auto_start. </p>';
$string['skipdbencodingtest'] = 'Langkau ujian pengekodan DB';
$string['sqliteextensionisnotpresentinphp'] = 'PHP tidak telah dikonfigurasikan dengan sambungan SQLite. Sila periksa fail php.ini anda atau kompil semula PHP.';
$string['upgradingqtypeplugin'] = 'Soalan menaik taraf / jenis plugin';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Anda melihat halaman ini kerana anda telah berjaya memasang dan melancarkan pakej <strong>{$a->packname} {$a->packversion}</strong> di komputer anda. Tahniah!';
$string['welcomep30'] = 'Keluaran ini <strong>{$a->installername}</strong> termasuk aplikasi untuk mencipta sebuah persekitaran di mana <strong>Moodle</strong> akan beroperasi, iaitu:';
$string['welcomep40'] = 'Pakej ini juga termasuk <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Penggunaan semua aplikasi di dalam pakej ini dikawal oleh lesen masing-masing. Pakej lengkap <strong>{$a->installername}</strong> adalah <a href="http://www.opensource.org/docs/definition_plain.html">sumber terbuka</a> dan diedarkan di bawah lesen <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Laman-laman berikut akan membawa anda melalui beberapa langkah-langkah mudah diikuti untuk mengkonfigurasi dan menetapkan <strong>Moodle</strong> pada komputer anda. Anda mungkin menerima tetapan lalai atau, dengan pilihan, meminda untuk disesuaikan dengan keperluan anda.';
$string['welcomep70'] = 'Klik butang "Seterusnya" di bawah untuk meneruskan penubuhan <strong>Moodle</strong>.';
$string['wwwroot'] = 'Alamat Web';
$string['wwwrooterror'] = '\'Alamat Web\' nampaknya tidak sah - pemasangan Moodle ini tidak berada di sana. Nilai di bawah ini sudah ditetapkan semula.';
