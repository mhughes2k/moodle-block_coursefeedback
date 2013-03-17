<?php #GERMAN
// Defaults
$string['pluginname']						= 'Kursfeedback';
$string['caution']							= 'Warnhinweis';
$string['copyof']							= 'Kopie von "{$a}"';
$string['untitled']                         = 'Unbenannt';
// Adminpage
$string['adminpage_link_feedbackedit'] 		= 'Umfragen erstellen/bearbeiten';
$string['adminpage_html_submitters1a'] 		= 'Aktuelle Umfrage:';
$string['adminpage_html_submitters1b'] 		= 'W&auml;hlen Sie einen Fragesatz. Dieser wird im Block "'.$string['pluginname'].'" zur Evaluation bereit gestellt.<br /> Die verf&uuml;gbaren Frages&auml;tze k&ouml;nnen Sie unter "'.$string['adminpage_link_feedbackedit'].'" &auml;ndern.';
$string['adminpage_html_submitters2a'] 		= 'Standard Sprache';
$string['adminpage_html_submitters2b'] 		= 'W&auml;hlen Sie eine Sprache die angezeigt wird, sollten keine Fragen vorhanden sein, die in der Sprache verfasst wurden, welche im Kurs oder im Nutzerprofil eingestellt ist.';
// Page
$string['page_headline_admin']				= 'Kursfeedback Administration';
$string['page_headline_listoffeedbacks']	= 'Liste aller Feedbacks';
$string['page_headline_listofquestions']	= 'Fragenkatalog zu "{$a}"';
$string['page_link_evaluate']				= 'Kurs Bewerten';
$string['page_link_view'] 					= 'Auswertung';
$string['page_link_newtemplate']			= 'Neue Umfrage erstellen';
$string['page_link_backtoconfig']			= 'Zur&uuml;ck zur Webseiten-Administration';
$string['page_link_showlistofquestions']	= 'Fragen bearbeiten';
$string['page_link_noquestion']				= 'Keine Fragen vorhanden - Erstellen Sie eine Neue.';
$string['page_link_newquestion']			= 'Neue Frage erstellen';
$string['page_link_deletelanguage']			= 'Sprache(n) verwerfen';
$string['page_link_backtofeedbackview']		= 'Zur&uuml;ck zur &Uuml;bersicht';
$string['page_link_newlanguage']			= 'Weitere Sprache hinzuf&uuml;gen';
$string['page_link_download']				= 'Ergebnisse als {$a}-Datei speichern';
$string['page_link_use']					= 'Verwenden';
$string['page_html_editallquestions']		= 'Auf alle Sprachen anwenden';
$string['page_html_viewnavbar']				= 'Auswertung der Umfrage';
$string['page_html_viewintro']		 		= 'Das Ergebnis zeigt die Anzahl der Stimmen f&uuml;r jede Note und den Durchschnitt.';
$string['page_html_evalintro'] 				= 'Hier besteht die Möglichkeit, den Kurs zu bewerten. Es soll nur der Kurs und nicht der Inhalt der Veranstaltung bewertet werden. Die Umfrage ist anonym.';
$string['page_html_evaluated'] 				= 'Sie haben diesen Kurs bereits bewertet.';
$string['page_html_saveerr'] 				= 'Es ist ein Fehler bei speichern der Bewertung aufgetreten.';
$string['page_html_thx'] 					= 'Vielen Dank f&uuml;r die Bewertung.';
$string['page_html_activated']				= 'Kursfeedback ({$a}) wurde als aktuelle Umfrage eingetragen';
$string['page_html_answersdeleted']			= 'Die Benutzerantworten wurden gel&ouml;scht.';
$string['page_html_nofeedbackactive']		= 'Die Umfragen wurden deaktiviert.';
$string['page_html_noquestions']			= 'Es wurden bisher keine Fragen definiert.';
$string['page_html_intronotifications']     = 'Ohne die folgende(n) Definition(en) ist dieses Feedback nicht verwendbar:';
$string['page_html_servedefaultlang']       = 'Alle Fragen sollten in der eingestellte Standardsprache ({$a}) vorhanden sein.';
$string['page_html_norelations']            = 'Alle Fragen müssen in mindestens einer gemeinsamen Sprache vorhanden sein.';
// Tables
$string['table_header_languages']			= 'Verf&uuml;gbare Sprachen';
$string['table_header_questions']			= 'Fragen';
$string['table_header_bad']					= 'Schlecht';
$string['table_header_good']				= 'Sehr gut';
$string['table_header_abstain']				= 'Keine Bewertung';
$string['table_html_votes'] 				= 'Anzahl der Stimmen:';
$string['table_html_abstain']	 			= 'Enthalten';
$string['table_html_average']				= 'Durchschnitt';
$string['table_html_nofeedback']			= 'Keine Umfrage';
$string['table_html_undefinedlang']         = '&Uuml;bersetzung fehlt. Sprache \'{$a}\' nicht verf&uuml;gbar.'; // maximal 50 Zeichen
// Forms
$string['form_header_newfeedback']			= 'Neue Umfrage';
$string['form_header_editfeedback']			= 'Umfrage bearbeiten';
$string['form_header_confirm']				= 'Best&auml;tigung erforderlich';
$string['form_header_newquestion']			= 'Neue Frage';
$string['form_header_deletelang']			= 'Sprache(n) verwerfen';
$string['form_header_editquestion']			= 'Frage bearbeiten';
$string['form_header_deleteanswers']		= 'Benutzerantworten l&ouml;schen';
$string['form_header_question']				= 'Frage {$a}';
$string['form_select_confirmyesno']			= 'Wirklich l&ouml;schen?';
$string['form_select_newlang']				= 'Sprache';
$string['form_select_unwantedlang']			= 'Sprache w&auml;hlen <br/><span style="font-size: x-small;">(Mehrfachauswahl m&ouml;glich)<span>';
$string['form_select_changepos']			= 'Neue Position festlegen';
$string['form_select_deleteanswers']		= 'Benutzerantworten l&ouml;schen?';
$string['form_area_questiontext']			= 'Text bearbeiten';
$string['form_submit_feedbacksubmit']		= 'Bewertung speichern';
$string['form_html_deleteanswerswarning']	= 'Beim L&ouml;schen der Benutzerantworten gehen diese Daten unwiederbringlich verloren. <br/>Sie sollten sich sicher sein, diese Daten nicht mehr zu ben&ouml;tigen.';
$string['form_html_deleteanswerstext']		= 'Das Bearbeiten des Fragesatzes ist z.Z. nicht gestattet, da schon Benutzerantworten vorliegen. Sie können die Antworten jetzt l&ouml;schen oder den Fragesatz kopieren.';
$string['form_html_currentlang']			= 'Sie bearbeiten gerade {$a}';
$string['form_html_nolangimplemented']		= 'Es sind bisher keine Sprachen definiert worden.';
$string['form_html_notextendable']			= 'Diese Frage ist nicht mehr erweiterbar, da keine zus&auml;tzlichen Sprachen verf&uuml;gbar sind.';
// Download
$string['download_html_filename']			= 'Umfrageergebnis';
$string['download_thead_questions']			= 'Frage';
// Permission
$string['coursefeedback:managefeedbacks']	= 'Globale Einstellungen des Kursefeebacks bearbeiten';
$string['coursefeedback:viewanswers']		= 'Auswertung des aktuellen Kursfeedbacks sehen';
$string['coursefeedback:download']			= 'Auswertung des aktuellen Kursfeedback speichern';
$string['coursefeedback:evaluate']			= 'An aktuellem Kursfeedback teilnehmen';
$string['perm_header_editnotpermitted']		= 'Die Umfrage kann aus folgenden Gr&uuml;nden nicht bearbeiten werden:';
$string['perm_html_erroractive']			= 'Eine aktive Umfrage darf nicht bearbeitet werden.';
$string['perm_html_duplicatelink']			= 'Um eine neue Umfrage mit den gleichen Fragen zu starten, k&ouml;nnen Sie die <a href="admin.php?fid={$a}&mode=feedback&action=new">Umfrage kopieren</a> oder eine andere Umfrage aktivieren.';
$string['perm_html_answersexists']			= 'Die Umfrage wurde bereits von einigen Teilnehmern beantwortet.';
$string['perm_html_danswerslink']			= 'Um eine neue Umfrage mit den gleichen Fragen zu starten, k&ouml;nnen Sie die <a href="admin.php?fid={$a}&mode=feedback&action=new">Umfrage kopieren</a> oder die <a href="admin.php?fid={$a}&mode=feedback&action=danswers">Benutzerantworten l&ouml;schen</a>.';
/*
OBSOLETE OR NOT USED
$string['page_link_settings']				= 'Administration';
$string['page_html_defaultlangnotserved']   = 'Dieses Feedback kann nicht genutzt werden, da keine Fragen in der Standardsprache ({$a}) gefunden wurden.';
$string['adminpage_area_defaulttext']		= 'Beschreibung';
$string['page_html_noediting']				= 'Das Bearbeiten des Fragesatzes ist z.Z. nicht m&ouml;glich.';
$string['page_html_trainerdenied'] 			= 'Trainer d&uuml;rfen den eigenen Kurs nicht bewerten.';
$string['page_html_nomember'] 				= 'Sie sind nicht in dem Kurs eingeschrieben!';
$string['page_html_feedbackcopied']			= 'Umfrage wurde kopiert.';
$string['download_html_saved']				= 'Die Datei wurde im Dateisystem gespeichert und kann im Administrations-Men&uuml; im Ordner "{$a}" gefunden werden.';
$string['form_html_deletefeedbackwarning']  = 'Das L&ouml;schen eines Feedbacks f&uuml;hrt automatisch zum L&ouml;schen aller Benutzerantworten. <br/>Sie sollten sich sicher sein, diese Daten nicht mehr zu ben&ouml;tigen.';
$string['form_html_deletelanguagewarning']  = 'Werden alle Sprachen einer Frage gel&ouml;scht werden gleichzeitig die dazugeh&ouml;rigen Benutzerantworten gel&ouml;scht. <br/>Sie sollten sich sicher sein, diese Daten nicht mehr zu ben&ouml;tigen.';
$string['form_html_deletequestionwarning']  = 'Das L&ouml;schen einer Frage f&uuml;hrt automatisch zum L&ouml;schen aller Benutzerantworten. <br/>Sie sollten sich sicher sein, diese Daten nicht mehr zu ben&ouml;tigen.';
*/