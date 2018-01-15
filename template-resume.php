<?php /* Template Name: Resume Page Template */ get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	.am-bg-overlay{
		opacity: 0.05;
	}
	main{
		color: #555;
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<div class="resume-name-box">
		<h1>ANUPAM MAJHI</h1>
		</div>
		<div class="resume-download"><a href="<?php $upload_dir = wp_upload_dir();
					echo $upload_dir['baseurl']; ?>/resume.pdf">Downloadable PDF</a></div>
		<div class="resume-section">
			<div class="resume-1">
				<h1>Profile Summary</h1>
				<p>Infrastructure Automation Engineer with 4 yrs experience in providing automation & integration to complex infrastructure services while providing technical leadership to cross functional teams in design, development and integration.</p>
				
				<h1>Academic Credentials</h1>
				<p class="resume-info-main-p"><span class="resume-highlight">PG Diploma in Data Science</span> <span class="resume-years">[July 2017 - Today]</span></p>
				<p class="resume-info">IIIT-Bangalore & UpGrad | CGPA 4/4</p>
				<p class="resume-info2">Completed projects on Data Management, Statistics, EDA and Predictive Analytics courses.
					Implemented CRISP-DM Framework, Linear Regression and Logistic Regression in Auto, Telecom & BFSI Industry projects.
					Consistently scored >80th Percentile on all projects and received appreciations from Upgrad. <a class="refer-link" href="https://github.com/anupammajhi/PGDDS-Project">[Github]</a></p>
				
				<p class="resume-info-main-p"><span class="resume-highlight">B.E. in Computer Science & Engineering</span> <span class="resume-years">[2009 - 2013]</span></p>
				<p class="resume-info">K. S. Institute of Technology | Score 70%</p>
				<p class="resume-info">Visvesvaraya Technological University, Bangalore</p>
				<br>
				<h1>Work Experience</h1>
				<p class="resume-info-main-p"><span class="resume-highlight">Infrastructure Automation Engineer</span> <span class="resume-years">[2016 - Today]</span></p>
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
				<p class="resume-info-main-p"><span class="resume-highlight">Senior Technical Specialist</span> <span class="resume-years">[2013 - 2016]</span></p>
				<p class="resume-info">VOLVO, Bangalore</p>
				<p class="resume-info2">
					<ul>
					<li>Designing, Administering, Implementing and supporting Enterprise Infrastructure servers.</li>
					<li>Improved Capacity Management to reduce issues by 60% by automating the process with time-based jobs with Powershell.</li>
					<li>Used Predictive Analysis based on older space usage data to predict space capacity issues.</li>
					</ul>
				</p>

				<h1>Key Academic Projects</h1>
				<p class="resume-info-main-p"><span class="resume-highlight">Auto Demand-Supply</span></p>
				<p class="resume-info2">
				Studied Demand-Supply gap to identify reasons for the gap and possible solutions based on 6500+ complete/incomplete driver trip data.
				</p>
				<p class="resume-info-main-p"><span class="resume-highlight">Employee Attrition Model</span></p>
				<p class="resume-info2">
				Predicted employees likely to leave the company with 75% accuracy by analysing 4000+ employees’ data. Identified best model out of Logistic Regression.
				</p>
				<p class="resume-info-main-p"><span class="resume-highlight">Health and Security Vault (HASV) - Android Based Emergency UTIL</span></p>
				<p class="resume-info2">
				Android based emergency alarm and complete health management application for common use mainly emphasizing on Easy-to-Use Interface for emergency use. It includes: Accident Alert, Theft Alert, Consult Doctor Online, Custom/ Personalized Alerts
				</p>
				
			</div>
			<div class="resume-2">
			<h1 class="resume-h1">Contact Info</h1>
				<div class="resume-info2">
					<ul>
					<li>Mob : +91 8088421654</li>
					<li>Mail : <a href="mailto:majhi.anupam@gmail.com">majhi.anupam@gmail.com</a></li>
					<li>Web : <a href="http://anupamm.com">http://anupamm.com</a></li>
					<li><a href="https://github.com/anupammajhi">Github</a>&nbsp;&nbsp; · &nbsp;&nbsp;<a href="https://www.linkedin.com/in/anupammajhi/">Linkedin</a></li>
					<li>Bangalore, India</li>
					</ul>
				</div>
			<h1>Skills & Interests</h1>
			<p class="resume-info-main-p"><span class="resume-highlight">Specializations</span></p>
				<div class="resume-info2">
					<ul>
					<li>Computer Science (in general)</li>
					<li>Automation</a></li>
					<li>Programming</a></li>
					<li>Data Analytics</li>
					<li>Machine Learning & AI</li>
					</ul>
				</div>
			<p class="resume-info-main-p"><span class="resume-highlight">Programming / Scripting Lang</span></p>
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
			<p class="resume-info-main-p"><span class="resume-highlight">Technology Familiarity</span></p>
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
			<p class="resume-info-main-p"><span class="resume-highlight">Accolades</span></p>
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
