<?php

//* Template Name: Roadmap

//* Reposition the entry meta in the entry header
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
add_action( 'genesis_entry_header', 'genesis_do_post_title', 13 );

//* Add custom body class to the head
add_filter( 'body_class', 'ambiance_add_body_class' );
function ambiance_add_body_class( $classes ) {

   $classes[] = 'ambiance-landing';
   return $classes;

}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );



//* Remove site footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

//* Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Remove default Genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Add new custom loop
add_action( 'genesis_loop', 'child_custom_loop' );


/**
 * Execute child loop
 */
function child_custom_loop() { ?>
<div class="wrapper">
<div class="entry-content" itemprop="text">
	<div class="roadmap-header"><h1 class="headerRFID">RFID</h1><h1 class="headerInsider">INSIDER</h1></div>
	<div class="roadmap-banner">
		<h1 class="backgroundClip" data-text="ROADMAP">ROADMAP</h1>
</div>
<div class="roadmap-content">
	<div class="intro-container">
			<h1>Start</h1>
		<div class="intro-paragraph">
			<p>This roadmap will help you navigate the wealth of information on the RFID Insider blog. Whether your current level of knowledge is beginner, internmediate, or advanced - this guide will help you decide where to start or continue learning about RFID. If you don't see something specific that you are looking for here, hundreds of additional posts are available on our blog, as well as eBooks, Infographics, and Videos on our Resources page and YouTube channel. As always, contact us with any questions you may have.</p>
		</div>
		<div class="map-key">
			<h2>Map Key</h2>
			<div class="button-list">
			 <div class="list-column1">
          <ul>
            <li class="yellow">
              <span class="yellow_bullet"></span>
              <p>What is RFID?</p>
            </li>
            <li class="pink">
              <span class="pink_bullet"></span>
              <p>Learning About RFID Readers</p></li>
            <li class="blue">
              <span class="blue_bullet"></span>
              <p>Learning About RFID Antennas</p></li>
            <li class="navy">
              <span class="navy_bullet"></span>
              <p>Learning About RFID Tags</p></li>
            <li class="orange">
              <span class="orange_bullet"></span>
              <p>Hardware, Software, and Firmware's Role in RFID</p></li>
          </ul>
         </div>
        <div class="list-column2">
          <ul>
            <li class="coral">
              <span class="coral_bullet"></span>
              <p>Auxiliary Equipment</p></li>
            <li class="gray">
              <span class="gray_bullet"></span>
              <p>Advanced Principles</p></li>
            <li class="green">
              <span class="green_bullet"></span>
              <p>Getting the Best Performance Out of Your Equipment</p></li>
            <li class="purple">
              <span class="purple_bullet"></span>
              <p>Deploying Your RFID System</p></li>
            <li class="red">
              <span class="red_bullet"></span>
              <p>Different Types of RFID</p></li>
          </ul>
         </div>
			</div>
		</div>
		<div class="intro-close">
			<p>For a quicker, crash course through RFID - follow the starred posts.</p>
		</div>
	</div>
	<div class="learning-path">
    <div class="winding-path">
      <img class="style-svg" src="../wp-content/themes/ambiance-pro/Roadmap/images/Path.svg" alt="Winding Path">
    </div>
		<div class="learning-path-content">
			<ul>
				<li class="whatIsRFID">
          <p class="yellow_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/what-is-rfid?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=What-is-RFID">What is RFID?</a></p>
					<p>Learn the basics about RFID - along with what it isn't, it's history, and popular applications.</p>
				</li>
				<li class="a_guide_to_rfid_types">
          <p class="yellow_circle circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/types-rfid-how-they-are-used?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Types-of-RFID">A Guide to Types of RFID and How They Are Used</a></p>
					<p>Walk through the 3 basic frequencies associated with RFID and learn how they are used today.</p>
				</li>
				<li class="beginners_guide align_center_for_small_screens">
          <p class="yellow_circle yellow_circle_left circle_center_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/basics-of-an-rfid-system-ebook?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Basics-Guide">The Beginner's Guide to RFID Systems</a></p>
					<p>Understand the different types of hardware that make up an RFID system.</p>
          </li>
				<li class="real_world_applications">
          <p class="yellow_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/what-is-rfid-used-for-in-applications?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=RFID-in-Applications">How is RFID Used in Real World Applications?</a></p>
					<p>See how RFID is being used in various applications all over the world</p>
				</li>
				<li class="uhf_rfid_readers">
          <p class="pink_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/how-to-select-uhf-rfid-reader?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Select-A-Reader">How to Select a UHF RFID Reader</a></p>
					<p>Read about how RFID readers vary in operating frequency, region, and antenna ports.</p>
				</li>
				<li class="integrated_vs_fixed align_center_for_small_screens">
          <p class="pink_circle pink_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/integrated-rfid-readers-vs-non-integrated-rfid-readers?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Integrated-vs-Fixed">Integrated vs. Fixed RFID Readers</a></p>
					<p>Understand the different types of hardware that make up an RFID system.</p>
				</li>
				<li class="intro_rfid_readers">
          <p class="pink_circle circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/rfid-readers-basic-options-features?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Reader-Basic-Options">Intro to RFID Readers: Basic Options & Features</a></p>
					<p>Decide which RFID reader features and options are needed for your application.</p>
				</li>
				<li class="choosing_passive_rfid_antenna align_center_for_small_screens">
          <p class="blue_circle blue_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/choose-right-rfid-antenna?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Choose-RFID-Antenna">3 Guidelines For Choosing A Passive UHF RFID Antenna</a></p>
					<p>Review the 3 basic guidelines of selecting a UHF RFID antenna: frequency, gain & beamwidth, and polarization.</p>
				</li>
				<li class="circular_polarization">
          <p class="blue_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/circular-polarization-vs-linear-polarization?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Linear-vs-Circular">Circular Polarization vs. Linear Polarization: Which is the Right RFID Antenna</a></p>
					<p>Know the difference between circular and linear polarization; choosing incorrectly could mean the difference between a 99% tp 0% read rate.</p>
				</li>
				<li class="understanding_antennas">
          <p class="blue_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/near-field-vs-far-field-rfid-antennas?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=NF-vs-FF">Understanding Near-Field and Far-Field Antennas</a></p>
					<p>Select the right type of antennas for your application - near-field (proximity to just over a foot) or far-field (a few to many feet).</p>
				</li>
				<li class="beamwidth_directivity align_center_for_small_screens">
          <p class="blue_circle blue_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-antennas-beamwidth-directivity?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Beamwidth-Directivity">RFID Antennas: Beamwidth & Directivity</a></p>
					<p>Understand where the RFID antenna will direct RF energy in order to help define a read zone.</p>
				</li>
				<li class="choosing_rfid_antenna">
          <p class="blue_circle circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/tactics-for-choosing-an-antenna?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Choosing-RFID-Antenna">#9 Tactics For Choosing An RFID Antenna</a></p>
					<p>Take a comprehensive look at the key specifications used to select the right antenna for any RFID application</p>
				</li>
				<li class="rfid_tag_basics align_center_for_small_screens">
          <p class="navy_circle navy_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-tag-basics?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=RFID-Tag-Basics">RFID Basics: How RFID Tags Work</a></p>
					<p>Learn the methods by which RFID tags communicate.</p>
				</li>
				<li class="parts_of_a_tag">
          <p class="navy_circle circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/parts-of-a-tag?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Parts-of-a-Tag">Parts of an RFID Tag</a></p>
					<p>A visual guide to the different parts of an RFID tag.</p>
				</li>
				<li class="things_to_know_about_tags">
          <p class="navy_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/basics-of-uhf-passive-rfid-tags?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=UHF-Tag-Basics">3 Things to Know About UHF RFID Tags</a></p>
					<p>Discover the 3 core differences that separate one RFID tag from another.</p>
				</li>
				<li class="best_tag align_center_for_small_screens">
          <p class="navy_circle navy_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/best-rfid-tag-application?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Best-Tag-For-Your-Application">The Best RFID Tag For Your Application: 7 Key Factors to Consider</a></p>
					<p>Choose the best RFID tag for your application using these 7 guidelines.</p>
				</li>
				<li class="rfid_on_metal">
          <p class="navy_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-tags-on-metal-surfaces?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Tags-on-Metal-Surfaces">RFID on Metal: A Few Things You Should Know about RFID and Metal Surfaces</a></p>
					<p>Mitigate interference associated with on-metal tagging using these helpful tips.</p>
				</li>
				<li class="memory_in_rfid_tags">
          <p class="navy_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/types-of-memory-in-gen-2-uhf-rfid-tags?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Memory-Gen-2-Tags">Types of Memory in RFID Tags</a></p>
					<p>Know what each memory bank does and when you should use it.</p>
				</li>
				<li class= "firmware_middleware_software align_center_for_small_screens">
          <p class="orange_circle  orange_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/software-firmware-middleware-difference?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Software-Firmware-Middleware">Firmware, Middleware, Software: What's the Difference?</a></p>
					<p>Differentiate between the 3 types of software and understand how each can be used in an RFID system.</p>
				</li>
				<li class="rfid_firmware">
          <p class="orange_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-firmware-8-common-questions-answered?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Firmware-Questions">RFID Firmware: 8 Common Questions Answered</a></p>
					<p>Learn about keeping your reader's firmware functioning properly.</p>
				</li>
				<li class="middleware_can_help">
          <p class="orange_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/6-things-rfid-middleware-can-do-for-you?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=How-Middleware-Can-Help">6 Things RFID Middleware Can Do For You</a></p>
					<p>Find out how middleware can take RFID reads and turn them into real, manageable data in other software programs.</p>
				</li>
				<li class="cables_connectors_adapters align_center_for_small_screens">
          <p class="coral_circle coral_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/a-guide-to-cables-connectors-adapters?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Cables-Connectors-Adapters">A Guide to Cables, Connectors, and Adapters</a></p>
					<p>Avoid some of the most common purchasing mistakes that center around RFID cables and connectors.</p>
				</li>
				<li class="layers_rfid_printer">
          <p class="coral_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/layers-parts-rfid-printer?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Layers-RFID-Printer">The Layers & Parts of an RFID Printer</a></p>
					<p>Read about how these printers can save time and money.</p>
				</li>
				<li class="investing_rfid_printer">
          <p class="coral_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-printer-when-should-i-invest?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Investing-RFID-Printer">When Should I Invest in an RFID Printer</a></p>
					<p>Determine when to cross the line between manual and automated encoding.</p>
				</li>
				<li class="gpio_devices align_center_for_small_screens">
          <p class="coral_circle coral_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/general-purpose-inputouput-gpio-devices?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=GPIO-Devices">General Purpose Input / Output Devices</a></p>
					<p>Enable additional functionalities using GPIO boxes and other devices for all types of RFID applications.</p>
				</li>
        <li class="break">
          <h1>IF YOU WANT TO TAKE A BREAK...</h1>
          <p>Before heading on to the next topics, feel free to browse our site. Look through some of the products that are frequently mentioned in these posts to get a better feel for the technology.</p>
          <a href="https://www.atlasrfidstore.com/"><img class="click-to-store" src='../wp-content/themes/ambiance-pro/Roadmap/images//Middle-Graphic.png';></a>
        </li>
				<li class="rfid_physics align_center_for_small_screens">
          <p class="gray_circle gray_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-printer-when-should-i-invest?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Investing-RFID-Printer">RFID Physics: How Does Energy Flow in an RFID System</a></p>
					<p>Understand how RF energy flows through an RFID system to gain insight into what can and cannot be accomplished using RFID.</p>
				</li>
				<li class="coupling">
          <p class="gray_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rf-physics?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=RFID-Physics">Operating Principles: Coupling</a></p>
					<p>Discover how different coupling methods can be used to set up an application for ideal communication.</p>
				</li>
				<li class="protocols_standards align_center_for_small_screens">
          <p class="gray_circle gray_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/uhf-rfid-tag-communications-protocols-standards?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Protocols-Standards">UHF RFID Tag Communications: Protocols & Standards</a></p>
					<p>Avoid interference with other communication systems and ensure compliance with regulatory agencies.</p>
				</li>
				<li class="multipath_environments">
          <p class="gray_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-multipath-em-waves?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Multipath">Understanding and Planning for RFID Multipath Environments</a></p>
					<p>Learn how reflections, refractions, and absorption affect an RFID system and learn to overcome null zones.</p>
				</li>
				<li class="short_range_systems">
          <p class="gray_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/create-optimal-short-range-rfid-system?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Short-Range-Systems">How to Create the Optimal Short Range UHF RFID System</a></p>
					<p>Gather tips for getting the exact amount of read range you need, and not a foot more.</p>
				</li>
				<li class="security_measures align_center_for_small_screens">
          <p class="gray_circle gray_circle_left2 center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/uhf-rfid-security-measures?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Security-Measures">UHF RFID Security Measures</a></p>
					<p>Know what makes an RFID tag secure and check out options available to combat threats.</p>
				</li>
				<li class="custom_protocols">
          <p class="gray_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/custom-protocols-interfaces-understanding-benefits?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Custom-Protocols">Custom Protocols and Interfaces: Understanding the Benefits</a></p>
					<p>See which manufacturers add benefits to their hardware that you won't find anywhere else.</p>
				</li>
				<li class="read_range align_center_for_small_screens">
          <p class="green_circle green_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/improve-rfid-read-range?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=6-Factors-Read-Range">6 Factors that Affect RFID Read Range</a></p>
					<p>Find out how these 6 factors affect read range, and take your RFID system to the next level.</p>
				</li>
				<li class="rfid_antenna_cables">
          <p class="green_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-antenna-cables-getting-the-highest-performance-possible?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Antenna-Cable-Performance">RFID Antenna Cables: Getting the Highest Performance Possible</a></p>
					<p>Fight the loss of power between reader and antenna by using the right type of cable.</p>
				</li>
				<li class="high_memory_tags">
          <p class="green_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/high-memory-rfid-tags-and-which-applications-need-them?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=High-Memory-Tags">Which Applications Need high Memory RFID Tags?</a></p>
					<p>Determine if your applications need tags that store excess data or if database association will suffice.</p>
				</li>
				<li class="pitch_yaw_roll align_center_for_small_screens">
          <!--<p class="green_circle green_circle_left center_circle_for_small_screens circle_button"></p>-->
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-orientation-pitch-yaw-roll?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Pitch-Yaw-Roll">Pitch, Yaw, and Roll: Positioning RFID Tags</a></p>
					<p>See how orientiation and angle affect the ability to read RFID tags.</p>
				</li>
				<li class="attaching_tags">
          <p class="green_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/5-ways-to-attach-rfid-tags?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Attaching-RFID-Tags">Five Ways to Attach RFID Tags</a></p>
					<p>Improve read rates by using the correct tag attachemnt method for your application.</p>
				</li>
				<li class="locking_memory">
          <p class="green_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/locking-memory-on-epc-gen-2-rfid-tags?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Locking-Gen-2-Memory">Locking Memory on Gen 2 RFID Tags</a></p>
					<p>Learn about when an RFID tag's memory is locked, when it is not, & how you can protect it with a password.</p>
				</li>
				<li class="field_tagging align_center_for_small_screens">
          <p class="purple_circle purple_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-tag-best-practices?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Field-Tagging">RFID tag Best Practices: 13 Tips for in the Field Tagging</a></p>
					<p>Ensure visibility of assets in the field by following these tagging practices.</p>
				</li>
				<li class="testing_rfid_solutions">
          <p class="purple_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/testing-rfid-solutions?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Testing">The Importance of Testing RFID Solutions</a></p>
					<p>Discover the single biggest key to deploying a seccessful RFID system.</p>
				</li>
				<li class="rfid_challenges">
          <p class="purple_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-challenges-look-options-keep-moving-forward?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Challenges">RFID Challenges: When to Look at Options and When to Keep Moving Forward</a></p>
					<p>Determine when RFID is a good fit for your application and when it is not.</p>
				</li>
				<li class="deploying_rfid align_center_for_small_screens">
          <p class="purple_circle purple_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://rfid.atlasrfidstore.com/twenty-questions-rfid?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Deploying-RFID">Deploying RFID</a></p>
					<p>Read a guide that walks you through, and answers some of, the biggest questions surrounding RFID depolyment.</p>
				</li>
				<li class="rfid_vs_nfc">
          <p class="red_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/rfid-vs-nfc?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=RFID-vs-NFC">RFID vs. NFC</a></p>
					<p>Understand what NFC is, how it can be used, and how it differs from other forms of RFID.</p>
				</li>
				<li class="active_vs_passive">
          <p class="red_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/active-rfid-vs-passive-rfid?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Active-vs-Passive">Active vs. passive RFID: What's the Difference?</a></p>
					<p>Know when Active RFID or Passice RFID is a better fit for your application.</p>
				</li>
				<li class="gps_vs_active_rfid align_center_for_small_screens">
          <p class="red_circle red_circle_right center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/gps-active-rfid-what-are-the-top-differences?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=GPS-vs-Active">GPS vs. Active RFID: What are the Top Differences?</a></p>
					<p>Find out when to use GPS instead of Active RFID as well as when they may be combined to achieve maximum effectiveness.</p>
				</li>
				<li class="bap_rfid_tags">
          <p class="red_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/bap-rfid-tags?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=BAP-RFID-Tags">What Are BAP RFID Tags?</a></p>
					<p>Learn how Battery-Assisted Passive tags can provide more range than traditional passive RFID tags.</p>
				</li>
				<li class="sensor_monitoring">
          <p class="red_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/sensor-monitoring-rfid?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=Sensor-Monitoring">Sensor Monitoring with RFID</a></p>
					<p>Track temperature, humidity, moisture, or movement using specialized RFID tags.</p>
				</li>
				<li class="ibeacon_technology align_center_for_small_screens">
          <p class="red_circle red_circle_left center_circle_for_small_screens circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/ibeacon-technology?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=iBeacon">iBeacon Technology</a></p>
					<p>See how companies are using iBeacon technology around the world to understand their customers.</p>
				</li>
				<li class="internet_of_things">
          <p class="red_circle circle_button"></p>
					<p class="article-title"><a href="http://blog.atlasrfidstore.com/internet-of-things-and-rfid?utm_source=Quick-Start&utm_medium=Link&utm_campaign=Content&utm_content=IOT">A Primer On the Internet of Things and RFID</a></p>
					<p>Discover how connected devices using RFID are creating a movement called The Internet of Things.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="closing-container">
		<div class="closing-paragraph">
			<img class="finish-graphic" src="../wp-content/themes/ambiance-pro/Roadmap/images/FINISH.png";>
      <img class="shadow-graphic" src="../wp-content/themes/ambiance-pro/Roadmap/images/Shadow.png";>
      <p>
				We hope this roadmap helped you gain a good, working knowledge of RFID technology. Quite a few posts are available on our blog, RFID Insider, that unfortunately didn't make this map - so feel free to browse around and see the new posts, news stories, or product-specific posts that are also available. For any questions not answered in this guide or on our blog, please feel free to contact us through our website chat feature, blog comments, email, or by simply giving us a call. Thanks for reading!
			</p>
		</div>
	</div>
	</div>
</div>
</div>
<?php }

genesis();
