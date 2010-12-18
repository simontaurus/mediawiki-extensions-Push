<?php

/**
 * Internationalization file for the Push extension.
 *
 * @file Push.i18n.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'push-desc' => 'Lightweight extension to push content to other wikis',

	'right-push' => 'Authorization to use push functionality.',
	'right-bulkpush' => 'Authorization to use bulk push functionality (ie Special:Push).',
	'right-pushadmin' => 'Authorization to modify push targets and push settings.',

	'push-err-captacha' => 'Could not push to $1 due to captcha.',
	'push-err-captcha-page' => 'Could not push page $1 to all targets due to CAPTCHA.',
	'push-err-authentication' => 'Authentication at $1 failed. $2',

	// Tab
	'push-tab-text' => 'Push',
	'push-button-text' => 'Push',
	'push-tab-desc' => 'This tab allows you to push the current revision of this page to one or more other wikis.',
	'push-button-pushing' => 'Pushing',
	'push-button-pushing-files' => 'Pushing files',
	'push-button-completed' => 'Push completed',
	'push-button-failed' => 'Push failed',
	'push-tab-title' => 'Push $1',
	'push-targets' => 'Push targets',
	'push-add-target' => 'Add target',
	'push-import-revision-message' => 'Pushed from $1.',
	'push-tab-no-targets' => 'There are no targets to push to. Please add some to your LocalSettings.php file.',
	'push-tab-push-to' => 'Push to $1',
	'push-remote-pages' => 'Remote pages',
	'push-remote-page-link' => '$1 on $2',
	'push-remote-page-link-full' => 'View $1 on $2',
	'push-targets-total' => 'There are a total of $1 {{PLURAL:$1|target|targets}}.',
	'push-button-all' => 'Push all',
	'push-tab-last-edit' => 'Last edit by $1 on $2 at $3.',
	'push-tab-not-created' => 'This page does not exist yet.',
	'push-tab-push-options' => 'Push options:',
	'push-tab-inc-templates' => 'Include templates',
	'push-tab-used-templates' => '(Used {{PLURAL:$2|template|templates}}: $1)',
	'push-tab-no-used-templates' => '(No templates are used on this page.)',
	'push-tab-inc-files' => 'Include embedded files',
	'push-tab-err-fileinfo' => 'Could not obtain which files are used on this page. None have been pushed.',
	'push-tab-err-filepush-unknown' => 'File push failed for an unknown reason.', 
	'push-tab-err-filepush' => 'File push failed: $1',	
	'push-tab-embedded-files' => '(Embedded files: $1)', // JS message, if you want to add plural, then fix the JS first.
	'push-tab-no-embedded-files' => '(No files are embedded in this page.)',
	'push-tab-files-override' => 'These files already exist: $1', // JS message, if you want to add plural, then fix the JS first.
	'push-tab-template-override' => 'These templates already exist: $1', // JS message, if you want to add plural, then fix the JS first.

	// Special page
	'special-push' => 'Push pages',
	'push-special-description' => 'This page enables you to push content of one or more pages to one or more MediaWiki wikis.

To push pages, enter the titles in the text box below, one title per line and hit push all. This can take a while to complete.',
	'push-special-pushing-desc' => 'Pushing $2 {{PLURAL:$2|page|pages}} to $1...',
	'push-special-button-text' => 'Push pages',
	'push-special-target-is' => 'Target wiki: $1',
	'push-special-select-targets' => 'Target wikis:',
	'push-special-item-pushing' => '$1: Pushing',
	'push-special-item-completed' => '$1: Push completed',
	'push-special-item-failed' => '$1: Push failed: $2',
	'push-special-push-done' => 'Push completed',
	'push-special-err-token-failed' => 'Could not obtain an edit token on the target wiki.',
	'push-special-err-pageget-failed' => 'Could not obtain local page content.',
	'push-special-err-push-failed' => 'Target wiki refused the pushed page.',
	'push-special-inc-files' => 'Include embedded files',
	'push-special-err-imginfo-failed' => 'Could not determine if any files needed to be pushed.',
	'push-special-obtaining-fileinfo' => '$1: Obtaining file information...',
	'push-special-pushing-file' => '$1: Pushing file $2...',
	'push-special-return' => 'Push more pages',
);

/** Message documentation (Message documentation)
 * @author Jeroen De Dauw
 * @author Nike
 * @author Raymond
 */
$messages['qqq'] = array(
	'push-err-authentication' => '$1: wiki name, $2: optional detailed error message',
	'push-remote-page-link' => '$1: page name, $2: wiki name',
	'push-remote-page-link-full' => '$1: page name, $2: wiki name',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'push-desc' => 'Невялікае пашырэньне для распаўсюджваньня зьместу ў іншыя вікі',
	'right-push' => 'выкарыстаньне распаўсюджваньня',
	'right-bulkpush' => 'выкарыстаньне групавога распаўсюджваньня',
	'right-pushadmin' => 'зьмена мэтаў і наладаў распаўсюджваньня',
	'push-err-captacha' => 'Немагчыма распаўсюдзіць у $1 з-за captcha.',
	'push-err-captcha-page' => 'Немагчыма распаўсюдзіць старонку $1 на ўсе мэты з-за captcha.',
	'push-err-authentication' => 'Немагчыма аўтэнтыфікаваць на $1. $2',
	'push-tab-text' => 'Распаўсюдзіць',
	'push-button-text' => 'Распаўсюдзіць',
	'push-tab-desc' => 'Гэтая закладка дазваляе Вам распаўсюджваць цяперашнюю вэрсію гэтай старонкі ў іншыя вікі.',
	'push-button-pushing' => 'Распаўсюджваньне',
	'push-button-pushing-files' => 'Распаўсюдзіць файлы',
	'push-button-completed' => 'Распаўсюджваньне скончанае',
	'push-button-failed' => 'Памылка распаўсюджваньня',
	'push-tab-title' => 'Распаўсюдзіць $1',
	'push-targets' => 'Мэты распаўсюджваньня',
	'push-add-target' => 'Дадаць мэту',
	'push-import-revision-message' => 'Распаўсюджаная з $1 $2.',
	'push-tab-no-targets' => 'Няма мэтаў для распаўсюджаньня. Калі ласка, дадайце некаторыя ў Ваш файл LocalSettings.php.',
	'push-tab-push-to' => 'Распаўсюдзіць у $1',
	'push-remote-pages' => 'Аддаленыя старонкі',
	'push-remote-page-link' => '$1 на $2',
	'push-remote-page-link-full' => 'Паказаць $1 на $2',
	'push-targets-total' => 'Усяго $1 {{PLURAL:$1|мэта|мэты|мэтаў}}.',
	'push-button-all' => 'Распаўсюдзіць усе',
	'push-tab-last-edit' => 'Апошні раз рэдагавалася $1 $2 у $3.',
	'push-tab-not-created' => 'Гэтая старонка пакуль не існуе.',
	'push-tab-push-options' => 'Налады распаўсюджваньня:',
	'push-tab-inc-templates' => 'Уключыць шаблёны',
	'push-tab-used-templates' => '({{PLURAL:$2|Выкарыстаны шаблён|Выкарыстаныя шаблёны}}: $1)',
	'push-tab-no-used-templates' => '(На гэтай старонцы не выкарыстоўваюцца шаблёны.)',
	'push-tab-inc-files' => 'Уключыць файлы',
	'push-tab-err-fileinfo' => 'Немагчыма выявіць, якія файлы выкарыстоўваюцца на гэтай старонцы. Ні адзін ня быў распаўсюджаны.',
	'push-tab-err-filepush-unknown' => 'Немагчыма распаўсюдзіць файлы па невядомай прычыне.',
	'push-tab-err-filepush' => 'Немагчыма распаўсюдзіць файлы: $1',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'push-tab-text' => 'Bountañ',
	'push-button-text' => 'Bountañ',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'push-desc' => 'Ermöglicht den einfachen Transfer von Inhalten eines Wikis in ein anderes',
	'right-push' => 'Seiten in andere Wikis transferieren',
	'right-bulkpush' => 'Seiten gesammelt in andere Wikis transferieren',
	'right-pushadmin' => 'Transfereinstellungen und -ziele ändern',
	'push-err-captacha' => 'Transfer nach $1 aufgrund eines CAPTCHAs nicht möglich.',
	'push-err-captcha-page' => 'Seite $1 konnte aufgrund von CAPTCHAs zu keinem der Ziele transferiert werden.',
	'push-err-authentication' => 'Authentifizierung auf $1 ist fehlgeschlagen. $2',
	'push-tab-text' => 'Transferieren',
	'push-button-text' => 'Transferieren',
	'push-tab-desc' => 'Dieser Reiter ermöglicht den Transfer des aktuellen Seiteninhalts in ein oder mehrere andere Wikis.',
	'push-button-pushing' => 'Transferiere',
	'push-button-pushing-files' => 'Transferiere Dateien',
	'push-button-completed' => 'Transfer abgeschlossen',
	'push-button-failed' => 'Transfer fehlgeschlagen',
	'push-tab-title' => 'Transferiere $1',
	'push-targets' => 'Transferziele',
	'push-add-target' => 'Transferziel hinzufügen',
	'push-import-revision-message' => 'Transferiert von $1 durch Benutzer $2.',
	'push-tab-no-targets' => 'Es sind keine Transferziele vorhanden. Es müssen welche in der Datei LocalSettings.php definiert werden.',
	'push-tab-push-to' => 'Transferiere nach $1',
	'push-remote-pages' => 'Entfernte Seiten',
	'push-remote-page-link' => 'Seite $1 auf Wiki $2',
	'push-remote-page-link-full' => 'Seite $1 auf Wiki $2 ansehen',
	'push-targets-total' => 'Es {{PLURAL:$1|ist|sind}} insgesamt $1 {{PLURAL:$1|Transferziel|Transferziele}} vorhanden.',
	'push-button-all' => 'Alle transferieren',
	'push-tab-last-edit' => 'Letzte Bearbeitung durch Benutzer $1 am $2 um $3 Uhr.',
	'push-tab-not-created' => 'Diese Seite ist nicht vorhanden.',
	'push-tab-push-options' => 'Transferoptionen:',
	'push-tab-inc-templates' => 'Vorlagen einbeziehen',
	'push-tab-used-templates' => '({{PLURAL:$2|Vorlage|Vorlagen}} eingesetzt: $1)',
	'push-tab-no-used-templates' => '(Auf dieser Seite werden keine Vorlagen eingesetzt.)',
	'push-tab-inc-files' => 'Dateien einbeziehen',
	'push-tab-err-fileinfo' => 'Es konnte nicht ermittelt werden, welche Dateien auf dieser Seite eingebunden sind. Es wurde keine transferiert.',
	'push-tab-err-filepush-unknown' => 'Dateitransfer ist aus unbekanntem Grund fehlgeschlagen.',
	'push-tab-err-filepush' => 'Dateitransfer fehlgeschlagen: $1',
	'special-push' => 'Seiten transferieren',
	'push-special-description' => 'Diese Spezialseite ermöglicht es den Inhalt einer oder mehrerer Seiten zu einem oder mehreren anderen Wikis zu transferieren.

Um Seiten zu transferieren, sind deren Titel im Eingabefeld unten anzugeben (ein Titel pro Zeile). Klicke danach auf „{{int:push-special-button-text}}“. Es kann etwas dauern, bis der Transfer abgeschlossen ist.',
	'push-special-pushing-desc' => 'Transferiere $2 {{PLURAL:$2|Seite|Seiten}} nach $1 …',
	'push-special-button-text' => 'Seiten transferieren',
	'push-special-target-is' => 'Zielwiki: $1',
	'push-special-select-targets' => 'Zielwikis:',
	'push-special-item-pushing' => '$1: Transferiere …',
	'push-special-item-completed' => '$1: Transfer abgeschlossen',
	'push-special-item-failed' => '$1: Transfer fehlgeschlagen. $2',
	'push-special-push-done' => 'Transfer abgeschlossen',
	'push-special-err-token-failed' => 'Auf dem Zielwiki konnte der Bearbeitungstoken nicht abgerufen werden.',
	'push-special-err-pageget-failed' => 'Auf diesem Wiki konnte der Seiteninhalt nicht abgerufen werden.',
	'push-special-err-push-failed' => 'Das Zielwiki hat die zu transferierende Seite zurückgewiesen.',
	'push-special-inc-files' => 'Dateien einbeziehen',
	'push-special-err-imginfo-failed' => 'Es konnte nicht ermittelt werden, ob auch Dateien transferiert werden müssen.',
	'push-special-obtaining-fileinfo' => '$1: Dateiinformationen werden abrufen …',
	'push-special-pushing-file' => '$1: Transferiere Datei $2 …',
	'push-special-return' => 'Weitere Seiten transferieren',
);

/** Finnish (Suomi)
 * @author Tofu II
 */
$messages['fi'] = array(
	'push-add-target' => 'Lisää kohde',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'push-desc' => 'Jednore rozšěrjenje za přenošowanje wobsaha do druhich wikijow',
	'right-push' => 'Awtorizacija za wužiwanje přenošowanskeje funkcionalnosće.',
	'right-bulkpush' => 'Awtorizacija za wužiwanje přenošowanskeje funkcionalnosće z masami (t. j. Special:Push).',
	'right-pushadmin' => 'Awtorizacije za změnjenje přenošowanskich cilow a přenošowanskich nastajenjow.',
	'push-err-captacha' => 'Přenošowanje do $1 CAPTCHA dla njemóžno.',
	'push-err-captcha-page' => 'Strona $1 njeda so CAPTCHA dla do wšěch cilow přenjesć.',
	'push-err-authentication' => 'Awtentifikacija na $1 je so njeporadźiła. $2',
	'push-tab-text' => 'Přenjesć',
	'push-button-text' => 'Přenjesć',
	'push-tab-desc' => 'Tutón rajtark ći zmóžnja aktualnu wersiju tuteje strony do druhich wikijow přenjesć.',
	'push-button-pushing' => 'Přenošowanje',
	'push-button-pushing-files' => 'Dataje so přenošuja',
	'push-button-completed' => 'Přenjesenje zakónčene',
	'push-button-failed' => 'Přenjesenje je so njeporadźiło',
	'push-tab-title' => '$1 přenjesć',
	'push-targets' => 'Přenošowanske cile',
	'push-add-target' => 'Cil přidać',
	'push-import-revision-message' => 'Z $1 wot $2 přenjeseny.',
	'push-tab-no-targets' => 'Njejsu žane přenošowanske cile. Prošu zapodaj je w dataji LocalSettings.php.',
	'push-tab-push-to' => 'Do $1 přenjesć',
	'push-remote-pages' => 'Zdalene strony',
	'push-remote-page-link' => '$1 w $2',
	'push-remote-page-link-full' => 'Stronu $1 na $2 sej wobhladać',
	'push-targets-total' => '{{PLURAL:$1|Je $1 strona|Stej $1 stronje|Su $1 strony|Je $1 stronow}}.',
	'push-button-all' => 'Wšě přenjesć',
	'push-tab-last-edit' => 'Poslednja změna wot wužiwarja $1, $2, $3.',
	'push-tab-not-created' => 'Tuta strona hišće njeeksistuje.',
	'push-tab-push-options' => 'Přenošowanske opcije:',
	'push-tab-inc-templates' => 'Předłohi zapřijeć',
	'push-tab-used-templates' => '({{PLURAL:$2|Wužita předłoha|Wužitej předłoze|Wužite předłohi|Wužite předłohi}}: $1)',
	'push-tab-no-used-templates' => '(Na tutej stronje so žane přełohi wužiwaja.)',
	'push-tab-inc-files' => 'Dataje zapřijeć',
	'push-tab-err-fileinfo' => 'Njeda so zwěsćić, kotre dataje so na tutej stronje wužiwaja. Žana njeje so přenjesła.',
	'push-tab-err-filepush-unknown' => 'Přenjesenje dataje je so z njeznateje přičiny njeporadźiło.',
	'push-tab-err-filepush' => 'Přenjesenje dataje je so njeporadźiło: $1',
	'special-push' => 'Strony přenjesć',
	'push-special-description' => 'Tuta strona ći zmóžnja wobsah stronow do druhich wikijow MediaWiki přenjesć.

Zo by strony přenjesł, zapodaj titule do slědowaceho tekstoweho pola, jedyn titul na linku a klikń potom na "Wšě přenjesć". Móže chwilku trać, doniž přenjesenje njeje zakónčene.',
	'push-special-pushing-desc' => '{{PLURAL:$2|Přenošuje so $2 strona|Přenošujetej so $2 stronje|Přenošuja so $2 strony|Přenošuje so $2 stronow}} do $1...',
	'push-special-button-text' => 'Strony přenjesć',
	'push-special-target-is' => 'Cilowy wiki: $1',
	'push-special-select-targets' => 'Cilowe wikije:',
	'push-special-item-pushing' => '$1: Přenošuje so',
	'push-special-item-completed' => '$1: Přenjesenje zakónčene',
	'push-special-item-failed' => '$1: Přenjesenje je so njeporadźiło: $2',
	'push-special-push-done' => 'Přenjesenje zakónčene',
	'push-special-err-token-failed' => 'Wobdźěłowanski token njeda so na cilowym wikiju wobstarać.',
	'push-special-err-pageget-failed' => 'Wobsah lokalneje strony njeda so wobstarać.',
	'push-special-err-push-failed' => 'Cilowy wiki je přenjesenu stronu wotpokazał.',
	'push-special-inc-files' => 'Dataje zapřijeć',
	'push-special-err-imginfo-failed' => 'Njeda so zwěsćić, hač dataje dyrbja so přenjesć.',
	'push-special-obtaining-fileinfo' => '$1: Datajowe informacije so wobstaruja...',
	'push-special-pushing-file' => '$1: Dataja $2 so přenošuje...',
	'push-special-return' => 'Dalše strony přenjesć',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'push-desc' => 'Extension simple pro transferer contento a altere wikis',
	'right-push' => 'Autorisation a usar le functionalitate de transferimento.',
	'right-bulkpush' => 'Autorisation a usar le functionalitate de transferimento in massa (i.e. Special:Push).',
	'right-pushadmin' => 'Autorisation a modificar destinationes e configurationes de transferimento.',
	'push-err-captacha' => 'Non poteva transferer a $1 a causa de un problema con le "captcha".',
	'push-err-captcha-page' => 'Non poteva transferer le pagina $1 a tote le destinationes proque un "captcha" esseva incontrate.',
	'push-err-authentication' => 'Authentication a $1 ha fallite. $2',
	'push-tab-text' => 'Transferer',
	'push-button-text' => 'Transferer',
	'push-tab-desc' => 'Iste scheda permitte transferer le version actual de iste pagina a un o plus altere wikis.',
	'push-button-pushing' => 'Transferimento in curso',
	'push-button-pushing-files' => 'Transfere files',
	'push-button-completed' => 'Transferimento complete',
	'push-button-failed' => 'Transferimento fallite',
	'push-tab-title' => 'Transferer $1',
	'push-targets' => 'Destinationes de transferimento',
	'push-add-target' => 'Adder destination',
	'push-import-revision-message' => 'Transferite ex $1 per $2.',
	'push-tab-no-targets' => 'Il non ha destinationes de transferimento. Per favor adde alcunes in tu file LocalSettings.php.',
	'push-tab-push-to' => 'Transferer a $1',
	'push-remote-pages' => 'Paginas remote',
	'push-remote-page-link' => '$1 in $2',
	'push-remote-page-link-full' => 'Vider $1 in $2',
	'push-targets-total' => 'Il ha un total de $1 {{PLURAL:$1|destination|destinationes}}.',
	'push-button-all' => 'Transferer totes',
	'push-tab-last-edit' => 'Ultime modification per $1 le $2 a $3.',
	'push-tab-not-created' => 'Iste pagina non existe ancora.',
	'push-tab-push-options' => 'Optiones de transferimento:',
	'push-tab-inc-templates' => 'Includer patronos',
	'push-tab-used-templates' => '({{PLURAL:$2|Patrono|Patronos}} usate: $1)',
	'push-tab-no-used-templates' => '(Nulle patrono es usate in iste pagina.)',
	'push-tab-inc-files' => 'Includer files',
	'push-tab-err-fileinfo' => 'Non poteva determinar qual files es usate in iste pagina. Nulle file ha essite transferite.',
	'push-tab-err-filepush-unknown' => 'Le transferimento ha fallite pro un ration incognite.',
	'push-tab-err-filepush' => 'Transferimento de file fallite: $1',
	'special-push' => 'Transferer paginas',
	'push-special-description' => 'Iste pagina permitte transferer le contento de un o plus paginas a un o plus wikis MediaWiki.

Pro transferer paginas, entra le titulos in le quadro de texto hic infra, un titulo per linea, e preme "Transferer totes". Isto pote prender certe un tempore.',
	'push-special-pushing-desc' => 'Transfere $2 {{PLURAL:$2|pagina|paginas}} a $1...',
	'push-special-button-text' => 'Transferer paginas',
	'push-special-target-is' => 'Wiki de destination: $1',
	'push-special-select-targets' => 'Wikis de destination:',
	'push-special-item-pushing' => '$1: Transferimento in curso',
	'push-special-item-completed' => '$1: Transferimento complete',
	'push-special-item-failed' => '$1: Transferimento fallite: $2',
	'push-special-push-done' => 'Transferimento complete',
	'push-special-err-token-failed' => 'Non poteva obtener un indicio de modification in le wiki de destination.',
	'push-special-err-pageget-failed' => 'Non poteva obtener le contento del pagina local.',
	'push-special-err-push-failed' => 'Le wiki de destination refusava le pagina transferite.',
	'push-special-inc-files' => 'Includer files',
	'push-special-err-imginfo-failed' => 'Non poteva determinar si es necessari transferer files.',
	'push-special-obtaining-fileinfo' => '$1: Obtene informationes de file...',
	'push-special-pushing-file' => '$1: Transfere file $2...',
	'push-special-return' => 'Transferer plus paginas',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'push-desc' => 'Ekstensi ringan untuk mendorong konten ke wiki lainnya',
	'right-push' => 'Otorisasi untuk menggunakan fungsi dorong.',
	'right-bulkpush' => 'Otorisasi untuk menggunakan fungsi dorong massal (Special:Push).',
	'right-pushadmin' => 'Otorisasi untuk memodifikasi target dan pengaturan dorong.',
	'push-err-captacha' => 'Tidak dapat mendorong ke $1 karena captcha.',
	'push-err-captcha-page' => 'Tidak dapat mendorong halaman $1 ke semua target karena captcha.',
	'push-err-authentication' => 'Otentikasi pada $1 gagal. $2',
	'push-tab-text' => 'Dorong',
	'push-button-text' => 'Dorong',
	'push-tab-desc' => 'Tab ini mengizinkan Anda untuk mendorong revisi terbaru halaman ini ke satu atau lebih wiki lain.',
	'push-button-pushing' => 'Mendorong',
	'push-button-pushing-files' => 'Mendorong berkas',
	'push-button-completed' => 'Pendorongan selesai',
	'push-button-failed' => 'Pendorongan gagal',
	'push-tab-title' => 'Mendorong $1',
	'push-targets' => 'Target pendorongan',
	'push-add-target' => 'Tambahkan target',
	'push-import-revision-message' => 'Didorong dari $1 oleh $2.',
	'push-tab-no-targets' => 'Tidak ada target untuk pendorongan. Harap tambahkan beberapa berkas ke LocalSettings.php Anda.',
	'push-tab-push-to' => 'Dorong ke $1',
	'push-remote-pages' => 'Halaman luar',
	'push-remote-page-link' => '$1 pada $2',
	'push-remote-page-link-full' => 'Lihat $1 pada $2',
	'push-targets-total' => 'Total ada $1 {{PLURAL:$1|target|target}}.',
	'push-button-all' => 'Dorong semua',
	'push-tab-last-edit' => 'Suntingan terakhir oleh $1 pada $2 $3.',
	'push-tab-not-created' => 'Halaman ini belum ada.',
	'push-tab-push-options' => 'Pilihan dorongan:',
	'push-tab-inc-templates' => 'Sertakan templat',
	'push-tab-used-templates' => '({{PLURAL:$2|Templat|Templat}} yang digunakan: $1)',
	'push-tab-no-used-templates' => '(Tidak ada templat yang digunakan pada halaman ini.)',
	'push-tab-inc-files' => 'Sertakan berkas',
	'push-tab-err-fileinfo' => 'Tidak dapat mengetahui berkas mana yang digunakan pada halaman ini. Tidak ada yang didorong.',
	'push-tab-err-filepush-unknown' => 'Gagal mendorong berkas karena alasan yang tidak diketahui.',
	'push-tab-err-filepush' => 'Gagal mendorong berkas: $1',
	'special-push' => 'Dorong halaman',
	'push-special-description' => 'Halaman ini memungkinkan Anda untuk mendorong satu atau lebih halaman ke satu atau lebih wiki MediaWiki.

Untuk mendorong halaman, masukkan judul dalam kotak teks di bawah ini, satu judul per baris, dan tekan dorong semua. Proses ini dapat memakan waktu cukup lama.',
	'push-special-pushing-desc' => 'Mendorong $2 {{PLURAL:$2|halaman|halaman}} ke $1...',
	'push-special-button-text' => 'Dorong halaman',
	'push-special-target-is' => 'Wiki target: $1',
	'push-special-select-targets' => 'Wiki target:',
	'push-special-item-pushing' => '$1: Mendorong',
	'push-special-item-completed' => '$1: Pendorongan selesai',
	'push-special-item-failed' => '$1: Pendorongan gagal: $2',
	'push-special-push-done' => 'Pendorongan selesai',
	'push-special-err-token-failed' => 'Tidak dapat memperoleh token sunting pada wiki target.',
	'push-special-err-pageget-failed' => 'Tidak dapat memperoleh konten halaman lokal.',
	'push-special-err-push-failed' => 'Wiki target menolak laman yang didorong.',
	'push-special-inc-files' => 'Sertakan berkas',
	'push-special-err-imginfo-failed' => 'Tidak dapat menentukan apakah ada berkas yang perlu didorong.',
	'push-special-obtaining-fileinfo' => '$1: Mencari informasi berkas...',
	'push-special-pushing-file' => '$1: Mendorong berkas $2...',
	'push-special-return' => 'Dorong halaman lain',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'push-desc' => 'Erweiderung déi en einfachen Transfert (Push) vun Inhalt op aner Wikien erméiglecht',
	'right-push' => "Autorisatioun fir d'Push-Fonctionalitéit ze benotzen",
	'right-bulkpush' => 'Autorisatioun fir méi Säite mateneen per Push an aner Wikien ze transferéieren',
	'right-pushadmin' => "Autorisatioun fir d'Zil an d'Astellungen vun der Push-Fonctionalitéit z'änneren.",
	'push-err-captacha' => 'Push op $1 konnt wéint dem Captcha net gemaach ginn.',
	'push-button-completed' => 'Push ofgeschloss',
	'push-remote-page-link' => '$1 op $2',
	'push-remote-page-link-full' => '$1 op $2 weisen',
	'push-button-all' => 'All pushen',
	'push-tab-last-edit' => 'Lescht Ännerung vum $1 de(n) $2 ëm $3 Auer.',
	'push-tab-not-created' => 'Dës Säit gëtt et nach net',
	'special-push' => 'Säite pushen',
	'push-special-button-text' => 'Säite pushen',
	'push-special-select-targets' => 'Zielwikien:',
	'push-special-item-pushing' => '$1: Pushen',
	'push-special-item-completed' => '$1: Push ofgeschloss',
	'push-special-item-failed' => '$1: Push huet net fonctionnéiert: $2',
	'push-special-push-done' => 'Push ofgeschloss',
	'push-special-return' => 'Méi Säite pushen',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'push-desc' => 'Мал додаток за пренесување на содржини од едно на други викија',
	'right-push' => 'Потврда на сметка за да работи функцијата за пренесување.',
	'right-bulkpush' => 'Потврда на сметка за да работи функцијата за групно пренесување (т.е. Special:Push).',
	'right-pushadmin' => 'Потврда на сметка за измена на одредниците и поставките за пренесување.',
	'push-err-captacha' => 'Не можев да го пренесам $1 поради Captcha.',
	'push-err-captcha-page' => 'Не можев да ја пренесам страницата $1 на сите одредници заради Captcha.',
	'push-err-authentication' => 'Потврдувањето на $1 не успеа. $2',
	'push-tab-text' => 'Пренеси',
	'push-button-text' => 'Пренеси',
	'push-tab-desc' => 'Ова јазиче ви овозможува да ја пренесете тековната ревизија на страницава на едно или повеќе викија',
	'push-button-pushing' => 'Пренесувам',
	'push-button-pushing-files' => 'Пренесувам податотеки',
	'push-button-completed' => 'Преносот заврши',
	'push-button-failed' => 'Преносот не успеа',
	'push-tab-title' => 'Пренеси - $1',
	'push-targets' => 'Одредници за преносот',
	'push-add-target' => 'Додај одредница',
	'push-import-revision-message' => 'Пренесено од $1. Пренел: $2.',
	'push-tab-no-targets' => 'Нема одредници во кои би се извршил преносот. Додајте места во вашата податотека LocalSettings.php.',
	'push-tab-push-to' => 'Пренеси во $1',
	'push-remote-pages' => 'Далечински страници',
	'push-remote-page-link' => '$1 на $2',
	'push-remote-page-link-full' => 'Преглед на $1 на $2',
	'push-targets-total' => 'Има вкупно $1 {{PLURAL:$1|одредница|одредници}}.',
	'push-button-all' => 'Пренеси сè',
	'push-tab-last-edit' => 'Последна измена од $1 на $2 во $3 ч.',
	'push-tab-not-created' => 'Оваа страница сè уште не постои.',
	'push-tab-push-options' => 'Поставки за преносот:',
	'push-tab-inc-templates' => 'Вклучи шаблони',
	'push-tab-used-templates' => '({{PLURAL:$2|Шаблон|Шаблони}} во употреба: $1)',
	'push-tab-no-used-templates' => '(На страницава не се користат шаблони.)',
	'push-tab-inc-files' => 'Вклучи податотеки',
	'push-tab-err-fileinfo' => 'Не можев да востановам кои податотеки се користат на страницава. Затоа не преместив ниедна.',
	'push-tab-err-filepush-unknown' => 'Пренесувањето на податотеката не успеа од непознати причини.',
	'push-tab-err-filepush' => 'Пренесувањето на податотеката не успеа: $1',
	'special-push' => 'Пренесување страници',
	'push-special-description' => 'Оваа страница ви овозможува да пренесете содржини од една или повеќе страници од едно вики во едно или повеќе викија што работат на МедијаВики.

За да пренесете, внесете ги насловите во полето подолу, по едно во секој ред, па стиснете на „Пренеси сè“. Ова може да потрае.',
	'push-special-pushing-desc' => 'Пренесувам $2 {{PLURAL:$2|страница|страници}} во $1...',
	'push-special-button-text' => 'Пренеси',
	'push-special-target-is' => 'Целно вики: $1',
	'push-special-select-targets' => 'Целни викија:',
	'push-special-item-pushing' => '$1: Преместување',
	'push-special-item-completed' => '$1: Преносот заврши',
	'push-special-item-failed' => '$1: Преносот не успеа: $2',
	'push-special-push-done' => 'Преносот заврши',
	'push-special-err-token-failed' => 'Не можев да го добијам жетонот на уредувањето на целното вики.',
	'push-special-err-pageget-failed' => 'Не можев да ја добијам содржината на локалната страница.',
	'push-special-err-push-failed' => 'Целното вики ја одби пренесената страница.',
	'push-special-inc-files' => 'Вклучи податотеки',
	'push-special-err-imginfo-failed' => 'Не можев да утврдам дали треба да се пренесат податотеки.',
	'push-special-obtaining-fileinfo' => '$1: Преземам податотечни податоци...',
	'push-special-pushing-file' => '$1: Ја пренесувам податотеката $2...',
	'push-special-return' => 'Пренеси уште страници',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'push-desc' => "Lichtgewichtuitbreiding om inhoud naar andere wiki's te sturen",
	'right-push' => "Mag inhoud naar andere wiki's versturen.",
	'right-bulkpush' => "Mag en masse inhoud naar andere wiki's versturen.",
	'right-pushadmin' => "Mag doelwiki's en instellingen voor het versturen van inhoud aanpassen.",
	'push-err-captacha' => 'Het was niet mogelijk inhoud te verzenden naar $1 omdat de andere wiki een captchaoplossing heeft gevraagd.',
	'push-err-captcha-page' => "Het was niet mogelijk de pagina $1 naar alle doelwiki's te verzenden omdat er om een captchaoplossing is gevraagd.",
	'push-err-authentication' => 'Het aanmelden bij $1 is mislukt. $2',
	'push-tab-text' => 'Verzenden',
	'push-button-text' => 'Verzenden',
	'push-tab-desc' => "Via dit tabblad kunt u de inhoud van de huidige versie van deze pagina naar een of meer andere wiki's verzenden.",
	'push-button-pushing' => 'Bezig met verzenden',
	'push-button-completed' => 'Het verzenden is voltooid',
	'push-button-failed' => 'Het verzenden is mislukt',
	'push-tab-title' => 'Bezig met het verzenden van $1',
	'push-targets' => "Doelwiki's",
	'push-add-target' => 'Doelwiki toevoegen',
	'push-import-revision-message' => 'Verzonden vanuit $1 door $2.',
	'push-tab-no-targets' => "Er zijn geen beschikbare doelwiki's. Voeg deze eerst toe aan uw LocalSettings.php-bestand.",
	'push-tab-push-to' => 'Verzenden naar $1',
	'push-remote-pages' => "Pagina's in andere wiki's",
	'push-remote-page-link' => '$1 op $2',
	'push-remote-page-link-full' => '$1 op $2 bekijken',
	'push-targets-total' => "Er {{PLURAL:$1|is één doelwiki|zijn $1 doelwiki's}}.",
	'push-button-all' => 'Alles verzenden',
	'push-tab-last-edit' => 'Laatste bewerking door $1 op $2 om $3.',
	'push-tab-not-created' => 'Deze pagina bestaat nog niet.',
	'push-tab-push-options' => 'Verzendinstellingen:',
	'push-tab-inc-templates' => 'Sjablonen ook verzenden',
	'push-tab-used-templates' => '{{PLURAL:$2|Gebruikt sjabloon|Gebruikte sjablonen}}: $1',
	'push-tab-no-used-templates' => 'Er worden geen sjablonen gebruikt op deze pagina.',
	'special-push' => "Pagina's verzenden",
	'push-special-description' => "Via deze pagina kunt u de inhoud van een of meer pagina's naar een of meer MediaWiki-wiki's verzenden.

Voer paginanamen in het onderstaande invoerveld in om pagina's te kunnen verzenden.
Voer iedere paginanaam in op een nieuwe regel en klik op \"Alles verzenden\".
Het verzenden kan enige tijd kosten.",
	'push-special-pushing-desc' => "Bezig met het verzenden van {{PLURAL:$2|één pagina|$2 pagina's}} naar $1...",
	'push-special-button-text' => "Pagina's verzenden",
	'push-special-target-is' => 'Doelwiki: $1',
	'push-special-select-targets' => "Doelwiki's:",
	'push-special-item-pushing' => '$1: bezig met verzenden',
	'push-special-item-completed' => '$1: het verzenden is voltooid',
	'push-special-item-failed' => '$1: het verzenden is mislukt: $2',
	'push-special-push-done' => 'Het verzenden is afgerond',
	'push-special-err-token-failed' => 'Het was niet mogelijk een bewerkingstoken te verkrijgen van de doelwiki.',
	'push-special-err-pageget-failed' => 'Het was niet mogelijk de inhoud van de lokale pagina te verkrijgen.',
	'push-special-err-push-failed' => 'De doelwiki heeft de verzonden pagina niet geaccepteerd.',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'push-desc' => 'Uma extensão ligeira para replicação externa de conteúdos para outras wikis',
	'right-push' => 'Autorização para usar a funcionalidade de replicação externa.',
	'right-bulkpush' => 'Autorização para usar a funcionalidade de replicação externa em massa (isto é, a página Special:Push).',
	'right-pushadmin' => 'Autorização para modificar os destinos e a configuração da replicação externa.',
	'push-err-captacha' => 'Não foi possível fazer a replicação para $1 devido ao captcha.',
	'push-err-captcha-page' => 'Não foi possível replicar a página $1 para todos os destinos devido ao captcha.',
	'push-err-authentication' => 'A autenticação na $1 falhou. $2',
	'push-tab-text' => 'Replicação',
	'push-button-text' => 'Replicar',
	'push-tab-desc' => 'Este separador permite-lhe fazer a replicação externa da última versão desta página para uma ou mais wikis.',
	'push-button-pushing' => 'A replicar',
	'push-button-pushing-files' => 'A replicar ficheiros',
	'push-button-completed' => 'Replicação terminada',
	'push-button-failed' => 'A replicação falhou',
	'push-tab-title' => 'Replicar $1',
	'push-targets' => 'Destinos da replicação',
	'push-add-target' => 'Adicionar destino',
	'push-import-revision-message' => 'Replicada de $1 por $2.',
	'push-tab-no-targets' => 'Não existem destinos para a replicação. Acrescente-os ao ficheiro LocalSettings.php.',
	'push-tab-push-to' => 'Replicar para $1',
	'push-remote-pages' => 'Páginas remotas',
	'push-remote-page-link' => '$1 na $2',
	'push-remote-page-link-full' => 'Ver $1 na $2',
	'push-targets-total' => 'Há {{PLURAL:$1|$1 destino|um total de $1 destinos}}.',
	'push-button-all' => 'Replicar para todos',
	'push-tab-last-edit' => 'Última edição de $1 a $2 às $3.',
	'push-tab-not-created' => 'Esta página ainda não existe.',
	'push-tab-push-options' => 'Opções da replicação externa:',
	'push-tab-inc-templates' => 'Incluir predefinições',
	'push-tab-used-templates' => '({{PLURAL:$2|Predefinição usada|Predefinições usadas}}: $1)',
	'push-tab-no-used-templates' => '(Esta página não contém predefinições)',
	'push-tab-inc-files' => 'Incluir ficheiros',
	'push-tab-err-fileinfo' => 'Não foi possível determinar que ficheiros são usados nesta página. Não foi replicado nenhum ficheiro.',
	'push-tab-err-filepush-unknown' => 'A replicação externa do ficheiro falhou por uma razão desconhecida.',
	'push-tab-err-filepush' => 'A replicação externa do ficheiro falhou: $1',
	'special-push' => 'Replicação externa de páginas',
	'push-special-description' => 'Esta página permite-lhe fazer a replicação externa de uma ou mais páginas, para uma ou mais wikis MediaWiki.

Para fazer a replicação externa de páginas, introduza os respectivos títulos na caixa de texto abaixo, um título por linha e clique "Replicar todas". A operação pode demorar algum tempo.',
	'push-special-pushing-desc' => 'A replicar $2 {{PLURAL:$2|página|páginas}} para a $1...',
	'push-special-button-text' => 'Replicar páginas',
	'push-special-target-is' => 'Wiki de destino: $1',
	'push-special-select-targets' => 'Wikis de destino:',
	'push-special-item-pushing' => '$1: A replicar',
	'push-special-item-completed' => '$1: Replicação terminada',
	'push-special-item-failed' => '$1: A replicação falhou: $2',
	'push-special-push-done' => 'Replicação terminada',
	'push-special-err-token-failed' => 'Não foi possível obter uma chave de edição na wiki de destino.',
	'push-special-err-pageget-failed' => 'Não foi possível obter o conteúdo da página local.',
	'push-special-err-push-failed' => 'A wiki de destino recusou a página.',
	'push-special-inc-files' => 'Incluir ficheiros',
	'push-special-err-imginfo-failed' => 'Não foi possível determinar se é necessário replicar algum ficheiro.',
	'push-special-obtaining-fileinfo' => '$1: A obter as informações do ficheiro...',
	'push-special-pushing-file' => '$1: A replicar o ficheiro $2...',
	'push-special-return' => 'Replicar mais páginas',
);

/** Russian (Русский)
 * @author DCamer
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'push-desc' => 'Небольшое расширение для помещения содержимого в другие вики',
	'right-push' => 'Авторизуйтесь чтобы использовать эту функцию.',
	'right-bulkpush' => 'Авторизуйтесь чтобы использовать эту объёмную функцию (например, Служебная:Push)',
	'right-pushadmin' => 'Авторизуйтесь чтобы изменять настройки и направления размещения.',
	'push-err-captacha' => 'Не удалось разместить на $1 из-за капчи.',
	'push-err-captcha-page' => 'Невозможно разместить страницу $1 по всем целям из-за CAPTCHA.',
	'push-err-authentication' => 'Сбой аутентификации в $1. $2',
	'push-tab-text' => 'Разместить',
	'push-button-text' => 'Поместить',
	'push-tab-desc' => 'Эта вкладка позволяет разместить текущею версию этой страницы на одну или нескольких других вики.',
	'push-button-pushing' => 'Размещение',
	'push-button-pushing-files' => 'Размещаемые файлы',
	'push-button-completed' => 'Размещение завершено',
	'push-button-failed' => 'Размещение не удалось',
	'push-tab-title' => 'Размещение $1',
	'push-targets' => 'Направление размещения',
	'push-add-target' => 'Добавить направление',
	'push-import-revision-message' => 'Размещено $2 из $1.',
	'push-tab-no-targets' => 'Отсутствует направления размещения. Пожалуйста, добавьте их в файл LocalSettings.php.',
	'push-tab-push-to' => 'Размещение на $1',
	'push-remote-pages' => 'Удалённые страницы',
	'push-remote-page-link' => '$1 на $2',
	'push-remote-page-link-full' => 'Просмотреть $1 на $2',
	'push-targets-total' => 'Всего $1 {{PLURAL:$1|направление|направления}}.',
	'push-button-all' => 'Разместить все',
	'push-tab-last-edit' => 'Последняя правка $1 $2 в $3.',
	'push-tab-not-created' => 'Этой страницы ещё не существует.',
	'push-tab-push-options' => 'Настройки размещения:',
	'push-tab-inc-templates' => 'Включать шаблоны',
	'push-tab-used-templates' => '({{PLURAL:$2|Шаблон|Шаблоны}}: $1)',
	'push-tab-no-used-templates' => '(На этой странице нет шаблонов)',
	'push-tab-inc-files' => 'Включать файлы',
	'push-tab-err-fileinfo' => 'Не удалось установить какие файлы используются на этой странице. Ни один не был размещён.',
	'push-tab-err-filepush-unknown' => 'сбой размещения файлов по неизвестной причине.',
	'push-tab-err-filepush' => 'Сбой размещения файла. $1',
	'special-push' => 'Разместить страницы',
	'push-special-description' => 'Эта страница позволяет разместить содержимое одной или нескольких страниц на одну или несколько других вики-сайтов на движке MediaWiki.

Для того, чтобы разместить страницы, введите названия в текстовом поле ниже, один заголовок на строку, и нажмите «Разместить все». Это может занять некоторое время.',
	'push-special-pushing-desc' => 'Размещение $2 {{PLURAL:$2|страницы|страниц}} на $1...',
	'push-special-button-text' => 'Разместить страницы',
	'push-special-target-is' => 'Целевой вики-сайт: $1',
	'push-special-select-targets' => 'Целевые вики-сайты:',
	'push-special-item-pushing' => '$1: Размещение',
	'push-special-item-completed' => '$1: Размещение завершено',
	'push-special-item-failed' => '$1: Размещение не удалось: $2',
	'push-special-push-done' => 'Размещение завершено',
	'push-special-err-token-failed' => 'Не удалось получить маркер редактирование на целевом вики-сайте.',
	'push-special-err-pageget-failed' => 'Не удалось получить локальное содержимое страницы.',
	'push-special-err-push-failed' => 'Целевой вики-сайт отказался разместить страницу.',
	'push-special-inc-files' => 'Включить файлы',
	'push-special-err-imginfo-failed' => 'Не удалось определить, есть ли файлы для размещения.',
	'push-special-obtaining-fileinfo' => '$1: Получение сведений о файлах…',
	'push-special-pushing-file' => '$1: Размещение файла $2…',
	'push-special-return' => 'Разместить другие страницы',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'push-import-revision-comment' => 'చివరి వ్యాఖ్య: $1',
	'push-special-target-is' => 'లక్ష్యిత వికీ: $1',
	'push-special-select-targets' => 'లక్ష్యిత వికీలు:',
);

