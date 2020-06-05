<h1>スキューバダイビングSNSについて</h1>
---
スキューバダイビングを趣味にしている人が集うSNSアプリです。
潜りに行ったダイビングポイントの感想や見つけた生き物などをシェアできます。
またダイビングショップ情報もこのアプリ内で検索できます。

<h2>概要</h2>
---
<h4>開発環境</h4>
<p>OS mac10.15.4</p>
<p>php 7.4.5</p>
<p>Laravel 7.12.0</p>

<h4>機能</h4>
<p>・サインアップ/ログイン機能　ユーザー情報の編集/削除　</p>
<p>・日記、潜る前リストの投稿/編集/削除</p>
<p>・ユーザー一覧、日記一覧の閲覧</p>
<p>・ダイビングショップ検索、情報閲覧</p>

<h4>URL</h4>
http://pictureboook.sakura.ne.jp/public/
サンプルユーザー(以下のemail, PWを入力してお試しください)。
email: example@email.com
PW: password
*ログイン情報は変更しないでください*

<h4>DB定義</h4>

users
```
CREATE TABLE `users` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email_verified_at` timestamp NULL DEFAULT NULL,
 `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `licence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `prefecture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `introduction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `diary_id` int(11) DEFAULT NULL,
```

diaries
```
CREATE TABLE `diaries` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `day` date NOT NULL,
 `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `movie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `user_id` int(11) NOT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

to_do_lists
```
CREATE TABLE `to_do_lists` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 `user_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

shops
```
CREATE TABLE `shops` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `shopname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```


<h4>今後の展望</h4>
1) ダイビングショップのオーナーのログイン機能、管理画面の実装
2) ダイビングのログ付け機能（潜水時間、気温などのログ）の実装
3) ショップのダイビングツアー予約機能の実装
4) 3に伴い、ユーザーの予約に必要な情報管理機能(名前、住所、身長、体重など)の実装
5) コメント、いいね機能の実装

３の予約機能については特に実装を実現したい項目です。
ダイビングツアーの申し込み時は、名前や住所など毎回同じような項目をショップに伝えなければなりません。
また、複数人で申し込む場合は誰か代表者が取りまとめてショップに情報を伝えます。その際、体重などデリケートな内容も含まれます。
予約時に、そのような手続きの簡略化とプライバシーの保護が可能になるような方法で実装を目指しています。
