<title>Welcome! | LinkedIn</title>

	


</head>


<body id="pagekey-iwe_reconnect" class="en member v2  chrome-v5 chrome-v5-responsive sticky-bg js ">
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
								<input id="main-search-box" class="search-term yui-ac-input" type="text" autocomplete="off" value="" name="keywordsbox" placeholder="Search for people, jobs, companies, and more..." />
								<span id="search-typeahead-container"></span>
							</span>
						</div>
						<button class="search-button" type="submit" value="Search" name="search">
							<span>Search</span>
						</button>
					</fieldset>
					<div class="advanced-search-outer">
						<div class="advanced-search-inner">
							<a id="advanced-search" class="advanced-search" href="<?php echo base_url();?>/index.php/search/search">Advanced </a>
						</div>
					</div>
				</form>
			</div>
			
			<div class="header-section last-child">
				<ul id="control_gen_5" class="nav utilities" role="navigation">
										<li class="nav-item activity-tab">
						<a class="activity-toggle notifications-alert" href="<?php echo base_url();?>index.php/connections/connection" > Notifications</a>
						<div id="notifications" class="activity-container">
							<div class="activity-drop">
								<div class="activity-drop-header">
									<h3>Notifications <span class="sub-nav-header-arrow" role="presentation"></span></h3>
								</div>
								<div id="control_gen_25" class="activity-drop-body">
									<ol class="li-scroll-content">
									
										<li class="update first single"> <!-- Class="first" added -->
											<span class="timestamp">21d</span>
											<div class="photo"><img width="40" height="40" src="images/ghost_profile_40x40_v1.png"></div>
											<div class="action">
												<span id="showText" class="name"></span>
												<span class="headline">Student at The University of Hong...</span>
												<a class="btn-primary" style="margin: 5px 5px 5px 0; text-align: center; width: 50px;">Connect</a>
												<a class="btn-secondary" style="margin: 5px 5px 5px 0; text-align: center; width: 50px;">Ignore</a>
												<!--<strong>is now a connection</strong>-->
											</div>
											<a href="#" class="notification-link">View Profile</a>
										</li>
										<li class="update single"> <!-- "first" is only for first element. it doesnt belong here :p -->
											<span class="timestamp">21d</span>
											<div class="photo"><img width="40" height="40" src="images/ghost_profile_40x40_v1.png"></div>
											<div class="action">
												<span id="showText" class="name"></span>
												<span class="headline">Student at The University of Hong...</span>
												<strong>is now a connection</strong>
											</div>
											<a href="#" class="notification-link">View Profile</a>
										</li>
									</ol>
								</div>
							</div>
						</div>
					</li>

					<li class="nav-item activity-tab"><a class="activity-toggle add-connections-btn" href="<?php echo base_url();?>index.php/connections/connection">Add Connections</a></li>
					<!--<li class="nav-item account-settings-tab"><a class="account-toggle" href="<?php echo base_url();?>index.php/search/upload_picture"><img src="<?php echo base_url(); echo $pic_url; ?>" width="20" height="20" /></a></li> -->
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
<div id="body" class="">
<div class="wrapper hp-nus-wrapper">
<div id="main" class="home-member-new grid-f">
<div id="content">
<div id="feed-nhome" class="feed feed-nhome feed-redesign">
<div class="filter-cont rt-filter-cont">
<div id="slick-sharing-cont" class="post-home is-view share-box rt-filter-cont">
<img class="member-photo animated-member-photo" src="<?php echo $big_Pic?>" width="60" height="60" alt="faheem" src="abc" style="margin-top: 15px;" />
<div id="post-module" class="post-module">
<div class="post-module-in">
<form id="share-form" class="doc-sharing-form post" enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>/index.php/home/home/updatePost">
<div id="post-module-neu" class="enable-slideshare mentions-enabled transition active active_message">
<div id="share-entity-mentions-container" class="mentions-container">

<textarea id="postText-postModuleForm" class="post-message mentions-input" cols="40" rows="2" name="newPost" placeholder="Share an update..." data-base-height="15"></textarea>
<div  style=" background: url(<?php echo base_url();?>uploads/uploadpic.png); background-repeat:no-repeat;margin: -50px -200px 0 0; float: right;">
<input id="uploadImage" type="file" accept="image/jpeg" name="image"  style="filter: alpha(opacity=0);opacity: 0; cursor: pointer;" />
</div>

</div>
<div class="post-actions">
<div class="submit">
<select name="chooser">
<option value="1" selected>Share with: Connections</option>
<option value="0">Share with: Public</option>
<option >Share with: Public + Twitter</option>
</select>
<input id="share-submit" class="btn-primary" type="submit" value="Share" name="post">
<img id="uploadPreview" style="display:none;border: 0;
		border-radius: 3px;
		-webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
        width:300px;
        height:177px;
        "/>


</div>
</div>
</div>
</form>
</div>
</div>                
</div>
</div>
<div class="content">
<div id="feed-wrapper">
<div id="feed-content">
<ul id="my-feed-post" class="chron katify">
<?php if ($allposts!=NULL) { ?>
<?php foreach ($allposts as $row) { ?>
<li class="feed-item linkedin-profile-update">

<a href="#"><img id="" class="feed-photo photo" src="<?php echo 'uploads/30_'.$row->imageUrl .'.jpg' ?>" alt="" /></a>
<div class="feed-body"></div>
<a href="#" style="float:right">x</a>
<div class="feed-content">
<div class="annotated-body">
<span><strong><a href="#"><?php echo $row->fname.' '.$row->lname ?></a></strong></span>
<span><?php echo $row->description ?></span>
<?php if($row->post_link != NULL){?>
<span><a class="embedly-card" href="<?php echo $row->post_link ?>"></a></span>
<script>!function(a){var b="embedly-platform",c="script";if(!a.getElementById(b)){var d=a.createElement(c);d.id=b,d.src=("https:"===document.location.protocol?"https":"http")+"://cdn.embedly.com/widgets/platform.js";var e=document.getElementsByTagName(c)[0];e.parentNode.insertBefore(d,e)}}(document);</script>
<?php }?>
</div>
<div class="share-object linkedin-profile-snapshot ">
<div class="properties">
<div class="share-desc">
<span class="property-label"></span>
<a href="#"></a>
</div>
</div>
</div>
</div>
<div >
	<img src="<?php echo base_url();?>uploads/<?php echo $row->picturepath;?>.jpg" style="<?php if($row->picturepath==NULL) echo 'display:none';else echo'display:block';?>" >
	</div>
<div class="feed-item-meta">
<ul class="feed-actions">
<li class="feed-like"><span class="show-like"><a href="#">Like</a></span></li>
<li class="feed-comment"><a class="focus-comment-form">Comment</a></li>
</ul>
<span class="nus-timestamp"><?php echo $row->timeofpost?></span></div>

<div class="comments">
	
<ul>
<?php if($row->comments != NULL) { ?>
<?php foreach ($row->comments as $comment) { ?>
<a href="#" style="float:right; padding-right: 10px">x</a>
<li class="comment-item first nus-mid-208236160">
<div class="bubble"></div>
<a href="#"><img id="" class="feed-photo photo" width="30" height="30" alt="" src="<?php echo 'uploads/30_'.$comment->imageUrl.'.jpg' ?>"></a>
<p><span class="new-miniprofile-container"><a href="#"><?php echo $comment->fname.' '.$comment->lname ?></a></span></p>
<q id="">
<span class="commentary"><?php echo $comment->description ?></span>
</q>
<span class="nus-timestamp"> <?php echo $comment->timeofcomment ?> </span>
</li>
<?php }} ?>
</ul>
</div>
<div class="form mini">
<form method="post" action="<?php echo base_url();?>/index.php/home/home/updateComment">
<div class="mentions-container">
<input type="hidden" name="postID" id="postID" value="<?php echo $row->postID ?>" />
<textarea class="texta comment-text mentions-input" placeholder="Add a comment…" style="height: 40px;" name="comment"></textarea>
</div>
<div class="actions">
<input class="btn-primary" type="submit" value="Comment" />
</div>
</form>
</div>


</li>
<?php }} ?>
</ul>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
	<div class="footer">
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
</body>
  <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type = "text/javascript">
		$('#mydiv').click(function()
		{
			alert("dasasd");
			$.ajax(

			url:"",
			type:"POST",
			success: function (data)
			{
				alert(data);
			},
			error:function ()
			{
				alert('error');
			}
		);
		});
				
		</script>

</html>
