<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** データベースのユーザー名 */
define( 'DB_USER', 'wordpress' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P{^JBaw<|XtfOVD(-[PLph.fEWm#f[u E@|V~Q;Rt)KK01AL@a>d FA>n5=S/3Xh' );
define( 'SECURE_AUTH_KEY',  'E4eWinQD#yV XFk`hz9WBZ)%KYkvxbS%)^zG|,vHh4F8EJG>yW*vOpr `5&z,FeA' );
define( 'LOGGED_IN_KEY',    'sJ5#f$aha@0OW |3; ?,q5y5OL$-&R#^iZFJ^()olN^Si:es>(xt ^9,$~^,c^$z' );
define( 'NONCE_KEY',        'dBHE]D,vY`K`8hk!uJKCfe{s;c!5xeii_9#}RQAf{anlv6EJa5nN.ku+mv UD%z]' );
define( 'AUTH_SALT',        'jK?on  yv`K3_%lCF)K~dS6Bwyq*Z#+p?)(3;^vtM<0CR{rgPBxde7%x!r-pWtF^' );
define( 'SECURE_AUTH_SALT', 'SbpW/V:2c_cG9}giRLxXz#ZoC20-4ewKz=v!)/!3s;!Ly-&/IHa-f8iW#9_.,k?-' );
define( 'LOGGED_IN_SALT',   'f.`;C&F#{xR3ooN?T/c;M+=UY_#oo`?=<,})W=vd}6K)H3Zr|z vgAK]Jtv-EG5_' );
define( 'NONCE_SALT',       '>W:)*1]F1Ku}..:fjX}_h04#.0%A$V?t1zj1]uZzs~$:^|*?6v|xK_#&&FOrI`WF' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
