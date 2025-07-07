<?php
// Version: 1.1; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additional_params: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

$txt['scheduled_approval_email_topic'] = 'Die folgenden Themen warten auf Genehmigung:';
$txt['scheduled_approval_email_msg'] = 'Die folgenden Beiträge warten auf Genehmigung:';
$txt['scheduled_approval_email_attach'] = 'Die folgenden Dateianhänge warten auf Genehmigung:';
$txt['scheduled_approval_email_event'] = 'Die folgenden Ereignisse warten auf Genehmigung:';

/**
	@additional_params: resend_activate_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONCODE:  The code needed to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['resend_activate_message_subject'] = 'Willkommen im {FORUMNAME}';
$txt['resend_activate_message_body'] = 'Danke, dass du dich im {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}.

Wenn du dein Kennwort vergessen haben solltest, kannst du es hier zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, muss das Benutzerkonto hier aktiviert werden: {ACTIVATIONLINK}

Sollte es Probleme mit der Aktivierung geben, besuche bitte die Adresse {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: resend_pending_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
	@description:
*/
$txt['resend_pending_message_subject'] = 'Willkommen im {FORUMNAME}';
$txt['resend_pending_message_body'] = 'Hallo {REALNAME}, deine Registrierungsanfrage im Forum {FORUMNAME} ist angekommen.

Dein Benutzername lautet {USERNAME}.
 
Bevor du dich im Forum anmelden kannst, um das Forum zu nutzen, muss dein Benutzerkonto von einem Administrator genehmigt werden. Sobald das passiert ist, erhältst du eine weitere E-Mail.

{REGARDS}';

/**
	@additional_params: mc_group_approve
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was accepted into.
	@description: The request to join a particular membergroup has been accepted.
*/
$txt['mc_group_approve_subject'] = 'Gruppenmitgliedschaft genehmigt';
$txt['mc_group_approve_body'] = 'Hallo {USERNAME},

Deine Anfrage zum Beitritt der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} wurde akzeptiert und deine Berechtigungen entsprechend erweitert.

{REGARDS}';

/**
	@additional_params: mc_group_reject
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
	@description: The request to join a particular membergroup has been rejected.
*/
$txt['mc_group_reject_subject'] = 'Gruppenmitgliedschaft abgelehnt';
$txt['mc_group_reject_body'] = 'Hallo {USERNAME},

es tut uns leid, aber deine Anfrage, der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beizutreten, wurde abgelehnt.

{REGARDS}';

/**
	@additional_params: mc_group_reject_reason
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
		REASON: Reason for the rejection.
	@description: The request to join a particular membergroup has been rejected with a reason given.
*/
$txt['mc_group_reject_reason_subject'] = 'Gruppenmitgliedschaft abgelehnt';
$txt['mc_group_reject_reason_body'] = 'Hallo {USERNAME},

es tut uns leid, aber deine Anfrage, der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beizutreten, wurde abgelehnt.

Das hat den folgenden Grund:  {REASON}

{REGARDS}';

/**
	@additional_params: admin_approve_accept
		NAME: The display name of the member.
		USERNAME: The user name for the member receiving the email.
		PROFILELINK: The URL of the profile page.
		FORGOTPASSWORDLINK: The URL of the "forgot password" page.
	@description:
*/
$txt['admin_approve_accept_subject'] = 'Willkommen im {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Willkommen, {NAME}

Dein Benutzerkonto wurde Durch einen Administrator aktiviert. Dein Benutzername lautet: {USERNAME}.

Falls du dein Kennwort vergessen hast, kannst du es hier zurücksetzen: {FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: admin_approve_activation
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_activation_subject'] = 'Willkommen im {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Willkommmen, {USERNAME}!

Dein Benutzerkonto im Forum {FORUMNAME} wurde Durch einen Administrator genehmigt. Bevor du dich anmelden kannst, muss das Benutzerkonto hier aktiviert werden: {ACTIVATIONLINK}

Sollte es Probleme bei der Aktivierung geben, besuche bitte die Adresse {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: admin_approve_reject
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_reject_subject'] = 'Registrierung abgelehnt';
$txt['admin_approve_reject_body'] = 'Hallo {USERNAME},

es tut uns leid, aber deine Registrierung im  Forum {FORUMNAME} wurde abgelehnt.

{REGARDS}';

/**
	@additional_params: admin_approve_delete
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_delete_subject'] = 'Benutzerkonto gelöscht';
$txt['admin_approve_delete_body'] = 'Hallo {USERNAME},

Dein Benutzerkonto im Forum {FORUMNAME} wurde gelöscht.  Möglicherweise wurde es deshalb gelöscht, weil es bisher nicht aktiviert wurde. In diesem Fall kannst du dich jederzeit erneut registrieren.

{REGARDS}';

/**
	@additional_params: admin_approve_remind
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_remind_subject'] = 'Registrierungserinnerung';
$txt['admin_approve_remind_body'] = 'Hallo {USERNAME},

Dein Benutzerkonto im Forum {FORUMNAME} wurde bisher noch nicht aktiviert.

Bitte besuche diese Adresse, um dein Benutzerkonto zu aktivieren: {ACTIVATIONLINK}

Sollte es Probleme bei der Aktivierung geben, besuche bitte diese Adresse: {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params:
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_register_activate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername ist {USERNAME} und dein Kennwort lautet: {PASSWORD}.

Bevor du dich im Forum anmelden kannst, muss dein Benutzerkonto über den folgenden Link aktiviert werden: {ACTIVATIONLINK}

Sollte es Probleme bei der Aktivierung geben, besuche bitte die Seite {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_immediate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME} und dein Kennwort ist: {PASSWORD}.

{REGARDS}';

/**
	@additional_params: new_announcement
		TOPICSUBJECT: The subject of the topic being announced.
		MESSAGE: The message body of the first post of the announced topic.
		TOPICLINK: A link to the topic being announced.
	@description:
*/
$txt['new_announcement_subject'] = 'Neue Ankündigung: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

Um diese Nachrichten abzubestellen, melde dich bitte im Forum an und deaktiviere den Option "Benachrichtige mich bei Ankündigungen und wichtigen Mitteilungen Durch eine E-Mail" in deinem Benutzerprofil.

Die kannst die komplette Ankündigung unter der folgenden Adresse lesen: {TOPICLINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_body_subject'] = 'Neues Thema: {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welches von dir beobachtet wird. Du kannst es unter folgendem Link ansehen: {TOPICLINK}

Möglicherweise wurden weitere Themen erstellt, aber du erhältst keine erneute Benachrichtigung, bevor nicht einige davon gelesen wurden.

Der Text des Themas lautet:

{MESSAGE}

Solltest du keine erneuten Benachrichtigungen von diesem Board wünschen, kannst du sie über folgenden Link abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_subject'] = 'Neues  Thema: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welches von dir beobachtet wird. Du kannst es unter folgendem Link ansehen: {TOPICLINK}

Möglicherweise wurden weitere Themen erstellt, aber du erhältst keine erneute Benachrichtigung, bevor nicht einige davon gelesen wurden.

Solltest du keine erneuten Benachrichtigungen von diesem Board wünschen, kannst du sie über folgenden Link abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_body_subject'] = 'Neues Thema: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welches von dir beobachtet wird. Du kannst es unter folgendem Link ansehen: {TOPICLINK}

Möglicherweise wurden weitere Themen erstellt, aber du erhältst keine erneute Benachrichtigung, bevor nicht einige davon gelesen wurden.

Der Text des Themas lautet:

{MESSAGE}

Solltest du keine erneuten Benachrichtigungen von diesem Board wünschen, kannst du sie über folgenden Link abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_subject'] = 'Neues Thema: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Forum erstellt, welches von dir beobachtet wird. Du kannst es unter folgendem Link ansehen: {TOPICLINK}

Solltest du keine erneuten Benachrichtigungen von diesem Board wünschen, kannst du sie über folgenden Link abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: request_membership
		RECPNAME: The name of the person receiving the email
		APPYNAME: The name of the person applying for group membership
		GROUPNAME: The name of the group being applied to.
		REASON: The reason given by the applicant for wanting to join the group.
		MODLINK: Link to the group moderation page.
	@description:
*/
$txt['request_membership_subject'] = 'Neue Gruppen-AnmelDung';
$txt['request_membership_body'] = '{RECPNAME},
{APPYNAME} hat eine Gruppenmitgliedschaft in der Gruppe "{GROUPNAME}" beantragt. Der Benutzer hat folgenden Grund angegeben:

{REASON}

Du kannst die Anfrage über den folgenden Link ablehnen oder bestätigen: {MODLINK}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		PROFILE_LINK: Link to profile of member receiving email where can renew.
		SUBSCRIPTION: Name of the subscription.
		END_DATE: Date it expires.
	@description:
*/
$txt['paid_subscription_reminder_subject'] = 'Das bezahlte Abonnement von {FORUMNAME} läuft in Kürze aus.';
$txt['paid_subscription_reminder_body'] = '{REALNAME},
ein bezalhtes Abonnement im Forum {FORUMNAME} läuft in Kürze aus. Wenn du in dem Abonnement die automatische Verlängerung beantragt hast, brauchst du nicht tätig zu werden - andernfalls möchtest du es möglicherweise verlängern. Details zum Abonnement:

Abonnement: {SUBSCRIPTION}
Ablaufdatum: {END_DATE}

Um deine bezahlten Abonnements zu verwalten, besuche bitte den folgenden Link: {PROFILE_LINK}

{REGARDS}';

/**
	@additional_params: activate_reactivate
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
	@description:
*/
$txt['activate_reactivate_subject'] = 'Willkommen zurück zum {FORUMNAME}';
$txt['activate_reactivate_body'] = 'Hallo,
um deine E-Mail-Adresse zu überprüfen, wurde dein Benutzerkonto deaktiviert. Klicke bitte auf den folgenden Link, um das Konto wieder zu aktivieren: {ACTIVATIONLINK}

Sollte es Probleme bei der Aktivierung geben, besuche bitte die folgende Seite: {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		REMINDLINK: The link to reset the password.
		IP: The IP address of the requester.
		MEMBERNAME:
	@description:
*/
$txt['forgot_password_subject'] = 'Neues Kennwort für {FORUMNAME}';
$txt['forgot_password_body'] = 'Hallo {REALNAME},
diese Mail wurde versandt, weil für dein Benutzerkonto die  \'Kennwort vergessen\' Funktion benutzt wurde. Um ein neues Kennwort zu vergeben, besuche bitte den folgenden Link: {REMINDLINK}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		IP: The IP address of the requester.
		OPENID: The members OpenID identity.
	@description:
*/
$txt['forgot_openid_subject'] = 'OpenID Erinnerung für {FORUMNAME}';
$txt['forgot_openid_body'] = 'Hallo {REALNAME},
diese Mail wurde versandt, weil für dein Benutzerkonto die  \'OpenID vergessen\' Funktion benutzt wurde. Dein Benutzerkonto ist mit der folgenden OpenID verknüpft: {OPENID}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		BODY: The generated body of the mail.
	@description:
*/
$txt['scheduled_approval_subject'] = 'Zusammenfassung der Beiträge, die auf Genehmigung warten für  {FORUMNAME}';
$txt['scheduled_approval_body'] = '{REALNAME},

Diese E-Mail enthält eine Zusammenfassung aller Beiträge, die im Forum {FORUMNAME} auf eine Genehmigung warten.

{BODY}

Bitte melde dich im Forum an und überprüfe die Beiträge.
{SCRIPTURL}

{REGARDS}';

/**
	@additional_params: send_topic
		TOPICSUBJECT: The subject of the topic being sent.
		SENDERNAME: The name of the member sending the topic.
		RECPNAME: The name of the person receiving the email.
		TOPICLINK: A link to the topic being sent.
	@description:
*/
$txt['send_topic_subject'] = 'Thema: {TOPICSUBJECT} (von: {SENDERNAME})';
$txt['send_topic_body'] = 'Hallo {RECPNAME},
{SENDERNAME} hat dir das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} empfohlen. Um es anzuschauen, klicke bitte auf den folgenden Link: {TOPICLINK}

Danke,

{SENDERNAME}';

/**
	@additional_params: send_topic_comment
		TOPICSUBJECT: The subject of the topic being sent.
		SENDERNAME: The name of the member sending the topic.
		RECPNAME: The name of the person receiving the email.
		TOPICLINK: A link to the topic being sent.
		COMMENT: A comment left by the sender.
	@description:
*/
$txt['send_topic_comment_subject'] = 'Thema: {TOPICSUBJECT} (von: {SENDERNAME})';
$txt['send_topic_comment_body'] = 'Hallo {RECPNAME},
{SENDERNAME} hat dir das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} empfohlen. Um es anzuschauen, klicke bitte auf den folgenden Link: {TOPICLINK}

Folgender Kommentar wurde dazu hinterlassen:

{COMMENT}

Danke,

{SENDERNAME}';

/**
	@additional_params: send_email
		EMAILSUBJECT: The subject the user wants to email.
		EMAILBODY: The body the user wants to email.
		SENDERNAME: The name of the member sending the email.
		RECPNAME: The name of the person receiving the email.
	@description:
*/
$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The report post's author's name.
		REPORTERNAME: The name of the person reporting the post.
		TOPICLINK: The url of the post that is being reported.
		REPORTLINK: The url of the moderation center report.
		COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
	@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/
$txt['report_to_moderator_subject'] = 'Gemeldeter Beitrag: {TOPICSUBJECT} von {POSTERNAME}';
$txt['report_to_moderator_body'] = 'Der folgende Beitrag, "{TOPICSUBJECT}" von {POSTERNAME}, wurde gemeldet von {REPORTERNAME} in einem Board, welches von dir moderiert wird:

Das Thema: {TOPICLINK}
Moderation: {REPORTLINK}

Der Meldende hat folgenden Kommentar hinterlassen:

{COMMENT}

{REGARDS}';

/**
	@additional_params: change_password
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
	@description:
*/
$txt['change_password_subject'] = 'Neue Login-Daten';
$txt['change_password_body'] = 'Hallo {USERNAME},
Dein Benutzerkonto im Forum {FORUMNAME} wurde geändert und dein Kennwort zurückgesetzt.

Dein Benutzername lautet "{USERNAME}" und dein neues Kennwort ist "{PASSWORD}".

Du kannst das Kennwort im Profil deines Benutzerkontos ändern, sobald du dich im Forum angemeldet hast.

Folgender Link führt direkt zu deinem Profil: {SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_activate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_activate_body'] = 'Danke, dass du dich im {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Wenn du dein Kennwort vergessen haben solltest, kannst du es hier zurücksetzen: {FORGOTPASSWORDLINK}.

Bevor du dich anmelden kannst, muss das Benutzerkonto hier aktiviert werden: {ACTIVATIONLINK}

Sollte es Probleme mit der Aktivierung geben, besuche bitte den folgenden Link: {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
	@description:
*/
$txt['register_openid_activate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_openid_activate_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Du hast dich mit der folgenden OpenID-Identität registriert: {OPENID}

Bevor du dich im Forum anmelden kannst, muss dein Benutzerkonto über den folgenden Link aktiviert werden: {ACTIVATIONLINK}

Sollte es Probleme bei der Aktivierung geben, besuche bitte den folgenden Link: {ACTIVATIONLINKWITHOUTCODE} und gib dort diesen Aktivierungs-Code ein: "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		COPPALINK:  The url link to the coppa form.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_coppa_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_coppa_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Wenn du dein Kennwort vergessen hast, kannst du es hier ändern: {FORGOTPASSWORDLINK}

Bevor du dich anmelden kannst, müssen deine Eltern/Erziehungsberechtigten zustimmen. Weitere Details dazu findest du hier: {COPPALINK}

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
		COPPALINK:  The url link to the coppa form.
	@description:
*/
$txt['register_openid_coppa_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_openid_coppa_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Du hast dich mit folgender OpenID-Identität im Forum registriert: {OPENID}

Bevor du dich anmelden kannst, müssen deine Eltern/Erziehungsberechtigten zustimmen. Weitere Details dazu findest du hier: {COPPALINK}

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_immediate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_immediate_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Falls du dein Kennwort vergessen hast, kannst du es über folgenden Link ändern: {FORGOTPASSWORDLINK}.

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
	@description:
*/
$txt['register_openid_immediate_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_openid_immediate_body'] = 'Danke, dass du dich im Forum {FORUMNAME} registriert hast. Dein Benutzername lautet {USERNAME}. Du hast dich mit folgender OpenID-Identität im Forum registriert: {OPENID}

Du kannst dein Benutzerprofil über folgenden Link aktualisieren: {SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_pending_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_pending_body'] = 'Hallo {REALNAME}, deine Registrierungsanfrage im Forum {FORUMNAME} ist angekommen. Dein Benutzername lautet {USERNAME}. Wenn du dein Kennwort vergessen hast, kannst du es hier ändern: {FORGOTPASSWORDLINK}.
 
Bevor du dich im Forum anmelden kannst, um das Forum zu nutzen, muss dein Benutzerkonto von einem Administrator genehmigt werden. Sobald das passiert ist, erhältst du eine weitere E-Mail von dieser Adresse.

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
	@description:
*/
$txt['register_openid_pending_subject'] = 'Willkommen im {FORUMNAME}';
$txt['register_openid_pending_body'] = 'Hallo {REALNAME}, deine Registrierungsanfrage im Forum {FORUMNAME} ist angekommen. Dein Benutzername lautet {USERNAME}. Du hast dich entschieden, folgende OpenID-Itentität zu benutzen: {OPENID}
 
Bevor du dich im Forum anmelden kannst, um das Forum zu nutzen, muss dein Benutzerkonto von einem Administrator genehmigt werden. Sobald das passiert ist, erhältst du eine weitere E-Mail von dieser Adresse.

{REGARDS}';

/**
	@additional_params: notification_reply
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_subject'] = 'Antwort auf Thema: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'Zu einem Thema, welches von dir beobachtet wird, hat der Benutzer {POSTERNAME} eine Antwort verfasst. Die Antwort kannst du hier ansehen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_reply_body
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_subject'] = 'Antwort auf Thema: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'Zu einem Thema, welches von dir beobachtet wird, hat der Benutzer {POSTERNAME} eine Antwort verfasst. Die Antwort kannst du hier ansehen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

Die Antwort:

{MESSAGE}

{REGARDS}';

/**
	@additional_params: notification_reply_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_once_subject'] = 'Antwort auf Thema: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'Zu einem Thema, welches von dir beobachtet wird, hat der Benutzer {POSTERNAME} eine Antwort verfasst. Die Antwort kannst du hier ansehen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

Möglicherweise wurden weitere Antworten verfasst. Du erhältst keine weiteren Benachrichtigungen, bis du das Thema gelesen hast.

{REGARDS}';

/**
	@additional_params: notification_reply_body_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_once_subject'] = 'Antwort auf Thema: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'Zu einem Thema, welches von dir beobachtet wird, hat der Benutzer {POSTERNAME} eine Antwort verfasst. Die Antwort kannst du hier ansehen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

Der Text der Antwort:

{MESSAGE}

Möglicherweise wurden weitere Antworten verfasst. Du erhältst keine weiteren Benachrichtigungen, bis du das Thema gelesen hast.

{REGARDS}';

/**
	@additional_params: notification_sticky
	@description:
*/
$txt['notification_sticky_subject'] = 'Thema fixiert: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} gesperrt.

Das Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_lock
	@description:
*/
$txt['notification_lock_subject'] = 'Thema gesperrt: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} gesperrt.

Das Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_unlock
	@description:
*/
$txt['notification_unlock_subject'] = 'Thema entsperrt: {TOPICSUBJECT}';
$txt['notification_unlock_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} gesperrt.

Das Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_remove
	@description:
*/
$txt['notification_remove_subject'] = 'Thema gelöscht: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} gelöscht.

{REGARDS}';

/**
	@additional_params: notification_move
	@description:
*/
$txt['notification_move_subject'] = 'Thema verschoben: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'Ein Thema, welches von dir beobachtet, wurde von {POSTERNAME} in ein anderes Board verschoben.

Das Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_merged
	@description:
*/
$txt['notification_merge_subject'] = 'Thema zusammengeführt: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} mit einem anderen Thema zusammengeführt.

Das zusammengeführte Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_split
	@description:
*/
$txt['notification_split_subject'] = 'Thema geteilt: {TOPICSUBJECT}';
$txt['notification_split_body'] = 'Ein Thema, welches von dir beobachtet wird, wurde von {POSTERNAME} in mehrere Themen aufgeteilt.

Das verbliebene Thema anschauen: {TOPICLINK}

Diese Benachrichtigung abbestellen: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: admin_notify
		USERNAME:
		PROFILELINK:
	@description:
*/
$txt['admin_notify_subject'] = 'Ein neuer Benutzer hat sich registriert';
$txt['admin_notify_body'] = 'Ein neuer Benutzer, {USERNAME}, hat sich im Forum registriert. Klicke auf den folgenden Link, um sein Profil anzusehen: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: admin_notify_approval
		USERNAME:
		PROFILELINK:
		APPROVALLINK:
	@description:
*/
$txt['admin_notify_approval_subject'] = 'Ein neuer Benutzer hat sich registriert';
$txt['admin_notify_approval_body'] = 'Ein neuer Benutzer, {USERNAME}, hat sich im Forum registriert. Klicke auf den folgenden Link, um sein Profil anzusehen: {PROFILELINK}

Bevor der Benutzer im Forum Beiräge schreiben kann, muss das Benutzerkonto erst genehmigt werden. Klicke bitte auf den folgenden Link, um dort das Benutzerkonto zu genehmigen:

{APPROVALLINK}

{REGARDS}';

/**
	@additional_params: admin_attachments_full
		REALNAME:
	@description:
*/
$txt['admin_attachments_full_subject'] = 'Warnung: Das Dateianlagen-Verzeichnis ist fast voll!';
$txt['admin_attachments_full_body'] = '{REALNAME},
das Dateianhang-Verzeichnis im Forum {FORUMNAME} ist fast voll. Bitte das Forum besuchen und den Fehler beheben.

Sobald das Verzeichnis komplett voll ist, können die Benutzer weder Dateianhänge in Beiträge einfügen noch Avatare hochladen (wenn aktiviert).

{REGARDS}';

/**
	@additional_params: admin_backup_database
		BAK_REALNAME: the name of the user doing the backup
	@description:
*/
$txt['admin_backup_database_subject'] = 'Ein Datenbank-Backup wurde heruntergeladen!';
$txt['admin_backup_database_body'] = '{REALNAME},

This email is to inform you that {BAK_REALNAME} has just downloaded a backup of the database at {FORUMNAME}.

{REGARDS}';

/**
	@additional_params: editing_theme
		EDIT_REALNAME: the name of the user doing the backup
		FILE_EDITED: the name of the file being modified
		THEME_NAME: the name of the theme
	@description:
*/
$txt['editing_theme_subject'] = 'Es wurden Änderungen am Theme vorgenommen!';
$txt['editing_theme_body'] = '{REALNAME},

diese E-Mail dient als Information darüber, dass {EDIT_REALNAME} gerade eine Template-Datei bearbeitet: {FILE_EDITED}. Diese gehört zum Theme: {THEME_NAME} bei {FORUMNAME}.

Bitte schenke diesem Vorfall die notwendige Beachtung!

{REGARDS}';

/**
	@additional_params: paid_subscription_refund
		NAME: Subscription title.
		REALNAME: Recipients name
		REFUNDUSER: Username who took out the subscription.
		REFUNDNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_refund_subject'] = 'Erstattete bezahlte Abonnements';
$txt['paid_subscription_refund_body'] = '{REALNAME},
ein Mitglied hat eine Erstattung eines bezahlten Abonnements erhalten. Details zum Abonnement:

Abonnement: {NAME}
Benutzername: {REFUNDNAME} ({REFUNDuSER})
Datum: {DATE}

Du kannst das Benutzerprofil über folgenden Link ansehen: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_new
		NAME: Subscription title.
		REALNAME: Recipients name
		SUBEMAIL: Email address of the user who took out the subscription
		SUBUSER: Username who took out the subscription.
		SUBNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_new_subject'] = 'Neues Bezahltes Abonnement';
$txt['paid_subscription_new_body'] = '{REALNAME},
ein Benutzer hat ein neues bezahltes Abonnement gebucht. Details des Abonnements:

Abonnement: {NAME}
Benutzername: {SUBNAME} ({SUBUSER})
E-Mail: {SUBEMAIL}
Preis: {PRICE}
Datum: {DATE}

Über folgenden Link kannst du das Profil des Benutzers ansehen: {PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_error
		ERROR: Error message.
		REALNAME: Recipients name
	@description:
*/
$txt['paid_subscription_error_subject'] = 'Fehler beim bezahlten Abonnement aufgetreten';
$txt['paid_subscription_error_body'] = 'Hallo {REALNAME},
der folgende Fehler ist bei der Verarbeitung eines bezahlten Abonnements aufgetreten:

{ERROR}

{REGARDS}';

/**
	@additional_params: new_pm
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_subject'] = 'Neue Private Mitteilung: {SUBJECT}';
$txt['new_pm_body'] = 'Du hast von {SENDER} eine persönliche Mitteilung im Forum {FORUMNAME} erhalten.

WICHTIG: Das ist lediglich eine Erinnerung, bitte nicht auf diese E-Mail antworten.

Die persönliche Mitteilung kannst du hier lesen: {READLINK}

Auf diese persönliche Mitteilung direkt antworten: {REPLYLINK}';

/**
	@additional_params: new_pm_body
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_subject'] = 'Neue Private Mitteilung: {SUBJECT}';
$txt['new_pm_body_body'] = 'Du hast von {SENDER} eine persönliche Mitteilung im Forum {FORUMNAME} erhalten.

WICHTIG: Das ist lediglich eine Erinnerung, bitte nicht auf diese E-Mail antworten.

Die Mitteilung enthält folgenden Text:

{MESSAGE}

Auf diese persönliche Mitteilung direkt antworten: {REPLYLINK}';

/**
	@additional_params: new_pm_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_tolist_subject'] = 'Neue Private Mitteilung: {SUBJECT}';
$txt['new_pm_tolist_body'] = '{TOLIST} hat von {SENDER} eine persönliche Mitteilung im Forum {FORUMNAME} erhalten.

WICHTIG: Das ist lediglich eine Erinnerung, bitte nicht auf diese E-Mail antworten.

Die persönliche Mitteilung kannst du hier lesen: {READLINK}

Auf diese persönliche Mitteilung (dem Absender) direkt antworten: {REPLYLINK}';

/**
	@additional_params: new_pm_body_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_tolist_subject'] = 'Neue Private Mitteilung: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = '{TOLIST} hat von {SENDER} eine persönliche Mitteilung im Forum {FORUMNAME} erhalten.

WICHTIG: Das ist lediglich eine Erinnerung, bitte nicht auf diese E-Mail antworten.

Der Text der Nachricht:

{MESSAGE}

Auf diese persönliche Mitteilung (dem Absender) direkt antworten: {REPLYLINK}';

/**
	@additional_params: notify_new_buddy
		ACTIONNAME:  The user name of the member adding as buddy.
	@description: A notification email sent to the members that are set as buddy by someone
*/
$txt['notify_new_buddy_subject'] = '{ACTIONNAME} added you as buddy';
$txt['notify_new_buddy_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just added you as a buddy 
at {FORUMNAME}.  

{REGARDS}


You can unsubscribe to further "new buddy" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_new_buddy_digest'] = 'You have been added as buddy by:';
$txt['notify_new_buddy_snippet'] = '{ACTIONNAME}';

/**
	@additional_params: notify_new_likemsg
		ACTIONNAME:  The user name of the member that liked the message.
		MSGLINK:  The url to the message liked.
		SUBJECT: The subject of the message
	@description: A notification email sent to the members whose message has been liked
*/
$txt['notify_new_likemsg_subject'] = 'A message received a like';
$txt['notify_new_likemsg_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just liked your message 
in the "{SUBJECT}" topic at {FORUMNAME}.  
You can view that message by following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "liked by" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_new_likemsg_digest'] = 'The following messages has been liked:';
$txt['notify_new_likemsg_snippet'] = '{MSGLINK}';

/**
	@additional_params: notify_mentionmem
		ACTIONNAME:  The user name of the member that mentioned someone.
		MSGLINK:  The url to the message where someone has been mentioned.
        SUBJECT: The subject of the message
	@description: A notification email sent to the members mentioned by someone else in a message
*/
$txt['notify_mentionmem_subject'] = 'You have been mentioned';
$txt['notify_mentionmem_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just mentioned you in a message 
in the "{SUBJECT}" topic at {FORUMNAME}.  
You can view that message by following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "mentioned" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_mentionmem_digest'] = 'You have been mentioned in the following messages:';
$txt['notify_mentionmem_snippet'] = '{MSGLINK}';

/**
	@additional_params: notify_quotedmem
		ACTIONNAME:  The user name of the member that quoted someone's message.
		MSGLINK:  The url to the message where someone has been quoted.
        SUBJECT: The subject of the message
	@description: A notification email sent to the members quoted in someone else message
*/
$txt['notify_quotedmem_subject'] = 'Your message has been quoted';
$txt['notify_quotedmem_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} at {FORUMNAME} has just quoted
your messages in the "{SUBJECT}" topic.  You can view that message by 
following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "quoted message" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_quotedmem_digest'] = 'Your messages have been quoted in:';
$txt['notify_quotedmem_snippet'] = '{MSGLINK}';

/**
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/

$txtBirthdayEmails['happy_birthday_subject'] = 'Herzlichen Glückwunsch zum Geburtstag von {FORUMNAME}';
$txtBirthdayEmails['happy_birthday_body'] = 'Hallo {REALNAME},

Im Forum{FORUMNAME}  haben wir davon erfahren, dass du heute Geburtstag hast und möchten dir auf diesem Wege herzliche Glückwünsche ausrichten. 

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = 'Zu deinem Geburtstag ...';
$txtBirthdayEmails['karlbenson1_body'] = 'Wir hätten dir eine Geburtstagskarte schicken können.  Wir hätten dir auch ein paar Blumen oder eine Torte schicken können. Haben wir aber nicht!

Wir hätten dir auch eine dieser dämlichen automatisierten Geburtstags-E-Mails schicken können. Haben wir aber nicht!

Wir haben diese Geburtstagsgrüße extra für dich geschrieben. Wir wünschen dir einen schönen Geburtstag.

{REGARDS}

//::  Diese Nachricht wurde automatisch generiert :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = 'Herzlichen Glückwunsch zum Geburtstag!';
$txtBirthdayEmails['nite0859_body'] = 'Dein Freunde von {FORUMNAME} würden diesen Moment gerne nutzen und dir Geburtstagsgrüße übermitteln, {REALNAME}. Falls noch nicht geschehen, schau doch mal in der Community vorbei.

Besonders weil heute dein Geburtstag ist, {REALNAME}, möchten wir dich daran erinnern, dass die Mitgliedschaft in unserer Community ein großes Geschenk für uns ist.

Die besten Wünsche vom Team von {FORUMNAME}';
$txtBirthdayEmails['nite0859_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = 'Geburtstagsgrüße gehen an {REALNAME}';
$txtBirthdayEmails['zwaldowski_body'] = 'Hallo {REALNAME},
ein weiteres Jahr deines Lebens ist vorüber.  Wir von {FORUMNAME} hoffen, dass es ein erfülltes Jahr war und wünschen dir viel Erfolg für\'s kommende Jahr.

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = 'Herzlichen Glückwunsch zum Geburtstag, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = 'Weißt Du, wer heute Geburtstag hat, {REALNAME}?

Wir wissen es... Du!

Herzlichen Glückwunsch!

Nun bist du wieder ein Jahr älter und hoffentlich auch glücklicher als letztes Jahr.

Genieße deinen Tag, {REALNAME}!

- Das Team von {FORUMNAME}';
$txtBirthdayEmails['geezmo_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = 'Deine Geburtstags-Grüße';
$txtBirthdayEmails['karlbenson2_body'] = 'Wir hoffen, dass dein Geburtstag besonders schönes Wetter für dich bringt. Hab Spaß mit Kuchen und Keksen und erzähle uns später, was du alles unternommen hast.

Wir hoffen, dass diese Nachricht dir ein wenig Freude bereitet.

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';
