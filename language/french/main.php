<?php
class lang_french
{
	// constructeur
	function lang_french()
	{
		$this->this_language = 'Fran�ais';
		$this->direction = 'ltr';
		$this->encoding = 'ISO-8859-1';
		$this->loaded_cats = array();
	}

	function load_keys($cat, $force_reload = false)
	{
		global $config;

		if ( isset($this->loaded_cats[$cat]) && !$force_reload )
		{
			return true;
		}

		if ( !preg_match('`^([a-z0-9\-_]+)$`', $cat) )
		{
			return false;
		}

		if ( $cat == 'common' ) // cl�s de langue communes
		{
			$this->validate = 'Valider';
			$this->connection = 'Connexion';
			$this->register = 'Cr�ation du personnage';
			$this->page_map = 'Carte';
			$this->access_denied = 'Acc�s refus�';
			$this->guest = 'Invit�';
			$this->session_stop = 'Session termin�e';
			$this->session_stop_explain = 'Votre session a �t� stopp�e parce qu\'elle a �t� recr��e par une autre personne.';
			$this->left = 'Gauche';
			$this->right = 'Droite';
			$this->up = 'Haut';
			$this->down = 'Bas';
			$this->center = 'Centr�';
			$this->justify = 'Justifi�';
			$this->yes = 'Oui';
			$this->no = 'Non';
			$this->javascript_required = 'Ce site n�cessite la prise en charge de Javascript.';
			$this->chatbox = 'Chat';
			$this->chatbox_reduce = 'R�duire';
			$this->chatbox_increase = 'Agrandir';
			$this->post_message = 'Poster un message';
			$this->flood_alert = 'Attention au flood !';
			$this->redirect_at = 'Redirection dans';
			$this->redirection = 'Redirection';
			$this->character_name = 'Nom du personnage';
			$this->password = 'Mot de passe';
			$this->go_to_reception = 'Aller � l\'accueil';
			$this->do_not_wait = 'Ne pas attendre';
			$this->click_to_continue = 'Cliquez ici pour continuer';
			$this->go_to_admin_panel = 'Aller sur le panneau d\'administration';
			$this->quit_map = 'quitte la carte';
			$this->join_map = 'rejoint la carte';
			$this->error = 'Erreur';
			$this->infos = 'Informations';
			$this->hp = 'HP';
			$this->mp = 'MP';
			$this->attack = 'Attaque';
			$this->defense = 'D�fense';
			$this->mind = 'Esprit';
			$this->agility = 'Agilit�';
			$this->exp = 'Exp�rience';
			$this->level = 'Niveau';
			$this->class = 'Classe';
			$this->points = 'Points';
			$this->hp1 = 'HP';
			$this->mp1 = 'MP';
			$this->attack1 = 'attaque';
			$this->defense1 = 'd�fense';
			$this->mind1 = 'esprit';
			$this->agility1 = 'agilit�';
			$this->exp1 = 'exp�rience';
			$this->level1 = 'niveau';
			$this->class1 = 'classe';
			$this->points1 = 'points';

			$this->nav_reception = 'Accueil';
			$this->nav_map = 'Carte';
			$this->nav_profile = 'Profil';
			$this->nav_battle = 'Combat';
		}
		elseif ( $cat == 'chat' )
		{
			// Who is slash command [Nuladion]
			$this->whois_char_not_found = 'Personnage non trouv� !';
		}
		elseif ( $cat == 'battle' ) // combat !
		{
			$this->battle = 'Combat';
			$this->allies = 'Alli�s';
			$this->opponents = 'Adversaires';
			$this->battle_failure = 'Echec du combat';
			$this->you_disconnect_battle = 'Vous avez �t� d�connect� du combat. Ne pouvant pas savoir si votre d�connexion est volontaire ou non, vous perdez le combat.';
			$this->battle_menu = 'Menu de combat';
			$this->wait_turn = 'Attente de votre tour...';
			$this->click_to_attack = 'Cliquez sur un adversaire pour l\'attaquer';
			$this->click_opponent = 'Cliquez sur un adversaire !';
			$this->you_won_battle = 'Vous avez gagn� le combat !';
			$this->you_win_exp = 'Vous gagnez %s points d\'exp�rience.';
			$this->you_win_points = 'Vous gagnez %s ' . $this->points1;
			$this->you_win_exp_gain_level = 'Vous gagnez %s points d\'exp�rience et atteignez le niveau %s !';

			$this->x_inflict_y_to_z = '%s inflige %s points de d�gats � %s';
			$this->x_died = '%s est mort';

			$this->basic_action = 'Action de base';
			$this->act_attack = 'Attaquer';
			$this->act_defend = 'Se d�fendre';
			$this->act_flee = 'Fuir';
		}
		elseif ( $cat == 'default' )
		{
			$this->reception = 'Accueil';
			$this->register_now = 'Cr�er mon personnage maintenant';
			$this->if_no_account = 'Si vous n\'�tes pas inscrit, vous pouvez cr�er un nouveau compte.';
			$this->connection_explain = 'Si vous poss�dez d�j� un personnage, vous pouvez vous connecter avec votre nom de personnage et votre mot de passe.';
			$this->character_stats = 'Stats du personnages';
			$this->logout = 'D�connecter';
			$this->go_to_map = 'Aller sur la carte';
		}
		elseif ( $cat == 'synchro_pic' )
		{
			$this->synchro_pic_title = 'Synchroniser images';
			$this->synchro_pic_success = 'Images des �v�nements et personnages synchronis�es';
		}
		elseif ( $cat == 'profile' )
		{
			$this->registering = 'Inscription';
			$this->register_explain = 'L\'inscription est ici simplifi�e. Elle sera compl�tement diff�rente lors de la version finale de PHPore.';
			$this->password_confirm = 'Mot de passe (confirmer)';
			$this->email = 'Adresse email';
			$this->logout_succeeded = 'D�connexion r�ussie !';
			$this->login_succeeded = 'Connexion r�ussie !';
			$this->login_failed = 'Connexion �chou�e...';
			$this->invalid_name_or_password = 'Vous avez entr� un mot de passe ou un nom d\'utilisateur incorrect !';
			$this->you_are_now_logged_in = 'Vous �tes maintenant connect� sous le nom de <b>%s</b>.';
			$this->you_are_already_logged_in = 'Vous �tes d�j� connect� sous le nom de <b>%s</b>.';
			$this->you_are_logged_out = 'Vous �tes d�connect�.';
			$this->empty_name = 'Pseudo non sp�cifi�';
			$this->invalid_email = 'Email invalide';
			$this->user_with_same_email_or_name = 'Votre pseudo ou votre email a d�j� �t� utilis� par quelqu\'un d\'autre';
			$this->not_equal_passwords = 'Les deux passwords entr�s sont diff�rents';
			$this->registration_succeeded = 'Inscription r�ussie !';
			$this->you_can_login = 'L\'inscription est termin�e. Vous pouvez maintenant vous connecter avec votre pseudo et votre mot de passe.';
		}
		elseif ( $cat == 'map' )
		{
			$this->map_loading = 'Chargement de la carte...';
			$this->close_message = 'OK';
		}
		elseif ( $cat == 'general_config' ) // configuration g�n�rale
		{
			$this->general_config = 'Configuration g�n�rale';
			$this->config_updated = 'Configuration mise � jour';
			$this->config_updated_explain = 'Les information de configuration du site ont �t� mises � jour dans la base de donn�e.';

			$this->website_options = 'Options du site';
			$this->site_name = 'Nom du site';
			$this->site_desc = 'Description courte du site';
			$this->time_zone = 'Fuseau horaire du site';
			$this->language = 'Langue du site';
			$this->template = 'Template du site';
			$this->use_cache = 'Cache activ�';
			$this->cache_dir = 'R�pertoire du cache';
			$this->use_gzip = 'Compression gzip activ�e';
			$this->optimize_maps = 'Optimiser nombre de hit cartes (n�cessite GD)';

			$this->tileset_options = 'Options de tileset';
			$this->tile_size = 'Largeur d\'un tile';
			$this->tileset_tiles_lower = 'Nombre de tiles en couche inf�rieure';
			$this->tileset_tiles_upper = 'Nombre de tiles en couche sup�rieure';
			$this->tileset_cols = 'Nombre de colonnes dans un tileset';
			$this->tileset_bgcolor = 'Arri�re plan du tileset';

			$this->misc_options = 'Options diverses';
			$this->refresh_method = 'M�thode de rafraichissement';
			$this->refresh_iframe = 'Par iframe';
			$this->refresh_ajax = 'Par ajax';
			$this->chat_history = 'Nombre de messages dans l\'historique du chat';
			$this->chat_history_time = 'Dur�e de vie d\'un message avant qu\'il ne soit supprim�';
			$this->default_location = 'Position de d�part des personnages (ID,X,Y dir)';
			$this->variables = 'Variables';
			$this->preset_teleport_sprite = 'Image de t�l�porteur pr�d�fini';
		}
		elseif ( $cat == 'admin_panel' ) // panneau d'administration
		{
			$this->admin_menu = 'Menu d\'administration';
			$this->admin_panel = 'Panneau d\'administration';
			$this->admin_maps = 'Administration des cartes';
			$this->admin_tilesets = 'Administration des tilesets';
			$this->admin_events = 'Administration des �v�nements';
			$this->admin_general = 'Administration g�n�rale';
			$this->admin_panel_explain = 'Bienvenue sur le panneau d\'administration de PHPore.<br />Vous pouvez ici modifier tous les param�tres de votre site-rpg, cr�er des cartes, des personnages...';
			$this->not_saved_continue_question = 'Vous n\'avez pas sauvegard�. Etes-vous s�r de vouloir continuer ?';
			$this->mod_map = 'Module de carte';
			$this->map_editor = 'Editeur de carte';
			$this->create_map = 'Cr�er carte';
			$this->resize_map = 'Redimensionner carte';
			$this->tileset_editor = 'Editeur de tileset';
			$this->create_tileset = 'Cr�er tileset';
			$this->export_tileset = 'Exporter tileset';
			$this->import_tileset = 'Importer tileset';
			$this->event_editor = 'Editeur d\'�v�nement';
			$this->create_event = 'Cr�er �v�nement';
			$this->synchro_pic = 'Synchroniser images';
			$this->delete_tileset = 'Supprimer tileset';
			$this->delete_map = 'Supprimer carte';
			$this->delete_event = 'Supprimer �v�nement';
			$this->general_config = 'Configuration g�n�rale';
			$this->user_editor = 'Editeur de personnage';
			$this->delete_user = 'Supprimer personnage';
			$this->class_editor = 'Editeur de classe';
			$this->delete_class = 'Supprimer classe';
			$this->create_class = 'Cr�er classe';
		}
		elseif ( $cat == 'user_editor' ) // �diteur de personnage
		{
			$this->user_editor = 'Editeur de personnage';
			$this->user_updated = 'Personnage mise � jour';
			$this->user_updated_explain = 'Les donn�es du personnage ont �t� mises � jour dans la base de donn�e.';

			$this->account_options = 'Options du compte';
			$this->name = 'Nom';
			$this->change_password = 'Changer mot de passe';
			$this->email = 'Email';
			$this->administrator = 'Administrateur';

			$this->character_properties = 'Propri�t�s du personnage';
			$this->start_location = 'Position de d�part et/ou recommencement (ID,X,Y dir)';
			$this->variables = 'Variables';
			$this->charaset = 'Charaset';
			$this->battler = 'Image de combat';
			$this->gender = 'Sexe';
			$this->male = 'Masculin';
			$this->female = 'F�minin';
			$this->biography = 'Biographie';
			$this->space_storage = 'Capacit� de stockage';
			$this->modify_location = 'Modifier place du personnage';
			$this->map_id = 'ID de la carte';
			$this->map_x = 'Coordonn�e X';
			$this->map_y = 'Coordonn�e Y';
			$this->direction = 'Direction';
		}
		elseif ( $cat == 'class_editor' ) // �diteur de classe
		{
			$this->class_editor = 'Editeur de classe';
			$this->class_updated = 'Classe mise � jour';
			$this->class_updated_explain = 'Les donn�es de la classe ont �t� mises � jour dans la base de donn�e.';
			$this->view_curve = 'Visionner la courbe';

			$this->class_identification = 'Nom d\'identification de la classe';
			$this->class_title = 'Titre de la classe';
			$this->selectable_when_start = 'S�lectionnable lors de l\'inscription';
			$this->description = 'Description';
			$this->hp_plus = 'Gain ' . $this->hp1;
			$this->mp_plus = 'Gain ' . $this->mp1;
			$this->attack_plus = 'Gain ' . $this->attack1;
			$this->defense_plus = 'Gain ' . $this->defense1;
			$this->mind_plus = 'Gain ' . $this->mind1;
			$this->agility_plus = 'Gain ' . $this->agility1;
			$this->experience_curve = 'Courbe ' . $this->exp1;
			$this->hp_curve = 'Courbe ' . $this->hp1;
			$this->mp_curve = 'Courbe ' . $this->mp1;
			$this->attack_curve = 'Courbe ' . $this->attack1;
			$this->defense_curve = 'Courbe ' . $this->defense1;
			$this->mind_curve = 'Courbe ' . $this->mind1;
			$this->agility_curve = 'Courbe ' . $this->agility1;
			$this->charaset = 'Charaset';
			$this->battler = 'Combattant';
		}
		elseif ( $cat == 'map_editor' ) // �diteur de carte
		{
			$this->map_editor = 'Editeur de carte';
			$this->map_tileset = 'Tileset de la carte';
			$this->map_properties = 'Propri�t�s de la carte';
			$this->map_name = 'Nom de la carte';
			$this->map_music = 'Musique de la carte';
			$this->save_map = 'Sauvegarder la carte';
			$this->select_tile = 'S�lectionner le bloc';
			$this->map_saved = 'Carte sauvegard�e';
			$this->no_tileset = 'Tileset introuvable';
			$this->lower_layer = 'Couche inf�rieure';
			$this->upper_layer = 'Couche sup�rieure';
			$this->mode_tile = 'Mode bloc';
			$this->mode_event = 'Mode �v�nement';
			$this->tools = 'Outils';
			$this->preset_event = 'Ev�nement pr�d�fini';
			$this->action = 'Action';
			$this->action_done = 'Action effectu�e';
			$this->teleport_here = 'T�l�porter ici';
			$this->set_default_start_position = 'Red�finir d�part des joueurs';
			$this->set_players_position = 'Placer tous les joueurs ici';
			$this->teleport = 'T�l�porter';
			$this->width_tiles_copy = 'Nombre de tiles � copier en largeur';
			$this->height_tiles_copy = 'Nombre de tiles � copier en hauteur';
			$this->width_tiles_paste = 'Nombre de tiles � coller en largeur';
			$this->height_tiles_paste = 'Nombre de tiles � coller en hauteur';
		}
		elseif ( $cat == 'select_map_to_edit' ) // s�lection de la carte � �diter
		{
			$this->edit_map = 'Editer une carte';
			$this->select_map_to_edit = 'S�lectionner une carte � �diter';
		}
		elseif ( $cat == 'resize_map' ) // redimensionner une carte
		{
			$this->resize_map = 'Redimensionner une carte';
			$this->map_resized = 'Carte redimensionn�e';
			$this->map_to_resize = 'Carte � redimensionner';
			$this->map_width = 'Largeur de la carte';
			$this->map_height = 'Hauteur de la carte';
			$this->are_you_sure_to_resize_map = 'Cette carte va �tre d�finitivement redimensionn�e. Etes-vous s�r de vouloir continuer ?';
		}
		elseif ( $cat == 'select_event_to_edit' ) // s�lection de l'�v�nement � �diter
		{
			$this->edit_event = 'Editer un �v�nement';
			$this->select_event_to_edit = 'S�lectionner un �v�nement � �diter';
		}
		elseif ( $cat == 'select_user_to_edit' ) // s�lection du personnage � �diter
		{
			$this->edit_user = 'Editer un personnage';
			$this->select_user_to_edit = 'S�lectionner un personnage � �diter';
		}
		elseif ( $cat == 'select_class_to_edit' ) // s�lection d'une classe � �diter
		{
			$this->edit_class = 'Editer une classe';
			$this->select_class_to_edit = 'S�lectionner une classe � �diter';
		}
		elseif ( $cat == 'select_tileset_to_edit' ) // s�lection du tileset � �diter
		{
			$this->edit_tileset = 'Editer un tileset';
			$this->select_tileset_to_edit = 'S�lectionner un tileset � �diter';
		}
		elseif ( $cat == 'select_tileset_to_export' ) // s�lection du tileset � exporter
		{
			$this->export_tileset = 'Exporter un tileset';
			$this->select_tileset_to_export = 'S�lectionner un tileset � exporter';
		}
		elseif ( $cat == 'import_tileset' ) // importer tileset
		{
			$this->import_tileset = 'Importer tileset';
			$this->invalid_file = 'Le fichier est invalide. V�rifiez qu\'il s\'agit bien d\'un fichier de tileset.';
			$this->upload_error = 'Le transfert a �chou�...';
			$this->importation_succeeded = 'Importation r�ussie !';
			$this->importation_succeeded_explain = 'Importation r�ussie ! Vous pouvez � pr�sent �diter ce tileset avec l\'�diteur de tileset.';
		}
		elseif ( $cat == 'delete_map' ) // effacer carte
		{
			$this->delete_map = 'Supprimer une carte';
			$this->select_map_to_delete = 'S�lectionner une carte � supprimer';
			$this->are_you_sure_to_delete_map = 'Cette carte va �tre d�finitivement supprim�e de la base de donn�e. Etes-vous s�r de vouloir continuer ?';
			$this->map_deleted = 'Carte supprim�e';
		}
		elseif ( $cat == 'delete_tileset' ) // effacer tileset
		{
			$this->delete_tileset = 'Supprimer un tileset';
			$this->select_tileset_to_delete = 'S�lectionner un tileset � supprimer';
			$this->are_you_sure_to_delete_tileset = 'Ce tileset va �tre d�finitivement supprim� de la base de donn�e. Etes-vous s�r de vouloir continuer ?';
			$this->tileset_deleted = 'Tileset supprim�';
			$this->not_delete_tileset = 'Suppression impossible';
			$this->this_is_last_tileset = 'Ce tileset est le dernier, vous ne pouvez pas le supprimer car il faut au moins un tileset en service.';
		}
		elseif ( $cat == 'delete_class' ) // effacer classe
		{
			$this->delete_class = 'Supprimer une classe';
			$this->select_class_to_delete = 'S�lectionner une classe � supprimer';
			$this->are_you_sure_to_delete_class = 'Cette classe va �tre d�finitivement supprim�e de la base de donn�e. Etes-vous s�r de vouloir continuer ?';
			$this->class_deleted = 'Classe supprim�e';
			$this->not_delete_class = 'Suppression impossible';
			$this->this_is_last_class = 'Cette classe est la derni�re, vous ne pouvez pas la supprimer car il faut au moins une classe en service.';
		}
		elseif ( $cat == 'delete_event' ) // effacer �v�nement
		{
			$this->delete_event = 'Supprimer un �v�nement';
			$this->select_event_to_delete = 'S�lectionner un �v�n�ment � supprimer';
			$this->are_you_sure_to_delete_event = 'Cet �v�n�ment va �tre d�finitivement supprim� de la base de donn�e. Etes-vous s�r de vouloir continuer ?';
			$this->event_deleted = 'Ev�nement supprim�';
		}
		elseif ( $cat == 'delete_user' ) // effacer personnage
		{
			$this->delete_user = 'Supprimer un personnage';
			$this->select_user_to_delete = 'S�lectionner un personnage � supprimer';
			$this->are_you_sure_to_delete_user = 'Ce personnage va �tre d�finitivement supprim� de la base de donn�e. Etes-vous s�r de vouloir continuer ?';
			$this->user_deleted = 'Personnage supprim�';
		}
		elseif ( $cat == 'create_map' ) // cr�er carte
		{
			$this->create_map = 'Cr�er une carte';
			$this->map_name = 'Nom de la carte';
			$this->map_tileset = 'Tileset de la carte';
			$this->map_width = 'Largeur de la carte';
			$this->map_height = 'Hauteur de la carte';
		}
		elseif ( $cat == 'create_event' ) // cr�er �v�nement
		{
			$this->create_event = 'Cr�er un �v�nement';
			$this->event_name = 'Nom de l\'�v�nement';
		}
		elseif ( $cat == 'create_class' ) // cr�er �v�nement
		{
			$this->create_class = 'Cr�er une classe';
			$this->classname = 'Nom d\'identifiant de la classe';
			$this->class_title = 'Titre de la classe';
		}
		elseif ( $cat == 'create_tileset' ) // cr�er tileset
		{
			$this->create_tileset = 'Cr�er un tileset';
			$this->tileset_name = 'Nom du du tileset';
			$this->tileset_tiles_lower = 'Nombre de tiles en couche inf�rieure';
			$this->tileset_tiles_upper = 'Nombre de tiles en couche sup�rieure';
			$this->tileset_cols = 'Nombre de colonnes du tileset';
		}
		elseif ( $cat == 'tileset_editor' ) // �diteur de tileset
		{
			$this->tileset_editor = 'Editeur de tileset';
			$this->tileset_properties = 'Propri�t�s du tileset';
			$this->tileset_name = 'Nom du du tileset';
			$this->tileset_tiles_lower = 'Nombre de tiles en couche inf�rieure';
			$this->tileset_tiles_upper = 'Nombre de tiles en couche sup�rieure';
			$this->resize_tileset = 'Redimensionner le tileset';
			$this->save_tileset = 'Sauvegarder le tileset';
			$this->select_tile = 'S�lectionner le bloc';
			$this->tileset_saved = 'Tileset sauvegard�';
			$this->lower_layer = 'Couche inf�rieure';
			$this->upper_layer = 'Couche sup�rieure';
			$this->mode_tile = 'Mode bloc';
			$this->mode_layer = 'Mode couche';
			$this->click_to_change_layer = 'Cliquez sur un bloc pour changer son type de couche';
			$this->layer_below = 'En dessous du personnage';
			$this->layer_same = 'Bloque le personnage';
			$this->layer_above = 'Au dessus du personnage';
		}
		elseif ( $cat == 'event_editor' ) // �diteur d'�v�nement
		{
			$this->event_editor = 'Editeur d\'�v�nement';
			$this->save_event = 'Sauvegarder l\'�v�nement';
			$this->event_saved = 'Ev�nement sauvegard�';
			$this->message_content = 'Contenu du message';
			$this->event_script = 'Script de l\'�v�nement';
			$this->event_name = 'Nom de l\'�v�nement';
			$this->event_picture = 'Image de l\'�v�nement';
			$this->event_picture_type = 'Type d\'image';
			$this->event_charaset = 'Charaset';
			$this->event_dir = 'Direction';
			$this->event_sprite = 'Sprite';
			$this->event_layer = 'Couche';
			$this->dynamic = 'Dynamique';
			$this->static = 'Statique';
			$this->time_limit = 'Limite de temps';
			$this->validation = 'Validation';
			$this->show_face = 'Afficher visage';
			$this->stored_in_var = 'Stock� dans la variable';
			$this->number = 'Nombre';
			$this->text = 'Texte';
			$this->variable = 'Variable';
			$this->value = 'Valeur';
			$this->var_set = 'Assigner valeur';
			$this->var_increase = 'Incr�menter';
			$this->var_decrease = 'Diminuer';
			$this->var_multiply = 'Multiplier';
			$this->var_divide = 'Diviser';
			$this->var_concat = 'Concat�ner';
			$this->map_dir = 'Direction';
			$this->do_not_change = 'Ne pas changer';
			$this->warning_function = 'Attention, une mauvaise utilisation de cette fonction peut<br />provoquer un disfonctionnement partiel ou complet du site !';
			$this->condition_equal = 'Egal �';
			$this->condition_different = 'Diff�rent de';
			$this->condition_smaller = 'Plus petit que';
			$this->condition_bigger = 'Plus grand que';
			$this->condition_smaller_or_equal = 'Plus petit ou �gal �';
			$this->condition_bigger_or_equal = 'Plus grand ou �gal �';
			$this->condition_with_else = 'Sinon + Fin condition';
			$this->condition_without_else = 'Fin condition';
			$this->event_properties = 'Propri�t�s de l\'�v�nement';
			$this->script_editor = 'Editeur de script';
			$this->html_activated = 'HTML activ�';
			$this->show_message = 'Afficher un message';
			$this->set_message_align = 'Alignement de message';
			$this->set_message_time = 'Type de fin de message';
			$this->set_message_face = 'S�l�ctionner visage de l\'interlocuteur';
			$this->wait = 'Attendre un moment';
			$this->display_choice = 'Afficher un choix';
			$this->input_string = 'Saisie de texte/nombre';
			$this->modify_var = 'Modifier/cr�er une variable';
			$this->teleport_character = 'T�l�porter personnage';
			$this->create_condition = 'Cr�er une condition';
			$this->stop_condition = 'Fin condition';
			$this->condition_else = 'Si condition fausse';
			$this->exec_javascript = 'Ex�cuter javascript';
			$this->exec_php = 'Ex�cuter php';
			$this->start_combat = 'Commencer un combat';
		}
		elseif ( $cat == 'compile_script' )
		{	
			$this->syntax_error_at_line = 'Erreur de syntaxe � la ligne %s';
			$this->not_closed_condition = 'Condition non ferm�e dans le script';
			$this->not_closed_javascript = 'Code javascript non termin� dans le script';
			$this->not_closed_php = 'Code php non termin� dans le script';
			$this->not_closed_message = 'Message non termin� dans le script';
			$this->not_closed_choice = 'Fourchette de choix non termin�e dans le script';
			$this->no_choice = 'Vous n\'avez saisi aucun choix';
		}
		elseif ( !empty($cat) && is_file($config->path . 'language/' . $config->language . '/' . $cat . '.' . $config->phpex) )
		{
			include($config->path . 'language/' . $config->language . '/' . $cat . '.' . $config->phpex);
		}
		else
		{
			message_die('Error', 'No language data from cat ' . $cat);
		}

		$this->loaded_cats[$cat] = true;
		return true;
	}
}

$lang = new lang_french;
