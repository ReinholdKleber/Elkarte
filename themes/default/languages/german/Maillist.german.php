<?php
// Version: 1.1; Maillist

// Email posting errors
$txt['error_locked'] = 'Das Thema wurde gesperrt und es kann nicht mehr darauf geantwortet werden';
$txt['error_locked_short'] = 'Thema gesperrt';
$txt['error_cant_start'] = 'Du bist nicht autorisiert, ein neues Thema in dem angegebenen Board zu starten';
$txt['error_cant_start_short'] = 'Kann kein neues Thema starten';
$txt['error_cant_reply'] = 'Du bist nicht autorisiert, zu antworten';
$txt['error_cant_reply_short'] = 'Themen-Begrenzungen';
$txt['error_topic_gone'] = 'Das Thema konnte nicht gefunden werden - Möglicherweise wurde es gelöscht oder verschoben.';
$txt['error_topic_gone_short'] = 'gelöschtes Thema.';
$txt['error_not_find_member'] = 'Deine E-Mail-Adresse wurde nicht gefunden, nur registrierte Benutzer dürfen Beiträge schreiben.';
$txt['error_not_find_member_short'] = 'E-Mail-ID nicht in der Datenbank';
$txt['error_key_sender_match'] = 'Der E-Mail-Schlüssel war gültig, aber du hast die Antwort von einer anderen Adresse abgeschickt. Die E-Mail muss von der gleichen Adresse abgeschickt werden, an die sie auch geschickt wurde.';
$txt['error_key_sender_match_short'] = 'Schlüssel fehlerhaft';
$txt['error_not_find_entry'] = 'Es scheint als hast du bereits per E-Mail auf diese Benachrichtigung geantwortet. Wenn du deinen Beitrag ändern möchtest, mache das bitte über die Weboberfläche des Forums. Wenn du eine weitere Antwort schreiben möchtest, dann beantworte bitte die zuletzt erhaltene Benachrichtigung.';
$txt['error_not_find_entry_short'] = 'Schlüssel abgelaufen';
$txt['error_pm_not_found'] = 'Die Private Mitteilung, auf die du geantwortet hast, wurde nicht gefunden.';
$txt['error_pm_not_found_short'] = 'Private Mitteilung nicht gefunden.';
$txt['error_pm_not_allowed'] = 'Du hast keine Berechtigung, Private Mitteilungen zu verschicken';
$txt['error_pm_not_allowed_short'] = 'Keine Bereichtigung zum Versand einer Privaten Mitteilung.';
$txt['error_no_message'] = 'Die E-Mail war leer. Ohne Inhalt kann kein Beitrag erstellt werden.';
$txt['error_no_message_short'] = 'Leere Nachricht';
$txt['error_no_subject'] = 'Um ein neues Thema zu erstellen, wird ein Betreff benötigt.';
$txt['error_no_subject_short'] = 'Kein Betreff';
$txt['error_board_gone'] = 'Das Board, in welches du schreiben wolltest, war entweder ungültig oder du hast keine Berechtigung dazu.';
$txt['error_board_gone_short'] = 'Ungültiges oder geschütztes Board';
$txt['error_missing_key'] = 'E-Mail-Schlüssel ist nicht vorhanden. E-Mails werden nur dann akzeptiert, wenn sie als Antwort auf eine Benachrichtigung geschickt werden. Die E-Mail muss von der gleichen E-Mail-Adresse geschickt werden, die auch die Benachrichtigung erhalten hat, und benötig einen gültigen Schlüssel.';
$txt['error_missing_key_short'] = 'Fehlender Schlüssel';
$txt['error_found_spam'] = 'Warnung: dein Beitrag wurde als möglicher Spam klassifiziert und wurde deshalb nicht im Forum erstellt.';
$txt['error_found_spam_short'] = 'Möglicheweise Spam';
$txt['error_pm_not_find_entry'] = 'Es sieht so aus, als hättest du bereits auf diese Private Mitteilung geantwortet. Wenn du eine weitere Antwort schreiben möchtest, erledige das bitte über die Weboberfläche des Forums oder warte, bis du eine erneute Antwort erhalten hast. ';
$txt['error_pm_not_find_entry_short'] = 'PM-Schlüssel abgelaufen';
$txt['error_not_find_board'] = 'Es wurde versucht, ein neues Thema in einem nicht existierenden Board zu erstellen. Möglicherweise ein versuchter Hacker-Angriff?';
$txt['error_not_find_board_short'] = 'Kein existierendes Board ';
$txt['error_no_pm_attach'] = '[Dateianlagen bei Privaten Mitteilungen nicht möglich]';
$txt['error_no_attach'] = '[E-Mail-Dateianlagen sind deaktiviert]';
$txt['error_in_maintenance_mode'] = 'E-Mail empfangen, während der Wartungsmodus des Forums aktiviert war. Beitrag konnte zu der Zeit nicht erstellt werden.';
$txt['error_in_maintenance_mode_short'] = 'Im Wartungsmodus';
$txt['error_email_notenabled_short'] = 'Nicht aktiviert';
$txt['error_email_notenabled'] = 'Die "Beitrag per E-Mail"-Funktion war nicht aktiviert, die E-Mail konnte nicht verarbeitet werden.';
$txt['error_permission'] = 'Der Ersteller des Beitrags hat keine Berechtigung, Beiträge per E-Mail in diesem Board zu erstellen. ';
$txt['error_permission_short'] = 'No permissions';
$txt['error_bounced'] = 'The message was refused by the destination mail server';
$txt['error_bounced_short'] = 'The message could not be delivered';

// Maillist page items
$txt['ml_admin_configuration'] = 'Mailinglisten-Einstellungen';
$txt['ml_configuration_desc'] = 'In diesem Bereich kannst du diverse Einstellungen für die "Beitrag per E-Mail"-Funktion vornehmen.';
$txt['ml_emailerror_none'] = 'Es gibt keine Fehler, die einen Moderator-Zugriff erforderlich machen.';
$txt['ml_emailerror'] = 'Fehlgeschlagene E-Mails';
$txt['ml_emailsettings'] = 'Einstellungen';

// Settings tab
$txt['maillist_enabled'] = 'Aktiviere Mailinglisten-Funktionen';
$txt['pbe_post_enabled'] = 'Erlaube das Erstellen von Beiträgen per E-Mail';
$txt['pbe_pm_enabled'] = 'Erlaube das Antworten auf Private Mitteilungen per E-Mail';
$txt['pbe_no_mod_notices'] = 'Moderator-Warnungen abschalten';
$txt['pbe_no_mod_notices_desc'] = 'Sende keine Benachrichtigungen von verschobenen, gesperrten, gelöschten und zusammengefügten Themen. Diese belasten dein E-Mail-Postfach unnötig mit Speicherplatz.';
$txt['pbe_bounce_detect'] = 'Turn on automatic bounce detection';
$txt['pbe_bounce_detect_desc'] = 'Attempt to identify mail bounces and disable further notifications';
$txt['pbe_bounce_record'] = 'Record bounce messages in failed mail after auto processing';
$txt['pbe_bounce_record_desc'] = 'Bounce messages will always be recorded if Bounce Detection is disabled';

$txt['saved'] = 'Information gespeichert.';

// General Sending Settings
$txt['maillist_outbound'] = 'Generelle Sende-Einstellungen';
$txt['maillist_outbound_desc'] = 'Mit diesen Einstellungen kannst du das Aussehen ausgehender E-Mails beeinflussen und definieren, wohin Antworten geschickt werden sollen.';
$txt['maillist_group_mode'] = 'Aktiviere Gruppen-Maillinglisten-Modus';
$txt['maillist_digest_enabled'] = 'Aktiviere tägliche E-Mail-Reports (enthalten einen Auszug der Themen).';
$txt['maillist_sitename'] = 'Seiten-Name, der für die E-Mails als Absender benutzt werden soll (nicht die E-Mail-Adresse)';
$txt['maillist_sitename_desc'] = 'Anzeigename der E-Mail. Der Anzeigename wird an verschiedenen Stellen in der E-Mail dargestellt und ist unter anderen im Betreff der Mail enthalten: "[Anzeigename] Betreff"';
$txt['maillist_sitename_post'] = 'z.B. &lt;<strong>Name des Forums</strong>&gt;emailpost@yourdomain.com';
$txt['maillist_sitename_address'] = 'Von- und Antwort-E-Mail-Adresse';
$txt['maillist_sitename_address_desc'] = 'Die E-Mail-Adresse, an die E-Mails geschickt werden sollen. Wenn das Feld leer bleibt, wird die E-Mail-Adresse des Webmasters aus den Forum-Einstellungen benutzt.';
$txt['maillist_sitename_regards'] = 'E-Mail-Signatur';
$txt['maillist_sitename_regards_desc'] = 'Signatur, die unter alle E-Mails angehängt werden soll, z.B. "mit freundlichen Grüßen, dein Forum-Team"';
$txt['maillist_sitename_address_post'] = 'z.B. emailpost@yourdomain.com';
$txt['maillist_sitename_help'] = 'E-Mail-Adresse für die Hilfe';
$txt['maillist_sitename_help_desc'] = 'Wird für den "List Owner"-Header benutzt und kann helfen, das ausgehende E-Mails nicht als Spam klassifiziert werden.';
$txt['maillist_sitename_help_post'] = 'z.B. help@yourdomain.com';
$txt['maillist_mail_from'] = 'E-Mail-Adresse für Benachrichtigungen';
$txt['maillist_mail_from_desc'] = 'Die E-Mail-Adresse, die für Kennwort-Erinnerungen, Benachrichtigungen etc. benutzt wird. Wenn das Feld leer bleibt, wird die E-Mail-Adresse des Webmasters aus den Forum-Einstellungen benutzt.';
$txt['maillist_mail_from_post'] = 'z.B. noreply@yourdomain.com';

// Imap settings
$txt['maillist_imap'] = 'IMAP-Einstellungen';
$txt['maillist_imap_host'] = 'Postfach-Server-Name';
$txt['maillist_imap_host_desc'] = 'Gib den Server-Namen an, optional auch den Port. z.B. imap.gmail.com:993';
$txt['maillist_imap_mailbox'] = 'Postfach-Name';
$txt['maillist_imap_mailbox_desc'] = 'Ordner-Namen des Postfachs angeben, z.B. EINGANG';
$txt['maillist_imap_uid'] = 'Benutzername des Postfachs';
$txt['maillist_imap_uid_desc'] = 'Benutzername zur Anmeldung am Postfach.';
$txt['maillist_imap_pass'] = 'Kennwort des Postfachs';
$txt['maillist_imap_pass_desc'] = 'Kennwort zur Anmeldung am Postfach';
$txt['maillist_imap_connection'] = 'Postfach-Verbindung';
$txt['maillist_imap_connection_desc'] = 'Typ der Verbindung zum Postfach: IMAP oder POP3 (Normal, TLS- oder SSL-Modus).';
$txt['maillist_imap_unsecure'] = 'IMAP';
$txt['maillist_pop3_unsecure'] = 'POP3';
$txt['maillist_imap_tls'] = 'IMAP/TLS';
$txt['maillist_imap_ssl'] = 'IMAP/SSL';
$txt['maillist_pop3_tls'] = 'POP3/TLS';
$txt['maillist_pop3_ssl'] = 'POP3/SSL';
$txt['maillist_imap_delete'] = 'Lösche Nachrichten';
$txt['maillist_imap_delete_desc'] = 'Versuche, Nachrichten zu löschen, nachdem sie verarbeitet wurden.';
$txt['maillist_imap_reason'] = 'Das folgende Feld sollte leer bleiben, wenn eingehende Nachrichten zu Beiträgen im Forum gemacht werden sollen (empfohlen)';
$txt['maillist_imap_missing'] = 'IMAP-Erweiterung auf dem Server nicht installiert, keine Einstellungen verfügbar.';
$txt['maillist_imap_cron'] = 'Fake-Cron (geplanter Auftrag)';
$txt['maillist_imap_cron_desc'] = 'Wenn du keine echten Cron-Jobs anlegen kannst, kann alternativ ein geplanter Auftrag des Forums diese Aufgabe übernehmen.';
$txt['scheduled_task_desc_pbeIMAP'] = 'Startet den "Beitrag per E-Mail"-Agenten und verarbeitet neue E-Mails in einem dafür vorgesehenen Postfach';

// General Receiving Settings
$txt['maillist_inbound'] = 'Generelle Empfangs-Einstellungen';
$txt['maillist_inbound_desc'] = 'Diese Einstellungen behandeln E-Mails, die ein neues Thema im Forum erstellen. Antworten auf die Benachrichtigungs-E-Mail bleiben davon unberührt.';
$txt['maillist_newtopic_change'] = 'Erlaubt es, neue Themen zu starten, indem der Betreff der Nachricht verändert wird.';
$txt['maillist_newtopic_needsapproval'] = 'Benötigt Genehmigung neuer Themen';
$txt['maillist_newtopic_needsapproval_desc'] = 'Neue Themen, die über die "Beitrag per E-Mail"-Funktion rein kommen, müssen zunächst freigeschaltet werden, bevor ein neuer Beitrag im Forum erstellt wird. Dies verhindert E-Mail-Spoofing.';
$txt['recommended'] = 'Wird empfohlen';
$txt['experimental'] = 'This functionality is experimental';
$txt['receiving_address'] = 'E-Mail-Adressen für den Empfang';
$txt['receiving_board'] = 'Board für neue Themen';
$txt['reply_add_more'] = 'eine weitere Adresse hinzufügen';
$txt['receiving_address_desc'] = 'Gebe verschiedene E-Mail-Adressen gefolgt von der Board-ID ein, um Boards zu definieren, in welchen die Beiträge der entsprechenden E-Mail-Adresse erstellt werden sollen. Benutzer müssen eine E-Mail an die entsprechende Adresse senden, um einen Beitrag im dazugehörigen Board zu erstellen. Um eine Zuordnung zu entfernen, leere das Feld der E-Mail-Adresse.';
$txt['email_not_valid'] = 'Die E-Mail-Adresse (%s) ist ungültig.';
$txt['board_not_valid'] = 'Du hast eine ungültige Board-ID eingegeben (%d)';

// Other settings
$txt['misc'] = 'Weitere Einstellungen';
$txt['maillist_allow_attachments'] = 'Erlaube einen Ahnang an E-Mails als Dateianhang im Forum (funktioniert nicht bei Privaten Mitteilungen)';
$txt['maillist_key_active'] = 'Tage, wie lange ein Schlüssel in der Datenbank als gültig gilt';
$txt['maillist_key_active_desc'] = 'z.B. wie lange sollen Antworten akzeptiert werden, nachdem eine Benachrichtigung zugestellt wurde.';
$txt['maillist_sig_keys'] = 'Wörter, die auf den Anfang einer E-Mail-Singatur von Benutzern hindeuten.';
$txt['maillist_sig_keys_desc'] = 'Teile Wörter mit dem | Zeichen. Beispiele: "mfg|Grüßen|Gruß". Zeilen, die mit diesen Wörtern beginnen, werden folglich als Anfang einer Signatur definiert.';
$txt['maillist_leftover_remove'] = 'Zeilen, die als Überreste von E-Mails erkannt werden';
$txt['maillist_leftover_remove_desc'] = 'Teile Wörter mit dem | Zeichen. Beispiele: "An:|Antwort:|Gesendet:|Betreff:|Datum:|Von:". Die meisten Wörter werden entfernt, einige werden aber vielleicht zu Zitaten umgewandelt. Bitte handle hier mit Vorsicht!';
$txt['maillist_short_line'] = 'Länge der Zusammenfassung.';
$txt['maillist_short_line_desc'] = 'Änderung der Standardeinstellung kann ungewöhnliche Effekte erzielen, mit Vorsicht umstellen.';

// Failed log actions
$txt['approved'] = 'E-Mail wurde genehmigt und Beitrag erstellt';
$txt['error_approved'] = 'Beim Genehmigen der E-Mail ist ein Fehler aufgetreten';
$txt['id'] = '#';
$txt['error'] = 'Fehler';
$txt['key'] = 'Schlüssel';
$txt['message_id'] = 'Text';
$txt['message_type'] = 'Typ';
$txt['message_action'] = 'Aktionen';
$txt['emailerror_title'] = 'Fehlerhafte E-Mails - Protokoll';
$txt['show_notice'] = 'E-Mail-Details';
$txt['private'] = 'Privat';
$txt['show_notice_text'] = 'Text';
$txt['noaccess'] = 'Private Mitteilungen dürfen nicht eingesehen werden';
$txt['badid'] = 'Fehlerhafte oder fehlende E-Mail-ID';
$txt['delete_warning'] = 'Bist du sicher, dass du diesen Eintrag löschen möchtest?';
$txt['pm_approve_warning'] = 'Genehmige diese Mitteilung mit Vorsicht!
Die Mitteilung, auf die geantwortet wurde, wurde gelöscht.
ElkArte versucht, andere Mitteilungen, die Bestandteil der Konversation waren, zu finden. Die Ergebnisse müssen aber nicht zu 100% stimmen!
Im Zweifel sollte die Aktion besser abgebrochen werden.';
$txt['filter_delete_warning'] = 'Bist du sicher, dass der Filter gelöscht werden soll?';
$txt['parser_delete_warning'] = 'Bist du sicher, dass der Parser gelöscht werden soll?';
$txt['bounce'] = 'Bounce';
$txt['heading'] = 'Hier die Liste der fehlerhaften "Beitrag per E-Mail"-Beiträge. Hier kannst du Nachrichten einsehen, freigeben (falls möglich), löschen oder sie zurück an den Absender schicken.';
$txt['cant_approve'] = 'Die Nachricht kann aufgrund eines Fehlers nicht genehmigt werden (die automatische Reparatur ist fehlgeschlagen.)';
$txt['email_attachments'] = '[Es befinden sich %d Dateianhänge in der Nachricht]';
$txt['email_failure'] = 'Fehlergrund';

// Filters
$txt['filters'] = 'E-Mail-Filter';
$txt['add_filter'] = 'Filter hinzufügen';
$txt['sort_filter'] = 'Sortiere filter';
$txt['edit_filter'] = 'Ändere vorhandenen Filter';
$txt['no_filters'] = 'Du hast bisher keine Filterregeln definiert.';
$txt['error_no_filter'] = 'Konnte den angegebenen Filter nicht finden bzw. laden.';
$txt['regex_invalid'] = 'Der reguläre Ausdruck ist fehlerhaft.';
$txt['filter_to'] = 'Ersetzungstext';
$txt['filter_to_desc'] = 'Ersetze den gefundenen Text mit diesem.';
$txt['filter_from'] = 'Suchtext';
$txt['filter_from_desc'] = 'Den Text eingeben, nach dem gesucht werden soll.';
$txt['filter_type'] = 'Typ';
$txt['filter_type_desc'] = 'Standard sucht nach dem genauen Laut und wird diesen ersetzen. Du kannst auch einen regulären Ausdruck als Wildcard nutzen. Dieser muss im PCRE-Format übergeben werden.';
$txt['filter_name'] = 'Name';
$txt['filter_name_desc'] = 'Optional eine Kurzbeschreibung angeben, die die Funktion des Filters umschreibt.';
$txt['filters_title'] = 'Von hier aus kannst du E-Mail-Filter bearbeiten, erstellen oder löschen. Filter durchsuchen die E-Mails nach bestimmten Textmustern und ersetzen den Text durch eigene Inhalte. Üblicherweise wird der Text dabei einfach durch nichts ersetzt.';
$txt['filter_invalid'] = 'Diese Einstellung ist ungültig und kann nicht gespeichert werden.';
$txt['error_no_id_filter'] = 'Die Filter-ID ist ungültig.';
$txt['saved_filter'] = 'Der Filter wurde erfolgreich gespeichert.';
$txt['filter_sort_description'] = 'Die Filter werden in der angegebenen Reihenfolge abgearbeitet, zunächst die regulären Ausdrücke, dann die Standard-Filter. Um die Reihenfolge zu ändern, verschiebe die Filter per Drag&Drop. Es muss allerdings immer zuerst ein regulärer Ausdruck abgearbeitet werden!';

// Parsers
$txt['saved_parser'] = 'Der Parser wurder erfolgreich gespeichert.';
$txt['parser_reordered'] = 'Die Felder wurden erfolgreich umsortiert.';
$txt['error_no_id_parser'] = 'Die ID des Parsers ist ungültig.';
$txt['add_parser'] = 'Parser hinzufügen';
$txt['sort_parser'] = 'Sortiere Parser';
$txt['edit_parser'] = 'Ändere existierenden Parser';
$txt['parsers'] = 'E-Mail-Parser';
$txt['parser_from'] = 'Suchtext in der E-Mail';
$txt['parser_from_desc'] = 'Gebe bitte den Beginn der originalen E-Mail ein. Das System wird den Rest der Nachricht an dieser Stelle entfernen und nur die neue Nachricht bestehen lassen (wenn möglich).';
$txt['parser_type'] = 'Typ';
$txt['parser_type_desc'] = 'Standard sucht nach dem genauen Laut und wird diesen ersetzen. Du kannst auch einen regulären Ausdruck als Wildcard nutzen. Dieser muss im PCRE-Format übergeben werden.';
$txt['parser_name'] = 'Name';
$txt['parser_name_desc'] = 'Optional den Namen des E-Mail-Clients angeben, für den der Filter erstellt wurde.';
$txt['no_parsers'] = 'Bisher sind keine Parser definiert worden.';
$txt['parsers_title'] = 'Hier kannst du E-Mail-Parser hinzufügen und bestehende editieren oder entfernen. Parser suchen nach einem vorgegebenen Textbaustein und entfernen den Rest der Nachricht ab diesem Punkt. Führt dies zu einer leeren Nachricht, wird der Vorgang abgebrochen.';
$txt['option_standard'] = 'Standard';
$txt['option_regex'] = 'Reguläre Ausdrücke';
$txt['parser_sort_description'] = 'Parser werden in der folgenden Reihenfolge abgearbeitet. Um das zu ändern, ziehe die Elemente per Drag&Drop an einen anderen Platz.';

// Bounce
$txt['bounce_subject'] = 'Fehler';
$txt['bounce_error'] = 'Fehler';
$txt['bounce_title'] = 'Bounce E-Mail-Creator';
$txt['bounce_notify_subject'] = 'Bounce Benachrichtigungs-Betreff';
$txt['bounce_notify'] = 'Sende eine Bounce Benachrichtigung';
$txt['bounce_notify_template'] = 'Wähle die Vorlage';
$txt['bounce_notify_body'] = 'Bounce Benachrichtigungs-E-Mail';
$txt['bounce_issue'] = 'Sende Bounce';
$txt['bad_bounce'] = 'Die Bounce Nachricht und/oder der Betreff ist leer und kann nicht versandt werden.';

// Subject tags
$txt['RE:'] = 'Antw.:';
$txt['FW:'] = 'WG:';
$txt['FWD:'] = 'WG:';
$txt['SUBJECT:'] = 'Betreff:';

// Quote strings
$txt['email_wrote'] = 'hat geschrieben';
$txt['email_quoting'] = 'Zitiere';
$txt['email_quotefrom'] = 'Zitat von';
$txt['email_on'] = 'am';
$txt['email_at'] = 'von';

// Our digest strings for the digest "template"
$txt['digest_preview'] = "\n     <*> Topic Summary:\n     ";
$txt['digest_see_full'] = "\n\n <*> du kannst das vollständige Thema über den folgenden Link ansehen:\n <*> ";
$txt['digest_reply_preview'] = "\n     <*> Latest Reply:\n     ";
$txt['digest_unread_reply_link'] = "\n\n     <*> See all your unread replies to this topic at the following link:\n     <*> ";
$txt['message_attachments'] = '<*> Die Nachricht beinhaltet %d Dateien.
<*> Klicke auf diesen Link, um sie dir anzusehen: %s';

// Help
$txt['maillist_help'] = 'Benötigst du Hilfe, besuche die Mailinglisten-Sektion im <a href="https://github.com/elkarte/Elkarte/wiki/Maillist-Feature" target="_blank" class="new_win">ElkArte Wiki</a>';

// Email bounce templates
$txt['ml_bounce_templates_title'] = 'Benutzerdefinierte Bounce E-Mail Vorlagen';
$txt['ml_bounce_templates_none'] = 'Bisher wurden keine benutzerdefinierten Bounce Templates erstellt.';
$txt['ml_bounce_templates_time'] = 'Erstellungszeitpunkt';
$txt['ml_bounce_templates_name'] = 'Vorlage';
$txt['ml_bounce_templates_creator'] = 'Erstellt von';
$txt['ml_bounce_template_add'] = 'Vorlage hinzufügen';
$txt['ml_bounce_template_modify'] = 'Vorlage ändern';
$txt['ml_bounce_template_delete'] = 'Ausgewählte löschen';
$txt['ml_bounce_template_delete_confirm'] = 'Bist du sicher, dass du die ausgewählten Vorlagen löschen möchtest?';
$txt['ml_bounce_body'] = 'Text der Benachrichtigung';
$txt['ml_bounce_template_subject_default'] = 'Betreff der Benachrichtigung';
$txt['ml_bounce_template_desc'] = 'Benutze diese Seite, um Details für die Vorlage festzulegen. Bitte beachte, dass der Betreff nicht Teil der Vorlage ist.';
$txt['ml_bounce_template_title'] = 'Vorlagen-Titel';
$txt['ml_bounce_template_title_desc'] = 'Ein Name zur Nutzung in der Vorlagen-Auswahl-Liste';
$txt['ml_bounce_template_body'] = 'Inhalt der Vorlage';
$txt['ml_bounce_template_body_desc'] = 'Der Inhalt der Vorlage. Du kannst folgende Abkürzungen nutzen:<ul style="margin-top: 0px;"><li>{MEMBER} - Benutzername.</li><li>{FORUMNAME} - Forum-Name.</li><li>{FORUMNAMESHORT} - Kurzname des Forums.</li><li>{ERROR} - Von der E-Mail generierter Fehler.</li><li>{SUBJECT} - Btreff der fehlerhaften E-Mail.</li><li>{SCRIPTURL} - URL des Forums.</li><li>{EMAILREGARDS} - Signatur der E-Mail-Vorlage.</li><li>{REGARDS} - Standard-E-Mail-Signatur des Forums.</li></ul>';
$txt['ml_bounce_template_personal'] = 'Persönliche Vorlage';
$txt['ml_bounce_template_personal_desc'] = 'Wenn du diese Option auswählst, wirst nur du diese Vorlage sehen, ändern und benutzen können, andernfalls gilt das auch für alle Moderatoren.';
$txt['ml_bounce_template_error_no_title'] = 'Du musst einen sprechenden Titel vergeben.';
$txt['ml_bounce_template_error_no_body'] = 'Es muss ein Vorlagen-Text definiert werden.';

$txt['ml_bounce'] = 'E-Mail-Vorlagen';
$txt['ml_bounce_description'] = 'In diesem Bereich kannst du E-Mail-Bounce-Vorlagen verändern oder hinzufügen. Diese werden benutzt, um Nachrichten abzuweisen.';
$txt['ml_bounce_title'] = 'Bounce';
$txt['ml_bounce_subject'] = 'Betreff der Benachrichtigung';
$txt['ml_bounce_body'] = 'Text der Benachrichtigung';
$txt['ml_inform_title'] = 'Benachrichtigung';
$txt['ml_inform_subject'] = 'Es gab ein Problem mit deiner E-Mail';
$txt['ml_inform_body'] = 'Hallo {MEMBER},

die E-Mail, die du an {FORUMNAMESHORT} geschickt hast, verursachte folgenden Fehler: {ERROR}

Um zukünftige Verzögerungen zu vermeiden, solltest du diesen Fehler beheben.

{EMAILREGARDS}';
$txt['ml_bounce_template_body_default'] = 'Hallo. Diese Nachricht kommt von der "Beitrag per E-Mail"-Funktion vom {FORUMNAMESHORT}. Leider konnte deine Nachricht mit dem Betreff {SUBJECT} nicht erstellt werden.

Folgender Fehler ist aufgetreten: {ERROR}

Der Fehler tritt immer wieder auf, ich habe inzwischen aufgegeben.

{EMAILREGARDS}'; // redundant?