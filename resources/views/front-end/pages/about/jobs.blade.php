@extends('front-end.layouts.main-layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/projectCSS/textToSpeech.css')}}">

@endsection


@section('title','Jobs')


@section('content')
    <div class="page-block" style="display: none"></div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">Jobs</h2>
            <hr class="line"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            RDI is the leader in the area of Arabic Language technologies. RDI have developed line of products and provides number of services in the area of Speech Processing, Character Recognition, and Natural Language Processing.Being a leader in that area, it is willing to invest in developing unique products and services.
                        </p>

                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/jobs-section-1.jpeg')}}" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-block">
        <div class="col-md-12 text-center" >
            <h2 class="page-block-header">AVAILABLE JOBS
            </h2>
            <hr class="line"/>
        </div>

        <div class="container custom-jobs">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <p class="lead justfy">
                            The following positions and corresponding qualifications are the most interesting ones to RDI whenever new employees are sought to join RDI family:


                        </p>
                        <div class="accordion accordion-bg clearfix">


                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i> Senior / Junior Java Web Developer (JWD)</div>
                            <div class="acc_content clearfix">

                                <div class="card-body">
                                    <p><strong>Job Description:</strong><br>
                                        <strong>Typical tasks and work products include:</strong></p>

                                    <ul>
                                        <li>Design and Develop internal and external web-based applications.</li>
                                        <li>Design, code, test, document and debug software applications.</li>
                                        <li>Lead other developers in an agile environment.</li>
                                        <li>Evaluate and provide technical solutions to complex application development problems.</li>
                                    </ul>

                                    <p><br>
                                        &nbsp;</p>

                                    <p><strong>Job Requirements:</strong></p>

                                    <ul>
                                        <li>J2EE Experience, Spring, Angular 2.x, JSP, Servlets, JSF, prime faces.</li>
                                        <li>Experience in Design and Develop Web Services is a MUST.</li>
                                        <li>Hands on experience with databases Specially MySQL, Preferred Postgree.</li>
                                        <li>Understanding of front-end technologies, such as JavaScript, HTML5, and CSS3.</li>
                                        <li>Full Systems Development Life Cycle projects utilizing the JAVA 2 Enterprise Edition (J2EE) platform.</li>
                                        <li>Strong knowledge of object-oriented design principles, design patterns, modeling.</li>
                                        <li>Knowledge of Functional or Automated Testing methods/tools like JUnit and Jmeter.</li>
                                        <li>Development for Cloud is a PLUS.</li>
                                        <li>Hands on experience in Building and Deploying Web Applications.</li>
                                    </ul>

                                    <p><br>
                                        &nbsp;</p>

                                    <p><strong>Other knowledge or expertise required:</strong></p>

                                    <ul>
                                        <li>BS in Computer Science, Engineering or related discipline.</li>
                                        <li>4+ years of hands on experience for senior position.</li>
                                        <li>Strong problem solving and decision making skills.</li>
                                        <li>Strong communication skills.</li>
                                        <li>Self-motivated professional who demonstrates strong technical agility and responsiveness and who is eager to learn and grow within a consulting-like Technology Services organization.</li>
                                        <li>Clear thinking, fact-based and to the point professionals who looks forward to working within a creative team atmosphere.</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Machine Learning Researcher (MLR)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Description:</strong></p>

                                    <p>We are looking for a motivated new team member that can help us research and invent groundbreaking new software technologies at the intersection of software engineering and machine learning especially in the field of Natural Language Processing. The work is both analytical and experimental in nature and includes prototyping of new algorithms, investigating data, and evaluating algorithm performance. Ideally the successful candidate will have skills in - Python, Data Mining, Machine Learning, Natural Language Processing, Information Retrieval, Computational Linguistics and Deep Learning though having all isn't a prerequisite for the role. The candidate must be a capable C++/Python programmer with demonstrable experience designing, prototyping, and delivering advanced algorithmic solutions.</p>

                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                    <p><strong>Qualifications:</strong></p>

                                    <ul>
                                        <li>BSc in Computer Science, Computer Engineering or related fields doing research in the fields of NLP, especially related to machine learning and/or deep learning.</li>
                                        <li>Practical experience with machine learning and deep learning packages, for example scikit-learn, TensorFlow, CNTK, etc.</li>
                                        <li>Good presentation and writing skills.</li>
                                        <li>1-3 years of experience in Natural Language processing.</li>
                                        <li>Excellent programming skills with Python, C/C++. CUDA is a plus.</li>
                                        <li>Basic knowledge of Linux is advantage.</li>
                                        <li>Basic knowledge of Python or Perl script is advantage.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Senior / Junior Software Developer - C++ on Linux (C++)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Description:</strong></p>

                                    <ul>
                                        <li>Developing and maintaining software applications.</li>
                                        <li>Promoting a collaborative work environment with team members and customers, providing task analysis and technical insight to help develop and deliver the needed capabilities.</li>
                                        <li>Leading program reviews as necessary.</li>
                                        <li>Giving presentations and demos.</li>
                                        <li>Build prototypes at tech scoping stage of projects.</li>
                                        <li>Working with the front end developers to build the interface with focus on usability features.</li>
                                        <li>Standardizing the platform and in some cases apps to deliver across multiple brands with minimal duplication of effort.</li>
                                        <li>Optimizing performance for the apps.</li>
                                        <li>Explain technologies and solutions to technical and non-technical stakeholders.</li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><strong>Job Requirements:</strong></p>

                                    <ul>
                                        <li>A Bachelor’s Degree of Computer Science or Computer Engineering.</li>
                                        <li>Object Oriented Analysis &amp; Design.</li>
                                        <li>3+ years of experience in development with C++ for senior positions.</li>
                                        <li>Knowledge of Linux OS is a must.</li>
                                        <li>Experience in C++ development on Linux.</li>
                                        <li>Good practice of data structures.</li>
                                        <li>Cloud computing is a plus.</li>
                                        <li>The ability to perform all aspects of the development tasks, including implementation, initial testing, and debugging.</li>
                                        <li>Being aware of the new technologies.</li>
                                        <li>Strong problem solving and analytical abilities are a must.</li>
                                        <li>Ability to work efficiently and effectively in a deadline driven environment.</li>
                                        <li>Excellent Software Development Lifecycle.</li>
                                        <li>Excellent analytical skills.</li>
                                        <li>Creative problem-solving skills and an ability to apply business logic to development requirements.</li>
                                        <li>Ability to multi-task and good time management skills.</li>
                                        <li>Excellent scoping and estimation skills.</li>
                                        <li>Very good verbal and written English communication skills are essential.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Senior / Junior Software Tester (ST)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Job Description:</strong></p>

                                    <p>Your role will vary depending on project requirements. You may join a project at the initial implementation stages to assess potential risks (TDD), or be brought on to a project midway through, when testing becomes a key requirement.</p>

                                    <p>You’ll need to perform the following:</p>

                                    <ul>
                                        <li>Write C++ and Java unit tests</li>
                                        <li>Monitoring applications and software systems</li>
                                        <li>Stress testing</li>
                                        <li>Performance testing</li>
                                        <li>Functional testing</li>
                                        <li>Scalability testing</li>
                                        <li>Concurrency testing</li>
                                        <li>Write and executing test scripts</li>
                                        <li>Running manual and automated tests</li>
                                        <li>Testing in different environments/platforms</li>
                                        <li>Writing bug reports</li>
                                        <li>Reviewing documentation</li>
                                        <li>Quality assurance</li>
                                        <li>Providing objective feedback to software development project teams</li>
                                        <li>Problem solving</li>
                                        <li>Designing tests to mitigate risk</li>
                                    </ul>

                                    <p><br>
                                        <strong>Qualifications:</strong></p>

                                    <ul>
                                        <li>[2 - 3] years of experience for junior position.</li>
                                        <li>4+ years of experience for senior position.</li>
                                        <li>Strong knowledge of Test Driven Development.</li>
                                        <li>Proficient in C++ and Java programming.</li>
                                        <li>Experience with Linux environment.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Senior Android Developer - Part Time (AD)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Responsibilities:</strong></p>

                                    <ul>
                                        <li>Design, build, and maintain high performance applications for Android platform</li>
                                        <li>Help maintain code quality, organization, and automatization</li>
                                        <li>Identify, correct bottlenecks and fix bugs.</li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><strong>Skills:</strong></p>

                                    <ul>
                                        <li>Ability to understand business requirements and translate them into technical requirements.</li>
                                        <li>Strong knowledge of Android SDK, different versions of Android, and how to deal with different screen sizes.</li>
                                        <li>Familiarity with RESTful APIs to connect Android applications to back-end services.</li>
                                        <li>Strong knowledge of Android UI design principles, patterns, and best practices.</li>
                                        <li>Experience with offline storage, threading, and performance tuning.</li>
                                        <li>Experience with managing basic hardware features (i.e.: Camera, Speakers, Mic, etc…).</li>
                                        <li>Experience with importing “C” Code using NDK.</li>
                                        <li>Knowledge of the open-source Android ecosystem and the libraries available for common tasks and image processing.</li>
                                        <li>Familiarity with cloud message APIs and push notifications.</li>
                                        <li>Familiarity with the use of additional sensors, such as gyroscopes and accelerometers.</li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p><strong>Requirements</strong></p>

                                    <ul>
                                        <li>Bsc degree in Computer Science, Engineering or a related discipline.</li>
                                        <li>Proven working experience in Android app development.</li>
                                        <li>Experience with Android SDK.</li>
                                        <li>Experience working with remote data via REST and JSON.</li>
                                        <li>Experience with Native, third-party libraries and APIs.</li>
                                        <li>Working knowledge of the general mobile landscape, architectures, trends, and emerging technologies.</li>
                                        <li>Understanding of code versioning tools, such as Git.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>IT Linux Administrator - Part Time (IT LA)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Job Description:</strong></p>

                                    <ol>
                                        <li>We are looking for a Linux Administrator who will be responsible for designing, implementing, and monitoring the infrastructure; also, to collaborate with other team members to develop automation strategies and deployment processes.&nbsp;</li>
                                        <li>Perform daily system monitoring, verifying the integrity and availability of all hardware, server resources, systems and key processes, reviewing system and application logs, and verifying completion of scheduled jobs such as backups.</li>
                                        <li>Perform regular security monitoring to identify any possible intrusions.</li>
                                        <li>Perform daily backup operations, ensuring all required file systems and system data are successfully backed up to the appropriate media, recovery tapes or disks are created, and media is recycled and sent off site as necessary.</li>
                                        <li>Repair and recover from hardware or software failures. Coordinate and communicate with impacted constituencies.</li>
                                        <li>Install new / rebuild existing servers and configure hardware, peripherals, services, settings, directories, storage, etc.&nbsp;</li>
                                        <li>Research and recommend innovative, and where possible automated approaches for system administration tasks.</li>
                                        <li>Participate in creating disaster recovery plans.</li>
                                        <li>Updating the technical documentation and the team knowledge base.</li>
                                        <li>Participate in the overall secure design and performance of system/server’s environment.</li>
                                        <li>Take lead in resolving operational issues, perform root cause analysis, and implement necessary corrective actions to prevent re-occurrence.</li>
                                    </ol>

                                    <p><br>
                                        <strong>Job Requirements:</strong></p>

                                    <ol>
                                        <li>Experienced with network configuration.</li>
                                        <li>At least 3 years working experience in the IT field and practical hands on experience in Linux/Unix environment.</li>
                                    </ol>
                                </div>
                            </div>


                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Technical Marketing Writer - Part Time (TMW)</div>
                            <div class="acc_content clearfix">
                                <div class="card-body">
                                    <p><strong>Qualifications:</strong></p>

                                    <ul>
                                        <li>Bachelor’s degree in Engineering, Marketing, Communications or Journalism.</li>
                                        <li>3+ years of professional experience writing websites and marketing content for technical products.</li>
                                        <li>Fluency in Arabic and English.</li>
                                        <li>Strong interactive writing/editing skills in both languages.</li>
                                        <li>Experience with Microsoft Office programs (Word, Excel, and PowerPoint).</li>
                                        <li>Background in machine learning, data science or related industries is preferred.</li>
                                        <li>Experience collaborating with large teams using outstanding communication skills.</li>
                                        <li>Experience successfully executing and balancing multiple projects and tasks.</li>
                                        <li>Demonstrated ability to write clear, compelling content that adheres to style guidelines and is substantially error-free.</li>
                                        <li>Attention to detail, especially as it relates to complex customer interactions and compliance-mandated content.</li>
                                        <li>Experience working with multiple stakeholders in a fast-paced, deadline-driven environment, with proven ability to respond flexibly to changing priorities.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <p> <i class="fa fa-email"></i> Email: Jobs@rdi-eg.com</p>
                        <p> Fax: +20233382166</p>
                        <p> Note: Please add the required job reference to the email subject</p>

                    </div>
                    <div class="col-md-5 text-right">
                        <img src="{{asset('images/siteImages/jobs-section-2.jpeg')}}" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- Add Scripts Here --}}


@endsection
