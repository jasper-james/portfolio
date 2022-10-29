<!doctype html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Hugo 0.104.2">
		<title>Jasper James Arnasan</title>
  		<link rel="icon" type="image/x-icon" href="./images/logo.png">
		<link href="./assets/bootstrap.min.css" rel="stylesheet">
		<script src="./assets/bootstrap.bundle.min.js" type="text/javascript"></script>
    	<script src="./assets/float-panel.js" type="text/javascript"></script>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<style>
			.blog-header-logo {
				font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
			}
			/* ---------------- For Animation on Scroll ---------------- */
			.slideanim {
				visibility:hidden;
				visibility:visible\9;/*For old IE browsers IE6-8 */
			}
			.slideanim.slide {visibility: visible; animation:slide 1s;}
			.slideanim::after{
				/* useful when its child elements are float:left; */
				content: "";
				display: table;
				clear: both;
			}
			
            @keyframes slide {
                from {
                    opacity: 0;
                    transform: translateY(50%);
                } 
                to {
                    opacity: 1;
                    transform: translateY(0);
                } 
            }

			#kermes {
				background-image: url('./images/education/kermes.jpg');
				background-position: left 350px top -45px;
				background-repeat: no-repeat;
				background-size: 250px;
			}
			#cardones {
				background-image: url('./images/education/cardones.jpg');
				background-position: left 350px top -45px;
				background-repeat: no-repeat;
				background-size: 250px;
			}
			#elementary {
				background-image: url('./images/education/esves.png');
				background-position: left 350px top -45px;
				background-repeat: no-repeat;
				background-size: 250px;
			}
			#junior {
				background-image: url('./images/education/svnhs.jpg');
				background-position: left 350px top -45px;
				background-repeat: no-repeat;
				background-size: 250px;
			}
			#college {
				background-image: url('./images/education/pup.png');
				background-position: left 350px top -45px;
				background-repeat: no-repeat;
				background-size: 250px;
			}
			#awardknc {
				background-image: url('./images/awards/knc.jpg');
				background-repeat: no-repeat;
			}
			#awardsSHS {
				background: rgb(128,0,0);
				background: linear-gradient(0deg, rgba(128,0,0,1) 0%, rgba(157,49,0,1) 44%, rgba(186,97,0,1) 75%, rgba(210,138,0,1) 100%, rgba(233,177,0,1) 100%, rgba(255,215,0,1) 100%);
			}
			#awardsJHS {
				background: rgb(1,73,0);
				background: linear-gradient(0deg, rgba(1,73,0,1) 0%, rgba(70,143,62,1) 50%, rgba(181,255,160,1) 100%);
			}
			#expBread {
				background: rgb(6,0,121);
				background: linear-gradient(0deg, rgba(6,0,121,1) 0%, rgba(166,180,51,1) 100%);
			}
			#fb {
				padding: .75em;
				border: 1px #ddd solid;
				background: linear-gradient(to right, #4267B2, #4267B2);
				background-repeat: no-repeat;
				background-size: 0 100%;
				transition: background-size 0.3s 0s;
			}
			
			#fb:hover {
				background-size: 100% 100%;
			} 
			#link {
				padding: .75em;
				border: 1px #ddd solid;
				background: linear-gradient(to right, #0A66C2, #0A66C2);
				background-repeat: no-repeat;
				background-size: 0 100%;
				transition: background-size 0.3s 0s;
			}
			#link:hover {
				background-size: 100% 100%;
			}
			#pdf {
				padding: .75em;
				border: 1px #ddd solid;
				background: linear-gradient(to right, #9f0000, #9f0000);
				background-repeat: no-repeat;
				background-size: 0 100%;
				transition: background-size 0.3s 0s;
			}
			#pdf:hover {
				background-size: 100% 100%;
			}
			#autoAcad {
				background: rgb(255,138,243);
				background: linear-gradient(0deg, rgba(255,138,243,1) 0%, rgba(255,224,253,1) 100%);
			}
			#invi {
				background: rgb(222,134,0);
				background: linear-gradient(0deg, rgba(222,134,0,1) 0%, rgba(228,210,0,1) 100%);
			}
			#qunnecter {
				background: rgb(164,172,255);
				background: linear-gradient(0deg, rgba(164,172,255,1) 0%, rgba(220,218,255,1) 100%);
			}
		</style>
  	</head>
 	<body class="text-center text-bg-dark" data-bs-spy="scroll" data-bs-target="#nav" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<div class="w-100 mx-auto flex-column">
			<header class="mb-auto bg-dark text-bg-dark fixed-top">
				<nav id="nav" class="container navbar navbar-expand-md bg-dark navbar-dark">
					<div class="container my-1">
						<a class="blog-header-logo navbar-brand" href="#">Portfolio</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample10">
							<ul class="nav navbar-nav fw-bold">
								<li class="nav-item px-2">
									<a class="nav-link" href="#home">Home </a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#about">About</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#skills">Skills</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#projects">Project</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#education">Education</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#experience">Experience</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#awards">Awards</a>
								</li>
								<li class="nav-item px-2">
									<a class="nav-link" href="#contact">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<main class="h-100">
				<section id="home" class="min-vh-100 justify-content-center align-items-center d-flex bg-dark text-light">	
					<div class="slideanim">
						<h3 class="slideanim fw-normal mb-0">Hi! I'm</h3>			
						<h1 class="slideanim display-4 fw-bold text-light">JASPER JAMES ARNASAN</h1>
						<h3 class="slideanim fw-normal mt-0">I love developing incredible things and make it possible.</h3>		
					</div>
				</section>
				<section id="about">	
					<div class="slideanim min-vh-100 text-bg-light p-5" style="flex-direction: column;">	
						<div class="slideanim text-center container justify-content-center align-items-center d-flex">
							<div class="row py-5 px-3">
								<div class="col-md text-center px-auto">
									<img class="rounded-circle border border-dark border-3" src="./images/me.jpg" alt="" style="width: 100%;">
								</div>
								<div class="col-md-8 text-center my-4">	
									<h5 class="display-6 fw-bold pt-0">BIO</h5>	
									<h5 class="fw-normal mb-0" style="text-align: justify;">A 22-year-old whose parents are food vendors, and was born and raised in Taguig City. He is the eldest and only boy among the siblings. He is resourceful, resilient, creative, adaptive, and keen to learn especially about programming and other topics that are similar to his interests. Also, he has four years of project management, team leadership, and programming experience.</h5>												
									<h5 class="fw-normal mb-0 mt-3" style="text-align: justify;">He gained knowledge of many platforms, programming languages, and frameworks, and as a result, he is now able to effectively finish a project by himself and work with teams, which is beneficial for the company as a whole.</h5>	
									<h5 class="fw-normal mb-0 mt-3" style="text-align: justify;">He serves as the vice president of an organization, the BREAD Society PUP Chapter. He earned a degree in Bachelor of Science in Information Technology from the Polytechnic University of the Philippines in Manila.</h5>										
								</div>
							</div>
						</div>
					</div>	
				</section>
				<section id="skills">	
					<div class="min-vh-100 text-bg-light p-5" style="flex-direction: column; transform: skewY(-6deg);">	
						<div style="transform: skewY(6deg);">
							<h5 class="display-6 fw-bold pt-5 mb-3">SKILLS</h5>
							<div class="slideanim text-center container justify-content-center align-items-center d-flex mb-3">	
								<div class="row mx-auto">
									<div class="slideanim col-md row">
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/html.png" class="card-img-top pt-4 px-5 pb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">HTML</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/css.png" class="card-img-top pt-4 px-5 pb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">CSS</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slideanim col-md row">
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/php.png" class="card-img-top p-3 mt-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">PHP</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
													</div>
												</div>
											</div>
										</div>								
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/javascript.png" class="card-img-top px-5 pt-4 pb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Javascript</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>	
									</div>									
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/cobol.png" class="card-img-top px-5 pt-3" alt="...">
												<div class="card-body">
													<h5 class="card-title">COBOL</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
													</div>
												</div>
											</div>
										</div>								
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/csharp.png" class="card-img-top px-5 py-2" alt="...">
												<div class="card-body">
													<h5 class="card-title">C#</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
													</div>
												</div>
											</div>
										</div>		
									</div>						
								</div>
							</div>	
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row mx-auto">									
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/cplus.png" class="card-img-top px-5 pt-3 pb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">C++</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
													</div>
												</div>
											</div>
										</div>			
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<div class="px-2 py-2">
													<img src="./images/skills/java.png" class="card-img-top px-5 pt-2" alt="...">
												</div>
												<div class="card-body pt-0 mx-0 mt-1">
													<h5 class="card-title">Java</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>																	
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/python.png" class="card-img-top px-5 pt-3 pb-2 mb-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Python</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>			
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/r.png" class="card-img-top px-5 pt-4 pb-4 mb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">R</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>						
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/bootstrap.png" class="card-img-top px-5 py-4 mb-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Bootstrap</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
													</div>
												</div>
											</div>
										</div>			
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/laravel.png" class="card-img-top px-5 py-3" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Laravel</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row mx-auto">
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/expressjs.png" class="card-img-top px-4 py-5" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Express JS</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/nodejs.png" class="card-img-top px-4 py-4 mb-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Node JS</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/ejs.png" class="card-img-top px-4 py-3 mb-2" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">EJS</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
													</div>
												</div>
											</div>
										</div>		
										<div class="col-6 col-md p-1">
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/photoshop.png" class="card-img-top px-5 py-4 mb-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">Photoshop</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>				
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">					
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/sql.png" class="card-img-top px-4 py-4 mb-3 mt-1" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">SQL</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-6 col-md p-1">				
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/vmix.png" class="card-img-top px-5 py-4" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">vMix</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row mx-auto">
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">					
											<div class="card text-dark border-0 shadow">
												<img src="./images/skills/obs.png" class="card-img-top px-5 py-4" alt="...">
												<div class="card-body pt-0">
													<h5 class="card-title">OBS</h5>
													<div class="progress">
														<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
													</div>
												</div>
											</div>
										</div>				
										<div class="col-6 col-md p-1">		
										</div>
									</div>
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">		
										</div>				
										<div class="col-6 col-md p-1">		
										</div>
									</div>
									<div class="slideanim col-md row">						
										<div class="col-6 col-md p-1">		
										</div>				
										<div class="col-6 col-md p-1">		
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>	
				</section>
				<section id="projects">	
					<div class="slideanim min-vh-100 text-bg-light py-5" style="flex-direction: column;">	
					 	<h5 class="display-6 fw-bold pt-5 mb-3">PROJECTS</h5>
						<div class="container-fluid">
							<div class="text-center container">	
								<div class="col-md card border-0 m-2 shadow px-0 py-0">
									<div class="row g-0">
										<div class="col-md">
											<div class="card-body text-start">
												<h3 class="card-title">
													Auto-Acad 
													<button type="button" class="btn btn-primary float-end rounded-5" data-bs-toggle="modal" data-bs-target="#projectAutoacad">
  														View Screentshots
													</button>
												</h3>
												<p class="border-bottom pb-2 fst-italic mb-0">Project Manager, Developer, Database Administrator, UI Manager</p>
												<p class="card-text px-0 mt-0">The Auto-Acad is an academic information management platform objectively created to provide contribution of an infrastructure of information technology toward school administration. With features on having to handle student information, record and encode grades, and automated generation of school forms improving monitoring and logging free of any inconveniences.</p>
												<a class="text-bg-primary text-decoration-none py-1 px-3 rounded-4">2022</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">PHP</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">CSS</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Bootstrap</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">JavaScript</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">SQL</a> 
											</div>
										</div>
										<div class="col-md-3">
											<img id="autoAcad" src="./images/projects/auto-acad/AALogo.png" class="img-fluid rounded-end p-3" alt="...">
										</div>
									</div>
								</div>
								<div class="col-md card border-0 m-2 shadow px-0 py-0">
									<div class="row g-0">
										<div class="col-md">
											<div class="card-body text-start">
												<h3 class="card-title">
													Qunnecter
													<button type="button" class="btn btn-primary float-end rounded-5" data-bs-toggle="modal" data-bs-target="#projectQunnecter">
  														View Screentshots
													</button>
												</h3>
												<p class="border-bottom pb-2 fst-italic mb-0">Full-Stack Developer</p>
												<p class="card-text px-0 mt-0">The last project I worked on as an intern at RSB Consulting Inc. was the Qunnecter. The employee can utilize this web tool to conveniently plan meetings and other events. This web application is capable of managing all overlapping events. </p>
												<a class="text-bg-primary text-decoration-none py-1 px-3 rounded-4">2022</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Laravel</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">PHP</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Bootstrap</a>  
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">SQL</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">JavaScript</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">ChartJS</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Start Bootstrap</a>
											</div>
										</div>
										<div class="col-md-3">
											<img id="qunnecter" src="./images/projects/qunnecter/logo.png" class="img-fluid rounded-end p-3" alt="...">
										</div>
									</div>
								</div>
								<div class="col-md card border-0 m-2 shadow px-0 py-0">
									<div class="row g-0">
										<div class="col-md">
											<div class="card-body text-start">
												<h3 class="card-title">
													Invi Clothing Co. website													
													<button type="button" class="btn btn-primary float-end rounded-5" data-bs-toggle="modal" data-bs-target="#projectInvi">
  														View Screentshots
													</button>
												</h3>
												<p class="border-bottom pb-2 fst-italic mb-0">Designer, CMS Developer, Documentation Manager, Database Analyst</p>
												<p class="card-text px-0 mt-0">The transaction website for Invi Clothing Co.</p>
												<a class="text-bg-primary text-decoration-none py-1 px-3 rounded-4">2021</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">HTML</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">PHP</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">CSS</a>  
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">SQL</a> 
											</div>
										</div>
										<div class="col-md-3">
											<img id="invi" src="./images/projects/invi/invi.png" class="img-fluid rounded-end p-3" alt="...">
										</div>
									</div>
								</div>
								<div class="col-md card border-0 m-2 shadow px-0 py-0">
									<div class="row g-0">
										<div class="col-md">
											<div class="card-body text-start">
												<h3 class="card-title">
													Salon Reservation System																									
													<button type="button" class="btn btn-primary float-end rounded-5" data-bs-toggle="modal" data-bs-target="#projectSalon">
  														View Screentshots
													</button>
												</h3>
												<p class="border-bottom pb-2 fst-italic mb-0">Content Analyst, Programmer</p>
												<p class="card-text px-0 mt-0">This system handles salon transactions and schedules appointments for clients.</p>
												<a class="text-bg-primary text-decoration-none py-1 px-3 rounded-4">2020</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Python</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">SQLite</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Tkinter</a>  
											</div>
										</div>
										<div class="col-md-3">
											<img src="./images/projects/python/salon.png" class="img-fluid rounded-end" alt="...">
										</div>
									</div>
								</div>
								<div class="col-md card border-0 m-2 shadow px-0 py-0">
									<div class="row g-0">
										<div class="col-md">
											<div class="card-body text-start">
												<h3 class="card-title">
													Eye Love You
													<button type="button" class="btn btn-primary float-end rounded-5" data-bs-toggle="modal" data-bs-target="#projectELY">
  														View Screentshots
													</button>
												</h3>
												<p class="border-bottom pb-2 fst-italic mb-0">Director, Editor</p>
												<p class="card-text px-0 mt-0">BREAD Society PUP Manila Chapter hosted a webinar to spread awareness about the issues in eye sight and to help on how to take care of our eyes accordingly. I am in head of the team and the director of this event. Despite the pandemic, we were able to successfully wrap up this event.</p>
												<a class="text-bg-primary text-decoration-none py-1 px-3 rounded-4">2020</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">Photoshop</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">OBS</a> 
												<a class="text-bg-dark text-decoration-none py-1 px-3 rounded-4">vMix</a>  
											</div>
										</div>
										<div class="col-md-3">
											<img src="./images/projects/webinar/ely.png" class="img-fluid rounded-end" alt="...">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</section>
				<section id="education">	
					<div class="min-vh-100 text-bg-light py-5" style="flex-direction: column;">	
					 	<h5 class="display-6 fw-bold pt-5 mb-3">EDUCATION</h5>
						<div class="container-fluid">
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row container">
									<div id="kermes" class="col-md card text-dark m-2 border-0 shadow border-top border-primary border-4">
										<div id="elem-content" class="card-body">
											<p class="card-text">ELEMENTARY</p>
											<h5 class="card-title fw-bold">Kapt. Eddie T. Reyes Integrated School</h5>
											<p class="card-text pt-0 fst-italic">2006-2007</p>
										</div>
									</div>
									<div id="cardones" class="col-md card text-dark m-2 border-0 shadow border-top border-success border-4">
										<div class="card-body">
											<p class="card-text">JUNIOR HIGH SCHOOL</p>
											<h5 class="card-title fw-bold">Kapt. Jose Cardones Integrated School</h5>
											<p class="card-text pt-0 fst-italic">2007-2009</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row container">
									<div id="elementary" class="col-md card text-dark m-2 border-0 shadow border-top border-primary border-4">
										<div id="elem-content" class="card-body">
											<p class="card-text">ELEMENTARY</p>
											<h5 class="card-title fw-bold">EM's Signal Village Elementary School</h5>
											<p class="card-text pt-0 fst-italic">2009-2012</p>
										</div>
									</div>
									<div id="junior" class="col-md card text-dark m-2 border-0 shadow border-top border-success border-4">
										<div class="card-body">
											<p class="card-text">JUNIOR HIGH SCHOOL</p>
											<h5 class="card-title fw-bold">Signal Village National High School</h5>
											<p class="card-text pt-0 fst-italic">2012-2016</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slideanim text-center container justify-content-center align-items-center d-flex">	
								<div class="row container">
									<div id="college" class="col-md card text-dark m-2 border-0 shadow border-top border-danger border-4">
										<div class="card-body">
											<p class="card-text">SENIOR HIGH SCHOOL</p>
											<h5 class="card-title fw-bold">Polytechnic University of the Philippines - Manila</h5>
											<p class="card-text pt-0">Science, Technology, Engineering, and Mathematics</p>
											<p class="card-text pt-0 fst-italic">2016-2018</p>
										</div>
									</div>
									<div id="college" class="col-md card text-dark m-2 border-0 shadow border-top border-danger border-4">
										<div class="card-body">
											<p class="card-text">COLLEGE</p>
											<h5 class="card-title fw-bold">Polytechnic University of the Philippines - Manila</h5>
											<p class="card-text pt-0">Bachelor of Science in Information Technology</p>
											<p class="card-text pt-0 fst-italic">2018-2022</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</section>
				<section id="experience">	
					<div class="min-vh-100 text-bg-light py-5" style="flex-direction: column; transform: skewY(-6deg);">
					<div style="transform: skewY(6deg);">
					<h5 class="display-6 fw-bold pt-5 mb-3">EXPERIENCE</h5>
						<div class="container-fluid">
							<div class="text-center container">	
								<div class="row container">
									<div class="col-md card border-0 m-2 shadow px-0 py-0">
										<div class="row g-0">
											<div class="col-md-5">
												<img id="expBread" src="./images/experience/bread.png" class="img-fluid rounded-start p-3" alt="...">
											</div>
											<div class="col-md">
												<div class="card-body text-start">
													<h5 class="card-title">BRead Society International - PUP Chapter</h5>
													<p class="border-bottom pb-2 fst-italic mb-0">Vice President  (2019-2022)</p>
													<p class="card-text px-0 mt-0">Managing and guiding the team while organizing events, meetings, and other responsibilities.</p>
													<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-md card border-0 m-2 shadow px-0 py-0">
										<div class="row g-0">
											<div class="col-md-5">
												<img id="expBread" src="./images/experience/bread.png" class="img-fluid rounded-start p-3" alt="...">
											</div>
											<div class="col-md">
												<div class="card-body text-start">
													<h5 class="card-title">BRead Society International - PUP Chapter</h5>
													<p class="border-bottom pb-2 fst-italic mb-0">Event Director  (Oct 2022)</p>
													<p class="card-text px-0 mt-0">Directing a webinar entitled, Eye Love You: On proper eye care in light of the 'new normal'. Leading and motivating the team to make an event successful.</p>
													<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row container">
									<div class="col-md card border-0 m-2 shadow px-0 py-0">
										<div class="row g-0">
											<div class="col-md-5">
												<img src="./images/experience/rsb.png" class="img-fluid rounded-start" alt="...">
											</div>
											<div class="col-md">
												<div class="card-body text-start">
													<h5 class="card-title">RSB Consulting, Inc.</h5>
													<p class="border-bottom pb-2 fst-italic mb-0">Back-end Development Internship (May-Jun 2022)</p>
													<p class="card-text px-0 mt-0">Back-end Development by implementing Laravel.</p>
													<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-md card border-0 m-2 shadow px-0 py-0">
										<div class="row g-0">
											<div class="col-md-5">
												<img src="./images/experience/rsb.png" class="img-fluid rounded-start" alt="...">
											</div>
											<div class="col-md">
												<div class="card-body text-start">
													<h5 class="card-title">RSB Consulting, Inc.</h5>
													<p class="border-bottom pb-2 fst-italic mb-0">Front-end Development Internship (Jun-Jul 2022)</p>
													<p class="card-text px-0 mt-0">Implementing CSS Grid, CSS Components. Applying responsiveness coding to company projects</p>
													<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row container">
									<div class="col-md card border-0 m-2 shadow px-0 py-0">
										<div class="row g-0">
											<div class="col-md-5">
												<img src="./images/experience/rsb.png" class="img-fluid rounded-start" alt="...">
											</div>
											<div class="col-md">
												<div class="card-body text-start">
													<h5 class="card-title">RSB Consulting, Inc.</h5>
													<p class="border-bottom pb-2 fst-italic mb-0">Full-Stack Development Internship (Jul-Aug 2022)</p>
													<p class="card-text px-0 mt-0">Developing a web application, both front-end and back-end. Applying responsiveness coding and laravel.</p>
													<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-md">
									</div>
								</div>
							</div>
						</div>
					</div>	
					</div>		
				</section>
				<section id="awards">	
					<div class="min-vh-100 text-bg-light py-5" style="flex-direction: column;">	
					 	<h5 class="display-6 fw-bold pt-5 mb-3">AWARDS</h5>
						<div class="container-fluid">
							<div class="text-center container justify-content-center align-items-center d-flex">	
								<div class="row container">
									<div class="col-md card border-0 m-2 shadow px-0">
										<img id="awardsJHS" src="./images/awards/svnhs.png" class="card-img-top p-5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Signal Village National High School</h5>
											<p class="border-bottom pb-2 fst-italic">Junior High School</p>
											<ul><li class="card-text text-start">Top 2 in the class section A.Y. 2012-2013</li></ul>
										</div>
									</div>
									<div class="col-md card border-0 m-2 shadow px-0">
										<img id="awardsSHS" src="./images/awards/pup.png" class="card-img-top p-5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Polytechnic University of the Philippines</h5>
											<p class="border-bottom pb-2 fst-italic">Senior High School</p>
											<ul><li class="card-text text-start">With Honors A.Y. 2017-2018</li></ul>
										</div>
									</div>
									<div class="col-md card border-0 m-2 shadow px-0">
										<img id="awardsSHS" src="./images/awards/pup.png" class="card-img-top p-5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Polytechnic University of the Philippines</h5>
											<p class="border-bottom pb-2 fst-italic">College</p>
											<ul>
												<li class="card-text text-start">President's Lister First Semester, A.Y. 2020-2021</li>
												<li class="card-text text-start">President's Lister Second Semester, A.Y. 2020-2021</li>
												<li class="card-text text-start">Dean's Lister Summer Term, A.Y. 2020-2021</li>
												<li class="card-text text-start">President's Lister First Semester, A.Y. 2021-2022</li>
											</ul>
										</div>
									</div>
									<div class="col-md card border-0 m-2 shadow px-0">
										<img src="./images/awards/lani.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title">Lifeline Assistance for Neighbors In-need</h5>
											<p class="border-bottom pb-2 fst-italic">Taguig City Scholarship</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</section>
				<section id="contact">	
					<div class="text-bg-dark p-5" style="flex-direction: column;">	
						<h5 class="display-6 fw-bold pt-3 mb-5">CONTACT</h5>
						<div class="row mx-auto">
							<div class="col-md px-3">
								<div id="fb" class="h3 text-center rounded rounded-4 border border-3 py-4 px-5">
									<a href="https://www.facebook.com/jasperjames.arnasan/" class="text-decoration-none text-white">
									<i class="bi bi-facebook" style="font-size:36px"></i> 
										<span class="mx-3">Facebook   </span>
									</a>
								</div>
								<div class="h4 text-center text-white rounded rounded-4 border border-3 py-4 px-2">
									<i class="bi bi-telephone" style="font-size:36px"></i>
									<span class="ms-2">+63-919-498-2772</span>
								</div>
							</div>
							<div class="col-md px-3">
								<div id="link" class="h3 text-center rounded rounded-4 border border-3 py-4 px-5">
									<a href="https://www.linkedin.com/in/jasper-james-arnasan" class="text-decoration-none text-white">
										<i class="bi bi-linkedin" style="font-size:36px"></i>
										<span class="mx-3">LinkedIn</span>
									</a>
								</div>
								<div class="h3 text-center text-white rounded rounded-4 border border-3 py-4 px-2">
									<i class="bi bi-house-door" style="font-size:36px"></i>
									<span class="mx-3">Taguig City</span>
								</div>
							</div>
							<div class="col-md px-3">
								<div id="google" class="h5 text-center text-white rounded rounded-4 border border-3 py-4 px-2">
									<i class="bi bi-envelope" style="font-size:36px"></i>
									<span class="ms-2">jasper.arnasan@gmail.com</span>
								</div>
								<div id="pdf" class="h3 text-center text-white rounded rounded-4 border border-3 py-4 px-2">
									<a href="./files/Resume-Jasper-James-Arnasan.pdf" class="text-decoration-none text-white"><i class="bi bi-file-pdf" style="font-size:36px"></i>
									<span class="mx-3">Resume</span></a>
								</div>
							</div>
						</div>
					</div>	
				</section>
				<div id="project-modals">
					<div class="modal fade" id="projectAutoacad" tabindex="-1" aria-labelledby="projectAutoacadLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content text-bg-light">
								<div class="modal-header text-dark">
									<h1 class="modal-title fs-2" id="projectAutoacadLabel">Auto-Acad</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>									
								</div>
								<div class="modal-body text-dark">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md p-2">
												<a href="./images/projects/auto-acad/1.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/1.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/5.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/5.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/9.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/9.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/6.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/6.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/16.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/16.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/auto-acad/3.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/3.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/7.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/7.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/4.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/4.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/8.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/8.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/13.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/13.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/14.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/14.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/auto-acad/2.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/2.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/11.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/11.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/12.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/12.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/auto-acad/15.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/auto-acad/15.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="projectQunnecter" tabindex="-1" aria-labelledby="projectQunnecterLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content text-bg-light">
								<div class="modal-header text-dark">
									<h1 class="modal-title fs-2" id="projectQunnecterLabel">Qunnecter</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>									
								</div>
								<div class="modal-body text-dark">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md p-2">
												<a href="./images/projects/qunnecter/1.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/1.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/4.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/4.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/9.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/9.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/11.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/11.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/qunnecter/2.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/2.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/5.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/5.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/10.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/10.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/9.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/9.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/qunnecter/3.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/3.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/6.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/6.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/8.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/8.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/qunnecter/12.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/qunnecter/12.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="projectInvi" tabindex="-1" aria-labelledby="projectInviLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content text-bg-light">
								<div class="modal-header text-dark">
									<h1 class="modal-title fs-2" id="projectInviLabel">Invi Clothing Co. website</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>									
								</div>
								<div class="modal-body text-dark">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md p-2">
												<a href="./images/projects/invi/1.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/invi/1.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/invi/3.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/invi/3.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/invi/2.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/invi/2.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/invi/4.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/invi/4.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="projectSalon" tabindex="-1" aria-labelledby="projectSalonLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content text-bg-light">
								<div class="modal-header text-dark">
									<h1 class="modal-title fs-2" id="projectInviLabel">Salon Reservation System</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>									
								</div>
								<div class="modal-body text-dark">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md p-2">
												<a href="./images/projects/python/1.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/python/1.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/python/3.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/python/3.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/python/2.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/python/2.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/python/4.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/python/4.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="projectELY" tabindex="-1" aria-labelledby="projectELYLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content text-bg-light">
								<div class="modal-header text-dark">
									<h1 class="modal-title fs-2" id="projectELYLabel">Eye Love You: On proper eye care in light of the 'new normal'</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>									
								</div>
								<div class="modal-body text-dark">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md p-2">
												<a href="./images/projects/webinar/1.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/1.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/webinar/4.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/4.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/webinar/7.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/7.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/webinar/2.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/2.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/webinar/5.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/5.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/webinar/9.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/9.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
											<div class="col-md p-2">
												<a href="./images/projects/webinar/3.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/3.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
												<a href="./images/projects/webinar/6.png" target="_blank" rel="noopener noreferrer" class="card text-dark shadow-sm m-2">
													<img src="./images/projects/webinar/6.png" class="card-img-top pt-4 px-5 pb-2" alt="...">												
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
<!-- 
  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer> -->
</div>


    
  </body>
</html>
