<?php
// Version: 1.1; Login

// Registration agreement page.
$txt['registration_agreement'] = 'Registrierungsbedingungen';
$txt['registration_privacy_policy'] = 'Privacy Policy';
$txt['agreement_agree'] = 'Ich akzeptiere die Nutzungsbedingungen.';
$txt['agreement_no_agree'] = 'I do not accept the terms of the agreement.';
$txt['policy_agree'] = 'I accept the terms of the privacy policy.';
$txt['policy_no_agree'] = 'I do not accept the terms of the privacy policy.';
$txt['agreement_agree_coppa_above'] = 'Ich akzeptiere die Nutzungsbedingungen und bin über %1$d Jahre alt.';
$txt['agreement_agree_coppa_below'] = 'Ich akzeptiere die Nutzungsbedingungen und bin unter %1$d Jahre alt.';
$txt['agree_coppa_above'] = 'Ich bin mindestens %1d Jahre alt.';
$txt['agree_coppa_below'] = 'Ich bin jünger als %1d Jahre.';

// Registration form.
$txt['registration_form'] = 'Registrierungsformular';
$txt['error_too_quickly'] = 'Du hast dich zu schnell durch den Registrierungs-Vorgang bewegt, schneller als eigentlich möglich. Wie hast du das nur gemacht? Bitte warte einen Moment und versuche es erneut.';
$txt['error_token_verification'] = 'Token-Validierung fehlgeschlagen. Bitte gehe einen Schritt zurück und versuche es erneut.';
$txt['need_username'] = 'Du musst einen Benutzernamen angeben.';
$txt['no_password'] = 'Das Passwortfeld ist leer.';
$txt['improper_password'] = 'Das eingegebene Passwort ist zu lang.';
$txt['incorrect_password'] = 'Das Passwort ist falsch.';
$txt['openid_not_found'] = 'Der angegebene OpenID-Identifier wurde nicht gefunden.';
$txt['maintain_mode'] = 'Wartungsmodus';
$txt['registration_successful'] = 'Registrierung erfolgreich';
$txt['valid_email_needed'] = 'Bitte gebe eine gültige E-Mail-Adresse ein, %1$s.';
$txt['required_info'] = 'Notwendige Angaben';
$txt['additional_information'] = 'Weitere Informationen';
$txt['warning'] = 'Warnung!';
$txt['only_members_can_access'] = 'Nur registrierte Benutzer haben Zugriff auf diesen Bereich.';
$txt['login_below'] = 'Bitte anmelden.';
$txt['login_below_or_register'] = 'Bitte anmelden oder <a href="%1$s">ein Benutzerkonto registrieren</a>.';
$txt['checkbox_agreement'] = 'Ich akzeptiere die Nutzungsbedingungen.';
$txt['checkbox_privacypol'] = 'I accept the privacy policy';
$txt['confirm_request_accept_agreement'] = 'Are you sure you want to force all members to accept the agreement?';
$txt['confirm_request_accept_privacy_policy'] = 'Are you sure you want to force all members to accept the privacy policy?';

$txt['login_hash_error'] = 'Die Passwort-Sicherheit wurde verbessert. Bitte das Passwort erneut eingeben.';

$txt['ban_register_prohibited'] = 'Du hast keine Berechtigung, dich in diesem Forum zu registrieren';
$txt['under_age_registration_prohibited'] = 'Benutzer, die jünger als %d Jahre sind, dürfen sich in diesem Forum nicht registrieren.';

$txt['activate_account'] = 'Kontoaktivierung';
$txt['activate_success'] = 'Dein Benutzerkonto wurde erfolgreich aktiviert. Du kannst dich jetzt anmelden.';
$txt['activate_not_completed1'] = 'Deine E-Mail-Adresse muss vor dem Anmelden überprüft werden.';
$txt['activate_not_completed2'] = 'Benötigst du eine erneute Aktivierungs-E-Mail?';
$txt['activate_after_registration'] = 'Danke für die Registrierung. Du wirst in Kürze eine E-Mail erhalten, mit der du dein Benutzerkonto abschließend aktivieren musst. Solltest du nach einiger Zeit keine E-Mail erhalten haben, prüfe bitte deinen Spam-Ordner.';
$txt['invalid_userid'] = 'Der Benutzer existiert nicht';
$txt['invalid_activation_code'] = 'Ungültiger Aktivierungscode';
$txt['invalid_activation_username'] = 'Benutzername oder E-Mail-Adresse';
$txt['invalid_activation_new'] = 'Wenn du dich mit einer ungültigen E-Mail-Adresse registriert hast, gebe hier eine neue, gültige Adresse und dein Passwort ein.';
$txt['invalid_activation_new_email'] = 'Neue E-Mail-Adresse';
$txt['invalid_activation_password'] = 'Altes Passwort';
$txt['invalid_activation_resend'] = 'Aktivierungscode erneut senden';
$txt['invalid_activation_known'] = 'Wenn du deinen Aktivierungscode kennst, trage ihn hier ein.';
$txt['invalid_activation_retry'] = 'Aktivierungscode';
$txt['invalid_activation_submit'] = 'Aktiviere';

$txt['coppa_no_concent'] = 'Der Administrator hat noch keine Einwilligung der Eltern bzw. der Erziehungsberechtigten für dein Benutzerkonto erhalten.';
$txt['coppa_need_more_details'] = 'Weitere Details?';

$txt['awaiting_delete_account'] = 'Du hast dein Benutzerkonto gelöscht! Möchtest du es wiederherstellen, aktiviere die "Wiederherstellen meines Benutzerkontos"-Option und versuche es dann erneut.';
$txt['undelete_account'] = 'Wiederherstellen meines Benutzerkontos';

$txt['in_maintain_mode'] = 'Das Forum befindet sich im Wartungsmodus.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Bitte lese und akzeptiere die Nutzungsbedingungen.';
$txt['register_passwords_differ_js'] = 'Passwörter stimmen nicht überein.';
$txt['register_did_you'] = 'Did you mean';

$txt['approval_after_registration'] = 'Danke für die Registrierung. Der Administrator muss deine Registrierung genehmigen, bevor du dein Benutzerkonto nutzen kannst. Du wirst in Kürze eine E-Mail mit dem Ergebnis erhalten.';

$txt['admin_settings_desc'] = 'Hier kannst du verschiedene Einstellungen bezüglich der Registrierung neuer Benutzer tätigen.';

$txt['setting_enableOpenID'] = 'Benutzern die Registrierung mit OpenID erlauben';

$txt['setting_registration_method'] = 'Registrierungsmethode für neue Benutzer';
$txt['setting_registration_disabled'] = 'Registrierung deaktiviert';
$txt['setting_registration_standard'] = 'Sofortige Registrierung';
$txt['setting_registration_activate'] = 'E-Mail-Aktivierung';
$txt['setting_registration_approval'] = 'Admin-Genehmigung';
$txt['setting_notify_new_registration'] = 'Administrator bei neuem Mitglied informieren';
$txt['setting_force_accept_agreement'] = 'Force members to accept the registration agreement when changed';
$txt['force_accept_privacy_policy'] = 'Force members to accept the privacy policy when changed';
$txt['setting_send_welcomeEmail'] = 'Willkommens-E-Mail an neue Benutzer senden';
$txt['setting_show_DisplayNameOnRegistration'] = 'Allow users to enter their screen name';

$txt['setting_coppaAge'] = 'Mindestalter für Registrierung';
$txt['setting_coppaAge_desc'] = '(0 = deaktiviert)';
$txt['setting_coppaType'] = 'Vorgang nach Registrierung unterhalb der Altersgrenze';
$txt['setting_coppaType_reject'] = 'Registrierung ablehnen';
$txt['setting_coppaType_approval'] = 'Erfordert die Genehmigung von Eltern bzw. Erziehungsberechtigten';
$txt['setting_coppaPost'] = 'Postalische Adresse, an welche die Genehmigung gesendet werden soll';
$txt['setting_coppaPost_desc'] = 'Wird nur benötigt, wenn ein Mindestalter aktiviert ist.';
$txt['setting_coppaFax'] = 'Faxnummer, an welche die Genehmigung gefaxt werden soll';
$txt['setting_coppaPhone'] = 'Kontaktnummer für Fragen zum Mindestalter';

$txt['admin_register'] = 'Registrierung neuer Benutzer';
$txt['admin_register_desc'] = 'Hier kannst du neue Benutzer im Forum registrieren und ihnen bei Bedarf die Details per E-Mail zuschicken.';
$txt['admin_register_username'] = 'Benutzername';
$txt['admin_register_email'] = 'E-Mail-Adresse';
$txt['admin_register_password'] = 'Passwort';
$txt['admin_register_username_desc'] = 'Benutzername des neuen Benutzers';
$txt['admin_register_email_desc'] = 'E-Mail-Adresse des neuen Benutzers';
$txt['admin_register_password_desc'] = 'Passwort des neuen Benutzers';
$txt['admin_register_email_detail'] = 'Schicke ein neues Passwort an den Benutzer';
$txt['admin_register_email_detail_desc'] = 'E-Mail-Adresse wird benötigt, auch wenn diese Funktion deaktiviert ist';
$txt['admin_register_email_activate'] = 'Benötige Bestätigung des Benutzers zur Aktivierung des Kontos';
$txt['admin_register_group'] = 'Primäre Benutzergruppe';
$txt['admin_register_group_desc'] = 'Primäre Benutzergruppe, zu welcher der Benutzer hinzugefügt werden soll';
$txt['admin_register_group_none'] = '(keine primäre Benutzergruppe)';
$txt['admin_register_done'] = 'Benutzer %1$s wurde erfolgreich angelegt!';

$txt['coppa_title'] = 'Altersbeschränktes Forum';
$txt['coppa_after_registration'] = 'Danke für deine Registrierung bei {forum_name_html_safe}.<br /><br />Weil du unter {MINIMUM_AGE} Jahre alt bist, benötigen wir die Einverständniserklärung deiner Eltern bzw. Deiner Erziehungsberechtigten, bevor wir dein Benutzerkonto aktivieren können. Bitte drucke das folgende Formular aus:';
$txt['coppa_form_link_popup'] = 'Öffne das Formular in einem neuen Fenster';
$txt['coppa_form_link_download'] = 'Lade das Formular herunter';
$txt['coppa_send_to_one_option'] = 'Danach müssen deine Eltern bzw. Erziehungsberechtigten das Formular per:';
$txt['coppa_send_to_two_options'] = 'Danach müssen deine Eltern bzw. Erziehungsberechtigten das Formular entweder per:';
$txt['coppa_send_by_post'] = 'Post an folgende Adresse senden:';
$txt['coppa_send_by_fax'] = 'Fax an folgende Nummer senden:';
$txt['coppa_send_by_phone'] = 'Alternativ kannst du auch den Administrator unter folgender Nummer anrufen: {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Erlaubnis zur Registrierung bei {forum_name_html_safe}';
$txt['coppa_form_address'] = 'Adresse';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ich, {PARENT_NAME},<br /><br />erlaube meinem Kind {CHILD_NAME} (Name des Kindes) die Registrierung bei {forum_name_html_safe}, mit dem Benutzernamen: {USER_NAME}.<br /><br />Ich vestehe, dass Beiträge von {USER_NAME} von anderen Benutzern und der Öffentlichkeit gelesen werden können.<br /><br />Unterschrift:<br />{PARENT_NAME} (Eltern/Erziehungsberechtigte).';

$txt['visual_verification_sound_again'] = 'Erneut vorlesen';
$txt['visual_verification_sound_close'] = 'Fenster schließen';
$txt['visual_verification_sound_direct'] = 'Hast du Probleme mit dem Ton? Versuche den direkten Link.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Der Benutzername ist verfügbar.';
$txt['registration_username_unavailable'] = 'Der Benutzername ist nicht verfügbar.';
$txt['registration_username_check'] = 'Die Verfügbarkeit des Benutzernamens testen';
$txt['registration_password_short'] = 'Das Passwort ist zu kurz.';
$txt['registration_password_reserved'] = 'Das Passwort enthält deinen Benutzernamen bzw. Deine E-Mail-Adresse (dies ist nicht erlaubt).';
$txt['registration_password_numbercase'] = 'Das Passwort muss Buchstaben in Groß- und Kleinschreibung und Zahlen enthalten.';
$txt['registration_password_no_match'] = 'Passwörter stimmen nicht überein.';
$txt['registration_password_valid'] = 'Das Passwort ist gültig.';

$txt['registration_errors_occurred'] = 'Die folgenden Fehler wurden während deiner Registrierung gefunden. Bitte korrigiere diese, um fortzufahren:';

$txt['authenticate_label'] = 'Authentifizierungsmethode';
$txt['authenticate_password'] = 'Passwort';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'OpenID-Authentifizierungs-URL';
$txt['otp_required'] = 'A Time-based One-time Password is required in order to log in!';
$txt['disable_otp'] = 'Disable two factor authentication.';

// Contact form
$txt['admin_contact_form'] = 'Kontaktiere die Administratoren';
$txt['contact_your_message'] = 'Deine Nachricht';
$txt['errors_contact_form'] = 'Die folgenden Fehler sind während des Speicherns aufgetreten:';
$txt['contact_subject'] = 'Ein Gast hat dir eine Nachricht geschickt';
$txt['contact_thankyou'] = 'Thank you for your message. Someone will contact you as soon as possible.';
