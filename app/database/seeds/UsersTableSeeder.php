<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => '2',
				'username' => 'admin',
				'nickname' => '管理员',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$MRPYBO1ri14DS5w1cbbbBuN8UIr4kEt91Hr8BkNXN3WsuU3IZuDhq',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-04-03 21:26:29',
				'persist_code' => '$2y$10$3f.W7Wlu67XDevFgLkbYduaCJjbdYKkrbE25BZOPBDQhDiMiOmkZm',
				'reset_password_code' => NULL,
				'created_at' => '2016-02-26 18:53:01',
				'updated_at' => '2017-04-03 21:26:29',
			),
			1 => 
			array (
				'id' => '5',
				'username' => 'vistor',
				'nickname' => '游客',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$msMClDB.l.2siZAbIW5y2u9H9th/LNlHb7j0TWTEhbo85alxEKUJq',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-01-15 10:16:38',
				'persist_code' => '$2y$10$tXH.JPOpozJgtbU0Fsk5hucB8n3kXJeYwLtW9I4sxeCbfhod6qil2',
				'reset_password_code' => NULL,
				'created_at' => '2016-02-26 20:31:29',
				'updated_at' => '2017-01-15 10:16:38',
			),
			2 => 
			array (
				'id' => '6',
				'username' => 'zhuxituan',
				'nickname' => '主席团',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$5LVQj5v8/IHpZw/hC7Wo.OivY45TPKTKOto8zbiXGg1vxFHh.vTi6',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-10-11 11:11:23',
				'persist_code' => '$2y$10$urRuaDoeUXPcm7H1pGHXjeGu6iSjC7FNf//86K8Q7vacJmlQJ.8au',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:22:42',
				'updated_at' => '2016-10-11 11:11:23',
			),
			3 => 
			array (
				'id' => '7',
				'username' => 'gongguan',
				'nickname' => '公关部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$pwQkgOqYENX7Kl5XPTjyp.0/8BF/YJKpkjkpqYt2T3.dg67ltubwi',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-10-08 21:18:50',
				'persist_code' => '$2y$10$he59ocUZARLxY8wUag8c/uHihSg.hwdLEfJ7F12fgsFP1HKoBgcre',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:25:12',
				'updated_at' => '2016-10-08 21:18:50',
			),
			4 => 
			array (
				'id' => '8',
				'username' => 'qingzhi',
				'nickname' => '青志部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$YJlhw6BGmWWcJytLRwfiN.KmqXOezuJ7U.0yzf0gpXW2pS./ddP1W',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-12-19 17:38:31',
				'persist_code' => '$2y$10$6qsWZZpbEKVUsBTpqRm.w.JlYUjlVh4P4Z4FdeWUKKNnLEOjJnPmy',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:25:51',
				'updated_at' => '2016-12-19 17:38:31',
			),
			5 => 
			array (
				'id' => '9',
				'username' => 'shenghuo',
				'nickname' => '生活部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$FQ.Hf7yjaB5.VwMx/vs/J.eHEDHpWVmcipQS1SYa6LlwoKJIfWjrq',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-12-02 13:59:14',
				'persist_code' => '$2y$10$C6dEWNmL4g9g8Eza0RzpKeofn29nNcj/kWMfMNqDm2iHF2SSp6dOe',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:26:33',
				'updated_at' => '2016-12-02 13:59:14',
			),
			6 => 
			array (
				'id' => '10',
				'username' => 'shijian',
				'nickname' => '实践部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$h1HlyCcxqwjI5CQw1uth.ePN5HDHE3xMz6RXgZzYNE7IV3LT/BxCm',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-12-21 11:23:17',
				'persist_code' => '$2y$10$A3BS33ZYo8sFw8mHHUjx9edTQ/mEe60O6PFR08ZDL2FDVLZwXw4We',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:27:16',
				'updated_at' => '2016-12-21 11:23:17',
			),
			7 => 
			array (
				'id' => '11',
				'username' => 'sutuo',
				'nickname' => '素拓部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$fZCTeQ2h9CJA78KNAJe1M.o15enN2HuffCGMqJamBg6/DIYap0m7O',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-03-10 23:43:57',
				'persist_code' => '$2y$10$5WobkE4rl3Q5c83mMx02TuRawF69IdESbl4v8AskOkNESbPbs2kRe',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:27:52',
				'updated_at' => '2017-03-10 23:43:57',
			),
			8 => 
			array (
				'id' => '12',
				'username' => 'tiyu',
				'nickname' => '体育部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$bUfdMg09Vi.6T6qj9DfyuOpTatHf/.1S9usqtkc68v1E6BHtcIus.',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-12-02 20:07:15',
				'persist_code' => '$2y$10$DzCBU7DV.AG23Y5K7RoCtO0F9xtPs5otFUyDLzMrWI5FSet6rBNRG',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:28:30',
				'updated_at' => '2016-12-02 20:07:15',
			),
			9 => 
			array (
				'id' => '13',
				'username' => 'wenyu',
				'nickname' => '文娱部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$MpOmSAbpIk/pCHWHVcx75e2UMoEmsCK23/K6wcVgD/C309dEU8Fjm',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-03-14 12:19:53',
				'persist_code' => '$2y$10$f8AMVAksywueF349SCP5d.y/S5.8Kt2oPkrcF4G6V2P2Y91cJqHzm',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:29:43',
				'updated_at' => '2017-03-14 12:19:53',
			),
			10 => 
			array (
				'id' => '14',
				'username' => 'xinchuan',
				'nickname' => '电信传媒中心',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$vD//cGErkVEeSE35jTPz1uJgUcw5qlHRZiuvaPnGim7yyPHt6bfsS',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-12-09 15:12:13',
				'persist_code' => '$2y$10$mDNnLBRblRdpUaHV7v29.OM.QR541dAyxR1MLnOv3HIQluzqu8OKG',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:30:39',
				'updated_at' => '2016-12-09 15:12:13',
			),
			11 => 
			array (
				'id' => '15',
				'username' => 'xinxuan',
				'nickname' => '信宣部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$4P/Eq5siWMeRDptxDerroOUFZSouvYqjZQOF36WuwyFWTBfhQ.qKy',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-11-30 01:13:45',
				'persist_code' => '$2y$10$HoPaui/9jJIFq5eFjerV3ufMq5zZksziHBsS5WJl34C29WLU/Kl/m',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:31:20',
				'updated_at' => '2016-11-30 01:13:45',
			),
			12 => 
			array (
				'id' => '16',
				'username' => 'xuechuang',
				'nickname' => '学创部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$P/f4EBx/dT3IYVrTOWu12u3n8FkxYLwgJi4nEssABFD/ygv6OFOqi',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-10-07 23:52:31',
				'persist_code' => '$2y$10$rCQ7qAwgU5JoRv3x0F55n.YQdvPNPGSbn1krYdLnNrYbIfdOYKsYK',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:32:01',
				'updated_at' => '2016-10-07 23:52:31',
			),
			13 => 
			array (
				'id' => '17',
				'username' => 'zuzhi',
				'nickname' => '组织部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$gBEKZo.q8a4avZBWigj29OLFzWBBbXH4f7pdZRMxcUulZLKOtRTvG',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-11-16 23:16:17',
				'persist_code' => '$2y$10$gwEHrXdxUILll49L6j3Zf.iBn1ZgVMscRCtjrTa5p0sq1ecKHfeFy',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:32:40',
				'updated_at' => '2016-11-16 23:16:17',
			),
			14 => 
			array (
				'id' => '18',
				'username' => 'bianlun',
				'nickname' => '辩论队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$IsRbLVLvqG.q4mFKG1t.g.Y.bc0kUYm5SvkbcqOa0AAFn0OFjSJ9u',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-03-15 22:44:38',
				'persist_code' => '$2y$10$6sBlfuCtgMY8PeQD8Tlb.eIV3hJimVdIgibCLk7XmopJf6p1eiwP6',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:33:21',
				'updated_at' => '2016-03-15 22:44:38',
			),
			15 => 
			array (
				'id' => '19',
				'username' => 'wangluo',
				'nickname' => '网络队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$ZdrCdrBJdPhkQW8s9BIILOUT/Jmp7fvTffznnOgOqjZziNzy0rO2K',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-04-04 11:38:19',
				'persist_code' => '$2y$10$ADg0tm2zRkgHUuDTrbfmk.I6VdVlXUXw4nYqWSvDiCUzN6X.6hzie',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:34:17',
				'updated_at' => '2017-04-04 11:38:19',
			),
			16 => 
			array (
				'id' => '20',
				'username' => 'fuwu',
				'nickname' => '服务队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$Q55b8sIj5aIcln4eTJkcDesjp742Mse/KRpOWmmaR.we7uRXO9jG6',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-09-11 21:41:26',
				'persist_code' => '$2y$10$HBYgvbjpsFM306dC8T.bHuxw6TEz27jRwQ4sXZF17WReuJYA4xjme',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:34:54',
				'updated_at' => '2016-09-11 21:41:26',
			),
			17 => 
			array (
				'id' => '21',
				'username' => 'caipan',
				'nickname' => '裁判队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$DQeM4N4Hbr20Wn4K6njkq.m.bH91ifYeqhIROaXEHlAjsk6yMlP7a',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:35:25',
				'updated_at' => '2016-03-09 12:35:25',
			),
			18 => 
			array (
				'id' => '22',
				'username' => 'liyi',
				'nickname' => '礼仪队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$PkC3jkG5rKVM0FVPp/3K9O95PZ1VIsjDTC3z33FrbJYhzDdHrqgz6',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:36:05',
				'updated_at' => '2016-03-09 12:36:05',
			),
			19 => 
			array (
				'id' => '23',
				'username' => 'diaoyan',
				'nickname' => '调研队',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$alGBCh.pqRLKEhhN.IIIgeALCOi8B0U4xusk4amgNvzlkLtdIOKdu',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:36:37',
				'updated_at' => '2016-03-09 12:36:37',
			),
			20 => 
			array (
				'id' => '24',
				'username' => 'yishu',
				'nickname' => '艺术团',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$vtG94B9WmV5ghE8TyIMF1e1Gw6n94EaSOH9yRxaZneiuFlQVKN1j2',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:37:13',
				'updated_at' => '2016-03-09 12:37:13',
			),
			21 => 
			array (
				'id' => '25',
				'username' => 'wuxie',
				'nickname' => '无协',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$Y241PXJpM3WscnLGeMndJeg20W6usuq4Jl/21A75jySQy54sOzfEi',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:37:44',
				'updated_at' => '2016-03-09 12:37:44',
			),
			22 => 
			array (
				'id' => '26',
				'username' => '15dangzhibu',
				'nickname' => '15级党支部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$jThyEJLklREND.GojdWNM.veS6.gYr3sW4lIq3BSxbR5ncCYUFIkK',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-03-09 12:48:31',
				'persist_code' => '$2y$10$DjocjH//bdpUR4/TRX4ntOtQ.LKlAvZrv6jL5jv0Hl2orEaqQtNyq',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:39:10',
				'updated_at' => '2016-03-09 12:48:31',
			),
			23 => 
			array (
				'id' => '27',
				'username' => '12dangzhibu',
				'nickname' => '12级党支部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$4a27rt20ww286pGM8bzghOea6Q8KVx9CMYNDH.twFvkmWREy1nnL2',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:39:47',
				'updated_at' => '2016-03-09 12:39:47',
			),
			24 => 
			array (
				'id' => '28',
				'username' => '13dangzhibu',
				'nickname' => '13级党支部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$UiTL0s7/sbj0aDIOTFEkjeGbZDQmTGVLncAl8cWC03iQPCvb9/sy6',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:40:14',
				'updated_at' => '2016-03-09 12:40:14',
			),
			25 => 
			array (
				'id' => '29',
				'username' => '14dangzhibu',
				'nickname' => '14级党支部',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$CaUx35j0LDEQTVdEeuhhouYPo8OgzJyIStzIAvvZP9gL9vBo17IvO',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2017-03-19 10:50:53',
				'persist_code' => '$2y$10$sJZcc0OHattszta8aGBwZOBSUUKPcakhiHb6BmAcYQTq6QFUOE9dm',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-09 12:40:48',
				'updated_at' => '2017-03-19 10:50:53',
			),
			26 => 
			array (
				'id' => '30',
				'username' => 'visitor',
				'nickname' => '访客',
				'email' => '',
				'phone' => '',
				'password' => '$2y$10$yvU9I4/uY8PzSIABR1qY0Os.bm3izjdQZGmBY5ztBAQpAk0dZY1uO',
				'permissions' => NULL,
				'activated' => '1',
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2016-06-03 01:13:16',
				'persist_code' => '$2y$10$yfACK2feB4L6whGWI.GmaOBlWsAhb/pldfsludaVmcoYxVVCelp/.',
				'reset_password_code' => NULL,
				'created_at' => '2016-03-23 12:53:46',
				'updated_at' => '2016-06-03 01:13:16',
			),
		));
	}

}
