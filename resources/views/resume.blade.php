@extends('layouts.app)

@section('content')

    <style type="text/css" id="static">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;}
        body{line-height:1;background:#fff;text-align:left;font-feature-settings:"liga" 0;-moz-font-feature-settings:"liga" off;}
        blockquote,q{quotes:none;}
        blockquote:before,blockquote:after,q:before,q:after{content:"";content:none;}
        :focus{outline:0;}
        ins{text-decoration:none;}
        del{text-decoration:line-through;}
        table{border-collapse:collapse;border-spacing:0;}
        a img{border:none;}
        ul,li{margin:0 0 0 13px;padding:0;}
        ul li{margin:0 0 0 16px;padding:0 0 0 3px;}
        .clear{clear:both;height:0;}
        br.clear{line-height:0;}
        div.name{font-size:15px;line-height:17px;font-weight:bold;padding:0;text-align:left;}
        div.logo{display:none;}
        div.heading{clear:both;font-weight:bold;}
        div.address{position:relative;text-align:right;font-size:0.917em;line-height:1.25em;margin-top:11px;}
        div.address2{position:relative;text-align:left;font-size:0.917em;line-height:1.25em;}
        span.jobtitle,span.companyname,span.degree,span.programline{font-weight:bold;}
        span.cdesc{font-style:italic;}
        div#document table{width:100%;}
        .table_wrapper{width:100%;margin-top:0;}
        table.twocol td{width:50%;}
        table.skills{width:100%;}
        table.skills th,table.skills td{width:20%;text-align:center;}
        table.skills th{text-decoration:underline;}
        table.skills .skillname,table.skills .skillrating{text-align:left;width:35%;}
        table.skills .skillrating{width:20%;}
        table.skills .skillyears,table.skills .skilllast{width:19%;}
        table.skills .pad1{width:5%;}
        table.skills .pad2,table.skills .pad3{width:1%;}
        span.paddedline{display:block;}
        .nodisplay{display:none;}
        div.lowerborder{padding-top:2px;}
        div.resumeTitle,div.execRsmTitle{font-weight:bold;text-align:center;}
        div#document div.heading{padding-bottom:1px;}
        td.twocol_2{border-left:1px solid #fefdfd;}
        .charspace{}
        .myGap{}
        div#document .sectionCL .paragraph{margin-top:0 !important;}
    </style>
    <style type="text/css" id="unparsed">
        div#document {line-height: {$FTLH}px;}
        div#document table {line-height: {$FTLH}px;}
        div#document.pagesize {width: {$DOCW}px;}
        div#document.vmargins {padding-top: {$TBMR}px; padding-bottom: {$TBMR}px;}
        div#document.hmargins {padding-left: {$LRMR}px; padding-right: {$LRMR}px;}
        div#document .section {margin-top: {$SCSP}px;}
        div#document div.firstsection {margin-top: 0;}
        div#document div.SECTION_CNTC {margin-top: 0;}
        div#document div.heading {margin-bottom: {$SHMB}px;}
        div#document div.paragraph {margin-top: {$PSPC}px;}
        div#document div.firstparagraph {margin-top: 0;}
        div#document .singlecolumn, div#document .maincolumn {margin-left: {$PIND}px; width: {$MACW}px;}
        .fontsize {font-size: {$FTSZ}px;}
        .fontface {font-family: {$FTFC};}
        div#document div.sectiontitle {font-size: {$HDSZ}px; line-height: {$HDLH}px;}
        div.name {font-size: {$NMSZ}px; line-height: {$NMLH}px;}
        div#document .thinbottomborder {border-bottom: {$LNWT}px solid;}
        div#document .lowerborder {display: {$LNWV};}
        div.address {font-size: {$CISZ}px; line-height: {$CILH}px; margin-top: {$CIMT}px;}
        div#document table.skills td {padding-top: {$TDMT}px;}
        div.resumeTitle {font-size: {$RTTL}px; line-height: {$RTLH}px;}
        div.execRsmTitle {font-size: {$ETTL}px; line-height: {$ETLH}px;}
        span.compDescWrap {margin-bottom: {$CDES}px;}

        /*FIX for Re-calculating width of singlecolumn for CL*/
        div#document .sectionCL .singlecolumn {margin-left: 0!important; width: 100%; font-size: {$FTSZ}px;}
        div.address2 {font-size: {$FTSZ}px; line-height: {$FTLH}px;}
        div#document .sectionDT {margin-top: {$SCDT}px;}
    </style>
    <style type="text/css" id="dynamic">
        div#document {line-height: 15px;}
        div#document table {line-height: 15px;}
        div#document.pagesize {width: 568px;}
        div#document.vmargins {padding-top: 33px; padding-bottom: 33px;}
        div#document.hmargins {padding-left: 22px; padding-right: 22px;}
        div#document .section {margin-top: 5px;}
        div#document div.firstsection {margin-top: 0;}
        div#document div.SECTION_CNTC {margin-top: 0;}
        div#document div.heading {margin-bottom: 0px;}
        div#document div.paragraph {margin-top: 0px;}
        div#document div.firstparagraph {margin-top: 0;}
        div#document .singlecolumn, div#document .maincolumn {margin-left: 0px; width: 568px;}
        .fontsize {font-size: 11px;}
        .fontface {font-family: Arial, Helvetica, sans-serif;}
        div#document div.sectiontitle {font-size: 12px; line-height: 16px;}
        div.name {font-size: 17px; line-height: 25px;}
        div#document .thinbottomborder {border-bottom: 1px solid;}
        div#document .lowerborder {display: inherit;}
        div.address {font-size: 10px; line-height: 14px; margin-top: 4px;}
        div#document table.skills td {padding-top: 0px;}
        div.resumeTitle {font-size: 13px; line-height: 21px;}
        div.execRsmTitle {font-size: 12px; line-height: 16px;}
        span.compDescWrap {margin-bottom: 0px;}

        /*FIX for Re-calculating width of singlecolumn for CL*/
        div#document .sectionCL .singlecolumn {margin-left: 0!important; width: 100%; font-size: 11px;}
        div.address2 {font-size: 11px; line-height: 15px;}
        div#document .sectionDT {margin-top: 10px;}
    </style>

<div id="document" class="fontsize fontface vmargins hmargins linespacing pagesize">
    <div id="SECTION_NAME763156557" class="section firstsection" style="padding-top:0px;">
        <div id="PARAGRAPH_763156557_1_494621712" class="paragraph PARAGRAPH_NAME firstparagraph" style="padding-top:0px;">
            <div class="name thinbottomborder">
                <span class="field" id="763156557FNAM1">Christopher</span><span> </span><span class="field" id="763156557LNAM1">Wieber</span>
            </div>
            <div class="myGap"></div>
            <div class="lowerborder thinbottomborder"></div>
        </div>
    </div>
    <div id="SECTION_CNTC763156568" class="section SECTION_CNTC" style="padding-top:0px;">
        <div id="PARAGRAPH_763156568_1_494621715" class="paragraph PARAGRAPH_CNTC firstparagraph" style="padding-top:0px;">
            <div class="address">
                <div>
                    <span class="field" dependency="STRT" id="763156568STRT1">2469B North Bremen St</span><span>,</span>
                    <span class="spaced field" id="763156568CITY1">Milwaukee</span><span> </span>
                    <span class="spaced field" id="763156568STAT1">WI</span><span> </span>
                    <span class="spaced field" id="763156568ZIPC1">53212</span>
                </div>
                <div>
                    <span class="field" id="763156568HPHN1"></span>

                    <span>Cell: </span><span class="field" id="763156568CPHN1">2627209254</span>
                    <span> - </span>
                    <span class="field" id="763156568EMAI1">chris.wieber@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION_SUMM763156569" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_SUMM763156569" class="sectiontitle thinbottomborder">Career Overview</div>
        </div>
        <div id="PARAGRAPH_763156569_1_494621716" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="field singlecolumn" id="763156569FRFM1"><p align="LEFT">Motivated and self-directed web developer well-versed in designing, developing and implementing interactive websites and web applications.</p></div>
        </div>
    </div>
    <div id="SECTION_HILT763156570" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_HILT763156570" class="sectiontitle thinbottomborder">Qualifications</div>
        </div>
        <div id="PARAGRAPH_763156570_1_494621717" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="singlecolumn maincolumn">
                <table class="twocol">
                    <tr>
                        <td class="field twocol_1 charspace" id="763156570SKC11"><ul><li>PHP Web Application Development </li><li>Responsive and mobile-first design</li><li>UX/UI and usability design</li><li>WordPress development</li><li>Daily use of Agile/Scrum methodologies</li></ul></td>
                        <td class="field twocol_2 charspace" id="763156570SKC21"><ul><li>Experience with a diverse set of front- and back-end frameworks</li><li>Web server administration</li><li>Database design and administration</li></ul></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="SECTION_SKLL763156572" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_SKLL763156572" class="sectiontitle thinbottomborder">Skills</div>
        </div>
        <div id="PARAGRAPH_763156572_1_494621720" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="field singlecolumn" id="763156572FRFM1"><p style="text-align: left;"><strong>Languages & Libs |</strong> HTML 5, CSS 3, JavaScript, jQuery, PHP 5.x & 7, SQL, Sass/LESS. Familiarity with Ruby</p>
                <p style="text-align: left;"><strong>Frameworks | </strong>Twitter Bootstrap, Zurb Foundation, Bourboun/Bourbon Neat, Laravel, CodeIgniter, Appcelerator Titanium. Familiarity with AngularJS, Zend 1 & 2, and Ruby on Rails.</p>
                <p style="text-align: left;"><strong>Tools/DevOps | </strong>Git version control, JetBrains YouTrack issue tracking, Atlassian Suite (JIRA, BitBucket, Confluence), Vagrant, Composer, Gulp, Grunt, Sass Compass, CI/CD with Travis and Jenkins, BDD with Behat, familiarity with TDD and PHPUnit</p>
                <p style="text-align: left;"><strong>Concepts | </strong>Responsive/adaptive/mobile-first design, web accessibility, search engine optimization, content management and strategy, agile development/Scrum, and continuous integration. Familiarity with test-driven development, unit testing, design patterns, and networking </p>
                <p style="text-align: left;"><strong>Software | </strong>Adobe CC Suite, Adobe Dreamweaver, Balsamiq Mockups, Axure RP,  PHPStorm IDE, NetBeans IDE, Sublime Text 3, Debian Linux and derivatives (Ubuntu, Mint), WordPress. Familiarity with CentOS 6, Fedora</p></div>
        </div>
    </div>
    <div id="SECTION_ACCM763156580" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_ACCM763156580" class="sectiontitle thinbottomborder">Accomplishments</div>
        </div>
        <div id="PARAGRAPH_763156580_1_494621721" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="field singlecolumn" id="763156580FRFM1"><ul><li>Developed some of the top-requested features in our software-as-a-service web application, greatly enhancing customer retention and satisfaction</li><li>Advised team leaders on several key steps of the project management process drawing on my own experience and education</li><li>Initiated the UX/UI design on the new "Military And Veterans Resource Center" website, which was later accepted as the basis for the current design.</li></ul></div>
        </div>
    </div>
    <div id="SECTION_EXPR763156583" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_EXPR763156583" class="sectiontitle thinbottomborder">Work Experience</div>
        </div>
        <div id="PARAGRAPH_763156583_1_566279175" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="jobtitle" id="763156583JTIT1">eCommerce Web Developer</span><br>
            <span>
              <span class="jobdates" format="%B %Y" id="763156583JSTD1">October 2016</span><span> to </span>
              <span class="jobdates" format="%B %Y" id="763156583EDDT1">November 2016</span>
            </span>
          </span>
                <span class="paddedline">
            <span class="companyname" id="763156583COMP1">Industries for the Blind - ibSupply.com</span><span> － </span>
            <span class="joblocation jobcity" id="763156583JCIT1">Milwaukee</span><span>, </span>
            <span class="joblocation jobstate" id="763156583JSTA1">WI</span>
          </span>
                <span class="paddedline">
            <span class="jobline" id="763156583JDES1"><div>(Laid off due to workforce reduction).</div><div class="newSpan" style="margin-left: -22px;"></div><ul><li>Helped maintain and enhance a custom eCommerce platform built on the Zend 1 Framework</li><li>Attended ZendCon 2016, greatly enhancing my understanding of Zend Framework 2 & 3</li><li>Assisted in developing an application road map for ibSupply.com with regards to framework upgrading and legacy code refactoring</li><li>Began linking company-desired third-party APIs, including a custom mail transport layer that applied the Mandrill API to select existing transactional e-mail processes with no disruption of other processes</li></ul></span>
          </span>
            </div>
        </div>
        <div id="PARAGRAPH_763156583_2_534000409" class="paragraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="jobtitle" id="763156583JTIT2">Web Application Developer</span><br>
            <span>
              <span class="jobdates" format="%B %Y" id="763156583JSTD2">April 2016</span><span> to </span>
              <span class="jobdates" format="%B %Y" id="763156583EDDT2">September 2016</span>
            </span>
          </span>
                <span class="paddedline">
            <span class="companyname" id="763156583COMP2">Powercode</span><span> － </span>
            <span class="joblocation jobcity" id="763156583JCIT2">Random Lake</span><span>, </span>
            <span class="joblocation jobstate" id="763156583JSTA2">WI</span>
          </span>
                <span class="paddedline">
            <span class="jobline" id="763156583JDES2"><ul><li>Worked as part of a team maintaining the most widely used ISP billing, customer relationship, and network management software in the world.</li><li><span class="">Troubleshot and resolved web application issues and bugs escalated from customer support and other departments with a 100% success rate.</span></li><li><span class="">Introduced new planning and development paradigms to the company, helping upper management prioritize projects and budget effectively</span></li><li>Engaged with third-party vendors to develop APIs and third-party software integrations, enhancing the value of our software</li></ul></span>
          </span>
            </div>
        </div>
        <div id="PARAGRAPH_763156583_3_494621722" class="paragraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="jobtitle" id="763156583JTIT3">Web Specialist</span><br>
            <span>
              <span class="jobdates" format="%B %Y" id="763156583JSTD3">May 2015</span><span> to </span>
              <span class="jobdates" format="%B %Y" id="763156583EDDT3">December 2015</span>
            </span>
          </span>
                <span class="paddedline">
            <span class="companyname" id="763156583COMP3">UW Finance and Accounting Services - Human Resources</span><span> － </span>
            <span class="joblocation jobcity" id="763156583JCIT3">Milwaukee</span><span>, </span>
            <span class="joblocation jobstate" id="763156583JSTA3">WI</span>
          </span>
                <span class="paddedline">
            <span class="jobline" id="763156583JDES3"><UL><LI>Provided, guidance, UX/UI design and wireframes to a third party developer, bringing the UW Jobs site closer to brand and identity standards</LI><LI>Conducted full content inventory and information architecture on the HR website, preparing for our move to WordPress</LI><LI>Worked with all departments to develop a robust and scalable content management strategy going forward.</LI><LI>Developed prototype themes and applications for the department's migration to WordPress in PHP, HTML, CSS, and jQuery, and maintained software written in Adobe ColdFusion.</LI></UL></span>
          </span>
            </div>
        </div>
        <div id="PARAGRAPH_763156583_4_494621732" class="paragraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="jobtitle" id="763156583JTIT4">Web Designer/Developer</span><br>
            <span>
              <span class="jobdates" format="%B %Y" id="763156583JSTD4">July 2013</span><span> to </span>
              <span class="jobdates" format="%B %Y" id="763156583EDDT4">May 2015</span>
            </span>
          </span>
                <span class="paddedline">
            <span class="companyname" id="763156583COMP4">UW Student Union Marketing</span><span> － </span>
            <span class="joblocation jobcity" id="763156583JCIT4">Milwaukee</span><span>, </span>
            <span class="joblocation jobstate" id="763156583JSTA4">Wisconsin</span>
          </span>
                <span class="paddedline">
            <span class="jobline" id="763156583JDES4"><UL><LI>Updated and managed existing website properties using the WordPress platform.</LI><LI>Produced HTML/CSS prototypes for projects with a web component, faithfully implementing the graphic designer's vision</LI><LI>Worked with a diverse team of creative professionals to meet the client's needs</LI><LI>Used PHP, HTML, CSS, jQuery, MySQL develop fully functional and interactive WordPress templates and plug-ins in support of Union Marketing campaigns</LI></UL></span>
          </span>
            </div>
        </div>
        <div id="PARAGRAPH_763156583_5_494621733" class="paragraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="jobtitle" id="763156583JTIT5">13F1P - Fire Support Specialist (Airborne)</span><br>
            <span>
              <span class="jobdates" format="%B %Y" id="763156583JSTD5">March 2007</span><span> to </span>
              <span class="jobdates" format="%B %Y" id="763156583EDDT5">August 2011</span>
            </span>
          </span>
                <span class="paddedline">
            <span class="companyname" id="763156583COMP5">United States Army</span><span> － </span>
            <span class="joblocation jobcity" id="763156583JCIT5">Vicenza</span><span>, </span>
            <span class="joblocation jobstate" id="763156583JSTA5">Italy</span>
          </span>
                <span class="paddedline">
            <span class="jobline" id="763156583JDES5"><UL><LI>Planned and executed indirect fire support via artillery, mortars, and close air support</LI><LI>Personally called upon to maintain and troubleshoot complex tactical database systems for subordinate units</LI><LI>Trained both United States and Afghan military personnel in field artillery call-for-fire operations</LI><LI>Optimized return-fire procedure, reducing response time to indirect attacks to an average of 90 seconds while completely mitigating collateral damage</LI></UL></span>
          </span>
            </div>
        </div>
    </div>
    <div id="SECTION_EDUC763156592" class="section" style="padding-top:0px;">
        <div class="heading">
            <div id="SECTNAME_EDUC763156592" class="sectiontitle thinbottomborder">Education and Training</div>
        </div>
        <div id="PARAGRAPH_763156592_1_494621734" class="paragraph firstparagraph" style="padding-top:0px;">
            <div class="singlecolumn">
          <span class="paddedline">
            <span class="degree" dependency="DGRE" id="763156592DGRE1">Bachelor of Science</span>
            <span> : </span>
            <span class="programline" dependency="STUY" id="763156592STUY1">Information Science and Technology</span><span>, </span>
            <span class="jobdates" id="763156592GRYR1">2016</span>
          </span>
                <span class="paddedline">
            <span class="companyname companyname_educ" dependency="SCHO" id="763156592SCHO1">University of Wisconsin - Milwaukee</span>
            <span> － </span>
            <span class="joblocation jobcity" id="763156592SCIT1">Milwaukee</span><span>, </span>
            <span class="joblocation jobstate" id="763156592SSTA1">WI</span>
            <span class="joblocation jobstate" id="763156592SCNT1"></span>
          </span>

                <span class="paddedline">
            <span class="field" id="763156592FRFM1"><p align="LEFT"><span style="line-height: 1.5;">Coursework in Web Design and Development, Database Design and Administration, Information Architecture, Usability, and Systems Analysis. Core coursework completed, wrapping up final requirements online. </span></p></span>
          </span>
            </div>
        </div>
    </div>
</div>

@endsection