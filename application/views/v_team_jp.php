<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="PJP">
    <meta name="keywords"               content="PJP">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="December 01, 2018"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#000000">
	<title>PJP Eye LTD.</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>jarallax/dist/jarallax.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>proxima.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <nav class="navbar navbar-default">
	  	<div class="jm-container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Home_jp"><img src="public/img/logo/logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="jm-link" href="Home_jp">Home</a></li>
					<li><a class="jm-link" href="About_jp">会社案内</a></li>
					<li><a class="jm-link" href="Patent_jp">知財/特許</a></li>
					<li><a class="jm-link" href="Product_jp">製品紹介</a></li>
					<li class="active"><a class="jm-link" href="Team_jp">チーム</a></li>
					<li><a class="jm-link" href="Release_jp">プレスリリース</a></li>
					<li><a class="jm-link" href="Next_jp">Laboratory6</a></li>
					<li><a class="jm-link" href="Contact_jp">お問合せ</a></li>
					<li><a class="jm-idioma" href="Team"><span>English</span></a></li>
					<li><a class="jm-idioma" href="Team_jp"><span>Japanesse</span></a></li>
				</ul>
			</div>
	  	</div>
	</nav>
	<section class="jm-section jm-gris">
		<div class="jm-container">
			<div class="jm-title">
				<h2>チーム</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team1" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team1.jpg"/>
						<h2>仁科 浩明</h2>
						<p>代表取締役社長</p>
						<div class="jm-tea__contenido">
							<p>経営者、先端技術開発30年以上のキャリアを持つ、発明家。
								ニューヨーク国連本部NO2.に本店を置くNGO” Eco planet"の理事。
								学生時代に世界を放浪。
								インドをはじめ紛争中のアフガニスタン、アジア、ヨーロッパを巡った経験が大きな起点となり、帰国後　1988 年東京にて起業。
								数々の経験から、1995年にADM社の創業に挑みソニープレイステーションの開発ライセンスを取得。ビデオゲームの企画開発会社を設立し、1997年に”メタフリスト”を発売。その後、ナショナルフラッグ大手企業と共同開発契約を締結して”TDC”コールバックシステムを発明。その後、同社をMBO。</p>
							<p>1999年にはニューヨークにわたりソフトウェア開発会社を創業。英国上場企業の3D技術を日本の携帯メーカーに導入。2001年より日本で人工知能の企画開発、システムなどのソフトウェアとハードウェアの融合と、日本政府の推進する”医工連携”から遠隔医療のソリューション開発を手がけ、関連特許を多数取得。</p>
							<p>2014年にパワージャパンプリュスの共同創業者として参画、2017年６月に同社のバッテリー事業を買収。代表取締役に就任。</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team2" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team2.jpg"/>
						<h2>小山 淳</h2>
						<p>代表取締役専務</p>
						<div class="jm-tea__contenido">
							<p>日本公認会計士協会、公認会計士　有限責任監査法人トーマツにて会計士として勤務。上場会社の金融商品取引法に基づく法定監査や、IPO支援業務に従事し、実IPOに関与し経験を積む</p>
							<p>その他、企業内の内部統制や業務フローに関するアドバイザリーを経験をしたことを機会に独立開業。
								会計、財務、税務を軸としてコンサルティング業務を行い、アーリーステージの会社に対するインキュベーションを行なってきた。
								2017年にPJPEye株式会社の代表取締役専務に就任。</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team3" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team3.jpg"/>
						<h2>深井大元</h2>
						<p>常務取締役</p>
						<div class="jm-tea__contenido">
							<p>大手ゼネコンである株式会社大林組にて勤務。
								その後、中堅ゼネコン池田建設株式会社の２代目社長に就任</p>
							<p>以降、自らも多業種の会社を経営、並びにベンチャーインキュベーションを行い、PJP Eye 常務取締役に就任</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team4" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team4.jpg"/>
						<h2>城戸正美</h2>
						<p>執行役員 / 国立大学法人九州大学（内） PJP Eye 研究所　所長</p>
						<div class="jm-tea__contenido">
							
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team5" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team5.jpg"/>
						<h2>JT Benavides Danckers</h2>
						<p>北米担当COO</p>
						<div class="jm-tea__contenido">
							<p>世界をより良く変える可能性のある有益なビジネスの構築に集中してきた起業家。
								ヒューストン大学に通い、医用工学工学を学び、サスティナビリティな製品だけでなく、サスティナビリティな製造プロセスを作り出す必要性があると考える</p>
							<p>ポジティブな社会的インパクトを創造することと、機能性の優れたデザインに対する彼の好みが相まって、深い信念となり、芸術的な才能と高いレベルの実行力によりユニークな事業をもたらす</p>
							<p>技術の実施を監督し、PJP Eyeとの戦略的パートナーシップを確立することにより、北米担当最高執行役員に就任。現在はパートナー新会社ヒューストン拠点の”Laboratory6"のCEOを兼務</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team6" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team6.jpg"/>
						<h2>杉本憲治</h2>
						<p>技術執行役員</p>
						<div class="jm-tea__contenido">
							<p>大手半導体商社にて技術営業を経て、有限会社ムーヴメントを設立輸入事業を展開し、暗号化技術にてコンテンツ事業を展開、バッテリーに特化した株式会社GBSを設立</p>
							<p>急速充電バッテリーの開発、製造、販売を行う。その幅広い人脈と技術、知見を最大限に活かし、技術執行役員に就任</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team7" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team7.jpg"/>
						<h2>笠井繁裕</h2>
						<p>財務執行役員</p>
						<div class="jm-tea__contenido">
							<p>長年、総合商社伊藤忠商事（株）金融部門に在籍し、国内では、投資先の管理・育成、ローン・ファクタリング機能を活用した企業再生（M&A含）、海外ではノンバンク（リース会社）の設立・育成に従事。 2015年退社後金融分野の経験を活かし、バッテリー開発会社GBSの経営に参画すると共に、2017年よりPJP Eye社のファイナンスのみならずその幅広い人脈を活かし、財務執行役員に就任</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team8" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team8.jpg"/>
						<h2>国立大学法人九州大学</h2>
						<p>研究所</p>
						<div class="jm-tea__contenido">
							<p>国立九州大学は150年を越える歴史ある国立大学一期校であり工学を中心に世界でもトップレベルにポジショニングされています</p>
							<p>当社は国立九州大学の3分野の研究室並びに教授方と共同研究開発契約を締結しており、
								これらの共同研究は知財化はじめ、電池開発における素材、デザイン、試験、試作等はもちろんのことですが、その他、基礎となる各素材、製造工程における地球環境負荷やサスティナビリティについて、多角度から具体的な分析を行なっております</p>
							<p>PJP Eye独自の研究室は九州の福岡県春日市の九州大学筑紫キャンパス内に構えております</p>
							<p>九州大学内当社研究所 福岡県春日市春日公園６−１九州大学筑紫キャンパス総合研究棟607号</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="jm-section jm-white">
			<div class="jm-container">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									顧問
								</a>
								<button class="mdl-button mdl-js-button mdl-button--icon">
									<i class="mdi mdi-expand_more"></i>
								</button>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<p>特別顧問　元警視庁警視監　大貫啓行 <a href="http://kiki110.org/greeting/onuki_profile.pdf" target="_blank">(NPO法人危機対応能力開発機構 理事長)</a></p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									パートナーズ
								</a>
								<button class="mdl-button mdl-js-button mdl-button--icon">
									<i class="mdi mdi-expand_more"></i>
								</button>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<p><a href="https://www.bdcholdings.asia/" target="_blank">デビッド・ベイ・ドンチョル -DAVID BAE DONGCHUL-</a></p>
								<p><a href="https://tproi.co.jp/index.html" target="_blank">株式会社T.Pro.Innovation</a></p>
								<p><a href="https://www.poviard.com/" target="_blank">Poviard LLC.</a></p>
								<p><a href="http://www.kyushu-u.ac.jp/ja/" target="_blank">国立大学法人九州大学</a></p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									ライセンスパートナーズ
								</a>
								<button class="mdl-button mdl-js-button mdl-button--icon">
									<i class="mdi mdi-expand_more"></i>
								</button>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<p>三井造船株式会社</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<footer>
		<div class="jm-footer">
			<div class="jm-footer__left">
				<div class="jm-contenido--footer">
					<div class="jm-contenido__left">
						<img src="public/img/logo/logo.png">
					</div>
					<div class="jm-contenido__right">
						<h2>PJP Eye LTD.</h2>
						<p>東京都港区南麻布5-11-12 3F</p>
						<p><a href="tel:+81(0)3-6450-4392">+81(0)3-6450-4392</a></p>
						<a href="mailto:general@pjpeye.tokyo">general@pjpeye.tokyo</a>
						<span>&copy; Copyright 2018 PJP Eye LTD. - All Rights Reserved</span>
					</div>
				</div>
			</div>
			<div class="jm-footer__right">
				<ul>
					<li><a href="Home_jp">Home</a></li>
					<li><a href="About_jp">会社案内</a></li>
					<li><a href="Patent_jp">知財/特許</a></li>
					<li><a href="Product_jp">製品紹介</a></li>
					<li><a href="Team_jp">チーム</a></li>
					<li><a href="Release_jp">プレスリリース</a></li>
					<li><a href="Next_jp">Laboratory6</a></li>
					<li><a href="Contact_jp">お問合せ</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="ModalTeam" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-md max-width jm-modal--team" role="document">
			<div class="modal-content">
				<div class="mdl-card">
					<div class="mdl-card__title">
						<img src=""/>
					</div>
					<div class="mdl-card__supporting-text">
						<h2></h2>
						<p></p>
						<div class="jm-modal--texto"></div>
					</div>
					<div class="mdl-card__actions p-t-0 m-t-10">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button"  data-dismiss="modal">Close</button>
					</div>
				</div>
				<div class="mdl-card__menu">
					<button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal">
						<i class="mdi mdi-close"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/jarallax/dist/jarallax.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/jarallax/dist/jarallax.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/jarallax/dist/jarallax.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>js-scroll-flow.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
		jarallax(document.querySelectorAll('.jarallax'));
		$(document).ready(function( ){
			new ScrollFlow(); 
		});
	</script>
</body>
</html>