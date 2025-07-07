<?php
// Version: 1.1; ManagePaid

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Andere';

$txt['paid_username'] = 'Benutzername';

$txt['paid_subscriptions_desc'] = 'Hier kannst du zu bezahlende Abonnements hinzufügen, löschen oder ändern.';
$txt['paid_subs_settings'] = 'Einstellungen';
$txt['paid_subs_settings_desc'] = 'Hier kannst du die für Benutzer verfügbaren Bezahlungsmöglichkeiten ändern.';
$txt['paid_subs_view'] = 'Abonnements anschauen';
$txt['paid_subs_view_desc'] = 'Hier kannst du alle verfügbaren Abonnements anschauen.';

// Setting type strings.
$txt['paid_enabled'] = 'Bezahlte Abonnements aktivieren';
$txt['paid_enabled_desc'] = 'Dieser Haken muss aktiviert sein, damit bezahlte Abonnements im Forum benutzt werden können.';
$txt['paid_email'] = 'Benachrichtigungs-E-Mail versenden';
$txt['paid_email_desc'] = 'Den Administrator informieren, wenn sich ein Abonnement automatisch ändert.';
$txt['paid_email_to'] = 'E-Mail-Adresse zur Kontaktaufnahme';
$txt['paid_email_to_desc'] = 'Eine durch Kommata getrennte Liste mit E-Mail-Adressen, an die - zusätzlich zu Administratoren - Benachrichtigungen versandt werden sollen.';
$txt['paidsubs_test'] = 'Testmodus aktivieren';
$txt['paidsubs_test_desc'] = 'Dies versetzt die Funktion in den Testmodus, welcher, wann immer dies möglich ist, Sandbox-Methoden (etwa wie bei PayPal) verwendet. Aktiviere dies nur, wenn du dir sicher bist, was du tust!';
$txt['paidsubs_test_confirm'] = 'Bist du sicher, dass du den Testmodus aktivieren möchtest?';
$txt['paid_email_no'] = 'Keine Benachrichtigungen versenden';
$txt['paid_email_error'] = 'Informieren, wenn ein Abonnement scheitert';
$txt['paid_email_all'] = 'Über alle Abonnementänderungen informieren';
$txt['paid_currency'] = 'Währung auswählen';
$txt['paid_currency_code'] = 'Währungskennung';
$txt['paid_currency_code_desc'] = 'Code, welcher von Kaufleuten verwendet wird.';
$txt['paid_currency_symbol'] = 'Symbol, welches bei der Bezahlmethode verwendet wird.';
$txt['paid_currency_symbol_desc'] = 'Verwende "%1.2f", um festzulegen, wie Zahlen angezeigt werden sollen, z.B.: $%1.2f, %1.2fEUR, etc.';

$txt['paypal_email'] = 'PayPal-E-Mail-Adresse';
$txt['paypal_email_desc'] = 'Leer lassen, wenn PayPal nicht genutzt werden soll.';

$txt['authorize_id'] = 'Authorize.net-Installations-ID';
$txt['authorize_id_desc'] = 'Die Installations-ID, welche von Authorize.net generiert wurde. Lasse diese frei, wenn du Authorize.net nicht verwendest.';
$txt['authorize_transid'] = 'Authorize.Net-Transaktions-ID';

$txt['2co_id'] = '2checkout.com-Installations-ID';
$txt['2co_id_desc'] = 'Die Installations-ID, welche von 2co.com generiert wurde. Lasse diese frei, wenn du 2co.com nicht verwendest.';
$txt['2co_password'] = '2checkout.com-Geheimwort';
$txt['2co_password_desc'] = 'Dein geheimes 2checkout-Wort.';
$txt['2co_password_wrong'] = 'Dein geheimes 2checkout-Wort wurde nicht akzeptiert.';

$txt['paid_settings_save'] = 'Speichern';

$txt['paid_note'] = '<strong class="alert">Hinweis:</strong><br />Damit Abonnements automatisch verlängert werden, musst du für jede Bezahlmethode eine Return URL angeben. Diese sollte wie folgt aussehen:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>{board_url}/subscriptions.php</strong><br /><br />
	Um den Link für PayPal jetzt direkt zu setzen, <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">klicke hier</a>.<br />
	Bei anderen Bezahlmethoden findest du die benötigte Return URL normalerweise in deren Konfigurationsbereich unter dem Stichwort &quot;Return URL&quot; oder &quot;Callback URL&quot;.';

// View subscription strings.
$txt['paid_name'] = 'Name';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Betrag';
$txt['paid_duration'] = 'Dauer';
$txt['paid_active'] = 'Aktiv';
$txt['paid_pending'] = 'anstehende Zahlungen';
$txt['paid_finished'] = 'Beendet';
$txt['paid_total'] = 'Gesamt';
$txt['paid_is_active'] = 'Aktiviert';
$txt['paid_none_yet'] = 'Du hast noch keine Abonnements bestellt.';
$txt['paid_none_ordered'] = 'Du hast keine bezahlten Abonnements.';
$txt['paid_payments_pending'] = 'Ausstehende Zahlung';
$txt['paid_order'] = 'Bestellen';

$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Neues Abonnement hinzufügen';
$txt['paid_edit_subscription'] = 'Abonnement ändern';
$txt['paid_delete_subscription'] = 'Abonnement löschen';

$txt['paid_mod_name'] = 'Name des Abonnements';
$txt['paid_mod_desc'] = 'Beschreibung';
$txt['paid_mod_reminder'] = 'Erinnerungs-E-Mail senden';
$txt['paid_mod_reminder_desc'] = 'Anzahl, wie viele Tage vor Ablauf des Abonnements eine Erinnerungs-E-Mail versendet werden soll (in Tagen, 0 = deaktiviert).';
$txt['paid_mod_email'] = 'E-Mail bei erfolgreicher Bestellung senden';
$txt['paid_mod_email_desc'] = '{NAME} ist der Benutzername; {FORUM} ist der Name des Forums. Der Betreff der E-Mail sollte in der ersten Zeile stehen. Leer lassen, um keine E-Mail zu senden.';
$txt['paid_mod_cost_usd'] = 'Summe (USD)';
$txt['paid_mod_cost_eur'] = 'Summe (EUR)';
$txt['paid_mod_cost_gbp'] = 'Summe (GBP)';
$txt['paid_mod_cost_blank'] = 'Leer lassen, um diese Währung nicht anzubieten.';
$txt['paid_mod_span'] = 'Dauer des Abonnements';
$txt['paid_mod_span_days'] = 'Tage';
$txt['paid_mod_span_weeks'] = 'Wochen';
$txt['paid_mod_span_months'] = 'Monate';
$txt['paid_mod_span_years'] = 'Jahre';
$txt['paid_mod_active'] = 'Aktiv';
$txt['paid_mod_active_desc'] = 'Das Abonnement muss aktiv sein, um neue Benutzer zu erhalten.';
$txt['paid_mod_prim_group'] = 'Primäre Gruppe nach Bestellung';
$txt['paid_mod_prim_group_desc'] = 'Primäre Gruppe, welche dem Benutzer nach der Bestellung zugewiesen wird.';
$txt['paid_mod_add_groups'] = 'Weitere Gruppen nach Bestellung';
$txt['paid_mod_add_groups_desc'] = 'Weitere Gruppe, welche dem Benutzer nach Bestellung zugewiesen wird.';
$txt['paid_mod_no_group'] = 'Nicht ändern';
$txt['paid_mod_edit_note'] = 'Diese Gruppe hat existierende Abonnenten, daher können die Einstellungen nicht geändert werden!';
$txt['paid_mod_delete_warning'] = '<strong>WARNUNG</strong><br /><br />Solltest du dieses Abonnement löschen, verlieren alle Abonnenten ihre durch dieses Abonnement zugewiesenen Berechtigungen! Solltest du dir nicht sicher sein, empfehlen wir die Deaktivierung des betreffenden Abonnements, statt es zu löschen.<br />';
$txt['paid_mod_repeatable'] = 'Automatische Erneuerung durch den Benutzer erlauben';
$txt['paid_mod_allow_partial'] = 'Teil-Abonnement erlauben';
$txt['paid_mod_allow_partial_desc'] = 'Ist diese Option aktiviert, erhalten die Benutzer, die weniger zahlen, nur einen Teil der Leistungen, die das Abonnement verspricht.';
$txt['paid_mod_fixed_price'] = 'Abonnement mit Festpreis und festgelegter Dauer';
$txt['paid_mod_flexible_price'] = 'Abonnementpreis variiert nach bestellter Dauer';
$txt['paid_mod_price_breakdown'] = 'Flexibler Preisnachlass';
$txt['paid_mod_price_breakdown_desc'] = 'Hier kannst du festlegen, wie viel das Abonnement abhängig von der Dauer des Abonnements kosten soll. Beispiel: Kostet ein Monat 12EUR, so kannst du für ein Jahr einen Preis von 100EUR angeben. Möchtest du für eine bestimmte Dauer keinen Preis definieren, so lasse dieses Feld einfach frei.';
$txt['flexible'] = 'Flexibel';

$txt['paid_per_day'] = 'Preis pro Tag';
$txt['paid_per_week'] = 'Preis pro Woche';
$txt['paid_per_month'] = 'Preis pro Monat';
$txt['paid_per_year'] = 'Preis pro Jahr';
$txt['day'] = 'Tag';
$txt['week'] = 'Woche';
$txt['month'] = 'Monat';
$txt['year'] = 'Jahr';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Benutzer anschauen';
$txt['view_users_subscribed'] = 'Benutzer mit dem Abonnement \'%1$s\'';
$txt['no_subscribers'] = 'Derzeit hat niemand etwas abonniert.';
$txt['add_subscriber'] = 'Neuen Abonnenten hinzufügen';
$txt['edit_subscriber'] = 'Abonnent editieren';
$txt['delete_selected'] = 'Ausgewählte löschen';
$txt['complete_selected'] = 'Ausgewählte abschließen';

// @todo These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Bist du sicher, dass du die ausgewählten Abonnements löschen möchtest?';
$txt['complete_are_sure'] = 'Bist du sicher, dass du die ausgewählten Abonnements vervollständigen möchtest?';

$txt['start_date'] = 'Startdatum';
$txt['end_date'] = 'Enddatum';
$txt['start_date_and_time'] = 'Startzeit und -datum';
$txt['end_date_and_time'] = 'Endzeit und -datum';
$txt['one_username'] = 'Bitte nur einen Benutzernamen eingeben.';
$txt['minute'] = 'Minute';
$txt['error_member_not_found'] = 'Der eingegebene Benutzer konnte nicht gefunden werden.';
$txt['member_already_subscribed'] = 'Dieser Benutzer ist schon Abonnent dieses Abonnements. Bitte ändere sein existierendes Abonnement.';
$txt['search_sub'] = 'Benutzer suchen';

// Make payment.
$txt['paid_confirm_payment'] = 'Zahlung bestätigen';
$txt['paid_confirm_desc'] = 'Um mit der Zahlung fortzufahren, prüfe die Details und klicke auf "Bezahlen".';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Um mit <a href="http://www.paypal.de/">PayPal</a> zu bezahlen, klicke bitte auf den folgenden Button. Du wirst auf die Seite von PayPal weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_paypal_order'] = 'Mit PayPal bezahlen';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Um mit <a href="http://www.authorize.net">Authorize.Net</a> zu bezahlen, klicke bitte auf den folgenden Button. Du wirst auf die Seite von Authorize.Net weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_authorize_order'] = 'Mit Authorize.Net bezahlen';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Um mit <a href="http://www.2com.com">2co.com</a> zu bezahlen, klicke bitte auf den folgenden Button. Du wirst auf die Seite von 2co.com weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_2co_order'] = 'Mit 2co.com bezahlen';
$txt['paid_done'] = 'Zahlung beendet';
$txt['paid_done_desc'] = 'Danke für deine Zahlung. Wenn die Transaktion bestätigt ist, wird das Abonnement aktiviert.';
$txt['paid_sub_return'] = 'Zu den Abonnements zurückkehren';
$txt['paid_current_desc'] = 'Hier eine Liste deiner vergangenen und aktuellen Abonnements. Um ein laufendes Abonnement zu verlängern, wähle es aus der obenstehenden Liste aus.';
$txt['paid_admin_add'] = 'Abonnement hinzufügen';

$txt['paid_not_set_currency'] = 'Du hast keine Währung eingestellt. Bitte hole das nach, bevor du fortfährst.';
$txt['paid_no_cost_value'] = 'Du musst einen Preis und die Dauer des Abonnements eingeben.';
$txt['paid_all_freq_blank'] = 'Du musst einen Preis für mindestens eine der vier Zeitspannen eingeben.';

// Some error strings.
$txt['paid_no_data'] = 'Es wurden keine gültigen Daten an das Skript gesendet.';

$txt['paypal_could_not_connect'] = 'Konnte mich nicht mit dem PayPal-Server verbinden.';
$txt['paypal_currency_unkown'] = 'Der Umrechnungscode von PayPal (%1$s) passt nicht mit dem Code in den Einstellungen über ein (%2$s)';
$txt['paid_sub_not_active'] = 'Dieses Abonnement verkraftet keine weiteren Benutzer.';
$txt['paid_disabled'] = 'Bezahlte Abonnements sind derzeit deaktiviert.';
$txt['paid_unknown_transaction_type'] = 'Unbekannter Transaktionstyp.';
$txt['paid_empty_member'] = 'Der Abo-Verwalter konnte die Benutzer-ID nicht wiederherstellen.';
$txt['paid_could_not_find_member'] = 'Der Abo-Verwalter konnte den Benutzer mit der ID %1$d nicht finden.';
$txt['paid_count_not_find_subscription'] = 'Der Abo-Verwalter konnte das Abo für den Benutzer mit der ID %1$s und Abo-ID %2$s nicht finden.';
$txt['paid_count_not_find_subscription_log'] = 'Der Abo-Verwalter konnte den Abo-Log-Eintrag für den Benutzer mit der ID %1$s und der Abo-ID %2$s nicht finden.';
$txt['paid_count_not_find_outstanding_payment'] = 'Der Abo-Verwalter konnte kein ausstehendes Abo für den Benutzer mit der ID %1$s und der Abo-ID %2$s finden.';
$txt['paid_admin_not_setup_gateway'] = 'Der Administrator hat die Einstellungen für bezahlte Abonnements noch nicht festgelegt - Bitte versuche es später noch einmal.';
$txt['paid_make_recurring'] = 'Automatisch wiederholende Zahlungen erlauben';

$txt['subscriptions'] = 'Abonnements';
$txt['subscription'] = 'Abonnement';
$txt['subscribers'] = 'Abonneten';
$txt['paid_subs_desc'] = 'Hier eine Liste aller Abonnements, die auf dieser Seite verfügbar sind:';
$txt['paid_subs_none'] = 'Es stehen derzeit keine Abonnements zur Verfügung.';

$txt['paid_current'] = 'Vorhandene Abonnements';
$txt['pending_payments'] = 'Ausstehende Zahlungen';
$txt['pending_payments_desc'] = 'Dieser Benutzer hat die Zahlung für dieses Abonnement getätigt, die Bestätigung liegt jedoch noch nicht vor. Solltest du sicher sein, dass die Zahlung empfangen wurde, klicke auf "Akzeptieren". Alternativ wähle "Entfernen", um alle Daten zu dieser Zahlung zu löschen.';
$txt['pending_payments_value'] = 'Wert';
$txt['pending_payments_accept'] = 'Akzeptieren';
$txt['pending_payments_remove'] = 'Entfernen';