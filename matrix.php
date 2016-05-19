<?php

$pics = array("soundofmusic.gif", "batman.gif", "pokemon.gif", "spelling.gif", "andy.gif", "soccer.gif");
	$num = rand(0, count($pics)-1);
	$picUrl = $pics[$num];

$quote = array("This Tastes Good","Don't Waste My Time","Why");
	
$nouns = array("Mood", "Chair", "Light", "Action", "Effects", "Gator", "Bot", "Aggregator", "Algo", "Phone", "Meta", "Stress", "Multi", "Task", "Touch", "Visual", "Video", "Tasker", "Mind", "Viz", "Visual", "Picture", "Pictorial", "Diary", "Worker", "Frame","Strangers", "Robots", "Live", "Lives", "Alive", "Text", "Play", "Ludic", "Reflective", "Temporal","Table", "Think", "Thinker", "Semi", "Auto", "Super", "Surface", "Pad", "Button", "Click", "Thought", "Critical", "Happy", "Food", "Sizer", "Frankenstein", "Meet", "Meat", "Sugar", "Stapler", "Crayon", "Marks", "Godzilla", "Thynk", "Nimble", "Cans", "CHI", "Clippy", "Bandit", "Air", "Box", "Room", "Star", "Trek", "-ly", "Cam", "Cams", "Photo", "Private", "Secure", "Sweep", "Making", "Trouble", "Critical", "Fun", "Design", "Adversarial", "Go", "Slow", "Fast", "Pro", "Cal", "Matrix", "Wave", "Path", "Map", "App", "Lamp", "World", "Inter", "Vocal", "-izer", "Wiki", "Digi", "Digital", "Doc", "Prof", "Kid", "Baby", "Smartphone", "Fav", "Self","Eye", "Maker");  //choose 2

$prelude = array("Envisioning", "Towards", "Reflecting on", "Reflections on", "A Diary Study of", "Empirical Studies of", "Interview Studies on", "A Survey of", "Open Challenges for", "A Case Study of", "An Exploratory Study of", "A Usability Study of", "An Investigation of");

$first_verb = array("Balancing", "Extracting", "Detecting", "Cultivating", "Investigating", "Quantifying", "Crowdsourcing", "Expressing", "Designing For", "Speculative", "Engaging", "Understanding", "Comparing", "Regulating", "Mitigating", "Experimenting with", "Automating", "Inspiring", "Imagining", "Exploring", "Controlling", "Leveraging", "Creating", "Improving", "Optimizing", "Questioning", "Enabling", "Destroying" ,"Manipulating", "Serving", "Coloring", "Drawing", "Distorting", "Saving", "Pushing", "Probing", "Prototyping", "Designing", "Eliciting", "Interpreting", "Materializing", "Supporting", "Publishing", "Predicting", "Displaying", "Assimilating", "Studying", "Participating in", "Favouring", "Enhancing", "Changing", "Constructing", "Evaluating", "Mining", "Modeling", "Teaching", "Advocating for");

$adj = array("Developer", "Community", "Designer", "Machine Learning", "Visual", "User", "International", "Critical Inquiry of", "Student", "Parental", "Cross-Platform", "Data", "Open Source", "Situated", "Interactive", "Representational", "Transnational", "Group", "New Forms of", "Social", "User-Defined", "Urban", "Rural", "Fictional", "Youth", "Facebook's", "Twitter's", "Apple's", "Microsoft's", "Google's", "Undesirable", "Hidden", "Outrageous", "Busy", "Oceanic", "Temporary", "Unseen", "Jubilant", "Electric", "Electronic", "Digital", "Analog", "Emotional", "Educational", "Participatory", "Contextual Inquiry of", "Context Aware", "Public", "Private", "Activist", "3D", "2D", "Real-Time", "Hacker", "Peer", "Lobster", "Lego", "Wooden", "Large", "Small", "Alien", "Nomadic", "Temporary", "Emerging", "Value Sensitive", "Legacy", "Civic", "Fictional", "CHI Authors'", "Dystopian", "Networked", "New", "Touchscreen", "Experimental", "Multi-Faceted", "Automated", "Automatic", "Computer", "Cyber", "Tangible", "Physical", "Novel", "Cross-Cultural", "Family", "Geolocated", "Geotagged");

$topic = array("Affect", "Effects", "Work", "Visions", "Feedback", "Control", "Warnings", "Preferences", "Perceptions", "Influence", "References", "Stress", "Privacy", "Mental Models", "Attitudes", "Input", "Learning", "Lessons", "Guidance","Responses", "Happiness", "Ergonomics", "Representations", "Imagination", "Behavior", "Implications", "Motivation", "Analysis Techniques", "Concerns", "Collaboration", "Collections", "Activities", "Activity", "Behaviours", "Vocabulary", "Politics", "Challenges", "Skills", "Eating", "Sleep", "Egocentricity", "Distortions", "Illusions", "Jubilation", "Celebrations", "Use", "Data Structures", "Drawings", "Sticky Notes", "Guidance", "Strategies","Expertise", "Collaboration", "Gestures", "Personalization", "Comments", "Garbage", "Trash", "Recycling", "Blocks", "Toys", "Models", "Meals", "Monsters", "Aliens", "Logistics", "Control", "Infrastructure", "Rejection", "Archives", "Science", "Citizenship", "Prototypes", "Contributions", "Accessibility", "Management", "Publics", "Methods", "Research", "Design", "Preferences", "Strategies", "Personas", "Scenarios", "Metrics", "Clickstreams", "Making", "Content", "Updates", "Vision", "Printing", "Mesh Models", "Opportunities", "Data", "Wearables", "Tools", "Implications", "Tracking", "Perception");

$connector = array("in", "for", "from", "Surrounding", "through", "in the Case of", "Around", "in the Context of", "via", "of", "as", "by");

$context = array("Security Systems", "Privacy Practices", "Collective Practice", "Machine Aesthetics", "the Real World", "Crowdsourcing", "Everyday Life", "Computer Users", "Smartphone Owners", "Video-Mediated Collaboration", "Client-Side Participation", "Critical Design", "MultiTouch Interfaces", "Tabletop Interaction", "Medical Devices", "Citizen Science", "Data Analysis", "Social Media", "Online Risk", "Email", "Work-Life Balance", "Boundary Practices", "Voice Interfaces", "Wearables", "the Body", "Public Displays", "Games", "Older Adults", "Gender Stereotypes", "the Workplace", "Online Communities", "Computer Mediated Communication", "Online Dating", "Cyberbullying", "Language", "Social Writing", "Online Education", "Digital Fabrication", "3D Printing", "Bio-Sensors", "Robotics", "Industrial Settings", "the HCI Community", "the CHI Community", "the Design Community", "Ubiquitous Computing", "Design Practice", "Studies in the Field", "Lab Studies", "New Design Spaces", "Alternative Designs", "Visualizations", "Urban Spaces", "Rural Spaces", "the Home", "the Car", "the Kitchen", "Public Spaces", "Private Spaces", "Food", "Outer Space", "Star Trek", "Public Transport", "Airplanes", "Infrastructure Repair", "Destruction", "Coffee", "Star Wars", "Clippy", "Museums", "Hyperspace", "Sandbox Environments", "Fondue", "University Classes", "Fashion", "Sports", "Photoshop", "Collaboration", "Wearable Computing", "Wall Interfaces", "Design Fictions", "Digital Narratives", "Virtual Environments", "Digital Games", "News Feeds", "Wikipedia", "Facial Recognition", "Music Performance", "Developing Countries", "Drawing", "Walking", "Running", "System Performance", "Tablets", "Privacy Nudging", "Smart Homes", "History", "Time Travel", "Video Work", "Remote Collaboration", "Mixed-Reality Games", "Microwork", "Mechanical Turk", "Gradudate Student Labs", "Libraries", "Boats", "Public Policy", "Fair Use", "Privacy Concerns", "Broadway Musicals", "Amazon Mechanical Turk", "Food", "Infrastructures", "Tech Entrepreneurs", "ICTD", "Development", "Values in Design", "Research through Design", "Future Identity Technologies", "Field Sites", "the Field", "Traffic Systems", "Facebook", "Design Fiction", "Multi-Year Timespans", "Screens", "Smartphones", "Future Actions", "Policymaking", "Problem-Solving", "Natural Language", "Machine Learning", "Sports Viewing", "Social Media", "Online Sharing Behaviors", "Mobile Sharing Behaviours", "Unsupervised Learning", "Learning", "Security", "3D Printing", "Classrooms", "Ridesharing", "Parenting", "Social Movements", "Smartphone Applications", "Deception", "Data", "Discursive Practice", "Transportation", "Behaviour Change", "Rock Climbing", "Healthcare", "User Interactions", "End User License Agreements");

//now do the work
$title_parts = array_rand($nouns, 2);

//returns array
function rand_output($array){
	$gen = rand(0, count($array)-1);
	return $array[$gen];
}

$rand1 = rand(0,2); // 1/3 chance
$rand2 = rand(0,1); // 1/2 chance
$rand3 = rand(0,4); // 1/5 chance

//choosing the 1st part before the colon
if($rand3 >= 0 && $rand3 < 3){ // topic via topic
	$titleTopic = array_rand($topic, 2);
	$title = $topic[$titleTopic[0]]." ".rand_output($connector)." ".$topic[$titleTopic[1]].":";   
}
else{ //product
	$title = $nouns[$title_parts[0]].$nouns[$title_parts[1]].":"; 
}
//prelude
if($rand1 < 1){
	$prelude_part = rand_output($prelude). " ";
}
else{
	$prelude_part = "";
}
$verb_part = rand_output($first_verb);
if($rand2 == 1){
	$adj_part = rand_output($adj). " ";
}else{
	$adj_part = "";
}
$topic_part = rand_output($topic);
$connector_part = rand_output($connector);
$context_part = rand_output($context);

$full = $title." ".$prelude_part.$verb_part." ".$adj_part.$topic_part." ".$connector_part." ".$context_part;

?>