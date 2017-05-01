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
 * Strings for component 'admin', language 'ms', branch 'MOODLE_20_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Akses ditolak';
$string['accounts'] = 'Akaun';
$string['additionalhtml'] = 'Tambahan HTML';
$string['additionalhtml_desc'] = 'Tetapan ini membolehkan anda menentukan HTML yang ingin ditambah ke setiap halaman. Anda boleh tetapkan HTML yang akan ditambah dengan tag HEAD bagi laman, selepas sahaja tag BODY dibuka, atau sebelum tag BODY ditutup. <br /> Dengan ini anda telah menambah pengepala atau pengaki tersuai di setiap halaman, atau menambah sokongan bagi perkhidmatan seperti Google Analytics dengan mudah dan tidak bersandar kepada tema pilihan anda.';
$string['additionalhtmlfooter'] = 'Sebelum BODY ditutup';
$string['additionalhtmlfooter_desc'] = 'Kandungan di sini akan ditambah di setiap halaman sebelum tag BODY ditutup.';
$string['additionalhtmlhead'] = 'Dalam lingkungan HEAD';
$string['additionalhtmlhead_desc'] = 'Kandungan di sini akan dimasukkan ke bahagian bawah tag HEAD setiap halaman.';
$string['additionalhtml_heading'] = 'Tambahan HTML yang akan dimasukkan ke setiap halaman.';
$string['additionalhtmltopofbody'] = 'Apabila BODY dibuka';
$string['additionalhtmltopofbody_desc'] = 'Kandungan di sini akan ditambah di setiap halaman selepas sahaja tag BODY dibuka.';
$string['adminseesall'] = 'Admin nampak semua';
$string['adminseesallevents'] = 'Pentadbir nampak semua acara';
$string['adminseesownevents'] = 'Pentadbir sama seperti pengguna lain';
$string['advancedfeatures'] = 'Ciri-ciri lanjutan';
$string['allcountrycodes'] = 'Semua kod negara';
$string['allowbeforeblock'] = 'Senarai dibenarkan akan diproses terlebih dahulu';
$string['allowbeforeblockdesc'] = 'Secara lalai, entri dalam senarai IP disekat dipadankan terlebih dahulu. Jika pilihan ini diaktifkan, entri dalam senarai IP yang dibenarkan diproses sebelum senarai disekat.';
$string['allowblockstodock'] = 'Benarkan blok menggunakan dok';
$string['allowcategorythemes'] = 'Benarkan tema kategori';
$string['allowcoursethemes'] = 'Benarkan tema kursus';
$string['allowdeletes'] = 'Benarkan memadam';
$string['allowediplist'] = 'Senarai IP dibenarkan';
$string['allowemailaddresses'] = 'Domain e-mail dibenarkan';
$string['allowobjectembed'] = 'Benarkan tag EMBED dan OBJECT';
$string['allowrenames'] = 'Benarkan menamakan semula';
$string['allowthemechangeonurl'] = 'Benarkan perubahan tema dalam URL';
$string['allowuserblockhiding'] = 'Benarkan pengguna untuk sembunyikan blok';
$string['allowuserswitchrolestheycantassign'] = 'Benarkan pengguna tanpa keupayaan peranan untuk menukar peranan';
$string['allowuserthemes'] = 'Benarkan tema pengguna';
$string['antivirus'] = 'Anti-Virus';
$string['appearance'] = 'Penampilan';
$string['aspellpath'] = 'Laluan ke aspell';
$string['authentication'] = 'Pengesahan';
$string['authsettings'] = 'Urus pengesahan';
$string['autolang'] = 'Autokesan bahasa';
$string['autologinguests'] = 'Auto-login tetamu';
$string['availablelicenses'] = 'Lesen tersedia';
$string['availableto'] = 'Tersedia untuk';
$string['backgroundcolour'] = 'Warna telus';
$string['backups'] = 'Sandaran';
$string['badwordsconfig'] = 'Masukkan senarai perkataan-perkataan buruk dipisahkan dengan koma.';
$string['badwordsdefault'] = 'Jika senarai tersuai kosong, senarai lalai dari pek bahasa yang akan digunakan.';
$string['badwordslist'] = 'Senarai tersuai perkataan-perkataan buruk';
$string['blockediplist'] = 'Senarai IP disekat';
$string['blockinstances'] = 'Tika';
$string['blockmultiple'] = 'Berbilang';
$string['blockprotect'] = 'Lindungi dari dipadam';
$string['blockprotect_help'] = 'Contoh-contoh blok yang terpilih akan dilindungi dari penghapusan dari konteks di seluruh tapak. Ini adalah terutamanya digunakan untuk melindungi navigasi dan blok tetapan yang boleh sangat sukar untuk mendapatkan kembali jika tidak sengaja dipadam.';
$string['blocksettings'] = 'Urus blok';
$string['blockunprotect'] = 'Nyah lindungan';
$string['bloglevel'] = 'Keterlihatan blog';
$string['bloglevelupgrade'] = 'Peningkatan keterlihatan blog';
$string['bloglevelupgradedescription'] = '<p>Laman ini telah dinaik taraf kepada Moodle 2,0.</p>
<p>Ketampakan blog telah dipermudahkan di v2.0, tetapi laman web anda masih menggunakan ketampakan lama.</p>
<p>Untuk mengekalkan keterlihatan entri blog berasaskan kursus atau kumpulan di laman anda, anda perlu menjalankan skrip upgrade yang berikut, yang akan mewujudkan "blog" khas jenis forum di setiap kursus yang pengguna berdaftar telah menyiarkan entri blog, dan akan menyalin entri blog tersebut ke dalam forum khas ini. </p>
<p>Blog akan dimatikan sepenuhnya di peringkat tapak. Tiada entri blog akan dipadam dalam proses ini. </p>
<p>Anda boleh jalankan skrip dengan melawat <a href="{$a->fixurl} ">halaman peningkatan aras blog</ a>.</ p>';
$string['bloglevelupgradeinfo'] = 'Keterlihatan blog dipermudahkan di v2.0, tetapi laman web anda masih menggunakan salah satu jenis keterlihatan lama. Untuk mengekalkan keterlihatan entri blog berasaskan kursus atau kumpulan di laman anda, skrip upgrade berikut akan mewujudkan "blog" khas jenis forum dalam setiap kursus yang pengguna berdaftar telah menyiarkan entri blog, dan akan menyalin entri blog tersebut ke dalam forum khas ini. Blog akan dimatikan sepenuhnya di peringkat tapak. Tiada entri blog akan dipadam dalam proses ini.';
$string['bloglevelupgradenotice'] = 'Laman web anda menggunakan keterlihatan blog tetapan yang lama, <a href="bloglevelupgrade.php">naik taraf keterlihatan blog</a> adalah disyorkan.';
$string['bloglevelupgradeprogress'] = 'Kemajuan penukaran: {$a->userscount} pengguna disemak, {$a->blogcount} entri ditukar.';
$string['bookmarkadded'] = 'Penanda ditambah';
$string['bookmarkalreadyexists'] = 'Anda telah menanda halaman ini';
$string['bookmarkdeleted'] = 'Penanda dipadam';
$string['bookmarkthispage'] = 'Tanda halaman ini';
$string['cachejs'] = 'Cache Javascript';
$string['cachejs_help'] = 'Caching Javascript dan mampatan sangat meningkatkan prestasi pemuatan halaman. ia adalah sangat disyorkan untuk tapak pengeluaran. Pemaju mungkin akan mahu melumpuhkan ciri ini.';
$string['cachetext'] = 'Masa hayat cache teks';
$string['cachetype'] = 'Jenis cache';
$string['calendarexportsalt'] = 'Salt mengeksport kalendar';
$string['calendarsettings'] = 'Kalendar';
$string['calendar_weekend'] = 'Hari hujung minggu';
$string['cannotdeletemodfilter'] = 'Anda tidak boleh memadam \'{$a->filter}\' kerana ia adalah sebahagian dari modul \'{$a->module}\'.';
$string['cfgwwwrootslashwarning'] = 'Anda tersalah takrif $CFG->wwwroot dalam fail config.php. Anda telah masukkan aksara \'/\' pada akhir rentetan. Sila keluarkan, atau anda akan mengalami pepijat aneh seperti <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</ a>.';
$string['cfgwwwrootwarning'] = 'Anda tersalah takrif $CFG->wwwroot dalam fail config.php. Anda telah masukkan aksara \'/\' pada akhir rentetan. Sila keluarkan, atau anda akan mengalami pepijat aneh seperti <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</ a>.';
$string['change'] = 'ubah';
$string['changesitelang'] = 'Ubah bahasa laman';
$string['checkboxno'] = 'Tidak';
$string['checkboxyes'] = 'Ya';
$string['choosefiletoedit'] = 'Pilih fail untuk edit';
$string['clamfailureonupload'] = 'Pada kegagalan clam AV';
$string['cleanup'] = 'Pembersihan';
$string['clianswerno'] = 't';
$string['cliansweryes'] = 'y';
$string['cliincorrectvalueerror'] = 'Ralat, nilai tidak betul "{$a->value}" untuk "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Nilai yang salah, sila cuba lagi';
$string['clistatusdisabled'] = 'Status: dimatikan';
$string['clistatusenabled'] = 'Status: dihidupkan';
$string['clitypevalue'] = 'taip nilai';
$string['clitypevaluedefault'] = 'taip nilai, tekan Enter untuk gunakan nilai lalai ({$a})';
$string['cliunknowoption'] = 'Pilihan yang tidak diiktiraf:
  {$a}
Sila gunakan pilihan --help';
$string['cliupgradefinished'] = 'Kemaskini command line siap dengan jayanya.';
$string['cliyesnoprompt'] = 'tapi y (ya) atau t (tidak)';
$string['commentsperpage'] = 'Komen dipaparkan per halaman';
$string['commonfiltersettings'] = 'Tetapan tapisan umum';
$string['commonsettings'] = 'Tetapan Umum';
$string['componentinstalled'] = 'Komponen dipasang';
$string['computedfromlogs'] = 'Dikira dari log sejak {$a}.';
$string['condifmodeditdefaults'] = 'Nilai-nilai yang anda tetapkan di sini menentukan nilai-nilai lalai yang digunakan dalam tetapan aktiviti membentuk apabila anda membuat aktiviti baru. Anda juga boleh menatarajah tetapan aktiviti yang dianggap maju.';
$string['confeditorhidebuttons'] = 'Pilih butang yang harus disembunyikan dalam editor HTML.';
$string['configallcountrycodes'] = 'Ini ialah senarai negara-negara yang boleh dipilih di pelbagai tempat, contohnya di dalam profil pengguna. Jika kosong (lalai) senarai countries.php dalam pek bahasa Inggeris yang standard digunakan. Itu adalah senarai dari ISO 3166-1. Jika tidak, anda boleh menentukan senarai koma kod, contohnya \'GB,FR,ES\'. Jika anda menambah kod baru bukan standard di sini, anda akan perlu menambah mereka ke countries.php dalam \'en\' dan pek bahasa anda.';
$string['configallowassign'] = 'Anda boleh membenarkan orang-orang yang mempunyai peranan di sebelah kiri untuk menetapkan beberapa peranan lajur kepada orang lain';
$string['configallowblockstodock'] = 'Jika dihidupkan dan disokong oleh tema yang dipilih pengguna boleh memilih untuk menggerakkan blok ke dok khas.';
$string['configallowcategorythemes'] = 'Jika anda mengaktifkan ini, maka tema boleh ditetapkan pada tahap kategori. Ini akan melibatkan semua kategori anak dan kursus melainkan jika mereka telah secara khusus menetapkan tema mereka sendiri. AMARAN: Mengaktifkan tema kategori boleh menjejaskan prestasi pelayan.';
$string['configallowcoursethemes'] = 'Jika anda mengaktifkan ini, maka kursus akan dibenarkan untuk menetapkan tema mereka sendiri. Tema kursus mengatasi semua pilihan tema lain (laman, pengguna, atau tema sesi)';
$string['configallowemailaddresses'] = 'Jika anda ingin menyekat semua alamat e-mel baru untuk domain tertentu, maka senaraikan di sini dipisahkan dengan ruang. Semua domain lain akan ditolak. Untuk membenarkan subdomain, tambah domain dengan \'.\' sebelumnya. contohnya <strong>ourcollege.edu.my .gov.my</strong>';
$string['configallowobjectembed'] = 'Sebagai langkah keselamatan sedia ada, pengguna biasa tidak dibenarkan untuk menerapkan multimedia (seperti Flash) di dalam teks yang menggunakan tags EMBED dan OBJECT dalam HTML mereka (walaupun ia masih boleh dilakukan dengan selamat menggunakan penapis mediaplugins). Jika anda ingin membenarkan tags ini maka aktifkan pilihan ini';
$string['configallowoverride'] = 'Anda boleh membenarkan orang yang mempunyai peranan di sebelah kiri untuk mengatasi beberapa peranan lajur';
$string['configallowoverride2'] = 'Pilih peranan yang boleh diatasi oleh peranan masing-masing dalam lajur kiri. <br /> Perhatikan bahawa tetapan ini hanya terpakai kepada pengguna yang mempunyai kebenaran sama ada keupayaan moodle/role:override atau moodle/role:safeoverride.';
$string['configallowswitch'] = 'Pilih peranan yang pengguna boleh beralih kepadanya, berdasarkan peranan yang mereka punyai. Di samping itu untuk masuk ke dalam jadual ini, pengguna juga mestilah mempunyai keupayaan moodle/role:switchroles untuk boleh beralih.<br/> Perhatikan bahawa ia hanya boleh beralih kepada peranan yang mempunyai keupayaan moodle/course:view, dan yang tidak mempunyai keupayaan moodle/site:doanything, jadi beberapa ruangan dalam jadual ini tidak aktif.';
$string['configallowthemechangeonurl'] = 'Jika diaktifkan, tema boleh ditukar dengan menambah theme={themename} kepada mana-mana URL Moodle.';
$string['configallowuserblockhiding'] = 'Adakah anda mahu membenarkan pengguna mereka menyembunyikan/menunjukkan blok sebelah di seluruh laman web ini? Fungsi ini menggunakan Javascript dan kuki untuk ingat keadaan setiap blok kolaps, dan hanya memberi kesan kepada pandangan sendiri pengguna.';
$string['configallowuserswitchrolestheycantassign'] = 'Secara lalai, moodle/role:assign diperlukan bagi pengguna untuk menukar peranan. Pengaktifan tetapan ini mengeluarkan keperluan ini, dan keputusan dalam peranan yang ada dalam "Peranan Tukar ke" dropdown menu ditentukan hanya oleh tetapan yang sama dalam jadual "Benarkan tugasan peranan". Ia adalah disyorkan bahawa tetapan dalam jadual "Benarkan tugasan peranan" tidak membenarkan pengguna untuk beralih kepada peranan dengan keupayaan yang lebih daripada peranan mereka yang sedia ada.';
$string['configallowuserthemes'] = 'Jika anda mengaktifkan ini, maka pengguna akan dibenarkan untuk menetapkan tema mereka sendiri. Tema pengguna mengatasi tema lokasi (tetapi tema kursus tidak)';
$string['configallusersaresitestudents'] = 'Bagi aktiviti-aktiviti di muka depan laman web, SEMUA pengguna harus dianggap sebagai pelajar? Jika anda menjawab "Ya", maka mana-mana akaun pengguna yang disahkan akan dibenarkan untuk mengambil bahagian sebagai pelajar dalam aktiviti-aktiviti. Jika anda menjawab "Tidak", maka hanya pengguna yang telah menjadi peserta dalam sekurang-kurangnya satu kursus akan dapat mengambil bahagian dalam aktiviti-aktiviti muka depan. Pentadbir sahaja dan khas yang diberikan guru boleh bertindak sebagai guru untuk aktiviti-aktiviti ini muka depan.';
$string['configauthenticationplugins'] = 'Sila pilih plugins pengesahan yang anda mahu menggunakan dan menguruskan mereka dalam perintah failthrough.';
$string['configautolang'] = 'Mengesan bahasa lalai dari tetapan penyemak imbas, jika tidak diaktifkan, nilai lalai laman akan digunakan';
$string['configautologinguests'] = 'Adakah pelawat log masuk sebagai tetamu secara automatik apabila memasuki kursus yang membenarkan akses tetamu?';
$string['configbloglevel'] = 'Tetapan ini membolehkan anda untuk menyekat tahap pengguna blog boleh dilihat di laman web ini. Perhatikan bahawa ia menyatakan konteks maksimum PENGUNJUNG bukannya penulis atau jenis kiriman blog. Blog juga boleh dilumpuhkan sepenuhnya jika anda tidak mahukannya sama sekali.';
$string['configcachetext'] = 'Untuk tapak yang lebih besar atau laman web yang menggunakan penapis teks, tetapan ini benar-benar boleh mempercepatkan perkara ini. Salinan teks akan disimpan dalam bentuk yang diproses mereka untuk masa yang dinyatakan di sini. Menetapan ini terlalu kecil sebenarnya boleh melambatkan beberapa perkara, tetapi menetapkan terlalu besar mungkin bermakna teks mengambil masa terlalu lama untuk disegarkan semula (sebagai contoh, dengan pautan baru).';
$string['configcachetype'] = 'Pilih jenis cache untuk Moodle gunakan. Ini hanya akan mengkonfigurasi cache, jangan lupa untuk mengaktifkan rcache supaya cache boleh digunakan. Gunakan <strong>hanya</strong> jika anda perlu untuk mengurangkan beban ke atas sistem pangkalan data - jika tidak Moodle sebenarnya akan berjalan lebih perlahan. Laman trafik-sederhana mungkin mendapat faedah menggunakan \'dalaman (internal)\'. Pelayan web tunggal dengan eAccelerator atau Turckmmcache yang dipasang <em>dengan membolehkan pilihan memori dikongsi</em> harus mencuba \'eaccelerator\'. Jika anda sediakan pelbagai-server, dan mempunyai satu atau lebih daemon memcached berjalan dan PHP-memcached extension, pilih \'memcached\' dan konfigurasi opsyen memached di bawah. <br /><strong> Nota:</strong> pastikan anda menguji prestasi di bawah beban dan menyelaras sewajarnya -- cache boleh membuatkan laman web anda menjadi lebih perlahan. Dalam situasi trafik-tinggi, eAccelerator dan memcached boleh menghasilkan lebih banyak faedah, tetapi mempunyai kos yang lebih tinggi dalam penggunaan CPU pada pelayan web.';
$string['configcalendarexportsalt'] = 'Teks rawak ini digunakan untuk meningkatkan keselamatan token pengesahan yang digunakan untuk mengeksport daripada kalendar. Sila ambil perhatian bahawa semua token semasa adalah tidak sah jika anda menukar garam hash ini.';
$string['configclamactlikevirus'] = 'Layan fail seperti virus';
$string['configclamdonothing'] = 'Layan fail sebagai OK';
$string['configclamfailureonupload'] = 'Jika anda telah mengkonfigurasi clam untuk mengimbas fail yang dimuat naik, tetapi ia dikonfigurasi dengan salah atau tidak berjalan atas sebab-sebab tertentu yang tidak diketahui, bagaimana harus ia berkelakuan? Jika anda memilih \'Layan fail seperti virus\', mereka akan berpindah ke kawasan kuarantin, atau dihapuskan. Jika anda memilih \'Layan fail sebagai OK\', fail-fail tersebut akan dipindahkan ke direktori destinasi seperti biasa. Apa pun, pentadbir akan dimaklumkan bahawa clam telah gagal. Jika anda memilih \'Layan fail seperti virus\' dan atas sebab-sebab tertentu clam tidak berjalan (biasanya kerana anda telah memasukkan pathtoclam yang tidak sah), SEMUA fail yang dimuat naik akan dipindahkan ke kawasan kuarantin yang diberikan, atau dipadam. Berhati-hati dengan tetapan ini.';
$string['configconvertformat'] = 'Jika <i>latex </i>, <i>dvips</i> dan <i>convert</ i> boleh didapati, imej-imej akan diwujudkan menggunakan format yang ditentukan. Jika tidak, mimeTeX akan digunakan dan akan mewujudkan imej GIF.';
$string['configcookiehttponly'] = 'Membolehkan ciri baru PHP 5.2.0 - pelayar diarahkan untuk menghantar kuki dengan permintaan http sebenar sahaja, kuki tidak boleh diakses oleh bahasa skrip. Ini tidak disokong dalam semua pelayar dan mungkin tidak serasi sepenuhnya dengan kod semasa. Ia membantu mencegah beberapa jenis serangan XSS.';
$string['configcookiesecure'] = 'Jika pelayan hanya menerima sambungan https, adalah disyorkan untuk membolehkan penghantaran kuki selamat. Jika diaktifkan sila pastikan bahawa pelayan web tidak menerima http:// atau ditubuhkan penghalaan semula kekal ke alamat https://. Apabila alamat <em>wwwroot</em> tidak dimulakan dengan https:// tetapan ini dimatikan secara automatik.';
$string['configcountry'] = 'Jika anda menetapkan negara di sini, maka negara ini akan dipilih secara lalai pada akaun pengguna baru. Untuk memaksa pengguna untuk memilih negara, biarkan ini nyahset.';
$string['configcourserequestnotify'] = 'Taip nama pengguna-pengguna yang akan diberitahu apabila ada kursus baru yang diminta.';
$string['configcourserequestnotify2'] = 'Pengguna-pengguna yang akan diberitahu apabila ada kursus diminta. Hanya pengguna yang boleh meluluskan permintaan kursus disenaraikan di sini.';
$string['configcoursesperpage'] = 'Masukkan bilangan kursus untuk paparan setiap halaman dalam senarai kursus.';
$string['configcronclionly'] = 'Jika ini ditetapkan, maka script cron hanya boleh dijalankan dari arahan baris dan bukannya melalui laman web. Ini mengatasi tetapan kata laluan cron di bawah.';
$string['configcronremotepassword'] = 'Ini bermakna bahawa skrip cron.php tidak boleh dijalankan dari pelayar web tanpa membekalkan kata laluan menggunakan bentuk URL berikut: <pre> http://site.example.com/admin/cron.php?password=opensesame </pre> Jika dibiarkan kosong, tiada kata laluan diperlukan.';
$string['configcurlcache'] = 'Time-to-live untuk cache CURL, dalam saat.';
$string['configcustommenuitems'] = 'Anda boleh mengkonfigurasi menu tersuai di sini untuk ditunjukkan oleh tema. Setiap baris terdiri daripada beberapa teks menu, pautan URL (pilihan) dan tajuk tooltip (pilihan), yang dipisahkan dengan aksara paip (|). Anda boleh menentukan struktur dengan menggunakan tanda hubung (-). Sebagai contoh:
<pre>
Komuniti Moodle|http://moodle.org
-Sokongan percuma Moodle|http://moodle.org/support
-Pembangunan Moodle|http://moodle.org/development
--Moodle Tracker|http://tracker.moodle.org
--Moodle Docs|http://docs.moodle.org
-Berita Moodle|http://moodle.org/news
Syarikat Moodle
-Moodle commercial hosting|http://moodle.com/hosting
-Moodle commercial support|http://moodle.com/support
</pre>';
$string['configdbsessions'] = 'Jika diaktifkan, tetapan ini akan menggunakan pangkalan data untuk menyimpan maklumat mengenai sesi semasa. Ini adalah amat berguna untuk laman web besar / sibuk atau tapak yang dibina di atas kelompok pelayan. Pada kebanyakkan tapak ini mungkin harus dibiarkan tidak aktif supaya cakera pelayan digunakan sebagai ganti. Ambil perhatian bahawa mengubah tetapan ini sekarang akan log keluar semua pengguna semasa (termasuk anda). Jika anda menggunakan MySQL, sila pastikan bahawa \'max_allowed_packet\' dalam my.cnf (atau my.ini) adalah sekurang-kurangnya 4M.';
$string['configdebug'] = 'Jika anda mengaktifkannya, maka error_reporting PHP akan ditingkatkan supaya lebih amaran dicetak. Ini hanya berguna untuk pemaju.';
$string['configdebugdisplay'] = 'Ditetapkan kepada aktif, laporan ralat akan keluar ke halaman HTML. Ini adalah praktikal, tetapi memecah XHTML, JS, kuki dan pengepala HTTP secara umum. Ditetapkan kepada tidak aktif, akan menghantar output kepada log pelayan anda, membolehkan debugging yang lebih baik. Tetapan PHP error_log mengawal log yang mana ia pergi.';
$string['configdebugpageinfo'] = 'Aktifkan jika anda ingin maklumat laman dicetak dalam nota kaki halaman.';
$string['configdebugsmtp'] = 'Membolehkan maklumat debug lantung semasa menghantar mesej-mesej e-mel kepada pelayan SMTP.';
$string['configdebugstringids'] = 'Pilihan ini direka untuk membantu penterjemah. Ia menunjukkan fail bahasa dan id rentetan di sebelah setiap rentetan yang output. (Penukaran tetapan ini hanya akan berkuat kuasa pada muatan halaman seterusnya.)';
$string['configdebugvalidators'] = 'Membolehkan jika anda mahu mempunyai pautan ke pelayan validator luar dalam nota kaki halaman. Anda mungkin perlu untuk mewujudkan pengguna baru dengan nama pengguna <i>w3cvalidator</em>, dan membolehkan akses pengguna tamu. Perubahan ini boleh membenarkan akses yang tidak dibenarkan kepada pelayan, jangan aktifkan di tapak pengeluaran!';
$string['configdefaultallowedmodules'] = 'Bagi kursus-kursus yang termasuk dalam kategori di atas, modul mana yang anda mahu benarkan secara lalai <b>apabila kursus ini dicipta</b>?';
$string['configdefaulthomepage'] = 'Ini menentukan halaman utama bagi pengguna yang telah log masuk';
$string['configdefaultrequestcategory'] = 'Kursus-kursus yang diminta oleh pengguna akan diletakkan dalam kategori ini secara automatik.';
$string['configdefaultrequestedcategory'] = 'Kategori lalai untuk diletakkan kursus yang diminta, jika diluluskan.';
$string['configdefaultuserroleid'] = 'Semua pengguna log masuk akan diberi keupayaan peranan yang anda tetapkan di sini, pada peringkat laman web, sebagai TAMBAHAN kepada peranan lain yang mungkin telah diberikan. Nilai lalai adalah peranan pengguna yang disahkan. Perhatikan bahawa ini tidak akan bercanggah dengan peranan lain yang mereka ada melainkan jika anda melarang keupayaannya, ia hanya untuk memastikan semua pengguna mempunyai keupayaan yang tidak boleh diserahhakkan di peringkat kursus (contohnya mengepos entri blog, mengurus kalendar sendiri, dan lain-lain).';
$string['configdeleteincompleteusers'] = 'Selepas tempoh ini, akaun lama yang tidak setup sepenuhnya akan dipadam.';
$string['configdeleteunconfirmed'] = 'Jika anda menggunakan pengesahan melalui e-mel, ini adalah tempoh masa bagi jawapan akan diterima dari pengguna. Selepas tempoh ini, akaun lama yang belum disahkan akan dipadam.';
$string['configdenyemailaddresses'] = 'Untuk menafikan alamat e-mel daripada domain tertentu senaraikannya di sini dengan cara yang sama. Semua domain yang lain akan diterima. Untuk menafikan subdomain tambah domain dengan \'.\' sebelumnya. contohnya <strong> yahoo.co.uk hotmail.com .live.com</strong>';
$string['configdisableuserimages'] = 'Matikan keupayaan untuk pengguna menukar imej profil.';
$string['configdisplayloginfailures'] = 'Ini akan memaparkan maklumat kepada pengguna yang dipilih mengenai kegagalan login sebelumnya.';
$string['configdocroot'] = 'Mentakrifkan laluan kepada Moodle Docs. Anda boleh menukar ini jika anda mempunyai dokumentasi dalam talian tersuai yang sendiri. Walau bagaimanapun, jika anda berbuat demikian pastikan bahawa laluan dalam dokumentasi anda mengikut format yang sama seperti http://docs.moodle.org.';
$string['configdoctonewwindow'] = 'Jika anda mengaktifkan ini, maka pautan ke Moodle Docs akan ditunjukkan dalam tetingkap baru.';
$string['configeditordictionary'] = 'Nilai ini akan digunakan jika aspell tidak mempunyai kamus untuk bahasa sendiri pengguna.';
$string['configeditorfontlist'] = 'Pilih fon yang akan muncul dalam senarai drop-down editor.';
$string['configemailchangeconfirmation'] = 'Memerlukan langkah e-mel pengesahan apabila pengguna menukar alamat e-mel di dalam profil mereka';
$string['configenableajax'] = 'Tetapan ini membenarkan anda untuk mengawal penggunaan AJAX (antara muka klien/pelayan yang maju menggunakan Javascript) di seluruh tapak. Dengan tetapan ini diaktifkan, pengguna masih boleh membuat pilihan dalam profil mereka, jika tidak AJAX tidak diaktifkan untuk semua pengguna.';
$string['configenablecalendarexport'] = 'Membolehkan mengeksport atau melanggan kalendar.';
$string['configenablecomments'] = 'Membolehkan ulasan';
$string['configenablecourserequests'] = 'Ini akan membenarkan mana-mana pengguna meminta kursus diwujudkan.';
$string['configenableglobalsearch'] = 'Tetapan ini membolehkan mencari teks global dalam sumber-sumber dan aktiviti, ia tidak serasi dengan PHP 4.';
$string['configenablegroupmembersonly'] = 'Jika diaktifkan, akses kepada aktiviti-aktiviti boleh dihadkan kepada ahli-ahli kumpulan sahaja. Ini boleh mengakibatkan beban pelayan yang meningkat. Di samping itu, kategori gradebook mesti ditubuhkan dengan cara tertentu untuk memastikan bahawa aktiviti-aktiviti adalah tersembunyi dari bukan ahli-ahli kumpulan.';
$string['configenablehtmlpurifier'] = 'Gunakan HTML Purifier dan bukannya KSES untuk membersihkan teks tidak dipercayai. HTML Purifier dimajukan dengan aktif dan dipercayai lebih selamat, tetapi ia lebih sumber intensif. Jangkakan perbezaan visual yang kecil dalam kod html yang dihasilkan. Sila ambil perhatian bahawa tag-tag embed dan object tidak boleh diaktifkan, tag-tag MathML dan lang lama adalah tidak disokong.';
$string['configenablerssfeeds'] = 'Suis ini akan membolehkan suapan RSS dari seluruh laman web ini. Untuk melihat apa-apa perubahan, anda juga perlu membolehkan suapan RSS dalam modul individu - pergi ke tetapan Modul di bawah Konfigurasi Pentadbir.';
$string['configenablerssfeedsdisabled'] = 'Ia tidak tersedia kerana suapan RSS dilumpuhkan dalam semua laman web ini. Untuk membolehkannya, pergi ke tetapan Pembolehubah di bawah Konfigurasi Pentadbir.';
$string['configenablerssfeedsdisabled2'] = 'Suapan RSS dilumpuhkan di peringkat pelayan. Anda perlu mengaktifkannya terlebih dahulu di Server/RSS';
$string['configenablesafebrowserintegration'] = 'Ini menambahkan pilihan \'Memerlukan Pelayar Peperiksaan Selamat\' ke bidang \'Keselamatan penyemak imbas\' pada borang tetapan kuiz. Lihat http://www.safeexambrowser.org/ untuk maklumat lanjut.';
$string['configenablestats'] = 'Jika anda memilih \'ya\' di sini, cronjob Moodle akan memproses log dan mengumpul beberapa statistik. Bergantung kepada jumlah trafik di laman anda, ini mungkin memakan masa. Jika anda mengaktifkan ini, anda akan dapat melihat beberapa graf yang menarik dan statistik mengenai setiap kursus anda, atau seluruh tapak.';
$string['configenabletrusttext'] = 'Secara lalai Moodle akan bersihkan teks yang datang daripada pengguna untuk menghapuskan kemungkinan mana-mana skrip lapuk, media dan lain-lain yang mungkin mengandungi risiko keselamatan. Sistem Kandungan Dipercayai adalah cara memberikan keupayaan kepada pengguna tertentu yang anda percayai untuk memasukkan ciri-ciri maju ini dalam kandungan mereka tanpa gangguan. Untuk membolehkan sistem ini, anda perlu terlebih dahulu membolehkan tetapan ini, dan kemudian berikan kebenaran Kandungan Dipercayai kepada peranan tertentu dalam Moodle. Teks-teks yang diwujudkan atau dimuat naik oleh pengguna tersebut akan ditanda sebagai dipercayai dan tidak akan dibersihkan sebelum dipaparkan.';
$string['configenablewebservices'] = 'Perkhidmatan web membolehkan sistem lain untuk log masuk ke Moodle ini dan melaksanakan operasi. Untuk keselamatan tambahan ciri ini harus dimatikan melainkan jika anda benar-benar menggunakannya.';
$string['configenablewsdocumentation'] = 'Aktifkan auto-generasi dokumentasi perkhidmatan web. Pengguna boleh mengakses dokumentasi sendiri pada halaman kunci keselamatan {$a}. Ia memaparkan dokumentasi untuk protokol yang dibolehkan sahaja.';
$string['configerrorlevel'] = 'Pilih jumlah amaran PHP yang anda mahu dipaparkan. Normal biasanya pilihan terbaik.';
$string['configexcludeoldflashclients'] = 'Beberapa versi plugin Adobe Flash diketahui terdedah kepada serangan dari kandungan Flash berniat jahat. Anda boleh menentukan versi minimum disokong di sini, dan Moodle tidak akan menunjukkan fail Flash kepada pengguna dengan versi yang lebih rendah. Sebaliknya, mereka akan lihat fail Flash gantian memberitahu mereka bagaimana untuk menaik taraf. Biarkan ini kosong untuk melumpuhkan semua semakan.';
$string['configextendedusernamechars'] = 'Aktifkan tetapan ini untuk membenarkan pelajar untuk menggunakan mana-mana watak-watak dalam nama pengguna mereka (nota ini tidak menjejaskan nama-nama sebenar mereka). Nilai lalai adalah "salah" yang mana menyekat nama pengguna kepada abjad angka huruf kecil, simbol garis bawah (_), sempang (-), noktah (.) atau alias (@).';
$string['configextramemorylimit'] = 'Beberapa skrip seperti carian, sandaran / memulihkan atau cron memerlukan lebih banyak ingatan. Tetapkan nilai-nilai yang lebih tinggi untuk laman-laman yang besar.';
$string['configextrauserselectorfields'] = 'Pilih bidang yang telah diperiksa dan dipaparkan, sebagai tambahan kepada nama penuh, apabila memilih pengguna, contohnya apabila memberikan peranan atau apabila menambah pengguna ke satu kumpulan. Atas sebab-sebab keselamatan, adalah disyorkan bahawa medan nama pengguna TIDAK dipilih.';
$string['configfilterall'] = 'Tapis semua rentetan, termasuk tajuk, tajuk, bar navigasi dan sebagainya. Ini kebanyakannya berguna apabila menggunakan penapis multilang, jika tidak ia hanya akan mewujudkan beban tambahan di laman anda untuk keuntungan sedikit.';
$string['configfiltermatchoneperpage'] = 'Penapis pautan automatik hanya akan menjana pautan tunggal bagi contoh teks pertama yang hampir sama yang terdapat pada halaman yang lengkap. Semua yang lain diabaikan.';
$string['configfiltermatchonepertext'] = 'Penapis pautan automatik hanya akan menjana pautan untuk contoh teks pertama yang hampir sama yang terdapat dalam setiap item teks (misalnya, sumber, besar) pada halaman. Semua yang lain diabaikan. Tetapan ini diabaikan jika  tetapan satu-satu halaman adalah <i>ya</i>.';
$string['configfilteruploadedfiles'] = 'Memproses semua dimuat naik HTML dan fail teks dengan penapis sebelum memaparkan mereka, hanya memuat naik fail HTML atau tidak ada sama sekali.';
$string['configforcelogin'] = 'Biasanya, muka depan laman web dan senarai kursus (tetapi tidak kursus) boleh dibaca oleh orang tanpa log masuk ke laman. Jika anda ingin memaksa orang ramai untuk log masuk sebelum mereka lakukan APA SAHAJA di laman web ini, maka anda harus mengaktifkan tetapan ini.';
$string['configforceloginforprofiles'] = 'Tetapan ini memaksa orang ramai untuk log masuk sebagai akaun yang sebenar (bukan tetamu) sebelum melihat profil mana-mana pengguna. Jika anda lumpuhkan tetapan ini, anda mungkin mendapati bahawa sesetengah pengguna mengepos pengiklanan (spam) atau lain-lain kandungan yang tidak sesuai dalam profil mereka, yang kemudiannya boleh dilihat oleh seluruh dunia.';
$string['configframename'] = 'Jika anda menerapkan Moodle dalam bingkai web, letakkan nama bingkai itu di sini. Jika tidak, nilai ini harus kekal sebagai \'_top\'';
$string['configfrontpage'] = 'Item yang dipilih di atas akan dipaparkan di muka depan laman web.';
$string['configfrontpageloggedin'] = 'Item yang dipilih di atas akan dipaparkan di muka depan laman apabila pengguna mendaftar masuk.';
$string['configfullnamedisplay'] = 'Ini mentakrifkan bagaimana nama-nama ditunjukkan apabila mereka dipaparkan sepenuhnya. Bagi kebanyakan laman web bahasa mono tetapan yang paling berkesan adalah lalai "Nama pertama + Nama Keluarga", tetapi anda boleh memilih untuk menyembunyikan nama keluarga sama sekali, atau meninggalkan sehingga pek bahasa semasa membuat keputusan (beberapa bahasa mempunyai konvensyen yang berbeza)';
$string['configgdversion'] = 'Menunjukkan versi GD yang dipasang. Versi yang ditunjukkan oleh lalai yang telah automatik dikesan. Jangan perubahan ini melainkan jika anda benar-benar tahu apa yang anda lakukan';
$string['configgeoipfile'] = 'Lokasi fail binari GeoIP City data. Fail ini tidak merupakan sebahagian pengagihan Moodle dan mesti diperolehi secara berasingan daripada <a href="http://www.maxmind.com/"> MaxMind </ a>. Anda boleh membeli versi komersial atau menggunakan versi percuma. <br/> Hanya download href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz"> http:/ / geolite.maxmind.com / download / geoip / pangkalan data / GeoLiteCity.dat.gz </a> dan keluarkan ia ke dalam "{$a}" direktori pada pelayan anda.';
$string['configgetremoteaddrconf'] = 'Jika pelayan anda di belakang proksi terbalik, anda boleh menggunakan tetapan ini untuk menentukan pengepala HTTP yang boleh dipercayai mengandungi alamat IP jauh. Pengepala dibaca perintah, menggunakan orang pertama yang ada.';
$string['configgooglemapkey'] = 'Anda perlu memasukkan kunci khas untuk menggunakan Peta Google untuk alamat IP lookup visualisasi. Anda boleh mendapatkan percuma utama dikenakan bayaran pada <a href="http://code.google.com/apis/maps/signup.html"> http://code.google.com/apis/maps/signup.html</ a><br />URL laman web anda adalah: {$a}';
$string['configgradebookroles'] = 'Tetapan ini membenarkan anda untuk mengawal yang muncul pada gradebook. Pengguna perlu mempunyai sekurang-kurangnya salah satu daripada peranan-peranan ini dalam kursus yang ditunjukkan dalam gradebook bagi kursus itu.';
$string['configgradeexport'] = 'Pilih Modal yang format eksport gradebook kaedah utama anda untuk gred pengeksport. Dipilih plugin akan menetapkan dan menggunakan "terakhir dieksport" bidang bagi gred setiap. Sebagai contoh, ini mungkin menyebabkan dalam rekod yang dieksport dikenal pasti sebagai "baru" atau "dikemaskinikan". Jika anda tidak pasti tentang perkara ini kemudian meninggalkan semua yang tidak ditandakan.';
$string['confighiddenuserfields'] = 'Pilih bidang maklumat pengguna anda ingin bersembunyi dari pengguna yang lain selain daripada guru-guru / pentadbir kursus. Ini akan meningkatkan privasi pelajar. Pegang CTRL utama untuk memilih pelbagai bidang.';
$string['configidnumber'] = 'Pilihan ini menentukan sama ada (a) Pengguna adalah tidak boleh diminta untuk nombor ID 1 sama sekali, (b) Pengguna adalah diminta untuk nombor ID 1 tetapi boleh meninggalkan ia kosong atau (c) Pengguna adalah diminta untuk Nombor ID 1 dan tidak boleh meninggalkan ia kosong . Jika diberi nombor ID Pengguna dipaparkan dalam Profil mereka.';
$string['configintcachemax'] = 'Untuk cache dalaman sahaja. Bilangan maksimum rekod-rekod yang menyimpan dalam cache. Nilai yang disarankan: 50. Gunakan nilai-nilai yang lebih rendah untuk mengurangkan penggunaan memori.';
$string['configintro'] = 'Pada halaman ini, anda boleh menentukan bilangan pemboleh ubah konfigurasi yang membantu membuat Moodle bekerja dengan betul pada pelayan anda. Jangan bimbang terlalu banyak mengenainya - mungkir biasanya akan berfungsi dengan baik dan anda sentiasa boleh kembali ke halaman ini kemudian dan menukar tetapan ini.';
$string['configintroadmin'] = 'Pada halaman ini, anda perlu mengkonfigurasi akaun pentadbir utama anda yang akan mempunyai kawalan sepenuhnya ke atas tapak. Pastikan anda memberikan nama pengguna dan kata laluan yang selamat serta alamat e-mel yang sah. Anda boleh mencipta akaun admin yang lebih kemudian.';
$string['configintrosite'] = 'Laman ini membenarkan anda untuk mengkonfigurasi laman depan dan nama laman baru ini. Anda boleh kembali ke sini kemudian untuk menukar tetapan ini pada bila-bila masa dengan menggunakan menu Pentadbiran.';
$string['configlatinexcelexport'] = 'Pilih pengekodan bagi eksport Excel.';
$string['configlookahead'] = 'Hari untuk melihat ke hadapan';
$string['configsessioncookiepath'] = 'Jika anda perlu mengubah di mana pelayar menghantar kuki Moodle, anda boleh mengubah tetapan ini untuk menentukan subdirektori laman web anda. Jika tidak, nilai lalai \'/\' sepatutnya cukup baik.';
$string['cookiehttponly'] = 'Hanya kuki http';
$string['cookiesecure'] = 'Kuki selamat sahaja';
$string['displayloginfailures'] = 'Paparkan kegagalan log masuk kepada';
$string['loginhttps'] = 'Gunakan HTTPS untuk login';
$string['notifyloginfailures'] = 'E-mel kegagalan log masuk kepada';
$string['profiledescription'] = 'Keterangan medan';
$string['requiremodintro'] = 'Keterangan aktiviti diperlukan';
$string['sessioncookie'] = 'Awalan kuki';
$string['sessioncookiedomain'] = 'Domain kuki';
$string['sessioncookiepath'] = 'Laluan kuki';
