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
				<a class="navbar-brand" href="Home"><img src="public/img/logo/logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="jm-link" href="Home">Home</a></li>
					<li><a class="jm-link" href="About">About us</a></li>
					<li><a class="jm-link" href="Patent">Patent</a></li>
					<li><a class="jm-link" href="Product">Products</a></li>
					<li class="active"><a class="jm-link" href="Team">Team</a></li>
					<li><a class="jm-link" href="Release">Press release</a></li>
					<li><a class="jm-link" href="Next">Laboratory6</a></li>
					<li><a class="jm-link" href="Contact">Contact</a></li>
					<li><a class="jm-idioma" href="Team"><span>English</span></a></li>
					<li><a class="jm-idioma" href="Team_jp"><span>Japanesse</span></a></li>
				</ul>
			</div>
	  	</div>
	</nav>
	<section class="jm-section jm-gris">
		<div class="jm-container">
			<div class="jm-title">
				<h2>Team</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team1" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team1.jpg"/>
						<h2>Hiroaki Nishina</h2>
						<p>Founder / CEO / Representative of Director</p>
						<div class="jm-tea__contenido">
							<p>More than 30 years career as a leading edge inventor, serial entrepreneur and corporate CEO in the IT field. 
								In 1995, he acquired a development license from Sony PlayStation to develop ADM technology and launched 
								the video game “Mataphiist. ” After that, he invented the “TDC” call back system for mobile phones in 
								joint development with the major Japanese carriers, NTT and Others</p>
							<p>In 1999, he founded his first software development company, WEG Software in New York, which introduced 3D technology 
								to UK listed companies and Japanese mobile manufacturers. Since 2001, he has been engaged in software and 
								hardware integration development, especially in the field of artificial intelligence. His work in telemedicine 
								technology development received numerous patents and was promoted by the Japanese government.</p>
							<p>In 2014 he co-founded Power Japan Plus and acquired the company’s battery business in 2017. Inspired by his 
								travels in third world countries, Hiroaki Nishina has focused his energies on creating technologies to make 
								the world a better place to live. This led him to establish the NGO “Eco Planet,” headquartered at the 
								United Nations in New York.</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team2" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team2.jpg"/>
						<h2>June Oyama</h2>
						<p>Executive Vice President of Director / CFO / CPA</p>
						<div class="jm-tea__contenido">
							<p>After passing the Certified Public Accountant Examination administered by the Japanese Institute of 
								Certified Public Accountants, Oyama worked as an accountant at Deloitte Touche Tohmatsu LLC. There, 
								he gained experience dealing with IPO through experiences such as conducting statutory audits based 
								on the Financial Instruments and Exchange Act of publicly quoted companies and IPO support operations.</p>
							<p>After accumulating experience in an advisory position related to internal regulation and task flow within 
								a company, Oyama started his own venture. Running a consulting business in accounting, finance, and taxes, 
								he preformed business incubations for companies in their early stages. He assumed the position of Executive 
								Director at PJP Eye in 2017, which he continues to hold today.</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team3" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team3.jpg"/>
						<h2>Daigen Fukai</h2>
						<p>Managing Director</p>
						<div class="jm-tea__contenido">
							<p>After working at Obayashi Corporation, a major construction company, he became the second president for Ikeda Corporation, 
								a medium-sized construction company. </p>
							<p>Fukai then managed companies in different fields, including a venture business incubation project, before becoming 
								the managing director at PJP Eye.</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team4" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team4.jpg"/>
						<h2>Masami Kido</h2>
						<p>Director of PJP Eye Laboratory at Kyushu University</p>
						<div class="jm-tea__contenido">
							
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team5" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team5.jpg"/>
						<h2>JT Benavides Danckers</h2>
						<p>COO of North America</p>
						<div class="jm-tea__contenido">
							<p>Danckers is a young entrepreneur focusing on businesses that have potential to make the world a better place. 
								After studying medical engineering at Houston University, he started to believe that sustainable 
								manufacturing processes needed to be created in addition to sustainable products. </p>
							<p>His desire is to create businesses that have positive social impact, combined with his preference toward highly functional 
								designs, is the core of his vision.</p>
							<p>By supervising the execution of technologies and establishing a strategic partnership with PJP Eye, he was appointed the 
								role of North America Chief Operating Officer. Today, he concurrently serves as the CEO of Laboratory6, a newly-founded partner company, based in Houston.</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team6" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team6.jpg"/>
						<h2>Kenji Sugimoto</h2>
						<p>Technical Officer</p>
						<div class="jm-tea__contenido">
							<p>After working in technical sales at a major semiconductor trading company, Sugimoto established the importing business, Movement, Ltd. Subsequently, he established GBS, Ltd., Co., which operated a content business that handled encryption technology. 
								His company also developed, produced, and sold a rapid charging battery.</p>
							<p>He assumed the position of the Chief Technical Officer of PJP Eye, to make the most of his wide network, technological knowledge and experience.</p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team7" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team7.jpg"/>
						<h2>Shigehiro Kasai</h2>
						<p>Financial Officer</p>
						<div class="jm-tea__contenido">
							<p>For many years, Kasai has worked in the financial department of the ITOCHU Corporation, a 
								general trading company. While in Japan, he engaged in managing and fostering company 
								investments, and facilitated corporate revitalization (including M&A) using the 
								loan-factoring function. Overseas, he established and fostered non-basks (leasing companies). 
								After leaving the company in 2015, Kasai participated in the management of GBS, Co., Ltd., 
								which engaged in battery development, by using the experience he had accumulated in the 
								finance field. Since 2017, he has filled the role of Chief Financial Officer of PJP Eye, 
								where he uses his financial acumen and his wide network to this day. </p>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect jm-button">Read more</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div id="team8" class="jm-team" onclick="openModalTeam(this.id)">
						<img src="public/img/team/team8.jpg"/>
						<h2>Kyushu University</h2>
						<p>Research Institute</p>
						<div class="jm-tea__contenido">
							<p>Kyushu University is an historic national university with over 150 years of history. 
								It is one of the top universities in the world in the field of engineering.</p>
							<p>We have signed a collaborative research and development agreement with the research laboratories and professors of Kyushu University. Our collaboration involves research and analysis of materials, designs, trials, and samples involved in battery development, as well as accumulating intellectual properties. In addition, we also conduct detailed, multi-faceted analyses of the environmental impact and sustainability of each material in our batteries, 
								as well as the manufacturing process that form the basis of our research development.</p>
							<p>The PJP Eye-owned research laboratory is located Tsukushi Campus at Kyushu University in Kasuga City, 
								Fukuoka Prefecture in Kyushu.</p>
							<p>PJP Eye Kyushu University Laboratory, Chikushi Campus General Research Building #607, Kyushu University, Kasugaoka Koen, Fukuoka city, Fukuoka prefecture </p>
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
							Advisors
							</a>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="mdi mdi-expand_more"></i>
							</button>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<p>Hiroyuki Onuki Special Advisor <a href="http://kiki110.org/greeting/onuki_profile.pdf" target="_blank">(Board Member, Disaster-Prevention Strategy System with Dignity NPO, former Senior Commissioner of Tokyo Metropolitan Police )</a></p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Partners
							</a>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="mdi mdi-expand_more"></i>
							</button>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<p><a href="https://www.bdcholdings.asia/" target="_blank">David Bae Dongchul</a></p>
							<p><a href="https://tproi.co.jp/index.html" target="_blank">T.Pro.Innovation, Ltd.</a></p>
							<p><a href="https://www.poviard.com/" target="_blank">Poviard LLC.</a></p>
							<p><a href="http://www.kyushu-u.ac.jp/ja/" target="_blank">Kyushu University</a></p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								License Partners
							</a>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="mdi mdi-expand_more"></i>
							</button>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<p>Mitsui E&S Corporation</p>
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
						<p>3F 5-11-12, Minami-Azabu, Minato-ku, Tokyo</p>
						<p><a href="tel:+81(0)3-6450-4392">+81(0)3-6450-4392</a></p>
						<a href="mailto:general@pjpeye.tokyo">general@pjpeye.tokyo</a>
						<span>&copy; Copyright 2018 PJP Eye LTD. - All Rights Reserved</span>
					</div>
				</div>
			</div>
			<div class="jm-footer__right">
				<ul>
					<li><a href="Home">Home</a></li>
					<li><a href="About">About us</a></li>
					<li><a href="Patent">Patent</a></li>
					<li><a href="Product">Products</a></li>
					<li><a href="Team">Team</a></li>
					<li><a href="Release">Press release</a></li>
					<li><a href="Next">Laboratory6</a></li>
					<li><a href="Contact">Contact</a></li>
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