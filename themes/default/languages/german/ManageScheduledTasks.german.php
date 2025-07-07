<?php
// Version: 1.1; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Geplante Aufgaben';
$txt['scheduled_tasks_header'] = 'Alle geplanten Aufgaben';
$txt['scheduled_tasks_name'] = 'Name der Aufgabe';
$txt['scheduled_tasks_next_time'] = 'Nächste Ausführung';
$txt['scheduled_tasks_regularity'] = 'Intervall';
$txt['scheduled_tasks_enabled'] = 'Aktiviert';
$txt['scheduled_tasks_run_now'] = 'Jetzt ausführen';
$txt['scheduled_tasks_save_changes'] = 'Speichere Änderungen';
$txt['scheduled_tasks_time_offset'] = '<strong>Achtung:</strong> Alle Zeitangaben sind <em>Serverzeiten</em> und berücksichtigen nicht die im Forum eingestellte Zeitverschiebung.';
$txt['scheduled_tasks_were_run'] = 'Alle ausgewählten Aufgaben wurden ausgeführt.';
$txt['scheduled_tasks_were_run_errors'] = 'Die folgenden Fehler sind beim Abarbeiten der geplanten Aufgaben aufgetreten:';

$txt['scheduled_tasks_na'] = 'nicht bekannt';
$txt['scheduled_task_approval_notification'] = 'Genehmigungsbenachrichtigungen senden';
$txt['scheduled_task_desc_approval_notification'] = 'E-Mail an alle Moderatoren mit noch ausstehenden Genehmigungen für Beiträge senden.';
$txt['scheduled_task_auto_optimize'] = 'Datenbank optimieren';
$txt['scheduled_task_desc_auto_optimize'] = 'Optimiert die Datenbank, um Fragmentierungsprobleme zu vermeiden.';
$txt['scheduled_task_daily_maintenance'] = 'Tägliche Wartung';
$txt['scheduled_task_desc_daily_maintenance'] = 'Führt täglich wichtige Wartungsarbeiten am Forum durch - Dies sollte nicht deaktiviert werden!';
$txt['scheduled_task_daily_digest'] = 'Tägliche Zusammenfassung';
$txt['scheduled_task_desc_daily_digest'] = 'Sendet eine E-Mail mit der täglichen Zusammenfassung aller abonnierten Themen oder Beiträge.';
$txt['scheduled_task_weekly_digest'] = 'Wöchentliche Zusammenfassung';
$txt['scheduled_task_desc_weekly_digest'] = 'Sendet eine E-Mail mit der wöchentlichen Zusammenfassung aller abonnierten Themen oder Beiträge.';
$txt['scheduled_task_birthdayemails'] = 'Geburtstagsnachricht senden';
$txt['scheduled_task_desc_birthdayemails'] = 'Sendet eine E-Mail mit Geburtstagswünschen an die registrierten Geburtstagskinder.';
$txt['scheduled_task_weekly_maintenance'] = 'Wöchentliche Wartung';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Führt wöchentlich wichtige Wartungsfunktionen des Forum durch - Dies sollte nicht deaktiviert werden!';
$txt['scheduled_task_paid_subscriptions'] = 'Bezahlte Abonnements prüfen';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Sendet Erinnerungen wegen noch zu bezahlenden Abonnements und löscht alle abgelaufenen Abonnements.';
$txt['scheduled_task_remove_topic_redirect'] = 'Lösche "VERSCHOBEN:"-Weiterleitungsthemen.';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Löscht "VERSCHOBEN:"-Themenbenachrichtigungen wie angegeben, wenn das Weiterleitungsthema erzeugt wird.';
$txt['scheduled_task_remove_temp_attachments'] = 'Lösche temporäre Dateianhänge.';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Löscht temporäre Dateianhänge, die erzeugt wurden, aber aus irgendeinem Grund nicht umbenannt oder gelöscht wurden.';
$txt['scheduled_task_remove_old_drafts'] = 'Alte Entwürfe löschen';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Löscht Entwürfe, die älter als die in den Entwurfs-Einstellungen definierte Anzahl von Tagen sind.';
$txt['scheduled_task_remove_old_followups'] = 'Lösche veraltete Follow-Ups.';
$txt['scheduled_task_desc_remove_old_followups'] = 'Lösche Follow-Ups, die in der Datenbank existieren, aber auf ein nicht existierendes Thema verweisen.';
$txt['scheduled_task_maillist_fetch_IMAP'] = 'Hole E-Mails via IMAP';
$txt['scheduled_task_desc_maillist_fetch_IMAP'] = 'Holt E-Mails für die Maillist-Funktion von einem IMAP-Postfach und verarbeitet diese.';
$txt['scheduled_task_user_access_mentions'] = 'Korrigiert Berechtigungen von Benutzer-Erwähnungen.';
$txt['scheduled_task_desc_user_access_mentions'] = 'Überprüft die Berechtigungen der Benutzer für etwaige Erwähnungen inkl. der Benachrichtigungen.';

$txt['scheduled_task_reg_starting'] = 'Beginnt um %1$s';
$txt['scheduled_task_reg_repeating'] = 'wiederholt sich alle %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'Minute(n)';
$txt['scheduled_task_reg_unit_h'] = 'Stunde(n)';
$txt['scheduled_task_reg_unit_d'] = 'Tag(e)';
$txt['scheduled_task_reg_unit_w'] = 'Woche(n)';

$txt['scheduled_task_edit'] = 'Geplante Aufgaben editieren';
$txt['scheduled_task_edit_repeat'] = 'Wiederhole Aufgabe jede(n)';
$txt['scheduled_task_edit_pick_unit'] = 'Zeitraum wählen';
$txt['scheduled_task_edit_interval'] = 'Intervall';
$txt['scheduled_task_edit_start_time'] = 'Startzeit';
$txt['scheduled_task_edit_start_time_desc'] = 'Zeit zum Start der ersten Instanz (Stunden:Minuten)';
$txt['scheduled_task_time_offset'] = 'Bitte beachte, dass du die Startzeit entsprechend der Serverzeit einstellen musst. Aktuelle Serverzeit: %1$s';

$txt['scheduled_view_log'] = 'Protokoll anzeigen';
$txt['scheduled_log_empty'] = 'Momentan sind keine Einträge gespeichert.';
$txt['scheduled_log_time_run'] = 'Startzeit';
$txt['scheduled_log_time_taken'] = 'Benötigte Zeit';
$txt['scheduled_log_time_taken_seconds'] = '%1$d Sekunden';
$txt['scheduled_log_completed'] = 'Aufgabe erledigt';
$txt['scheduled_log_empty_log'] = 'Alle entfernen';
$txt['scheduled_log_empty_log_confirm'] = 'Bist du sicher, dass du das Protokoll vollständig leeren möchtest?';