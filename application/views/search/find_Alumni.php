
<title>Alumni | LinkedIn</title>
<link rel="shortcut icon" href="images/favicon.ico" />

</head>

<body id="pagekey-college-alumni" class="en member v2  chrome-v5 chrome-v5-responsive background-v4 sticky-bg js  js">
<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1">
	<div id="top-header">
		<div class="wrapper">
			<div class="header-section first-child">
				<h2 class="logo-container">
					<a id="in-logo" class="logo" href="#"> LinkedIn </a>
				</h2>
				<form action="<?php echo base_url();?>index.php/search/search/search_keyword" method="post" name="process" id="global-search" class="global-search voltron voltron-vertical-selector">
					<fieldset>
						<legend>Find People, Jobs, Companies, and More</legend>
						<div id="control_gen_2" class="search-scope global-nav-styled-dropdown">
							<label for="main-search-category">Search for: </label>
							<span class="label">
								<span class="styled-dropdown-select-all">All</span>
							</span>
							<select id="main-search-category" class="search-category" name="type">
								<option class="all" value="all" title="">All</option>
								<option class="people" value="people" title="">People</option>
								<option class="jobs" value="jobs" title="">Jobs</option>
								<option class="companies" value="companies" title="">Companies</option>
								<option class="groups" value="groups" title="">Groups</option>
								<option class="edu" value="edu" title="">Edu</option>
								<option class="inbox" value="inbox" title="">Inbox</option>
							</select>
							<ul class="search-selector">
								<li class="all option first selected highlighted"><div>All</div></li>
								<li class="people option"><div>People</div></li>
								<li class="jobs option"><div>Jobs</div></li>
								<li class="companies option"><div>Companies</div></li>
								<li class="groups option"><div>Groups</div></li>
								<li class="edu option"><div>Universities</div></li>
								<li class="inbox option"><div>Inbox</div></li>
							</ul>
						</div>
						<div id="search-box-container" class="search-box-container">
							<span id="search-autocomplete-container" class="/typeahead">
								<input id="main-search-box" class="search-term yui-ac-input" type="text" autocomplete="off" value="" name="keywords" placeholder="Search for people, jobs, companies, and more..." />
								<span id="search-typeahead-container"></span>
							</span>
						</div>
						<button class="search-button" type="submit" value="Search" name="search">
							<span>Search</span>
						</button>
					<div class="advanced-search-outer">
						<div class="advanced-search-inner">
							<a id="advanced-search" class="advanced-search" href="<?php echo base_url();?>/index.php/search/search">Advanced </a>
						</div>
					</div>
				</form>
			</div>
			
			<div class="header-section last-child">
				<ul id="control_gen_5" class="nav utilities" role="navigation">
										<li class="nav-item activity-tab" onclick="ajaxNotifications();" >
						<div class="activity-toggle notifications-alert"  > Notifications</div>
						<div id="notifications" class="activity-container">
							<div class="activity-drop">
								<div class="activity-drop-header">
									<h3>Notifications <span class="sub-nav-header-arrow" role="presentation"></span></h3>
								</div>
								<div id="control_gen_25" class="activity-drop-body">
									<ol class="li-scroll-content" id="notificationUpdate">
									
										
										
									</ol>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item activity-tab"><a class="activity-toggle add-connections-btn" href="<?php echo base_url();?>index.php/connections/connection">Add Connections</a></li>
					<li class="nav-item account-settings-tab">
						<a class="account-toggle" href="<?php echo base_url();?>index.php/search/upload_picture">
							<img src="<?php echo base_url(); echo $pic_url; ?>" width="20" height="20" />
						</a>
						<div id="account-sub-nav" class="account-sub-nav">
							<div class="account-sub-nav-options">
								<div class="account-sub-nav-header">
									<h3>Account &amp; Settings <span class="sub-nav-header-arrow" role="presentation"></span></h3>
								</div>
								<div class="account-sub-nav-body">
									<ul class="account-settings">
										<li class="self">
											<div class="account-settings-link">
												<span class="act-set-row">
													<span class="act-set-icon">
														<a href="<?php echo base_url();?>index.php/login/login/do_logout "><span class="act-set-icon-image" role="presentation">
															<img class="img-defer profile-photo" width="20" height="20" src="<?php echo base_url(); echo $pic_url; ?>" />
														</span></a>
													</span>
													<span class="act-set-name">
														<a class="act-set-name-split-link" href="<?php echo base_url();?>index.php/login/login/do_logout"><?php echo $fullname ?></a>
													</span>
													<span class="act-set-action">
														<a class="account-submenu-split-link" href="<?php echo base_url();?>index.php/login/login/do_logout">Sign Out</a>
													</span>
												</span>
											</div>
										</li>
										<li class="account-type">
											<a class="account-settings-link">
												<span class="act-set-row">
													<span class="act-set-icon"><span class="act-set-icon-image"></span></span>
													<span class="act-set-name">Account: Basic</span>
													<span class="act-set-action">Upgrade</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="responsive-nav-scrollable" class="responsive-nav">
		<div class="wrapper">
			<ul id="control_gen_6" class="nav main-nav" role="navigation">
				<li class="nav-item"><a href="" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="" class="nav-link">Profile</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Edit Profile</a></li>
						<li><a href="">Who viewed your Profile</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="" class="nav-link">Network</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Contacts</a></li>
						<li><a href="">Add Connections</a></li>
						<li><a href="<?php echo base_url();?>index.php/alumni/alumni">Find Alumni</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="" class="nav-link">Jobs</a></li>
				<li class="nav-item"><a href="" class="nav-link">Interests</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Companies</a></li>
						<li><a href="">Groups</a></li>
						<li><a href="">Influencers</a></li>
						<li><a href="">Education</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id="body" class="globalnav-showStop">
	<div class="wrapper hp-nus-wrapper">
		<div id="alumni" class="active">
			<div id="container-ptc-header">
				<div class="cmpt-ptc-header">
					<div class="edu-header-wrapper">
						<div class="edu-header mini-header">
							<div class="sharing-module">
								<span class="share-label">Share: </span>
								<ul class="share-providers">
									<li><a class="share-icon linkedin" href="">Share on LinkedIn</a></li>
									<li><a class="share-icon twitter" href="">Share on Twitter</a></li>
									<li><a class="share-icon facebook" href="">Share on Facebook</a></li>
								</ul>
							</div>
							<div class="header-title">
								<h2 class="title"><?php echo $uni_name ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-control-bar">
				<div class="typeahead-results-container alumni-typeahead-results-container facet-typeahead-results-container yui-ac-container"> </div>
				<div class="cmpt-ptc-control-bar">
					<div class="date-wrapper attended">
						<div class="select-wrapper">
							<div class="action-menu styled-dropdown year">
								<span class="label" style="float:left">
									<span class="text"> Attended </span>
									<span class="drop-down-arrow"></span>
								</span>
								<select class="date-type">
									<option selected="" value="attended">Attended</option>
									<option value="graduated">Graduated</option>
								</select>
							</div>
						</div>
						<span class="date-dropdown attended">
							<select onChange="ajax_post();" class="start-date date-input" name="startDate" id="startDate">
								<option selected="" value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>									
							</select>
							<span class="date-separator">to</span>
							<select onChange="ajax_post();" class="end-date date-input" name="endDate" id="endDate">
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option selected="" value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
							</select>
						</span>
						<span class="no-date-wrapper">
							<input id="show-with-no-date" type="checkbox" name="show-with-no-date" />
							<label for="show-with-no-date">Include people with no dates</label>
						</span>
					</div>
					<div class="more-schools-wrapper">
						<div class="more-schools">
							<a class="btn-quaternary" data-li-action="show-more-schools" href="#"> 
								Change school
								<span class="drop-down-arrow"></span>
							</a>
						</div>
					</div>					
				</div>
			</div>
			<div id="container-ptc-facet-bar">
				<div class="cmpt-ptc-facet-bar cf">
					<div class="container-cmpt-bucket-bar cf"></div>
					<div class="top-shadow"></div>
					<div class="carousel carousel-first">
						<button class="carousel-button carousel-previous" title="View previous interactive graphs">
							<span class="alumni-icon carousel-previous"></span>
						</button>
						<div class="carousel-viewport">
							<ul class="facets" style="left: 0px;">
								<li class="cmpt-ptc-facet facet has-typeahead first">
									<h2>Where they live</h2>
									<ul>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $pCount?></span>
												<label>Pakistan</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $pCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $iCount?></span>
												<label>India</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $iCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $fCount?></span>
												<label>France</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $fCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
									</ul>
									<span class="collapse-facet-wrapper">
										<button class="search-facet" type="button"></button>
									</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-guide-module"></div>
			<div id="container-ptc-status-bar">
				<div class="cmpt-ptc-status-bar cf">
					<div class="call-out-arrow"></div>
					<div class="results-wrapper">
						<span class="num-results-label"><?php echo $total_count ?> students &amp; alumni found</span>
						<span class="hide-connections-wrapper">
							<input id="hide-my-connections" type="checkbox" name="hide-my-connections" />
							<label for="hide-my-connections">Hide my connections</label>
						</span>
					</div>
					<div class="search-wrapper">
						<form id="school-form" name="school-form" action="#">
							<div class="search-box-wrapper">
								<input id="pt-keywords" type="text" name="pt-keywords" placeholder="Search profiles" />
								<button class="search-box-submit active" type="submit">Search profiles</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="container-ptc-people-results">
				<div class="cmpt-ptc-people-results cf">
					<div class="content active">
						<ul class="people-cards">
							<?php if($list!=NULL){foreach ($list as $res){ ?>
							<form action="<?php echo base_url();?>index.php/search/search/redirecttoconfirm" method="post">
							<input type="hidden" name="friendid" value=<?php echo $res->userid; ?> />
							<li class="person">
								<a class="profile-link">
									<img alt="<?php echo $res->fname ?>" src="<?php echo 'uploads/100_'.$res->imageUrl.'.jpg' ?>" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#"><?php echo $res->fname.' '.$res->lname ?></a>
										</div>
									</h3>
									<p class="headline">Student at <?php echo $uni_name ?></p>
									<ul class="specifics">
										<li class="first"><?php echo $res->Country ?></li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<button class="primary-action-button" title="Invite <?php echo $res->fname ?> to connect" type="submit" value="<?php echo $res->userid ?>" name="addignore">Add Connection</button>
									<span class="divider"> </span>
								</div>
							</li>
						</form>
						<?php }} ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="find-group">
				<span class="alumni-logo"></span>
				<span class="get-reconnected">JOIN YOUR ALUMNI GROUP</span>
				<span class="content">Share ideas, find opportunities and get back in touch.</span>
				<a class="btn-ternary" id="find-group-link" href="">Find Group »</a>	
			</div>
		</div>
	</div>
</div>
	<div class="footer" style="border-top: 0 transparent solid;">
		<ul class="footer-links">
			<li class="bold"><a href="#"><strong>Help Center</strong></a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Press</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Advertising</a></li>
			<li><a href="#">Talent Solutions</a></li>
			<li><a href="#">Tools</a></li>
			<li><a href="#">Mobile</a></li>
			<li><a href="#">Developers</a></li>
			<li><a href="#">Publishers</a></li>
			<li><a href="#">Language</a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><a href="#"><strong>Upgrade Your Account</strong></a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><img src="<?php echo base_url();?>/assets/css/images/logo-footer.png" alt="Footer Logo" /></li>
			<li><a href="#">User Agreement </a></li>
			<li><a href="#">Privacy Policy </a></li>
			<li><a href="#">Community Guidelines </a></li>
			<li><a href="#">Cookie Policy </a></li>
			<li><a href="#">Copyright Policy </a></li>
		</ul>
	</div> <!-- END: FOOTER -->
	
	<script  type="text/javascript">
	function ajax_post(){
			document.write("helloworld");
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "<?php base_url()?>/index.php/alumni/findAlumni";
    var thumbnailbox = document.getElementById("container-ptc-people-results");
    var fn = document.getElementById("startDate").value;
    var ln = document.getElementById("endDate").value;
    var vars = "startDate="+fn+"&endDate="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
		    thumbnailbox.innerHTML = '';
			for(var o in d){

                if(d[o].src){
                    thumbnailbox.innerHTML += "<form action='<?php echo base_url();?>index.php/search/search/redirecttoconfirm' method='post'>
							<input type='hidden' name='friendid' value='"d->userid"' />
							<li class='person'>
								<a class='profile-link'>
									<img alt='"d->fname" + ' ' + "d->lname" src='uploads/100_'.'"d->imageUrl"'.'.jpg' />
								</a>
								<div class='details'>
									<h3 class='full-name'>
										<div class='distance'>
											<a class='profile-link' href="#">"d->fname"</a>
										</div>
									</h3>
									<p class='headline'>Student at $uni_name</p>
									<ul class='specifics'>
										<li class='first'>"d->Country"</li>
									</ul>
								</div>
								<div class='ft'>
									<span class='connect-logo'></span>
									<button class='primary-action-button' title='Invite "d->fname" to connect' type='submit' value='"d->userid" name='addignore'>Add Connection</button>
									<span class='divider'> </span>
								</div>
							</li>
						</form>";
                }

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    
}



}

  function ajaxNotifications(){

    var hr = new XMLHttpRequest();

    hr.open("POST", "<?php echo base_url()?>/index.php/notifications/notifications/getfriendListAJAX", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var data = JSON.parse(hr.responseText);
		//    alert(data);
			document.getElementById("notificationUpdate").innerHTML= "";
			for(var obj in data){

				document.getElementById("notificationUpdate").innerHTML+="<form action='<?php echo base_url();?>index.php/connections/connection/acceptfriend' method='post' name='process' id='add-friend'><li class='update single'> <span class='timestamp'></span><div class='photo'><img width='40' height='40' src='<?php echo base_url();?>uploads/30_"+data[obj].imageUrl+".jpg"+"'></div><div class='action'><span id='showText' class='name'>"+data[obj].fullname+"</span><input name='friendid' type='hidden' value='"+data[obj].userid+"'><button type='submit' value='Connect' name='addignore' class='btn-primary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Connect</button><button type='submit' value='Ignore' name='addignore' class='btn-secondary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Ignore</button></div></li></form>";


				//results.innerHTML += "Property A: "+data[obj].propertyA+"<hr />";
				
			}
	    }
    }
    hr.send();
    document.getElementById("notificationUpdate").innerHTML = "<li class='update single'><p>No pending requests..</p></li>";

}


</script>






</body>

</html>
