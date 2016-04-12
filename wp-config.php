<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ilb_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', '127.0.0.1');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|q0mns1bB@IsD+.jCcXs-npC5qG[.$j_5|a#>+p%fcue$E/y/7S)qg;qT9BOf*Tr');
define('SECURE_AUTH_KEY',  '>ZW+OU&+GGV,r|uWihA~^->rn&|>u)xv]n-4Wp7Hn+T(|Y9~(EDXt|p8{;V}_j9+');
define('LOGGED_IN_KEY',    '|-5($MO:O=t.}1fYtN]`zaJV~C=Vv*yE ud?|th2]9j+Q-hc$5(4~rR{S|*bBZHz');
define('NONCE_KEY',        ':1h7lb4&TPSa55V.vs_vs;yo`g4R]7QVz>J1Q}(-2)lV__GiKt|m^bu;#j4gZ50n');
define('AUTH_SALT',        'i-eKb&[0U~L-RWU.IMV! ksa*q6(-8?mqIE$rXAdplN2{,FfV#Mmn2#-S(C|zjEB');
define('SECURE_AUTH_SALT', 'AG<kOO}}YyO?B 9Zy$#Col.OZ|pM^jbN3Bn};4M!oI/g(?D-b%NN{-kw4.9=Hx|M');
define('LOGGED_IN_SALT',   '1OcsT(82l#aEq^A5bJExH9hpx-zSzr_rLhGJU>x$$VM+GKVYL8`|ccNj##8)nU2G');
define('NONCE_SALT',       '>E)yx*hf9L&a^QX&)>^Z.#{,{JyO2NK`[v-Wy,?DO;B0SVDA^0i3l%r[P_9MyOvs');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
