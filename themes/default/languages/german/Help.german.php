<?php
// Version: 1.1; Help

global $helptxt;

$txt['close_window'] = 'Fenster schließen';

$helptxt['manage_boards'] = '
<b>Boards verwalten</b><br />
	Hier kannst du die Kategorien und Boards verwalten. Kategorien sind die
	oberste Ebene eines Forums. Beispiel: Wenn du eine Seite betreibst, die Informationen
	über Sport, Autos und Musik bereitstellt, wären das die Kategorien,
	die du erstellst. Innerhalb dieser Kategorien kannst du Boards einfügen.<br />
	Hier ein Beispiel:<br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- Eine Kategorie
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Ein Board innerhalb der Kategorie Sport
			</li>
			<ul>
				<li>
					<b>Statistiken</b>
					&nbsp;- Ein untergeordnetes Board des Boards Baseball
				</li>
			</ul>
			<li>
				<b>Fußball</b>
				&nbsp;- Ein Board innerhalb der Kategorie Sport</li>
		</ul>
	</ul>
	Kategorien erlauben dir, das Forum in verschiedene Bereiche aufzuteilen (Autos,
	Sport), damit die Interessen schnell zu finden sind. Die Boards erlauben eine weitere
	Unterteilung und enthalten die Themen. Wenn sich ein Benutzer für Porsche
	interessiert, würde er seinen Beitrag in das Board Porsche der Kategorie
	Autos schreiben.<br />
	Administrative Funktionen in diesem Menü sind das Hinzufügen von Boards in einer 
	beliebigen Kategorie, die Änderung der Reihenfolge sowie das Löschen eines Boards bzw.
	einer Kategorie.';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>News</strong><br/>
			Diese Sektion erlaubt dir, Nachrichten auf der Forums-Hauptseite festzulegen. Füge ein beliebiges Element hinzu (z.B. "Verpassen Sie nicht die Konferenz am Dienstag").
			Jede Nachricht wird zufällig angezeigt und sollte in eine separate Box.</li>
		<li>
			<strong>Newsletter</strong><br/>
			Diese Sektion erlaubt es dir, Newsletter über E-Mail oder Privaten Mitteilungen an Benutzer zu versenden.
			Zunächst wähle die Gruppen, an die du den Newsletter senden möchtest und jene, an die du ihn nicht senden möchtest.
			Wenn du möchtest, kannst du zusätzliche E-Mail-Adressen angeben, welche den Newsletter erhalten sollen.
			Abschließend gibst du die Nachricht, welche du versenden möchtest, ein und entscheidest, ob der Newsletter als Private Mitteilung oder als E-Mail verschickt werden soll.</li>
		<li>
			<strong>Einstellungen</strong><br />
			Diese Sektion enthält einige Einstellungen, die mit Neuigkeiten und Newslettern zu tun haben. Dies schließt auch mit ein, welche Gruppen Neuigkeiten bearbeiten und Newsletter versenden können.
			Du kannst außerdem einstellen, ob Newsfeeds für das Forum aktiviert sein sollen und wie viele Zeichen einer Neuigkeit im Newsfeed angezeigt werden sollen.</li>
	</ul>';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Benutzer anzeigen</b><br />
			Hier kannst du alle Benutzer sehen, welche im Forum registriert sind. Du kannst
			auf den Namen eines Benutzers klicken, um zu dem betreffenden Profil mit weiteren Informationen 
			zu gelangen (Website, Alter etc.).	Als Administrator hast du außerdem die Möglichkeit, diese
			Angaben zu ändern bzw. das Benutzerkonto zu löschen.<br /><br />
		</li>
		<li>
			<b>Erwartete Genehmigungen</b><br />
			Dieser Button wird nur angezeigt, wenn du die Genehmigung aller neuen Registrierungen durch den Administrator aktiviert hast.
			Jede Person, die sich registriert, wird erst Benutzer des Forums sein, wenn der Administrator das Benutzerkonto genehmigt hat.
			Der Bereich listet alle Benutzer inkl. E-Mail- und IP-Adresse auf, die auf ihre Genehmigung warten. Du kannst
			wählen, ob du den Benutzer genehmigen oder ablehnen möchtest, indem du das kleine Kästchen neben dem Benutzer
			klickst und im Ausklappmenü die entsprechende Aktion auswählst. Solltest du einen Benutzer ablehnen,
			kannst du dessen Profil wahlweise mit oder ohne Benachrichtigung löschen.<br /><br />
		</li>
		<li>
			<b>Erwartete Aktivierungen</b><br />
			Dieser Button wird nur angezeigt, wenn du die Aktivierung der Benutzerkonten eingeschaltet hast. Von hier
			aus kannst du alle Benutzer anschauen, die ihr Benutzerkonto noch nicht aktiviert haben. Du hast die Möglichkeit,
			die Benutzer zu genehmigen, abzulehnen oder an die Aktivierung zu erinnern. Wie oben schon erwähnt, kann das
			Löschen mit oder ohne Benachrichtigung erfolgen.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Mitglieder bannen</b><br />
	Das System bietet die Möglichkeit, bestimmte Mitglieder zu "bannen", weil sie aufgrund von Spam u.a. gegen die Nutzungsbedingungen
	verstoßen haben. Als Administrator kannst du in jedem Beitrag die IP-Adresse des Benutzers sehen und diese einfach in die
	Bann-Liste eintragen, so dass der betreffende Benutzer nicht mehr unter dieser IP-Adresse schreiben kann.<br />Du hast auch die
	Möglichkeit, die Benutzer durch die Eingabe ihrer E-Mail-Adresse zu bannen.';

$helptxt['featuresettings'] = '<strong>Features & Optionen</strong><br />
	Hier kannst du verschiedene Einstellungen zu den einzelnen Features vornehmen.';

$helptxt['securitysettings'] = '<b>Sicherheit & Moderation</b><br />
	Hier kannst du Einstellungen bezüglich der Sicherheit und der Moderation vornehmen.';

$helptxt['addonsettings'] = '<strong>Add-Ons Einstellungen</strong><br />
	Dieser Bereich enthält alle Einstellungen, die für Add-Ons notwendig sind und im Forum installiert wurden.';

$helptxt['time_format'] = '<strong>Time Format</strong><br />
	Du hast die Möglichkeit, die Darstellung von Datum und Uhrzeit nach eigenem Gusto einzustellen. Dies scheint auf den ersten Blick verwirrend, ist aber eigentlich ganz einfach.
	Das Format muss PHP strftime entsprechen (für weitere Informationen besuche <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Folgende Kombinationen sind erlaubt:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - abgekürzter Wochentag<br />
	&nbsp;&nbsp;%A - ausgeschriebener Wochentag<br />
	&nbsp;&nbsp;%b - abgekürzter Monat<br />
	&nbsp;&nbsp;%B - ausgeschriebener Monat<br />
	&nbsp;&nbsp;%d - Tag des Monats (01 bis 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - entspricht %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - Tag des Monats (1 bis 31) <br />
	&nbsp;&nbsp;%H - Stunde im 24h-Format (00 bis 23) <br />
	&nbsp;&nbsp;%I - Stunde im 12h-Format (01 bis 12) <br />
	&nbsp;&nbsp;%m - Monat als Nummer (01 bis 12) <br />
	&nbsp;&nbsp;%M - Minute <br />
	&nbsp;&nbsp;%p - entweder &quot;am&quot; oder &quot;pm&quot; entsprechend der aktuellen Uhrzeit<br />
	&nbsp;&nbsp;%R<strong>*</strong> - Zeit im 24h-Format <br />
	&nbsp;&nbsp;%S - Sekunde als Dezimalziffer <br />
	&nbsp;&nbsp;%T<strong>*</strong> - aktuelle Zeit, entsprechend %H:%M:%S <br />
	&nbsp;&nbsp;%y - Zweistelliges Jahr (00 bis 99) <br />
	&nbsp;&nbsp;%Y - Vierstelliges Jahr<br />
	&nbsp;&nbsp;%% - "%"-Zeichen <br />
	<br />
	<em>* Funktioniert nicht auf Windows-basierten Servern.</em></span>';

$helptxt['deleteAccount_posts'] = 'Nur Antworten: Entfernt nur die Antworten des Benutzers auf andere Beiträge.<br />
	Themen und Antworten: Entfernt alle vom Benutzer gestarteten Themen und seine Antworten auf andere Beiträge.';

$helptxt['live_news'] = '<strong>Live announcements</strong><br />
	This box shows recently updated announcements from <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.
	You should check here every now and then for updates, new releases, and important information from ElkArte.';

$helptxt['registrations'] = '<b>Registrierungs-Management</b><br />
	Hier findest du alle Funktionen, die du zum Verwalten von neuen Benutzern benötigst. Es gibt drei Bereiche,
	welche je nach Einstellungen des Forums sichtbar sind:<br /><br />
	<ul>
		<li>
			<b>Neuen Benutzer registrieren</b><br />
			Hier kannst du neue Mitglieder registrieren. Diese Funktion ist nützlich bei deaktivierter
			Registrierung oder wenn der Administrator ein Testkonto erstellen möchte. Wenn die Aktivierung
			der Benutzerkonten eingeschaltet ist, erhalten die Benutzer eine E-Mail mit dem Aktivierungslink,
			welchem sie folgen müssen, bevor sie sich einloggen können. Alternativ kannst du dem neuen Benutzer
			auch eine E-Mail mit dem Passwort an die angegebene E-Mail-Adresse schicken.<br /><br />
		</li>
		<li>
			<b>Nutzungsbedingungen editieren</b><br />
			Diese Funktion erlaubt das Editieren der Nutzungsbedingungen, welche bei der Registrierung angezeigt werden.
			Du kannst den Originaltext editieren oder löschen oder neue Bedingungen hinzufügen.
		</li>
		<li>
			<b>Reservierte Benutzernamen</b><br />
			Diese Funktion erlaubt das Hinzufügen von Namen, die nicht von anderen Benutzern verwendet werden
			dürfen.<br /><br />
		</li>
		<li>
			<b>Einstellungen</b><br />
			Dieser Bereich ist nur sichtbar, wenn du die Berechtigung zum Administrieren des Forums besitzt. Hier kannst
			Du unter anderem Einstellungen zur Registrierungsmethode und der Altersbegrenzung vornehmen.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderator-Protokoll</b><br />
	Hier können die Administratoren alle Aktionen der Moderatoren verfolgen. Damit Moderatoren keine Hinweise zu ihren
	Aktionen löschen können, ist es frühestens nach 24 Stunden möglich, diese Einträge zu löschen.
	Die "Objekte"-Spalte listet alle Details zu der betreffenden Aktion auf.';
$helptxt['adminlog'] = '<b>Administrator-Protokoll</b><br />
In dieser Sektion können Administratoren durchgeführte administrative Aktionen nachverfolgen. Damit Administratoren die Spuren ihrer Aktionen nicht verwischen bzw. entfernen können, dürfen Einträge erst nach 24 Stunden gelöscht werden.';
$helptxt['badbehaviorlog'] = '<strong>Bad Behavior Protokoll</strong><br />
	Dieser Bereich erlaubt es Administratoren die Fehlermeldungen, die vom Bad Behavior protokolliert werden einzusehen. In diesem Protokoll werden alte Einträge automatisch gelöscht, so dass immer nur die letzten paar Wochen zu sehen sind.';
$helptxt['warning_enable'] = '<strong>Benutzer Verwarnsystem</strong><br />. Diese Funktion gibt Moderatoren und Administratoren die Möglichkeit Benutzern eine Verwarnung zu erteilen und dadurch das Verhalten der Benutzer zu kontrollieren. Wenn diese Funktion aktiviert wird dann kann innerhalb der Berechtigungen definiert werden, welche Gruppen Verwarnungen an Benutzer austeilen können. Einzelne Verwarnstufen können innerhalb des Benutzerprofils pro Benutzer gesetzt werden.';
$helptxt['watch_enable'] = '<strong>Verwarnlevel für Beobachtung des Benutzers</strong><br />Diese Einstellung regelt die Prozentzahl, ab welcher ein Benutzer beobachtet wird. Das bedeutet, dass seine Aktionen auch im Moderatoren-Center aufgeführt werden.';
$helptxt['moderate_enable'] = '<strong>Verwarnlevel für Beitragsmoderation eines Benutzers</strong><br />Benutzer mit mind. dieser Prozentzahl können nicht direkt öffentlich schreiben. Ihre Beiträge müssen zunächst freigeschaltet werden. Diese Einstellung überschreibt auch eventuelle Boardberechtigungen des verwarnten Benutzers.';
$helptxt['mute_enable'] = '<strong>Verwarnlevel für die Ruhigstellung des Benutzers</strong><br />Mit dieser Prozentzahl verliert der Benutzer die Berechtigung, um Forum zu schreiben.';
$helptxt['perday_limit'] = '<strong>Maximale Verwarnungspunkte pro Tag</strong><br />Diese Einstellung gibt die maximale Anzahl an Prozentpunkten vor, die ein Moderator innerhalb 24 Stunden vergeben darf. Um kein Limit zu setzen, gebe eine 0 ein. Administratoren sind vom eingestellten Limit ausgenommen.';
$helptxt['error_log'] = '<b>Fehlerprotokoll</b><br />
	Das Fehlerprotokoll listet alle Fehler, die von Benutzern im Forum produziert worden sind, nach Datum sortiert auf. Um den neuesten Fehler
	zuerst anzuzeigen, klicke auf den kleinen schwarzen Pfeil neben dem Datum. Weiterhin kannst du die Fehlermeldungen
	nach der Art des Fehlers filtern, indem du auf die Grafik neben der entsprechenden Angabe klickst, z.B. Filtern nach Benutzernamen.
	Wenn ein Filter aktiv ist, werden nur die mit dem Filter übereinstimmenden Fehler angezeigt.';
$helptxt['theme_settings'] = '<b>Theme-Einstellungen</b><br />
	Hier kannst du die Einstellungen jedes einzelnen Themes verändern. Die Einstellungen betreffen u.a. das Theme-Verzeichnis
	und die URL-Informationen, sowie viele Einstellungen zum Layout. Die meisten Themes enthalten eine Vielzahl von konfigurierbaren Optionen,
	welche es erlauben, das Theme den persönlichen Wünschen entsprechend anzupassen.';
$helptxt['smileys'] = '<b>Smileys & Beitragssymbole</b><br />
	Hier kannst du Smileys oder Smiley-Sets hinzufügen oder löschen. Beachte, dass jeder Smiley aus einem Set auch in den anderen sichtbar ist, da es sonst bei Verwendung verschiedener Sets zu Verwirrungen kommen könnte.<br /><br />
	Du kannst hier auch die Beitragssymbole verändern, sofern du diese in den Einstellungen aktiviert hast.';

$helptxt['calendar'] = '<b>Kalender-Einstellungen</b><br />
	Hier kannst du die Einstellungen des Kalenders verändern sowie Feiertage hinzufügen bzw. entfernen.';
$helptxt['calendar_settings'] = 'Der Kalender kannst benutzt werden, um Geburtstage oder andere wichtige Ereignisse in deiner Community anzuzeigen.<br /><br />Bitte beachte, dass die Nutzung des Kalenders (Ereignisse erstellen, Ereignisse ansehen etc.) durch Berechtigungen in der jeweiligen Gruppen gesteuert wird.';
$helptxt['cal_days_for_index'] = 'Max. Tage auf dem Board-Index. <br />Wenn der Wert auf 7 gesetzt wird, werden die Ereignisse der kommenden sieben Tage angezeigt.';
$helptxt['cal_showevents'] = 'Aktiviert das Hervorheben von Ereignissen im Mini-Kalender, Hauptkalender.in beiden Varianten oder deaktiviert das Hervorheben komplett.';
$helptxt['cal_showholidays'] = 'Diese Einstellung wird benutzt, um Ferien im Kalender hervorzuheben Das geht wahlweise nur im Mini-Kalender, im Haupt-Kalender, in beiden Varianten oder kann komplett deaktiviert werden.';
$helptxt['cal_showbdays'] = 'Diese Einstellung wird benutzt, um Geburtstage im Kalender hervorzuheben Das geht wahlweise nur im Mini-Kalender, im Haupt-Kalender, in beiden Varianten oder kann komplett deaktiviert werden.';
$helptxt['cal_export'] = 'Exportiert eine Text-Datei im iCal Format, damit der Eintrag in andere Kalender-Anwendungen importiert werden kann.';
$helptxt['cal_daysaslink'] = 'Zeigt einen direkten Link "Ereignis erstellen im Kalender an":<br /> Damit kann ein Benutzer ein Ereignis direkt am entsprechenden Kalender-Tag erstellen.';
$helptxt['cal_allow_unlinked'] = 'Einträge im Kalender brauchen kein verknüpftes Thema im Forum: <br />Erlaubt es den Benutzern Kalender-Einträge ohne ein  entsprechendes Thema im Forum zu erstellen.';
$helptxt['cal_defaultboard'] = 'Standard-Boar für neue Ereignisse: <br /> Hier wird das Standard-Board für neue Kalender-Ereignisse eingestellt.';
$helptxt['cal_showInTopic'] = 'Zeige Links zum Ereignis in der Themenansicht: <br />Den Haken aktivieren, um einen Link zum Ereignis in der Themenansicht anzuzeigen.';
$helptxt['cal_allowspan'] = 'Mehrtätige Ereignisse zulassen:<br />Aktivieren, um Ereignisse über mehrere Tage zuzulassen.';
$helptxt['cal_maxspan'] = 'Max. Anzahl Tage, welches ein Ereignis haben darf: <br /> Die maximale Anzahl an Tagen, die ein Ereignis haben darf.';
$helptxt['cal_minyear'] = 'Minimum Jahr:<br /> Wähle das &quot;frühestmögliche&quot; Jahr für die Kalender-Liste aus';
$helptxt['cal_maxyear'] = 'Max. Jahr:<br />Wähle das &quot;größtmögliche&quot; Jahr für die Kalender-Liste aus<br />';

$helptxt['serversettings'] = '<b>Server-Einstellungen</b><br />
	Hier kannst du die Zentral- bzw. Zusatzkonfiguration deines Forums verwalten. Dieser Bereich enthält Einstellungen zur Datenbank,
	den Verzeichnispfaden sowie andere wichtige Einstellungen zum Cache. Bitte handle hier mit erhöhter Vorsicht,
	da dein Forum bei falschen Einstellungen unter Umständen nicht mehr funktionieren kann.';
$helptxt['manage_files'] = '<ul class="normallist">
	<li>
		<b>Dateien durchsuchen</b><br />
		Durchsuche alle Dateianhänge, Avatare und Vorschaubilder, die vom SMF gespeichert wurden.<br /><br />
	</li><li>
		<b>Dateianhangs-Einstellungen</b><br />
		Lege fest, wo Dateianhänge gespeichert werden und gebe an, welche Dateitypen erlaubt sind.<br /><br />
	</li><li>
		<b>Avatar-Einstellungen</b><br />
		Lege fest, wo Avatare gespeichert werden und konfiguriere die Größenanpassung von diesen.<br /><br />
	</li><li>
		<b>Dateien warten</b><br />
		Überprüfe und repariere Fehler im Dateianhangs-Verzeichnis oder lösche bestimmte Dateianhänge.<br /><br />
	</li>
</ul>';

$helptxt['topicSummaryPosts'] = 'Anzahl der Beiträge, die beim Schreiben eines Beitrags in der Zusammenfassung angezeigt werden.';
$helptxt['enableAllMessages'] = 'Stelle die <em>maximale</em> Anzahl an Beiträgen ein, bis zu denen der "Alle Beiträge"-Link angezeigt werden soll. Stellst du diesen Wert geringer als die "Anzahl der Beiträge pro Seite im Thema" ein, wird dieser Link nie angezeigt. Wird der Wert dagegen zu hoch angesetzt, kann das Forum sehr verlangsamt werden.';
$helptxt['allow_guestAccess'] = 'Solltest du diese Option deaktivieren, können Gäste des Forums nur noch grundlegende Funktionen benutzen (Einloggen, Registrieren, Passworterinnerung, etc.). Die Option hat allerdings nicht die gleichen Auswirkungen wie Gästen den Zugriff auf die Boards zu verbieten.';
$helptxt['userLanguage'] = 'Ermöglicht dem Benutzer die Auswahl einer individuellen Sprache im Forum. Betrifft nicht die Forum-Standard-Einstellung.';
$helptxt['trackStats'] = 'Statistiken aktivieren:<br />Erlaubt den Benutzern, verschiedene Statistiken zu sehen, z.B. die neuesten Beiträge, die meistbesuchten Themen, die neuesten Themen und vieles mehr.<hr />
		Seitenaufrufe zählen:<br />Fügt den Statistiken eine weitere Spalte mit den Seitenaufrufen des Forums hinzu.';
$helptxt['enable_unwatch'] = 'Aktivierung dieser Einstellung erlaubt es Benutzern selektiv Benachrichtigungen von Themen zu aktiveren, in denen sie vorher geantwortet haben.';
$helptxt['titlesEnable'] = 'Diese Option erlaubt den Benutzern, sich einen frei definierbaren Titel zu geben, welcher unter dem Namen angezeigt
		wird.<br /><i>Beispiel:</i><br />Jeff.<br />Spielkind';
$helptxt['onlineEnable'] = 'Ein Bild zeigt den Online-Status des Benutzers an (online bzw. offline).';
$helptxt['todayMod'] = 'Zeigt "Heute" und/oder "Gestern" statt des Datums an.<br /><br /> <strong>Beispiele:</strong><br /><br /><dl class="Settings"><dt> <dt>deakiviert</dt> <dd>3. Oktober 2009 um 12:59:18</dd> <dt>nur Heute</dt> <dd>Heute um 12:59:18</dd> <dt>Heute und Gestern<dt> <dd>Gestern um 09:36:55</dd> </dt></dl>';
$helptxt['disableCustomPerPage'] = 'Diese Option verhindert, dass Benutzer die Anzahl von Themen oder Beiträgen pro Seite selbst festlegen können.';
$helptxt['enablePreviousNext'] = 'Zeigt einen Link zum nächsten bzw. vorherigen Thema an.';
$helptxt['pollMode'] = 'Aktiviert oder deaktiviert die Umfragen. Solltest du die Umfragen deaktivieren, werden alle existierenden
    Umfragen auf dem Themen-Index versteckt. Sollen die Themen weiterhin angezeigt werden, dann wähle \'Umfragen als
    Themen anzeigen\'.<br /><br />Um zu bestimmen, wer Umfragen erstellen und löschen bzw. in ihnen abstimmen darf, stelle die
    entsprechenden Berechtigungen ein. Beachte dies bitte, falls die Umfragen nicht funktionieren sollten.';
$helptxt['enableVBStyleLogin'] = 'Zeigt ein kleines Login-Feld am unteren Bildschirmrand an.';
$helptxt['enableCompressedOutput'] = 'Aktiviert die komprimierte Datenübertragung, um Bandbreite zu sparen. Erfordert ein installiertes \'zlib\'-Modul auf dem Server.';
$helptxt['databaseSession_enable'] = 'Verwendet die Datenbank zum Speichern von Sitzungen und ist optimal für eine ausgeglichene Belastung des Servers. Diese Option hilft bei den sogenannten "Timeouts" und macht das Forum unter Umständen schneller.';
$helptxt['databaseSession_loose'] = 'Reduziert die Bandbreite, welche dein Forum benötigt, jedoch wird bei einem Klick auf den "Zurück"-Button im Browser die vorherige Seite nicht neu geladen, die "Neue Beiträge"-Symbole und andere Werte werden daher nicht aktualisiert.';
$helptxt['databaseSession_lifetime'] = 'Anzahl der Sekunden für die Länge einer Datenbanksitzung. Sollte eine Sitzung eine Zeit lang nicht gebraucht werden, wird sie als "verloren gegangen" bezeichnet. Empfohlen wird mindestens der Wert "2400".';
$helptxt['cache_enable'] = 'ElkArte beherrscht das Caching/Zwischenspeichern in verschiedenen Stufen. Je höher das Caching-Level eingestellt wurde je höher ist auch der CPU-Verbrauch um die zwischengespeicherten Daten zu verarbeiten. Falls das Caching auf dem Server verfügbar ist sollest du zunächst das Caching der Stufe 1 testen.';
$helptxt['cache_memcached'] = 'Wenn du memcached benutzt müssen die Server-Daten angegeben werden. Die unterschiedlichen Server sollten dabei in einer durch Komma getrennten Liste eingegeben werden, wie im Beispiel hier:<br /><br/>⇥&quot;server1,server2,server3:port,server4&quot;<br /><br />Wenn kein spezieller Port angegeben wird, wird der Standard-Port 11211 benutzt. Das System wird, wenn mehrere Server angegeben wurden, eine zufällige Lastverteilung über die Server durchführen.';
$helptxt['cache_cachedir'] = 'Diese Einstellung gilt nur für das dateibasierte Caching. Es stellt den Pfad für das Caching-Verzeichnis ein. Es ist empfehlen den Pfad /tmp/ zu nutzen, grundsätzlich kann aber jeder Pfad benutzt werden - Schreibrechte vorausgesetzt.';
$helptxt['cache_uid'] = 'Einige Caching-Systeme, z.B. Xcache, benötigen eine userid und ein Kennwort, damit ElkArte den Cache, falls notwendig, auch leeren kann.';
$helptxt['cache_password'] = 'Einige Caching-Systeme, z.B. Xcache, benötigen eine userid und ein Kennwort, damit ElkArte den Cache, falls notwendig, auch leeren kann.';
$helptxt['enableErrorLogging'] = 'Erfasst alle Fehlermeldungen im Forum (z.B. fehlerhafter Login).';
$helptxt['enableErrorQueryLogging'] = 'Diese Option fügt die komplette Datenbankabfrage in das Fehlerprotokoll ein. Dazu muss das Protokollieren von Fehlern aktiviert sein.<br /><br /><strong>Achtung - Damit geht die Möglichkeit verloren, das Fehlerprotokoll nach Fehlermeldungen zu filtern.</strong>';
$helptxt['allow_disableAnnounce'] = 'Diese Option erlaubt den Benutzern, die Benachrichtigung bei neuen Ankündigungen zu deaktivieren.';
$helptxt['disallow_sendBody'] = 'Verhindert das Versenden von Text aus Antworten oder neuen Beiträgen in den Benachrichtigungs-E-Mails.<br /><br />Oftmals antworten Mitglieder auf diese E-Mails, so dass der Webmaster eine Flut an E-Mails erhält.';
$helptxt['enable_contactform'] = 'Diese Option aktiviert einen Kontakt-Button im Registrierungsformular.';
$helptxt['jquery_source'] = 'Diese Einstellung wird benutzt, um die Quelle der jQuery-Library zu bestimmen. Auto wird zunächst das CDN von Google benutzen und auf Lokal umspringen, falls das CDN nicht verfügbar ist. CDN wird jQuery ausschließlich von Google\'s Content Delievery Network laden.';
$helptxt['jquery_default'] = 'Möchtest du eine andere Version von jQuery als die mit ElkArte ausgelieferte einsetzen, aktiviere diese Option und gebe die Versionsnummer wie folgt ein: X.XX.X. Die hochzuladende Datei muss folgender Namenskonvention entsprechen: jquery-X.XX.X.min.js.';
$helptxt['jqueryui_default'] = 'Möchtest du eine andere Version von jQueryUI als die mit ElkArte ausgelieferte einsetzen, aktiviere diese Option und gebe die Versionsnummer wie folgt ein: X.XX.X. Die hochzuladende Datei muss folgender Namenskonvention entsprechen: jquery-ui-X.XX.X.min.js.';
$helptxt['minify_css_js'] = 'Dies vereint mehrere CSS- oder JavaScript-Dateien pro Seite. Leerräume und unwichtige Zeichen werden entfernt, um die Dateien möglichst klein zu halten. Die kombinierten und optimierten Dateien werden gespeichert.<br />Bedenke, dass die Ladezeit beim ersten Aufruf etwas höher sein kann, weil die Zusammenfassung zunächst erstellt werden muss. Dies tritt auch nach dem Leeren des Cache auf.';
$helptxt['compactTopicPagesEnable'] = 'Zeigt nur eine bestimmte Anzahl der Seitennummern an.<br /><i>Beispiel:</i>
		"3" für: "1 ... 4 [5] 6 ... 9"<br />
		"5" für: "1 ... 3 4 [5] 6 7 ... 9"';
$helptxt['timeLoadPageEnable'] = 'Zeigt am unteren Bildschirmrand die Zeit in Sekunden an, die ElKarte für das Erstellen der Seite benötigt hat.';
$helptxt['removeNestedQuotes'] = 'Dies wird alle verschachtelten Kommentare eines Beitrags entfernen, wenn man einen solchen Beitrag über den entsprechenden Link zitiert. Nur das erste übergeordnete Zitat wird behalten.';
$helptxt['search_dropdown'] = 'Zeigt ein Dropdown-Feld neben dem Feld für die Schnell-Suche.  Von da aus kannst du auswählen, ob die aktuelle Seite, das aktuelle Board (wenn innerhalb eines Boards), das aktuelle Thema (wenn innerhalb eines Themas) oder die Benutzerliste durchsucht werden soll.';
$helptxt['max_image_width'] = 'Erlaubt die Angabe einer maximalen Bildergröße. Bilder, welche kleiner sind, werden dadurch nicht beeinträchtigt.';
$helptxt['mail_type'] = 'Diese Option erlaubt das Wählen zwischen den Standardeinstellungen von PHP und den SMTP-Einstellungen. PHP unterstützt keine Authentifizierung mit SMTP (wie viele Hoster es heutzutage erfordern), sodass du in solchen Fällen SMTP aktivieren musst. SMTP kann in der Nutzung langsamer sein und manche Server nehmen keine Benutzernamen und Kennwörter an.<br /><br />Du musst keine SMTP-Daten eingeben, wenn du den PHP-Standard benutzt.';
$helptxt['mail_batch_size'] = 'Diese Einstellung gibt an, wie viele E-Mails pro Seitenaufruf versendet werden. Sie kann nicht höher gesetzt werden, als E-Mails pro Minute verschickt werden dürfen.<br />Gebe eine 0 ein, um die optimale Anzahl durch den Server ermitteln zu lassen.<br />Möchtest du einen eigenen Wert eingeben, ist es sinnvoll, das Limit pro Minute zu übernehmen oder zumindest 1/6 davon.';
$helptxt['smtp_client'] = 'Used to identify this client to the SMTP server.<br />The field should contain the fully-qualified domain name (FQDN) of the SMTP client. In situations in which the client system does not have a meaningful domain name you can instead use an address literal formatted as [ipv4] or [IPv6:ipv6 address].<br />If left blank the system will attempt to detect this value for you.';

$helptxt['attachmentEnable'] = 'Aktiviert/Deaktiviert Dateianlagen vollständig oder deaktiviert lediglich neue Dateianlagen, bereits erstellte Anlagen bleiben dann verfügbar.';
$helptxt['attachmentRecodeLineEndings'] = 'Durch Aktvieren dieser Funktion werden Zeilensprünge in text-basierten Dateien (txt, css, html, php, XML) an das Betriebssystem des Servers angepasst (Windows, Mac oder Linux)';
$helptxt['automanage_attachments'] = 'Dies wird eine Verzeichnisstruktur basierend auf den angegebenen Option schaffen. Diese kann auf Daten der Posts (Unterteilung Anhänge nach Jahr oder nach Jahr und Monat oder Jahr, Monat und Tag), oder einfach das Hinzufügen eines neuen Verzeichnisses sein, wenn die Speicherplatzgrenze erreicht ist. Jedes neu erstellte Verzeichnis beinhaltet die gleiche Anzahl an Dateien, und ist in der Größe entsprechend den  globalen Vorgaben limittiert. Dadurch wird verhindert, dass Verzeichnisse vorgegebene Limits in Größe oder Anzahl beinhaltender Dateien überschreiten.';
$helptxt['use_sub-directories_for_attachments'] = 'Diese Option erstellt neue Verzeichnisse als Unterverzeichnis unterhalb des Haupt-Dateianlagen-Verzeichnisses.';
$helptxt['attachmentDirSizeLimit'] = 'Stellt ein, wie groß ein Dateianlagen-Verzeichnis werden darf.';
$helptxt['attachmentDirFileLimit'] = 'Einstellen, wie viele Dateien in einem Dateianlagen-Verzeichnis enthalten sein dürfen';
$helptxt['attachmentPostLimit'] = 'Stelle die Gesamtuploadgröße eines einzelenen Beitrags (in KiB) ein. Sie gibt die kumulative Größe aller Anhänge in einem Post an.';
$helptxt['attachmentSizeLimit'] = 'Einstellen, wie groß eine einzelne Dateianlage maximal sein darf.';
$helptxt['attachmentNumPerPostLimit'] = 'Die max. Anzahl an Dateianlagen, die ein Benutzer pro Beitrag anfügen kann.';
$helptxt['attachmentCheckExtensions'] = 'Aktiviere diese Funktion um Dateianlagen zu filtern. Wenn aktiviert dürfen nur Dateien mit zugelassenen Datei-Endungen hochgeladen werden.';
$helptxt['attachmentExtensions'] = 'Einstellen, welche Dateiendungen erlaubt sind, z.B.: jpg,png,gif Beachte bitte, dass einige Dateiendungen, speziell ausführbare Dateien, ein potentielles Sicherheitsrisiko darstellen können.';
$helptxt['attachment_image_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Bildanhänge. Warnung - Diese umfangreiche Sicherheitskontrolle kann eine große Zahl von abgelehnten Anhängen verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit der Bild-Neukodierung zu verwenden. Ist die Bild-Neukodierung nicht aktiviert, werden die Bildanhänge ggf. zurückgewiesen.
';
$helptxt['attachment_autorotate'] = 'Selecting this option will allow the system to detect rotated images, typical of phone cameras, and automatically adjust the orientation such that the image top is oriented up.  Requires either ImageMagick or both GD and Exif modules to be available.';
$helptxt['attachmentShowImages'] = 'Wenn die hochgeladene Datei ein Bild ist wird es automatisch unterhalb des Beitrags angezeigt.';
$helptxt['attachmentThumbnails'] = 'Wenn aktiviert werden Bilder als Vorschaubilder unterhalb des Beitrags angezeigt. Beim Klick auf das Vorschaubild öffnet sich das Bild in voller Größe.';
$helptxt['attachment_thumb_png'] = 'Bei der Erzeugung von Vorschaubildern unterhalb des Beitrags werden diese im PNG-Format angelegt.';
$helptxt['attachmentThumbWidth'] = 'Nur  mit & quot verwendet; skaliert Bilder, die in den Posts angezeigt werden & quot; Option, um die maximale Breite von Bildern zu definieren. Bilder werden proportional skaliert.';
$helptxt['attachmentThumbHeight'] = 'Nur  mit & quot verwendet; skaliert Bilder, die in den Posts angezeigt werden & quot; Option, um die maximale Höhe von Bildern zu definieren. Bilder werden proportional skaliert.';
$helptxt['attachment_image_reencode'] = 'Diese Option aktiviert den Modus, zu versuchen, die hochgeladenen Bild-Anhänge zu reencoden. Foto Re-Encoding bietet eine bessere Sicherheit. Beachte jedoch, dass durch das Reencoding alle animierte Bilder in statische Bilder umgewandelt werden. <br /> Diese Funktion ist nur verfügbar, wenn das GD-Modul auf dem Server installiert ist.';
$helptxt['attachment_thumb_memory'] = 'Je größer das Quellbild (Größe & Breite x Höhe), desto höher ist der Speicherbedarf für das System, um ein Miniaturbild zu erstellen. <br /> Wird diese Option aktiviert, wird das System den benötigten Speicher abschätzen, und dann anfordern. Wenn die Anforderung erfolgreich ist,wird ein Tumbnail erstellt werden. <br /> Dies reduziert weißer Bildschirm Fehler, kann aber dazu führen, dass weniger Tumbnails erstellt werden. Wenn Du diese Option nicht aktivierst, wird das System immer versuchen, Tumbnails (mit einer festen Speichergröße) zu erstellen. Dadurch kann es vermehrt weiße Bereiche auf dem Bildschirm geben.';
$helptxt['max_image_height'] = 'Die Max. angezeigte Höhe für Bilder in Beiträgen.';
$helptxt['max_image_width'] = 'Erlaubt die Angabe einer maximalen Bildergröße. Bilder, welche kleiner sind, werden dadurch nicht beeinträchtigt.';
$helptxt['attachmentUploadDir'] = 'Bestimmt, wo Uploads auf dem Server gespeichert werden. Der Speicherort kann auch außerhalb der public html directory liegen, was zusätzliche Sicherheit schafft.';
$helptxt['attachment_transfer_empty'] = 'Hiemit werden alle Dateien aus dem Quellverzeichnis an den neuen Speicherort verschoben. Ist diese Option deaktiviert, werden nur soviele Dateien verschoben, wie maximal pro Verzeichnis eingestellt sind.';
$helptxt['avatar_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Avatare. Warnung - Diese umfangreiche Sicherheitskontrolle kann eine große Zahl von abgelehnten Avataren verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit der Bild-Neukodierung zu verwenden. Ist die Bild-Neukodierung nicht aktiviert, werden die Avatare ggf. zurückgewiesen.';
$helptxt['avatar_reencode'] = 'Bei Auswahl dieser Option wird versucht, hochgeladene Avatare neu zu kodieren. Die Bild-Neukodierung bietet dir mehr Sicherheit. Beachte jedoch, dass die Bild-Neukodierung alle animierten Avatare statisch macht.<br />Diese Funktion ist nur anwendbar, wenn das GD-Modul auf dem Server installiert ist.';
$helptxt['karmaMode'] = 'Das Karma zeigt die Beliebtheit eines Benutzers im Forum an. Du kannst die Anzahl der Beiträge festlegen, ab der das Karma genutzt werden darf, die Zeit zwischen zwei Abstimmungen und ob der Administrator auch von diesem Zeitlimit erfasst werden soll.';
$helptxt['localCookies'] = 'Das System verwendet Cookies, um Login-Daten auf dem Client-Computer zu speichern.
Cookies können global (myserver.com) ,oder lokal (myserver.com/path/to/forum) gespeichert werden. <br />
Aktiviere diese Option, wenn Du das Problem hast, dass Benutzer immer automatisch ausgeloggt werden. <Hr />
Global gespeicherte Cookies sind weniger sicher, wenn auf einem gemeinsam genutzten Webserver (wie Tripod) verwendet werden. <Hr />
Lokale Cookies wirken nicht außerhalb des Forenverzeichnisses. Wenn Dein Forum auf www.myserver.com/forum gespeichert ist, werden Seiten wie www.myserver.com/index.php keinen Zugriff auf die Kontoinformationen haben.
Insbesondere bei der Verwendung SSI.php werden globale Cookies empfohlen.';
$helptxt['enableBBC'] = 'Erlaubt den Benutzern, Bulletin Board Code (BBC) im Forum zu verwenden, welcher den Text formatiert, Bilder einfügt und vieles mehr.';
$helptxt['time_offset'] = 'Nicht immer ist die Serverzeit auch die Zeit, die vom Forum genutzt werden soll. Hier kannst du die Zeitdifferenz in Stunden zwischen der Server- und der im Forum genutzten Zeit eintragen (positive bzw. negative Zahl).';
$helptxt['default_timezone'] = 'Die server timezone sagt PHP, wo sich dein Server befindet. Du solltes sicherstellen, dass Land und Stadt des Servers korrekt eingestellt ist. Sie sollten vorzugsweise auf dem Land / der Stadt, in der sich der Server befindet gewährleisten diese korrekt eingestellt ist. Mehr Informationen findest du unter <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP Site</a>.';
$helptxt['spamWaitTime'] = 'Trage hier den Zeitintervall ein, den ein Benutzer zwischen zwei Beiträgen einhalten muss. Dies kann zum Verhindern von Spam beitragen.';

$helptxt['enablePostHTML'] = 'Erlaubt das posten von HTML tags:
	<ul class="normallist enablePostHTML">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

// Initial theme settings - Manage and Install
$helptxt['themes'] = 'Hier kannst du das Standard- bzw. Gäste-Theme wählen, Verzeichnisse für die Themes ändern, Themes editieren sowie individuelle Theme-Einstellungen verwalten.';
$helptxt['theme_install'] = 'Dieser Abschnitt erlaubt dir, neue Themen zu installieren. Das geschieht durch das Hochladen einer Archivdatei für das Design, die Installation von einem Theme-Verzeichnis auf dem Host-Server, oder durch Kopieren der Datei des Standard-Themes und Umbenennung <br /> <br /> Bitte denke daran: Die Archivdatei oder das Verzeichnis muss eine <span style = "color: red"> theme_info.xml beinhalten</ span>, also eine Definitionsdatei als Teil des Archivs oder des Verzeichnisses.';
$helptxt['theme_forum_theme'] = 'Die Änderung des allgemeinen Designs wirkt sich nicht aunf Benutzer aus, die ein anderes verfügbares Design eingestellt haben.  Du must also alle Benutzer resetten, um sie das neue Design auch für sie einzustellen. Du kannst auch ein Standarddesign einstellen, das Gäste sehen, und danach die Benutzer auf ein anderes Design resetten. <br /><br /> Beachte, dass Benutzer mit dem Recht zur Auswahl ihres eigenen Designs deine Einstellungen überschreiben können.';

// Theme Management and Options - Theme settings
$helptxt['themeadmin_list_reset'] = 'In seltenen Fällen kann der Pfad zum Theme verlorengehen, und dein Forum wird nicht richtig angezeigt. Ursache kann ein Fehler von einem Admin, ein Datenbankfehler, ein gescheitertes Software-Updates, fehlerhafte mod Installationen oder ein anderes Ereignis sein. Ein Reset  der Themen URLs und Verzeichnisse wird dieses Problem in der Regel beheben.';
$helptxt['themeadmin_delete_help'] = 'Das Standard-Theme kann nicht gelöscht werden. Dies würde dein Forum löschen und würde auch die anderen Themen löschen. Sie können jedoch jedes Thema, mit dem roten \ X \ daneben lösschen, indem Sie auf das \ X \ klicken. <br /> <br /> Denken Sie daran: Das Löschen eines Themas entfernt dieses nicht vom Server, es deaktiviert nur seine Verfügbarkeit, um im Forum verwendet zu werden. Du musst das Thema auf deinem FTP-Server oder der als Host verwendeten Festplatte löschen, um es vom Server zu entfernen. Lösche niemals das Thema mit dem Namen \ default  \ ';

$helptxt['enableVideoEmbeding'] = 'Aktiviert das automatische Einbinden von standard URLs als 0embedded video wenn, der Post angezeigt wird. Momentan werden nur YouTube, Vimeo und Dailymotion Video Links unterstützt';
$helptxt['enableCodePrettify'] = 'Aktiviert Prettify Skript, das  Code in Code-Tags hervorhebt und färbt. Es fügt Stile zur Code-Schnipseln hinzu, so dass Token sich abheben und deine  Benutzer den Code leichter lesen können.';
// @todo Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Diese Option erlaubt den Benutzern, zu den <a href="%1$s?action=.xml;sa=news" target="_blank">Letzten Neuigkeiten</a> zu verlinken. Es wird empfohlen, die Anzahl der \'Neuesten Beiträge\' bzw. der Neuigkeiten zu begrenzen, da es zu falschen Darstellungen in manchen Programmen wie Trillian kommen kann.';
$helptxt['hotTopicPosts'] = 'Ändert die Anzahl der Beiträge, nach denen ein Thema den Status \'Heiß\' oder \'Sehr heiß\' erhält.';
$helptxt['globalCookies'] = 'Ermöglicht die Nutzung von Subdomain-unabhängigen Cookies. Ein Beispiel:<br />
	Deine Seite hat die Domain http://www.myserver.com,<br />
	Dein Forum hat die Domain http://forum.myserver.com,<br />
	Diese Einstellung ermöglicht es, auf die Forum-Cookies deiner Seite zuzugreifen. <b>Aktiviere diese Einstellung nicht, wenn es noch andere Subdomains gibt  (z.B. hacker.elkarte.net), die nicht unter deiner Kontrolle liegen!</b>';
$helptxt['globalCookiesDomain'] = 'Definiere die Haupt-Domain, wenn Login-Cookies über Sub-Domains hinweg nutzbar sein sollen.';
$helptxt['httponlyCookies'] = 'Wenn aktiviert, können Scriptsprachen, wie JavaScript nicht auf Cookies zugreifen. Diese Einstellung kann den Identitästdiebstahl mittels XSS Attacken eindämmen. Sie kann Probleme mit Scripten von Dritten verursachen, es wird aber empfohlen, sie wenn möglich zu aktivieren.';
$helptxt['secureCookies'] = 'Wenn diese Option aktiviert ist, wird erzwungen, dass die Cookies, die für die Benutzer des Forums erstellt werden, als sicher markiert werden.
Aktiviere diese Option nur, wenn du HTTPS auf deiner gesamten Seite verwendest, da die Cookies sonst beschädigt werden!';
$helptxt['admin_session_lifetime'] = 'Einstellung der Länge einer Admin Sitzung. Ist dieser Timer abgelaufen, ist es erforderlich, sich erneut anzumelden, um Zugriff auf den Adminbereich zu erhalten. Der Wert muss zwischen 5 und 14400 (entspricht einem Tag) Minuten betragen. Aus Sicherheitsgründen wird dringend empfohlen, diesen Wert nicht über 60  Minuten einzustellen. ';
$helptxt['auto_admin_session'] = 'Legt fest, ob eine Adminsitzung mit dem Login aktiviert wird, oder nicht.';
$helptxt['securityDisable'] = 'Deaktiviert die erneute Passwortüberprüfung für den Administratorbereich. NICHT EMPFEHLENSWERT!';
$helptxt['securityDisable_why'] = 'Dies ist dein aktuelles Passwort.<br /><br />Warum du es noch einmal eingeben musst? Damit du dir im Klaren darüber bist, dass <b>Du</b> Änderungen im Administrator-Center vornimmst und dafür verantwortlich bist.';
$helptxt['securityDisable_moderate'] = 'Deaktiviert die erneute Passwortüberprüfung für den Moderatoren-Bereich. NICHT EMPFEHLENSWERT!';
$helptxt['securityDisable_moderate_why'] = 'Dies ist dein aktuelles Passwort (Das gleiche Passwort, welches auch für die Anmeldung im Forum benutzt wird).<br /><br />Warum du es noch einmal eingeben musst? Damit du dir im Klaren darüber bist, dass <b>Du</b> Änderungen im Administrator-Center vornimmst und dafür verantwortlich bist.';
$helptxt['enableOTP'] = 'Enabling this feature allows another layer of security for a member\'s account. Two-factor authentication, or 2FA, is a way of logging into websites that requires more than just a password. Using a password to log into a website is susceptible to security threats, because it represents a single piece of information a malicious person needs to acquire. The added security that 2FA provides is requiring additional information to sign in.<br /><br />A Time-based One-Time Password (TOTP) application such as Google Authenticator or Authy automatically generates an authentication code that changes after a certain period of time.';
$helptxt['emailmembers'] = 'In dieser Meldung kannst du verschiedene &quot;Variablen&quot; angeben.  Das sind:<br />
	{$board_url} - die URL des Forums.<br />
	{$current_time} - die Uhrzeit.<br />
	{$member.email} - die EMail des aktuellen Benutzers.<br />
	{$member.link} - der Link zum aktuellen Benutzer.<br />
	{$member.id} - die ID des aktuellen Benutzers.<br />
	{$member.name} - Der Name des aktuellen Benutzers.  (zur Personalisierung.)<br />
	{$latest_member.link} - Der Link zum zuletzt registrierte Benutzer .<br />
	{$latest_member.id} - Die ID des zuletzt registrierten Benutzers.<br />
	{$latest_member.name} - Name des zuletzt registrierten Benutzers';
$helptxt['attachmentEncryptFilenames'] = 'Durch Verschlüsseln der Anlagendateinamen kannst du mehr als eine Anlage mit dem gleichen Namen haben und erhöhst die Sicherheit. Es konnte jedoch erschweren, deine Datenbank neu zu erstellen, wenn etwas Drastisches passiert.';

$helptxt['failed_login_threshold'] = 'Gib die Anzahl der erfolglosen Login-Versuche an, bevor der Benutzer zur Funktion \'Passwort vergessen?\' weitergeleitet wird.';
$helptxt['loginHistoryDays'] = 'Anzahl der Tage, für die eine Anmelde-Historie im Benutzerprofil angelegt wird. Standard-Wert: 30 Tage.';
$helptxt['oldTopicDays'] = 'Ist diese Option aktiviert, wird dem Benutzer eine Warnung ausgegeben, wenn er in einem Thema schreiben möchte, in welchem seit der eigestellten Zeit (in Tagen) niemand mehr geantwortet hat (0 = deaktiviert).';
$helptxt['edit_wait_time'] = 'Anzahl in Sekunden, bevor ein Hinweis abgezeigt wird, dass der Beitrag editiert wurde.';
$helptxt['edit_disable_time'] = 'Anzahl in Minuten, innerhalb derer ein Benutzer seine eigenen Beiträge noch editieren darf (0 = deaktiviert).<br /><br /><i>Beachte, dass diese Option keinen Effekt auf die Benutzer hat, welche Beiträge anderer Mitglieder editieren dürfen!</i>';
$helptxt['preview_characters'] = 'Diese Option legt die Anzahl der verfügbaren Zeichen für Beginn und Ende der Themenvorschau. <strong> Hinweis </ strong> dies macht die Information nur für das Theme verfügbar, es muss die Vorschau auch unterstützen.';
$helptxt['posts_require_captcha'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor der Beitrag veröffentlicht wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll Spam durch automatische Skripte verhindern.';
$helptxt['enableSpellChecking'] = 'Enable spell checking. You MUST have the pspell library installed on your server and your PHP configuration set up to use the pspell library. Your server ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' appear to have this set up.';
$helptxt['lastActive'] = 'Anzahl der Minuten, die ein Benutzer inaktiv sein kann, um noch als aktiv angezeigt zu werden. Standard ist 15 Minuten.';

$helptxt['customoptions'] = 'Dieser Bereich definiert die Optionen, die ein Benutzer aus einem Drop-Down-Menü wählen kann. Hier müssen ein paar Punkte beachtet werden:
	<ul>
		<li><b>Standardoption:</b> Das durch den Radio-Button ausgewählte Textfeld ist die aktivierte Standardoption, wenn der Benutzer zum ersten Mal sein Profil anschaut.</li>
		<li><b>Optionen löschen:</b> Um eine Option zu löschen, entferne einfach den Text aus dem betreffenden Textfeld. Bei allen Benutzern, die diese Option gewählt hatten, wird sie auf den Standard zurückgesetzt.</li>
		<li><b>Optionen neu ordnen:</b> du kannst die Optionen neu ordnen, indem du den Text von einem Textfeld in ein anderes kopierst. Sei dir aber absolut sicher, dass du den Text <b>nicht</b> veränderst, da sonst alle bisher durch die Benutzer eingegebenen Daten verlorengehen.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Diese Funktion optimiert die Datenbank alle x Tage. Gebe \'1\' ein, um die Datenbank täglich zu optimieren. Du kannst ebenfalls eine max. Zahl von Benutzern angeben, die während der Optimierung online sein dürfen, damit es keine Probleme mit der Geschwindigkeit gibt.';
$helptxt['autoFixDatabase'] = 'Diese Funktion repariert automatisch auftretende Fehler, wobei die Benutzer nichts davon merken werden. Das kann sinnvoll sein, andererseits ist das Forum bei Fehlern so lange funktionsuntüchtig, bis du selbst darauf aufmerksam wirst. Dir wird in diesem Fall eine E-Mail zugesendet.';

$helptxt['enableParticipation'] = 'Zeigt ein spezielles Symbol vor den Themen, in denen man selbst geantwortet hat.';
$helptxt['enableFollowup'] = 'Diese Option erlaubt es Benutzern aus einem Zitat eines Beitrags ein neues Thema zu erstellen.';

$helptxt['db_persist'] = 'Erhöht die Geschwindigkeit zur Datenbank, indem eine Verbindung dauerhaft aufrecht erhalten wird. Wenn du einen dedizierten Server benutzt, könnte es Probleme mit Deimem Hoster geben.';
$helptxt['ssi_db_user'] = 'Diese Einstellung erlaubt das Benutzen eines anderen Benutzernamens bzw. Passwortes für die Datenbank, wenn mit der Datei \'SSI.php\' gearbeitet wird.';

$helptxt['queryless_urls'] = 'ändert das Format von URLs, um sie für Suchmaschinen zu optimieren. Sie werden aussehen wie index.php/topic,1.0.html.<br /><br />Dieses Feature  . ($context[server][is_apache] || $context[server][is_lighttpd] ?  : not) .  läuft auf deinem Server.';
$helptxt['countChildPosts'] = 'Aktiviere diese Option, um die Beiträge und Themen der untergeordneten Boards zum Gesamtwert auf dem Board-Index zu addieren.<br /><br />Diese Funktion macht die Anzeige merklich langsamer, zeigt aber keine Boards mehr mit \'0\' an, wenn diese untergeordnete Boards mit Beiträgen enthalten.';
$helptxt['allow_ignore_boards'] = 'Diese Option erlaubt den Benutzern, bestimmte Boards zu ignorieren.';
$helptxt['deny_boards_access'] = 'Aktiviere "Zugriff verbieten" basierend auf der Mitgliedergruppe für bestimmte Boards.';

$helptxt['who_enabled'] = 'Aktiviert die \'Wer ist online?\'-Funktion, welche dem Benutzer anzeigt, wer online ist und was der Benutzer gerade macht.';

$helptxt['recycle_enable'] = 'Aktiviert die Papierkorb-Funktion und ermöglicht damit das Wiederherstellen von gelöschten Themen und Beiträgen in die entsprechenden Boards.';

$helptxt['enableReportPM'] = 'Diese Option erlaubt den Benutzern das Melden von Privaten Mitteilungen. Sie soll helfen, Mißbräuche der Privaten Mitteilungen zu verfolgen bzw. zu verhindern.';
$helptxt['max_pm_recipients'] = 'Diese Option erlaubt die Vergabe einer max. Anzahl von Empfängern, die ein Benutzer beim Schreiben einer Privaten Mitteilung angeben kann. Dies soll helfen, Spam im Forum zu vermeiden. Benutzer mit der Berechtigung zum Senden von Newslettern sind von dieser Beschränkung ausgenommen (0 = kein Limit).';
$helptxt['pm_posts_verification'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor die Private Mitteilung versendet wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll Spam durch automatische Skripte verhindern.';
$helptxt['pm_posts_per_hour'] = 'Diese Einstellung limitiert die Anzahl der Privaten Mitteilungen, die von einem Benutzer in einer Stunde versendet werden dürfen. Administratoren und Moderatoren sind ausgenommen.';

$helptxt['default_personal_text'] = 'Standardtext für den persönlichen Text neuer Benutzer. Nur verfügbar, wenn persönlicher Text deaktiviert ist, oder der Benutzer seinen persönlichen Text bei der Registrierung einstellen kann. ';

$helptxt['modlog_enabled'] = 'Überwacht alle Aktionen der Moderatoren.';

$helptxt['registration_method'] = 'Legt den Modus der Registration neuer Benutzer des Forums fest. Du kannst wählen aus:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registration Disabled</strong><br />
				Registration ist abgeschaltet, kein benutzer kann sich neu registrieren.<br />
		</li><li>
			<strong>Immediate Registration</strong><br />
				Neue Benutzer können sofort nach der Registrierung das Forum nutzen, sich einloggen, und neue Posts verfassen.<br />
		</li><li>
			<strong>Email Activation</strong><br />
				Diese Option legt fest, dass zur Registrierung ein Aktivierungslink versendet wird, erst nach Anklicken dieses Links wird der Benutzer zum "Full Member".<br />
		</li><li>
			<strong>Admin Approval</strong><br />
				Legt fest, dass neue Benutzer durch einen Admin freigeschaltet werden müssen.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Authenticate with OpenID</strong><br />
	OpenID ermöglicht es einem Benutzer, verschiedene Websites nit den gleichen Zugangsdaten zu nutzen. Um OpenID nutzen zu können, musst du zunächst einen OpenID account anlegen - eine Liste von Providern findest du unter <a href="http://openid.net/" target="_blank">OpenID Official Site</a><br /><br />
	Wenn du einen OpenID Account hast, musst du nur deine unique identification URL in der OpenID input box eingeben und absenden. Du wirst dann zur Site des Providers geleitet, um deine Identität zu bestätigen, um danach zurückgeleitet zu werden. ein extra Login ist dann nicht mehr notwendig.<br /><br />
	Beim ersten Besuch auf der Seite werden einige Details erfragt, um dich zu erkennen, danach kannst du dich einloggen und deine Profileinstellunge ändern, damit du dann mittels der openID eingeloggt wirst. <br /><br />
	Mehr Informationen findest du auf der <a href="http://openid.net/" target="_blank">offiziellen OpenID Site</a> (in Englisch)';

$helptxt['send_validation_onChange'] = 'Wenn aktiviert, erhält ein Benutzer nach Änderung siner Maildresse erneut einen Aktivierungslink an die neue Mailadresse, um Ihren Zugang zu reaktivieren.';
$helptxt['send_welcomeEmail'] = 'Diese Option sendet allen neuen Benutzern eine Willkommens-E-Mail, wenn diese sich im Forum registrieren.';
$helptxt['password_strength'] = 'Legt fest, wie sicher ein Benutzerpasswort mindestens sein muss. Je stärker das Passwort, desto geringer dich Chance, dass der Account gehacked werden kann.
	Die möglichen Optionen sind:
	<ul class="normallist">
		<li><strong>Low:</strong> Das Passwort muss aus mindestens 4 Zeichen bestehen.</li>
		<li><strong>Medium:</strong> Das Passwort muss mindestens 8 zeichen lang sein, und darf nicht Teil des Benutzernamens oder dessen Email sein.</li>
		<li><strong>High:</strong> Wie Medium, aber das Passwort muss sowohl Groß- als auch Kleinbuchstaben, sowie mindestens eine Ziffer enthalten.</li>
	</ul>';
$helptxt['enable_password_conversion'] = 'Wenn aktiviert, wird ElkArte versuchen, Passwörter, die in anderen Formaten gespeichert sind, zu finden, und sie in das Format der Forensoftware zu konvertieren. Normalerweise wird diese Option dazu genutzt, um Foren nach ElkArte zu konvertieren, kann aber auch noch andere Funktionen ausfüllen. Deaktiviert können Nutzer sich nach einer Konversation nicht mit ihrem bisherigen Passwort anmelden, und müssen dieses resetten';

$helptxt['coppaAge'] = 'Dieser Wert gibt das Mindestalter an, welches ein neuer Benutzer haben muss, damit er sich im Forum registrieren darf.
	Während der Registrierung muss angegeben werden, ob der Benutzer älter oder jünger als das Mindestalter ist. Die Registrierung wird je nach Einstellung abgelehnt oder suspendiert, bis die Genehmigung der Eltern bzw. Erziehungsberechtigten vorliegt.
	Solltest du den Wert \'0\' eingeben, werden alle Funktionen bezüglich der Alterbeschränkung deaktiviert.';
$helptxt['coppaType'] = 'Sollte die Altersbeschränkung aktiviert sein, bestimmt diese Option, was mit den Registrierungen der Benutzer passiert, die jünger als das Mindestalter sind. Es gibt die folgenden zwei Möglichkeiten:
	<ul>
		<li>
			<b>Registrierung ablehnen:</b><br />
				Die Registrierung neuer Benutzer unterhalb des Mindestalters wird sofort abgelehnt.<br />
		</li><li>
			<b>Erfordert Genehmigung von Eltern bzw. Erziehungsberechtigten</b><br />
				Die Benutzerkonten neuer Benutzer unterhalb des Mindestalters werden auf den Status \'Erwarte Genehmigung\' gesetzt und es wird ein Formular angezeigt, mit dem die Eltern bzw. Erziehungsberechtigten die Genehmigung für die Mitgliedschaft im Forum erteilen müssen.
				Ihnen werden ebenso die Kontaktmöglichkeiten angezeigt, mit denen das Formular an den Administrator geschickt werden kann (per Post oder per Fax).
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Um die Registrierung Minderjähriger ohne Einwilligung der Eltern zu verhindern, gibt es die Kontakt Box. Der Minderjährige erhält die Mitteilung, dass er die Erlaubnis seiner Eltern braucht, zum Schluss muss eine Postanschrift oder eine Faxnummer genannt werden.';

$helptxt['allow_hideOnline'] = 'Erlaubt es allen Benutzern, ihren Onlinestatus vor den anderen Benutzern, außer den Administratoren, zu verstecken. Bei Deaktivierung dieser Option ist es nur Moderatoren möglich, ihre Anwesenheit zu verstecken. Beachte: diese Option ändert nicht den aktuellen Status der Benutzer, es beendet nur deren Unsichtbarkeit in der Zukunft.';

$helptxt['latest_support'] = 'Dieses Panel zeigt dir einige der häufigsten Probleme und Fragen zur Serverkonfiguration. Mach dir keine Sorgen, diese Informationen werden nicht aufgezeichnet. Wenn diese Funktion den Wert Retrieving support information zurückgibt, dann kannst du dich wahrscheinlich nicht mit deinem Computer in die Website einloggen.';
$helptxt['latest_packages'] = 'Here you can see some of the most popular and some random packages, with quick and easy installations.<br /><br />If this section doesn\'t show up, your computer probably cannot connect to <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.  It may not show up properly if your computer can\'t find <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>, though.';

$helptxt['secret_why_blank'] = 'Zu deiner Sicherheit wird die Antwort, genauso wie dein Passwort, verschlüsselt, so dass ElkArte dir nur sagen kann, ob es richtig ist oder nicht. Die Antwort oder das Passwort selbst kann ElkArte dagegen nicht nennen!';
$helptxt['moderator_why_missing'] = 'Da die Moderatoren je nach Board ausgewählt werden, musst du diese im Bereich  <a href="%1$s?action=admin;area=manageboards" target="_blank" class="new_win">Boards verwalten</a> eintragen.';

$helptxt['permissions'] = 'Berechtigungen haben die Funktion, bestimmten Gruppen Aktionen zu erlauben oder zu verbieten<br /><br />Du kannst mit Hilfe der Checkboxen mehrere Boards gleichzeitig ändern oder die Berechtigungen einer bestimmten Benutzergruppe ändern, in dem du auf \'Ändern\' klickst.';
$helptxt['permissions_board'] = 'Wenn ein Board auf \'Global\' gesetzt ist, hat es keine speziellen Berechtigungen. \'Lokal\' dagegen hat eigene Berechtigungen, welche sich von anderen Boards unterscheiden und somit unterschiedliche Berechtigungen zwischen den Boards erlaubt.';
$helptxt['permissions_quickgroups'] = 'Erlaubt das Verwenden der vordefinierten Berechtigungen - Standard bedeutet \'nichts spezielles\', Beschränkt bedeutet \'wie ein Gast\', Moderator vergibt Rechte \'wie einem Moderator\' und \'Wartungsmodus\' bedeutet, dass die Berechtigungen einem Administrator sehr nahe kommen.';
$helptxt['permission_enable_deny'] = 'Das Verbieten von Berechtigungen erlaubt es dir, bestimmte Funktionen gewählten Benutzergruppen zu entziehen. Dazu erstellst du z.B. eine benutzergruppe und verbietest dieser eine bestimmte Berechtigung.<br /><br />Benutze diese Option mit großer Vorsicht, da verbotene Berechtigungen den Benutzern nicht mehr zur Verfügung stehen, selbst wenn die Berechtigungen in einer anderen Gruppe erlaubt sind, der dieser Benutzer angehört.';
$helptxt['permission_enable_postgroups'] = 'Das Aktivieren der Berechtigungen für beitragsbasierende Gruppen erlaubt das Zuweisen von Berechtigungen an Benutzer mit einer bestimmten Beitragszahl. Diese Berechtigungen werden zu den bereits vorhanden <em>addiert</em>.';
$helptxt['membergroup_guests'] = 'Die Benutzergruppe \'Gast\' enthält alle Benutzer, die nicht eingeloggt sind.';
$helptxt['membergroup_regular_members'] = 'Die Benutzergruppe \'Normale Mitglieder\' bezeichnet alle Benutzer, die eingeloggt sind, jedoch keiner primären Benutzergruppe zugeordnet sind.';
$helptxt['membergroup_administrator'] = 'Der Administrator kann per Definiton alles auf dem Board sehen, und hat alle Zugriffsrechte. Somit gibt es keine Einschränkungen für Administratoren.';
$helptxt['membergroup_moderator'] = 'Die Moderatorengruppe ist eine spezielle  Benutzergruppe. Innerhalb des Forums erlauben die Einstellungen dem Moderator weitgehenden Zugriff, wie editieren, oder löschen fremder Beiträge. Außerhalb des Forums, z.B. Design oder Einstellungen der Website, gelten für den Moderator die selben Einstellungen, wie für gewöhnliche Nutzer.';
$helptxt['membergroups'] = 'ElkArte kennt zwei Arten von Gruppen, denen die Benutzer zugeteilt sind:
	<ul>
		<li><b>Reguläre Gruppen:</b> In eine reguläre Gruppe werden Benutzer nicht automatisch eingeteilt. Um einen Benutzer einer dieser Gruppen zuzuordnen, gehe in das Profil des Benutzers und klicke auf \'Benutzerkonto\'. Von hier aus kannst du nun den Benutzer verschiedenen Gruppen zuordnen.</li>
		<li><b>Beitragsbasierende Gruppen:</b> Im Gegenteil zu regulären Gruppen kannst du niemandem einer beitragsabhängigen Gruppe zuordnen. Stattdessen werden Benutzer diesen automatisch zugeordnet, wenn sie eine bestimmte Zahl an Beiträgen geschrieben haben.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Du kannst die Ereignisse editieren, indem du auf den roten Stern neben dem Namen klickst.';

$helptxt['maintenance_backup'] = 'Dieser Bereich erlaubt eine Sicherung aller Beiträge, Einstellungen, Benutzerkonten und anderen Informationen deines Forums in einer (womöglich sehr großen) Datei.<br /><br />Es ist empfehlenswert, die Daten regelmäßig zu sichern, am besten wöchentlich, um die Datensicherheit zu erhöhen.';
$helptxt['maintenance_rot'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen alter Themen. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung deiner Datenbank zu machen für den Fall, dass du etwas löschst, was du nicht löschen wolltest.<br /><br />Benutze diese Funktion mit äußerster Vorsicht!';
$helptxt['maintenance_members'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> Löschen von Benutzerkonten aus dem Forum. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung deiner Datenbank zu machen für den Fall, dass du etwas löschst, was du nicht löschen wolltest.<br /><br />Benutze diese Funktion mit äußerster Vorsicht!';

$helptxt['avatar_default'] = 'Durch Aktivieren dieser Option wird für alle Benutzer, die kein eigenes Benutzerbild verwenden, ein Standard-Benutzerbild angezeigt. Die Datei heisst \'Default_avatar.png\' und befindet sich im Images-Verzeichnis vom Theme.';
$helptxt['avatar_server_stored'] = 'Erlaubt den Benutzern, ihren Avatar von einer Auswahl auf dem Server gespeicherter Avatare selbst auszuwählen. Diese sind im Allgemeinen am selben Ort, wie das Forum, im Ordner avatars.<br />Als Tip, wenn du in diesem Ordner Unterordner anlegst, dann kannst du  &quot;Kategorien&quot; für die Avatare erstellen.';
$helptxt['avatar_external'] = 'Erlaubt den betreffenden Benutzern, ihre Avatare von anderen Servern zu verlinken. Der Nachteil ist, dass Bilder verlinkt werden können, die nicht im Forum erwünscht sind (pornografische bzw. gewalttätige Bilder).';
$helptxt['avatar_download_external'] = 'Aktiviere diese Option, um den externen Avataren herunterzuladen. Sollte das erfolgreich sein, wird er danach wie ein hochgeladener Avatar behandelt.';
$helptxt['avatar_upload'] = 'Diese Option gleicht dem externen Avataren, hat aber den Vorteil, dass du mehr Kontrolle über die Avatare hast und die Benutzer keine Möglichkeit brauchen, ihre Avatare selbst hochzuladen.<br /><br />Der Nachteil ist, dass du ensprechend mehr Platz auf deinem Server bereitstellen musst.';
$helptxt['avatar_resize_options'] = 'Diese Einstellungen betreffen alle Avatare, gleich ob von einer externen URL verlinkt oder vom Benutzer auf den Server hochgeladen.';
$helptxt['avatar_download_png'] = 'PNGs sind größer, bieten aber eine bessere Kompression (und damit Qualität). Sollte dies nicht aktiviert sein, werden stattdessen JPEG-Bilder benutzt - welche meistens kleiner in der Größe sind, jedoch eine schlechtere Qualität bieten.';
$helptxt['gravatar'] = 'Gravatar (globally recognized avatar) ist ein Dienst zur Bereitstellung von global nutzbaren Avataren. Für weitere Details besuche bitte die Gravatar <a href="http://www.gravatar.com" target="_blank"><strong>Website</strong>.</a>';
$helptxt['gravatar_rating'] = 'Gravatar ermöglicht es Benutzern, ihre Bilder selbst zu beurteilen, um zu definieren, ob ein Bild für eine bestimmte Zielgruppe geeignet ist. Standardmäßig werden nur G bewerteten Bilder angezeigt, außer, du definierst, dass auch andere Bewertungen angezeigt werden.
Strong G sind  geeignet für die Anzeige auf allen Webseiten mit jedem Publikum. Strong PG können unhöflich Gesten, provozierend gekleidete Personen, milde  Schimpfwörter oder milde Gewalt enthalten.Strong R kann Dinge wie derbe Obszönität, intensive Gewalt, Nacktheit oder Konsum harter Drogen enthalten. Strong X kann sexuellen Hardcore Inhalt oder extreme Gewalt enthalten.';
$helptxt['custom_avatar_enabled'] = 'Es wird empfohlen, dies zu aktivieren, um die beste Leistung in Bezug auf Prozessorlast und Datenbankzugriff zu erzielen. Du musst ein öffentlich zugängliches Verzeichnis anlegen, in dem die Avatare gespeichert werden, und eine öffentlich zugängliche URL für dieses Verzeichnis. Zum Beispiel ein  Verzeichnis von /home/deinforumname/public_html/NewAvatarDirectory und eine URL von http://www.deinforumname.com/NewAvatarDirectory.';
$helptxt['disableHostnameLookup'] = 'Deaktiviert die Suche nach den Hostnamen, was manche Server sehr langsam macht. Beachte, dass dies das Bannen von Benutzern uneffektiver macht.';

$helptxt['search_weight_commonheader'] = 'Wichtungsfaktoren werden genutzt, um die Relevanz von Suchergebnissen zu verbessern. Ändere diese, um Treffer zu generieren, die für dein Forum typisch sind. Zum Beispiel das Forum einer Newssite möchte bestimmt eine relativ hohe Bewertung für \'age of last matching message\'. Alle Werte sind relativ in Beziehung zueinander, und müssen positive natürliche Zahlen sein.';
$helptxt['search_weight_frequency'] = 'Dieser Faktor zählt die Anzahl der übereinstimmenden Beiträge und dividiert sie durch die Anzahl der Beiträge im Thema.';
$helptxt['search_weight_age'] = 'Dieser Faktor bewertet das Alter des aktuellsten Beitrag des Themas. Je aktueller der Beitrag ist, je höher wird bewertet.';
$helptxt['search_weight_length'] = 'Dieser Faktor bewertet die Größe des Themas. Je mehr Beiträge im Thema sind,je höher wird bewertet.';
$helptxt['search_weight_subject'] = 'Dieser Faktor prüft, ob der Suchbegriff im Titel des Themas vorkommt.';
$helptxt['search_weight_first_message'] = 'Dieser Faktor überprüft, ob der Suchbegriff im ersten Beitrag des Themas vorkommt.';
$helptxt['search_weight_sticky'] = 'Dieser Faktor überprüft, ob das Thema fixiert wurde und erhöht dann ggf. die Relevanz.';
$helptxt['search_weight_likes'] = 'This factor looks whether a topic has likes and increases the relevancy score based on the number.';
$helptxt['search'] = 'Hier kannst du die Einstellungen für die Suche verwalten.';
$helptxt['search_why_use_index'] = 'Ein Suchindex kann die Leistung der Suche innerhalb des Forums deutlich steigern. Besonders, wenn die Anzahl der Nachrichten wächst, kann eine Suche ohne Index lange dauern, und den Druck auf die Datenbank erhöhen. Wennn dein Forum größer als 50.000 Nachrichten ist, solltest du dich dazu entscheiden, einen Index zu erstellen, um die Leistung deines Forums sicherzustellen. Beachte, dass ein Suchindex ziemlich viel Platz beanspruchen kann. Ein Volltextindex ist ein in die Database eingebauter Index. Er ist relativ kompakt (etwa die selbe Größe wie die message table), aber eine Menge allgemeiner Worte sind nicht indiziert,und er kann, bei einigen Jokerabfragen, sehr langsam werden. Der personalisierte Index ist gößer (abhängig von deiner Konfiguration kann er die dreifache Größe der messages table annehmen) aber seine Performance ist meist besser als bei Fulltext, und umfasst die meisten Worte.';

$helptxt['see_admin_ip'] = 'IP-Adressen werden Administratoren und Moderatoren zur besseren Moderation bzw. Verfolgung angezeigt. Beachte, dass IP-Adressen einen Benutzer nicht eindeutig identifizieren und bei den meisten Leuten nach einiger Zeit wechseln.<br /><br />Benutzer können ihre eigenen IP-Adressen immer sehen.';
$helptxt['see_member_ip'] = 'Deine IP-Adresse wird nur dir und Moderatoren angezeigt. Beachte, dass diese Daten nicht die Person identifizieren, da IP-Adressen häufig nach einer gewissen Zeit wechseln.<br /><br />Du kannst keine IP-Adressen anderer Benutzer sehen und diese können deine ebenfalls nicht sehen.';
$helptxt['whytwoip'] = 'ElkArte benutzt mehrere Methoden, um die IP-Adressen zu bestimmen. Normalerweise finden beide Methoden ein und dieselbe Adresse. In manchen Fällen werden jedoch zwei Adressen gefunden, welche SMF beide protokolliert und beide zum Kontrollieren eines Banns benutzt. Du kannst auf eine der beiden Adressen klicken, um diese zu verfolgen und ggf. zu bannen.';

$helptxt['ban_cannot_post'] = 'Die \'Kann nicht schreiben\'-Einschränkung erlaubt dem gebannten Benutzer nur noch das Lesen des Forums. Er kann keine neuen Themen erstellen oder auf existierende antworten, keine Privaten Mitteilungen versenden oder bei Umfragen abstimmen. Der Benutzer kann aber weiterhin die Themen und Privaten Mitteilungen lesen.<br /><br />Dem gebannten Benutzer wird eine Warnmeldung angezeigt.';

$helptxt['posts_and_topics'] = '
	<ul class="normallist">
		<li>
			<strong>Post Settings</strong><br />
			ändere die Einstellungen bezüglich des Sendens von Nachrichten, und die #art und Weise, wie diese dargestellte werden. Du kannst hier auch die Rechtschreibprüfung einschalten.
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Aktiviert Codes, um die nachrichten zu formatieren, stellt auch ein, welche BBCodes erlaubt sind, und welche nicht.
		</li><li>
			<strong>Censored Words</strong>
			Um unerwünschte Worte oder Inhalte im Forum unter Kontrolle zu halten, kannst du einzelne Worte zensieren. Diese Funktion erlaubt dir auch, verbotene Worte gegen unverfängliche Begriffe automatisch auszutauschen.
		</li><li>
			<strong>Topic Settings</strong>
			Ändert die Einstellungen bezüglich der Themen. Die Anzahl der Themen pro Seite, ob gepinnte Themen aktiv sind oder nicht, anzahl der Beiträge eines Themas, damit es ein heißes Thema wird etc.
		</li>
	</ul>';
$helptxt['allow_no_censored'] = 'Wenn diese globale Einstellung aktiviert ist, können die Benutzer die Zensur in den Layouteinstellungen deaktivieren. Diese Möglichkeit wird von deren Rechten im Profil begrenzt.';
$helptxt['spider_mode'] = 'Setzt die Protokollierungs-Stufe fest<br />
Standard - Protokolliert minimale Spider-Aktivitäten.<br />
Moderat - Erzeugt detailliertere Statistiken.<br />
Aggressiv - Wie &quot;Moderat&quot; aber protokolliert jeden einzelnen Seitenbesuch.';

$helptxt['spider_group'] = 'Wenn ein Gast als Suchmaschine erkannt wird und einer Gruppe zugeordnet wird, kannst du den Umfang des Zugriffs bequem über die Berechtigungen steuern. So kannst du Suchmaschinen einen erweiterten Zugriff ermöglichen (wie normalen Gästen). Du kannst z.B. eine neue Gruppe mit dem Namen \'Bots\' erstellen und diese hier auswählen. Danach entziehst du dieser Gruppe die Berechtigung, Profile anzuschauen, um die Benutzerdaten zu schützen.<br />Achtung - Das Erkennen der Suchmaschinen arbeitet nie perfekt und kann von anderen Benutzern simuliert werden, um trotzdem einen erweiterten Zugriff (wenn eingestellt) wie normale Gäste zu bekommen.';
$helptxt['show_spider_online'] = 'Diese Einstellung erlaubt dir, zu wählen, ob \'Spider\' (Bots, die z.B. Deine Seiten für Suchmaschinen indexieren) in der \'Wer ist online?\'-Liste auf dem Forums-Index und auf der \'Wer ist online?\'-Seite angezeigt werden.
Die Optionen sind:
<ul class="normallist">
<li>
<b>Überhaupt nicht</b><br />
Spider erscheinen als Gäste.</li>
<li><b>Zeige Spider-Anzahl</b><br />
Der Forums-Index zeigt die Anzahl der zur Zeit im Forum aktiven Spider.</li>
<li><b>Zeige Spider-Namen</b><br />
Jeder Spider-Name wird angezeigt, sodass jeder Benutzer sehen kann, wie viele Spider und welche gerade das Forum besuchen. Dies gilt sowohl für den Forums-Index wie auch für die \'Wer Ist Online?\'-Seite.</li>
<li><b>Zeige Spider-Namen - Nur Administratoren</b><br />
Wie oben, nur dass lediglich Administratoren den Spider-Status sehen können - alle anderen Benutzer sehen Spider als Gäste.</li>
</ul>';

$helptxt['birthday_email'] = 'Wähle die Vorlage für die Geburtstagsnachricht. Eine Vorschau wird in den Feldern \'E-Mail-Betreff\' und \'E-Mail-Inhalt\' angezeigt.<br /><strong>Achtung</strong> - Das Auswählen dieser Option aktiviert nicht automatisch den Versand der Geburtstagsnachricht. Um den Versand zu starten, benutze bitte die Seite <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Geplante Aufgaben</a> und aktiviere die Aufgabe \'Geburtstagsnachricht senden\'.';
$helptxt['pm_bcc'] = 'Wenn du eine Private Mitteilung versenden möchtest, kannst du einen weiteren Empfänger als BCC bzw. Blind Carbon Copy hinzufügen. Die Identität des BCC-Empfängers wird den anderen Empfängern nicht mitgeteilt, er erhält die Mitteilungen anonym und ohne Wissen der anderen.';

$helptxt['move_topics_maintenance'] = 'Diese Funktion erlaubt es, alle Beiträge aus einem Board in ein anderes Board zu verschieben.';
$helptxt['maintain_reattribute_posts'] = 'Diese Funktion ordnet Beiträge von Gästen registrierten Benutzern zu. Das ist sinnvoll, wenn ein Benutzer das Benutzerkonto aus Versehen gelöscht hat und nach einer erneuten Registrierung die Beiträge zurückhaben möchte.';
$helptxt['chmod_flags'] = 'Du kannst die Dateiberechtigungen auf einen selbst bestimmten Wert setzen. Gebe dazu einen numerischen CHMOD-Wert an. Beachte, dass diese Einstellung keine Auswirkungen auf Windows-Betriebssysteme hat.';

$helptxt['postmod'] = 'Diese Sektion erlaubt es Benutzern mit Moderatoren-Status (d.h. mit ausreichenden Berechtigungen), Beiträge und Themen zu akzeptieren, bevor diese angezeigt werden.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or HTML code.  This will allow you to add more instant message providers, images or an embed, etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.png" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		You can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{KEY} - The key specified for a certain value of select box or radio buttons in the admin panel. Usually to use in case of localization or use in CSS of Javascript elements (e.g. as class name).</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - URI of the images directory of the user\'s current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - URI of the images directory of the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'Die Eingabemaske ist wichtig für die Sicherheit des Forums. Die überprüfung der Benutzereingaben kann helfen, dass Daten in unerwarterter Weise benutzt werden. Wir haben einige einfache Vorschläge und Hinweise.<br /><br />
	<div class="smalltext custom_mask">
		&quot;~[A-Za-z]+~&quot; - akzeptiert alle Groß- und Kleinbuchstaben.<br />
		&quot;~[0-9]+~&quot; - akzeptiert alle Ziffern.<br />
		&quot;~[A-Za-z0-9]{7}~&quot; - akzeptiert alle Buchstaben und Zahlen, erwartet 7 Stellen.<br />
		&quot;~[^0-9]?~&quot; - verbietet Ziffern.<br />
		&quot;~^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$~&quot; - Erlaubt nur 3 oder 6 stellige Hexadezimalcodes.<br />
	</div><br /><br />
	zusätzlich können spezielle Zeichen definiert werden: ?+*^$ und {xx}.
	<div class="smalltext custom_mask">
		? - kein oder ein Treffer des vorhergehenden Ausdrucks.<br />
		+ - mindestens eine Übereinstimmung mit der Suchphrase.<br />
		* - kein oder mehrere Übereinstuimmungen.<br />
		{xx} - eine exakte Anzahl des vorgegebenen Ausdrucks.<br />
		{xx,} - Mindestanzahl der Übereinstimmungen.<br />
		{,xx} - Maximalanzahl an Übereinstimmungen.<br />
		{xx,yy} - Anzahl der Übereinstimmungen liegt zwische xx und yy.<br />
		^ - Beginn einer Zeichenfolge.<br />
		$ - Ende einer Zeichenfolge.<br />
		\ - bendet das nächste Zeichen aus.<br />
	</div><br /><br />
	Mehr Informationen und erweiterte Techniken können im Internet gefunden werden.';

$helptxt['badbehavior_reverse_proxy_addresses'] = 'Bei einigen Serverfarmkonfigurationen kann Bad Behavior nicht in der Lage sein, zu bestimmen, ob eine Remote-Anfrage von deinem Reverseproxy / Load Balancer stamt, oder direkt angekommt. In diesem Fall solltest du alle internen IP-Adressen deiner Reverse-Proxy / Load-Balancer-Server hinzufügen, wie auf dem Ursprungs-Server zu sehen. Darauf kann in der Regel verzichtet werden; solltest du jedoch eine Konfiguration verwenden, bei der einige Anfragen die Reverse-Proxy / Load Balancer umgehen können, und an den Ursprungsserver direkt kontaktieren, dann solltest du diese Option verwenden. Außerdem solltest du diese Option verwenden, wenn eingehende Anfragen zwei oder mehr Reverse-Proxys vor Erreichen der Ursprungsserver durchlaufen. Gib jeweils die IP-Adresse oder CIDR Netzblöcke mit ein, durch | getrennt (1.2.3.4 | 5.4.3.2/27).';
$helptxt['badbehavior_reverse_proxy_header'] = 'Wenn ein Reverse Proxy genutzt wird, wird Bad Behavior in den HTTP Header schaun, um die aktuelle Source IP Address für jede Webanfrage zu ermitteln. Dein Reverse Proxy oder Load Balancer muss einen HTTP Header hinzufügen, der die Remote IP Adresse beinhaltet. Die meisten tun dies standardmäßig; kontrolliere ide Konfiguration deines Reverse Proxys oder Load Balancers, um sicherzustellen, dass dieser Header gesendet wird.<br /><br />Wenn du den CloudFlare Service nutzt, musst du diese Option in CF-Connecting-IP ändern.';
$helptxt['badbehavior_reverse_proxy'] = 'Wenn aktiviert, wird Bad Behavior davon ausgehen, Verbindungen von einem Reverse Proxy, wenn ein spezieller HTTP Header empfangen wird.';
$helptxt['badbehavior_httpbl_maxage'] = 'Anzahl der Tage seit der letzten von Project Honey Pot beobachteten verdächtigen Aktion, die von eier IP abging.  Bad Behavior wird Anfragen und Aufrufe von diesen IP blockieren, die in der maximal angegebenen Zeit auffällig waren.';
$helptxt['badbehavior_httpbl_threat'] = 'Diese Zahl ist ein Maß dafür, wie stark man dieser IP mißtrauen sollte. Sie basiert auf den Ergebnissen des Project Honey Pot. Bad Behavior wird Anfragen mit einem threat level größer oder gleich der Eingabe blockieren. Project Honey Pot findest du unter <a href="http://www.projecthoneypot.org/threat_info.php" target="_blank">more information on this parameter</a>.';
$helptxt['badbehavior_httpbl_key'] = 'Bad Behavior nutzt Informationen vom <a href="http://www.projecthoneypot.org/faq.php#g" target="_blank">http:BL</a>-Dienst, zur Verfügung gestellt von <a href="http://www.projecthoneypot.org/" target="_blank">Project Honey Pot</a>, um Abfragen zu prüfen.<br /><br />Dies ist optional; möchtest du diesen Dienst nutzen, musst du dich zunächst <a href="http://www.projecthoneypot.org/httpbl_configure.php" target="_blank">registrieren</a> und einen API-Schlüssel generieren. Um http:BL zu deaktivierne, entferne den API-Schlüssel aus deinen Einstellungen.';
$helptxt['badbehavior_verbose'] = 'Die Aktivierung des verbose mode sorgt dafür, dass alle HTTP Anfragen geloggt werden. Wenn der verbose mode ausgeschaltet ist, werden nur Anfragen geloggt, wenn es sich um geblockte oder verdächtigte Anfragen handelt. <br /><br />Standardmäßiig ist der verbose mode ausgeschaltet. Die Benutzung des verbose mode wird nicht empfohlen, weil es deine Webseite deine deutlich verlangsmt, er besteht, um Daten über Spammer zu sammeln, die noch nicht geblockt sind.';
$helptxt['badbehavior_logging'] = 'Soll Bad Behavior ein Log der Anfragen halten?. Standardmäßig ist dies aktiviert, und es wird nicht empfohlen, das abzuschalten, weil ansonsten zusätzlicher Spam durchkommen kann.';
$helptxt['badbehavior_strict'] = 'Bad Behavior arbeitet in 2 Block Modi: normal und strict.<br />Wenn strict mode aktiviert ist, werden zusätzliche Tests nach (alter) Software mit Spampotential durchgeführt, es kann aber dazu führen, dass gelegentlich auch legitime Benutzer, die diese Software verwenden geblockt werden.';
$helptxt['badbehavior_offsite_forms'] = 'Bad Behavior verhindert normalerweise, dass deine Webseite Inhalte erhält, die sie über Formulare anderer Webseiten erhält. Das hindert Spammer daran, Spam auf deine Seite zu senden, indem er z.B. eine Google cached Version deiner Webseite dazu benutzt, dir Spam zu senden. Wie auch immer, einige Webapplikationen, wie auch OpenID setzen voraus, dass deine Webseite in der Lage ist, Formulardaten auf diese Weise zu empfangen. Wenn du OpenID nutzt, aktiviere diese Option.';
$helptxt['badbehavior_postcount_wl'] = 'Dies erlaubt dir, die Bad Behavior-Tests für Benutzer, die eine definierte Anzahl von Beiträgen überschritten haben, zu umgehen.<br />-1 = Keinerlei Tests bei registrierten Benutzern.<br />0 = Jeder Benutzer wird getestet, unabhängig von seiner Beitragszahl.<br />X = Jeder Benutzer mit weniger als den angegebenen Beiträgen wird getestet.';
$helptxt['badbehavior_ip_wl'] = 'IP-Adressbereiche, benutze das CIDR-Format. Um eine Adresse zu entfernen, einfach leer lassen und speichern';
$helptxt['badbehavior_useragent_wl'] = 'User agents werden nur durch einen eakten Treffer erkannt.';
$helptxt['badbehavior_url_wl'] = 'Eingaben bei der URL zwischen dem ersten / hinter dem Servernamen bis, aber nicht einschließlich, dem ? (Fragezeichen). Die URL für die Whitelist, also die erlaubten URLS, befindet sich in jedem Fall auf deinem Server. Einträge sollten so genau wie nötig, aber so schlicht wie möglich gehalten werden.<br />Beispiel: /example beinhaltet /example.php genauso wie /example/address.';

$helptxt['filter_to'] = 'Ersetzt den gefundenen Text durch diesen, wenn der Parameter leer bleibt, wird der gefundene Text durch nichts ersetzt';
$helptxt['filter_from'] = 'Gib den Text an, den du finden/ersetzen möchtest.  Wenn type als regex eingestellt ist, dann muss es ein gültiger Ausdruck , incl. Trennzeichen sein, wenn nicht, ist es ein simpler Textvergleich.';
$helptxt['filter_type'] = 'Standardmäßig wird eine exakte Phrase gefunden und ersetzt duch den Text im replace field.  Regular Expression ist eine Jokeroption, aber es muss im gültigen regex format sein.';
$helptxt['pbe_post_enabled'] = 'Aktiviere dies, damit Benutzer auf Mailnachrichten antworten können, und diese als Antwortpost such senden. Erforderlich, um Postingberechtigungen zu erhalten.';
$helptxt['pbe_pm_enabled'] = 'Aktiviere das um Benutzern zu erlauben, per Mail auf PMs zu antworten. Erforderlich, um PM Berechtigungen zu erhalten. Diese Einstellung erlaubt ausschließlich zum Empfang und zur Antwort von PMs.';
$helptxt['maillist_group_mode'] = 'Wenn aktiviert, werden Mails unter dem Anzeigenamen des Posters versendet. Das ist nur eine Hülle, die ursprüngliche Mailadresse wird nicht verändert.';
$helptxt['maillist_newtopic_change'] = 'Das erlaubt Benutzern, den Betreff einer Mail zhu ändern und als neues Thema zu senden. Das neue Thema wird im selben Bord erstellt, in das die Antwort gehen würde.';
$helptxt['maillist_sitename_address'] = 'Das muss die Adresse sein, die an die emailpost.php Datei oder die imap Mailbox geleitet wird.';
$helptxt['maillist_help_short'] = 'Dieses Feature erlaubt es den Forenbenutzern, auf Mails zu antworten, und die Antworten als Replies ins Forum zu posten. Bitte nutze das Wiki für weitere Instruktionen.';

$helptxt['frame_security'] = 'Der X-Frame-Options HTTP response header kann genutzt werden, um festzulegen, ob ein Bowseer die Seite in einer Seite in einem frame oder einem iframe rendern darf. Du kannst diese zusätzliche Sicherheitsbeschränkung nutzen, um clickjacking attacks zu verhindern, indem deine Seite in eine andere eingebettet wird.
	<br />
	Mehr Informationen dazu findest du im Internet..';

$helptxt['attachment_inline_title'] = '<b>Add an inline attachment</b><br />
		Example:
		<br /><b>[attach align=left width=400]123[/attach]</b>
		<br />This will show a left-aligned image resized to 400 pixels wide with the post text flowing around it. Except for the attachment tag and the attachment id all other parameters are optional
		<br /><b>[attach]123[/attach]</b>
		<br />This will show the attachment as a thumbnail if available, if no thumbnail is available it will use a full sized image. The image will be in line with the text of your post.
		<br /><br />
		<br /><b>Options:</b>
		<br />where x is the attachment id
		<br />align=left, center, right
		<br />width=### (where # is number in pixels)
		<br />height=### (where # is number in pixels)
		<br />
		<h3>Modes available</h3>
		<p>
			You can choose the inline mode you want for your attachment:
			<ul>
				<li>Thumbnail [attach]x[/attach] : Your image will be shown as a thumbnail</li>
				<li>Text Link [attachurl]x[/attachurl] : Only a link is show with size and view details. By clicking on it, the image is displayed.</li>
			</ul>
		</p><br />
		<p>
			You can choose how to align the inline image:
			<ul>
				<li>align=left : The image is aligned to the left and the text will flow around it</li>
				<li>align=right : The image is aligned to the right and the text will flow around it</li>
				<li>align=center : The image is centered and the text will be below it</li>
			</ul>
		</p><br />
		<p>
			You can choose how wide to show the image:
			<ul>
				<li>width=123 : The image is displayed 123 pixels wide</li>
				<li>If the width specified is larger than the image or larger than the forum allows the largest allowable width will be used</li>
				<li>Can be used to shrink a thumbnail as well [attach width=50]x[/attach] will display a 50px wide thumbnail</li>
			</ul>
		</p><br />
		<p>
			You can choose how tall to show the image:
			<ul>
				<li>height=123 : The image is displayed 123 pixels tall</li>
				<li>If the height specified is bigger than the image or bigger than the forum allows the biggest allowable width will be used</li>
				<li>Can be used to shrink a thumbnail as well [attach height=50]x[/attach] will display a 50px tall thumbnail</li>
			</ul>
		</p>';