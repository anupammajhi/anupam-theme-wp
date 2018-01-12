<?php /* Template Name: Resume Page Template */ get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	main{
		color: #444;
		font-size: 1.5em;
	}
	main h1{
	text-align: center;
	font-size: 2em;
	font-style: normal;
	margin:0;
	font-weight:900;
	line-height:0.5;
	}
	.name-box{
		margin-top:60px;
	}
	.resume-section{
		margin-top:2em;
		text-align: left;
	}
	.resume-1{
		text-align:left;
		width:63%;
		display:inline-block;
		vertical-align:top;
		padding: 20px;
	}
	.resume-1 p,
	.resume-2 p{
		
	}
	.resume-2{
		text-align:left;
		width:33%;
		display:inline-block;
		padding: 20px;
		vertical-align:top;
	}
	.resume-1 h1,
	.resume-2 h1{
		text-align:left;
		font-weight:400;
		padding: 20px 0 10px;
		border-bottom: 1px solid #ccc;
	}
	.years{
		float:right;
		font-size:0.8em;
		vertical-align:bottom;
	}
	.highlight{
		color:#2D75C6;
		font-weight:600;
	}
	.resume-info-main-p{
		margin:1em 0 0;
	}
	.resume-info{
		font-style:oblique;
		margin:0;
		font-size:0.9em;
		font-weight:600;
	}
	.resume-info2{
		font-size:0.9em;
	}
	.refer-link{
		font-weight:bold;
		margin-top:0;
	}
	.resume-download{
		position: absolute;
		right:4em;
		font-size:0.9em;
	}
	.resume-download a{

		border: 1px solid #2D75C6;
		border-radius:0.5em;
		padding: 0.5em;
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<div class="name-box">
		<h1>ANUPAM MAJHI</h1>
		</div>
		<div class="resume-download"><a href="<?php $upload_dir = wp_upload_dir();
					echo $upload_dir['baseurl']; ?>/resume.pdf">Downloadable PDF</a></div>
		<div class="resume-section">
			<div class="resume-1">
				<h1>Profile Summary</h1>
				<p>Infrastructure Automation Engineer with 4 yrs experience in providing automation & integration to complex infrastructure services while providing technical leadership to cross functional teams in design, development and integration.</p>
				
				<h1>Academic Credentials</h1>
				<p class="resume-info-main-p"><span class="highlight">PG Diploma in Data Science</span> <span class="years">[July 2017 - Today]</span></p>
				<p class="resume-info">IIIT-Bangalore & UpGrad | CGPA 4/4</p>
				<p class="resume-info2">Completed projects on Data Management, Statistics, EDA and Predictive Analytics courses.
					Implemented CRISP-DM Framework, Linear Regression and Logistic Regression in Auto, Telecom & BFSI Industry projects.
					Consistently scored >80th Percentile on all projects and received appreciations from Upgrad. <a class="refer-link" href="https://github.com/anupammajhi/PGDDS-Project">[Github]</a></p>
				
				<p class="resume-info-main-p"><span class="highlight">B.E. in Computer Science & Engineering</span> <span class="years">[2009 - 2013]</span></p>
				<p class="resume-info">K. S. Institute of Technology | Score 70%</p>
				<p class="resume-info">Visvesvaraya Technological University, Bangalore</p>
				<br>
				<h1>Work Experience</h1>
				<p class="resume-info-main-p"><span class="highlight">Infrastructure Automation Engineer</span> <span class="years">[2016 - Today]</span></p>
				<p class="resume-info">HCL Technologies, Bangalore</p>
				<p class="resume-info">Client: Leo Pharma and Techem</p>
				<p class="resume-info2">
					<ul>
					<li>Automated server delivery process to reduce delivery time from 1 week to 5 minutes.</li>
					<li>Integrated multiple cloud platforms to have single ordering interface, increasing customer experience and reducing anomalies.</li>
					<li>Used SQL, Powershell, Orchestrator, SCCM and SCOM to achieve automation.</li>
					<li>Created zero-touch automation of Server Maintenance and Decommission.</li>
					<li>Report generation, Analysis and Monitoring automation implemented.</li>
					</ul>
				</p>
				<p class="resume-info-main-p"><span class="highlight">Senior Technical Specialist</span> <span class="years">[2013 - 2016]</span></p>
				<p class="resume-info">VOLVO, Bangalore</p>
				<p class="resume-info2">
					<ul>
					<li>Designing, Administering, Implementing and supporting Enterprise Infrastructure servers.</li>
					<li>Improved Capacity Management to reduce issues by 60% by automating the process with time-based jobs with Powershell.</li>
					<li>Used Predictive Analysis based on older space usage data to predict space capacity issues.</li>
					</ul>
				</p>

				<h1>Key Academic Projects</h1>
				<p class="resume-info-main-p"><span class="highlight">Auto Demand-Supply</span></p>
				<p class="resume-info2">
				Studied Demand-Supply gap to identify reasons for the gap and possible solutions based on 6500+ complete/incomplete driver trip data.
				</p>
				<p class="resume-info-main-p"><span class="highlight">Employee Attrition Model</span></p>
				<p class="resume-info2">
				Predicted employees likely to leave the company with 75% accuracy by analysing 4000+ employees’ data. Identified best model out of Logistic Regression.
				</p>
				<p class="resume-info-main-p"><span class="highlight">Health and Security Vault (HASV) - Android Based Emergency UTIL</span></p>
				<p class="resume-info2">
				Android based emergency alarm and complete health management application for common use mainly emphasizing on Easy-to-Use Interface for emergency use. It includes: Accident Alert, Theft Alert, Consult Doctor Online, Custom/ Personalized Alerts
				</p>
				
			</div>
			<div class="resume-2">
			<h1 class="resume-h1">Contact Info</h1>
				<div class="resume-info2">
					<ul>
					<li>Mob : <strong>+91 8088421654</strong></li>
					<li>Mail : <strong><a href="mailto:majhi.anupam@gmail.com">majhi.anupam@gmail.com</a></strong></li>
					<li>Web : <strong><a href="http://anupamm.com">http://anupamm.com</a></strong></li>
					<li><strong><a href="https://github.com/anupammajhi">Github</a>&nbsp;&nbsp; · &nbsp;&nbsp;<a href="https://www.linkedin.com/in/anupammajhi/">Linkedin</a></strong></li>
					<li><strong>Bangalore, India</strong></li>
					</ul>
				</div>
			<h1>Skills & Interests</h1>
			<p class="resume-info-main-p"><span class="highlight">Specializations</span></p>
				<div class="resume-info2">
					<ul>
					<li>Computer Science (in general)</li>
					<li>Automation</a></li>
					<li>Programming</a></li>
					<li>Data Analytics</li>
					<li>Machine Learning & AI</li>
					</ul>
				</div>
			<p class="resume-info-main-p"><span class="highlight">Programming / Scripting Lang</span></p>
				<div class="resume-info2">
					<ul>
					<li>Powershell / VBScript</li>
					<li>R</a></li>
					<li>SQL</a></li>
					<li>HTML / JS / CSS</li>
					<li>C / C++</li>
					<li>Python</li>
					</ul>
				</div>
			<p class="resume-info-main-p"><span class="highlight">Technology Familiarity</span></p>
				<div class="resume-info2">
					<ul>
					<li>Windows Servers</li>
					<li>Orchestrator / SCCM / SCOM</li>
					<li>UNIX</a></li>
					<li>Android Development</a></li>
					<li>Tableau / Visualization</li>
					<li>Git</li>
					<li>Web Development Stacks</li>
					</ul>
				</div>
			<p class="resume-info-main-p"><span class="highlight">Accolades</span></p>
				<div class="resume-info2">
					<ul>
					<li><strong>VOLVO</strong> Competence Excellence Award for display of leadership and competence.</li>
					<li><strong>All India Rank 25</strong>, in 9th KVS Mathematics Olympiad and State rank 6.</li>
					<li>Technical paper on “Cloud Computing Without Traditional OS” in <strong>International Journal of Advanced Technology & Engineering Research (IJATER)</strong>.</a></li>
					</ul>
				</div>
			</div>
		</div>

		

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
