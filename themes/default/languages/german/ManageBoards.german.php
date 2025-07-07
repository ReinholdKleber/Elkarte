<?php
// Version: 1.1; ManageBoards

$txt['boards_and_cats'] = 'Boards verwalten';
$txt['order'] = 'Bestellen';
$txt['full_name'] = 'Vollständiger Name';
$txt['name_on_display'] = 'Dieser Name wird angezeigt.';
$txt['boards_and_cats_desc'] = 'Hier kannst du die Kategorien und Boards verwalten. Gib mehrere Moderatoren in folgender Weise an: <em>"username", "username"</em>. (Diese müssen Benutzernamen und nicht Anzeigenamen sein!)<br/>Um ein neues Board zu erstellen, klicke bitte auf "Board hinzufügen". Um Boards zu verschieben, diese einfach per Drag&Drop an die entsprechende Stelle verschieben (auch in andere Kategorien).<br />Um ein neues untergeordnetes Board zu erstellen, wähle während der Erstellung das Eltern-Board über das "Untergeordnetes von..."-Drop-Down-Menu.';
$txt['parent_members_only'] = 'Normale Benutzer';
$txt['parent_guests_only'] = 'Gäste';
$txt['catConfirm'] = 'Bist du sicher, dass du diese Kategorie löschen möchtest?';
$txt['boardConfirm'] = 'Bist du sicher, dass du dieses Board löschen möchtest?';

$txt['catEdit'] = 'Kategorien bearbeiten';
$txt['collapse_enable'] = 'Zusammenklappbar';
$txt['collapse_desc'] = 'Kategorie zusammenklappbar';
$txt['catModify'] = '(ändern)';

$txt['mboards_order_after'] = 'Nach ';
$txt['mboards_order_first'] = 'An erster Stelle';
$txt['mboards_board_error'] = 'Fehler beim Verschieben.';

$txt['mboards_new_board'] = 'Board hinzufügen';
$txt['mboards_new_cat_name'] = 'Neue Kategorie';
$txt['mboards_add_cat_button'] = 'Kategorie hinzufügen';
$txt['mboards_new_board_name'] = 'Neues Board';

$txt['mboards_modify'] = 'Ändern';
$txt['mboards_permissions'] = 'Berechtigungen';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Bist du sicher, dass dieses Board lokale (eigene) Berechtigungen nutzen soll?';

$txt['mboards_delete_cat'] = 'Kategorie löschen';
$txt['mboards_delete_board'] = 'Board löschen';

$txt['mboards_delete_cat_contains'] = 'Das Löschen dieser Kategorie entfernt ebenso die enthaltenen Boards, Themen, Beiträge und Dateianhänge.';
$txt['mboards_delete_option1'] = 'Kategorie inkl. aller enthaltenen Boards löschen.';
$txt['mboards_delete_option2'] = 'Kategorie löschen und alle enthaltenen Boards verschieben nach';
$txt['mboards_delete_board_contains'] = 'Solltest du dieses Board löschen, werden alle enthaltenen Boards inklusive Themen, Beitägen und Dateianhängen verschoben';
$txt['mboards_delete_board_option1'] = 'Board löschen und alle untergeordneten Boards auf Kategorielevel heben.';
$txt['mboards_delete_board_option2'] = 'Board löschen und alle untergeordneten Boards in folgendes Board verschieben:';
$txt['mboards_delete_what_do'] = 'Bitte wähle die gewünschte Option für diese Boards aus.';
$txt['mboards_delete_confirm'] = 'Bestätigen';
$txt['mboards_delete_cancel'] = 'Abbrechen';

$txt['mboards_category'] = 'Kategorie';
$txt['mboards_description'] = 'Beschreibung';
$txt['mboards_description_desc'] = 'Eine kurze Beschreibung des Boards.';
$txt['mboards_groups'] = 'Erlaubte Benutzergruppen';
$txt['mboards_groups_desc'] = 'Benutzergruppen mit Zugriff auf dieses Board.<br /><em>Achtung: Sollte ein Benutzer in einer von den aktivierten Gruppen sein, hat er Zugriff auf dieses Board.</em>';
$txt['mboards_groups_regular_members'] = 'Diese Gruppe enthält alle Benutzer, welche keiner primären Benutzergruppe angehören.';
$txt['mboards_groups_post_group'] = 'Diese Gruppe ist eine beitragsbasierende Benutzergruppe.';
$txt['mboards_moderators'] = 'Moderatoren';
$txt['mboards_moderators_desc'] = 'Benutzer mit speziellen Rechten in diesem Board. Administratoren werden nicht aufgelistet.';
$txt['mboards_count_posts'] = 'Beiträge zählen';
$txt['mboards_count_posts_desc'] = 'Neue Beiträge und Themen erhöhen die Beitragszahl des Benutzers.';
$txt['mboards_unchanged'] = 'Keine Änderungen';
$txt['mboards_theme'] = 'Board-Theme';
$txt['mboards_theme_desc'] = 'Verändert das Aussehen des Boards.';
$txt['mboards_theme_default'] = '(globaler Forumstandard)';
$txt['mboards_override_theme'] = 'Board-Theme ersetzt die Benutzerauswahl';
$txt['mboards_override_theme_desc'] = 'Soll das Board-Theme die Auswahl des Benutzers ersetzen? Nur wirksam, wenn ein spezielles Board-Theme ausgewählt wurde.';

$txt['mboards_redirect'] = 'Umleitung zu einer Website';
$txt['mboards_redirect_desc'] = 'Aktiviere diese Option, um die Benutzer zu einer anderen Website umzuleiten, wenn sie auf das Board klicken.';
$txt['mboards_redirect_url'] = 'Adresse, zu der umgeleitet wird';
$txt['mboards_redirect_url_desc'] = 'For example: &quot;https://www.elkarte.net&quot;.';
$txt['mboards_redirect_reset'] = 'Zähler der Umleitungen löschen';
$txt['mboards_redirect_reset_desc'] = 'Aktiviere diese Option, um die Anzahl der Umleitungen zu annulieren.';
$txt['mboards_current_redirects'] = 'Aktuell: %1$s';
$txt['mboards_redirect_disabled'] = 'Achtung - Das Board muss leer sein, damit diese Funktion aktiviert werden kann.';
$txt['mboards_redirect_disabled_recycle'] = 'Beachte, dass du das Papierkorb-Board nicht zu einem Weiterleitungs-Board machen kannst.';

$txt['mboards_order_before'] = 'Vor';
$txt['mboards_order_child_of'] = 'Untergeordnetes von';
$txt['mboards_order_in_category'] = 'In Kategorie';
$txt['mboards_current_position'] = 'Aktuelle Position';
$txt['no_valid_parent'] = 'Das Board "%1$s" hat kein gültiges übergeordnetes Board. Benutze "Fehler finden und reparieren", um dies zu korrigieren.';

$txt['mboards_recycle_disabled_delete'] = 'Hinweis: du musst ein alternatives Papierkorb-Board auswählen oder diese Option deaktivieren, bevor du dieses Board löschen kannst.';

$txt['mboards_settings_desc'] = 'Hier kannst du die Einstellungen für Boards und Kategorien verwalten.';
$txt['groups_manage_boards'] = 'Benutzergruppen, die Boards und Kategorien verwalten dürfen';
$txt['recycle_enable'] = 'Papierkorb-Funktion für gelöschte Themen bzw. Beiträge aktivieren';
$txt['recycle_board'] = 'Board für gelöschte Themen bzw. Beiträge';
$txt['recycle_board_unselected_notice'] = 'Du hast die Papierkorb-Funktion für das Löschen von Themen bzw. Beiträgen aktiviert, aber kein Board als Papierkorb definiert. Die Funktion bleibt solange deaktiviert, bis ein Board für gelöschte Themen bzw. Beiträge definiert wurde.';
$txt['countChildPosts'] = 'Beiträge von untergeordneten Boards im Gesamtwert des übergeordneten Boards mitzählen';
$txt['allow_ignore_boards'] = 'Boards dürfen ignoriert werden';
$txt['deny_boards_access'] = 'Aktiviere "Zugriff verbieten" basierend auf der Mitgliedergruppe';
$txt['boardsaccess_option_desc'] = 'Für jede Berechtigung kannst du "Erlauben" (E), "Nicht erlauben" (X) oder <span style="color: red;">"Verbieten" (V)</span> auswählen.<br /><br />Beachte: Wenn du eine Berechtigung verbietest, kann kein Benutzer - weder Moderator noch andere - in dieser Gruppe die betreffende Funktion benutzen.<br />Deshalb benutze diese Option mit größter Sorgfalt und nur wenn es <strong>unbedingt notwendig</strong> ist. "Nicht erlauben" verbietet nur so lange, bis es an anderer Stelle erlaubt wird.';

$txt['mboards_select_destination'] = 'Wähle die Kategorie für das Board "<strong>%1$s</strong>"';
$txt['mboards_cancel_moving'] = 'Abbrechen';
$txt['mboards_move'] = 'Verschieben';

$txt['mboards_no_cats'] = 'Momentan sind keine Kategorien oder Boards konfiguriert.';
