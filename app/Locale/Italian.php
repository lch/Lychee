<?php

namespace App\Locale;

final class Italian implements LangInterface
{
	public static function code()
	{
		return 'it';
	}

	public static function get_locale()
	{
		$locale = array(
			'USERNAME' => 'nome utente',
			'PASSWORD' => 'password',
			'ENTER' => 'Invia',
			'CANCEL' => 'Annulla',
			'SIGN_IN' => 'Entra',
			'CLOSE' => 'Chiudi',
			'SETTINGS' => 'Impostazioni',
			'SEARCH' => 'Cerca...',
			'MORE' => 'Altro',

			'USERS' => 'Utenti',
			'SHARING' => 'Condivisione',
			'CHANGE_LOGIN' => 'Cambia Login',
			'CHANGE_SORTING' => 'Cambia Ordinamento',
			'SET_DROPBOX' => 'Imposta Dropbox',
			'ABOUT_LYCHEE' => 'Informazioni su Lychee',
			'DIAGNOSTICS' => 'Diagnostica',
			'LOGS' => 'Visualizza Log',
			'SIGN_OUT' => 'Esci',
			'UPDATE_AVAILABLE' => 'Aggiornamento disponibile!',
			'DEFAULT_LICENSE' => 'Licenza predefinita per i nuovi caricamenti:',
			'SET_LICENSE' => 'Imposta Licenza',
			'SET_OVERLAY_TYPE' => 'Imposta Filigrana',

			'SMART_ALBUMS' => 'Album smart',
			'SHARED_ALBUMS' => 'Album condivisi',
			'ALBUMS' => 'Album',
			'PHOTOS' => 'Immagini',

			'RENAME' => 'Rinomina',
			'RENAME_ALL' => 'Rinomina Tutto',
			'MERGE' => 'Unisci',
			'MERGE_ALL' => 'Unisci Tutto',
			'MAKE_PUBLIC' => 'Rendi Pubblico',
			'SHARE_ALBUM' => 'Condividi Album',
			'SHARE_PHOTO' => 'Condividi Photo',
			'VISIBILITY_ALBUM' => 'Album Visibility',
			'VISIBILITY_PHOTO' => 'Photo Visibility',
			'DOWNLOAD_ALBUM' => 'Scarica Album',
			'ABOUT_ALBUM' => 'Informazioni Album',
			'DELETE_ALBUM' => 'Elimina Album',
			'MOVE_ALBUM' => 'Move Album',
			'FULLSCREEN_ENTER' => 'Entra In Modalità Schermo Intero',
			'FULLSCREEN_EXIT' => 'Esci Dalla Modalità Schermo Intero',

			'DELETE_ALBUM_QUESTION' => 'Elimina Album e Immagini',
			'KEEP_ALBUM' => 'Mantieni Album',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Sei sicuro di voler eliminare l\' album',
			'DELETE_ALBUM_CONFIRMATION_2' => 'e tutte le immagini che contiene? Questa azione non può essere annullata successivamente!',

			'DELETE_ALBUMS_QUESTION' => 'Elimina gli Album e le Immagini',
			'KEEP_ALBUMS' => 'Mantieni gli Album',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Sei sicuro di voler eliminare tutti',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'gli album selezionati e le immagini contenute in essi? Questa azione non può essere annullata successivamente!',

			'DELETE_UNSORTED_CONFIRM' => 'Sei sicuro di voler eliminare tutte le immagini da \'Non Catalogate\'?<br> Questa azione non può essere annullata successivamente!',
			'CLEAR_UNSORTED' => 'Rimuovi Immagini Non Catalogate',
			'KEEP_UNSORTED' => 'Mantieni Immagini Non Catalogate',

			'EDIT_SHARING' => 'Modifica Condivisibilità',
			'MAKE_PRIVATE' => 'Rendi Privato',

			'CLOSE_ALBUM' => 'Chiudi Album',
			'CLOSE_PHOTO' => 'Chiudi Foto',

			'ADD' => 'Aggiungi',
			'MOVE' => 'Sposta',
			'MOVE_ALL' => 'Sposta Tutto',
			'DUPLICATE' => 'Duplica',
			'DUPLICATE_ALL' => 'Duplica Tutto',
			'COPY_TO' => 'Copia in...',
			'COPY_ALL_TO' => 'Copia Tutto in...',
			'DELETE' => 'Elimina',
			'DELETE_ALL' => 'Elimina Tutto',
			'DOWNLOAD' => 'Scarica',
			'DOWNLOAD_ALL' => 'Scarica Tutto',
			'DOWNLOAD_MEDIUM' => 'Scarica a grandezza media',
			'DOWNLOAD_SMALL' => 'Scarica a grandezza piccola',
			'UPLOAD_PHOTO' => 'Carica Foto',
			'IMPORT_LINK' => 'Importa da Link',
			'IMPORT_DROPBOX' => 'Importa da Dropbox',
			'IMPORT_SERVER' => 'Importa da Server',
			'NEW_ALBUM' => 'Nuovo Album',

			'TITLE_NEW_ALBUM' => 'Inserire un titolo per il nuovo album:',
			'UNTITLED' => 'Senza Titolo',
			'UNSORTED' => 'Non Catalogate',
			'STARRED' => 'Speciali',
			'RECENT' => 'Recenti',
			'PUBLIC' => 'Pubbliche',
			'NUM_PHOTOS' => 'Foto',

			'CREATE_ALBUM' => 'Crea Album',

			'STAR_PHOTO' => 'Contrassegna la Foto come Speciale',
			'STAR' => 'Contrassegna come Speciale',
			'STAR_ALL' => 'Contrassegna Tutto come Speciale',
			'TAGS' => 'Tag',
			'TAGS_ALL' => 'Tagga Tutto',
			'UNSTAR_PHOTO' => 'Rimuovi dalle Foto Speciali',

			'FULL_PHOTO' => 'Open Original',
			'ABOUT_PHOTO' => 'Informazioni sulla Foto',
			'DIRECT_LINK' => 'Link Diretto',
			'DIRECT_LINKS' => 'Direct Links',

			'ALBUM_ABOUT' => 'Informazioni',
			'ALBUM_BASICS' => 'Base',
			'ALBUM_TITLE' => 'Titolo',
			'ALBUM_NEW_TITLE' => 'Inserire un nuovo titolo per questo album:',
			'ALBUMS_NEW_TITLE_1' => 'Inserire un nuovo titolo per',
			'ALBUMS_NEW_TITLE_2' => 'gli album selezionati:',
			'ALBUM_SET_TITLE' => 'Imposta Titolo',
			'ALBUM_DESCRIPTION' => 'Descrizione',
			'ALBUM_NEW_DESCRIPTION' => 'Inserire una nuova descrizione per questo album:',
			'ALBUM_SET_DESCRIPTION' => 'Imposta Descrizione',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Creato',
			'ALBUM_IMAGES' => 'Immagini',
			'ALBUM_VIDEOS' => 'Video',
			'ALBUM_SUBALBUMS' => 'Subalbums',
			'ALBUM_SHARING' => 'Condividi',
			'ALBUM_SHR_YES' => 'SI',
			'ALBUM_SHR_NO' => 'No',
			'ALBUM_PUBLIC' => 'Pubblico',
			'ALBUM_PUBLIC_EXPL' => 'Album can be viewed by others, subject to the restrictions below.',
			'ALBUM_FULL' => 'Original',
			'ALBUM_FULL_EXPL' => 'Full-resolution pictures are available.',
			'ALBUM_HIDDEN' => 'Nascosto',
			'ALBUM_HIDDEN_EXPL' => 'Solo le persone con il link diretto possono vedere questo album.',
			'ALBUM_DOWNLOADABLE' => 'Scaricabile',
			'ALBUM_DOWNLOADABLE_EXPL' => 'I visitatori del tuo Lychee possono scaricare questo album.',
			'ALBUM_PASSWORD' => 'Password',
			'ALBUM_PASSWORD_PROT' => 'Password protetta',
			'ALBUM_PASSWORD_PROT_EXPL' => 'L\'album è accessibile soltanto con una password valida.',
			'ALBUM_PASSWORD_REQUIRED' => 'Questo album è protetto da password. Inserire la password sotto per vedere le foto di questo album:',
			'ALBUM_MERGE_1' => 'Sei sicuro di voler unire l\'album',
			'ALBUM_MERGE_2' => 'nell\' album',
			'ALBUMS_MERGE' => 'Sei sicuro di voler unire tutti gli album selezionati nell\'album',
			'MERGE_ALBUM' => 'Unisci Album',
			'DONT_MERGE' => 'Non Unire',
			'ALBUM_MOVE_1' => 'Sei sicuro di voler spostare l\' album',
			'ALBUM_MOVE_2' => 'nell\' album',
			'ALBUMS_MOVE' => 'Sei sicure di voler spostare tutti gli album selezionati nell\' album',
			'MOVE_ALBUMS' => 'Sposta Album',
			'NOT_MOVE_ALBUMS' => 'Non Spostare',
			'ROOT' => 'Radice',
			'ALBUM_REUSE' => 'Riutilizza',
			'ALBUM_LICENSE' => 'Licenza',
			'ALBUM_SET_LICENSE' => 'Imposta licenza',
			'ALBUM_LICENSE_HELP' => 'Hai bisogno di aiuto per scegliere?',
			'ALBUM_LICENSE_NONE' => 'Nessuna',
			'ALBUM_RESERVED' => 'Tutti i Diritti Riservati',

			'PHOTO_ABOUT' => 'Informazioni',
			'PHOTO_BASICS' => 'Base',
			'PHOTO_TITLE' => 'Titolo',
			'PHOTO_NEW_TITLE' => 'Inserire un nuovo titolo per questa foto:',
			'PHOTO_SET_TITLE' => 'Imposta Titolo',
			'PHOTO_UPLOADED' => 'Caricata',
			'PHOTO_DESCRIPTION' => 'Descrizione',
			'PHOTO_NEW_DESCRIPTION' => 'Inserire una nuova descrizione per questa foto:',
			'PHOTO_SET_DESCRIPTION' => 'Imposta Descrizione',
			'PHOTO_NEW_LICENSE' => 'Aggiungi una Licenze',
			'PHOTO_SET_LICENSE' => 'Imposta Licenza',
			'PHOTO_LICENSE' => 'Licenza',
			'PHOTO_REUSE' => 'Riutilizzo',
			'PHOTO_LICENSE_NONE' => 'Nessuna',
			'PHOTO_RESERVED' => 'Tutti i Diritti Riservati',
			'PHOTO_IMAGE' => 'Immagine',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Dimensioni',
			'PHOTO_FORMAT' => 'Formato',
			'PHOTO_RESOLUTION' => 'Risoluzione',
			'PHOTO_DURATION' => 'Durata',
			'PHOTO_FPS' => 'Frame rate',
			'PHOTO_TAGS' => 'Tag',
			'PHOTO_NOTAGS' => 'Nessun Tag',
			'PHOTO_NEW_TAGS' => 'Inserisci i tuoi tag per questa foto. Puoi aggiungere più tag separandoli con una virgola:',
			'PHOTO_NEW_TAGS_1' => 'Inserisci i tuoi tag per tutte',
			'PHOTO_NEW_TAGS_2' => 'le foto selezionate. I tag esistenti verrano sovrascritti. Puoi aggiungere più tag separandoli con una virgola:',
			'PHOTO_SET_TAGS' => 'Imposta Tag',
			'PHOTO_CAMERA' => 'Fotocamera',
			'PHOTO_CAPTURED' => 'Scattata',
			'PHOTO_MAKE' => 'Produttore',
			'PHOTO_TYPE' => 'Tipo/Modello',
			'PHOTO_SHUTTER' => 'Tempo di Esposizione',
			'PHOTO_APERTURE' => 'Apertura',
			'PHOTO_FOCAL' => 'Lunghezza Focale',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Condivisione',
			'PHOTO_SHR_PLUBLIC' => 'Pubblica',
			'PHOTO_SHR_ALB' => 'Si (Album)',
			'PHOTO_SHR_PHT' => 'Si (Foto)',
			'PHOTO_SHR_NO' => 'No',
			'PHOTO_DELETE' => 'Elimina Photo',
			'PHOTO_KEEP' => 'Mantieni Photo',
			'PHOTO_DELETE_1' => 'Sei sicuro di voler eliminare la foto',
			'PHOTO_DELETE_2' => '? Questa operazione non può essere annullata successivamente!',
			'PHOTO_DELETE_ALL_1' => 'Sei sicuro di voler eliminare tutte le',
			'PHOTO_DELETE_ALL_2' => 'foto selezionate? Questa operazione non può essere annullata successivamente!',
			'PHOTO_NEW_TITLE' => 'Inserisci un nuovo titolo per questa foto:',
			'PHOTOS_NEW_TITLE_1' => 'Inserisci un titolo per tutte le',
			'PHOTOS_NEW_TITLE_2' => 'foto selezionate:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Questa foto è all\'interno di un album pubblico. Per rendere questa foto privata o pubblica, modifica la visibilità dell\'album associato.',
			'PHOTO_SHOW_ALBUM' => 'Visualizza Album',
			'PHOTO_PUBLIC' => 'Public',
			'PHOTO_PUBLIC_EXPL' => 'Photo can be viewed by others, subject to the restrictions below.',
			'PHOTO_FULL' => 'Original',
			'PHOTO_FULL_EXPL' => 'Full-resolution picture is available.',
			'PHOTO_HIDDEN' => 'Hidden',
			'PHOTO_HIDDEN_EXPL' => 'Only people with the direct link can view this photo.',
			'PHOTO_DOWNLOADABLE' => 'Downloadable',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Visitors of your gallery can download this photo.',
			'PHOTO_PASSWORD_PROT' => 'Password protected',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Photo only accessible with a valid password.',
			'PHOTO_EDIT_SHARING_TEXT' => 'The sharing properties of this photo will be changed to the following:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Because this photo is located in a public album, it inherits that album\'s visibility settings.  Its current visibility is shown below for informational purposes only.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'The visibility of this photo can be fine-tuned using global Lychee settings. Its current visibility is shown below for informational purposes only.',
			'PHOTO_SHARING_CONFIRM' => 'Save',

			'LOADING' => 'Caricamento',
			'ERROR' => 'Errore',
			'ERROR_TEXT' => 'Oops, sembra che qualcosa sia andato storto. Per favore ricarica il sito e prova di nuovo!',
			'ERROR_DB_1' => 'Impossibile connettersi al database host a causa di un accesso negato. Ricontrolla il tuo host, nome utente e password e assicurati che l\'accesso dalla tua posizione corrente sia permessa.',
			'ERROR_DB_2' => 'Impossibile creare il database. Ricontrolla il tuo host, nome utente e password e assicurati che that l\'utente specificato abbia i privilegi per modificare e aggiungere contenuto al database.',
			'ERROR_CONFIG_FILE' => "Impossibile salvare questa configurazione. Permessi negati in <b>\'data/\'</b>. Per favore imposta i diritti di lettura, scrittura ed esecuzione per gli utenti esterni in <b>\'data/\'</b> e <b>\'uploads/\'</b>. Controlla il readme per più informazioni.",
			'ERROR_UNKNOWN' => 'È successo qualcosa di inaspettato. Per favore prova di nuovo e controlla la tua installazione e il tuo server. Controlla il readme per più informazioni.',
			'ERROR_LOGIN' => 'Impossibile salvare il login. Per favore prova con altri nomi utenti e password!',
			'SUCCESS' => 'OK',
			'RETRY' => 'Riprova',

			'SETTINGS_SUCCESS_LOGIN' => 'Informazioni di Login Aggiornate.',
			'SETTINGS_SUCCESS_SORT' => 'Modalità di ordinamento aggiornate.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Chaive Dropbox aggiornata.',
			'SETTINGS_SUCCESS_LANG' => 'Lingua aggiornata',
			'SETTINGS_SUCCESS_LAYOUT' => 'Layout aggiornato',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Impostazioni filigrana EXIF aggiornate',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Ricerca pubblica aggiornata',
			'SETTINGS_SUCCESS_LICENSE' => 'Licenza predefinita aggiornata',

			'DB_INFO_TITLE' => 'Inserisci i dati per la connessione al database di seguito:',
			'DB_INFO_HOST' => 'Host Database (opzionale)',
			'DB_INFO_USER' => 'Nome Utente Database',
			'DB_INFO_PASSWORD' => 'Password Database',
			'DB_INFO_TEXT' => 'Lychee creerà il suo proprio database. Se necessario, puoi inserire il nome di un database esistente:',
			'DB_NAME' => 'Nome Database (opzionale)',
			'DB_PREFIX' => 'Prefisso Tabelle (opzionale)',
			'DB_CONNECT' => 'Connetti',

			'LOGIN_TITLE' => 'Inserisci un nome utente e una password per la tua installazione:',
			'LOGIN_USERNAME' => 'Nuovo Nome Utente',
			'LOGIN_PASSWORD' => 'Nuova Password',
			'LOGIN_PASSWORD_CONFIRM' => 'Conferma Password',
			'LOGIN_CREATE' => 'Crea Login',

			'PASSWORD_TITLE' => 'Inserisci la tua password attuale:',
			'USERNAME_CURRENT' => 'Nome Utente Attuale',
			'PASSWORD_CURRENT' => 'Password Attuale',
			'PASSWORD_TEXT' => 'Il tuo nome utente e password verrano cambiati nei seguenti:',
			'PASSWORD_CHANGE' => 'Cambia Login',

			'EDIT_SHARING_TITLE' => 'Modifica Condivisibilità',
			'EDIT_SHARING_TEXT' => 'Le proprietà di condivisione di questo album verrano cambiate nelle seguenti:',
			'SHARE_ALBUM_TEXT' => 'Questo album verrà condiviso con le seguenti proprietà:',
			'ALBUM_SHARING_CONFIRM' => 'Save',

			'SORT_ALBUM_BY_1' => 'Ordina album per',
			'SORT_ALBUM_BY_2' => 'in un ordine',
			'SORT_ALBUM_BY_3' => '.',

			'SORT_ALBUM_SELECT_1' => 'Data di Creazione',
			'SORT_ALBUM_SELECT_2' => 'Titolo',
			'SORT_ALBUM_SELECT_3' => 'Descrizione',
			'SORT_ALBUM_SELECT_4' => 'Pubblico',
			'SORT_ALBUM_SELECT_5' => 'Ultima Aggiornamento',
			'SORT_ALBUM_SELECT_6' => 'Aggiornamento più vecchio',

			'SORT_PHOTO_BY_1' => 'Ordina foto per',
			'SORT_PHOTO_BY_2' => 'in un ordine',
			'SORT_PHOTO_BY_3' => '.',

			'SORT_PHOTO_SELECT_1' => 'Data di Upload',
			'SORT_PHOTO_SELECT_2' => 'Data di Creazione',
			'SORT_PHOTO_SELECT_3' => 'Titolo',
			'SORT_PHOTO_SELECT_4' => 'Descrizione',
			'SORT_PHOTO_SELECT_5' => 'Pubblico',
			'SORT_PHOTO_SELECT_6' => 'Speciale',
			'SORT_PHOTO_SELECT_7' => 'Formato Photo',

			'SORT_ASCENDING' => 'Crescente',
			'SORT_DESCENDING' => 'Decrescente',
			'SORT_CHANGE' => 'Cambia Ordinamento',

			'DROPBOX_TITLE' => 'Imposta Chiave Dropbox',
			'DROPBOX_TEXT' => "Per importare foto dal tuo Dropbox, ha bisogno di una chiave valida ottenibile da <a href='https://www.dropbox.com/developers/apps/create'>their website</a>. Genera la tua chiave personale e inseriscila qui di seguito:",

			'LANG_TEXT' => 'Cambia Lingua Lychee per:',
			'LANG_TITLE' => 'Cambia Lingua',

			'LAYOUT_TYPE' => 'Layout delle foto:',
			'LAYOUT_SQUARES' => 'Miniature Quadrate',
			'LAYOUT_JUSTIFIED' => 'Relativo all\'aspetto, giustificate',
			'LAYOUT_UNJUSTIFIED' => 'Relativo all\'aspetto, non giustificate',
			'SET_LAYOUT' => 'Cambia layout',

			'PUBLIC_SEARCH_TEXT' => 'Ricerca pubblica consentita:',
			'IMAGE_OVERLAY_TEXT' => 'Mostra dati della filigrana per impostazione predefinita:',

			'OVERLAY_TYPE' => 'Contenuto da utilizzare nella filigrana:',
			'OVERLAY_EXIF' => 'Dati Foto EXIF',
			'OVERLAY_DESCRIPTION' => 'Descrizione della Foto',
			'OVERLAY_DATE' => 'Data di Creazione della Foto',

			'VIEW_NO_RESULT' => 'Nessun risultato',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Nessun album pubblico',
			'VIEW_NO_CONFIGURATION' => 'Nessuna configurazione',
			'VIEW_PHOTO_NOT_FOUND' => 'Foto non trovata',

			'NO_TAGS' => 'Nessun Tag',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Adesso puoi gestire le tue nuove foto.',
			'UPLOAD_COMPLETE' => 'Caricamento completato',
			'UPLOAD_COMPLETE_FAILED' => 'Caricamento fallito per una o più foto.',
			'UPLOAD_IMPORTING' => 'Importazione',
			'UPLOAD_IMPORTING_URL' => 'Importazione URL',
			'UPLOAD_UPLOADING' => 'Caricamento',
			'UPLOAD_FINISHED' => 'Finito',
			'UPLOAD_PROCESSING' => 'In Elaborazione',
			'UPLOAD_FAILED' => 'Fallito',
			'UPLOAD_FAILED_ERROR' => 'Caricamento fallito. Il server ha restituito un errore!',
			'UPLOAD_FAILED_WARNING' => 'Caricamento fallito. Il server ha restituito un avviso!',
			'UPLOAD_SKIPPED' => 'Saltato',
			'UPLOAD_ERROR_CONSOLE' => 'Per favore controlla la console del tuo browser per ulteriori dettagli.',
			'UPLOAD_UNKNOWN' => 'Il server ha restituito una risposta sconosciuta. Per favore controlla la console del tuo browser per ulteriori dettagli.',
			'UPLOAD_ERROR_UNKNOWN' => 'Caricamneto fallito. Il server ha restituito un errore sconosciuto!',
			'UPLOAD_IN_PROGRESS' => 'Lychee sta momentaneamente caricando!',
			'UPLOAD_IMPORT_WARN_ERR' => 'L\'importazione è finita, ma ha restituito errori o avvisi. Per favore controlla il log (Impostazioni -> Visualizza Log) per ulteriori dettagli.',
			'UPLOAD_IMPORT_COMPLETE' => 'Importazione completata',
			'UPLOAD_IMPORT_INSTR' => 'Per favore inserisci il link diretto alla foto per importarla:',
			'UPLOAD_IMPORT' => 'Importa',
			'UPLOAD_IMPORT_SERVER' => 'Importa da server',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Cartella vuota o nessun file leggibile da elaborare. Per favore controlla il log (Impostazioni -> Visualizza Log) per ulteriori dettagli.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Questa azione importerà tutte le foto, cartelle e sottocartelle presenti nella seguente directory. I <b>file originali saranno eliminati</b> dopo l\'importazione se possibile.',
			'UPLOAD_ABSOLUTE_PATH' => 'Percorso assoluto alla directory',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'È stato impossibile avviare l\'importazione dato che la cartella era vuota!',

			'ABOUT_SUBTITLE' => 'Gestione propria delle foto fatta nel modo giusto',
			'ABOUT_DESCRIPTION' => 'è uno strumento gratuito di gestione delle foto, eseguito nel server o sul tuo spazio web. L\'installazione è questione di secondi. Carica, gestisci e condividi foto come in un\'applicazione nativa. Lychee offre tutto ciò di cui hai bisogno e tutte le tue foto vengono salvate in modo sicuro.',
			'FOOTER_COPYRIGHT' => 'Tutte le immagini su questo sito web sono soggette a Copyright di',
			'HOSTED_WITH_LYCHEE' => 'Hosted with Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Copy to clipboard',
			'URL_COPIED_TO_CLIPBOARD' => 'Copied URL to clipboard!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Direct links to image files:',
			'PHOTO_MEDIUM' => 'Medium',
			'PHOTO_MEDIUM_HIDPI' => 'Medium HiDPI',
			'PHOTO_SMALL' => 'Thumb',
			'PHOTO_SMALL_HIDPI' => 'Thumb HiDPI',
			'PHOTO_THUMB' => 'Square thumb',
			'PHOTO_THUMB_HIDPI' => 'Square thumb HiDPI',
			'PHOTO_VIEW' => 'Lychee Photo View:',
		);

		return $locale;
	}
}
