<?php
// Version: 1.1; ManageMembers

$txt['groups'] = 'Gruppen';
$txt['viewing_groups'] = 'Benutzergruppen anzeigen';

$txt['membergroups_title'] = 'Benutzergruppen editieren';
$txt['membergroups_description'] = 'Benutzergruppen sind Gruppen von Benutzern, welche die gleichen Berechtigungen, Zugriffe und das gleiche Erscheinungsbild im Forum haben. Manche Gruppen basieren auf der Zahl der Beiträge. Du kannst Benutzer zu einer Gruppe hinzufügen, indem du ihr Profil öffnest und die Benutzerkonto-Einstellungen änderst.';
$txt['membergroups_modify'] = 'Ändern';
$txt['membergroups_modify_parent'] = 'Bearbeite übergeordnete Gruppe';

$txt['membergroups_add_group'] = 'Gruppe hinzufügen';
$txt['membergroups_regular'] = 'Reguläre Gruppen';
$txt['membergroups_post'] = 'Beitragsbasierende Gruppen';
$txt['membergroups_guests_na'] = 'Keine Angabe';

$txt['membergroups_group_name'] = 'Name der Benutzergruppe';
$txt['membergroups_new_board'] = 'Sichtbare Boards';
$txt['membergroups_new_board_desc'] = 'Boards, welche die Benutzergruppe sehen kann.';
$txt['membergroups_new_board_post_groups'] = '<em>Achtung: Beitragsabhängige Gruppen brauchen normalerweise keinen Zugriff auf die betreffenden Boards, da die Benutzer durch ihre speziellen Benutzergruppen den Zugriff erhalten.</em>';
$txt['membergroups_new_as_inherit'] = 'Vererben von';
$txt['membergroups_new_as_type'] = 'Vom Typ';
$txt['membergroups_new_as_copy'] = 'Basierend auf';
$txt['membergroups_new_copy_none'] = '(keine)';
$txt['membergroups_can_edit_later'] = 'Du kannst diese später ändern.';

$txt['membergroups_edit_group'] = 'Gruppe ändern';
$txt['membergroups_edit_name'] = 'Name der Gruppe';
$txt['membergroups_edit_inherit_permissions'] = 'Vererbte Berechtigungen';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Wähle "Nein", um der Gruppe ein eigenes Berechtigungprofil zuzuweisen.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Nein - benutze eigene Berechtigungen';
$txt['membergroups_edit_inherit_permissions_from'] = 'Vererbt von';
$txt['membergroups_edit_hidden'] = 'Sichtbarkeit';
$txt['membergroups_edit_hidden_no'] = 'Sichtbar';
$txt['membergroups_edit_hidden_boardindex'] = 'Sichtbar - außer im Gruppenindex';
$txt['membergroups_edit_hidden_all'] = 'Unsichtbar';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Bist du sicher, dass diese Gruppe nicht als primäre Gruppe zugeordnet werden soll?\\n\\nWenn du die Einstellung änderst, kann diese Gruppe nur noch als zusätzliche Benutzergruppe zugewiesen werden. Bei allen Benutzerkonten, die sie als primäre Gruppe eingestellt haben, wird sie zu einer zusätzlichen Gruppe geändert.';
$txt['membergroups_edit_desc'] = 'Gruppenbeschreibung';
$txt['membergroups_edit_group_type'] = 'Gruppentyp';
$txt['membergroups_edit_select_group_type'] = 'Wähle den Gruppentyp aus';
$txt['membergroups_group_type_private'] = 'Privat <span class="smalltext">(Mitgliedschaft muss zugewiesen werden)</span>';
$txt['membergroups_group_type_protected'] = 'Geschützt <span class="smalltext">(Nur Administratoren können verwalten und zuweisen)</span>';
$txt['membergroups_group_type_request'] = 'Anforderbar <span class="smalltext">(Benutzer muss die Mitgliedschaft anfordern)</span>';
$txt['membergroups_group_type_free'] = 'Frei <span class="smalltext">(Benutzer kann der Gruppe selbstständig beitreten oder sie verlassen)</span>';
$txt['membergroups_group_type_post'] = 'Beitragsabhängig <span class="smalltext">(Mitgliedschaft basiert auf der Beitragszahl)</span>';
$txt['membergroups_min_posts'] = 'Benötigte Beiträge';
$txt['membergroups_online_color'] = 'Farbe in Onlineliste';
$txt['membergroups_icon_count'] = 'Anzahl an Symbolbildern';
$txt['membergroups_icon_image'] = 'Symbolbild-Dateiname';
$txt['membergroups_icon_image_note'] = 'Lade Bilddateien in das Standard-Theme-Verzeichnis hoch, um die Auswahl zu aktivieren.';
$txt['membergroups_max_messages'] = 'Max. Mitteilungen';
$txt['membergroups_max_messages_note'] = '0 = kein Limit';
$txt['membergroups_max_messages_desc'] = 'Hier kannst du die Höchstzahl an Mitteilungen festlegen, die ein Benutzer auf dem Server speichern darf.<br />Um eine unbegrenzte Speicherung von Mitteilungen zu erlauben, setze den Wert auf 0.';
$txt['membergroups_edit_save'] = 'Speichern';
$txt['membergroups_delete'] = 'Löschen';
$txt['membergroups_confirm_delete'] = 'Bist du sicher, dass du diese Gruppe löschen möchtest?';

$txt['membergroups_members_title'] = 'Alle Mitglieder der Gruppe anzeigen';
$txt['membergroups_members_group_members'] = 'Gruppenmitglieder';
$txt['membergroups_members_no_members'] = 'Diese Gruppe ist momentan leer';
$txt['membergroups_members_add_title'] = 'Füge einen Benutzer zu dieser Gruppe hinzu';
$txt['membergroups_members_add_desc'] = 'Liste der hinzuzufügenden Benutzer';
$txt['membergroups_members_add'] = 'Benutzer hinzufügen';
$txt['membergroups_members_remove'] = 'Aus Gruppe entfernen';
$txt['membergroups_members_last_active'] = 'Letzter Besuch';
$txt['membergroups_members_additional_only'] = 'Nur als weitere Gruppen hinzufügen';
$txt['membergroups_members_group_moderators'] = 'Gruppenmoderatoren';
$txt['membergroups_members_description'] = 'Beschreibung';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Bist du sicher, dass du dich selbst aus der Gruppe der Administratoren löschen möchtest?';

$txt['membergroups_postgroups'] = 'Beitragsgruppen';
$txt['membergroups_settings'] = 'Einstellungen';
$txt['groups_manage_membergroups'] = 'Gruppen, die Benutzergruppen verändern dürfen';
$txt['membergroups_select_permission_type'] = 'Wähle das Berechtigungsprofil';
$txt['membergroups_images_url'] = '{theme URL}/images/group_icons/';
$txt['membergroups_select_visible_boards'] = 'Boards anzeigen';
$txt['membergroups_members_top'] = 'Benutzer';
$txt['membergroups_name'] = 'Name';
$txt['membergroups_icons'] = 'Symbole';

$txt['admin_browse_approve'] = 'Benutzer, deren Benutzerkonto eine Genehmigung erfordert';
$txt['admin_browse_approve_desc'] = 'Auflistung der Benutzer, welche eine Genehmigung für ihr Benutzerkonto benötigen.';
$txt['admin_browse_activate'] = 'Benutzer, deren Benutzerkonto aktiviert werden muss';
$txt['admin_browse_activate_desc'] = 'Auflistung aller Benutzer, welche Ihr Benutzerkonto noch nicht aktiviert haben.';
$txt['admin_browse_awaiting_approval'] = 'Wartet auf Freischaltung [%1$d]';
$txt['admin_browse_awaiting_activate'] = 'Wartet auf Aktivierung [%1$d]';

$txt['admin_browse_username'] = 'Benutzername';
$txt['admin_browse_email'] = 'E-Mail-Adresse';
$txt['admin_browse_ip'] = 'IP-Adresse';
$txt['admin_browse_registered'] = 'Registriert';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Ausgewählte';
$txt['admin_browse_no_members_approval'] = 'Es gibt keine Benutzer, die auf eine Genehmigung warten.';
$txt['admin_browse_no_members_activate'] = 'Es gibt keine Benutzer, deren Benutzerkonto noch aktiviert werden muss.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alle ausgewählten Benutzer';
$txt['admin_browse_outstanding_warn'] = 'alle betroffenen Benutzer';
$txt['admin_browse_w_approve'] = 'Stimme zu';
$txt['admin_browse_w_activate'] = 'Aktiviere';
$txt['admin_browse_w_delete'] = 'Löschen';
$txt['admin_browse_w_reject'] = 'Ablehnen (löschen)';
$txt['admin_browse_w_remind'] = 'Erinnere';
$txt['admin_browse_w_approve_deletion'] = 'Genehmige (Benutzerkonto löschen)';
$txt['admin_browse_w_email'] = 'und sende E-Mail';
$txt['admin_browse_w_approve_require_activate'] = 'Freischaltung und Anforderung der Aktivierung';

$txt['admin_browse_filter_by'] = 'Filtern nach';
$txt['admin_browse_filter_show'] = 'Anzeigen';
$txt['admin_browse_filter_type_0'] = 'Nicht aktivierte neue Benutzerkonten';
$txt['admin_browse_filter_type_2'] = 'Nicht aktivierte E-Mail-Adressänderungen';
$txt['admin_browse_filter_type_3'] = 'Nicht freigeschaltete neue Benutzerkonten';
$txt['admin_browse_filter_type_4'] = 'Nicht freigeschaltete Benutzerkontolöschungen';
$txt['admin_browse_filter_type_5'] = 'Nicht genehmigte, altersbeschränkte Benutzerkonten';

$txt['admin_browse_outstanding'] = 'Außenstehende Benutzer';
$txt['admin_browse_outstanding_days_1'] = 'Alle Benutzer, welche länger registriert sind als';
$txt['admin_browse_outstanding_days_2'] = 'Tage';
$txt['admin_browse_outstanding_perform'] = 'Folgende Aktionen ausführen';
$txt['admin_browse_outstanding_go'] = 'Ausführen';

$txt['check_for_duplicate'] = 'Auf Duplikate prüfen';
$txt['dont_check_for_duplicate'] = 'Nicht auf Duplikate prüfen';
$txt['duplicates'] = 'Duplikate';

$txt['not_activated'] = 'Deaktiviert';