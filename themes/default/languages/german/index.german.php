<?php
// Version: 1.1; index

global $forum_copyright;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'de_DE.utf8';
$txt['lang_dictionary'] = 'de';
$txt['lang_spelling'] = 'deutsch';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;
// Number format.
$txt['number_format'] = '1.234,00';

$txt['sunday'] = 'Sonntag';
$txt['monday'] = 'Montag';
$txt['tuesday'] = 'Dienstag';
$txt['wednesday'] = 'Mittwoch';
$txt['thursday'] = 'Donnerstag';
$txt['friday'] = 'Freitag';
$txt['saturday'] = 'Samstag';

$txt['sunday_short'] = 'So';
$txt['monday_short'] = 'Mo';
$txt['tuesday_short'] = 'Di';
$txt['wednesday_short'] = 'Mi';
$txt['thursday_short'] = 'Do';
$txt['friday_short'] = 'Fr';
$txt['saturday_short'] = 'Sa';

$txt['january'] = 'Januar';
$txt['february'] = 'Februar';
$txt['march'] = 'März';
$txt['april'] = 'April';
$txt['may'] = 'Mai';
$txt['june'] = 'Juni';
$txt['july'] = 'Juli';
$txt['august'] = 'August';
$txt['september'] = 'September';
$txt['october'] = 'Oktober';
$txt['november'] = 'November';
$txt['december'] = 'Dezember';

$txt['january_titles'] = 'Januar';
$txt['february_titles'] = 'Februar';
$txt['march_titles'] = 'März';
$txt['april_titles'] = 'April';
$txt['may_titles'] = 'Mai';
$txt['june_titles'] = 'Juni';
$txt['july_titles'] = 'Juli';
$txt['august_titles'] = 'August';
$txt['september_titles'] = 'September';
$txt['october_titles'] = 'Oktober';
$txt['november_titles'] = 'November';
$txt['december_titles'] = 'Dezember';

$txt['january_short'] = 'Jan';
$txt['february_short'] = 'Feb';
$txt['march_short'] = 'Mär';
$txt['april_short'] = 'Apr';
$txt['may_short'] = 'Mai';
$txt['june_short'] = 'Jun';
$txt['july_short'] = 'Jul';
$txt['august_short'] = 'Aug';
$txt['september_short'] = 'Sep';
$txt['october_short'] = 'Okt';
$txt['november_short'] = 'Nov';
$txt['december_short'] = 'Dez';

$txt['time_am'] = 'vormittags';
$txt['time_pm'] = 'nachmittags';

// Let's get all the main menu strings in one place.
$txt['home'] = 'Home';
$txt['community'] = 'Forum';
// Sub menu labels
$txt['help'] = 'Hilfe';
$txt['search'] = 'Suche';
$txt['calendar'] = 'Kalender';
$txt['members'] = 'Benutzer';
$txt['recent_posts'] = 'Neueste Beiträge';

$txt['admin'] = 'Admin';
// Sub menu labels
$txt['errlog'] = 'Fehlerprotokoll';
$txt['package'] = 'Paketmanager';
$txt['edit_permissions'] = 'Berechtigungen';
$txt['modSettings_title'] = 'Funktionen & Optionen';

$txt['moderate'] = 'Moderiere';
// Sub menu labels
$txt['modlog_view'] = 'Moderator-Protokoll';
$txt['mc_emailerror'] = 'Nicht überprüfte E-Mails';
$txt['mc_reported_posts'] = 'Gemeldete Beiträge';
$txt['mc_reported_pms'] = 'Reported Personal Messages';
$txt['mc_unapproved_attachments'] = 'Nicht genehmigte Anhänge';
$txt['mc_unapproved_poststopics'] = 'Nicht genehmigte Themen und Beiträge';

$txt['pm_short'] = 'Mitteilungen';
// Sub menu labels
$txt['pm_menu_read'] = 'Mitteilungen anschauen';
$txt['pm_menu_send'] = 'Neue Mitteilung verfassen';

$txt['account_short'] = 'Mein Konto';
// Sub menu labels
$txt['profile'] = 'Profil';
$txt['mydrafts'] = 'My Drafts';
$txt['summary'] = 'Zusammenfassung';
$txt['theme'] = 'Design & Layout';
$txt['account'] = 'Benutzerkonto';
$txt['forumprofile'] = 'Forumprofil';

$txt['view_unread_category'] = 'Neue Beiträge';
$txt['view_replies_category'] = 'Neue Antworten';

$txt['login'] = 'Anmelden';
$txt['register'] = 'Registrieren';
$txt['logout'] = 'Abmelden';
// End main menu strings.

$txt['save'] = 'Speichern';

$txt['modify'] = 'Ändern';
$txt['forum_index'] = '%1$s - Index';
$txt['board_name'] = 'Boardname';
$txt['posts'] = 'Beiträge';

$txt['member_postcount'] = 'Beiträge';
$txt['no_subject'] = '(Kein Betreff)';
$txt['view_profile'] = 'Profil anzeigen';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Autor';
$txt['on'] = 'am';
$txt['remove'] = 'Löschen';
$txt['start_new_topic'] = 'Neues Thema starten';

// Use numeric entities in the below string.
$txt['username'] = 'Benutzername';
$txt['password'] = 'Passwort';

$txt['username_no_exist'] = 'Benutzername ist nicht vorhanden.';
$txt['no_user_with_email'] = 'Es ist kein Benutzername mit dieser E-Mail-Adresse verknüpft.';

$txt['board_moderator'] = 'Moderator';
$txt['remove_topic'] = 'Löschen';
$txt['topics'] = 'Themen';
$txt['modify_msg'] = 'Beitrag editieren';
$txt['name'] = 'Name';
$txt['email'] = 'E-Mail-Adresse';
$txt['user_email_address'] = 'E-Mail-Adresse';
$txt['subject'] = 'Betreff';
$txt['message'] = 'Beitrag';
$txt['redirects'] = 'Umleitungen';

$txt['choose_pass'] = 'Passwort';
$txt['verify_pass'] = 'Passwort wiederholen';
$txt['position'] = 'Position';
$txt['notify_announcements'] = 'Sign up to receive important site news by email';

$txt['profile_of'] = 'Profil anzeigen von';
$txt['total'] = 'Gesamt';
$txt['posts_made'] = 'Beiträge';
$txt['topics_made'] = 'Themen';
$txt['website'] = 'Website';
$txt['contact'] = 'Kontakt';
$txt['warning_status'] = 'Verwarnungsstatus';
$txt['user_warn_watch'] = 'Benutzer wird derzeit beobachtet';
$txt['user_warn_moderate'] = 'Beiträge des Benutzers werden moderiert';
$txt['user_warn_mute'] = 'Benutzer darf nicht schreiben';
$txt['warn_watch'] = 'Beobachtet';
$txt['warn_moderate'] = 'Moderiert';
$txt['warn_mute'] = 'Passiv';
$txt['warning_issue'] = 'Verwarnen';

$txt['message_index'] = 'Themen-Index';
$txt['news'] = 'Neu';
$txt['page'] = 'Seite';
$txt['prev'] = 'Zurück';
$txt['next'] = 'Weiter';

$txt['post'] = 'Schreiben';
$txt['error_occurred'] = 'Ein Fehler ist aufgetreten!';
$txt['send_error_occurred'] = 'Ein Fehler ist aufgetreten, <a href="{href}">bitte klicke hier, um es erneut zu versuchen.</a>';
$txt['require_field'] = 'Dieses Feld wird benötigt.';
$txt['started_by'] = 'Gestartet von';
$txt['topic_started_by'] = 'Gestartet von %1$s';
$txt['topic_started_by_in'] = 'Gestartet von %1$s in %2$s';
$txt['replies'] = 'Antworten';
$txt['last_post'] = 'Aktualität';
$txt['first_post'] = 'Reihenfolge';
$txt['last_poster'] = 'Antwort von';

// @todo - Clean this up a bit. See notes in template.
// Just moved a space, so the output looks better when things break to an extra line.
$txt['last_post_message'] = 'Neuester Beitrag: %2$s<br />%3$s von %1$s';
$txt['boardindex_total_posts'] = '%1$s Beiträge in %2$s Themen von %3$s Benutzern';
$txt['show'] = 'Zeigen';
$txt['hide'] = 'Verstecken';
$txt['sort_by'] = 'Sortieren nach';
$txt['sort_asc'] = 'Sortiere aufsteigend';
$txt['sort_desc'] = 'Sortiere absteigend';

$txt['admin_login'] = 'Administratives Anmelden';
// Use numeric entities in the below string.
$txt['topic'] = 'Thema';
$txt['help'] = 'Hilfe';
$txt['notify'] = 'Abonnieren';
$txt['unnotify'] = 'Abbestellen';
$txt['notify_request'] = 'Möchtest du eine Benachrichtigung per E-Mail erhalten, wenn eine Antwort in diesem Thema geschrieben wird?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Grüße, das Team von {forum_name}.";
$txt['notify_replies'] = 'Benachrichtigen';
$txt['move_topic'] = 'Verschieben';
$txt['move_to'] = 'Verschieben nach';
$txt['pages'] = 'Seiten';
$txt['users_active'] = 'Aktiv in den letzten %1$d Minuten';
$txt['personal_messages'] = 'Private Mitteilungen';
$txt['reply_quote'] = 'Zitieren';
$txt['reply'] = 'Antworten';
$txt['reply_number'] = 'Antwort #%1$s';
$txt['approve'] = 'Stimme zu';
$txt['unapprove'] = 'Nicht freigeben';
$txt['approve_all'] = 'Alle genehmigen';
$txt['awaiting_approval'] = 'Benötigt Genehmigung';
$txt['attach_awaiting_approve'] = 'Anhänge benötigen Genehmigung';
$txt['post_awaiting_approval'] = 'Achtung - Dieser Beitrag benötigt zunächst eine Genehmigung.';
$txt['there_are_unapproved_topics'] = '%1$s Themen und %2$s Beiträge warten auf Genehmigung. <a href="%3$s">Bitte hier klicken</a>.';
$txt['send_message'] = 'Schreiben';

$txt['msg_alert_no_messages'] = 'Du hast keine ungelesenen Nachrichten';
$txt['msg_alert_one_message'] = 'Du hast <a href="%1$s">1 ungelesene Nachricht</a>';
$txt['msg_alert_many_message'] = 'Du hast <a href="%1$s">%2$d ungelesene Nachrichten</a>';
$txt['msg_alert_one_new'] = '1 ist neu';
$txt['msg_alert_many_new'] = '%1$d sind neu';
$txt['remove_message'] = 'Mitteilung löschen';

$txt['topic_alert_none'] = 'Neue Beiträge & Antworten';
$txt['pm_alert_none'] = 'Keine Mitteilungen.';

$txt['online_users'] = 'Benutzer online'; //Deprecated
$txt['online_now'] = 'Gerade online';
$txt['personal_message'] = 'Mitteilung';
$txt['jump_to'] = 'Gehe zu';
$txt['go'] = 'Los';
$txt['are_sure_remove_topic'] = 'Bist du sicher, dass du dieses Thema löschen möchtest?';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

// @todo this string seems a good candidate for deprecation
$txt['search_on'] = 'am';

$txt['search'] = 'Suche';
$txt['all'] = 'Alle';
$txt['search_entireforum'] = 'Ganzes Forum';
$txt['search_thisbrd'] = 'Dieses Board';
$txt['search_thistopic'] = 'Dieses Thema';
$txt['search_members'] = 'Benutzer';

$txt['back'] = 'Zurück';
$txt['continue'] = 'Weiter';
$txt['password_reminder'] = 'Passwort-Erinnerung';
$txt['topic_started'] = 'Thema gestartet von';
$txt['title'] = 'Titel';
$txt['post_by'] = 'Beitrag von';
$txt['welcome_newest_member'] = 'Bitte heiße %1$s, unser neuestes Mitglied, willkommen.';
$txt['admin_center'] = 'Administrations-Center';
$txt['admin_session_active'] = 'Du hast derzeit eine aktive Admin-Sitzung. Wir empfehlen <strong><a class="strong" href="%1$s">diese Sitzung zu beenden</a></strong>, wenn du mit deinen administrativen Tätigkeiten fertig bist.';
$txt['admin_maintenance_active'] = 'Dein Forum läuft zur Zeit im Wartungsmodus, nur Administratoren können sich anmelden. Denke daran, <strong><a class="strong" href="%1$s">den Wartungsmodus abzuschalten</a></strong>, wenn du mit deinen administrativen Tätigkeiten fertig bist.';
$txt['query_command_denied'] = 'Folgende MySQL-Fehler sind aufgetreten, bitte überprüfe deine Konfiguration:';
$txt['query_command_denied_guests'] = 'Es scheint, als wäre etwas mit der Datenbank nicht in Ordnung. Dieses Problem sollte nur vorübergehend bestehen, komme also bitte später wieder und versuche es erneut.  Wenn du diese Nachricht weiterhin zu Gesicht bekommst, melde bitte folgende Nachricht einem Administrator:';
$txt['query_command_denied_guests_msg'] = 'der Befehl %1$s ist in der Datenbank nicht erlaubt';
$txt['last_edit_by'] = '<span class="lastedit">Zuletzt geändert</span>: %1$s von %2$s';
$txt['notify_deactivate'] = 'Möchtest du die E-Mail-Benachrichtigung für dieses Thema deaktivieren?';

$txt['date_registered'] = 'Registriert am';
$txt['date_joined'] = 'Joined';
$txt['date_joined_format'] = '%b %d, %Y';

$txt['recent_view'] = 'Alle neuen Beiträge anzeigen';
$txt['is_recent_updated'] = '%1$s ist das zuletzt aktualisierte Thema.';

$txt['male'] = 'Männlich';
$txt['female'] = 'Weiblich';

$txt['error_invalid_characters_username'] = 'Ungültiges Zeichen im Benutzernamen.';

$txt['welcome_guest'] = 'Willkommen, <strong>%1$s</strong>. Bitte <a href="%2$s">melde dich an</a>.';
$txt['welcome_guest_register'] = 'Welcome to <strong>{forum_name}</strong>. Please <a href="{login_url}" rel="nofollow">login</a> or <a href="{register_url}" rel="nofollow">register</a>.';
$txt['welcome_guest_activate'] = '<br />Hast du deine <a href="{activate_url}">Aktivierungs-E-Mail</a> nicht erhalten?';

// @todo the following to sprintf
$txt['hello_member'] = 'Hallo';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Willkommen';
$txt['select_destination'] = 'Bitte wähle ein Ziel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Autor';

$txt['icon_smiley'] = 'Smiley';
$txt['icon_angry'] = 'Ärgerlich';
$txt['icon_cheesy'] = 'Lächelnd';
$txt['icon_laugh'] = 'Lachend';
$txt['icon_sad'] = 'Traurig';
$txt['icon_wink'] = 'Zwinkernd';
$txt['icon_grin'] = 'Grinsend';
$txt['icon_shocked'] = 'Schockiert';
$txt['icon_cool'] = 'Cool!';
$txt['icon_huh'] = 'Huch!';
$txt['icon_rolleyes'] = 'Mit den Augen rollend';
$txt['icon_tongue'] = 'Zunge';
$txt['icon_embarrassed'] = 'Verlegen';
$txt['icon_lips'] = 'Schweigend';
$txt['icon_undecided'] = 'Unentschlossen';
$txt['icon_kiss'] = 'Küsschen!';
$txt['icon_cry'] = 'Weinend';
$txt['icon_angel'] = 'Unschuldig';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatoren';

$txt['views'] = 'Aufrufe';
$txt['new'] = 'Neu';
$txt['no_redir'] = 'Weitergeleitet von %1$s';

$txt['view_all_members'] = 'Benutzer anzeigen';
$txt['view'] = 'Anschauen';

$txt['viewing_members'] = 'Benutzer %1$s bis %2$s anzeigen';
$txt['of_total_members'] = 'von %1$s Benutzern';

$txt['forgot_your_password'] = 'Passwort vergessen?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Von';
$txt['to'] = 'An';

$txt['board_topics'] = 'Themen';
$txt['members_title'] = 'Benutzer';
$txt['members_list'] = 'Benutzerliste';
$txt['new_posts'] = 'Neue Beiträge';
$txt['old_posts'] = 'Keine neuen Beiträge';
$txt['redirect_board'] = 'Weiterleitungs-Board';
$txt['redirect_board_to'] = 'Umleitung zu %1$s';

$txt['sendtopic_send'] = 'Senden';
$txt['report_sent'] = 'Dein Bericht wurde erfolgreich versandt.';
$txt['topic_sent'] = 'Deine E-Mail wurde erfolgreich versandt.';

$txt['time_offset'] = 'Zeitverschiebung';
$txt['or'] = 'oder';

$txt['mention'] = 'Benachrichtigungen';
$txt['notifications'] = 'E-Mail-Benachrichtigungen';
$txt['unread_notifications'] = 'You have %1$s unread notifications since your last visit.';
$txt['new_from_last_notifications'] = 'You have %1$s new notifications.';
$txt['forum_notification'] = 'Notifications from %1$s.';

$txt['your_ban'] = '%1$s, du wurdest aus diesem Forum verbannt.';
$txt['your_ban_expires'] = 'Dieser Bann läuft am %1$s ab.';
$txt['your_ban_expires_never'] = 'Dieser Bann hat kein Ablaufdatum.';
$txt['ban_continue_browse'] = 'Du kannst das Forum weiterhin als Gast besuchen.';

$txt['mark_as_read'] = 'Alle Beiträge gelesen';
$txt['mark_as_read_confirm'] = 'Are you sure you want to mark ALL messages as read?';
$txt['mark_these_as_read'] = 'Markiere DIESE Beiträge als gelesen';
$txt['mark_these_as_read_confirm'] = 'Are you sure you want to mark THESE messages as read?';

$txt['locked_topic'] = 'Geschlossenes Thema';
$txt['normal_topic'] = 'Normales Thema';
$txt['participation_caption'] = 'Thema, in welchem du geantwortet hast';

$txt['print'] = 'Drucken';
$txt['topic_summary'] = 'Zusammenfassung';
$txt['not_applicable'] = 'nicht bekannt';
$txt['name_in_use'] = 'Der Name %1$s wird bereits von einem anderen Benutzer verwendet.';

$txt['total_members'] = 'Benutzer insgesamt';
$txt['total_posts'] = 'Beiträge insgesamt';
$txt['total_topics'] = 'Themen insgesamt';

$txt['mins_logged_in'] = 'Sitzungslänge in Minuten';

$txt['preview'] = 'Vorschau';
$txt['always_logged_in'] = 'Immer angemeldet bleiben';

$txt['logged'] = 'Gespeichert';
// Use numeric entities in the below string.
$txt['ip'] = 'IP-Adresse';

$txt['www'] = 'Website';
$txt['link'] = 'Link';

$txt['by'] = 'von'; //Deprecated

$txt['hours'] = 'Stunden';
$txt['minutes'] = 'Minuten';
$txt['seconds'] = 'Sekunden';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Stunde';
$txt['days_word'] = 'Tagen';

$txt['newest_member'] = ', unser neuester Benutzer.'; //Deprecated

$txt['search_for'] = 'Suche nach';
$txt['search_match'] = 'Treffer';

$txt['maintain_mode_on'] = 'Nicht vergessen, das Forum befindet sich noch im Wartungsmodus!';

$txt['read'] = 'Lesen'; //Deprecated
$txt['times'] = 'Mal'; //Deprecated
$txt['read_one_time'] = 'Einmal gelesen';
$txt['read_many_times'] = '%1$d-mal gelesen';

$txt['forum_stats'] = 'Forumstatistiken';
$txt['latest_member'] = 'Neuester Benutzer';
$txt['total_cats'] = 'Kategorien insgesamt';
$txt['latest_post'] = 'Letzter Beitrag';

$txt['here'] = 'hier';
$txt['you_have_no_msg'] = 'Du hast keine Nachrichten...';
$txt['you_have_one_msg'] = 'Du hast eine ungelesene Nachricht. <a href="%1$s">Klicke hier, um sie anzusehen</a>';
$txt['you_have_many_msgs'] = 'Du hast %2$d ungelesene Nachrichten. <a href="%1$s">Klicke hier, um sie anzusehen</a>';

$txt['total_boards'] = 'Boards insgesamt';

$txt['print_page'] = 'Seite drucken';
$txt['print_page_text'] = 'Nur Text';
$txt['print_page_images'] = 'Text und Bilder';

$txt['valid_email'] = 'Es muss eine gültige E-Mail-Adresse eingegeben werden.';

$txt['info_center_title'] = '%1$s - Informationen';

$txt['send_topic'] = 'Senden';
$txt['unwatch'] = 'Nicht mehr beobachten';
$txt['watch'] = 'Beobachten';

$txt['sendtopic_title'] = 'Sende das Thema \'%1$s\' einem Freund.';
$txt['sendtopic_sender_name'] = 'Dein Name';
$txt['sendtopic_sender_email'] = 'Deine E-Mail-Adresse';
$txt['sendtopic_receiver_name'] = 'Name des Empfängers';
$txt['sendtopic_receiver_email'] = 'E-Mail-Adresse des Empfängers';
$txt['sendtopic_comment'] = 'Kommentar hinzufügen';

$txt['allow_user_email'] = 'E-Mails von anderen Benutzern erhalten';

$txt['check_all'] = 'Alle markieren';

// Use numeric entities in the below string.
$txt['database_error'] = 'Datenbankfehler';
$txt['try_again'] = 'Bitte versuche es noch einmal. Sollte der Fehler wieder auftreten, informiere bitte den Administrator.';
$txt['file'] = 'Datei';
$txt['line'] = 'Zeile';

// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'ElkArte hat einen Fehler in deiner Datenbank entdeckt und automatisch zu beheben versucht.  Wenn du weiterhin Probleme mit dem Forum hast oder diese E-Mails erhältst, kontaktiere bitte deinen Serverbetreiber.';
$txt['database_error_versions'] = '<strong>Hinweis:</strong> deine Datenbankversion ist %1$s.';
$txt['template_parse_error'] = 'Template-Analyse-Fehler!';
$txt['template_parse_error_message'] = 'Ein Fehler ist im Template-System des Forums aufgetreten! Dieses Problem sollte nur temporär auftreten, bitte versuche es später noch einmal. Solltest du die Fehlermeldung weiterhin erhalten, kontaktiere bitte den Administrator.<br /><br />Du kannst außerdem versuchen, die Seite zu <a href="javascript:location.reload();">aktualisieren</a>.';
$txt['template_parse_error_details'] = 'Es ist ein Fehler beim Laden des <span class="tt"><strong>%1$s</strong></span>-Templates oder der Sprachdateien aufgetreten. Bitte prüfe dies und versuche es erneut - denke daran, einfache Anführungszeichen (<span class="tt">\'</span>) benötigen oft einen vorangestellen Backslash (<span class="tt">\\</span>). Für weitere Informationen zu PHP, versuche <a href="%2$s%1$s">die Datei direkt zu öffnen</a>.<br /><br />Vielleicht möchtest du versuchen, <a href="javascript:location.reload();">diese Seite zu aktualisieren</a> oder <a href="%3$s">das Default-Theme zu benutzen</a>?';
$txt['template_parse_undefined'] = 'Ein undefinierter Fehler ist während der Verarbeitung des Templates aufgetreten.';

$txt['today'] = 'Heute um %1$s';
$txt['yesterday'] = 'Gestern um %1$s';

// Relative times
$txt['rt_now'] = 'gerade eben';
$txt['rt_minute'] = 'Vor einer Minute';
$txt['rt_minutes'] = 'Vor %s Minuten';
$txt['rt_hour'] = 'Vor einer Stunde';
$txt['rt_hours'] = 'Vor %s Stunden';
$txt['rt_day'] = 'Gestern';
$txt['rt_days'] = 'vor %s Tagen';
$txt['rt_week'] = 'Letzte Woche';
$txt['rt_weeks'] = 'Vor %s Wochen';
$txt['rt_month'] = 'Letzten Monat';
$txt['rt_months'] = 'Vor %s Monaten';
$txt['rt_year'] = 'Letztes Jahr';
$txt['rt_years'] = 'Vor %s Jahren';

$txt['new_poll'] = 'Neue Umfrage';
$txt['poll_question'] = 'Frage';
$txt['poll_question_options'] = 'Fragen und Optionen';
$txt['poll_vote'] = 'Abstimmen';
$txt['poll_total_voters'] = 'Stimmabgaben insgesamt';
$txt['draft_saved_on'] = 'Entwurf zuletzt gespeichert';
$txt['poll_results'] = 'Ergebnisse anzeigen';
$txt['poll_lock'] = 'Umfrage schließen';
$txt['poll_unlock'] = 'Umfrage öffnen';
$txt['poll_edit'] = 'Umfrage editieren';
$txt['poll'] = 'Umfrage';
$txt['one_day'] = '1 Tag';
$txt['one_week'] = '1 Woche';
$txt['two_weeks'] = '2 Wochen';
$txt['one_month'] = '1 Monat';
$txt['two_months'] = '2 Monate';
$txt['forever'] = 'Immer';
$txt['quick_login_dec'] = 'Einloggen mit Benutzername, Passwort und Sitzungslänge';
$txt['one_hour'] = '1 Stunde';
$txt['moved'] = 'VERSCHOBEN';
$txt['moved_why'] = 'Bitte gebe einen kurzen Hinweis ein,<br />warum das Thema verschoben wurde.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Fixiertes Thema';
$txt['split'] = 'GETEILT';

$txt['delete'] = 'Löschen';

$txt['byte'] = 'B';
$txt['kilobyte'] = 'KB';
$txt['megabyte'] = 'MB';
$txt['gigabyte'] = 'MB';

$txt['more_stats'] = 'Weitere Statistiken...';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = '[Auswählen]';
$txt['quote_from'] = 'Zitat von';
$txt['quote'] = 'Zitat';
$txt['quote_new'] = 'Zitat-Thema';
$txt['follow_ups'] = 'Verfolgen';
$txt['topic_derived_from'] = 'Thema abgeleitet von %1$s';
$txt['edit'] = 'Editieren';
$txt['quick_edit'] = 'Schnellkorrektur';
$txt['post_options'] = 'Mehr...';

$txt['set_sticky'] = 'Fixieren';
$txt['set_nonsticky'] = 'Lösen';
$txt['set_lock'] = 'Schließen';
$txt['set_unlock'] = 'Öffnen';

$txt['search_advanced'] = 'Erweiterte Optionen anzeigen';
$txt['search_simple'] = 'Erweiterte Optionen verstecken';

$txt['security_risk'] = 'GROSSES SICHERHEITSRISIKO:';
$txt['not_removed'] = 'Du hast die Datei "%1$s" nicht entfernt';
$txt['not_removed_extra'] = '"%1$s" ist eine Sicherungskopie von "%2$s", die nicht von ElkArte erzeugt wurde. Sie kann direkt aufgerufen und verwendet werden, um vollen Zugriff auf das Forum zu erhalten. Du solltest sie umgehend löschen.';
$txt['generic_warning'] = 'Hinweis';
$txt['agreement_missing'] = 'Du hast eingestellt, dass neue Benutzer einer Vereinbarung zustimmen müssen, diese ("agreement.txt") existiert jedoch nicht.';
$txt['agreement_accepted'] = 'You have just accepted the agreement.';
$txt['privacypolicy_accepted'] = 'You have just accepted the forum privacy policy.';

$txt['new_version_updates'] = 'Du hast soeben aktualisiert!';
$txt['new_version_updates_text'] = '<a href="{admin_url};area=credits#latest_updates">Klicke hier um zu sehen, welche Neuerungen in  ElkArte eingebaut wurden!</a>!';

$txt['cache_writable'] = 'Das Cache-Verzeichnis ist nicht beschreibbar. Dies hat u.U. Auswirkungen auf die Geschwindigkeit deines Forums.';

$txt['page_created_full'] = 'Seite erstellt in %1$.3f Sekunden mit %2$d Abfragen.';

$txt['report_to_mod_func'] = 'Benutze diese Funktion, um Moderatoren bzw. Administratoren über einen missbräuchlich oder falsch geschriebenen Beitrag zu informieren.<br /><em>Bitte beachte, dass deine E-Mail-Adresse zum betreffenden Moderator bzw. Administrator gesendet wird, wenn du diese Funktion benutzt.</em>';

$txt['online'] = 'Online';
$txt['member_is_online'] = '%1$s ist online';
$txt['offline'] = 'Offline';
$txt['member_is_offline'] = '%1$s ist offline';
$txt['pm_online'] = 'Mitteilung (ist online)';
$txt['pm_offline'] = 'Mitteilung (ist offline)';
$txt['status'] = 'Status';

$txt['skip_nav'] = 'Zum Hauptinhalt springen';
$txt['go_up'] = 'Nach oben';
$txt['go_down'] = 'Nach unten';

$forum_copyright = '<a href="https://www.elkarte.net" title="ElkArte Forum" target="_blank" class="new_win">Powered by %1$s</a> | <a href="{credits_url}" title="Credits" target="_blank" class="new_win" rel="nofollow">Credits</a>';

$txt['birthdays'] = 'Geburtstage:';
$txt['events'] = 'Ereignisse:';
$txt['birthdays_upcoming'] = 'Geburtstage:';
$txt['events_upcoming'] = 'Ereignisse:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Feiertage:';
$txt['calendar_month'] = 'Monat:';
$txt['calendar_year'] = 'Jahr:';
$txt['calendar_day'] = 'Tag:';
$txt['calendar_event_title'] = 'Ereignis-Titel';
$txt['calendar_event_options'] = 'Ereignis-Optionen';
$txt['calendar_post_in'] = 'Erstellen in:';
$txt['calendar_edit'] = 'Ereignis editieren';
$txt['event_delete_confirm'] = 'Dieses Ereignis löschen?';
$txt['event_delete'] = 'Ereignis löschen';
$txt['calendar_post_event'] = 'Ereignis erstellen';
$txt['calendar'] = 'Kalender';
$txt['calendar_link'] = 'Link zum Kalender';
$txt['calendar_upcoming'] = 'Ereignisse';
$txt['calendar_today'] = 'Heutige Ereignisse';
$txt['calendar_week'] = 'Woche';
$txt['calendar_week_title'] = 'Woche %1$d von %2$d';
$txt['calendar_numb_days'] = 'Anzahl der Tage:';
$txt['calendar_how_edit'] = 'Wie ändert man diese Ereignisse?';
$txt['calendar_link_event'] = 'Ereignis verlinken';
$txt['calendar_confirm_delete'] = 'Bist du sicher, dass du dieses Ereignis löschen möchtest?';
$txt['calendar_linked_events'] = 'Verlinkte Ereignisse';
$txt['calendar_click_all'] = 'Alle %1$s anzeigen';

$txt['moveTopic1'] = 'Einen Umleitungshinweis angeben';
$txt['moveTopic2'] = 'Titel des Themas ändern';
$txt['moveTopic3'] = 'Neuer Titel';
$txt['moveTopic4'] = 'Den Titel eines jeden Beitrages ändern';
$txt['move_topic_unapproved_js'] = 'Achtung - Dieses Thema wurde noch nicht genehmigt.\\n\\nEs wird nicht empfohlen, ein Umleitungs-Thema zu erstellen, bevor der eigentliche Beitrag genehmigt wurde.';
$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[THEMEN LINK]';
$txt['movetopic_default'] = 'Dieses Thema wurde verschoben nach [BOARD] - [THEMEN LINK]';
$txt['movetopic_redirect'] = 'In das verschobene Thema wechseln';
$txt['movetopic_expires'] = 'Die Weiterleitung automatisch löschen';

$txt['merge_to_topic_id'] = 'ID des Ziel-Themas';
$txt['split_topic'] = 'Teilen';
$txt['merge'] = 'Zusammenführen';
$txt['subject_new_topic'] = 'Betreff für das neue Thema';
$txt['split_this_post'] = 'Nur diesen Beitrag teilen';
$txt['split_after_and_this_post'] = 'Thema ab (und inkl.) diesem Beitrag teilen';
$txt['select_split_posts'] = 'Einzelne Beiträge auswählen, welche geteilt werden sollen';

$txt['splittopic_notification'] = 'Erstelle einen Hinweis, wenn das Thema geteilt wurde.';
$txt['splittopic_default'] = 'Ein oder mehr Beiträge in diesem Thema wurden verschoben nach [BOARD] - [THEMEN LINK]';
$txt['splittopic_move'] = 'Das neue Thema in ein anderes Board verschieben';

$txt['new_topic'] = 'Neues Thema';
$txt['split_successful'] = 'Thema erfolgreich in zwei neue Themen aufgeteilt.';
$txt['origin_topic'] = 'Ursprüngliches Thema';
$txt['please_select_split'] = 'Bitte wähle die Beiträge aus, die du teilen möchtest';
$txt['merge_successful'] = 'Themen erfolgreich zusammengeführt.';
$txt['new_merged_topic'] = 'Neu zusammengeführtes Thema';
$txt['topic_to_merge'] = 'Themen, welche zusammengeführt werden sollen';
$txt['target_board'] = 'Zielboard';
$txt['target_topic'] = 'Zielthema';
$txt['merge_confirm'] = 'Bist du sicher, dass du folgende Themen zusammenführen möchtest?';
$txt['with'] = 'mit';
$txt['merge_desc'] = 'Diese Funktion wird die Beiträge von zwei Themen zu einem Thema zusammenführen. Die Beiträge werden chronologisch sortiert sein, d.h. der älteste Beitrag wird der erste im zusammengeführten Thema sein (bei Standardsortierung von Beiträgen = älteste zuoberst).';

$txt['theme_template_error'] = 'Kann das "%1$s"-Template nicht laden.';
$txt['theme_language_error'] = 'Kann die "%1$s"-Sprachdatei nicht laden.';

$txt['parent_boards'] = 'Untergeordnete Boards';

$txt['smtp_no_connect'] = 'Kann nicht mit dem SMTP-Server verbinden.';
$txt['smtp_port_ssl'] = 'SMTP-Port-Einstellung ist nicht korrekt; diese sollte auf 465 für SSL-Server stehen.';
$txt['smtp_bad_response'] = 'Konnte Antwortcodes des E-Mail-Servers nicht empfangen.';
$txt['smtp_error'] = 'Probleme beim Versenden der E-Mail. Fehler: ';
$txt['mail_send_unable'] = 'Die E-Mail konnte nicht an %1$s versendet werden.';

$txt['mlist_search'] = 'Benutzer suchen';
$txt['mlist_search_again'] = 'Erneut suchen'; // @deprecated since 1.0.4
$txt['mlist_search_email'] = 'Nach E-Mail-Adresse suchen';
$txt['mlist_search_group'] = 'Nach Position suchen';
$txt['mlist_search_name'] = 'Nach Benutzername suchen';
$txt['mlist_search_website'] = 'Nach Website suchen';
$txt['mlist_search_results'] = 'Suchergebnisse für';
$txt['mlist_search_by'] = 'Suchen nach %1$s';

$txt['attach_downloaded'] = '%1$d-mal heruntergeladen';
$txt['attach_viewed'] = '%1$d-mal angesehen';

$txt['settings'] = 'Einstellungen';
$txt['never'] = 'Nie';
$txt['more'] = 'Weitere Smileys...';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Entschuldigung, %1$s, dir ist das Schreiben von Beiträgen und das versenden von Mitteilungen in diesem Forum verboten worden.';
$txt['ban_reason'] = 'Grund hierfür:';

$txt['add_poll'] = 'Umfrage hinzufügen';
$txt['poll_options6'] = 'Du darfst nur %1$s Optionen wählen.';
$txt['poll_remove'] = 'Umfrage löschen';
$txt['poll_remove_warn'] = 'Bist du sicher, dass du die Umfrage vom Thema trennen und dann löschen möchtest?';
$txt['poll_results_expire'] = 'Die Resultate werden erst dann angezeigt, wenn die Umfrage geschlossen wird.';
$txt['poll_expires_on'] = 'Umfrage schließt am';
$txt['poll_expired_on'] = 'Umfrage geschlossen';
$txt['poll_change_vote'] = 'Abstimmung ändern';
$txt['poll_return_vote'] = 'Abstimmungsoptionen';
$txt['poll_cannot_see'] = 'Du darfst das Ergebnis der Umfrage momentan nicht einsehen.';

$txt['quick_mod_approve'] = 'Auswahl genehmigen';
$txt['quick_mod_remove'] = 'Auswahl löschen';
$txt['quick_mod_lock'] = 'Auswahl schließen bzw. öffnen';
$txt['quick_mod_sticky'] = 'Auswahl fixieren bzw. lösen';
$txt['quick_mod_move'] = 'Auswahl verschieben';
$txt['quick_mod_merge'] = 'Auswahl zusammenführen';
$txt['quick_mod_markread'] = 'Auswahl als gelesen markieren';
$txt['quick_mod_go'] = 'Los';
$txt['quickmod_confirm'] = 'Bist du sicher, dass du das tun möchtest?';

$txt['spell_check'] = 'Rechtschreibung prüfen';

$txt['quick_reply'] = 'Schnellantwort';
$txt['quick_reply_warning'] = 'Achtung! Dieses Thema ist zurzeit geschlossen, nur Administratoren und Moderatoren können antworten.';
$txt['quick_reply_verification'] = 'Nach dem Senden deines Beitrages wirst du zur normalen Beitragsseite weitergeleitet, um deinen Beitrag zu überprüfen, %1$s.';
$txt['quick_reply_verification_guests'] = '(notwendig für alle Gäste)';
$txt['quick_reply_verification_posts'] = '(notwendig für alle Benutzer mit weniger als %1$d Beiträgen)';
$txt['wait_for_approval'] = 'Achtung - Dieser Beitrag wird erst angezeigt, wenn er genehmigt wurde.';

$txt['notification_enable_board'] = 'Bist du sicher, dass du Benachrichtigungen über neue Themen in diesem Board aktivieren möchtest?';
$txt['notification_disable_board'] = 'Bist du sicher, dass du Benachrichtigungen über neue Themen in diesem Board deaktivieren möchtest?';
$txt['notification_enable_topic'] = 'Bist du sicher, dass du Benachrichtigungen über neue Beiträge in diesem Thema aktivieren möchtest?';
$txt['notification_disable_topic'] = 'Bist du sicher, dass du Benachrichtigungen über neue Beiträge in diesem Thema deaktivieren möchtest?';

$txt['report_to_mod'] = 'Melden';
$txt['issue_warning_post'] = 'Eine Verwarnung wegen diesem Beitrag erteilen';

$txt['like_post'] = 'Gefällt mir';
$txt['unlike_post'] = 'Gefällt mir nicht mehr';
$txt['likes'] = 'Gefällt mir';
$txt['liked_by'] = 'Gefällt diesen Benutzern:';
$txt['liked_you'] = 'Dir';
$txt['liked_more'] = 'und weiteren.';
$txt['likemsg_are_you_sure'] = 'Du hast diesen Beitrag einmal mit Gefällt mir markiert. Bist du sicher, dass du dies rückgängig machen möchtest?';

$txt['unread_topics_visit'] = 'Neue Beiträge';
$txt['unread_topics_visit_none'] = 'Es wurden keine neuen Beiträge und Antworten seit deinem letzten Besuch gefunden.<br /><br /><a href="{unread_all_url}" class="linkbutton">Klicke hier, um alle neuen Beiträge anzusehen</a>';
$txt['unread_topics_all'] = 'Alle neuen Beiträge';
$txt['unread_replies'] = 'Neue Antworten';

$txt['who_title'] = 'Wer ist online';
$txt['who_and'] = ' und ';
$txt['who_viewing_topic'] = ' betrachten dieses Thema.';
$txt['who_viewing_board'] = ' betrachten dieses Board.';
$txt['who_member'] = 'Benutzer';

// Current footer strings
$txt['valid_html'] = 'Gültiges HTML5';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gast';
$txt['guests'] = 'Gäste';
$txt['user'] = 'Benutzer';
$txt['users'] = 'Benutzer';
$txt['hidden'] = 'Versteckt';
// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Versteckte';
$txt['buddy'] = 'Freund';
$txt['buddies'] = 'Freunde';
$txt['most_online_ever'] = 'Gleichzeitig online (insgesamt)';
$txt['most_online_today'] = 'Gleichzeitig online (heute)';

$txt['merge_select_target_board'] = 'Wähle das Ziel-Board des zusammengeführten Themas';
$txt['merge_select_poll'] = 'Wähle die Umfrage, welche das zusammengeführte Thema beinhalten soll';
$txt['merge_topic_list'] = 'Wähle die Themen, die zusammengeführt werden sollen';
$txt['merge_select_subject'] = 'Wähle den neuen Titel des zusammengeführten Themas';
$txt['merge_custom_subject'] = 'Neuer Titel';
$txt['merge_enforce_subject'] = 'Ändere den Titel aller Beiträge';
$txt['merge_include_notifications'] = 'Inklusive Benachrichtigungen?';
$txt['merge_check'] = 'Zusammenführen?';
$txt['merge_no_poll'] = 'Keine Umfrage';

$txt['response_prefix'] = 'Antw.: ';
$txt['current_icon'] = 'Aktuelles Symbol';
$txt['message_icon'] = 'Beitrags-Symbol';

$txt['smileys_current'] = 'Aktuelles Smiley-Set';
$txt['smileys_none'] = 'Keine Smileys';
$txt['smileys_forum_board_default'] = 'Forum- bzw. Board-Standard';

$txt['search_results'] = 'Suchresultate';
$txt['search_no_results'] = 'Keine Übereinstimmungen gefunden';

$txt['totalTimeLogged2'] = ' Tage, ';
$txt['totalTimeLogged3'] = ' Stunden und ';
$txt['totalTimeLogged4'] = ' Minuten';
$txt['totalTimeLogged5'] = ' Tag(e) ';
$txt['totalTimeLogged6'] = ' Std. ';
$txt['totalTimeLogged7'] = ' Min.';

$txt['approve_thereis'] = 'Es gibt'; //Deprecated
$txt['approve_thereare'] = 'Es gibt'; //Deprecated
$txt['approve_member'] = 'einen Benutzer, '; //Deprecated
$txt['approve_members'] = 'Benutzer, '; //Deprecated
$txt['approve_members_waiting'] = 'welche(r) eine Genehmigung erwarten/erwartet.'; //Deprecated
$txt['approve_one_member_waiting'] = 'Es wartet <a href="%1$s">ein Benutzer</a> auf Freischaltung.';
$txt['approve_many_members_waiting'] = 'Es warten <a href="%1$s">%2$d Benutzer</a> auf Freischaltung.';

$txt['notifyboard_turnon'] = 'Möchtest du Benachrichtigungen per E-Mail erhalten, sobald jemand ein neues Thema in diesem Board schreibt?';
$txt['notifyboard_turnoff'] = 'Möchtest du die Benachrichtigungen, wenn jemand ein neues Thema in diesem Board schreibt, deaktivieren?';

$txt['notify_board_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent notifications from the "%1$s" board.';
$txt['notify_topic_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent notifications on the "%1$s" topic.';
$txt['notify_mention_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent "%1$s" notifications.';
$txt['notify_default_unsubscribed'] = 'Your request has been successfully processed.';

$txt['find_members'] = 'Suche Benutzer';
$txt['find_username'] = 'Name, Benutzername oder E-Mail-Adresse';
$txt['find_buddies'] = 'Nur Freunde anzeigen?';
$txt['find_wildcards'] = 'Wildcards erlauben: *,?';
$txt['find_no_results'] = 'Es wurde nichts gefunden.';
$txt['find_results'] = 'Ergebnisse';
$txt['find_close'] = 'Schließen';

$txt['quickmod_delete_selected'] = 'Ausgewählte löschen';
$txt['quickmod_split_selected'] = 'Ausgewählte aufteilen';

$txt['show_personal_messages_heading'] = 'Neue Nachrichten';
$txt['show_personal_messages'] = 'Du hast <strong>%1$s</strong> ungelesene Mitteilung(en) in deinem Posteingang.<br /><br /><a href="%2$s">Klicke hier, um zum Posteingang zu wechseln</a>';

$txt['help_popup'] = 'Hilfe';

$txt['previous_next_back'] = 'Vorheriges Thema';
$txt['previous_next_forward'] = 'Nächstes Thema';

$txt['upshrink_description'] = 'Ein- oder Ausklappen der Kopfzeile';

$txt['mark_unread'] = 'Als ungelesen markieren';

$txt['ssi_not_direct'] = 'Bitte greife nicht direkt mit der URL auf die Datei "SSI.php" zu. Benutze stattdessen den Pfad ("%1$s") oder füge "?ssi_function=irgendwas" der URL hinzu.';
$txt['ssi_session_broken'] = 'Die Datei "SSI.php" konnte die Sitzung nicht laden! Das kann zu Problemen mit dem Abmelden und anderen Funktionen führen - Bitte prüfe, ob die Datei "SSI.php" in deinen Skripts vor jeglichem(!) anderen Code aufgerufen wird!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Vorheriger Beitrag';
$txt['preview_fetch'] = 'Lade Vorschau...';
$txt['pm_error_while_submitting'] = 'Folgende Fehler traten beim Versand dieser privaten Nachricht auf:';
$txt['warning_while_submitting'] = 'Etwas ist passiert, bitte hier überprüfen:';
$txt['error_while_submitting'] = 'Die Nachricht hat folgende Fehler, die vor dem Versand korrigiert werden müssen:';
$txt['error_old_topic'] = 'Achtung - In diesem Thema wurde seit %1$d Tagen nichts mehr geschrieben.<br />Solltest du deiner Antwort nicht sicher sein, starte ein neues Thema.';

$txt['split_selected_posts'] = 'Ausgewählte Beiträge';
$txt['split_selected_posts_desc'] = 'Die unten stehenden Beiträge werden in ein neues Thema zusammengeführt.';
$txt['split_reset_selection'] = 'Auswahl löschen';

$txt['modify_cancel'] = 'Abbrechen';
$txt['mark_read_short'] = 'Alle gelesen';

$txt['hello_member_ndt'] = 'Hallo';

$txt['unapproved_posts'] = 'Nicht genehmigte Beiträge (Themen: %1$s, Beiträge: %2$d)';

$txt['ajax_in_progress'] = 'Lade...';
$txt['ajax_bad_response'] = 'Invalid response.';

$txt['mod_reports_waiting'] = 'Gemeldete, noch offene Beiträge: %1$d. Bitte kümmere dich darum.';
$txt['pm_reports_waiting'] = 'There are currently %1$d personal message reports open.';

$txt['new_posts_in_category'] = 'Klicke hier, um die neuen Beiträge in %1$s anzusehen.';
$txt['verification'] = 'Verifizierung';
$txt['visual_verification_hidden'] = 'Bitte lasse dieses Feld leer.';
$txt['visual_verification_description'] = 'Gebe bitte die Buchstaben aus dem Bild ein.';
$txt['visual_verification_sound'] = 'Buchstaben vorlesen';
$txt['visual_verification_request_new'] = 'Neues Bild anfordern';

// @todo Send email strings - should move?
$txt['send_email'] = 'Sende E-Mail';
$txt['send_email_disclosed'] = 'Beachte bitte, dass dies für den Empfänger sichtbar ist.';
$txt['send_email_subject'] = 'E-Mail-Betreff';

$txt['ignoring_user'] = 'Du ignorierst diesen Benutzer.';
$txt['show_ignore_user_post'] = '<em>[Beitrag anzeigen.]</em>';

$txt['spider'] = 'Bot';
$txt['spiders'] = 'Bots';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Dateigröße';
$txt['subscribe_webslice'] = 'Webslice abonnieren'; // @deprecated since 1.1

// Restore topic
$txt['restore_topic'] = 'Thema wiederherstellen';
$txt['restore_message'] = 'Wiederherstellen';
$txt['quick_mod_restore'] = 'Gewähltes Element wiederherstellen';

// Editor prompt.
$txt['prompt_text_email'] = 'Bitte gebe die E-Mail-Adresse ein';
$txt['prompt_text_ftp'] = 'Bitte die FTP-Server-Adresse eingeben';
$txt['prompt_text_url'] = 'Bitte gebe die zu verlinkende URL ein';
$txt['prompt_text_img'] = 'Bitte gebe den Pfad zur Grafik ein';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Element löschen';

// Bad Behavior
$txt['badbehavior_blocked'] = '<a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a> hat in den letzten 7 Tagen %1$s unerwünschte Zugriffsversuche vereitelt.';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates:';
$txt['debug_subtemplates'] = 'Sub-Templates:'; // @deprecated since 1.1
$txt['debug_sub_templates'] = 'Sub-Templates:';
$txt['debug_language_files'] = 'Sprachdateien:';
$txt['debug_sheets'] = 'Stylesheets:';
$txt['debug_javascript'] = 'Skripts: ';
$txt['debug_files_included'] = 'Inkludierte Dateien:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'zeige';
$txt['debug_cache_hits'] = 'Cache-Treffer:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s Bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss für %2$s Bytes';
$txt['debug_queries_used'] = 'Abfragen verwendet: %1$d';
$txt['debug_queries_used_and_warnings'] = 'Abfragen verwendet: %1$d, mit %2$d Warnungen.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> Zeile <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'welche %1$s Sekunden benötigt haben.';
$txt['debug_query_which_took_at'] = 'welche %1$s Sekunden bei %2$s Anfragen benötigt haben.';
$txt['debug_show_queries'] = '[Zeige Abfragen]';
$txt['debug_hide_queries'] = '[Verstecke Abfragen]';
$txt['debug_tokens'] = 'Tokens: ';
$txt['debug_browser'] = 'Browser-ID: ';
$txt['debug_hooks'] = 'Aufgerufene Hooks: ';
$txt['debug_system_type'] = 'System:';
$txt['debug_server_load'] = 'Server Load:';
$txt['debug_script_mem_load'] = 'Skript-Speicherverbrauch';
$txt['debug_script_cpu_load'] = 'Skript-CPU-Zeit (Benutzer/System)';

// Video embedding
$txt['preview_image'] = 'Videovorschaubild';
$txt['ctp_video'] = 'Klicke einmal, um das Video abzuspielen; doppelklicke, um es zu laden';
$txt['hide_video'] = 'Video anzeigen/verstecken';
$txt['youtube'] = 'YouTube-Video:';
$txt['vimeo'] = 'Vimeo-Video:';
$txt['dailymotion'] = 'Dailymotion-Video:';

// Spoiler BBC
$txt['spoiler'] = 'Spoiler (klicken zum Umschalten)';

$txt['ok_uppercase'] = 'OK';

// Title of box for warnings that admins should see
$txt['admin_warning_title'] = 'Achtung!';

$txt['via'] = 'via';

$txt['like_post_stats'] = 'Gefällt-mir-Statistik';

$txt['otp_token'] = 'Zeitbasiertes Einmalpasswort';
$txt['otp_enabled'] = 'Zwei-Faktor-Authentifizierung aktivieren';
$txt['invalid_otptoken'] = 'Das zeitbasierte Einmalpasswort ist ungültig';
$txt['otp_used'] = 'Das zeitbasierte Einmalpasswort wurde bereits verwendet.<br /> Bitte warten Sie einen Moment und verwenden Sie den nächsten Code.';
$txt['otp_generate'] = 'Generieren';
$txt['otp_show_qr'] = 'QR-Code anzeigen';

