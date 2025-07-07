<?php
// Version: 1.1; Search

$txt['set_parameters'] = 'Suchparameter festlegen';
$txt['choose_board'] = 'Wähle Kategorien und Boards aus, in welchen gesucht werden soll, oder durchsuche einfach alle.';
$txt['all_words'] = 'Übereinstimmung aller Wörter';
$txt['any_words'] = 'Übereinstimmung nur eines Wortes';
$txt['by_user'] = 'Nach Benutzer';

$txt['search_post_age'] = 'Alter des Beitrags';
$txt['search_between'] = 'Zwischen';
$txt['search_and'] = 'und';
$txt['search_options'] = 'Optionen';
$txt['search_show_complete_messages'] = 'Ergebnisse als Beiträge anzeigen';
$txt['search_subject_only'] = 'Nur Betreff der Themen';
$txt['search_relevance'] = 'Relevanz';
$txt['search_date_posted'] = 'Erstellt am';
$txt['search_order'] = 'Suchreihenfolge';
$txt['search_orderby_relevant_first'] = 'Höchste Relevanz zuerst';
$txt['search_orderby_large_first'] = 'Größtes Thema zuerst';
$txt['search_orderby_small_first'] = 'Kleinstes Thema zuerst';
$txt['search_orderby_recent_first'] = 'Neuestes Thema zuerst';
$txt['search_orderby_old_first'] = 'Ältestes Thema zuerst';
$txt['search_visual_verification_label'] = 'Verifizierung';
$txt['search_visual_verification_desc'] = 'Bitte gebe den Code aus dem Bild ein, um die Suche zu benutzen.';

$txt['search_specific_topic'] = 'Suche nur Beiträge im Thema';

$txt['groups_search_posts'] = 'Benutzergruppen mit Zugriff auf die Suchfunktion';
$txt['search_dropdown'] = 'Aktiviere die Schnellsuche';
$txt['search_results_per_page'] = 'Anzahl der Suchergebnisse pro Seite';
$txt['search_weight_frequency'] = 'Relative Gewichtung für die Anzahl der übereinstimmenden Beiträge innerhalb eines Themas';
$txt['search_weight_age'] = 'Relative Gewichtung für das Alter der neuesten Übereinstimmung';
$txt['search_weight_length'] = 'Relative Gewichtung der Themenlänge';
$txt['search_weight_subject'] = 'Relative Gewichtung für die Übereinstimmung des Betreffs';
$txt['search_weight_first_message'] = 'Relative Gewichtung für die Übereinstimmung im ersten Beitrag';
$txt['search_weight_sticky'] = 'Relative Gewichtung für fixierte Themen';
$txt['search_weight_likes'] = 'Relative search weight for topic likes';

$txt['search_settings_desc'] = 'Hier kannst du die Einstellungen der Suchfunktion verwalten.';
$txt['search_settings_title'] = 'Einstellungen der Suchfunktion';

$txt['search_weights_desc'] = 'Hier kannst du die Relevanz der Suchergebnisse individuell einstellen.';
$txt['search_weights_sphinx'] = 'Um Relevanz-Einstellungen für Sphinx zu ändern, muss die Datei sphinx.conf neu erzeugt werden.';
$txt['search_weights_title'] = 'Suchgewichtung';
$txt['search_weights_total'] = 'Gesamt';
$txt['search_weights_save'] = 'Speichern';

$txt['search_method_desc'] = 'Hier kannst du die Funktionsweise der Suche ändern.';
$txt['search_method_title'] = 'Suchmethode';
$txt['search_method_save'] = 'Speichern';
$txt['search_method_messages_table_space'] = 'Benutzter Speicher für Beiträge in der Datenbank';
$txt['search_method_messages_index_space'] = 'Benutzter Speicher für den Beitragsindex in der Datenbank';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Volltext-Index';
$txt['search_method_no_index_exists'] = 'existiert momentan nicht';
$txt['search_method_fulltext_create'] = 'Erstelle Volltext-Index';
$txt['search_method_fulltext_cannot_create'] = 'konnte nicht erstellt werden, da die max. Beitragslänge größer als 65,535 Zeichen ist.';
$txt['search_method_index_already_exists'] = 'bereits erstellt';
$txt['search_method_fulltext_remove'] = 'Lösche Volltext-Index';
$txt['search_method_index_partial'] = 'teilweise erstellt';
$txt['search_index_custom_resume'] = 'fortsetzen';

// These strings are used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Wenn du die Volltext-Suche benutzen möchtest, musst du zuerst einen Volltext-Index erstellen!';
$txt['search_index_custom_warning'] = 'Wenn du einen benutzerdefinierten Index benutzen möchtest, musst du zuerst einen erstellen!';

$txt['search_index'] = 'Such-Index';
$txt['search_index_none'] = 'Kein Index';
$txt['search_index_custom'] = 'Benutzerdefinierter Index';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Größe';
$txt['search_index_create_custom'] = 'Erstelle benutzerdefinierten Index';
$txt['search_index_custom_remove'] = 'Lösche benutzerdefinierten Index';

$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Um Sphinx zu nutzen, musst du es zunächst <a href="{managesearch_url}">konfigurieren</a>.';
$txt['search_index_sphinxql'] = 'SphinxQL';
$txt['search_index_sphinxql_desc'] = 'Um SphinxQL zu nutzen, musst du es zunächst <a href="{managesearch_url}">konfigurieren</a>.';

$txt['search_force_index'] = 'Benutzung des Such-Index erzwingen';
$txt['search_match_words'] = 'Übereinstimmung nur für ganze Wörter';
$txt['search_max_results'] = 'Max. Anzahl der angezeigten Resultate';
$txt['search_max_results_disable'] = '(0 = kein Limit)';
$txt['search_floodcontrol_time'] = 'Zeit zwischen zwei Suchanfragen eines Benutzers in Sekunden';
$txt['search_floodcontrol_time_desc'] = '(0 = kein Limit)';

$txt['additional_search_engines'] = 'weitere Suchmaschinen';
$txt['setup_search_engine_add_more'] = 'Weitere Suchmaschine hinzufügen';

$txt['search_create_index'] = 'Index erstellen';
$txt['search_create_index_why'] = 'Warum solltest du einen Such-Index erstellen?';
$txt['search_create_index_start'] = 'Erstellen';
$txt['search_predefined'] = 'Vordefiniertes Profil';
$txt['search_predefined_small'] = 'Kleiner Index';
$txt['search_predefined_moderate'] = 'Mittlerer Index';
$txt['search_predefined_large'] = 'Großer Index';
$txt['search_create_index_continue'] = 'Weiter';
$txt['search_create_index_not_ready'] = 'ElkArte erstellt momentan einen Such-Index deiner Beiträge. Um eine Überlastung des Servers zu vermeiden, wurde der Fortschritt kurzzeitig angehalten. Er sollte in ein paar Sekunden automatisch weiterlaufen. Wenn dies nicht passiert, klicke bitte auf "Weiter".';
$txt['search_create_index_progress'] = 'Fortschritt';
$txt['search_create_index_done'] = 'Benutzerdefinierter Index erstellt!';
$txt['search_create_index_done_link'] = 'Weiter';
$txt['search_double_index'] = 'Du hast momentan zwei Indexe für deine Beiträge erstellt. Um die Leistung zu verbessern, solltest du einen der beiden Indexe löschen.';

$txt['search_error_indexed_chars'] = 'Ungültige Anzahl an Zeichen. Es sollten mind. 3 Zeichen für einen sinnvollen Index benutzt werden.';
$txt['search_error_max_percentage'] = 'Ungültiger Prozentwert von zu überspringenden Wörtern. Benutze eine Wert von mind. 5%.';
$txt['error_string_too_long'] = 'Der Suchbegriff muss weniger als %1$d Zeichen haben.';

$txt['search_warning_ignored_word'] = 'Der folgende Begriff wurde bei der Suche ignoriert:';
$txt['search_warning_ignored_words'] = 'Die folgenden Begriffe wurden bei der Suche ignoriert:';

$txt['search_adjust_query'] = 'Suchparameter verändern';
$txt['search_adjust_submit'] = 'Suche wiederholen';
$txt['search_did_you_mean'] = 'Du wolltest vielleicht nach Folgendem suchen:';

$txt['search_example'] = '<em>z.B.</em> Computer "Spiele PC" -Absturz';

$txt['search_engines_description'] = 'Hier kannst du die Art und Weise bestimmen, in der Suchmaschinen-Bots während der Indexierung deines Forums beobachtet und protokolliert werden.';
$txt['spider_mode'] = 'Verfolgung von Suchmaschinen';
$txt['spider_mode_note'] = 'Level für Suchmaschinenverfolgung. <div class="smalltext">Achtung: Ein hoher Level erhöht die benötigte Serverleistung!</div>';
$txt['spider_mode_off'] = 'Deaktiviert';
$txt['spider_mode_standard'] = 'Standard';
$txt['spider_mode_high'] = 'Moderiere';
$txt['spider_mode_vhigh'] = 'Aggressiv';
$txt['spider_settings_desc'] = 'Hier kannst du die Einstellungen für die Verfolgung der Bots ändern. Wenn du das automatische Löschen des Trefferprotokolls aktivieren möchtest, gehe zu <a href="%1$s">dieser Seite</a>.';

$txt['spider_group'] = 'Restriktive Berechtigungen der Gruppe anwenden';
$txt['spider_group_note'] = 'Erlaubt es dir, Suchmaschinen-Spider davon abzuhalten, bestimmte Seiten zu indizieren.';
$txt['spider_group_none'] = 'Deaktiviert';

$txt['show_spider_online'] = 'Bots in "Wer ist online?"-Liste anzeigen';
$txt['show_spider_online_no'] = 'Nein';
$txt['show_spider_online_summary'] = 'Anzahl anzeigen';
$txt['show_spider_online_detail'] = 'Bot-Details anzeigen';
$txt['show_spider_online_detail_admin'] = 'Bot-Details anzeigen - Nur für den Administrator';

$txt['spider_name'] = 'Name des Bots';
$txt['spider_last_seen'] = 'Zuletzt beobachtet';
$txt['spider_last_never'] = 'Nie';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'IP-Adresse';
$txt['spiders_add'] = 'Neuen Bot hinzufügen';
$txt['spiders_edit'] = 'Bot editieren';
$txt['spiders_remove_selected'] = 'Ausgewählte löschen';
$txt['spider_remove_selected_confirm'] = 'Bist du sicher, dass du diese Bots entfernen möchtest?\\n\\nAlle zugewiesenen Statistiken werden ebenfalls gelöscht!';
$txt['spiders_no_entries'] = 'Es sind momentan keine Bots konfiguriert.';

$txt['add_spider_desc'] = 'Hier kannst du alle Parameter bearbeiten, nach denen ein Suchmaschinen-Bot kategorisiert wird. Sollte der User Agent bzw. die IP-Adresse eines Gastes diesen Parametern entsprechen, wird er als Bot erkannt und den Einstellungen entsprechend beobachtet.';
$txt['spider_name_desc'] = 'Name des Bots.';
$txt['spider_agent_desc'] = 'User Agent, welcher dem Bot zugewiesen ist.';
$txt['spider_ip_info_desc'] = 'Eine durch Kommata getrennte Liste mit IP-Adressen, zu welchen der Bot zugeordnet wird.';

$txt['spider_time'] = 'Zeit';
$txt['spider_viewing'] = 'Betrachtet';
$txt['spider_logs_empty'] = 'Es sind keine Protokolle verfügbar.';
$txt['spider_logs_info'] = 'Beachte, dass die Aktionen der Bots nur in der Einstellung "Hoch" oder "Sehr hoch" protokolliert werden. Die genauen Details jeder Aktion werden nur in der Einstellung "Sehr hoch" protokolliert.';
$txt['spider_disabled'] = 'Deaktiviert';
$txt['spider_log_empty_log'] = 'Alle entfernen';
$txt['spider_log_empty_log_confirm'] = 'Bist du sicher, dass du das Protokoll vollständig leeren möchtest?';

$txt['spider_logs_delete'] = 'Einträge löschen';
$txt['spider_logs_delete_older'] = 'Alle Einträge älter als %1$s löschen.';
$txt['spider_logs_delete_submit'] = 'Löschen';

$txt['spider_stats_delete_older'] = 'Lösche alle Spider-Statistiken von Spidern, die seit %1$s Tagen nicht gesehen wurden.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Bist du sicher, dass du alle Log-Einträge entfernen möchtest?';

$txt['spider_stats_select_month'] = 'Zu folgendem Monat springen';
$txt['spider_stats_page_hits'] = 'Seitentreffer';
$txt['spider_stats_no_entries'] = 'Es sind momentan keine Bot-Statistiken verfügbar.';

// strings for setting up sphinx search
$txt['sphinx_test_not_selected'] = 'Du hast Sphinx oder SphinxQL als Suche-Methode ausgewählt';
$txt['sphinx_test_passed'] = 'Alle Tests waren erfolgreich, das System war in der Lage den Sphinx-Such-Daemon mittels der Sphinx-API zu kontaktieren.';
$txt['sphinxql_test_passed'] = 'Alle Tests waren erfolgreich, das System war in der Lage den Sphinx-Such-Daemon mittels der Sphinx-API zu kontaktieren.';
$txt['sphinx_test_connect_failed'] = 'Verbindung zum Sphinx-Daemon nicht möglich. Bitte sicherstellen, dass der Daemon läuft und auch korrekt konfiguriert wurde. Der Sphinx-Daemon wird nicht funktionieren, bis das Problem behoben wurde.';
$txt['sphinxql_test_connect_failed'] = 'Zugriff auf SphinxQL nicht möglich. Bitte sicherstellen, daß die Datei Sphinx.conf einen separaten Eintrag für den SphinxQL listen port enthält. SphinxQL wir nicht funktionieren, solange das Problem nicht gelöst wurde.';
$txt['sphinx_test_api_missing'] = 'Die sphinxapi.php fehlt in deinem &quot;sources&quot; Verzeichnis. Die Datei muss von der Sphinx-Distribution dorthin kopiert werden. Sphinx search wird nicht funktionieren, solange das Problem nicht behoben wurde.';
$txt['sphinx_description'] = 'Benutze dieses Interface um Zugriff auf den Sphinx-Daemon zu konfigurieren. <strong>Diese Einstellungen werden lediglich zur Erstellung einer </strong> Basiskonfiguration der sphinx.conf benutzt. Die Datei muss anschließend im Konfigurations-Verzeichnis (typischerweiese /usr/local/etc). abgelegt werden Die meisten Konfigurationseinstellungen können unverändert übernommen werden, allerdings wird vorausgesetzt, daß Sphinx im Verzeichnis /usr/local installiert wurde und /var/sphinx für den Suchindex bereits vorhanden ist.Um die Sphinx-Suche aktuell zu halten muss ein Cron-Job eingerichtet werden, andernfalls werden neue und gelöschte Themen in der Suche nicht berücksichtigt. Die Konfiguration definiert zwei Indexe:<br /><br/><strong>elkarte_delta_index</strong>, ein Index, der nur aktuelle Änderungen berücksichtig. <strong>elkarte_base_index</strong>, Ein Index, der die komplette Datenbank indiziert und daher seltener aktualisiert werden sollte. Beispiele:<br /><span class="tt">10 3 * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_base_index<br />0 * * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_delta_index</span>';
$txt['sphinx_index_prefix'] = 'Index prefix:';
$txt['sphinx_index_prefix_desc'] = 'This is the prefix for the base and delta indexes.<br />By default it uses elkarte and the two indexes will be elkarte_base_index and elkarte_delta_index. Sphinx will connect to elkarte_index (prefix_index).  If you change this be sure to use the correct prefix in your cron task.';
$txt['sphinx_index_data_path'] = 'Pfad für den Index:';
$txt['sphinx_index_data_path_desc'] = 'Das ist der Pfad, der die Such-Indexe von Sphinx bereitstellt. <br />Er <strong>muss</strong> existieren und für den Sphinx-Daemon lesbar und beschreibbar sein.';
$txt['sphinx_log_file_path'] = 'Pfad für die Log-Datei:';
$txt['sphinx_log_file_path_desc'] = 'Server-Pfad für die Log-Datei von Sphinx. Das Verzeichnis muss existieren und für den Sphinx-Daemon und den Such-Indexer beschreibbar sein.';
$txt['sphinx_stop_word_path'] = 'Stopword-Pfad:';
$txt['sphinx_stop_word_path_desc'] = 'Der Pfad zur Stopword-Liste (leer lassen, wenn keine Stopword-Liste benutzt werden soll)';
$txt['sphinx_memory_limit'] = 'Sphinx-Indexer Speicherlimit:';
$txt['sphinx_memory_limit_desc'] = 'Max. Anzahl an Arbeitsspeicher (RAM), welches der Indexer benutzen darf.';
$txt['sphinx_searchd_server'] = 'Such-Daemon-Server:';
$txt['sphinx_searchd_server_desc'] = 'Adresse des Servers, auf dem der Such-Daemon läuft. Muss ein gültiger Hostname oder IP-Adresse sein.<br /> Wenn nicht gesetzt, wird "localhost" angenommen.';
$txt['sphinx_searchd_port'] = 'Port für den Such-Daemon:';
$txt['sphinx_searchd_port_desc'] = 'Port, auf den der Such-Daemon lauscht.';
$txt['sphinx_searchd_qlport'] = 'Sphinx QL-Daemon Port:';
$txt['sphinx_searchd_qlport_desc'] = 'Port, auf dem der Such-Daeomn auf SphinxQL-Anfragen hört.';
$txt['sphinx_max_matches'] = 'Max. # Treffer:';
$txt['sphinx_max_matches_desc'] = 'Max. Anzahl an Treffern, die der Such-Daemon zurückgibt.';
$txt['sphinx_create_config'] = 'Sphinx-Konfiguration erstellen';
$txt['sphinx_test_connection'] = 'Teste Verbindung zum Sphinx-Daemon';