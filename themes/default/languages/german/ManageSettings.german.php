<?php
// Version: 1.1; ManageSettings

$txt['modSettings_desc'] = 'Hier kannst du grundsätzliche Einstellungen des Forums vornehmen. Für weitere Optionen, besuche die <a href="%1$s">Theme-Einstellungen</a>. Du kannst auch die kleinen Hilfe-Icons anklicken, um nähere Informationen zu einer Einstellung zu erhalten.';
$txt['security_settings_desc'] = 'Hier kannst du Einstellungen bezüglich der Moderation und der Sicherheit (inkl. Anti-Spam) in deinem Forum vornehmen.';
$txt['modification_settings_desc'] = 'Diese Seite enthält Einstellungen, die von Modifikationen zu deinem Forum hinzugefügt wurden.';

$txt['modification_no_misc_settings'] = 'Es sind keine Modifikationen installiert, die neue Einstellungen hinzugefügt haben.';

$txt['allow_guestAccess'] = 'Gästen das Anschauen des Forums erlauben';
$txt['userLanguage'] = 'Individuelle Benutzersprache erlauben';
$txt['allow_editDisplayName'] = 'Benutzern erlauben, den Anzeigenamen zu ändern';
$txt['allow_hideOnline'] = 'Benutzern erlauben, den Online-Status zu verbergen';
$txt['titlesEnable'] = 'Persönliche Titel aktivieren';
$txt['enable_buddylist'] = 'Freunde- und Ignorieren-Liste aktivieren';
$txt['default_personal_text'] = 'Persönlicher Text';
$txt['default_personal_text_note'] = 'Persönlicher Standardtext für neue Mitglieder.';
$txt['time_format'] = 'Voreingestelltes Zeitformat';
$txt['setting_time_offset'] = 'Globale Zeitabweichung';
$txt['setting_time_offset_note'] = '(Als benutzerspezifische Option)';
$txt['setting_default_timezone'] = 'Zeitzone des Servers';
$txt['failed_login_threshold'] = 'Max. fehlerhafte Anmelde-Versuche';
$txt['loginHistoryDays'] = 'Tage, um die Anmelde-Historie zu speichern';
$txt['lastActive'] = 'Zeit der Benutzeranzeige unter "Wer ist online?" (in Minuten)';
$txt['trackStats'] = 'Statistiken aktivieren';
$txt['hitStats'] = 'Seitenaufrufe zählen (setzt aktivierte Statistiken voraus)';
$txt['enableCompressedOutput'] = 'Komprimierte Ausgabe aktivieren';
$txt['databaseSession_enable'] = 'Datenbankgestützte Sitzungen benutzen';
$txt['databaseSession_loose'] = 'Browser darf Seiten zwischenspeichern';
$txt['databaseSession_lifetime'] = 'Zeit, bevor eine Sitzung abläuft (in Sekunden)';
$txt['enableErrorLogging'] = 'Fehlerprotokoll aktivieren';
$txt['enableErrorQueryLogging'] = 'Datenbankabfrage in das Fehlerprotokoll einfügen';
$txt['pruningOptions'] = 'Bereinigen von Protokolleinträgen aktivieren.';
$txt['pruneErrorLog'] = 'Lösche Fehlermeldungen älter als';
$txt['pruneModLog'] = 'Lösche Moderatoren-Einträge älter als';
$txt['pruneBanLog'] = 'Lösche Bann-Einträge älter als';
$txt['pruneReportLog'] = 'Lösche Moderatoren-Meldungen älter als';
$txt['pruneScheduledTaskLog'] = 'Lösche Task-Log-Einträge älter als';
$txt['pruneSpiderHitLog'] = 'Lösche Suchprotokoll-Einträge älter als';
$txt['pruneBadbehaviorLog'] = 'Lösche Bad Behaviour-Protokoll-Einträge älter als';
$txt['cookieTime'] = 'Gültigkeitsdauer des Login-Cookies in Minuten';
$txt['localCookies'] = 'Lokales Speichern von Cookies aktivieren';
$txt['localCookies_note'] = '(SSI wird damit möglicherweise nicht korrekt funktionieren)';
$txt['globalCookies'] = 'Subdomain-unabhängige Cookies aktiveren';
$txt['globalCookies_note'] = '(Zuerst lokale Cookies abschalten!)';
$txt['globalCookiesDomain'] = 'Hauptdomain für Subdomain-unbabhängige Cookies';
$txt['globalCookiesDomain_note'] = '(Aktiviere zuerst Subdomain-unabhängige Cookies!<br />Die Domain könnte z.B. "website.com" oder "website.de" sein, ohne http:// oder Slashes)';
$txt['invalid_cookie_domain'] = 'Die eingebebene Domain scheint ungültig zu sein, bitte überprüfen und erneut abspeichern.';
$txt['secureCookies'] = 'Erzwinge Cookie-Sicherheit';
$txt['secureCookies_note'] = '(nur notwendig, wenn HTTPS benutzt wird - andernfalls nicht aktivieren!)';
$txt['httponlyCookies'] = 'Erzwinge die Nutzung von Cookies über das HTTP-Protokoll';
$txt['httponlyCookies_note'] = '(Cookies werden nicht über Javascript nutzbar sein. Diese Einstellung kann helfen, XSS-Angriffe zu reduzieren)';
$txt['admin_session_lifetime'] = 'Anzahl an Minuten für eine aktive Adminsitzung';
$txt['auto_admin_session'] = 'Adminsitzung direkt mit dem Anmelden aktiveren';
$txt['securityDisable'] = 'Sicherheitsabfrage für das Admin-Portal deaktivieren';
$txt['securityDisable_moderate'] = 'Moderatoren-Sicherheit deaktivieren';
$txt['enableOTP'] = 'Enable two factor authentication (Time-based One-time Passwords)';
$txt['send_validation_onChange'] = 'Neues Passwort bei Änderung der E-Mail-Adresse senden';
$txt['approveAccountDeletion'] = 'Administrator muss dem Löschen des Benutzerkontos zustimmen';
$txt['autoOptMaxOnline'] = 'Maximale Anzahl der Online-Benutzer während der Optimierung';
$txt['autoFixDatabase'] = 'Automatisches Reparieren defekter Tabellen';
$txt['allow_disableAnnounce'] = 'Benutzer dürfen Benachrichtigungen bei Ankündigungen deaktivieren';
$txt['disallow_sendBody'] = 'Beitragstext in Benachrichtigungen verbieten';
$txt['jquery_source'] = 'Quelle für jQuery Javascript-Librabry';
$txt['jquery_local'] = 'Lokal';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Automatisch';
$txt['jquery_version'] = 'Bitte die detaillierte Version eingeben, z.B. 1.11.2';
$txt['jquery_default'] = 'Definiere die Version von jQuery, die ElkArte benutzen soll';
$txt['jqueryui_default'] = 'Definiere die Version von jQueryUI, die ElkArte benutzen soll';
$txt['jquery_custom_after'] = 'Lokale Kopie schaut nach jqeury-<strong>X.XX.X</strong>.min.js';
$txt['jqueryui_custom_after'] = 'Lokale Kopie schaut nach jqeuryui-<strong>X.XX.X</strong>.min.js';
$txt['minify_css_js'] = 'Komprimiere Javascript und CSS-Dateien';
$txt['clean_hives'] = 'Clear hive cache';
$txt['clean_hives_sucess'] = 'CSS and JS hives successfully deleted.';
$txt['clean_hives_failed'] = 'A problem occured, hives have not been deleted.';
$txt['enable_contactform'] = 'Aktiviere Kontaktformular';
$txt['contact_form_disabled'] = 'Deaktiviert';
$txt['contact_form_registration'] = 'Zeige nur bei der Registrierung';
$txt['contact_form_menu'] = 'Zeige im Menü';
$txt['queryless_urls'] = 'Suchmaschinenfreundliche URLs';
$txt['queryless_urls_note'] = 'nur Apache/Lighttpd';
$txt['queryless_urls_work'] = 'Diese Funktion wird von deinem Server unterstützt.';
$txt['queryless_urls_notwork'] = 'Diese Funktion wird von deinem Server nicht unterstützt.';
$txt['enableReportPM'] = 'Melden von Mitteilungen erlauben';
$txt['antispam_PM'] = 'Limit für Mitteilungen';
$txt['max_pm_recipients'] = 'Maximale Anzahl von Empfängern in einer Mitteilung';
$txt['max_pm_recipients_note'] = '(0 = kein Limit, gilt nicht für Administratoren)';
$txt['compactTopicPagesEnable'] = 'Kompakte Seitenanzeige aktivieren';
$txt['compactTopicPagesContiguous'] = 'Anzahl benachbarter Seiten anzeigen';
$txt['to_display'] = 'zeigt folgendes an';
$txt['todayMod'] = 'Heute-/Gestern-Anzeige aktivieren';
$txt['today_disabled'] = 'Deaktiviert';
$txt['today_only'] = 'Nur Heute';
$txt['yesterday_today'] = 'Heute und Gestern';
$txt['relative_time'] = 'Relative Zeitangaben';
$txt['onlineEnable'] = 'Online-/Offline-Status der Benutzer in Beiträgen und Mitteilungen anzeigen';
$txt['enableVBStyleLogin'] = 'vB-Style-Login aktivieren';
$txt['defaultMaxMembers'] = 'Anzahl der Benutzer pro Seite in der Benutzerliste';
$txt['displayMemberNames'] = 'Den Benutzernamen anstelle von "Mein Profil" auf dem Profil-Button anzeigen';
$txt['timeLoadPageEnable'] = 'Zeitmessung im Forum aktivieren';
$txt['disableHostnameLookup'] = 'Hostnamen-Suche deaktivieren';
$txt['who_enabled'] = '"Wer ist online?" aktivieren?';
$txt['settings_error'] = 'Warnung: Aktualisierung der Settings.php fehlgeschlagen, Datei konnte nicht gespeichert werden.';
$txt['core_settings_saved'] = 'Einstellungen erfolgreich gespeichert';
$txt['action'] = 'Current Action';

$txt['karmaMode'] = 'Karma-Modus';
$txt['karma_options'] = 'Karma deaktivieren | Karma Gesamtzahl aktivieren | Karma Positiv/Negativ aktivieren';
$txt['karmaMinPosts'] = 'Min. Anzahl an Beiträgen, um Karma ändern zu dürfen';
$txt['karmaWaitTime'] = 'Wartezeit (in Stunden)';
$txt['karmaTimeRestrictAdmins'] = 'Administratoren ebenfalls auf Wartezeit beschränken';
$txt['karmaDisableSmite'] = 'Disable the ability for members to smite';
$txt['karmaLabel'] = 'Karma: Anzeigenname';
$txt['karmaApplaudLabel'] = 'Karma: positive Stimme';
$txt['karmaSmiteLabel'] = 'Karma: negative Stimme';

$txt['likes_enabled'] = 'Gefällt mir aktivieren';
$txt['likeMinPosts'] = 'Minimale Anzahl an Beiträgen, die ein Benutzer haben muss bevor er Gefällt mir benutzen kann';
$txt['likeWaitTime'] = 'Wartezeit in Minuten';
$txt['likeWaitCount'] = 'Maximale Anzahl von Gefällt mir, die ein Benutzer innerhalb einer bestimmten Zeit geben kann';
$txt['likeRestrictAdmins'] = 'Administratoren ebenfalls begrenzen';
$txt['likeAllowSelf'] = 'Benutzern erlauben, eigene Beiträge mit Gefällt mir zu markieren';
$txt['likeDisplayLimit'] = 'Maximale Anzahl an Gefällt mir-Benutzern unterhalb des Beitrags, die angezeigt werden sollen (0 = kein Limit, -1 zum Deaktiveren).';

$txt['caching_information'] = 'ElkArte unterstützt das Caching mit folgenden PHP-Beschleunigern
<ul class="normallist">
	<li>APC</li>
	<li>eAccelerator</li>
	<li>Turck MMCache</li>
	<li>Memcached</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	<li>XCache</li>
</ul>
Caching wird am Besten funktionieren, wenn PHP mit einem der Beschleuniger kompiliert wurde, oder memcache verfügbar ist. Wenn keiner der gelisteten Beschleuniger aktiv ist wird er Dateisystem-Cache benutzt.';
$txt['detected_accelerators'] = '<strong class="success">Die folgenden Beschleuniger wurden erkannt: %1$s</strong>';

$txt['cache_enable'] = 'Cache-Level';
$txt['cache_off'] = 'Kein Cache';
$txt['cache_level1'] = 'Level 1 Cache';
$txt['cache_level2'] = 'Level 2 Cache (nicht empfehlenswert)';
$txt['cache_level3'] = 'Level 3 Cache (nicht empfehlenswert)';
$txt['cache_memcached'] = 'MemCache-Einstellungen';
$txt['cache_memcache'] = 'MemCache-Einstellungen';
$txt['cache_memcached_servers'] = '<br />Added servers:<ul class="bbc_list"><li>';
$txt['cache_accelerator'] = 'Beschleuniger';
$txt['cache_uid'] = 'Beschleuniger Benutzer-ID';
$txt['cache_password'] = 'Beschleuniger Kennwort';

$txt['loadavg_warning'] = '<span class="error">Achtung: Die folgenden Einstellungen sind mit Vorsicht zu genießen. Wenn eine Einstellung zu niedrig gewählt wird, könnte das <strong>Forum unbenutzbar</strong> werden!</span> Die aktuelle Auslastung ist <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Aktiviere die Lastverteilung nach Durchschnittslast';
$txt['loadavg_auto_opt'] = 'Schwellwert für die Deaktivierung automatischer Datenbankoptimierungen';
$txt['loadavg_search'] = 'Schwellwert zum Deaktivieren der Suche';
$txt['loadavg_allunread'] = 'Schwellwert für das Deaktivieren von ungelesenen Themen';
$txt['loadavg_unreadreplies'] = 'Schwellwert für das Deaktivieren ungelesener Antworten';
$txt['loadavg_show_posts'] = 'Schwellwert zum Deaktivieren der Anzeige von Benutzerbeiträgen';
$txt['loadavg_userstats'] = 'Schwelle zum Deaktivieren der Anzeige von Benutzerstatistiken';
$txt['loadavg_bbc'] = 'Schwelle zum deaktivieren von BBC, wenn Beiträge angezeigt werden';
$txt['loadavg_forum'] = 'Schwellwert zum <strong>vollständigen</strong> Deaktivieren des Forums';
$txt['loadavg_disabled_windows'] = '<span class="error">Der Lastausgleich ist für Windows nicht verfügbar.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">Der Lastausgleich ist durch deine Host-Konfiguration gesperrt.</span>';

$txt['setting_password_strength'] = 'Geforderte Stärke des Passwortes';
$txt['setting_password_strength_low'] = 'Niedrig: mind. 4 Zeichen';
$txt['setting_password_strength_medium'] = 'Mittel: darf keinen Benutzernamen enthalten';
$txt['setting_password_strength_high'] = 'Hoch: Mischung aus Buchstaben und Zahlen';
$txt['setting_enable_password_conversion'] = 'Kennwort-Hashes konvertieren';

$txt['antispam_Settings'] = 'Anti-Spam Verifizierung';
$txt['antispam_Settings_desc'] = 'Hier kannst du die Einstellungen der Verifizierungsfunktionen vornehmen und damit sicherstellen, dass der Benutzer ein Mensch und kein Spambot ist.';
$txt['setting_reg_verification'] = 'Benötigt Verifizierung bei der Registrierung';
$txt['posts_require_captcha'] = 'Mindestanzahl der Beiträge, unter welcher die Benutzer ihren Beitrag verifizieren müssen';
$txt['posts_require_captcha_desc'] = '(0 = kein Limit, Moderatoren sind ausgenommen)';
$txt['search_enable_captcha'] = 'Benötigt Verifizierung bei Suchanfragen von Gästen';
$txt['setting_guests_require_captcha'] = 'Beiträge von Gästen müssen verifiziert werden';
$txt['setting_guests_require_captcha_desc'] = '(Automatisch aktiv, wenn eine Mindestanzahl von Beiträgen eingestellt wurde)';
$txt['guests_report_require_captcha'] = 'Gäste müssen bei der Berichterstattung verifiziert werden';

$txt['badbehavior_title'] = 'Bad Behaviour-Einstellungen';
$txt['badbehavior_details'] = 'Details';
$txt['badbehavior_desc'] = 'Bad Behaviour wurde entwickelt, um auf frühestmöglicher Ebene das Forum vor Spam-Bots zu schützen und diese daran zu hindern, Formulare auszufüllen oder Benutzerdaten abzugreifen. Bad Behaviour blockiert außerdem Bots, die sich auf das Sammeln von E-Mail-Adressen spezialisiert haben und andere bösartige Tools und verbessert so die Sicherheit des Forums.';
$txt['badbehavior_wl_desc'] = 'Unnötiges Whitelisting sorgt für Spam oder führt sogar dazu, daß Bad Behaviour nicht mehr korrekt arbeiten kann. <strong>unnötiges Whitelisting</strong> sollte nur dann vorgenommen werden, wenn du 100% sicher bist , dass der Eintrag entsprechend notwendig ist.';
$txt['badbehavior_enabled'] = 'Aktiviere Bad Behaviour-Überprüfung';
$txt['badbehavior_enabled_desc'] = 'Aktivieren, um Bad Behavior-Schutz für diese Seite zu aktivieren.';
$txt['badbehavior_strict'] = 'Aktiviere den strikten Modus';
$txt['badbehavior_logging'] = 'Protokollierung aktivieren';
$txt['badbehavior_offsite_forms'] = 'Erlaube Offsite-Formulare';
$txt['badbehavior_verbose'] = 'Detaillierte Fehleranalyse aktiveren';
$txt['badbehavior_verbose_desc'] = 'Es wird empfohlen, die detaillierte Fehleranalyse zu deaktivieren.';
$txt['badbehavior_httpbl_key'] = 'http:BL API Key';
$txt['badbehavior_httpbl_key_invalid'] = 'Der eingegebene http:BL API Key ist ungültig';
$txt['badbehavior_httpbl_threat'] = 'http:BL Threat Level';
$txt['badbehavior_httpbl_threat_desc'] = '(Voreinstellung 25)';
$txt['badbehavior_httpbl_maxage'] = 'http:BL Max. Alter';
$txt['badbehavior_httpbl_maxage_desc'] = '(Voreingestellt 30)';
$txt['badbehavior_reverse_proxy'] = 'Aktiviere Reverse-Proxy';
$txt['badbehavior_reverse_proxy_header'] = 'Reverse-Proxy Header';
$txt['badbehavior_reverse_proxy_header_desc'] = '(default X-Forwarded-For)';
$txt['badbehavior_reverse_proxy_addresses'] = 'Reverse-Proxy Adressen';
$txt['badbehavior_default_on'] = '(Voreinstellung an)';
$txt['badbehavior_default_off'] = '(Voreinstellung aus)';
$txt['badbehavior_whitelist_title'] = 'Whitelist-Optionen';
$txt['badbehavior_postcount_wl'] = 'Whiteliste-Benutzer, die mehr als eine bestimmte Anzahl von Beiträgen haben';
$txt['badbehavior_postcount_wl_desc'] = '(0 = deaktiviert)';
$txt['badbehavior_ip_wl'] = 'Whitelist von bestimmten IP-Adressen';
$txt['badbehavior_ip_wl_desc'] = 'IP-Addresse (CIDR Format 127.0.0.1 oder 127.0.0.0/24)';
$txt['badbehavior_ip_wl_add'] = 'Weitere IP-Adresse hinzufügen';
$txt['badbehavior_useragent_wl'] = 'Whitelist für den User-Agenten';
$txt['badbehavior_useragent_wl_desc'] = 'Beispiel: Mozilla/4.0 (Ich bin\'s, lass mich rein)';
$txt['badbehavior_useragent_wl_add'] = 'Weiteren User-Agenten hinzufügen';
$txt['badbehavior_url_wl'] = 'Whitelisting mittels URL';
$txt['badbehavior_url_wl_desc'] = 'Beispiel: /subscriptions.php';
$txt['badbehavior_url_wl_add'] = 'Weitere URL hinzugügen';
$txt['badbehavior_wl_comment'] = 'Kommentar';

$txt['configure_emptyfield'] = 'Verifiziere "Leeres Feld"';
$txt['configure_emptyfield_desc'] = '<span class="smalltext">Unten kannst du die "Leeres Feld"-Verfizierung aktivieren. Das fügt ein leeres, unsichtbares Feld in das Registrierungsformular ein. Es ist eine weitere Möglichkeit, Spambots in eine Falle zu locken und sie an einer erfolgreichen Registrierung zu hindern.</span>';
$txt['enable_emptyfield'] = 'Aktivere "Leeres Feld"-Verifizierung';
$txt['configure_verification_means'] = 'Verifizierungsmethode konfigurieren';
$txt['setting_qa_verification_number'] = 'Anzahl der Verifizierungsfragen, die ein Benutzer beantworten muss';
$txt['setting_qa_verification_number_desc'] = '(0 = deaktiviert, Fragen werden unten eingegeben)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Hier kannst du einstellen, welche Anti-Spam-Funktionen bei einer Verifizierungsabfrage benutzt werden sollen. Beachte, dass der Benutzer <em>alle</em> Abfragen erfolgreich absolvieren muss, um fortzufahren.</span>';
$txt['configure_captcha'] = 'Verification CAPTCHA';
$txt['setting_visual_verification_num_chars'] = 'Anzahl der Zeichen im CAPTCHA-Bild';
$txt['setting_visual_verification_type'] = 'Visuelles Verifizierungsbild';
$txt['setting_visual_verification_type_desc'] = ' Je komplexer das Bild, desto schwieriger können Spambots die Verifizierung umgehen.';
$txt['setting_image_verification_off'] = 'Keine';
$txt['setting_image_verification_vsimple'] = 'Sehr einfach: nur Text auf dem Bild';
$txt['setting_image_verification_simple'] = 'Einfach: bunte, überlappende Buchstaben, kein Rauschen';
$txt['setting_image_verification_medium'] = 'Mittel: bunte, überlappende Buchstaben, mit Rauschen';
$txt['setting_image_verification_high'] = 'Hoch: gedrehte Buchstaben und starkes Rauschen';
$txt['setting_image_verification_extreme'] = 'Extrem: gedrehte Buchstaben, starkes Rauschen, Linien und Blöcke';
$txt['setting_image_verification_sample'] = 'Beispiel';
$txt['setup_verification_questions'] = 'Verifizierungsfragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Gebe in der folgenden Tabelle eine oder mehrere Fragen ein, wenn du diese zur Vermeidung von Spam von den Benutzern beantworten lassen möchtest. Du solltest relativ einfache Fragen wählen, die Antworten unterscheiden keine Groß- und Kleinschreibung. Um eine Frage zu entfernen, lösche einfach den Inhalt der kompletten Zeile.</span>';
$txt['setup_verification_question'] = 'Frage';
$txt['setup_verification_answer'] = 'Antwort';
$txt['setup_verification_add_more'] = 'Eine weitere Frage hinzufügen';
$txt['setup_verification_add_more_answers'] = 'Eine weitere Antwort hinzufügen';

$txt['moderation_settings'] = 'Moderationseinstellungen';
$txt['setting_warning_enable'] = 'Benutzer-Verwarnung aktivieren';
$txt['warning_enable'] = '<strong>Benutzer-Verwarnsystem</strong><br />. Diese Funktion gibt Moderatoren und Administratoren die Möglichkeit, Benutzern eine Verwarnung zu erteilen und dadurch das Verhalten der Benutzer zu kontrollieren. Wenn diese Funktion aktiviert wird, kann innerhalb der Berechtigungen definiert werden, welche Gruppen Verwarnungen an Benutzer austeilen können. Einzelne Verwarnstufen können innerhalb des jeweiligen Benutzerprofils gesetzt werden.';
$txt['setting_warning_watch'] = 'Warnungslevel für das Beobchten von Benutzern';
$txt['setting_warning_watch_note'] = 'Verwarnungslevel, ab dem der Benutzer beobachtet wird (0 = deaktiviert).';
$txt['setting_warning_moderate'] = 'Verwarnungslevel für die Beitragsmoderation';
$txt['setting_warning_moderate_note'] = 'Das Verwarnungslevel, ab dem alle Beiträge eine Benutzers moderiert werden (0 = deaktiviert).';
$txt['setting_warning_mute'] = 'Verwarnungslevel für die Stummschaltung des Benutzers';
$txt['setting_warning_mute_note'] = 'Verwarnungslevel, ab dem der Benutzer keine Beiträge mehr schreiben kann (0 = deaktiviert).';
$txt['setting_user_limit'] = 'Max. Verwarnungspunkte für einen Benutzer pro Tag';
$txt['setting_user_limit_note'] = 'Max. Anzahl an Punkten, die ein einzelner Moderator einem Benutzer in 24 Stunden geben kann (0 = deaktiviert).';
$txt['setting_warning_decrement'] = 'Anzahl der Verwarnungspunkte, die alle 24 Stunden abgezogen werden sollen';
$txt['setting_warning_decrement_note'] = 'Zählt nur für Benutzer, die in den letzten 24 Stunden nicht verwarnt worden sind (0 = deaktiviert).';
$txt['setting_warning_show'] = 'Benutzer, welche den Verwarnungslevel sehen können';
$txt['setting_warning_show_note'] = 'Gibt an, wer den Verwarnungslevel von Benutzern in diesem Forum sehen kann.';
$txt['setting_warning_show_mods'] = 'Nur Moderatoren';
$txt['setting_warning_show_user'] = 'Moderatoren und verwarnte Benutzer';
$txt['setting_warning_show_all'] = 'Alle Benutzer';

$txt['signature_settings'] = 'Signatureinstellungen';
$txt['signature_settings_desc'] = 'Hier kannst du die Einstellungen für die Benutzersignaturen bestimmen.';
$txt['signature_settings_warning'] = 'Beachte, dass sich Änderungen nicht automatisch auf bereits existierende Signaturen auswirken. Klicke auf "Los", um auch existierende Signaturen so zu überarbeiten, dass sie den unten gemachten Angaben entsprechen.<br /><br /><a class="button_submit" href="%1$s">Los!</a>';
$txt['signature_settings_applied'] = 'Die neuen Regeln wurden auf alle existierenden Signaturen angewandt.';
$txt['signature_enable'] = 'Signaturen aktivieren';
$txt['signature_repetition_guests'] = 'Show signatures to guests:';
$txt['signature_repetition_members'] = 'Show signatures to members:';
$txt['signature_always'] = 'Immer';
$txt['signature_onlyfirst'] = 'Only the first of each member';
$txt['signature_never'] = 'Nie';
$txt['signature_max_length'] = 'Max. Anzahl an Zeichen';
$txt['signature_max_lines'] = 'Max. Anzahl an Zeilen';
$txt['signature_max_images'] = 'Max. Anzahl an Bildern';
$txt['signature_max_images_note'] = '(0 = kein Limit, Smileys sind ausgenommen)';
$txt['signature_allow_smileys'] = 'Erlaube Smileys in Signaturen';
$txt['signature_max_smileys'] = 'Max. Anzahl an Smileys';
$txt['signature_max_image_width'] = 'Max. Breite der Bilder in der Signatur (Pixel)';
$txt['signature_max_image_height'] = 'Max. Höhe der Bilder in der Signatur (Pixel)';
$txt['signature_max_font_size'] = 'Max. Schriftgröße in der Signatur';
$txt['signature_bbc'] = 'Aktivierte BBC-Tags';

$txt['groups_pm_send'] = 'Benutzergruppen, die Mitteilungen schicken dürfen';
$txt['pm_posts_verification'] = 'Anzahl der Beiträge, unter welcher die Benutzer beim Versenden von Mitteilungen einen Code eingeben müssen';
$txt['pm_posts_verification_note'] = '(0 = kein Limit, Administratoren sind ausgenommen)';
$txt['pm_posts_per_hour'] = 'Anzahl der Mitteilungen, welche die Benutzer pro Stunde versenden dürfen';
$txt['pm_posts_per_hour_note'] = '(0 = kein Limit, Moderatoren sind ausgenommen)';

$txt['custom_profile_title'] = 'Benutzerdefinierte Profilfelder';
$txt['custom_profile_desc'] = 'Hier kannst du deine eigenen Profilfelder für dein Forum erstellen';
$txt['custom_profile_active'] = 'Aktiv';
$txt['custom_profile_order'] = 'Reihenfolge der Felder';
$txt['custom_profile_fieldname'] = 'Feldname';
$txt['custom_profile_fieldtype'] = 'Feldtyp';
$txt['custom_profile_make_new'] = 'Neues Feld';
$txt['custom_profile_none'] = 'Du hast noch keine benutzerdefinierten Profilfelder erstellt.';
$txt['custom_profile_icon'] = 'Symbol';
$txt['custom_profile_sort'] = 'Um die Reihenfolge der benutzerdefinierten Profilfelder zu ändern, einfach das Feld mit der Maus greifen und ziehen, dann an der entsprechenden Stelle wieder loslassen.';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_url'] = 'URL';
$txt['custom_profile_type_date'] = 'Datum';
$txt['custom_profile_type_email'] = 'E-Mail-Adresse';
$txt['custom_profile_type_color'] = 'Farbe';
$txt['custom_profile_type_textarea'] = 'Textblock';
$txt['custom_profile_type_select'] = 'Auswahlliste';
$txt['custom_profile_type_radio'] = 'Radio-Button';
$txt['custom_profile_type_check'] = 'Auswahlbox';
$txt['custom_profile_reordered'] = 'Profilfelder erfolgreich umsortiert.';

$txt['custom_add_title'] = 'Profilfeld hinzufügen';
$txt['custom_edit_title'] = 'Profilfeld editieren';
$txt['custom_edit_general'] = 'Anzeigeeinstellungen';
$txt['custom_edit_input'] = 'Eingabeeinstellungen';
$txt['custom_edit_advanced'] = 'Erweiterte Einstellungen';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Beschreibung';
$txt['custom_edit_profile'] = 'Profilabschnitt';
$txt['custom_edit_profile_desc'] = 'Wird im gewählten Abschnitt des Profils angelegt.';
$txt['custom_edit_profile_none'] = 'Keine';
$txt['custom_edit_registration'] = 'Bei der Registrierung anzeigen';
$txt['custom_edit_registration_disable'] = 'Nein';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, muss ausgefüllt werden';
$txt['custom_edit_display'] = 'In der Themenansicht anzeigen';
$txt['custom_edit_memberlist'] = 'Benutzerliste anzeigen';
$txt['custom_edit_picktype'] = 'Feldtyp';

$txt['custom_edit_max_length'] = 'Max. Länge';
$txt['custom_edit_max_length_desc'] = '(0 = kein Limit)';
$txt['custom_edit_dimension'] = 'Größe';
$txt['custom_edit_dimension_row'] = 'Zeilen';
$txt['custom_edit_dimension_col'] = 'Spalten';
$txt['custom_edit_bbc'] = 'BBC erlauben';
$txt['custom_edit_options'] = 'Optionen';
$txt['custom_edit_options_desc'] = 'Textfeld leer lassen, um es zu entfernen. Auswahl definiert den Standard.';
$txt['custom_edit_options_more'] = 'Mehr';
$txt['custom_edit_options_no_default'] = 'Ohne Default-Wert.';
$txt['custom_edit_default'] = 'Default-Status';
$txt['custom_edit_default_value'] = 'Default Value';
$txt['custom_edit_active'] = 'Aktiv';
$txt['custom_edit_active_desc'] = 'Wenn diese Option nicht aktiviert ist, wird das Feld keinem Benutzer angezeigt.';
$txt['custom_edit_privacy'] = 'Privatsphäre';
$txt['custom_edit_privacy_desc'] = 'Bestimmt, wer das Feld sehen und editieren kann.';
$txt['custom_edit_privacy_all'] = 'Benutzer kann das Feld sehen; Eigentümer kann es editieren';
$txt['custom_edit_privacy_see'] = 'Benutzer kann das Feld sehen; Administrator kann es editieren';
$txt['custom_edit_privacy_owner'] = 'Benutzer können dieses Feld nicht sehen; Inhaber und Administratoren können es editieren.';
$txt['custom_edit_privacy_none'] = 'Das Feld ist nur für Administratoren sichtbar';
$txt['custom_edit_can_search'] = 'Durchsuchbar';
$txt['custom_edit_can_search_desc'] = 'Das Feld kann von der Benutzerliste aus durchsucht werden.';
$txt['custom_edit_mask'] = 'Eingabemaske';
$txt['custom_edit_mask_desc'] = 'Für Textfelder kann eine Eingabemaske gewählt werden, um die Daten zu überprüfen.';
$txt['custom_edit_mask_email'] = 'Gültige E-Mail-Adresse';
$txt['custom_edit_mask_number'] = 'Numerisch';
$txt['custom_edit_mask_nohtml'] = 'kein HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Erweitert)';
$txt['custom_edit_enclose'] = 'Benutzereingaben einschließen (optional)';
$txt['custom_edit_enclose_desc'] = 'Wir empfehlen <strong>dringend</strong> die Verwendung einer Eingabemaske zum Validieren der Eingaben von Benutzern.';

$txt['custom_edit_placement'] = 'Platzierung';
$txt['custom_edit_placement_standard'] = 'Standard (mit Titel)';
$txt['custom_edit_placement_withicons'] = 'bei den Symbolen';
$txt['custom_edit_placement_abovesignature'] = 'über der Signatur';
$txt['custom_edit_placement_aboveicons'] = 'Above Icons (no title)';
$txt['custom_profile_placement'] = 'Platzierung';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'bei den Symbolen';
$txt['custom_profile_placement_abovesignature'] = 'über der Signatur';
$txt['custom_profile_placement_aboveicons'] = 'Above Icons';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Bist du sicher, dass du dieses Feld löschen möchtest? Alle relevanten Benutzerdaten werden verloren gehen!';

$txt['standard_profile_title'] = 'Standard-Profilfelder';
$txt['standard_profile_field'] = 'Feld';

$txt['core_settings_welcome_msg'] = 'Willkommen in deinem neuen Forum';
$txt['core_settings_welcome_msg_desc'] = 'Um einen Anfang zu finden, empfehlen wir dir die Aktivierung einiger Kernfunktionen von ElkArte. Bitte aktiviere anfangs nur die Funktionen, die du brauchst, um eine Überflutung mit Einstellmöglichkeiten zu verhindern!'; // don't scream from the beginning :P
$txt['core_settings_item_cd'] = 'Kalender';
$txt['core_settings_item_cd_desc'] = 'Wenn du diese Funktion aktivierst, können die Benutzer den Kalender anschauen, neue Ereignisse hinzufügen bzw. vorhandene Ereignisse editieren, die Geburtstage anderer Benutzer sehen und vieles mehr.';
$txt['core_settings_item_dr'] = 'Entwürfe';
$txt['core_settings_item_dr_desc'] = 'Diese Funktion erlaubt es dem Benutzer, Entwürfe von Beiträgen zu speichern, um diese später fertigzustellen.';
$txt['core_settings_item_cp'] = 'Benutzerdefinierte Profilfelder';
$txt['core_settings_item_cp_desc'] = 'Diese Funktion erlaubt das Verstecken von Standard-Profilfeldern und das Hinzufügen von neuen Feldern zur Registrierung bzw. dem Benutzerprofil.';
$txt['core_settings_item_ih'] = 'Sprungmarke-Management / Integration Hooks';
$txt['core_settings_item_ih_desc'] = 'Diese Funktion erlaubt es dir, Sprungmarken, die von Modifikationen genutzt werden, zu aktiveren oder zu deaktivieren. Vorsicht: Das Aktivieren oder Deaktivieren kann zu Beeinträchtigung des Forumbetriebs führen.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma zeigt die Beliebtheit eines Benutzers im Forum an. Benutzer können, wenn erlaubt, andere Benutzer positiv oder negativ bewerten, was Auswirkungen auf deren Beliebtheit im Forum haben kann. Das Karma ist also mit Vorsicht zu verwenden und kann u.U. den Forumfrieden stören!';
$txt['core_settings_item_pe'] = 'Antwort per E-Mail schreiben';
$txt['core_settings_item_pe_desc'] = 'Diese Funktion erlaub es den Benutzern, auf E-Mail-Benachrichtigungen über Beiträge und Mitteilungen direkt zu antworten, ähnlich der Funktion einer Mailing-Liste. Antworten auf E-Mails werden direkt in Beiträge und Mitteilungen umgewandelt. Achtung: Hierfür sind serverseitig spezielle Einstellungen notwendig!';
$txt['core_settings_item_l'] = 'Gefällt mir';
$txt['core_settings_item_l_desc'] = '"Gefällt mir" ist eine Funktion, die es den Benutzer erlaubt, Beiträge mit "Gefällt mir" und "Gefällt mir nicht mehr" zu markieren.';
$txt['core_settings_item_ml'] = 'Moderatoren-Protokoll';
$txt['core_settings_item_ml_desc'] = 'Aktiviere das Moderatoren-Protokoll, um einen Überblick über die durchgeführten Aktionen der Moderatoren zu erhalten.';
$txt['core_settings_item_pm'] = 'Beitragsmoderation';
$txt['core_settings_item_pm_desc'] = 'Die Beitragsmoderation erlaubt dir, bestimmte Gruppen oder Boards anzugeben, in denen alle Beiträge zunächst genehmigt werden müssen, bevor sie veröffentlicht werden. Nachdem du diese Funktion aktiviert hast, solltest du die entsprechenden Berechtigungen setzen.';
$txt['core_settings_item_ps'] = 'Bezahlte Abonnements';
$txt['core_settings_item_ps_desc'] = 'Bezahlte Abonnements erlauben den Benutzern, in eine andere Benutzergruppe zu wechseln und ihre Rechte zu erweitern.';
$txt['core_settings_item_rg'] = 'Berichte erstellen';
$txt['core_settings_item_rg_desc'] = 'Diese Funktion erlaubt das Erstellen von verschiedenen (druckbaren) Berichten, welche die Konfiguration des Forums oder die Vergabe der Berechtigungen einfach veranschaulicht - sehr hilfreich gerade bei großen Foren!';
$txt['core_settings_item_sp'] = 'Verfolgung von Suchmaschinenbots';
$txt['core_settings_item_sp_desc'] = 'Wenn du diese Funktion aktivierst, kannst du als Administrator die Wege der Suchmaschinenbots verfolgen, die dein Forum indexieren.';
$txt['core_settings_item_w'] = 'Verwarnungssystem';
$txt['core_settings_item_w_desc'] = 'Diese Funktion erlaubt den Administratoren und Moderatoren des Forums, Benutzer zu verwarnen und ihnen mit steigendem Verwarnungslevel verschiedene Berechtigungen zu entziehen. Um die volle Funktion zu gewährleisten, empfiehlt sich das Aktivieren der Beitragsmoderation.';
$txt['core_settings_switch_on'] = 'Zum Aktivieren klicken';
$txt['core_settings_switch_off'] = 'Zum Deaktivieren klicken';
$txt['core_settings_enabled'] = 'Aktiviert';
$txt['core_settings_disabled'] = 'Deaktiviert';

$txt['languages_lang_name'] = 'Name der Sprache';
$txt['languages_locale'] = 'Kürzel';
$txt['languages_default'] = 'Standard';
$txt['languages_users'] = 'Benutzer';
$txt['language_settings_writable'] = 'Achtung: Die Datei "Settings.php" kann nicht überschrieben werden! Daher kann die Änderung der Standardsprache nicht gespeichert werden.';
$txt['edit_languages'] = 'Sprache editieren';
$txt['lang_file_not_writable'] = '<strong>Achtung:</strong> Die primäre Sprachdatei "%1$s" kann nicht überschrieben werden. Du musst erst den Schreibschutz entfernen, bevor du Änderungen vornehmen kannst.';
$txt['lang_entries_not_writable'] = '<strong>Achtung:</strong> Die Sprachdatei "%1$s", die du editieren möchtest, kann nicht überschrieben werden! du musst erst den Schreibschutz entfernen, bevor du Änderungen vornehmen kannst.';
$txt['languages_ltr'] = 'Rechts nach Links';

$txt['add_language'] = 'Sprache hinzufügen';
$txt['add_language_elk'] = 'Von ElkArte weitere Sprachen herunterladen';
$txt['add_language_elk_browse'] = 'Gebe den Namen der zu suchenden Sprache ein oder lasse das Feld leer, um alle Sprachen anzuzeigen.';
$txt['add_language_elk_install'] = 'Installieren';
$txt['add_language_elk_found'] = 'Folgende Sprachen wurden gefunden. Klicke auf "Installieren", um die Sprache zu installieren. Du wirst danach zum Paketmanager weitergeleitet.';
$txt['add_language_error_no_response'] = 'Die ElkArte-Seite reagiert nicht. Bitte versuche es später noch einmal.';
$txt['add_language_error_no_files'] = 'Keine Dateien gefunden.';
$txt['add_language_elk_desc'] = 'Beschreibung';
$txt['add_language_elk_utf8'] = 'UTF-8';
$txt['add_language_elk_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Nachfolgend die primären Einstellungen für dieses Sprachpaket:';
$txt['edit_language_entries'] = 'Spracheinträge editieren';
$txt['edit_language_entries_file'] = 'Einträge zum Editieren auswählen';
$txt['languages_dictionary'] = 'Wörterbuch';
$txt['languages_spelling'] = 'Rechtschreibung';
$txt['languages_for_pspell'] = 'Dies ist für <a href="http://www.php.net/function.pspell-new" alt="*" target="_blank">pSpell</a> - Sofern installiert';
$txt['languages_rtl'] = '"Rechts nach Links"-Modus aktivieren';

$txt['lang_file_desc_index'] = 'Generelle Spracheinträge';
$txt['lang_file_desc_EmailTemplates'] = 'E-Mail-Vorlagen';

$txt['languages_download'] = 'Sprachpaket herunterladen';
$txt['languages_download_note'] = 'Diese Seite listet alle Dateien des Sprachpaketes mit zusätzlichen Informationen auf. Alle markierten Dateien werden kopiert.';
$txt['languages_download_info'] = '<strong>Hinweis:</strong>
<ul class="normallist">
	<li>Alle Dateien mit dem Status "Nicht beschreibbar" können vom System nicht in das Verzeichnis kopiert werden. Bitte mache das Ziel mit einem FTP-Programm beschreibbar oder trage die Daten unten ein.</li>
	<li>Die Versionsinformation jeder Datei zeigt die ElkArte-Version an, für die sie als letztes aktualisiert wurde. Sollte diese Angabe in grün erscheinen, ist die Datei neuer als die zurzeit installierte Version; Gelb signalisiert eine gleiche Version; Rot zeigt an, dass bereits eine neuere Version der Datei lokal vorhanden ist (neuer als die die im Paket vorhandene).</li>
	<li>Wenn eine Datei in deinem Forum bereits existiert, hat die Spalte "Existiert bereits" einen von zwei Werten: "Identisch" zeigt an, dass die Datei gleich ist und nicht überschrieben werden muss; "Unterschiedlich" sagt aus, dass die Datei sich unterscheidet und ein Überschreiben hier wahrscheinlich die beste Lösung ist.</li>
</ul>';

$txt['languages_download_main_files'] = 'Primäre Dateien';
$txt['languages_download_theme_files'] = 'Theme-zugehörige Dateien';
$txt['languages_download_filename'] = 'Dateiname';
$txt['languages_download_dest'] = 'Ziel';
$txt['languages_download_writable'] = 'Beschreibbar';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'Du hast eine neuere Version dieser Datei bereits installiert. Das Überschreiben der Datei wird nicht empfohlen!';
$txt['languages_download_exists'] = 'Bereits vorhanden';
$txt['languages_download_exists_same'] = 'Identisch';
$txt['languages_download_exists_different'] = 'Verschieden';
$txt['languages_download_copy'] = 'Kopie';
$txt['languages_download_not_chmod'] = 'Du kannst mit der Installation nicht fortfahren, bis alle markierten Dateien überschreibbar sind.';
$txt['languages_download_illegal_paths'] = 'Das Paket enthält einen ungültigen Pfad - bitte kontaktieren Sie das ElkArte-Team.';
$txt['languages_download_complete'] = 'Installation erfolgreich';
$txt['languages_download_complete_desc'] = 'Das Sprachpaket wurde erfolgreich installiert. Bitte klicke <a href="%1$s">hier</a>, um zur Sprachseite zurückzukehren.';
$txt['languages_delete_confirm'] = 'Bist du sicher, dass du diese Sprache löschen möchtest?';

$txt['setting_frame_security'] = 'Frame Security-Optionen';
$txt['setting_frame_security_SAMEORIGIN'] = 'Erlaube gleiche Herkunft';
$txt['setting_frame_security_DENY'] = 'Verbiete alle Frames';
$txt['setting_frame_security_DISABLE'] = 'Deaktiviert';
