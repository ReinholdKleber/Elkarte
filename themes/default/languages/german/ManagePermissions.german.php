<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Berechtigungen editieren';
$txt['permissions_modify'] = 'Ändern';
$txt['permissions_view'] = 'Anschauen';
$txt['permissions_allowed'] = 'Erlaubt';
$txt['permissions_denied'] = 'Verboten';
$txt['permission_cannot_edit'] = '<strong>Achtung:</strong> du kannst dieses Berechtigungsprofil nicht editieren, da es ein vordefiniertes Profil ist, welches standardmäßig in ElkArte integriert ist. Wenn du es verändern möchtest, musst du zuerst eine Kopie des Profils erstellen. Du kannst diesen Vorgang starten, in dem du <a href="%1$s">hier</a> klickst.';

$txt['permissions_for_profile'] = 'Berechtigungen für das Profil';
$txt['permissions_boards_desc'] = 'Die folgende Liste zeigt eine Zusammenstellung von Berechtigungen, die den einzelnen Boards deines Forums zugeordnet sind. Du kannst das zugeordnete Berechtigungsprofil ändern, in dem du auf den Boardnamen klickst oder "Alle editieren" am Ende der Seite wählst. Um das Profil selbst zu ändern, klicke einfach auf den Profilnamen.';
$txt['permissions_board_all'] = 'Alle bearbeiten';
$txt['permission_profile'] = 'Berechtigungsprofil';
$txt['permission_profile_desc'] = '<a href="%1$s">Berechtigungsprofil</a>, welches das Board benutzen soll.';
$txt['permission_profile_inherit'] = 'Vom übergeordneten Board erben';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'Berechtigungsprofile können den einzelnen Boards zugeordnet werden, um die Sicherheitseinstellungen mit einfachen Mitteln zu verwalten. Hier kannst du diese Profile erstellen, editieren und löschen.';
$txt['permissions_profiles_change_for_board'] = 'Editiere Berechtigungsprofil für "%1$s"';
$txt['permissions_profile_default'] = 'Standard';
$txt['permissions_profile_no_polls'] = 'Keine Umfragen';
$txt['permissions_profile_reply_only'] = 'Nur Antworten';
$txt['permissions_profile_read_only'] = 'Nur Lesen';

$txt['permissions_profile_rename'] = 'Alle umbenennen';
$txt['permissions_profile_edit'] = 'Profile ändern';
$txt['permissions_profile_new'] = 'Neues Profil';
$txt['permissions_profile_new_create'] = 'Erstellen';
$txt['permissions_profile_name'] = 'Profilname';
$txt['permissions_profile_used_by'] = 'Benutzt von';
$txt['permissions_profile_used_by_one'] = 'einem Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'keinen Boards';
$txt['permissions_profile_do_edit'] = 'Editieren';
$txt['permissions_profile_do_delete'] = 'Löschen';
$txt['permissions_profile_copy_from'] = 'Berechtigungen kopieren von';

$txt['permissions_includes_inherited'] = 'Vererbte Gruppen';
$txt['permissions_includes_inherited_from'] = 'Geerbt von: ';

$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'keine';
$txt['permissions_set_permissions'] = 'Berechtigungen speichern';

$txt['permissions_advanced_options'] = 'Erweiterte Optionen';
$txt['permissions_with_selection'] = 'Mit der Auswahl';
$txt['permissions_apply_pre_defined'] = 'Definiertes Berechtigungsprofil verwenden';
$txt['permissions_select_pre_defined'] = 'Wähle ein vordefiniertes Profil';
$txt['permissions_copy_from_board'] = 'Berechtigungen von diesem Board kopieren';
$txt['permissions_select_board'] = 'Wähle ein Board';
$txt['permissions_like_group'] = 'Setze Berechtigung wie diese Gruppe';
$txt['permissions_select_membergroup'] = 'Wählen Sie eine Gruppe aus';
$txt['permissions_add'] = 'Füge Berechtigung hinzu';
$txt['permissions_remove'] = 'Lösche Berechtigung';
$txt['permissions_deny'] = 'Verbiete Berechtigung';
$txt['permissions_select_permission'] = 'Wähle eine Berechtigung';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Du kannst nur eine Aktion zum Editieren der Berechtigung wählen.';
$txt['permissions_no_action'] = 'Keine Aktion ausgewählt';
$txt['permissions_deny_dangerous'] = 'Du verbietest eine oder mehrere Berechtigungen.\\nDies kann u.U. unvorhergesehene Folgen nach sich ziehen, wenn du nicht kontrolliert hast, ob ein Benutzer fälschlicherweise in der betreffenden Gruppe ist.\\n\\nBist du sicher, dass du fortfahren möchtest?';

$txt['permissions_modify_group'] = 'Gruppe ändern';
$txt['permissions_general'] = 'Generelle Berechtigungen';
$txt['permissions_board'] = 'Globale Board-Berechtigungen';
$txt['permissions_board_desc'] = 'Bitte beachte, dass Änderungen am Standard-Profil sämtliche Boards betreffen, welche dieses Profil verwenden.';
$txt['permissions_commit'] = 'Änderungen speichern';
$txt['permissions_on'] = 'im Profil';
$txt['permissions_local_for'] = 'Lokale Berechtigungen für die Gruppe';
$txt['permissions_option_on'] = 'E';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'V';
$txt['permissions_option_desc'] = 'Für jede Berechtigung kannst du "Erlauben" (E), "Nicht erlauben" (X) oder <span style="color: red;">"Verbieten" (V)</span> auswählen.<br /><br />Beachte: Wenn du eine Berechtigung verbietest, kann kein Benutzer - weder Moderator noch andere - in dieser Gruppe die betreffende Funktion benutzen.<br />Deshalb benutze diese Option mit größter Sorgfalt und nur, wenn es <strong>unbedingt notwendig</strong> ist. "Nicht erlauben" verbietet nur so lange, bis es an anderer Stelle erlaubt wird.';

$txt['permissiongroup_general'] = 'Generell';
$txt['permissionname_view_stats'] = 'Darf Forumstatistiken anschauen';
$txt['permissionhelp_view_stats'] = 'Die Forumstatistiken umfassen alle Statistiken wie Benutzeranzahl, täglich geschriebene Beiträge und mehrere Top 10-Statistiken. Wenn du diese Berechtigung aktivierst, wird der Link "Weitere Statistiken" im unteren Teil des Info-Centers hinzugefügt.';
$txt['permissionname_view_mlist'] = 'Darf die Benutzerliste anschauen';
$txt['permissionhelp_view_mlist'] = 'Die Benutzerliste zeigt alle Benutzer des Forums an. Sie kann sortiert und durchsucht werden und ist vom Board-Index und innerhalb der Statistiken verlinkt, wenn du dort auf die Benutzeranzahl klickst. Sie gilt außerdem für die Gruppen-Seite, welche eine Mini-Benutzerliste mit Benutzern dieser Gruppe darstellt.';
$txt['permissionname_who_view'] = 'Darf "Wer ist online?" anschauen';
$txt['permissionhelp_who_view'] = '"Wer ist online?" zeigt alle Benutzer, die aktuell online sind, und was sie gerade machen. Diese Berechtigung funktioniert nur, wenn du die Funktion in den Forumeinstellungen aktiviert hast. Du kannst die Aktionen der Benutzer anschauen, wenn du auf den Link "Wer ist online?" im Board-Index klickst.';
$txt['permissionname_search_posts'] = 'Darf nach Beiträgen und Themen suchen';
$txt['permissionhelp_search_posts'] = 'Die Berechtigung "Suche" erlaubt dem Benutzer, alle Boards zu durchsuchen, auf die er zugreifen darf. Wenn diese Berechtigung aktiviert ist, befindet sich der "Suchen"-Button in der Menüleiste.';
$txt['permissionname_karma_edit'] = 'Darf Karma anderer Benutzer verändern';
$txt['permissionhelp_karma_edit'] = 'Karma ist eine Funktion, die den Beliebtheitsgrad eines Benutzers anzeigt. Um sie benutzen zu können, musst du die Funktion in den Forumeinstellungen aktivieren. Diese Berechtigung erlaubt es einer Benutzergruppe, eine Wertung abzugeben, und steht Gästen nicht zur Verfügung.';
$txt['permissionname_like_posts'] = 'Beträge anderer Benutzer mit "Gefällt mir" markieren.';
$txt['permissionhelp_like_posts'] = '"Gefällt mir" ist eine Funktion, die den Beliebtheitsgrad eines Beitrags anzeigt. Um sie benutzen zu können, musst du die Funktion in den Forumeinstellungen aktivieren. Diese Berechtigung erlaubt es einer Benutzergruppe, einen Beitrag mit "Gefällt mir" bzw. "Gefällt mir nicht mehr" zu markieren, und steht Gästen nicht zur Verfügung.';
$txt['permissionname_like_posts_stats'] = 'See like posts stats';
$txt['permissionhelp_like_posts_stats'] = 'This will allow users to see stats of posts liking';
$txt['permissionname_disable_censor'] = 'Darf die Word-Zensur deaktivieren';
$txt['permissionhelp_disable_censor'] = 'Benutzern das Ausschalten der Wort-Zensur erlauben.';

$txt['permissiongroup_pm'] = 'Mitteilungen';
$txt['permissionname_pm_read'] = 'Mitteilungen anschauen';
$txt['permissionhelp_pm_read'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Mitteilungen anzuschauen. Ohne diese Berechtigung kann er nicht auf diesen Bereich zugreifen.';
$txt['permissionname_pm_send'] = 'Mitteilungen verfassen';
$txt['permissionhelp_pm_send'] = 'Diese Berechtigung erlaubt dem Benutzer das Senden von Mitteilungen. Benötigt "Darf Mitteilungen anschauen".';
$txt['permissionname_send_email_to_members'] = 'Sende E-Mail';
$txt['permissionhelp_send_email_to_members'] = 'Diese Berechtigung erlaubt dem Benutzer, über das Forum E-Mails an andere registrierte Benutzer zu senden. Der Benutzer kann die E-Mail-Adresse des Empfängers dabei nicht sehen, wenn die entsprechende Möglichkeit in den Forumeinstellungen deaktiviert ist.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Darf den Kalender anschauen';
$txt['permissionhelp_calendar_view'] = 'Der Kalender zeigt für jeden Monat die Geburtstage, Ereignisse und Feiertage an. Diese Berechtigung erlaubt den Zugriff auf den Kalender, blendet den entsprechenden Button in der Menüleiste ein und zeigt im Info-Center eine Liste mit den aktuellen und kommenden Geburtstagen, Ereignissen und Feiertagen. Der Kalender muss dazu unter Konfiguration -> Kalender aktiviert werden.';
$txt['permissionname_calendar_post'] = 'Darf Ereignisse im Kalender erstellen';
$txt['permissionhelp_calendar_post'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Ereignisse können nur im Kalender erstellt werden, wenn der Benutzer die Berechtigung hat, neue Beiträge zu erstellen.';
$txt['permissionname_calendar_edit'] = 'Darf Ereignisse editieren';
$txt['permissionhelp_calendar_edit'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Sie können editiert werden, indem man auf den kleinen roten Stern neben dem Ereignistitel im Kalender klickt. Um sie editieren zu können, benötigt der Benutzer ausreichend Rechte zum Ändern des ersten Beitrags des betreffenden Themas.';
$txt['permissionname_calendar_edit_own'] = 'Eigene Ereignisse';
$txt['permissionname_calendar_edit_any'] = 'Jedes Ereignis';

$txt['permissiongroup_maintenance'] = 'Administration';
$txt['permissionname_admin_forum'] = 'Darf Forum und Datenbank administrieren';
$txt['permissionhelp_admin_forum'] = 'Diese Berechtigung erlaubt dem Benutzer das:<ul class="normallist"><li>Ändern der Einstellungen des Forums, der Datenbank und der Themes,</li><li>Verwalten von Paketen,</li><li>Benutzen der Wartungsfunktionen,</li><li>und das Anschauen der Fehler- bzw. Moderatoren-Protokolle.</li></ul> Benutze diese Berechtigung mit Vorsicht, da sie sehr mächtig ist!';
$txt['permissionname_manage_boards'] = 'Darf Boards und Kategorien verwalten';
$txt['permissionhelp_manage_boards'] = 'Diese Berechtigung erlaubt das Erstellen, Ändern und Löschen von Boards oder Kategorien.';
$txt['permissionname_manage_attachments'] = 'Darf Anhänge und Avatare verwalten';
$txt['permissionhelp_manage_attachments'] = 'Diese Berechtigung erlaubt den Zugriff auf die Verwaltung der Dateianhänge, wo alle Anhänge und Avatare aufgelistet und entfernt werden können.';
$txt['permissionname_manage_smileys'] = 'Darf Smileys und Beitragsicons verwalten';
$txt['permissionhelp_manage_smileys'] = 'Diese Berechtigung erlaubt den Zugriff auf die Smiley-Verwaltung, wo du Smileys bzw. Smiley-Sets hinzufügen, ändern und löschen kannst. Wenn persönliche Beitragssymbole aktiviert sind, können diese ebenfalls mit dieser Berechtigung bearbeitet werden.';
$txt['permissionname_edit_news'] = 'Darf Neuigkeiten ändern';
$txt['permissionhelp_edit_news'] = 'Diese Berechtigung erlaubt das Ändern der Neuigkeiten. Diese Funktion muss in den Einstellungen natürlich aktiviert sein.';
$txt['permissionname_access_mod_center'] = 'Hat Zugriff auf Moderatoren-Center';
$txt['permissionhelp_access_mod_center'] = 'Diese Berechtigung erlaubt dem Benutzer den Zugang zum Moderatoren-Center. Dort hat er Zugriff auf Funktionen, die das Moderieren im Forum vereinfachen, die jedoch keine weiteren Moderatorberechtigungen enthalten.';

$txt['permissiongroup_member_admin'] = 'Benutzer-Administration';
$txt['permissionname_moderate_forum'] = 'Darf Mitglieder verwalten';
$txt['permissionhelp_moderate_forum'] = 'Diese Berechtigung beinhaltet alle wichtigen Funktionen der Benutzerverwaltung:<ul><li>Zugriff auf die Registrierungsverwaltung,</li><li>Zugriff auf den "Benutzer anzeigen/löschen"-Bereich,</li><li>Erweiterte Profil-Informationen, inkl. IP bzw. Benutzer beobachten und (versteckten) Online-Status,</li><li>Aktivierung von Zugängen,</li><li>Benachrichtigungen über Zustimmungen und das Aktivieren von Zugängen,</li><li>Immunität gegen Ignorierfunktion der Mitteilungen</li><li>und weitere kleine Funktionen.</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Darf Benutzergruppen verwalten und zuordnen';
$txt['permissionhelp_manage_membergroups'] = 'Diese Berechtigung erlaubt das Editieren von Benutzergruppen und Zuordnen von Benutzern zu anderen Benutzergruppen.';
$txt['permissionname_manage_permissions'] = 'Darf Berechtigungen verwalten';
$txt['permissionhelp_manage_permissions'] = 'Diese Berechtigung erlaubt das Ändern aller Berechtigungen einer Benutzergruppe bzw. eines Boards (global und lokal).';
$txt['permissionname_manage_bans'] = 'Darf die Bann-Liste verwalten';
$txt['permissionhelp_manage_bans'] = 'Diese Berechtigung erlaubt das Hinzufügen oder Löschen von Benutzernamen, IP-Adressen, Hostnamen und E-Mail-Adressen zu einer Liste von gebannten Benutzern. Sie erlaubt weiterhin das Anschauen bzw. Löschen von Protokolleinträgen der gebannten Benutzer, die probieren, sich wieder anzumelden.';
$txt['permissionname_send_mail'] = 'E-Mail an mehrere Benutzer senden';
$txt['permissionhelp_send_mail'] = 'Diese Berechtigung erlaubt das Senden einer E-Mail oder wahlweise einer Mitteilung an alle Benutzer oder an eine bestimmte Gruppe (benötigt die Berechtigung "Darf Mitteilungen verfassen".)';
$txt['permissionname_issue_warning'] = 'Darf Verwarnungen erteilen';
$txt['permissionhelp_issue_warning'] = 'Diese Berechtigung erlaubt das Verwarnen von Benutzern und verändert deren Verwarnungslevel. Das Verwarnungssystem muss aktiviert sein.';

$txt['permissiongroup_profile'] = 'Benutzerprofile';
$txt['permissionname_profile_view'] = 'Darf Profile und Statistiken anschauen';
$txt['permissionhelp_profile_view'] = 'Diese Berechtigung erlaubt das Anklicken des Benutzernamens und somit das Betrachten des Profils, der Statistiken und den Themen, Beiträgen und Dateianhängen des Benutzers.';
$txt['permissionname_profile_view_own'] = 'Eigenes Profil';
$txt['permissionname_profile_view_any'] = 'Alle Profile';
$txt['permissionname_profile_identity'] = 'Darf Benutzerkonto-Einstellungen aufrufen';
$txt['permissionhelp_profile_identity'] = 'Diese Berechtigung erlaubt das Abrufen der Benutzerkonto-Einstellungen. Dies sind die grundlegenden Einstellungen im Profil des Benutzers, z.B. Passwort, E-Mail, Benutzergruppe und bevorzugte Sprache.';
$txt['permissionname_profile_identity_own'] = 'Eigenes Profil';
$txt['permissionname_profile_identity_any'] = 'Alle Profile';
$txt['permissionname_profile_extra'] = 'Darf erweiterte Profileinstellungen aufrufen';
$txt['permissionhelp_profile_extra'] = 'Diese Berechtigung erlaubt das Abrufen der erweiterten Profileinstellungen inkl. der Optionen für den Avatar, Theme-Einstellungen, Benachrichtigungen und Mitteilungen.';
$txt['permissionname_profile_extra_own'] = 'Eigenes Profil';
$txt['permissionname_profile_extra_any'] = 'Alle Profile';
$txt['permissionname_profile_title'] = 'Darf persönlichen Titel ändern';
$txt['permissionhelp_profile_title'] = 'Diese Berechtigung erlaubt das Ändern des persönlichen Titels. Der persönliche Titel wird im Beitrag unterhalb des Namens angezeigt (wenn vorhanden).';
$txt['permissionname_profile_title_own'] = 'Eigenes Profil';
$txt['permissionname_profile_title_any'] = 'Alle Profile';
$txt['permissionname_profile_remove'] = 'Darf Benutzerkonto löschen';
$txt['permissionhelp_profile_remove'] = 'Diese Berechtigung erlaubt dem Benutzer, sein Benutzerkonto zu löschen, wenn diese auf "Eigenes Profil" gestellt ist.';
$txt['permissionname_profile_remove_own'] = 'Eigenes Benutzerkonto';
$txt['permissionname_profile_remove_any'] = 'Jedes Benutzerkonto';
$txt['permissionname_profile_set_avatar'] = 'Darf einen Avatar wählen';
$txt['permissionhelp_profile_set_avatar'] = 'Diese Berechtigung erlaubt dem Benutzer, einen Avatar auszuwählen.';

$txt['permissiongroup_general_board'] = 'Generell';
$txt['permissionname_moderate_board'] = 'Darf Board moderieren';
$txt['permissionhelp_moderate_board'] = 'Diese Berechtigung gibt dem Moderator weitere Funktionen zur Hand, um ihn zu einem richtigen Moderator zu machen. Das umfasst die Möglichkeit, auf geschlossene Themen zu antworten, die Ablaufzeit von Umfragen zu ändern und die Umfrageergebnisse jederzeit einzusehen.';

$txt['permissiongroup_topic'] = 'Themen';
$txt['permissionname_post_new'] = 'Neue Themen erstellen';
$txt['permissionhelp_post_new'] = 'Diese Berechtigung erlaubt dem Benutzer, neue Themen zu starten. Sie erlaubt jedoch nicht, auf Themen zu antworten.';
$txt['permissionname_merge_any'] = 'Darf Themen zusammenführen';
$txt['permissionhelp_merge_any'] = 'Diese Berechtigung erlaubt dem Benutzer, zwei oder mehr Themen zusammenzuführen. Die Reihenfolge der Beiträge basiert auf der Zeit, wann diese geschrieben worden sind, d.h. der älteste Beitrag ist am Schluss des neuen Themas (bei Standardeinstellung). Der Benutzer kann nur Themen in Boards zusammenführen, zu denen er auch Zugriff hat. Um gleichzeitig mehrere Themen zusammen zu führen, muss die Funktion "Schnellmoderation" im Profil aktiviert sein.';
$txt['permissionname_split_any'] = 'Darf ein Thema teilen';
$txt['permissionhelp_split_any'] = 'Diese Berechtigung erlaubt dem Benutzer, ein Thema in zwei einzelne Themen aufzuteilen.';
$txt['permissionname_send_topic'] = 'Themen zu Freunden schicken';
$txt['permissionhelp_send_topic'] = 'Diese Berechtigung erlaubt dem Benutzer, einem Freund einen Hinweis auf ein Thema per E-Mail zu senden. Dazu muss er die E-Mail-Adresse eingeben und kann eine zusätzliche Nachricht dazu verfassen.';
$txt['permissionname_make_sticky'] = 'Themen fixieren';
$txt['permissionhelp_make_sticky'] = 'Diese Berechtigung erlaubt dem Benutzer, fixierte Themen zu erstellen. Fixierte Themen werden immer als oberste Themen in einem Board angezeigt. Sie sind nützlich für Ankündigungen oder wichtige Hinweise.';
$txt['permissionname_move'] = 'Themen verschieben';
$txt['permissionhelp_move'] = 'Diese Berechtigung erlaubt dem Benutzer, ein Thema von einem Board in ein anderes zu verschieben. Der Benutzer kann nur die Boards als Ziel wählen, auf welche er Zugriff hat.';
$txt['permissionname_move_own'] = 'Eigene Themen';
$txt['permissionname_move_any'] = 'Alle Themen';
$txt['permissionname_lock'] = 'Darf Themen schließen';
$txt['permissionhelp_lock'] = 'Diese Berechtigung erlaubt dem Benutzer das Schließen von Themen. Danach kann kein Benutzer mehr auf das Thema antworten, ausgenommen Benutzer mit Moderatorenrechten.';
$txt['permissionname_lock_own'] = 'Eigene Themen';
$txt['permissionname_lock_any'] = 'Alle Themen';
$txt['permissionname_remove'] = 'Darf Themen löschen';
$txt['permissionhelp_remove'] = 'Diese Berechtigung erlaubt dem Benutzer das Löschen ganzer Themen. Bitte beachte, dass mit dieser Funktion keine einzelnen Beiträge gelöscht werden, sondern immer ganze Themen!';
$txt['permissionname_remove_own'] = 'Eigene Themen';
$txt['permissionname_remove_any'] = 'Alle Themen';
$txt['permissionname_post_reply'] = 'Darf Antworten auf Themen schreiben';
$txt['permissionhelp_post_reply'] = 'Diese Berechtigung erlaubt dem Benutzer das Antworten auf Themen.';
$txt['permissionname_post_reply_own'] = 'Eigene Themen';
$txt['permissionname_post_reply_any'] = 'Alle Themen';
$txt['permissionname_modify_replies'] = 'Antworten zu eigenen Themen ändern';
$txt['permissionhelp_modify_replies'] = 'Diese Berechtigung erlaubt das nachträgliche Ändern aller Beiträge im vom Benutzer erstellten Thema.';
$txt['permissionname_delete_replies'] = 'Antworten zu eigenen Beiträgen löschen';
$txt['permissionhelp_delete_replies'] = 'Diese Berechtigung erlaubt dem Benutzer, alle Antworten auf ein von ihm erstelltes Thema zu löschen.';
$txt['permissionname_announce_topic'] = 'Thema ankündigen';
$txt['permissionhelp_announce_topic'] = 'Diese Berechtigung erlaubt dem Benutzer das Senden einer Ankündigungs-E-Mail über ein Thema an alle Benutzer oder an bestimmte Benutzergruppen.';

$txt['permissionname_approve_emails'] = 'Moderiere die "Beitrag per E-Mail"-Fehler';
$txt['permissionhelp_approve_emails'] = 'Erlaube Moderatoren den Zugriff auf das "Beitrag per E-Mail"-Protokoll, um Nachrichten zu löschen, zu genehmigen oder anzusehen. Achtung: Das System kann nicht immer sagen, welches Zielboard angegeben wurde. Daher sollte diese Berechtigung nur Mitgliedern mit vollen Rechten für das gesamte Forum gegeben werden.';
$txt['permissionname_postby_email'] = 'Beitrag per E-Mail';
$txt['permissionhelp_postby_email'] = 'Diese Berechtigung erlaubt dem Benutzer, neue Themen sowie Antworten auf Themen und Private Mitteillungen per E-Mail zu erstellen.';

$txt['permissiongroup_post'] = 'Beiträge';
$txt['permissionname_delete'] = 'Darf Beiträge löschen';
$txt['permissionhelp_delete'] = 'Diese Berechtigung erlaubt dem Benutzer, Beiträge zu löschen. Sie erlaubt ihm jedoch nicht, den ersten Beitrag eines Themas zu löschen.';
$txt['permissionname_delete_own'] = 'Eigener Beitrag';
$txt['permissionname_delete_any'] = 'Alle Beiträge';
$txt['permissionname_modify'] = 'Darf Beiträge editieren';
$txt['permissionhelp_modify'] = 'Diese Berechtigung erlaubt dem Benutzer das Editieren von Beiträgen';
$txt['permissionname_modify_own'] = 'Eigener Beitrag';
$txt['permissionname_modify_any'] = 'Alle Beiträge';
$txt['permissionname_report_any'] = 'Darf Beiträge dem Moderator melden';
$txt['permissionhelp_report_any'] = 'Diese Berechtigung fügt einen Link zu jedem Beitrag hinzu, welcher es dem Benutzer erlaubt, diesen einem Moderator zu melden. Bei einer Meldung erhalten alle Moderatoren des Boards eine Meldung mit einer Nachricht des Benutzers und dem Link zum entsprechenden Beitrag.';

$txt['permissiongroup_poll'] = 'Umfragen';
$txt['permissionname_poll_view'] = 'Umfragen anschauen';
$txt['permissionhelp_poll_view'] = 'Diese Berechtigung erlaubt dem Benutzer das Anschauen einer Umfrage. Ohne diese Berechtigung sieht der Benutzer nur das Thema, ohne die Umfrage.';
$txt['permissionname_poll_vote'] = 'In Umfragen abstimmen';
$txt['permissionhelp_poll_vote'] = 'Diese Berechtigung erlaubt dem Benutzer das Abgeben einer Stimme bei Umfragen. Die Funktion greift nicht bei Gästen.';
$txt['permissionname_poll_post'] = 'Darf Umfragen erstellen';
$txt['permissionhelp_poll_post'] = 'Diese Berechtigung erlaubt dem Benutzer, eine neue Umfrage zu erstellen. Er benötigt aber zusätzlich die "Darf neue Themen erstellen"-Berechtigung.';
$txt['permissionname_poll_add'] = 'Darf Umfragen zu Themen hinzufügen';
$txt['permissionhelp_poll_add'] = 'Diese Berechtigung erlaubt dem Benutzer, eine Umfrage zu einem existierenden Thema hinzu zu fügen. Diese Berechtigung erfordert die Möglichkeit, den ersten Beitrag eines Themas zu ändern.';
$txt['permissionname_poll_add_own'] = 'Eigene Themen';
$txt['permissionname_poll_add_any'] = 'Alle Themen';
$txt['permissionname_poll_edit'] = 'Darf Umfragen editieren';
$txt['permissionhelp_poll_edit'] = 'Diese Berechtigung erlaubt die Änderung einer bestehenden Umfrage sowie das Zurücksetzen der Stimmen auf Null. Um die Anzahl der max. abzugebenden Stimmen und die Laufzeit der Umfrage zu ändern, muss der Benutzer Moderatorenrechte besitzen.';
$txt['permissionname_poll_edit_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_edit_any'] = 'Alle Umfragen';
$txt['permissionname_poll_lock'] = 'Darf Umfragen schließen';
$txt['permissionhelp_poll_lock'] = 'Diese Berechtigung erlaubt das Schließen einer Umfrage. Dies verhindert das weitere Abstimmen in der betreffenden Umfrage.';
$txt['permissionname_poll_lock_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_lock_any'] = 'Alle Umfragen';
$txt['permissionname_poll_remove'] = 'Darf Umfragen löschen';
$txt['permissionhelp_poll_remove'] = 'Diese Berechtigung erlaubt das Löschen einer Umfrage.';
$txt['permissionname_poll_remove_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_remove_any'] = 'Alle Umfragen';

// translator note: so many duplicates here? you might want to remove some...:
$txt['permissionname_post_draft'] = 'Speichert Entwürfe von neuen Beiträgen';
$txt['permissionname_simple_post_draft'] = 'Speichert Entwürfe von neuen Beiträgen';
$txt['permissionhelp_post_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, Entwürfe von Beiträgen zu speichern, um diese später fertig zu stellen.';
$txt['permissionhelp_simple_post_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, Entwürfe von Beiträgen zu speichern, um diese später fertig zu stellen.';
$txt['permissionname_post_autosave_draft'] = 'Automatisches Speichern von Entwürfen für neue Beiträge';
$txt['permissionname_simple_post_autosave_draft'] = 'Automatisches Speichern von Entwürfen für neue Beiträge';
$txt['permissionhelp_post_autosave_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Beiträge automatisch als Entwurf speichern zu lassen. Das verhindert den Datenverlust bei Timeouts oder Verbindungsunterbrechungen zum Server. Der Auftrag für das automatische Speichern ist im Admin-Portal definiert.';
$txt['permissionhelp_simple_post_autosave_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Beiträge automatisch als Entwurf speichern zu lassen.';
$txt['permissionname_pm_autosave_draft'] = 'Automatisches Speichern von Entwürfen für neue Mitteilungen';
$txt['permissionname_simple_pm_autosave_draft'] = 'Automatisches Speichern von Entwürfen für neue Mitteilungen';
$txt['permissionhelp_pm_autosave_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Mitteilung automatisch als Entwurf speichern zu lassen. Das verhindert den Datenverlust bei Timeouts oder Verbindungsunterbrechungen zum Server. Der Auftrag für das automatische Speichern ist im Admin-Portal definiert.';
$txt['permissionhelp_simple_post_autosave_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Beiträge automatisch als Entwurf speichern zu lassen.';
$txt['permissionname_pm_draft'] = 'Speichern von Entwürfen für neue Mitteilungen';
$txt['permissionname_simple_pm_draft'] = 'Speichern von Entwürfen für neue Mitteilungen';
$txt['permissionhelp_pm_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Mitteilung automatisch als Entwurf speichern zu lassen. Das verhindert den Datenverlust bei Timeouts oder Verbindungsunterbrechungen zum Server. Der Auftrag für das automatische Speichern ist im Admin-Portal definiert.';
$txt['permissionhelp_simple_pm_draft'] = 'Diese Berechtigung erlaubt dem Benutzer, seine Beiträge automatisch als Entwurf speichern zu lassen.';

$txt['permissiongroup_approval'] = 'Beitragsmoderation';
$txt['permissionname_approve_posts'] = 'Darf ausstehende Moderationspunkte genehmigen';
$txt['permissionhelp_approve_posts'] = 'Diese Berechtigung erlaubt dem Benutzer, alle noch nicht genehmigten Moderationspunkte im Forum zu genehmigen.';
$txt['permissionname_post_unapproved_replies'] = 'Darf zu genehmigende Antwort schreiben';
$txt['permissionhelp_post_unapproved_replies'] = 'Diese Berechtigung erlaubt dem Benutzer, eine Antwort zu schreiben, die nicht angezeigt wird, bis ein Moderator sie genehmigt hat.';
$txt['permissionname_post_unapproved_replies_own'] = 'Eigene Themen';
$txt['permissionname_post_unapproved_replies_any'] = 'Alle Themen';
$txt['permissionname_post_unapproved_topics'] = 'Darf zu genehmigendes Thema erstellen';
$txt['permissionhelp_post_unapproved_topics'] = 'Diese Berechtigung erlaubt dem Benutzer, ein Thema zu erstellen, das nicht angezeigt wird, bis ein Moderator es genehmigt hat.';
$txt['permissionname_post_unapproved_attachments'] = 'Darf zu genehmigenden Dateianhang hinzufügen';
$txt['permissionhelp_post_unapproved_attachments'] = 'Diese Berechtigung erlaubt dem Benutzer, einen Dateianhang hinzuzufügen. Dieser wird erst für alle Benutzer angezeigt, wenn ein Moderator ihn genehmigt hat.';

$txt['permissiongroup_notification'] = 'Benachrichtigungen & E-Mail';
$txt['permissionname_mark_any_notify'] = 'Benachrichtigung bei neuen Antworten';
$txt['permissionhelp_mark_any_notify'] = 'Diese Berechtigung erlaubt dem Benutzer das Einstellen von Benachrichtigungen für bestimmte Themen.';
$txt['permissionname_mark_notify'] = 'Benachrichtigung bei neuen Themen';
$txt['permissionhelp_mark_notify'] = 'Diese Berechtigung erlaubt dem Benutzer das Aktivieren von Benachrichtigungen bei bestimmten Boards, sobald ein neues Thema in diesen gestartet wurde.';

$txt['permissiongroup_attachment'] = 'Dateianhänge';
$txt['permissionname_view_attachments'] = 'Dateianhänge anschauen';
$txt['permissionhelp_view_attachments'] = 'Diese Berechtigung erlaubt dem Benutzer, Dateianhänge anzuschauen. Diese Funktion kann im Bereich "Dateien verwalten" aktiviert und verwaltet werden. Dateianhänge sind nicht direkt anwählbar und können für die Benutzer blockiert werden, die diese Berechtigung nicht besitzen.';
$txt['permissionname_post_attachment'] = 'Dateianhänge anfügen';
$txt['permissionhelp_post_attachment'] = 'Diese Berechtigung erlaubt dem Benutzer, Dateianhänge an einen Beitrag anzufügen. Ein Beitag kann mehrere Dateianhänge enthalten.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Einstellungen';
$txt['groups_manage_permissions'] = 'Gruppen, die Berechtigungen verwalten dürfen';
$txt['permission_enable_deny'] = 'Verbieten von Berechtigungen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Das Deaktivieren dieser Option ändert die "Verboten"-Berechtigung in "Nicht erlauben".';
$txt['permission_by_board_desc'] = 'Hier kannst du einstellen, ob ein Board die globalen Berechtigungen benutzt oder ein eigenes Schema verwendet. Solltest du lokale Berechtigungen verwenden, kannst du im betreffenden Board für jede Benutzergruppe individuelle Berechtigungen angeben.';
$txt['permission_settings_desc'] = 'Wähle hier, wer die Erlaubnis zum Ändern der Berechtigungen bekommen und wie komplex das Berechtigungssystem sein soll.';
$txt['permission_enable_postgroups'] = 'Berechtigungen für beitragsbasierende Gruppen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Das Deaktivieren dieser Option entfernt die gesetzten Berechtigungen der beitragsbasierenden Gruppen.';

$txt['permissions_post_moderation_desc'] = 'Hier kannst du bestimmen, welche Gruppen ihre Beiträge in bestimmten Berechtigungsprofilen genehmigen lassen müssen.';
$txt['permissions_post_moderation_deny_note'] = 'Solltest du die erweiterten Berechtigungen aktiviert haben, kannst du von dieser Seite aus keine Berechtigung verbieten. Bitte editiere die betreffende Berechtigung direkt, um sie zu verbieten.';
$txt['permissions_post_moderation_select'] = 'Profil auswählen';
$txt['permissions_post_moderation_new_topics'] = 'Neue Themen';
$txt['permissions_post_moderation_replies_own'] = 'Eigene Antworten';
$txt['permissions_post_moderation_replies_any'] = 'Alle Antworten';
$txt['permissions_post_moderation_attachments'] = 'Dateianhänge';
$txt['permissions_post_moderation_legend'] = 'Legende';
$txt['permissions_post_moderation_allow'] = 'Kann erstellen';
$txt['permissions_post_moderation_moderate'] = 'Kann mit Genehmigung erstellen';
$txt['permissions_post_moderation_disallow'] = 'Kann nicht erstellen';
$txt['permissions_post_moderation_group'] = 'Gruppe';

$txt['auto_approve_topics'] = 'Neue Beiträge automatisch genehmigen';
$txt['auto_approve_replies'] = 'Antworten automatisch genehmigen';
$txt['auto_approve_attachments'] = 'Dateianhänge automatisch genehmigen';
